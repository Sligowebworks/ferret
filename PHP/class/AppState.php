<?php
/*
 * Created on Dec 1, 20059:20:41 PM
 * `~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~
 * CDHP State Database
 * `~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~
 * COPYRIGHT 2005
 * Sligo Computer Services Programmers' Co-op
 * `~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~
 */
 
 class AppState 
 {
 	public $state_array;
 	
 	public function Initialize()
 	{
 		global $_SESSION;
 		global $db;
 		
 		if (isset($_SESSION['AppState']) == false)  
 		{	//set session defaults here
 			$_SESSION['AppState'] = array();
 			//$_SESSION['AppState']['state'] = 'US';
 			
		}
		$_SESSION['AppState']['db'] =& $db;
 			
 	 	$this->state_array =& $_SESSION['AppState'];
 		
 		$this->state_array['PageName'] = 
 			substr( $_SERVER['PHP_SELF'], 
 				1 + strrpos($_SERVER['PHP_SELF'], '/'), 
 					strrpos( $_SERVER['PHP_SELF'], '.') - strrpos($_SERVER['PHP_SELF'], '/') - 1
 					);
 		$this->state_array['ScriptPath'] = $_SERVER['PHP_SELF'];
 		
 		
 		$this->state_array = array_merge($this->state_array, $_GET, $_POST);
 		debug('AppState', $_SESSION['AppState']);
 	}
 	public function &GetAppStateArray()
 	{
 		return $_SESSION['AppState'];
 	}
 	
 }
 
?>