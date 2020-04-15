<?php
/**
 * Created by Merry Roger.
 * Date: 15.04.2020
 */

namespace custom\documents\Tyrion;


use custom\interfaces\DocumentProvider;

class TyrionDocumentProvider implements DocumentProvider
{

    private $tyrion;
    private $parameters = ['base_dir' => '', 'page' => 1, 'xslt' => []];

    public function __construct(TyrionReader $tyrionReader)
    {
        $this->tyrion = $tyrionReader;
    }

    public function load($src, ...$params)
    {
        $param_keys = array_keys($this->parameters);

        if ($params) {
            foreach ($params as $pid => $value) {
                $this->parameters[$param_keys[$pid]] = $value;
            }
        }

        $this->tyrion->loadDocument($src, $this->parameters['base_dir'], $this->parameters['page'], $this->parameters['xslt']);
    }

    public function getContents()
    {
        return $this->tyrion->getContents();
    }

}