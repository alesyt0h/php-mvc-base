<?php

class TestController extends ApplicationController
{
	public function indexAction()
	{
		$this->view->message = "hello from test::index";
		$this->view->pageTitle = "Test page";
	}
	
	public function checkAction()
	{
		echo "hello from test::check";
	}
}
