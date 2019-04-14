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
    public function __construct(string $filePath)
    {
        $records = new csvLoad::returnArray($filePath);

        $record = array ('year' => '1975', 'title' => 'hero', 'win' => 'yes');

        $object = factory\recordFactory::create($record);

        print_r($object);
        echo table::table(rows: 'stuff');

    }
}