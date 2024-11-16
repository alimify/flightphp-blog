<?php


namespace app\records;
use Flight;

class CategoryRecord extends \flight\ActiveRecord
{
    public function __construct($databaseConnection = null)
    {
		$databaseConnection = $databaseConnection ?? Flight::db();
        parent::__construct($databaseConnection, 'categories');
    }
}