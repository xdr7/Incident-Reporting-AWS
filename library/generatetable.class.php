<?php
class GenerateTahle
{
	protected $_con;
	protected $_paging;
	protected $_config;
	
	public function __construct($con, $paging)
	{
		$this->_con = $con;
		$this->_paging = $paging;
	}
	
	/*
	 * $config['pager']['url']
	 * $config['pager']['per_page']
	 * $config['field']['select']
	 */
	
	public function config($config=null)
	{
		$this->_config = $confug;
	}
	
	public function runFTable($table = null)
	{
		$this->_con->executeSQL("SELECT * FROM ".$table);
	}
	
	function generate()
	{
		
	}
	
}
?>