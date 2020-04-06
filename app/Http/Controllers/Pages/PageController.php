<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Menuitem;
use App\Models\Section;
use custom\documents\DocShow;
use Illuminate\Http\Request;

class PageController extends Controller
{
    var $section;

    public function showSections(Request $request, $section = '__root__')
    {
        $this->section = Section::guests()->sectionByName($section)->first();

        if ($this->section != null) {
            $view = $this->section->view;

            $menu_access_group = $this->section->retrieveAccessGroup();

            $menuset = Menuitem::access_Group($menu_access_group)->validItems()->get();

            $menuitem = new Menuitem();
            $menu = $menuitem->buildMenu($menuset);

            $docShow = new DocShow();
            $contents = $docShow->retrieveContents($this->section->template);
            $docShow->__destruct();

            unset($docShow);

            return view($this->section->template, compact([
                'view',
                'menu',
                'contents'
            ]));
        }

        abort(404);
    }


}
