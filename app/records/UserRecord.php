<?php


namespace app\records;
use Flight;


class UserRecord extends \flight\ActiveRecord
{
    public function __construct($databaseConnection = null)
    {
		$databaseConnection = $databaseConnection ?? Flight::db();
        parent::__construct($databaseConnection, 'users');
    }
}