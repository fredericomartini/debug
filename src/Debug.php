<?php
/**
 *
 * @uthor Frederico Martini (fredmalmeida@gmail.com)
 * @date 2016-11-26
 */

namespace Fma;

class Debug
{
    private static $html = <<<HTML
<div style="background: none repeat scroll 0% 0% #FFF;
    box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.24);
    margin: 15px 0px;
    color: rgba(0, 0 ,0 , 0.74);
    padding:5px;">
HTML;

    /**
     * @param $variable to debug
     * @param bool|true $prettyPrint
     * @param bool|false $exit stop execution
     */
    public static function run($variable, $prettyPrint = true, $exit = false)
    {
        if ((PHP_SAPI === 'cli' || PHP_SAPI === 'phpdbg') || $prettyPrint === false) {
            $prettyPrint = false;
        }

        $result = print_r($variable, true);

        $template = $result;
        if ($prettyPrint) {
            $template = static::$html . "<pre><p style='color: #000000;background: #ffcc00;'>$result</pre></div>";
        }

        print_r($template);

        if ($exit) {
            exit;
        }

    }

}
