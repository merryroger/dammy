<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends PageController
{
    public function showNews(Request $request)
    {
        //dd($request->query('nid'));
        return $this->showSections($request, "news");
    }
}
