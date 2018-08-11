<?php include('system/inc.php');

if (isset($_POST['submit'])) {
    $yzm=$_POST['yzm'];
    if(strtolower($yzm)!=strtolower($_SESSION['yzm'])){
        die('<script type="text/javascript">alert("验证码错误请重新输入");window.history.back();</script>');
    }
    null_back($_POST['userid'],'请输入姓名');
    	null_back($_POST['content'],'请输入内容');
    	$data['userid'] = $_POST['userid'];
    	$data['content'] =addslashes($_POST['content']);
    	$data['time'] =date('y-m-d h:i:s',time());

    	$str = arrtoinsert($data);
    		$sql = 'insert into mkcms_book ('.$str[0].') values ('.$str[1].')';
    	if(mysql_query($sql)){

            alert_href('留言成功!', 'book.php');
    }
    else{
    alert_back('注册失败');
    	}

    }
    include('moban/' . $mkcms_bdyun . '/book.php');
    ?>