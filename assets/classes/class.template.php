<?php
/***********************************************
Template Class handling data propagation

***********************************************/
class template
{
	/***********************************************
	Global Variables
	***********************************************/
	var $_TEMPLATE;
	var $error;
	/***********************************************
	Constructor
	***********************************************/
	public function __construct($path, $ext)
	{
	         $this->_TEMPLATE = array();
	         $this->_TEMPLATE['template_location'] = $path;
	         $this->_TEMPLATE['template_ext'] = $ext;
	         $this-> clearError();
	}
	/***********************************************
	Error Handling
	***********************************************/
	function clearError()
	{
	        $this->error = "";
	}

	/***********************************************
	Read In Contents of the file
	***********************************************/
	function read_template_file($filename)
	{
		return file_get_contents($this->_TEMPLATE['template_location'] . "/" . $filename .".". $this->_TEMPLATE['template_ext']);
	}
	/***********************************************
	Process Data of the template
	***********************************************/
	function fill_data($param, $temp_html)
	{
		preg_match_all ("/\[(fill|load|execute|native)-(.*?)\]/", $temp_html, $matches);
		// $param['load_level']++;
		for ($i=0; $i< count($matches[0]); $i++)
		{
			if (isset($param['debug'])) echo $matches[0][$i];
			if (!(strpos($temp_html,$matches[0][$i]===false)))
			{
			      $end=strpos($temp_html,$matches[0][$i]);
			      echo substr($temp_html,0,$end);
			      $temp_html=substr($temp_html,$end,strlen($temp_html)-$end);
			}
			switch ($matches[1][$i])
			{
				 case 'load':
				 	echo $this->load_template($matches[2][$i],$param);
					$temp_html=substr($temp_html,strlen($matches[0][$i]),strlen($temp_html)-strlen($matches[0][$i]));
				 break;
				 case 'fill':
					if(isset($param[$matches[2][$i]]))
				 		echo $param[$matches[2][$i]];
					$temp_html=substr($temp_html,strlen($matches[0][$i]),strlen($temp_html)-strlen($matches[0][$i]));
					break;
				 case 'execute':
					if (strstr($matches[2][$i],'|')!=FALSE)
					{
						
						$parameters=explode("|",$matches[2][$i]);
						$matches[2][$i]=str_replace("|","\|",$matches[2][$i]);
						$command = array_shift($parameters);
						echo $command($parameters,$param);
					} else {
						
						echo $matches[2][$i]($matches[2][$i],$param);
			        }
					$temp_html=substr($temp_html,strlen($matches[0][$i]),strlen($temp_html)-strlen($matches[0][$i]));
				break;
				 case 'native':
					if (strstr($matches[2][$i],'|')!=FALSE)
					{
						
						
						$parameters=explode("|",$matches[2][$i]);
						$matches[2][$i]=str_replace("|","\|",$matches[2][$i]);
						echo $parameters[0]($parameters[1]);
					} else {
						echo $matches[2][$i]($matches[2][$i]);
			                }
					$temp_html=substr($temp_html,strlen($matches[0][$i]),strlen($temp_html)-strlen($matches[0][$i]));
				break;
			}
		}
		// $param['load_level']--;
		echo $temp_html;
	}
	function load_template($temp_link,$param)
	{
		return $this->fill_data($param, $this->read_template_file($temp_link));
	}
}
?>
