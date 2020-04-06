<?php
class IndexController extends Controller
{
    public $view = 'index';
    public $title;

    function __construct()
    {
        parent::__construct();
        $this->title .= ' | Главная';
    } 

	function index($data)
    {
		$products=db::getInstance()->getProductsRange('product',[0,3]);
		if (!$products)
			{
			  echo "Нет доступа к БД";	
			}	
		return 	$products;			
	}
	
	function checkUser($info)
    {
		
		return 	$true;			
	}
}