<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Backpack\PageManager\app\Models\Page;

class PageController extends Controller
{
    public function index($slug, $subs = null)
    {
        if(! $slug) {
            $slug = '/';
        }

        if($subs) {
            $slug = $slug . '/' . $subs;
        }
        
        $page = Page::findBySlug($slug);

        if (! $page)
        {
            abort(404);
        }

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('templates.' . $page->template, $this->data);
    }
}
