<?php
/**
* Article >>>Users Model
*/

class Users extends Illuminate\Database\Eloquent\Model{
	public $timestamps = false;

	/*public static function first(){
		$conn = mysqli_connect("localhost","root","FZ0802ad","5th");
		if (mysqli_connect_errno($conn)) 
		{ 
		    echo "连接 MySQL 失败: " . mysqli_connect_error(); 
		} 
		$sql = 'SELECT user_email,user_registered from `5th_users` LIMIT 0,1';
		$re = mysqli_query($conn,$sql);
		$rows = mysqli_fetch_array($re,MYSQLI_ASSOC);
		mysqli_free_result($re);
		mysqli_close($conn);
		return $rows;
	}*/
}