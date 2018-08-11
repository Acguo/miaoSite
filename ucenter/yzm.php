<?php
@session_start();
$image = imagecreatetruecolor(100, 30); //创建一个100×30的画布
$white = imagecolorallocate($image,255,255,255);//白色
imagefill($image,0,0,$white);//覆盖黑色画布

$session = ""; //空变量 ，存放验证码
for($i=0;$i<4;$i++){
    $size = 6;
    $x = $i*25+mt_rand(5,10);
    $y = mt_rand(5,10);
    $sizi_color = imagecolorallocate($image,mt_rand(80,220),mt_rand(80,220),mt_rand(80,220));
    $char = join("",array_merge(range('a','z'),range('A','Z'),range(0,9)));
    $char = str_shuffle($char);
    $char = substr($char,0,1);
    imagestring($image,$size,$x,$y,$char,$sizi_color);
    $session .= $char ; //把验证码的每一个值赋值给变量
}
$_SESSION['yzm'] = $session; //这个变量的值与用户输入的值相等

for($k=0;$k<200;$k++){
    $rand_color = imagecolorallocate($image,mt_rand(50,200),mt_rand(50,200),mt_rand(50,200));
    imagesetpixel($image,mt_rand(1,99),mt_rand(1,29),$rand_color);
}

for($n=0;$n<5;$n++){
    $line_color = imagecolorallocate($image,mt_rand(80,220),mt_rand(80,220),mt_rand(80,220));
    imageline($image,mt_rand(1,99),mt_rand(1,29),mt_rand(1,99),mt_rand(1,29),$line_color);
}

header('content-type:image/png');//设置文件输出格式
imagepng( $image ); //以png格式输出$image图像
imagedestroy( $image ); //销毁图像
