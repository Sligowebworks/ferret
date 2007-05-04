<?php
 // FUNCTIONS:
 
 function gen_aggregate($prefix, &$state)
 {
 	/* get field list
 	 * for each, determine type
 	 * determine agregation type
 	 * SQL
 	 * 
 	 */
 	 
 	 $survey_page = get_survey_page_name($state['PageName']);
 	 $rs = new RecordSet();
 	 $rs->SetDataConnection($state['db']);
 	 $sql = 'DESCRIBE ' . $survey_page;
 	 $rs->SetSQL($sql);
 	 $rs->Populate();	//var_dump($rs->arr_rows);
 	 
 	 foreach ($rs->arr_rows as $field )
 	 {
 	 	$name = $field['Field'];
 	 	if ($name != 'Survey_Key')
 	 	{
 	 		$arr_names[] = $name;
 	 	}
 	 }
 	 var_dump($arr_names);
 	//return $sql;
 }
  
 function gen_form_save_session()
 {//not needed (need to remove calls)
 	//$str =  gen_form_input( 'checkbox', 'Save_Session', 'Save_Session');
 	//$str = '<a href="login.php">Save Session</a>';
 	//return $str;
 }
 
 function get_survey_page_name($full_name)
 {
 	$len =strlen('pageXX');
 	$start= strpos($full_name, 'page');
 	$len = $start + $len;
 	$name = substr($full_name, 0, $len);
 	return $name;
 }
 
function get_page_num($str)
{
	$num = '';
	for ($i = 1; $i < strlen($str); $i++)
	{
		$char = $str[$i];
		if (is_numeric($char))
		{
			$num .= $char;
		} 
	}
	return $num;
}
 function find_nums($str)
{	$num = '';
	for ($i = 1; $i < strlen($str); $i++)
	{
		$char = $str[$i];
		if (is_numeric($char))
		{
			$num .= $char;
		} elseif ( $char == '_')
		{
			break;
		}
	}
	return $num;
}
 
 function unset_form_values(&$state)
 {
 	foreach ($state as $key => $val)
 	{
 		if (strpos($key, 'Q') !== false)
 		{
 			unset($state[$key]);
 		}
 	}
 }
 
 /* -- Special Purpose Display functions */
  function gen_radio_question($n, $Question, $arr_opts )
 {	/*
 	$str = "
 	<DIV class=\"qb\" name=\"Q$n\">
	<OL>
		<LI>	<P CLASS=\"Question\" name=\"Question\" STYLE=\"margin-bottom: 0in\">$Question</P>
	</OL>";
	
	foreach ($arr_opts as $key => $value)
	{
		$str .= gen_form_input( $key++, 'radio', "Q$n_radio", $value) . "\n\t\t";
	}
	$str .= "</DIV>\n";
	return $str;*/
 }
 function gen_plain_question($question)
 {
 	global $n;
 	global $state;
 	
 	if (strpos($state['PageName'], 'verify') !== false)
 	{
	 	if (strpos(trim($question), $n) == 0)
	 	{
	 		$question = $n . '. ' . $question;
	 	}
 	}
 	
 	$str = '<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">' .
 			$question .
 			'</P>';
 	return $str;
 }
 function gen_question($n, $Question, $body)
 {
 		$str = "\n" . '<DIV class="qb" name="Q' . $n . '">';
 		
 		$str .= '' .
 '		<OL start="' . $n . '">
		<LI>	<P CLASS="Question" name="Question" STYLE="margin-bottom: 0in">' . 
		$Question .
'		</P>
	</OL>';
	
	$str .= $body . "</DIV>\n";
	return $str;
 }
 
 function gen_verification($prefix,& $state)
 {
 	$arr = find_related_form_values($prefix, $state);
 	$str = "<P class=\"Verification\" name=\"verify_$prefix\">\n";
 	if (!is_null($arr))
 	{
		foreach($arr as $entry)
		{	
		 	$str .= "\t\t\t<B>$entry </B><BR />\n";
		}
 	} else
 	{
 		$str .= '<EM>EMPTY</EM>';
 	}
	$str .= "</P>\n";
	return $str;
 }
 function gen_form_submit($value) 
 {
 	global $disable_commit;
 	if ($disable_commit == false)
 	{
 		return gen_custom_form_submit($value, 'submit_btn');
 	}
 }
 function gen_custom_form_submit($value, $style)
 {
 	return "<INPUT class=\"$style\" type=\"submit\" value=\"$value\"/>";
 }
 function gen_option($pre = '' , $type, $name, $value, $suf = '')
 {
 	$str = "<P CLASS=\"Option\" STYLE=\"margin-left: 0.75in;margin-bottom: 0in\">\n";
 	$str .= $pre . gen_form_input($type, $name, $value) . $suf;
	$str .= '</P>';
	return $str;
 }
 function gen_form_input( $type, $name, $value)
 {
 	if ($type == 'radio')
 	{
 		$str = "<INPUT type=\"radio\" name=\"$name\" value=\"$value\">$value</INPUT>";
 	} elseif ($type == 'radio_blank')
 	{
 		$str = "<INPUT type=\"radio\" name=\"$name\" value=\"$value\" />";
 	} elseif ($type == 'text')
 	{
 		$str = "<INPUT type=\"text\" name=\"$name\" value=\"$value\" />";
 	} elseif ($type == 'text_small')
 	{
 		$str = "<INPUT type=\"text\" size=\"5\" name=\"$name\" value=\"$value\" />";
 	} elseif ($type == 'checkbox')
 	{
 		$str = "<INPUT type=\"checkbox\" name=\"$name\" value=\"$value\">$value</INPUT>";
 	} elseif ($type == 'checkbox_blank')
 	{
 		$str = "<INPUT type=\"checkbox\" name=\"$name\" value=\"$value\"></INPUT>";
 	} elseif ($type =='textarea_small')
 	{
 		$str = "<TEXTAREA cols=\"60\" rows=\"2\" name=\"$name\" >$value</TEXTAREA>";
 	} elseif ($type == 'textarea')
 	{
 		$str = "<TEXTAREA cols=\"60\" rows=\"10\" name=\"$name\" >$value</TEXTAREA>";
 	}

	return $str;
 }
 
 function find_all_form_values(&$state)
 {
 	foreach ($state as $key => $val)
 	{
 		if (strpos($key, 'Q') === 0)
 		{
 			$arr[$key] = $val;
 		}
 	}
 	return $arr;
 }
 function find_related_form_values($prefix,& $state)
 {	
 	//var_dump($state);
 	$arr_all_keys = array_keys($state);
 	//var_dump($arr_all_keys);
 	$arr_keys = '';
 	
 	foreach($arr_all_keys as $key)
 	{
 		if (strpos($key, $prefix) !== false)
	 		{
	 			$arr_keys[$key] = $key;
	 		} 			
 	}
 	if (!is_array($arr_keys))
 	{
 		return null;
 	}
 	
 	foreach($arr_keys as $key)
 	{
 		if ( $state[$key] != ''	)
 		//if(array_key_exists($key, $state))
 		{
 			if (	is_array($state[$key]) == false	)	
 			{
 				$arr_return[$key] = $state[$key];
 			} 
 			else 
 			{	echo 'HERE dummy';
 				// may not ever get in here... ;MZD
 				foreach ($state[$key] as $child)
 				{
 					if (	isset($child)	And  $child)
 					{
 						$arr_return[$key] .= $child . ', ';
 					}
 				}
 			}
 		}
 		else
 		{	//echo 'HERE ddummy';
 			continue;
 		}
 	}
 	
 	
 	if (!isset($arr_return))
 	{
 		return null;
 	}
 	//$arr_return = array_reverse($arr_return);
 	return $arr_return;
 }
  function gen_form_tag(&$state)
  {
 	$next = $state['next_page'];
 	$verify = $state['verify_page'];
 	
 	if (strpos($state['PageName'], 'verify') !== false)
 	{	//we are on a verify page, so commit to db.
 		$action = 'commit.php';
 		//$action = $next;
 		$hidden = '';
 	} else {
 		$action = $verify;
 		$hidden= '<INPUT type="hidden" name="survey_page" value="' . $state['PageName'] . '">';
 	}
 	
  	return'<FORM name="data_entry" method="post" action="'. $action  . '">' . $hidden;
  }
  
  
  /*--Display Utility Functions*/
  function gen_select_list($name, $arr)
  {
	  	//$arr is a multi-dimensional array (result set)
	  	$str = '';
	  	
	  	foreach ($arr as $row)
	  	{
	  		if ( is_array($row)	)
	  		{
		  		$value = $row['key'];
		  		$label = $row['name'];
		  		
		  		$str .= '<OPTION value="' . $value  . '">' . $label . '</OPTION>';
	  		} 
	  		else
	  		{
	  			$str .= '<OPTION>' . $row . '</OPTION>';
	  		}
	  	}
	  	
		$str = '<SELECT name="' . $name . '">' . $str;
		$str .= '</SELECT>';
		
		return $str;
	  		//return implode( WrapInCSS($str, '', 'SELECT name="select_name"')); 	// not working
  }
//~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,
  function Linkify($href, $label)
{
	$link = '<a href="%s">%s</a>' ;
	return sprintf($link, $href, $label);
}
//~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,
	//~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,
 	 function CSSTable_with_Header($arr, $CSS, $blnHeader = true)
	 {
	 	/**
	 	 * Second arg is an associative array with values 
	 	 * for -- 'Row', 'Cell', 'TH' (Table Header).
	 	 * Expects an array ($arr) of associative arrays to display.
	 	 * 
	 	 *  unless third arge is false,
	 	 * Uses the keys of the first array to make the table header row.
	 	 * 
	 	 * Prints the table.
	 	 * 
	 	 * sample call:
	 	  CSSTable_with_Header($data, 
				array('Cell' => 'cell', 
					'Row' => 'row', 
					'TH' => 'TableHeader'
					)
				);
		 * 
	 	 */
	 	 if ($blnHeader)
	 	 {
		 	$header = array_keys($arr[0]);
		 	CSSTableRow($header, $CSS['Row'], $CSS['TH']);
	 	 }
	 	array_walk(
	 	 	$arr, 'WalkCSSTableRow', 
	 	 	array( 'Row' => $CSS['Row'], 'Cell' => $CSS['Cell'] )
	 	);
	 	echo 'HERE';
	 	 /*
	 	
	 	$arr = array_merge($header, $arr);
	 	WrapInCSS($arr, 'Table', 'TABLE');
	 	
	 	//debug('arr', $arr);
	 	array_walk_recursive($arr, 'echoCSSTable');
	 	*/
	 }
//~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,
 	 function CSSTable($arr, $CSS, $blnHeader = false)
	 {
	 	/**
	 	 * Second arg is an associative array with values 
	 	 * for -- 'Row', 'Cell', 'TH' (Table Header).
	 	 * Expects an array ($arr) of associative arrays to display.
	 	 * 
	 	 *  unless third arge is false,
	 	 * Uses the keys of the first array to make the table header row.
	 	 * disabled this by accident.  solution for Howard Data entry app was to 
	 	 * default blnHeader to false instead of true.
	 	 * 
	 	 * Prints the table.
	 	 * 
	 	 * sample call:
	 	  CSSTable($data, 
				array('Cell' => 'cell', 
					'Row' => 'row', 
					'TH' => 'TableHeader'
					)
				);
		 * 
	 	 */
	 	 //create the header row
		$header = array_keys($arr[0]);
		//mix in html
	 	 CSSTableRow($header, $CSS['Row'], $CSS['TH']);
	 	
	 	//html-ize the table body
	 	array_walk(
	 	 	$arr, 'WalkCSSTableRow', 
	 	 	array( 'Row' => $CSS['Row'], 'Cell' => $CSS['Cell'] )
	 	);
	 	
	 	//assemble the table
	 	if ($blnHeader)
	 	 {
	 		$arr = array_merge($header, $arr);
	 	 }
	 	WrapInCSS($arr, 'Table', 'TABLE');
	 	
	 	//debug('arr', $arr);
	 	array_walk_recursive($arr, 'echoCSSTable');
	 }
//~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,
	 function CSSTableRow(&$arr, $RowCSS, $CellCSS)
	 {
	 	/**for an array destined to be a row
	 	 * wrap each item in a tag
	 	 * then wrap that result with a row tag
	 	 */
	 	array_walk($arr, 'WalkWrapInCSS', array($CellCSS, 'TD'));
	 	
	 	WrapInCSS($arr,$RowCSS, 'TR');
	 	
	 }
//~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,
	 function WrapInCSS(&$item, $class, $tag)
	 {
	 	/** 
	 	 * wraps $item in a tag of $tag with CSS class of $class
	 	 * 
	 	 * array_merge is used so that this function can be used to wrap entire associative arrays.
	 	 * the begining and end tags are placed in seperate array indices such that
	 	 *  [0] = <tag class="class">
	 	 *  [1] = $item
	 	 *  [2] = </tag>
	 	 */
	 	 if(is_array($item) == false)
	 	 {
	 	 	$item = array($item);
	 	 }
	 	 $item = 
	 		array_merge(
	 			array_merge(
					array("\t<$tag class=\"$class\">\n\t\t"),
					$item
				),
				array("\n\t</$tag>\n")
			);
	 }
//~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,
	 /** 
	  * these "Walk..." functions merely wrap other functions for
	  * calling with array_walk
	  */
	function echoCSSTable($item, $key)
	{
			echo $item;
	}	 
	 function WalkCSSTableRow(&$item, $key, $arr)
	 {
	 	$CellCSS = $arr['Cell'];
	 	$RowCSS = $arr['Row'];
	 	CSSTableRow($item, $RowCSS, $CellCSS);
	 }
	 function WalkWrapInCSS(&$item, $key, $args)
	 {
	 	$class = $args[0];
	 	$block = $args[1];
	 	WrapInCSS($item, $class, $block);
	 }
 
//~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,
 function DebugException($e, $msg = '') 
 {
 	global $debug;
 	if ($debug) {
 	//if (TRUE) {
	 	echo '<pre>';
			echo "$msg\n\n" .
			'Error message: ' . $e->getMessage() . "\n" .
			'Error code: ' . $e->getCode() . "\n" .
			'File and line: ' . $e->getFile() . '(' . $e->getLine() . ") \n" .
			'Trace: ' . $e->getTraceAsString() . "\n" .
			 '</pre>';
 	}
 }
//~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,
  function debug($varname, $var) {
 	global $debug;	//defined in setup.php
 	if ($debug) {
 		if (is_array($var))
 		{
 			echo '<pre>';
			echo $varname . "\n";
 			print_r($var);
 			echo '</pre>';
		} else {
 			printf("%s: [%s]<br><br>", $varname, $var);
 		}
 	}
 }
 //~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,~`~,

?>
