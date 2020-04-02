<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class PageController extends Controller
{
    var $section;

    public function showSections(Request $request, $section = '__root__') {
        $this->section = Section::guests()->sectionByName($section)->first();

        if($this->section != null) {
            $template = $this->section->template;

            return view($this->section->view, compact(['template']));
        }

        abort(404);
    }
}
