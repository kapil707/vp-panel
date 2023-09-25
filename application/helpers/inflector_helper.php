<?php
/**
* Dash
*
* Takes multiple words separated by spaces and dashes them
*
* @access    public
* @param    string
* @return    str
*/
if ( ! function_exists('dash'))
{
    function dash($str)
    {
        return preg_replace('/[\s_]+/', '-', strtolower(trim($str)));
    }
}