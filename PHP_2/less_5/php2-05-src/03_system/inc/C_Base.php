﻿<?php
include_once('inc/Controller.php');

//
// Базовый контроллер сайта.
//
abstract class C_Base extends Controller
{
	protected $title;		// заголовок страницы
    protected $content;		// содержание страницы

	//
	// Конструктор.
	//
	function __construct()
	{		
		$this->title = 'Название сайта';
        $this->content = '';
	}
	
	//
	// Генерация базового шаблонаы
	//	
	public function render()
	{
		$vars = array('title' => $this->title, 'content' => $this->content);	
		$page = $this->Template('theme/v_main.php', $vars);				
		echo $page;
	}	
}
