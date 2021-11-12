<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
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

    public function showVacancy($vacancy_slug)
    {
        $vacancy = Vacancy::with('city', 'category')->where('slug', $vacancy_slug)->first();

        if(! $vacancy) {
            abort(404);
        }

        return view('blocks.vacancy-old', compact('vacancy'));
    }
}
