<?php
class MySQL
{
	protected $_con;
	protected $_sql;
	protected $_result;
	
	public function __construct($con)
	{
		$this->_con = $con;
	}
	
	public function result()
	{
		return $this->_result();
	}
	
	public function executeSQL($sql)
	{
		$this->_sql = $sql;
		$result = mysql_query($this->_sql, $this->_con);
		if(!$result)
		{
			echo mysql_error($this->_con);
			$this->_result = 0;
		}
		else
			$this->_result = $result;
	}
	
	public function getData()
	{
		$data = array();
		while($rec = mysql_fetch_array($this->_result))
			$data[] = $rec;
		return $data;
	}
	
	public function numRecord                                                                                                                                ()
	{
		return mysql_num_rows($this->_result);
	}
	
	public function getDataOne()
	{
		$data = array();
		$data = mysql_fetch_array($this->_result);
		return $data;
	}
	
	public function insert_id()
	{
		return mysql_insert_id();
	}
	
}
?>