<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/reset.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/common.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/thems.css')}}"/>
<script type="text/javascript" src="{{asset('admin/js/jquery-1.8.3.min.js')}}"></script>
<!--框架高度设置-->
<script type="text/javascript">
$(function(){
	//自适应屏幕宽度
	window.onresize=function(){ location=location }; 
	
	var w_height=$(window).height();
	$('.bg_img').css('height',w_height+'px');
	
	var bg_wz=1920-$(window).width();
	$('.bg_img img').css('margin-left','-'+bg_wz/2+'px')
	
	$('.language .lang').click(function(){
		$(this).siblings('.lang_ctn').toggle();
	});
})
</script>
<!--框架高度设置-->
</head>

<body>
<!--登录-->
<div class="login">
	<div class="bg_img"><img src="{{asset('admin/images/login_bg.jpg')}}"/></div>
	<div class="logo">
    	<img src="{{asset('admin/images/logo.png')}}" alt=""/>
    </div>
    <div class="login_m">
    	<form id="form">
    	<ul>
        	<li class="wz">用户名</li>
            <li><input name="admin_name" type="text"></li>
            <li class="wz">密码</li>
            <li><input name="admin_pwd" type="password"></li>
            <li class="wz">语言</li>
            <li class="language">
            	<div class="lang">
                	<span>简体中文</span>
                    <em>&nbsp;</em>
                </div>
                <ul class="lang_ctn">
                	<li>
                    	<span>繁體</span>
                    </li>
                    <li>
                    	<span>ENGLISH</span>
                    </li>
                </ul>
            </li>
            <li class="l_btn">
            	  <a href="javascript:;" class="sub">登陆</a>
            </li>
        </ul>
        </form>
    </div>
</div>
<!--登录-->
</body>
</html>
<script>
$(function(){
    //表单提交
    $(".sub").click(function(){
         $.ajax({
             cache: true,
             type: "POST",
             url:"login",
             data:$('#form').serialize(),// 你的formid
             async: false,
             dataType:'json',
             success:function(data)
             {
               if(data.error==1)
               {
                 alert(data.msg)
                 location.href='index';
               }
               else
               {
                alert(data.msg)
               }
             }
         });
    })
})
</script>

