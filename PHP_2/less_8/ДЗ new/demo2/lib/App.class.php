<?PHP
class App 
{
	public static function Init()
	{
		/*установка часового пояса*/	
		date_default_timezone_set('Europe/Moscow');
		/*Создание подключения к базе данных*/	
		//db::getInstance()->Connect(Config::get(db_user),Config::get(db_pass),Config::get(db_base));
		//при наличии массивов ГЕТ вызов статического метода с параметром из гет
		if (isset($_SERVER)&&isset($_GET))
			self::web(isset($_GET['path']) ? $_GET['path'] : '');		
	}
	
	//http://site.ru/index.php?path=news/edit/5
	protected function web($url)
	{
		/*парсинг строки*/
		$url=explode("/",$url);
		if (!empty($url[0]))
			{
			$_GET['page']=$url[0];//часть имени контроллера
			if (isset($url[1]))
				{
				if (is_numeric($url[1]))
					{
					$_GET[id]=$url[1];
					}
				else
					{
					$_GET['action']=$url[1];	
					}	
				if (isset($url[2]))	
					$_GET['id']=$url[2];
				}				
			}
		else
			{
			$_GET['page']='Index';	
			}	
		//$_GET[page]='Index';	
		/*парсинг строки*/	
		/*поиск контролера*/
		if (isset($_GET['page'])) 
		{
			$controllerName=ucfirst($_GET['page'])."Controller";
		//	echo ($controllerName)."<br>";
			$methodName=isset($_GET['action'])?$_GET['action']:'index';
		//	echo ($methodName)."<br>";
			$controller=new $controllerName(); //создаем контролер класса с указанным именем
		/*поиск контролера*/	
		/*формирование контроллером данных для шаблона*/	
			$data=[
					'contentData'=>$controller->$methodName($_GET),
					'title'=>$controller->title,
					'user'=>$controller->checkUser($_SESSION),//проверка юзера
					'busket'=>$_SESSION//хранит строку с индексами товаров и кол-во
			];
		/*формирование контроллером данных для шаблона*/		
		/*вытаскинвание из контроллера название шаблона и подгрузка twig*/	
			$view=$controller->view.'.tmpl';
			$loader=new Twig_Loader_Filesystem('../view');
			$twig= new Twig_Environment($loader);
			$template=$twig->loadtemplate($view);
			echo $template->render($data);	
		/*вытаскинвание из контроллера название шаблона и подгрузка twig c отрисовкой страницы с посланными данными*/					
		}
		
	}	
}
 ?>
