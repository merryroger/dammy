<?php
/**
 * Uses Tyrion framework family by Ehwaz Raido ( http://www.ehwaz.ru )
 * Created by Merry Roger
 * Date: 03.04.2020
 */

namespace custom\traits;

trait Transcoders
{

    public function getEncoding(): string
    {
        $app = app('config')->get('app');
        return $app['default_encoding'];
    }

    public function recode($data): void
    {
        $encoding = array_shift($data);
        $default_encoding = $this->getEncoding();

        if (!strcasecmp($encoding, $default_encoding) || !strcmp('*', $encoding)) {
            return;
        }

        if (!$data) {
            return;
        }

        foreach ($data as &$buffer) {
            switch ($encoding) {
                case 'windows-1251':
                    $buffer = iconv('cp1251', $encoding, $buffer);
                    break;
                default:
                    $buffer = iconv($encoding, $default_encoding, $buffer);
            }
        }

    }

}