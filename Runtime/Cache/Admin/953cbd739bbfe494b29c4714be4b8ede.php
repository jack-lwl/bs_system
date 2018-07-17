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
			<dt >财富中心</dt>
			
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
	<div class="main" id="company">
	   
      <div class="branch-1">
		<div class="branch-1Box">
			<div class="b-1-con">
				<div class="b-1-con-title"><span class="b-s01">沈阳分公司</span><span class="b-s02">￥245590,000</span></div>
			</div>
		</div>		
      </div>
      
	
	</div>
</div>

<input type="hidden" id="select_company" value="<?php echo U('Admin/SaleRecord/select_company');?>"/>


<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>

<!-- 左侧目录 jq-->
<script type="text/javascript">
$(".leftsidebar_box dt").css({"background-color":"#4f5051"});
$(".leftsidebar_box dt img").attr("src","/Qh_tpc/public/admin/image/select_xl01.png");
$(function(){
    $('.main').css('min-height',$(window).height()-45);
    $(".leftsidebar_box dd").hide();
    $(".leftsidebar_box dt").click(function(){
        $(".leftsidebar_box dt").css({"background-color":"#4f5051"})
        $(".leftsidebar_box dt").css({"color":"white"})
        $(this).css({"background-color": "#333"});
        
        $(this).parent().find('dd').removeClass("menu_chioce");
        $(".leftsidebar_box dt img").attr("src","/Qh_tpc/public/admin/image/select_xl01.png");
        $(this).parent().find('img').attr("src","/Qh_tpc/public/admin/image/select_xl.png");
        $(".menu_chioce").slideUp(); 
        $(this).parent().find('dd').slideToggle();
        $(this).parent().find('dd').addClass("menu_chioce");
    });
});
$(function(){
$('.custom-pre-sale').find('dt').css('background-color','black')
});

$('.branch-1').click(function(){

  location.href = "pre-sale.html"
});
$('.branch-2').click(function(){

  location.href = "pre-sale.html"
});

$('.branch-3').click(function(){

  location.href = "pre-sale.html"
});

$('.branch-4').click(function(){

  location.href = "pre-sale.html"
});

$('.branch-5').click(function(){

  location.href = "pre-sale.html"
});


// var url=document.getElementById('select_company').value;

// //创建ajax对象
// var xhr=new XMLHttpRequest();
// //设置事件感知ajax变化状态
// xhr.onreadystatechange=function(){
// 	if(xhr.readyState==4){
		
// 		var arr=xhr.responseText;
// 		//alert(arr);
		
// 		var ary = eval('(' + arr + ')')
		
// 		var ar=ary['rows'];
// 		var Level='';
		
// 		for(var i=0;i<ar.length;i++){
// 			var n=i+1;
// 			Level+='<div onclick="com('+n+')" class="branch-'+n+'"><span class="s01">'+ar[i]['c_name']+'</span><span class="s02">'+ar[i]['sum']+'</span></div>';
// 			//Level+='<li><input type="checkbox" class="TTh-in01" value="'+ary[i]['Cuserid']+'" onclick="fuze(this)"/><span>'+ary[i]['user_name']+'</span><span>'+ary[i]['p_name']+'</span></li>';
// 			//Level+='<option value='+ary[i]['str_id']+'>'+ary[i]['str_bureau_name']+'</option>';
// 		}
// 		//alert(11);
// 		//alert(Level);
// 		document.getElementById('company').innerHTML=Level;
				
// 	}
// }

// //创建http请求
// xhr.open('get',url); 

// //设置header信息头，把要传递的数据组织为xml格式
// xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
// //发送http请求
// //var info="n_id=" + val;
// xhr.send();


// function com(obj){
// 	//alert(obj);
// 	location.href = "pre_sale.html?c_id="+obj;
// }

</script>
</body>
</html>