<?php

namespace catalog\controllers;
use system\core\Controller;

class MainController extends Controller{

	public function indexAction() {
		$result = $this->model->getSlides();
		$data = [
			'slides' => $result
		];
		$this->view->render('Main Page', $data);
	}

}