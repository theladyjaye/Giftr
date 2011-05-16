<?php
namespace Giftr\System;
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
		require $configuration['views'].'/'.$this->template.".php";
	}
}
?>