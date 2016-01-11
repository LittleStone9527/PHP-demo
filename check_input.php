<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP测试页面</title>
    <link rel="stylesheet" href="normalize.css">
</head>
<body>
<h1>测试输入数据的奇偶</h1>
<br>
<form action="" method="post" style="width: 500px; height: 60px; background-color: #dfddda; margin: 10px auto;
text-align: center; line-height: 60px">
    <input type="text" id="num" name="num">
    <input type="submit" id="submit" name="submit">
</form>
<?php
    if(isset($_POST['num'])){
        $num = $_POST['num'];//获取输入的值

        if(is_numeric($num)){//判断是否是数字或者数字字符串，返回值是true、false；
            //先将获得的（字符串）值转换为数字值
            $num+=0;
            if(is_int($num)){//再判读是否为整形
//                echo '整数';
                if($num % 2 == 0){
                    echo "{$num}是偶数";
                }else{
                    echo "{$num}是奇数";
                }
            }else{
                echo '不是整数';
            }
        }
        else{
            echo '输入的不是数字';
        }

    }
?>

</body>
</html>