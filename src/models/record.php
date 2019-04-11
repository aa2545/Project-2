<?php
/**
 * Created by PhpStorm.
 * User: Lola
 * Date: 4/11/2019
 * Time: 12:44 PM
 */

namespace aa2545\models;


class record
{
    public function __construct(Array $data)
    {
        foreach ($data as $kay => $value) {
            $this->{$key} = $value;

        }
    }
}