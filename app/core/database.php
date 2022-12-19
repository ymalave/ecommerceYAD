<?php 

Class Database
{

	/*
	*
	* This is the database class
	*/
	public  $con;

	public function connect()
	{
		try{
 
			//$string = DB_TYPE . ":host=". DB_HOST .";dbname=". DB_NAME;
			$this->con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$this->con->set_charset('utf8');

		}catch (PDOException $e){

			die($e->getMessage());
		}
	}

	/*public static function getInstance()
	{
		if($this->con){

			return $this->con;
		}

		return $instance = new self();
 	}*/

	/*
	* read from database
	*/
	/*public function read($query, $data = array())
	{

		$stm = $this->con->prepare($query);
		$result = $stm->execute();

		if($result){
			$stm->get_result();
			$data = $stm->fecthAll();
			if(is_array($data)){
				return $data;
			}
			
		}

		return false;
	}

	/*
	* write to database
	*/
	/*public function write($query,$data = array())
	{

		$stm = $this->con->prepare($query);
		$result = $stm->execute($data);

		if($result){
			 
			return true;
 		}

		return false;
	} */
}