<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 08.11.2018
 * Time: 15:31
 */

namespace App;


abstract class Model
{
    public const TABLE = '';

    public $id;

    abstract public function getModelName();

    public static function findAll()
    {
        $db = new Db();


        $sql = 'SELECT * FROM ' . static::TABLE;

        return $db->query(
            $sql,
            [],
            static::class);
    }

}