<?php
/**
 * Created by PhpStorm.
 * User: Lola
 * Date: 4/11/2019
 * Time: 12:11 PM
 */

namespace aa2545\html;


class table
{
    public static function tableTag(String $rows)
    {
        return '<table>' . $rows . '</table>'

    public static function th(String $headings)
    {
        return '<th>' . $headings . '</th>';
    }
    public static function tr(String $columns)
    {
        return '<tr>' . $columns . '</tr>';
    }
    public static function td(String $data)
    {
        return '<td>' . $data . '</td>';
    }

}
