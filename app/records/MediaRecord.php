<?php


namespace app\records;
use Flight;

class MediaRecord extends \flight\ActiveRecord
{
    public function __construct($databaseConnection = null)
    {
		$databaseConnection = $databaseConnection ?? Flight::db();
        parent::__construct($databaseConnection, 'medias');
    }
}