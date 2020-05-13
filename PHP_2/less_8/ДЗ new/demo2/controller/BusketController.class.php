<?php
class BusketController extends Controller
{
    public $view = 'busket';
    public $title;

    function __construct()
    {
        parent::__construct();
        $this->title .= ' | Главная';
    } 

	function show($data)
	{
		If (($_SESSION['colvo'])>0)
		{
			$busketList=explode("/",$_SESSION['busket']);	//получаем массив индексов товаров в корзине
			$busketUniq=array_unique($busketList);//получаем массив индексов товаров в корзине без повторов
			if (count($busketList)==1)
				{
				 $busketUniqList=$busketList[0];
				}
			else
				{
				$busketUniqList=implode(",", $busketUniq);//получаем строку из индексов если товаров больше одного
				}
		
			// выборка уникальных товаров с БД
			$products=db::getInstance()->getProductsColl('product',$busketUniqList);
			if (!$products)
				{
				  echo "Нет доступа к БД";	
				}	
			// создание списка заказа
			$OrderList=[];
			$t=count($busketList);
			$f=count($products);			
			for($i=0;$i<$t;$i++) //цикл перебора всего списка индексов
			{
				$k=$busketList[$i];	//выборка одного индекса			
				for($j=0;$j<$f;$j++) //проверка уникального массива	с товарами
				{		
					$ItemB=$products[$j];
					if ($k==$ItemB['id'])
						{
						$OrderList[]=$ItemB;							
						}	
				}		
			}
		}	
		$_SESSION['ItemList']=$OrderList;
		return 	$OrderList;	// массив товаров с данными о них
	}
		
	function checkUser($info)
	{
		

		return 	$true;			
	}
}