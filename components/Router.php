<?php

class Router
{

	private $routes;  //  массив хранящий маршруты

	public function __construct()
	{
		$routersPath = ROOT.'/config/routes.php';  // путь к роутам
		$this->routes = include($routersPath);     // присваиваем свойство масси
	}

	 /**
    *  Returns request string
    */
	 private function getURI()
	 {
	 	if(!empty($_SERVER['REQUEST_URI']))
	 	{
	 		return trim($_SERVER['REQUEST_URI'], '/');
	 	}
	 }

	 public function run()             // принимает отправения от фронт конроллера
	 {

	 	//  Получить строку запроса 
	 	$uri = $this->getURI();

	 	//  Проверить наличие такого запроса в routes.php
	 	foreach($this->routes as $uriPattern => $path) {

	 		
	 	
        // Сравниваем $uriPattern и $uri
	 		if(preg_match("~$uriPattern~", $uri))
	 		{

            //  Получаем внутренний путь из внешнего согласно правилу 
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
	 	    
	 	    // Определить контроллер, action, параментры
                $segments = explode('/', $internalRoute);
	 	    
	 	    // имя контроллера
               // $controllerName = array_shift($segments) . 'Controller';
        	 	//$controllerName = ucfirst($controllerName);   // первая буква заглавная

                $controllerName = ucfirst(array_shift($segments).'Controller');
                

            // имя метода
                $actionName = 'action'.ucfirst(array_shift($segments));

            //  переводим строку в параметр
                $parameters = $segments;

 	 	    //  Подключить файл класса-контрллера
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                
                if(file_exists($controllerFile))    //Проверяем существование указанного файла
                {
                	include_once($controllerFile);
                } 

            //  Создать объект, вызвать метод (action)
                $controllerObject = new $controllerName;
                    // Вызывает callback-функцию с массивом параметров
                $result = call_user_func_array(array($controllerObject,$actionName), $parameters);
        	 	if($result != null){
        	 		break;
        	 	}

            }
        }
    }
}