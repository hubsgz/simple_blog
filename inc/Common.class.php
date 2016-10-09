<?php

define('ROOT_PATH', str_replace('inc', '', dirname(__FILE__)));

class Common
{
	protected $smarty=null;
	protected $db=null;
	
	/**
	 * 初始化smarty
	 */
	public function initSmarty()
	{
		if ($this->smarty == null) {
			//初始化smarty
			require ROOT_PATH.'inc/smarty/libs/Smarty.class.php';  //包含smarty类文件
			$smarty = new Smarty;   //建立smarty实例对象$smarty
			$smarty->setTemplateDir(ROOT_PATH . "tpl"); //设置模板目录
			$smarty->setCompileDir(ROOT_PATH . "cache/templates_c"); //设置编译目录
			$smarty->setCacheDir(ROOT_PATH . "cache/smarty_cache"); //缓存文件夹
			//$smarty->force_compile = true;
			$smarty->debugging = false;
			$smarty->caching = false;
			$smarty->cache_lifetime = 120;
			$this->smarty = $smarty;
		}
		return $this->smarty;
	}
	
	/**
	 * 初始化数据库
	 */
	public function initDb()
	{
		if ($this->db == null) {
			require ROOT_PATH.'inc/Mysql.class.php';  //包含mysql类文件
			$dbconfig = require ROOT_PATH.'configs/dbconfig.php';  //包含mysql配置文件
			$db = new Mysql($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['port'], $dbconfig['dbname']);   //初始化数据库
			$this->db = $db;
		}
		return $this->db;
	}
	
	/**
	 * 获取字符串参数
	 */
	public function getStrParam($pname, $default='')
	{
		$val = isset($_REQUEST[$pname]) ? trim($_REQUEST[$pname]) : $default;
		return $val;
	}
	/**
	 * 获取整数参数
	 */
	public function getIntParam($pname, $default='')
	{
		$val = isset($_REQUEST[$pname]) ? intval($_REQUEST[$pname]) : $default;
		return $val;
	}
	
}

