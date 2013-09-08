<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Log extends Controller {
		
		
	public function action_index()
	{
		if($_POST){
			echo "siema";
			var_dump($_POST);
		}else{
			echo "dupa";
		}
		
	}
} // End Welcome
