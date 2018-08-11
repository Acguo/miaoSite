<?php include('system/pcon.php');?>
<header class="stui-header__top clearfix top-fixed headroom--not-bottom top-fixed-up headroom--top" id="header-top">
<div class="container">
<div class="row">
<div class="stui-header_bd clearfix">
<div class="stui-header__logo">
<a class="logo" href="<?php echo $mkcms_domain;?>"><img src="<?php echo $mkcms_logo;?>" width="134"></a>
</div>
<div class="stui-header__side">
<ul class="stui-header__user">
<li class="visible-xs"><a class="open-popup" href="javascript:;"><i class="icon iconfont icon-viewgallery"></i></a></li>
</ul>
<div class="stui-header__search">
<form id="ff-search" role="search" action="<?php echo $mkcms_domain;?>seacher.php?wd=<?php echo $q?>" method="get">
<input class="form-control" placeholder="输入影片关键词..." type="text" id="ff-wd" name="wd" required="">
<input type="submit" class="hide">
<button class="submit" id="submit" onclick="$('#ff-search').submit();"><i class="icon iconfont icon-search"></i></button>
</form>
</div>
</div>
<nav class="stui-header__menu type-slide">
<li id="home"><a href="<?php echo $mkcms_domain;?>">首页</a></li>
<?php if($mkcms_dianying==1){?><li class="<?php echo $movie;?>"><a href="<?php echo $mkcms_domain;?>movie.php">  看电影</a></li><?php }?>
<?php if($mkcms_dianshi==1){?><li class="<?php echo $tv;?>"><a href="<?php echo $mkcms_domain;?>tv.php">  追热剧</a><i class="eb-subhead-hot-icon"></i></li><?php }?>
<?php if($mkcms_zongyi==1){?><li class="<?php echo $zy;?>"><a href="<?php echo $mkcms_domain;?>zongyi.php">  综艺</a></li><?php }?>
<?php if($mkcms_dongman==1){?><li class="<?php echo $dm;?>"><a href="<?php echo $mkcms_domain;?>dongman.php">  动漫</a></li><?php }?>
<?php
						$result = mysql_query('select * from mkcms_nav order by id asc');
						while($row = mysql_fetch_array($result)){
						?>
<li class="act<?php echo $row['id'];?>"><a href="<?php echo $row['n_url'];?>" target="_blank"><?php echo $row['n_name'];?></a></li>
<?php } ?>
</nav>
</div>
</div>
</div>
</header>
