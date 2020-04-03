<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Section;
use custom\documents\DocShow;
use Illuminate\Http\Request;

class PageController extends Controller
{
    var $section;

    public function showSections(Request $request, $section = '__root__') {
        $this->section = Section::guests()->sectionByName($section)->first();

        if($this->section != null) {
            $view = $this->section->view;

            $docShow = new DocShow();
            $docShow->loadConfig($this->section->template);
            $docShow->render();
            $contents = $docShow->getContents();
            $docShow->__destruct();

            unset($docShow);

            return view($this->section->template, compact([
                'view',
                'contents'
            ]));
        }

        abort(404);
    }
}
