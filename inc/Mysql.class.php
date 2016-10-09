<?php
class Mysql
{
	private $link_id=null;
	
	/**
	 * 初始化数据连接
	 */
	public function __construct($host, $user, $password, $port, $dbname)
	{
		if ($this->link_id==null) {
			$mysqli = new mysqli($host, $user, $password, $dbname, $port);
			if ($mysqli->connect_errno) {
				echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
				exit;
			}
			
			$mysqli->query("set names utf8");
			
			$this->link_id = $mysqli;
		} 
	}
	
	/**
	 * 执行数据库查询
	 */
	public function query($sql)
	{
		$res = $this->link_id->query($sql);
		if (!$res) {
			echo "Mysql Query Error: (" . $this->link_id->errno . ") " . $this->link_id->error;
			echo "\n<br>" . $sql;
			exit;
		}
		return $res;
	}
	
	/**
	 * 获取多行数据
	 */
	public function getAll($sql)
	{
		$res = $this->query($sql);
		$data = array();
		while ($row = $res->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	
    /**
     * 获取一行数据
     */
    public function getRow($sql)
    {
    	$res = $this->query($sql);
    	return $res->fetch_assoc();
    }
    
    /**
     * 关闭连接
     */
    public function __destruct()
    {
    	$this->link_id->close();
    }
	
}