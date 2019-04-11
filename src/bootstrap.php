<?php
/**
 * Created by PhpStorm.
 * User: Lola
 * Date: 4/11/2019
 * Time: 11:07 AM
 */

namespace aa2545;

use aa2545\file\csvLoad;
use aa2545\html\table;

class bootstrap
{
    public function __contruct(string $filePath)
    {
        $records = new csvLoad::returnArray($filePath);

        print_r(records);
        echo table::table(rows: 'stuff');

    }
}