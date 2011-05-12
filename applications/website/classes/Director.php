<?php

/* 
	Director - This class's primary purpose is to digest $_GET['a'] variables which are fed through .htaccess rewrite, to the 	
	appropriate controller
*/

class Director
{
	public function	__construct($target)
	{
		if ($target == "")
		{
			$this->render(DEFAULT_CONTROLLER);		
		}
		else
		{
			$this->render($target);					
		}
	}
	
	public function __deconstruct()
	{
	}
	
	function render($target)
	{
		// Maintenance Mode
		if(MAINT_MODE)
		{
			include_once('controls/static/maintenance.html');
		}
		else
		{			
  			if($target <> 'login')
  			{
  				include_once('controls/wrapper/header.php');					
  			}
  
  			if(file_exists('controls/' . $target . '/' . $target . '.php'))
  			{
  				include_once('controls/' . $target . '/' . $target . '.php');
  			}
  			else
  			{
  				// controller structure (file) was not found.  
  				// care to display a nice 'not found'?   naaah
  			}
			
			if($target <> 'login')
  			{
  				include_once('controls/wrapper/footer.php');					
  			} 
		}
	}
}

?>