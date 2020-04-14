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

    protected function getSection($name, $include_hidden = false)
    {
        return Section::guests($include_hidden)->sectionByName($name)->first();
    }

    protected function &buildMenuStructures()
    {
        $menu_access_group = $this->section->retrieveAccessGroup(true);
        $menuset = Menuitem::access_Group($menu_access_group)->validItems(true)->get();

        $menuitem = new Menuitem();
        $menu = $menuitem->buildMenu($menuset);
        $menu['_sids_'] = $menuitem->buildHierarchy($menuitem, $this->section->id);

        return $menu;
    }

    protected function retrieveSectionContents()
    {
        $docShow = new DocShow();
        $contents = $docShow->retrieveContents($this->section->template);
        $docShow->__destruct();
        unset($docShow);

        return $contents;
    }

    protected function render()
    {
        if ($this->section != null) {

            $view = $this->section->view;

            /* Menu build operations */
            $menu = $this->buildMenuStructures();
            $menu_tree = $menu['_tree_'];
            $section_ids = $menu['_sids_'];
            unset($menu['_tree_'], $menu['_sids_']);

            /* Section content retrieving */
            $contents = $this->retrieveSectionContents();

            return view($this->section->entry_point, compact([
                'view',
                'menu',
                'menu_tree',
                'contents',
                'section_ids'
            ]));
        }

        abort(404);
    }

}
