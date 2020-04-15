<?php
/**
 * Created by Merry Roger.
 * Date: 15.04.2020
 */

namespace custom\interfaces;

interface DocumentProvider
{

    public function load($src, ...$params);

    public function getContents();

}