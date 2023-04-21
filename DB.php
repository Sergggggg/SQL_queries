<?php 

class DB
{
	private static $dbh;

	private static function createConnect(){

		if(self::$dbh == null){

	        self::$dbh = new PDO('mysql:host=localhost;dbname=avto', 'root', 111, array(
	    
	    		PDO::ATTR_PERSISTENT => true

			));
    	}

    	return self::$dbh;
    }

    public static function createTable($query){

    	$connect = self::createConnect();

    	if($connect->query($query))
    		echo 'Таблица успешно создана';
    }

    public static function selectFromTable($query){

    	$connect = self::createConnect(); 

    	return $connect->query($query);
    }
}