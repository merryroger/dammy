<?php
/**
 * Created by Merry Roger.
 * Date: 03.04.2020
 */

namespace custom\documents;


use custom\documents\Tyrion\TyrionReader;

class DocShow
{

    protected const REL_DIR = '/../../resources';
    protected const MAX_BLOCKS = 5;
    protected const DUMMY_DOC = 'documents/etc/dummy.xml';

    protected $base_dir;
    protected $config;
    protected $contents;

    public function __construct()
    {
        $this->base_dir = realpath(__DIR__ . $this::REL_DIR);
        $this->config = NULL;
        $this->contents = '';
    }

    protected function loadConfig($conf_path = ''): void
    {
        if ($conf_path) {
            $config_path = $this->base_dir . '/' . join('/', preg_split("%\.%", $conf_path)) . '.inc';
        } else {
            $config_path = NULL;
            return;
        }

        if ($config_path && file_exists($config_path)) {
            include($config_path);
        }

    }

    protected function &tyrionRender($page = 1)
    {
        $attr = '';
        $src = $this::DUMMY_DOC;
        $blocks = [];

        $tyrion = new TyrionReader();

        for ($block = 0; $block < $this->config['blocks']; $block++) {
            $tag = ($this->config['tags'][$block]) ? $this->config['tags'][$block] : 'section';
            $attr = ($this->config['attributes'][$block]) ? $this->config['attributes'][$block] : $attr;
            $src = ($this->config['sources'][$block]) ? $this->config['sources'][$block] : $src;
            $src = (!file_exists($this->base_dir . '/' . $src)) ? $this::DUMMY_DOC : $src;
            $xslt = (isset($this->config['xslt']) && isset($this->config['xslt'][$block])) ? $this->config['xslt'][$block] : [];

            $tyrion->loadDocument($src, $this->base_dir, $page, $xslt);

            $blocks[$block] = "<{$tag}{$attr}>{$tyrion->getContents()}</{$tag}>";
        }

        $tyrion->__destruct();

        unset($tyrion);

        return $blocks;
    }

    protected function render($page = 1): void
    {
        $blocks = [];

        if (!$this->config || $this->config['blocks'] < 1) {
            return;
        } elseif ($this->config['blocks'] > $this::MAX_BLOCKS) {
            $this->config['blocks'] = $this::MAX_BLOCKS;
        }

        $blocks = $this->tyrionRender($page);
        $this->contents = join('', $blocks);
        unset($blocks);
    }

    public function retrieveContents($conf_path = '', $page = 1): string
    {
        $this->loadConfig($conf_path);
        $this->render($page);

        return $this->contents;
    }

    public function __destruct()
    {
        unset($this->config, $this->contents);
        // TODO: Implement __destruct() method.
    }
}