<?php
/**
 * Created by PhpStorm.
 * User: Lola
 * Date: 4/11/2019
 * Time: 11:07 AM
 */

namespace aa2545;

use aa2545\file\fileloader;
use aa2545\html\table;
class bootstrap
{
    public function__contruct()
    {
        $file = fopen(filename:"../data/data.csv", mode:"r")

        while(! feof($file))
        {
            $records[] = fgetcsv($file);
        }

        fclose($file);
        echo table::table(rows: 'stuff');
    }
}