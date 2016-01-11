<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP测试页面</title>
    <link rel="stylesheet" href="reset.css">
</head>
<body>
	<?php
/*		echo
		"
			<h1>PHP测试页面</h1>
		";
	$a = 10;

	$b = &$a;//传值
	$c = $a;//传址

	$a++;
	unset($a);//销毁变量名
	echo "\$a= ".$a;
	echo "<br/><hr/>";
	echo "\$b= ".$b;//unset($a);//销毁变量名,echo $b;依然能够输出
	echo "<br/><hr/>";
	echo "\$c= ".$c;//unset($a);//销毁变量名,echo $c;依然能够输出
	*/?>

	<?php
//	常量的定义过程
		/*define('name','James');
		echo name;
		if(!defined('name')){
			define('name','Jhone');
			echo name;
		}*/
	?>
	<?php
		$name = '李白';
		echo "{$name}是我的名字<br>";//变量在字符串前面或中间要用大括号括起来,左大括号与$要紧紧挨着，中间不能出现空格。

	    echo "${name}是我的名字<br>"//左大括号和$可以交换位置。
	?>

</body>
</html>
