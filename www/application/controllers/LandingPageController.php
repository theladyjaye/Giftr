<?php
use Giftr\System;
use Giftr\Api;

class LandingPageController extends System\Controller
{
	protected function initialize_complete(){}
	
	public function index()
	{
		$this->model = new stdClass();
		
		if($this->isLoggedIn())
		{
			$this->model->user_id   = $this->session->currentUser->id;
			$this->model->user_name = $this->session->currentUser->username;
			
			return $this->view('landing_page_logged_in',$this->model);
		}
		
		return $this->view('landing_page', $this->model);
	}	
}
?>
