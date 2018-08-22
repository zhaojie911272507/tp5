<?php /*a:3:{s:75:"G:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\contact\contact.html";i:1534855931;s:73:"G:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\common\header.html";i:1534251106;s:73:"G:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\common\footer.html";i:1533990931;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contacts</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/style/bootstrap/css/bootstrap.min.css">
		<link rel="icon" href="http://127.0.0.1/tp5/public/static/index/images/favicon.ico">
		<link rel="shortcut icon" href="http://127.0.0.1/tp5/public/static/index/images/favicon.ico">
		<link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/style/css/form.css">
		<link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/style/css/style.css">
		<script src="http://127.0.0.1/tp5/public/static/index/style/js/jquery.js"></script>
		<script src="http://127.0.0.1/tp5/public/static/index/style/js/jquery-migrate-1.1.1.js"></script>
		<script src="http://127.0.0.1/tp5/public/static/index/style/js/jquery.equalheights.js"></script>
		<script src="http://127.0.0.1/tp5/public/static/index/style/js/jquery.ui.totop.js"></script>
		<script src="http://127.0.0.1/tp5/public/static/index/style/js/jquery.easing.1.3.js"></script>
		<script src="http://127.0.0.1/tp5/public/static/index/style/js/touchTouch.jquery.js"></script>
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
		<div class="content cont2"><div class="ic"><a href="#" ></a> </div>
			<div class="container_12">
				<div class="grid_12">
					<h2 class="mb0">公司地址</h2>
				</div>
			</div>
		</div>
		<div class="gray_block gb1">
			<div class="container_12">
				<div class="grid_12">
					<div class="map">
						<figure class="">
							<iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
						</figure>
					</div>
				</div>
				<div class="grid_4">
					<h2 class="head1">地址</h2>
					<div class="map">
					<address>
						<dl>
							<dt>公司名： <br>
								<?php echo htmlentities($webinfo['Title']); ?><br>
							</dt>
							<dd><span>免费热线:</span><?php echo htmlentities($webinfo['PhoneNum']); ?></dd>
							<dd><span>电话:</span><?php echo htmlentities($webinfo['PhoneNum']); ?></dd>
							<dd><span>传真:</span><?php echo htmlentities($webinfo['Fax']); ?></dd>
							<dd><span>E-mail:</span> <a href="mailto:<?php echo htmlentities($webinfo['Email']); ?>" style="color:#2673b4; text-decoration:underline;"><?php echo htmlentities($webinfo['Email']); ?></a></dd>
							<dd><span>Skype:</span> <a href="#" class="col3">@skypename</a></dd>
						</dl>
					</address>
					<!-- <p> </p>
					-->
				</div>
				</div>
				<div class="grid_8">
					<h2 class="head1">留言</h2>
					<form id="form" method="post" action="<?php echo url('contact/addbook'); ?>">
						<div class="success_wrapper">
							<div class="success-message">感谢您的留言！</div>
						</div>
						<label for="name">
							<input type="text" id="name" name="name" placeholder="姓名：" data-validate="required:输入用户名" class="required" />
						</label>
						<label for="email">
							<input  type="text" id="email" name="email" placeholder="邮箱："  class="required"/>
						</label>
						<label for="phone">
							<input type="text" id="tel" name="tel" placeholder="手机：" class="required"/>
						</label>
						<label class="message">
							<textarea id="content" name="content" placeholder="留言信息...." class="required"></textarea>
						</label>
						<div>
							<div class="clear"></div>
							<div class="btns">
							<button type="reset" id="res" class="btn" >取消</button>
							<button type="submit" id="send" class="btn" >留言</button>
							
						</div>
						</div>
					</form>
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

$(function(){
        $("form :input.required").each(function(){
            var $required = $("<strong class='high'> *</strong>"); //创建元素
            $(this).parent().append($required); //然后将它追加到文档中
        });
         //文本框失去焦点后
        $('form :input').blur(function(){
             var $parent = $(this).parent();
             $parent.find(".formtips").remove();
             //验证用户名
             if( $(this).is('#name') ){
                    if( this.value=="" || this.value.length < 2 ){
                        var errorMsg = '请输入您的姓名.';
                        $parent.append('<span class="formtips onError">'+errorMsg+'</span>');
                    }else{
                        var okMsg = '输入正确.';
                        $parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
                    }
             }
             //验证邮件
             if( $(this).is('#email') ){
                if( this.value=="" || ( this.value!="" && !/.+@.+\.[a-zA-Z]{2,4}$/.test(this.value) ) ){
                      var errorMsg = '请输入正确的E-Mail地址.';
                      $parent.append('<span class="formtips onError">'+errorMsg+'</span>');
                }else{
                      var okMsg = '输入正确.';
                      $parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
                }
             }
             //电话验证
             if( $(this).is('#tel') ){
                if( this.value=="" || ( this.value!="" && !/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}$/ .test(this.value) ) ){
                      var errorMsg = '请输入正确电话号码.';
                      $parent.append('<span class="formtips onError">'+errorMsg+'</span>');
                }else{
                      var okMsg = '输入正确.';
                      $parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
                }
             }
             //验证内容
             if( $(this).is('#content') ){
                    if( this.value=="" ){
                        var errorMsg = '请输入留言内容.';
                        $parent.append('<span class="formtips onError">'+errorMsg+'</span>');
                    }else{
                        var okMsg = '输入正确.';
                        $parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
                    }
             }
        }).keyup(function(){
           $(this).triggerHandler("blur");
        }).focus(function(){
             $(this).triggerHandler("blur");
        });//end blur
 
        
        //提交，最终验证。
         $('#send').click(function(){
                $("form :input.required").trigger('blur');
                var numError = $('form .onError').length;
                if(numError){
                    return false;
                } 
                alert("感谢您的留言！");
         });
 
        //重置
         $('#res').click(function(){
                $(".formtips").remove(); 
         });
})

  
    </script>
	</body>
</html>