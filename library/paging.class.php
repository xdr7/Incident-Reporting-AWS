<?php
class Paging
{
	protected $_con;
	protected $_config;
	protected $_num_page;
	
	public function __construct($con)
	{
		$this->_con = $con;
	}
	
	/*
	 * $config['url']
	 * $config['per_page']
	 * $config['delimiter'] default &
	 */
	public function config($config=array())
	{
		$this->_config = $config;
		$this->_config['delimiter'] = empty($config['delimiter'])?"&":$this->_config['delimiter']; 
		
	}
	
	public function pagingTable($table=null)
	{
		$this->_con->executeSQL("SELECT * FROM ".$table);
	}
	
	public function pagingSQL($sql=null)
	{
		$this->_con->executeSQL($sql);
	}
	
	public function _getNumPsge()
	{
		$num_record = $this->_con->numRecord();
		return ceil($num_record/$this->_config['per_page']);
	}
	
	public function createLink()
	{
		if($this->_getNumPsge() <= 1) return "";
		$output	= "<div id='pager'>";
		for($i=0; $i<$this->_getNumPsge();$i++)
		{
			$class = ($_GET['halaman'] == $i) ? "cur-page" : "";
			$output	.= "<a class='$class' href='".$this->_config['url'].$this->_config['delimiter']."halaman=$i'>".($i+1)."</a> ";
		}
		$output .= "</div>";
		return $output;
	}
}
?>