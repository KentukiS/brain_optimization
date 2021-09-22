<?php

namespace catalog\controllers;
use system\core\Controller;

class ContactController extends Controller{

	public function indexAction() {
		$this->view->render('contact');
	}

}