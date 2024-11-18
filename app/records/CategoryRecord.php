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

    public function findOrFail($id = null)
    {
        $record = $this->find($id);
        if(empty($record->id))abort(404);
        return $record;
    }

}