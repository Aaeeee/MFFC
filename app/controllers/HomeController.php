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
		Predis::set('key','testvalue_xxxxxxxxxxxxx',30,'s');
		$aaa = Predis::get('key');
		$this->view = View::make('home')->with('users',Users::first())->withTitle('MFFC :-D')->withFuckMe('OK!')->with('redis',$aaa);
		//$this->mail = Mail::to('455640524@qq.com')->from('MotherFucker <ctc030258@qq.com>')->title('Fuck Me!')->content('<h1>Hello~~</h1>');
		//$predis = new Predis();
		//$predis->set_value('key','value',10,'s');

		//echo Predis::test_redis();
	}
}