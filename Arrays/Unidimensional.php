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

use RecursiveIteratorIterator, RecursiveArrayIterator;

class Unidimensional
{
    //--------------------------------------------------------------------------------------------------------
    // Unidimensional -> 5.4.5[added]
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $array
    // @param bool  $preserveKey = true
    //
    //--------------------------------------------------------------------------------------------------------
    public static function do(Array $array, Bool $preserveKey = true) : Array
    {
        return iterator_to_array
        (
            new RecursiveIteratorIterator
            (
                new RecursiveArrayIterator($array)
            ), 
   
            $preserveKey
        );
    }
}
