<?php
use Evercue\System\Configuration;

class Html
{
	public static function render_partial($view, $model)
	{
		$configuration = Configuration::standardConfiguration();
		require $configuration['views'].'/'.$view.".php";
	}
}
?>