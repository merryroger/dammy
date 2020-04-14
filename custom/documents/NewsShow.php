<?php
/**
 * Created by Merry Roger.
 * Date: 14.04.2020
 */

namespace custom\documents;


class NewsShow extends extDocShow
{
    protected const NB_SECTION_TYPE = 'news_body';

    protected $data_directory = '';

    public function setDataDirectory($_dd): void
    {
        $this->data_directory = $_dd;
    }

    public function retrieveNewsContents($conf_path = '', $attributes = [], $page = 1): string
    {
        if (!$attributes) {
            return parent::retrieveContents($conf_path, $page);
        }

        $this->loadConfig($conf_path);
        $section_type = $this::NB_SECTION_TYPE;

        if ($body_sections = array_keys(preg_grep("%{$section_type}%", $this->config['attributes']))) {
            foreach ($body_sections as $hl_key) {
                $this->config['sources'][$hl_key] = $this->data_directory . '/' . $attributes['destination'];
                $this->config['datetime'][$hl_key] = $attributes['created_at'];
            }
        }

        $this->render($page);

        return $this->contents;
    }

}