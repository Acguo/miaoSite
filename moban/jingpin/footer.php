<div class="container">
<div class="row">
<div class="stui-foot clearfix stui-pannel">
<div class="col-pd text-center hidden-xs"></div>
<p class="text-center"><?php echo $mkcms_copyright;?></p>
</div>
</div>
</div>
<ul class="stui-extra clearfix">
<li><a class="backtop" href="javascript:scroll(0,0)" style="display: block;"><i class="icon iconfont icon-less"></i></a></li>
<li class="visible-xs"><a class="open-share" href="javascript:;"><i class="icon iconfont icon-share"></i></a></li>
<li class="hidden-xs"><span><i class="icon iconfont icon-qrcode"></i></span>
<div class="sideslip">
<div class="col-pd">
<img width="150" height="150" src="http://qr.liantu.com/api.php?text=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];?>">
<p class="text-center font-12">扫码用手机访问</p>
</div>
</div>
</li>
<li title="会员中心"><a class="open-share" href="<?php echo $mkcms_domain;?>ucenter"><i class="icon iconfont icon-smile"></i></a></li>
<li><a href="<?php echo $mkcms_domain;?>book.php"><i class="icon iconfont icon-comments"></i></a></li>
</ul>

<div style="display:none;">
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?1b228034eab3f86498adfd4e9d337209";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</div>
</body>
</html>