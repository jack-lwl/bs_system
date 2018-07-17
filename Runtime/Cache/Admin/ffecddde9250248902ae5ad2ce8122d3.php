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
		<div class="h-title">您当前的位置：
		<?php if($titleName){ ?>
		<span><?php echo $titleName;?></span>
		<?php }else{ ?>
		<span>????</span>
		<?php } ?></div>
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
	
		<dl class="results-situation">
			<dt >业绩情况</dt>
			
		</dl>
		<dl class="receivable-situation">
			<dt >回款情况</dt>
			
		</dl>
		<dl class="project-situation">
			<dt >项目情况</dt>
		</dl>
		
		
		<dl class="department-situation">
			<dt >部门情况</dt>
		</dl>
		<!--<dl class="pro-details">
			<dt >项目列表</dt>
		</dl>
		<dl class="pre_sale_list">
			<dt >售前列表</dt>
		</dl>-->
		
		<dl class="set-up">
			<dt >其它设置<img src="/Qh_tpc/public/admin/image/select_xl01.png"></dt>
			<dd class="target"><a href="set_target.html">业绩目标</a></dd>
			<dd class="custom-Per-list"><a href="per_list.html">人员列表</a></dd>
			<dd class="Pos-management"><a href="Pos_management.html">职位管理</a></dd>
		
		</dl>
	</div>

<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<!-- 左侧目录 jq-->
<script type="text/javascript">

	$('.home dt').click(function(){
		location.href = "index.html"
	});
	$('.results-situation dt').click(function(){
		location.href = "results_project.html"
	});
	$('.receivable-situation dt').click(function(){
		//location.href = "receivable.html"
		location.href = "project.html"
	});
	$('.project-situation dt').click(function(){
		location.href = "receivable_project.html"
	});
   $('.custom-pre-sale dt').click(function(){
		location.href = "pre_sale_chart.html"
	});
     $('.department-situation dt').click(function(){
		location.href = "department.html"
	});
  	$('.pro-details dt').click(function(){
		location.href = "project.html"
	});
    $('.pre_sale_list dt').click(function(){
		location.href = "pre_sale_list.html"
	});
	


</script>


	</div>
	<div class="main">
     <div class="cost-con-box">
         <div class="cost-con-top">
            <div class="rctl-title">公司费用情况</div>
            <div id="cost-total" style="height:220px;margin-top:8px;"></div>
        </div>
        <div class="cost-con-bottom">
            <div class="cost-con-bottom-left">
               <div class="rctr-title">各公司费用情况</div>
                <ul>
                  <li>
                      <strong class="str01">北京分公司</strong>
                      <p>￥6000,000</p>
                  </li>
                  <li>
                      <strong class="str02">上海分公司</strong>
                      <p>￥6000,000</p>
                  </li>
                  <li>
                      <strong class="str02">广州分公司</strong>
                      <p>￥6000,000</p>
                  </li>
                  <li>
                      <strong class="str04">沈阳分公司</strong>
                      <p>￥6000,000</p>
                  </li>
                  <li>
                      <strong class="str05">大连分公司</strong>
                      <p>￥6000,000</p>
                  </li>
                  
              </ul>
            </div>
            <div class="cost-con-bottom-right">
               <div class="rctl-title">各公司每月费用情况</div>
               <div id="cost-each" style="height:310px;margin-top:8px;"></div>
            </div>
        </div>  
                 
     </div>
	</div>
</div>

<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/Qh_tpc/public/admin/js/highcharts.js"></script>

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
$('.department-situation').find('dt').css('background-color','#333')
});
// 公司费用情况
 $(function () {
    $('#cost-total').highcharts({
        chart: {
            type: 'column',
            
        },
        title: {
            text: ''
        },
        colors: ['#63c38c', ],
        xAxis: {
            categories: [
                'A类',
                'B类',
                'C类',
                'D类',
                'E类',
                'F类',
                'G类',
                'H类',
                'I类',
                'J类',
               
            ],
            labels: {
                
                align: 'center',
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {gridLineColor:'#eee',
            min: 0,
            title: {text: ''}
        },
        
        exporting: {enabled: false} ,
            tooltip: {
            shared: true,
            valueSuffix: '万'
        },
        legend: {
            enabled: false
        },
       
        series: [{
            name: '花费',
            data: [60, 50, 80, 40,60, 50, 80, 40 ,60, 50,  ]

        }]
    });
});
 // 各公司每月费用情况
 $(function () {
    $('#cost-each').highcharts({
        chart: {
            type: 'column',
            
        },
        title: {
            text: ''
        },
        colors: ['#53c79f', '#7a6fca', '#ca6f96','#f7b547','#555' ],
        xAxis: {
            categories: [
                '01月',
                '02月',
                '03月',
                '04月',
                '05月',
                '06月',
                '07月',
                '08月',
                '09月',
                '10月',
                '11月',
                '12月',
               
            ],
            labels: {
                
                align: 'center',
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {gridLineColor:'#eee',
            min: 0,
            title: {text: ''}
        },
        
        exporting: {enabled: false} ,
            tooltip: {
            shared: true,
            valueSuffix: '万'
        },
        legend: {
            enabled: false
        },
       
        series: [{
            name: '北京分公司',
            data: [60, 50, 80, 40,60, 50, 80, 40 ,60, 50,  80, 90,]

        },{
            name: '上海分公司',
            data: [50, 60, 70, 130,90, 60, 120, 80 ,90, 70, 120, 120, ]

        },{
            name: '广州分公司',
            data: [160, 110, 100, 80,70, 90, 100, 110 ,90, 100, 80, 100, ]

        },{
            name: '沈阳分公司',
            data: [60, 150, 80, 110,60, 50, 80, 140 ,60, 50, 100, 70, ]

        },{
            name: '大连分公司',
            data: [100, 90, 80, 140,60, 50, 80, 90 ,60, 80, 90, 110,]
        }]
    });
});


</script>
</body>
</html>