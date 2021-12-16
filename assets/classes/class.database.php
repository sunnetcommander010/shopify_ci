<?php
/***********************************************
Template Class handling data propagation
***********************************************/
class database
{
	/***********************************************
	Global Variables
	***********************************************/
	var $_DATABASE;
	var $error = "";
	var $errno = "";
	var $db_instance;
	var $statement;
	/***********************************************
	Constructor
	***********************************************/
	public function __construct($dbtype,$hostname,$username, $password, $database, $port=3066)
	{
	         $this -> _DATABASE = array();
	         $this -> _DATABASE['hostname'] = $hostname;
	         $this -> _DATABASE['username'] = $username;
	         $this -> _DATABASE['password'] = $password;
	         $this -> _DATABASE['database'] = $database;
			 $this -> _DATABASE['port']     = $port;
			 $this -> _DATABASE['type']		= $dbtype;
			 $error = TRUE;
			 try
			 {
					$this -> db_instance = new PDO("$dbtype:host=$hostname;dbname=$database",$this -> _DATABASE['username'],$this -> _DATABASE['password']);
					$this -> db_instance ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$this-> clearError();
					return TRUE;
			 } catch(PDOException $e) {
					$this->error = $e->getMessage();
					return FALSE;
			 }
	}
	function isConnected()
	{
		if (!$this -> db_instance)
		        return false;
		else
		        return true;
	}
	/***********************************************
	Error Handling
	***********************************************/
	function clearError()
	{
	        $this->error = "";
	        $this->errno = 0;
	}
	function setError()
	{
	        $this->errno = mysql_errno($this -> db_instance);
	        $this->error = mysql_error($this -> db_instance);
	}
	function isError()
	{
		if (!$this->errno)
			return TRUE;
		else
		        return FALSE;
	}
	/***********************************************
	Return Array of results after running query - SELECT ONLY
	***********************************************/
	function getQueryResults($query,$values=array())
	{
		if ($this -> isConnected())
		{
			
			$this -> statement = $this-> db_instance-> prepare($query);
			$this -> statement -> execute($values);
				switch ($this -> statement -> rowCount())
				{
					case 0: return null;
						break;
					case 1: $returnVal = $this -> statement -> fetchAll();
							return $returnVal[0];
					        break;
					default: 
						return $this -> statement -> fetchAll();
					break;
			    }
			
		} else {
			$this -> errno = -1;
			$this -> error = "WARNING: Not Connected to Database.";
			$return_data = -1;
		}
		return $return_data;
	}

	/***********************************************
	Return number of affected rows by last query !SELECT ONLY
	***********************************************/
	function getResultCount()
	{
		if ($this -> isConnected())
		{
		        return $this -> statement -> rowCount();
		} else {
				return -1;
		}
	}
	
	/***********************************************
	Return Array of results after running query - INSERT, DELETE, UPDATE ONLY
	***********************************************/
	function runQuery($query,$values, $getID=FALSE)
	{
		if ($this -> isConnected())
		{
			
			$this -> statement = $this-> db_instance-> prepare($query);
			try
			{
					$this -> statement -> execute($values);
			} catch(PDOException $e) {
				   $this->error = $e->getMessage();
				   echo $e->getMessage();
				   return FALSE;
			}
			if ($getID)
				return  $this-> db_instance -> lastInsertId();

			return TRUE;
		} else {
			$this -> errno = -1;
			$this -> error = "WARNING: Not Connected to Database.";
			return FALSE;
		}
	}


	/***********************************************
	Desctructor
	***********************************************/
	function close()
	{
		$this -> db_instance = null;
	}
}
?>
