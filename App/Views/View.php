<?php

namespace App\Views;

class View 
{
	public function render($tpl, $pageData)
	{
		ob_start();
		include ROOT . $tpl;
		$content = ob_get_clean();
		include('templates/layout.php');
	}
}
