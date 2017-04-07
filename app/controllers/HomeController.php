<?php
/**
* \HomeController
*/
class HomeController extends BaseController{

	public function home(){
		//echo 'HomeController done!';
		//$user = new Users();
		//$user->first();
		//$user = Users::first();
		//require dirname(__FILE__).'/../views/home.php';
		$aaa = Predis::test_redis();
		$this->view = View::make('home')->with('users',Users::first())->withTitle('MFFC :-D')->withFuckMe('OK!')->with('redis',$aaa);
		//$this->mail = Mail::to('455640524@qq.com')->from('MotherFucker <ctc030258@qq.com>')->title('Fuck Me!')->content('<h1>Hello~~</h1>');
		//$predis = new Predis();
		//Predis::set_value('key','value',10,'s');
		//echo Predis::get_value('key');
		//$predis->set_value('key','value',10,'s');

		//echo Predis::test_redis();
	}
}