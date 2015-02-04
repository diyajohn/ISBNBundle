<?php

namespace TestDemo\ISBNBundle\Util;

final class ISBNFormatter
{
    /**
     * Remove - from ISBN number
     * @param $isbn
     * @return mixed
     */
    public static function unformatISBN($isbn)
    {
        return str_replace("-","", $isbn);
    }

    /**
     * Format the ISBN in "x-xxxx-xxxx-x" format
     * @param $isbn
     * @return string
     */
    public static function formatISBN($isbn)
    {
        if(  preg_match( '/^(\d{1})(\d{4})(\d{4})(\d{1})$/', $isbn,  $matches ) )
        {
            $result = $matches[1] . '-' .$matches[2] . '-' . $matches[3] . '-' . $matches[4];
            return $result;
        }
    }
}