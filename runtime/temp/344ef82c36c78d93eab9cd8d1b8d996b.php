<?php /*a:3:{s:77:"G:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\services\services.html";i:1534220112;s:73:"G:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\common\header.html";i:1534251106;s:73:"G:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\common\footer.html";i:1533990931;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Services</title>
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/admin/style/css/pintuer.css">
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/admin/style/css/admin.css">
    <script src="http://127.0.0.1/tp5/public/static/admin/style/js/jquery.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/admin/style/js/pintuer.js"></script>
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/style/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="http://127.0.0.1/tp5/public/static/index/images/favicon.ico">
    <link rel="shortcut icon" href="http://127.0.0.1/tp5/public/static/index/images/favicon.ico">
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/style/css/list.css">
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/style/css/style.css">
    <script src="http://127.0.0.1/tp5/public/static/index/style/js/jquery.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/index/style/js/jquery-migrate-1.1.1.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/index/style/js/jquery.equalheights.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/index/style/js/main.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/index/style/js/jquery.ui.totop.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/index/style/js/jquery.easing.1.3.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/index/style/js/m.js"></script>
    <script>
    $(document).ready(function(){
      $().UItoTop({ easingType: 'easeOutQuart' });
    })
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
      <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        <img src="http://storage.ie6countdown.com/assets/100/http://127.0.0.1/tp5/public/static/index/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
      </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://127.0.0.1/tp5/public/static/index/style/js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="http://127.0.0.1/tp5/public/static/index/style/css/ie.css">
    <![endif]-->
    <!--[if lt IE 10]>
    <link rel="stylesheet" media="screen" href="http://127.0.0.1/tp5/public/static/index/style/css/ie1.css">
    <![endif]-->
  </head>
  <body class="">
<!--==============================header=================================-->
  		<header>
			<div class="container_12">
				<div class="grid_12">
					<h1><a href="<?php echo url('member/login/index'); ?>"><img src="http://127.0.0.1/tp5/public/static/uploads/<?php echo htmlentities($webinfo['Logo']); ?>" alt="Boo House"></a></h1>
					<div class="menu_block">
						<nav id="bt-menu" class="bt-menu">
							<a href="#" class="bt-menu-trigger"><span>Menu</span></a>
							<ul>
								<li class="current bt-icon"><a href="<?php echo url('index/index'); ?>">首页</a></li>
								<li class="bt-icon"><a href="<?php echo url('aboutus/aboutus'); ?>" target="_blank">关于我们</a></li>
								<li class="bt-icon"><a href="<?php echo url('services/services'); ?>">技术服务</a></li>
								<li class="bt-icon"><a href="<?php echo url('project/project'); ?>">项目工程</a></li>
								<li class="bt-icon"><a href="<?php echo url('blog/blog'); ?>">博客新闻</a></li>
								<li class="bt-icon"><a href="<?php echo url('contact/contact'); ?>">联系我们</a></li>
							</ul>
						</nav>
						<!-- <form method="get" action="<?php echo url('search/search'); ?>">
							<div>
								<span class="input-icon">
                                    <input type="text" class="form-control" id="fontawsome-search" placeholder="Search">
                                    <input type="submit" name="keywords" value="搜索">
                                    <i class="glyphicon glyphicon-search circular blue"></i>
                                </span></div>
							</form> -->
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
    
      <div class="container_12">
        <div class="grid_12">
          <h2 class="mb0">Our Services</h2>
        </div>
      </div>
    </div>
    <div class="gray_block gb1">
      <div class="container_12">
        <div class="grid_12">
          <div class="responsive">
            <ul class="a_content">
<!-- 1 -->
            <?php if(is_array($services) || $services instanceof \think\Collection || $services instanceof \think\Paginator): $i = 0; $__LIST__ = $services;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
              <li>
                <div class="card-front">
                  <div class="text2"><?php echo htmlentities($vo['Title']); ?></div>
                  <p><?php echo htmlentities($vo['Summary']); ?></p>
                </div>
                <div class="card-back">
                  <h2><a href="#">Click here</a></h2>
                </div>
                <!-- Content -->
                <div class="all-content">
                  <div class="text2">投资方案</div>
                  <p><?php echo htmlentities($vo['Content']); ?></p>
                </div>
              </li>
             <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
        </div>
      </div>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th width="30%"></th>
          <th width="40%"><?php echo $services; ?></th>
          <th width="30%"></th>
        </tr>
        </table>
    </div>
     
<!--==============================footer=================================-->
   <footer>
      <div class="container_12">
        <div class="grid_12">
          <div class="socials">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google-plus"></a>
          </div>
          <div class="clear"></div>
          <div class="copy">
            BizGroup &copy; 2018 | <a href="#">合作愉快</a> <br> 版权 <a href="#" rel="nofollow">
            </a>
          </div>
        </div>
      </div>
    </footer>
    <script>
    $(document).ready(function(){
      $(".bt-menu-trigger").toggle(
        function(){
          $('.bt-menu').addClass('bt-menu-open');
        },
        function(){
          $('.bt-menu').removeClass('bt-menu-open');
        }
      );
      $('.responsive').on('click', '.close', function(){
        $('.close').remove();
        bgColor = $('.active .card-front').css('background-color');
        $('.responsive').removeClass(effect);
        $('.all-content').hide();
        $('.content li').removeClass('active').show().css({ 
          'border-bottom':'1px solid #2c2c2c',
          'border-left':'1px solid #2c2c2c' 
        });
        $('.card-front, .card-back').show();
        $('.content').css('background-color',bgColor);
      });
    });
    </script>
  </body>
</html>