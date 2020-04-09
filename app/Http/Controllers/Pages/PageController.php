<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Menuitem;
use App\Models\Section;
use custom\documents\DocShow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    var $section;

    public function showSections(Request $request, $section = '__root__')
    {
        $this->section = $this->getSection($section, true);
        return $this->render();
    }

    public function showOffice(Request $request, $subsection = '')
    {
        return $this->showSections($request, "offices.{$subsection}");
    }

    private function getSection($name, $include_hidden = false)
    {
        return Section::guests($include_hidden)->sectionByName($name)->first();
    }

    private function render()
    {
        if ($this->section != null) {

            $view = $this->section->view;
            $section_id = $this->section->id;

            /* Menu operations */
            $menu_access_group = $this->section->retrieveAccessGroup();
            $menuset = Menuitem::access_Group($menu_access_group)->validItems(true)->get();

            $menuitem = new Menuitem();
            $menu = $menuitem->buildMenu($menuset);
            $section_ids = $menuitem->buildHierarchy($menuitem, $section_id);

            /* Section content retrieving */
            $docShow = new DocShow();
            $contents = $docShow->retrieveContents($this->section->template);
            $docShow->__destruct();

            unset($docShow);

            return view($this->section->entry_point, compact([
                'view',
                'menu',
                'contents',
                'section_ids'
            ]));
        }

        abort(404);
    }

}
