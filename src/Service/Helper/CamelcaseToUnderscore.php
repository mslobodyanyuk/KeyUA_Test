<?php
/**
 * Created by PhpStorm.
 * User: maximus
 * Date: 22.07.19
 * Time: 18:18
 */

namespace App\Service\Helper;


class CamelcaseToUnderscore
{
    private static function checkBigSignWord($action)
    {
        $bigSignFound = (bool)preg_match('/(?!^)(?P<big_sign_word>[A-Z]\S*)/', $action, $matches);

        if ($bigSignFound) {
            return $matches['big_sign_word'];
        }

        return false;
    }

    public static function camelCaseTo_($action){
        $bigSignWord = CamelcaseToUnderscore::checkBigSignWord($action);

        if ($bigSignWord) {

            $firstWordLength = strcspn($action, "ABCDEFGHJIJKLMNOPQRSTUVWXYZ");
            $startPos = 0;
            $camelCaseTo_[] = substr($action, $startPos, $firstWordLength);

            while ($bigSignWord) {
                $action = $bigSignWord;
                $length = strlen($action);
                $withoutTitleSign = substr($action, 1, $length);
                $titleSign = substr($action, 0, 1);
                $lengthWithoutTitleSign = strcspn($withoutTitleSign, "ABCDEFGHJIJKLMNOPQRSTUVWXYZ");
                $camelCaseTo_[] = strtolower($titleSign) . substr($action, 1, $lengthWithoutTitleSign);
                $bigSignWord = CamelcaseToUnderscore::checkBigSignWord($action);
            }
            $action = implode("_", $camelCaseTo_);
        }

        return $action;
    }
}