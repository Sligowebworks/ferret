<?php
/*
 * Created on Oct 28, 20058:41:56 AM
 * `~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~
 * CDHP State Database
 * `~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~
 * COPYRIGHT 2005
 * Sligo Computer Services Programmers' Co-op
 * `~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~
 */
 
 class DisplayContainer 
 {
 	public $arr_app_state;
 	public $db;
 	private $DataPageAbort;
 	private $state_abbrev;
 	private $menu_item_key;
 	private $page_title;
 	private $rs_views;
 	private $arr_charts;
 	private $arr_view_names;
 	private $num_views;
 	public $num_charts; //for debug
 	private $state_list;
	private $rs_state_select_list;
 	
 	public function DoIt()
 	{
 		debug('Abort',$this->DataPageAbort);
 		
 		if ($this->DataPageAbort)
 		{
 			$this->DisplayStates();
 			return;
 		}
 		
 		$this->num_views = $this->RetrieveViewNames();
 		debug('numviews', $this->num_views);
 		$this->num_charts = $this->MakeCharts();
 		debug('num_charts', $this->num_charts); 
 		
 		if (isset($this->page_title)) {
 			echo	'<DIV class="ContentHeader">'. $this->page_title . '</DIV>';
 		}
 		
 		return  $this->DisplayCharts();;
 		
 	}
	function DisplayStates()
 	{
 		$this->rs_state_select_list = new RecordSet();
		
		$query = "SELECT State, Long FROM StateAbbrev ORDER BY ID;";
		
		$this->rs_state_select_list->SetSQL($query);
		$this->rs_state_select_list->SetDataConnection($this->db);
		$this->rs_state_select_list->Populate();
		$i=0;
		for($i=0;$i<5;$i++)
		{	
		   echo("<br>");
		}
				/*--------------------------------------------------------------------------------------------------------*/
		$showtype = '';
		$stateList = 'AL-AK-AS-AZ-AR-CA-CO-CT-DE-DC-FL-GA-GU-HI-ID-IL-IN-IA-KS-KY-LA-ME-MD-MH-MA-MI-FM-MN-MS-MO'.
		'-MT-NE-NV-NH-NJ-NM-NY-NC-ND-MP-OH-OK-OR-PA-PR-RI-SC-SD-TN-TX-UT-VT-VA-VI-WA-WV-WI-WY-';
		$stateBaseColor = "FFFFFF";
		$stateActiveButtonColor = "E7BE7B";
		$stateRolloverColor = "C38E00";
		$waterColor = "0A57C1";
		$textColor = "000000";
		$waterTextColor = "FFFFFF";
		$stateResultsPage = "Page3.php%3Fshowtype%3D$showtype%26state%3D";
		$flashURL = "../usmapreg.swf";
		$flashVars = 		"bc=".$stateBaseColor."&ac=".$stateActiveButtonColor."&rc=".$stateRolloverColor."&wc=".$waterColor."&t=".$textColor."&wt=".$waterTextColor."&r=".$stateResultsPage."&s=".$stateList;
		echo '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"'; 		
		echo 'codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0"';
		echo 'width="505" height="323">';
		echo '<param name="WMode" value="Transparent">'; 
  		echo '<param name="movie" value="'.$flashURL.'">';
  		echo '<param name="FlashVars" value="'.$flashVars.'"> ';
  		echo '<param name="quality" value="high">';
  		echo '<embed src="'.$flashURL.'" FlashVars="'.$flashVars.'" quality="high"'; 
		echo 'pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"'; 				echo 'width="505" height="323"';
 		echo 'wmode="transparent"></embed></object>';
								/*--------------------------------------------------------------------------------------------------------*/
		echo("<p>");
		$counter=0;
		foreach ($this->rs_state_select_list->arr_rows as $key => $state)
		{	
			//echo Linkify('page3.php?state='. $state['State'], $state['Long']);
			//echo "<br>";
			$state_list[$counter]=Linkify('page3.php?state='. $state['State'], $state['Long']);
			$counter++;
		}
		
		echo '<table border="0" cellpadding="10px" cellspacing="5px">';
		echo '<tr><td>'.$state_list[0].'</td></tr>';
		for($row=1;$row<=10;$row++)
		{
			echo '<tr>';
			for($column=1;$column<=5;$column++)
			{
				$startpoint=$row+(10*($column-1));
				echo '<td>&nbsp;'.$state_list[$startpoint].'&nbsp;</td>';
				//echo '<td>'.$startpoint.'</td>';
			}	
			echo '</tr>';
		}
		echo '</table>';
		echo '<p>';
 	}
 	
 	private function DisplayCharts()
 	{
 		foreach($this->arr_charts as $index => $chart)
 		{	
 			debug('$this->arr_charts as $index', $index);
 			$chart->Display();
 		}
 		foreach($this->arr_charts as $index => $chart)
 		{
 			$chart->DisplayFootnotes();
 		}
 	}
 	private function MakeCharts()
 	{	
 		$rs = &$this->rs_views;
 		foreach($rs->arr_rows as $index => $row)
 		{
 			 debug("foreach($rs->arr_rows as $index => $row)", $row['view']);
 			 $this->arr_view_names = $row['view'];
 			 
 			 $chart = new Chart();
 			 $chart->SetDataConnection($this->db);
 			 $chart->SetViewName($row['view']);
 			 $chart->SetStateAbbrev($this->state_abbrev);
 			 $chart->SetChartTitle($row['Title']);
 			 debug('state_abbrev', $this->state_abbrev);
 			 debug('$chart->GetViewName()', $chart->GetViewName());
 			 try 
 			 {
 			 	$chart->Populate();
 			 }
 			 catch (Exception $e)
 			 {
 			 	DebugException($e, 'exception in DisplayContainer->MakeCharts()');
 			 }
 			 $this->arr_charts[] = &$chart;
 			 unset($chart);		 
 		}
 		
 		return count($this->arr_charts);
 	}
 	private function RetrieveViewNames()
 	{	
 		if(!is_numeric($this->menu_item_key)) throw new Exception('menu key is not an integer');
 		
 		$key = $this->menu_item_key;
 		$sql = "SELECT [view] = SQLView, sort, Title FROM tblCharts WHERE MenuItemKey = $key ORDER BY Sort;";
 		debug('RetrieveViewNames() SQL' , $sql);
 		
 		$this->rs_views = new RecordSet();
 		$rs = & $this->rs_views;
 		
 		$rs->SetDataConnection($this->db);
 		$rs->SetSQL($sql);
 		try 
 		{
 			$rs->Populate();
 		} 
 		catch (Exception $e) 
 		{
 			debug('sql error', ($rs->sql_error));
 			debug('empty result', $rs->empty_result);
 			DebugException($e);
 			throw $e;
 		}
 		
 		return $rs->num_rows;
 	}

	public function SetAppStateArray(&$arr)
	{	//tries to extract values from array to assign to members
		$this->arr_app_state = $arr;
		if (!is_array($arr))
		{
			throw new Exception('invalid parameter passed to DisplayContainer->SetAppState');
		}
		
		foreach ($arr as $key => $value) 
		{
			switch ($key)
			{
			case 'z':
				$this->SetMenuItemKey($value);
				break;
			case 'state':
				$this->state_abbrev = $value;
				break;
			case 'db':
				$this->db = $value;
				break;
			case 'blnDataPage' :
				$this->DataPageAbort =  ($value == false) ;
				break;
			case 'Title' :
				$this->page_title = $value;
				break;
			}
		}
	}
	public function SetDataConnection(&$db)
	{
		$this->db = $db;
	}
	public function &GetDataConnection()
	{
		return $this->db;
	}
	public function SetMenuItemKey($int)
	{
		$this->menu_item_key = $int;
	}
	public function GetMenuItemKey()
	{
		return $this->menu_item_key;
	}
	public function SetStateAbbrev($abbrev)
	{
		$this->state_abbrev = $abbrev;
	}
	public function GetStateAbbrev()
	{
		return $this->state_abbrev;
	}
	
	public function __construct()
	{
	}
 }
 
?>
