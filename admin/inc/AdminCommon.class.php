<?php
define('ADMIN_ROOT_PATH', str_replace('inc', '', dirname(__FILE__)));
require ADMIN_ROOT_PATH . '../inc/Common.class.php';  //包含公共文件

class AdminCommon extends Common
{
	public function __construct($checkLogin=true)
	{
		session_start();
		if ($checkLogin && !$this->isLogin()) {
			header('Location:login.php');
			exit;
		}
	}
	
	public function initSmarty()
	{
		if ($this->smarty == null) {
			//初始化smarty
			require ROOT_PATH.'inc/smarty/libs/Smarty.class.php';  //包含smarty类文件
			$smarty = new Smarty;   //建立smarty实例对象$smarty
			$smarty->setTemplateDir(ADMIN_ROOT_PATH . "tpl"); //设置模板目录
			$smarty->setCompileDir(ROOT_PATH . "cache/admin/templates_c"); //设置编译目录
			$smarty->setCacheDir(ROOT_PATH . "cache/admin/smarty_cache"); //缓存文件夹
			//$smarty->force_compile = true;
			$smarty->debugging = false;
			$smarty->caching = false;
			$smarty->cache_lifetime = 120;
			$this->smarty = $smarty;
		}
		return $this->smarty;
	}
	
	public function isLogin()
	{
		if ($_SESSION['username']) {
			return true;
		}
		return false;
	}
	
	public function showTips($msg, $tourl='')
	{
		$this->smarty->assign('tip_msg', $msg);
		$this->smarty->assign('tourl', $tourl);
		$this->smarty->display('tip.tpl');
		exit;
	}
}