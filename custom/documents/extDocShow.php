<?php
/**
 * Created by Merry Roger.
 * Date: 14.04.2020
 */

namespace custom\documents;


class extDocShow extends DocShow
{

    protected function provideContents($handlers, &$blocks)
    {
        foreach ($handlers as $handler) {
            $provider = app($handler);
            $bush = $blocks[$handler];

            unset($blocks[$handler]);
            foreach ($bush as $blockName => $blockParams) {
                switch (strtolower($handler)) {
                    case 'tyrion':
                    default:
                        $provider->load($blockParams['src'], $blockParams['base_dir'], $blockParams['page'], $blockParams['xslt']);
                        $blocks[$blockName] = "<{$blockParams['tag']}{$blockParams['attr']}>{$provider->getContents()}</{$blockParams['tag']}>";
                }
            }
        }
    }

    protected function blockRender($page = 1)
    {
        $blocks = [];
        $attr = '';
        $src = $this::DUMMY_DOC;

        for ($block = 0; $block < $this->config['blocks']; $block++) {
            $params = [];
            $params['tag'] = ($this->config['tags'][$block]) ? $this->config['tags'][$block] : 'section';
            $blockName = ($this->config['name'][$block]) ? $this->config['name'][$block] : '';
            $params['attr'] = ($this->config['attributes'][$block]) ? $this->config['attributes'][$block] : $attr;
            $src = ($this->config['sources'][$block]) ? $this->config['sources'][$block] : $src;
            $params['src'] = (file_exists($this->base_dir . '/' . $src)) ? $src : $this::DUMMY_DOC;
            $params['page'] = (isset($this->config['page'][$block])) ? $this->config['page'][$block] : $page;
            $params['xslt'] = (isset($this->config['xslt']) && isset($this->config['xslt'][$block])) ? $this->config['xslt'][$block] : [];
            $params['base_dir'] = $this->base_dir;
            $handler = ($this->config['handler'][$block]) ? $this->config['handler'][$block] : $this::DEF_HANDLER;

            $blocks[$handler][$blockName] = $params;
            unset($params);
        }

        $this->provideContents(array_keys($blocks), $blocks);

        $this->contents = $this->arrayEval($this->config['assembly'], $blocks, '<#\=(\w+)\s+#>');

        unset($blocks);
    }

}