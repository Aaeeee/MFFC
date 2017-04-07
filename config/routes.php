<?php
 
use \NoahBuscher\Macaw\Macaw;

Macaw::get('/home', 'HomeController@home');

Macaw::get('/redisTest', 'TestController@redisTest');

Macaw::get('/fuck',function(){
 	echo 'done!';
});
Macaw::error(function(){
	throw new Exception('路由无匹配项 404 Not Found.');
});
/*Macaw::error_callback = function(){
	throw new Exception('路由无匹配项 404 Not Found.');
};*/

/*Macaw::get('/(:all)', function($fu) {
  echo '未匹配到路由<br>'.$fu;
});*/

Macaw::dispatch();