<?php
/**
 * Created by PhpStorm.
 * User: Lola
 * Date: 4/11/2019
 * Time: 12:02 PM
 */

namespace aa2545\file;


class fileloader
{
    public function__contruct()
    {
    $file = fopen(filename:"../data/data.csv", mode:"r")

    while (! feof($file))
    {
        $records[] = fgetcsv($file);
    }

    fclose($file);
    echo table::table(rows: 'stuff');
    }
}
