<?php
/**
 * User: TheCodeholic
 * Date: 10/11/2020
 * Time: 11:14 AM
 */

namespace app\helpers;


/**
 * Class UtilHelper
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\helpers
 */
class UtilHelper
{
    public static function randomString($n)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $str = '';
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $str .= $characters[$index];
        }

        return $str;
    }
}