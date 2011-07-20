<?php
namespace Evercue\System;
class View
{
	public function __construct($template, $model)
	{
		$this->template = $template;
		$this->model = $model;
	}
	
	public function render()
	{
		$model =& $this->model;
		$configuration = Configuration::standardConfiguration();
		
		require Application::basePath().'/application/system/Html.php';
		require $configuration['views'].'/'.$this->template.".php";
	}
}
?>