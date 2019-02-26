<?php 
function people($n,$m){
	$people=range(1, $n);
	$k=0;
	$arr=[];
	$i=0;
	while (count($people)>1) {
		if (!isset($people[$i])) {
			$people=$arr;
			$arr=[];
			$i=0;
		}
		$k++;
		if ($k=$m) {
			unset($people[$i]);
			$k=0;
		}else{
			$arr[]=$people[$i];
		}
		$i++;
	}
	return $people;
}
var_dump(people(100,33));



function group($arr){
	rsort($arr);
	$array=[
		[array_shift($arr)],
		[array_shift($arr)],
		[array_shift($arr)],
	];
	for ($i=0; $i < count($arr); $i++) { 
		$array[2][]=$arr[$i];
		$sum=array_sum($array[2]);
		if ($sum>array_sum($array[0])) {
			$array=[
				$array[2],
				$array[0],
				$array[1],
			];
		}else if($sum>array_sum($array[1])){
			$array=[
				$array[0],
				$array[2],
				$array[1],
			];
		}
	}
	return $array;
}
var_dump(group([23,43,544,34,23,544,76,45,54]));


function back($ddtime,$bltime){
	$number=count($ddtime);
	$windos=[];
	$wait_time=0;
	for ($i=0; $i < $number; $i++) { 
		if ($number<4) {
			$windos[]=$ddtime[$i]+$bltime[$i];
			continue;
		}
		sort($windos);
		$first_user=array_shift($windos);
		if ($first_user>$ddtime[$i]) {
			$wait_time+=$first_user-$ddtime[$i];
			$newtime=$first_user[$i]+$bltime[$i];
		}else{
			$newtime=$ddtime[$i]+$bltime[$i];
		}
		$windos[]=$newtime;
	}
	return $wait_time/$number;
}
echo back([9.01, 9.10, 9.20, 9.21, 9.22],[0.30, 0.18, 0.22, 0.47, 0.11]);


class db{
	//私有的构造方法
	private function __construct(){
		//连接数据库
		$pdo=new PDO("mysql:host=127.0.0.1;dbname=yii",'root','root');
	}
	//私有的克隆方法 禁止克隆
	private function _clone(){
		//TODO:Implement _clone() method;
	}
	//私有的静态属性   禁止外部调用静态属性
	private static $self=null;
	//一公
	private static function create($sql){

	}
}

?>