<?php
/**
 * Created by PhpStorm.
 * User: kenan
 * Date: 2016/1/3
 * Time: 15:40
 */
//索引数组
$stu = array('tom', 'peter', 'jack', 'james', 'jhone');
echo $stu[0], '<br><hr>';

//关联数组
$stu2 = array('name' => 'tom', 'sex' => 'man', 'age' => '22');
echo $stu2['name'], '<br>';
echo $stu2['sex'], '<br>';
echo $stu2['age'], '<br>';

//$num = array('a', 2=>'b','c','d',6=>'e','f','g');
$num = array(1=>'a', 1=>'b',1=>'c','d');
print_r($num);
?>