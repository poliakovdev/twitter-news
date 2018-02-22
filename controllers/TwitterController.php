<?php

class TwitterController
{
	public function actionNews()
	{
		require_once(ROOT.'/views/twitter/index.php');
		
		return true;
	}
}