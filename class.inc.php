<?php

class RegWiz
{
	
	private $host="localhost"; // Database Host
	private $dbName="techtatva"; // Database Name
	private $dbUser="root";  // Database User
	private $dbpass="kar2905"; // Database Password
	
	protected $con = NULL; // connection object

	protected $table = NULL; // used by child classes for selecting table

	function __construct()
	{
		/* constructor just creates a connection to the database */
		$this->con = mysql_connect($this->host,$this->dbUser,$this->dbpass) or die("Error: Could not connect to database server!!!");
		mysql_select_db($this->dbName,$this->con);
	}

	public function clean($value)
	{
		/* short for mysql_real_escape_string(), can do more here if needed */
		return mysql_real_escape_string($value);
	}

    public function escape($string)
    {
        /* escapes the data being displayed to prevent XSS */
        return htmlentities($string,ENT_QUOTES,'UTF-8');
    }

    protected function query($query)     {
        /* executes the query and returns the object */
        $res = mysql_query($query,$this->con) or die(mysql_error());
        return $res;
    }

    protected function fetch_row($query)
    {
        /* executes the query, fetchs the data and returns a row */
        $res = $this->query($query);
        if ($res)
        {
            return mysql_fetch_row($res);
        }
        else
        {
            return NULL;
        }
    }

}


class Category extends RegWiz
{
	function __construct($catName=NULL)
	{
		
		parent::__construct();
		
	}
	public function getEvents($catId)
	{
		$res=$this->query("SELECT * FROM Event WHERE CID='{$catId}'");
		if($res)
		{
			while($row=mysql_fetch_assoc($res))
		{
			$ret[]=$row;
		}
		return $ret;
		}
		else
		return "error";
	}
	public function getCategories()
	{
		$res=$this->query("SELECT * FROM Category");
		while($row=mysql_fetch_assoc($res))
		{
			$ret[]=$row;
		}
		return $ret;
	}
		
	

}
class Event extends RegWiz
{
	function __construct($catName=NULL)
	{
	
		parent::__construct();
		
	}
	
	public function addToEvent($del,$eventId)
	{
		$res=$this->query("INSERT INTO Event_Del(EID,DelNo) VALUE('{$eventId}','{$del}')");
		if($res)
		return 1;
		else
		return "Error";
	}
	

}

class Delegate extends RegWiz
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function getInfo($reg)
	{
		$this->query("SELECT * FROM student WHERE registration_number={reg}");
	}
	
	public function add($reg,$name,$contact,$email)
	{
		$college="MIT, Manipal";
		$res=$this->query("INSERT INTO Delegate(Name,College,ContactNo,RegdNo,Email) VALUES('{$name}','{$college}','{$contact}','{$reg}','{$email}')");
		if($res)
		return mysql_insert_id();
		else
		return "Error";
	}
	public function get($del)
	{
		$res=$this->query("SELECT * FROM Delegate WHERE DelNo=$del");
		$row=mysql_fetch_assoc($res);
		if($row)
		return $row;
		else
		return "error";
	}
		
}


class Team extends RegWiz
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function addToTeam($del,$teamNo)
	{
		$res=$this->query("SELECT * FROM Team WHERE TID=$teamNo");
		if($res)
		{
			$row=mysql_fetch_assoc($res);
			$teamMembers=explode(',',$row['DelNo']);
			$teamMembers[]=$del;
			$teamMembers=implode(',',$teamMembers);
			$res2=$this->query("UPDATE Team SET DelNo='{$teamMembers}' WHERE TID=$teamNo");
			if($res2)
				return "Successfull";
			else
				return "Error";
		}
		else
		return "Error";
	}
	public function createTeam($del)
	{
		$res=$this->query("INSERT INTO Team(DelNo) VALUES('{$del}')");
		if($res)
			return "Your Team No. :".mysql_insert_id();
		else
			return "Error";
	}
	public function getMembers($teamNo)
	{
		$res=$this->query("SELECT * FROM Team WHERE TID='{$teamNo}'");
		if($res)
		{
			$res=mysql_fetch_assoc($res);
			$ret=explode(',',$res['DelNo']);
		return $ret;	
		}
		else
		return "Team Doesn't Exist";
	}	
	

}

?>
