<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Newsandevent;
use custom\documents\NewsShow;
use Illuminate\Http\Request;

class NewsController extends PageController
{
    protected const SECTION_NAME = 'news';

    private $selected_news = null;
    private $news_total = 0;

    public function showNews(Request $request)
    {
        $news_id = $this->checkNewsId($request->query('nid'));

        $this->section = $this->getSection($this::SECTION_NAME, true);
        $this->selected_news = Newsandevent::newsById($news_id)->first();
        $this->news_total = Newsandevent::newerNews()->count();

        return $this->render();
    }

    protected function retrieveSectionContents()
    {
        $newsShow = new NewsShow();
        $news_attrubutes = [];

        if (!$this->news_total) {
            $template = $this->section->template . '.no_any_news';
        } elseif (!isset($this->selected_news)) {
            $template = $this->section->template . '.wrong_news_selected';
        } else {
            $template = $this->section->template;
            $newsShow->setDataDirectory($this::SECTION_NAME);
            $news_attrubutes = $this->selected_news->getAttributes();
        }

        $contents = $newsShow->retrieveNewsContents($template, $news_attrubutes);

        $newsShow->__destruct();
        unset($newsShow);

        return $contents;
    }

    private function checkNewsId($nid)
    {
        if (!isset($nid))
            return null;

        if (preg_match("%^(\d+)$%U", $nid, $matches)) {
            return +$matches[1];
        }

        return null;
    }

}
