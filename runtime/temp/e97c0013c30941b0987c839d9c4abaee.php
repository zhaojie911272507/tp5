<?php /*a:3:{s:71:"G:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\index\index.html";i:1534144586;s:73:"G:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\common\header.html";i:1534251106;s:73:"G:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\common\footer.html";i:1533990931;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>首页</title>
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/admin/style/css/pintuer.css">
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/admin/style/css/admin.css">
    <script src="http://127.0.0.1/tp5/public/static/admin/style/js/jquery.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/admin/style/js/pintuer.js"></script>
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/style/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="http://127.0.0.1/tp5/public/static/index/images/favicon.ico">
    <link rel="shortcut icon" href="http://127.0.0.1/tp5/public/static/index/images/favicon.ico">
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/style/css/camera.css">
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/style/css/component.css">
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/style/css/style.css">
    <script src="http://127.0.0.1/tp5/public/static/index/style/js/jquery.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/index/style/js/jquery-migrate-1.1.1.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/index/style/js/jquery.equalheights.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/index/style/js/jquery.ui.totop.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/index/style/js/jquery.easing.1.3.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/index/style/js/camera.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/index/style/js/snap.svg-min.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="http://127.0.0.1/tp5/public/static/index/style/js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script>
    $(document).ready(function(){
      jQuery('#camera_wrap').camera({
      loader: false,
      pagination: true ,
      minHeight: '394',
      thumbnails: false,
      height: '40.1875%',
      caption: false,
      navigation: false,
      fx: 'mosaic'
      });
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
  <body class="page1">
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
 
    <div class="slider_wrapper">
      <div id="camera_wrap" class="">
        <?php if(is_array($lbt) || $lbt instanceof \think\Collection || $lbt instanceof \think\Paginator): $i = 0; $__LIST__ = $lbt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div  data-src="http://127.0.0.1/tp5/public/static/uploads/<?php echo htmlentities($vo['Pic']); ?>"></div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
<!--         <div data-src="http://127.0.0.1/tp5/public/static/index/images/slide1.jpg"></div>
        <div data-src="http://127.0.0.1/tp5/public/static/index/images/slide2.jpg"></div> -->
      </div>
    </div>
    <div class="container_12">
      <div class="grid_12">
        <div class="slogan">
          我们的想法让你的业务更加完美。<br>
          <a href="#" class="btn">more</a>
        </div>
      </div>
    </div>
    <div class="container_12">
      <section class="grid" id="grid">
        <a href="<?php echo url('contact/contact'); ?>" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">
          <figure>
            <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,262 0,0 180,0 z"/></svg>
            <figcaption>
            <div class="title">业务咨询</div>
            </figcaption>
          </figure>
         <span>more</span>
        </a>
        <a href="<?php echo url('project/project'); ?>" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">
          <figure>
            <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,262 0,0 180,0 z"/></svg>
            <figcaption>
              <div class="title">项目开发</div>
            </figcaption>
          </figure>
          <span>more</span>
        </a>
        <a href="<?php echo url('services/services'); ?>" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">
          <figure>
            <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,262 0,0 180,0 z"/></svg>
            <figcaption>
            <div class="title">业务分析</div>
            </figcaption>
          </figure>
          <span>more</span>
        </a>
        <a href="<?php echo url('aboutus/aboutus'); ?>" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">
          <figure>
            <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,262 0,0 180,0 z"/></svg>
            <figcaption>
            <div class="title">关于我们</div>
            </figcaption>
          </figure>
          <span>more</span>
        </a>
      </section>
    </div>
<!--==============================Content=================================-->
  
    <div class="content"><div class="ic"><a href="" ></a> - </div>

      <div class="container_12">
        <div class="grid_6">
          <img src="http://127.0.0.1/tp5/public/static/index/images/page1_img1.jpg" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <div class="title1">我们为您服务!</div>
            <p>如果你有业务需求 <span class="col3"><a href="#" rel="dofollow"></a></span>可以选择与我们汇总联系.</p>
            想要了解我们更多 <span class="col3"><a href="#" rel="nofollow">商业服务</a></span> 联系我们.
          </div>
          <div class="clear cl1"></div>
          买家须知：<br>
          1、开发中途不允许更改功能模块内容，否则视为二次开发<br>
          2、本公司以顾客为上，坚持后续的开发系统维护等后续工作。
        </div>
        <div class="grid_3">
          <div class="block1">
            <div class="title">20 <span>年的开发经验</span></div>
            在大中小型项目中不断积累实战经验。为您打造更完美的系统，更加流畅的用户体验。
            <br>
            <a href="#" class="btn bt1">more</a>
          </div>
        </div>
        <div class="grid_3 ver">
          <div class="block1">
            <div class="title">18 <span>合作方案</span></div>
            在这里，你只需提供你的需求，剩下的我们帮您完成。
            <br>
            <a href="#" class="btn bt1">more</a>
          </div>
        </div>
      </div>
    </div>
   <div class="gray_block">
      <div class="container_12">
        <div class="grid_4">
          <div class="block2">
            <time datetime="2014-01-01"><span class="col1">18</span>january</time>
            <div class="">
              <div class="extra_wrapper">
                <div class="title col1"><a href="#">Etiam dui ero laoretsiter golyn</a></div>
              </div>
            </div>
            <div class="clear"></div>
            <p>Vivamus at magna non nunc tristiq oncus. Aliquam nibh ante, egestas id dicttuser</p>
            <a href="#" class="col1">read more</a>
          </div>
        </div>
        <div class="grid_4">
          <div class="block2">
            <time datetime="2014-01-01"><span class="col1">21</span>january</time>
            <div class="">
              <div class="extra_wrapper">
                <div class="title col1"><a href="#">Hom dui erosi laorufeiter milyno</a></div>
              </div>
            </div>
            <div class="clear"></div>
            <p>Non nunc tristique ous. Aliqum nibh ante, egestas id dictumctuser liberoraesnt</p>
            <a href="#" class="col1">read more</a>
          </div>
        </div>
        <div class="grid_4">
          <div class="block2">
            <time datetime="2014-01-01"><span class="col1">12</span>february</time>
            <div class="">
              <div class="extra_wrapper">
                <div class="title col1"><a href="#">Joui eros, laorulberer golyno</a></div>
              </div>
            </div>
            <div class="clear"></div>
            <p>Vivamus at magna non nunc tristique os. Aliquam nibh ante, egestas id dicuser</p>
            <a href="#" class="col1">read more</a>
          </div>
        </div>
      </div>
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
      });
      (function() {
      function init() {
        var speed = 250,
        easing = mina.easeinout;
        [].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
        var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
          pathConfig = {
          from : path.attr( 'd' ),
          to : el.getAttribute( 'data-path-hover' )
          };
        el.addEventListener( 'mouseenter', function() {
          path.animate( { 'path' : pathConfig.to }, speed, easing );
        } );
        el.addEventListener( 'mouseleave', function() {
          path.animate( { 'path' : pathConfig.from }, speed, easing );
        } );
        } );
      }
      init();
      })();
    </script>
  </body>
</html>