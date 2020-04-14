<?php
/**
 * Created by Merry Roger.
 * Date: 14.04.2020
 */

namespace custom\documents;


class extDocShow extends DocShow
{

    protected function render($page = 1): void
    {
        $blocks = [];

        $this->contents = '';
    }

}