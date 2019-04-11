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
    public function returnArray (String $filePath) :array
    {
        $file = fopen($filePath, "r");
        $records = array();
        while (! feof($file))
        {
            $records[] = fgetcsv($file);
        }

        fclose($file);
        return $records;
    }
}
