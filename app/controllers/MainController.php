<?php

namespace app\controllers;

use vendor\core\App;
use app\models\Main;
use R;

class MainController extends AppController {

	// public $layout = 'main';

	public function indexAction()
	{		
		App::$app->getComponents(); 		
		$model = new Main();
		
		R::fancyDebug(TRUE);
		
		$posts = App::$app->cache->get('posts');
		if(!$posts)
		{
			$posts = R::findAll($model->table);
			App::$app->cache->set('posts', $posts, 3600*24);  // default 1h
		}
		
		echo date('Y:m:d H:i:s', time());
		echo '<br>';
		echo date('Y:m:d H:i:s', 1498211326);
		echo '<br>';
		$post = R::findOne($model->table, 'id = 5');
		$meta = R::findOne($model->table, 'id = 2');
		
		$this->setMeta($meta->title, $meta->keywords, $meta->description);
		$seo = $this->meta;

		$this->set(compact('seo', 'posts', 'post'));
	}
	
	public function testAction()
	{
		// $this->layout = false; //отключаем layout
		 $this->layout = 'main';
		 	 
	}

}