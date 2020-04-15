<?php
/**
 * Uses Tyrion framework family by Ehwaz Raido ( http://www.ehwaz.ru )
 * Created by Merry Roger
 * Date: 15.04.2020
 */

namespace custom\traits;

trait Evaluators
{

    public function arrayEval($source, &$variables, $pattern): string
    {
        if (preg_match_all("/{$pattern}/sU", $source, $matches)) {
            $_matches_ = array_combine($matches[0], $matches[1]);
            unset($matches);

            foreach ($_matches_ as $patt => $variable) {
                $source = preg_replace("%{$patt}%", $variables[$variable], $source);
            }
        }

        return $source;
    }

}