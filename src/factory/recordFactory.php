<?php
/**
 * Created by PhpStorm.
 * User: Lola
 * Date: 4/11/2019
 * Time: 12:45 PM
 */

namespace aa2545\factory;
use aa2545\models\record;

class recordFactory
{
    public static function create (Array $data) {
        return new record($data);
    }
}