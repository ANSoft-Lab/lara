<?php

namespace App\Http\Controllers;

use App\Services\Bitrix24Service;

class WidgetsAPIController extends Controller
{
    private $input = null;
    private $token;
    private $tokenByClient = [];
    private $clientByToken = [];
    private $allowedMethods = ['auth', 'ping', 'lead'];
    private $clients = [1001, 1002, 1003];

    function __construct()
    {
        $this->dummyTokens();
        $this->token = $this->getBearerToken();
        $input = file_get_contents("php://input");
        if($input)
        {
            try
            {
                $this->input = json_decode($input, 1, 512, JSON_THROW_ON_ERROR);
            }
            catch(\Exception $e)
            {
                $this->invalidResponse(1, ['msg' => 'Invalid params']);
                exit;
            }
        }
    }

    public function route($method = '')
    {
        if($method == '')
        {
            return $this->usage();
        }

        if($method == 'auth')
        {
            return $this->dummyAuth();
        }

        if(!$this->isValidToken())
        {
            header('HTTP/1.0 401 Unauthorized');
            return $this->invalidResponse(1, ['msg' => 'Invalid token '.$this->token]);
        }

        if(in_array($method, $this->allowedMethods))
        {
            return $this->$method();
        }
    }

    function usage()
    {
        $ret = ['msg' => 'Use auth first to get token'];
        $this->validResponse($ret);
    }

    function ping()
    {
        $ret = ['msg' => 'API is online, token is valid', 'server_time' => date('Y-m-d H:i:s')];
        $this->validResponse($ret);
    }

    function auth()
    {
        // dummyAuth() is used
    }

    function dummyAuth()
    {
        if(!isset($this->input['login']) || !isset($this->input['password']))
        {
            return $this->invalidResponse(1, ['msg' => 'Use JSON request {"login": "YOUR_ID", "password": "..."}']);
        }

        if($this->input['password'] !== 'z73yR3uhy73tr')
        {
            return $this->invalidResponse(1, ['msg' => 'Invalid login or password']);
        }

        if(!in_array($this->input['login'], $this->clients))
        {
            return $this->invalidResponse(1, ['msg' => 'API for client '.$this->input['login'].' is not allowed. Ask your manager.']);
        }

        return $this->validResponse(['token' => $this->tokenByClient[$this->input['login']]]);
    }

    function lead()
    {
        $b24 = new Bitrix24Service();
        if(!isset($this->input['fullname']) || !isset($this->input['phone']))
        {
            return $this->invalidResponse(1, ['msg' => 'Params fullname and phone are required']);
        }

        $order = [
            'wid' => intval($this->clientByToken[$this->token]),
            'fullName' => $this->input['fullname'],
            'phone' => $this->input['phone'],
            'downPayment' => $this->input['downPayment'] ?? '',
            'creditAmount' => $this->input['creditAmount'] ?? '',
            'creditTerm' => $this->input['creditTerm'] ?? '',
            'issueDate' => $this->input['issueDate'] ?? '',
        ];

        $b24->sendLead($order);

        return $this->validResponse(['msg' => 'Lead sent']);
    }

    function getAuthorizationHeader()
    {
        $headers = null;
        if (isset($_SERVER['Authorization']))
        {
            $headers = trim($_SERVER["Authorization"]);
        }
        elseif (isset($_SERVER['HTTP_AUTHORIZATION'])) //Nginx or fast CGI
        {
            $headers = trim($_SERVER["HTTP_AUTHORIZATION"]);
        }
        elseif (function_exists('apache_request_headers'))
        {
            $requestHeaders = apache_request_headers();
            // Server-side fix for bug in old Android versions (a nice side-effect of this fix means we don't care about capitalization for Authorization)
            $requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));
            if (isset($requestHeaders['Authorization']))
            {
                $headers = trim($requestHeaders['Authorization']);
            }
        }
        return $headers;
    }

    function getBearerToken()
    {
        $headers = $this->getAuthorizationHeader();

        if (!empty($headers))
        {
            if (preg_match('/Bearer\s(\S+)/', $headers, $matches))
            {
                return $matches[1];
            }
        }
        return null;
    }

    function isValidToken()
    {
        return isset($this->clientByToken[$this->token]);
    }

    function dummyTokens()
    {
        $clients = $this->clients;
        for($i = 0; $i < count($clients); $i++)
        {
            $this->tokenByClient[$clients[$i]] = md5($clients[$i]);
            $this->clientByToken[md5($clients[$i])] = $clients[$i];
        }
    }

    function validResponse($ret)
    {
        $ret['err'] = 0;
        $this->response($ret);
    }

    function invalidResponse($err, $ret)
    {
        $ret['err'] = $err;
        $this->response($ret);
    }

    function response($ret)
    {
        header('Content-Type: application/json');
        echo json_encode($ret, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
        exit;
    }
}

