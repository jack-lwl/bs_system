<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>透明化</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link href="/Qh_tpc/public/admin/css/css.css" rel="stylesheet" type="text/css"/>	
    <link href="/Qh_tpc/public/admin/css/table.css" rel="stylesheet" type="text/css"/>     
    
</head>
<body >
<header>
<!-- 头部 -->
<div class="header-BOX">
	<div class="h-logo"><img src="/Qh_tpc/public/admin/image/h-logo.jpg"/></div>
	<div class="h-con">
		<div class="h-title">您当前的位置：<span>????</span></div>
		<ul class="h-nav">
			<li class="options"></li>
			<li class="sms"></li>
			<li class="warning"></li>
		</ul>
	</div>
</div>

</header>

<div class="mainBox">
	<div class="menu">
		<!-- 左侧目录 -->
		
	<div class="leftsidebar_box">
		
		<dl class="home">
			<dt >首页/Home</dt>
			
		</dl>
	
		<dl class="custom">
			<dt >项目/Project</dt>
			
		</dl>
		<dl class="custom-pre-sale">
			<dt >项目售前/pre-sale</dt>
			
		</dl>
		<dl class="custom-Per-list">
			<dt >人员列表/personnel</dt>
			
		</dl>
		<dl class="Pos-management">
			<dt >职位管理/Position</dt>
			
		</dl>
		<dl class="notice">
			<dt >通知/Notice</dt>
		</dl>
		<!-- <dl class="modular">
			<dt >模块/Modular<img src="/Qh_tpc/public/admin/image/select_xl01.png"></dt>
			<dd><a href="#">模块子级1</a></dd>
			<dd><a href="#">模块子级2</a></dd>
			<dd><a href="#">模块子级3</a></dd>
			<dd><a href="#">模块子级4</a></dd>
		</dl> -->
		<dl class="set-up">
			<dt >设置/Set up<img src="/Qh_tpc/public/admin/image/select_xl01.png"></dt>
			<dd class="target"><a href="set-target.html">业绩目标设置</a></dd>
		
		</dl>
	</div>

<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<!-- 左侧目录 jq-->
<script type="text/javascript">

	$('.home dt').click(function(){
		location.href = "index.html"
	});
	$('.custom dt').click(function(){
		location.href = "project.html"
	});
   $('.custom-pre-sale dt').click(function(){
		location.href = "pre-home.html"
	});
   $('.custom-Per-list dt').click(function(){
		location.href = "per-list.html"
	});
     $('.Pos-management dt').click(function(){
		location.href = "Pos-management.html"
	});


</script>


	</div>
	<div class="main" style="padding:10px;">
    <!-- 右侧内容 -->
    <div class="details-con">
    <!-- 项目详情头部信息 -->
        <div class="details-title">
        <p><label>项目名称：</label><span class="s01">沈阳站项目沈阳站项目沈阳站项目沈阳站项目沈阳站项目</span><label>关注程度：</label><span class="s02">&nbsp;</span></p>
        <p><label>项目类型：</label><span>沈阳站项目沈阳站项目</span><label>合同编号：</label><span>沈阳站项目沈阳站项目</span><label>立项日期：</label><span>沈阳站项目沈阳站项目</span></p>
        <p><label>项目编号：</label><span>沈阳站项目沈阳站项目</span><label>合同额度：</label><span>沈阳站项目沈阳站项目</span><label>回款额度：</label><span>沈阳站项目沈阳站项目</span></p>
        <p><label>项目发票：</label><span>沈阳站项目沈阳站项目</span><label>销项发票：</label><span>沈阳站项目沈阳站项目</span><label>项目进度：</label><span>沈阳站项目沈阳站项目</span></p>
        </div>
        <ul class="details-module">
            <li class="Personnel-module">
                <p>人员模块</p>
            </li>
            <li class="Material-module">
                <p>物料模块</p>
            </li>
            <li class="progress-module">
                <p>进度模块</p>
            </li>
            <li class="Invoice-receivable">
                <p>应收发票</p>
            </li>
            <li class="Project-overview">
                <p>项目概况</p>
            </li>
            <li class="Project-budget">
                <p>项目概算</p>
            </li>
            <li class="Project-start">
                <p>项目启动</p>
            </li>
            <li class="project-daily">
                <p>项目日报</p>
            </li>
            <li class="project-accounts">
                <p>项目应收</p>
            </li>
            <li class="Group-chat">
                <p>小组聊天</p>
            </li>
            <li class="Contract-management">
                <p>合同管理</p>
            </li>
            <li class="Project-cost">
                <p>项目费用</p>
            </li>
            <li class="Project-library">
                <p>项目反库</p>
            </li>
            <li class="Project-income">
                <p>项目收入</p>
            </li>

        </ul>
    
    </div>

    </div>
	  
       
</div>
<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<!-- 左侧目录 jq-->
<script type="text/javascript">
$(".leftsidebar_box dt").css({"background-color":"#248dc1"});
$(".leftsidebar_box dt img").attr("src","/Qh_tpc/public/admin/image/select_xl01.png");
$(function(){
    $('.main').css('min-height',$(window).height()-60);
    $(".leftsidebar_box dd").hide();
    $(".leftsidebar_box dt").click(function(){
        $(".leftsidebar_box dt").css({"background-color":"#248dc1"})
        $(".leftsidebar_box dt").css({"color":"white"})
        $(this).css({"background-color": "#0e6390"});
        
        $(this).parent().find('dd').removeClass("menu_chioce");
        $(".leftsidebar_box dt img").attr("src","/Qh_tpc/public/admin/image/select_xl01.png");
        $(this).parent().find('img').attr("src","/Qh_tpc/public/admin/image/select_xl.png");
        $(".menu_chioce").slideUp(); 
        $(this).parent().find('dd').slideToggle();
        $(this).parent().find('dd').addClass("menu_chioce");
    });
});
$(function(){
$('.custom').find('dt').css('background-color','#0e6390')
$('.details-con').css('min-height',$(window).height()-60);

});


</script>
</body>
</html>