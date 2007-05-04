<?php
/*
 * Created on Oct 10, 2005
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 class RecordSet 
 {
 	private $db;
 	private $sql;
 	private $result;
 	
 	public $arr_cols;
 	public $arr_rows;
 	public $num_rows;
 	public $num_cols;
 	public $sql_error;	//bool
 	public $empty_result;	//bool
 	public $err_msg;
 	public $new_id;	//last insert statement ID
 	 	
 	/* -- Methods -- */
 	public function Populate()
 	{
 		debug('SQL', $this->sql);
 		try
 		{
 			$this->UnsafePopulate();
 		} 
 		catch (Exception $e) 
 		{
 			DebugException($e, $this->sql);
 		}
 	}
 	public function UnsafePopulate()
 	{	
 		try 
 		{
 			$this->ExecuteSQL($this->sql);
 		}
 		catch (Exception $e) 
 		{
 			throw $e;
 		}
 	}
 	private function ExecuteSQL ($sql) 
 	{
 		$this->empty_result = true;
 		$this->sql_error = false;
 	
 		if (! (@get_resource_type($this->db) === 'mysql link persistent' OR @get_resource_type($this->db) === 'mysql link') ) 
 		{
 			$msg = "invalid database connection";
 			throw new Exception($msg);
 		}
 		if ($sql === '') 
 		{
 			$msg = "no querystring supplied";
 			throw new Exception($msg);
 		}
 		try
 		{
 			$this->result = mysql_query($sql, $this->db);
 			if ($this->result === false)
			{
				$msg = 'Query failed: ' . mysql_error();
				throw new Exception($msg);
			}
 		} 
 		catch (Exception $e)
 		{
 			$this->sql_error = true;
 			$this->err_msg = $e->getMessage();
 			throw $e;
 		}
 		
		if (@get_resource_type($this->result) == 'mysql result') // @ to quiet error when no result returned for valid sql.
		{
			$this->ParseResult();	
		} elseif ($this->result === true)
		{
			$this->new_id = mysql_insert_id($this->db);
			$this->empty_result = true;
		}
 		
 		return true;
 	}
 	private function ParseResult()
 	{	// parse the result and put into arrays for easy access

 		//alias members
 		$arr_rows =& $this->arr_rows;
 		$arr_cols =& $this->arr_cols;
 		$result =& $this->result;
 		
 		while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
 		{
 			$arr_rows[] = $row;
 			if (empty($arr_cols))	//do only once
 			{ 		//get field names
 				$arr_cols = array_keys($row);
 			}
 		}
 		
 		$this->num_rows = mysql_num_rows($result);
 		$this->num_cols = count($arr_cols);
 		if ($this->num_rows > 0)
 		{
 			$this->empty_result = false;
 		}
 	}
 	/*-- Properties --*/
 	public function SetDataConnection (&$db) 
 	{
 		$this->db =& $db;
 	}
 	public function &GetDataConnection () 
 	{
 		return $this->db;
 	}
	public function SetSQL ($sql) 
	{
		$this->sql = str_replace(';', '', $sql);
	}
	public function GetSQL () 
	{	
		return $this->sql;
	}
	public function Clear()
	{
		if (is_object($this->result))
		{
			mysql_free_result($this->result);
		}
		
		$this->sql = '';
		$this->arr_cols = array();
	 	$this->arr_rows = array();
	 	$this->num_rows = null;
	 	$this->num_cols = null;
	 	$this->sql_error = false;
	 	$this->err_msg = null;
	}
	public function __construct()
	{
 	}
 }
?>
