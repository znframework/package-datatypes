<?php namespace ZN\DataTypes\Arrays;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

use ZN\Helper;

class Sort
{
    /**
     * Array Order
     * 
     * @param array  $array
     * @param string $type  = NULL      - options[desc|asc|asckey|desckey|insens|natural|reverse|userassoc|userkey|user|random]
     * @param string $flags = 'regular' - options[regular|numeric|string|localeString]
     * 
     * @return array
     */
    public static function order(Array $array, $type = NULL, $flags = 'regular') : Array
    {
        $flags = Helper::toConstant($flags, 'SORT_');

        switch($type)
        {
            case 'desc'         : arsort($array, $flags);   break;
            case 'asc'          : asort($array, $flags);    break;
            case 'asckey'       : ksort($array, $flags);    break;
            case 'desckey'      : krsort($array, $flags);   break;
            case 'insens'       : natcasesort($array);      break;
            case 'natural'      : natsort($array);          break;
            case 'reverse'      : rsort($array, $flags);    break;
            case 'random'       : shuffle($array);          break;
            default             : sort($array, $flags);
        }

        return $array;
    }

    /**
     * Normal Order
     * 
     * @param array  $array
     * @param string $flags = 'regular' - options[regular|numeric|string|localeString]
     * 
     * @return array
     */
    public static function normal(Array $array, String $flag = 'regular') : Array
    {
        return self::order($array, 'sort', $flag);
    }

    /**
     * Descending Order
     * 
     * @param array  $array
     * @param string $flags = 'regular' - options[regular|numeric|string|localeString]
     * 
     * @return array
     */
    public static function descending(Array $array, String $flag = 'regular') : Array
    {
        return self::order($array, 'desc', $flag);
    }

    /**
     * Ascending Order
     * 
     * @param array  $array
     * @param string $flags = 'regular' - options[regular|numeric|string|localeString]
     * 
     * @return array
     */
    public static function ascending(Array $array, String $flag = 'regular') : Array
    {
        return self::order($array, 'asc', $flag);
    }

    /**
     * Ascending Key Order
     * 
     * @param array  $array
     * @param string $flags = 'regular' - options[regular|numeric|string|localeString]
     * 
     * @return array
     */
    public static function ascendingKey(Array $array, String $flag = 'regular') : Array
    {
        return self::order($array, 'asckey', $flag);
    }

    /**
     * Descending Key Order
     * 
     * @param array  $array
     * @param string $flags = 'regular' - options[regular|numeric|string|localeString]
     * 
     * @return array
     */
    public static function descendingKey(Array $array, String $flag = 'regular') : Array
    {
        return self::order($array, 'desckey', $flag);
    }

    /**
     * Reverse
     * 
     * @param array  $array
     * @param string $flags = 'regular' - options[regular|numeric|string|localeString]
     * 
     * @return array
     */
    public static function reverse(Array $array, String $flag = 'regular') : Array
    {
        return self::order($array, 'reverse', $flag);
    }

    /**
     * Insensitive Order
     * 
     * @param array  $array
     * @param string $flags = 'regular' - options[regular|numeric|string|localeString]
     * 
     * @return array
     */
    public static function insensitive(Array $array) : Array
    {
        return self::order($array, 'insens');
    }

    /**
     * Natural Order
     * 
     * @param array  $array
     * 
     * @return array
     */
    public static function natural(Array $array) : Array
    {
        return self::order($array, 'natural');
    }

    /**
     * Shuffle Order
     * 
     * @param array  $array
     * 
     * @return array
     */
    public static function shuffle(Array $array) : Array
    {
        return self::order($array, 'random');
    }
}
