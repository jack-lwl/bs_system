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
			
			<li class="warning"></li>
		</ul>
	</div>
</div>

<input type="hidden" id="session_destroy" value="<?php echo U('Admin/Public/out');?>"/>

<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script >

$('.h-nav li').click(function(){

	var url=$('#session_destroy').val();
	//alert(url);
	$.get(url,function(data){
		//alert(data);
		if(data){
			location.href="/Qh_tpc/index.php/Admin/Public/login.html";
		}else{
			alert('出错啦！');
		}
	},'json');
	
})

</script> 
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
			<!--<dd class="custom-Per-list"><a href="per_list.html">人员列表</a></dd>-->
			<!--<dd class="Pos-management"><a href="Pos_management.html">职位管理</a></dd>-->
			<dd class="information"><a href="Information_added_import.html">补充导入</a></dd>
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
     <div class="department-con-box">
         <div class="department-con-top">
            <div class="rctl-title">公司部门全年米票情况</div>
            <div id="M-tickets-year" style="height:220px;margin-top:8px;"></div>
        </div>
        <div class="department-con-bottom">
            <div class="department-con-bottom-left">
               <div class="rctr-title">各部门米票排名TOP10</div>
                <ul>
                  <li class="l01">
                      <strong>NO.1</strong>
                      <p>AA部门</p>
                  </li>
                  <li class="l02">
                      <strong>NO.2</strong>
                      <p>BB部门</p>
                  </li>
                  <li class="l03">
                      <strong>NO.3</strong>
                      <p>CC部门</p>
                  </li>
                  <li>
                      <strong>NO.4</strong>
                      <p>DD部门</p>
                  </li>
                  <li>
                      <strong>NO.5</strong>
                      <p>EE部门</p>
                  </li>
                  <li>
                      <strong>NO.6</strong>
                      <p>FF部门</p>
                  </li>
                  <li>
                      <strong>NO.7</strong>
                      <p>GG部门</p>
                  </li>
                  <li>
                      <strong>NO.8</strong>
                      <p>HH部门</p>
                  </li>
                  <li>
                      <strong>NO.9</strong>
                      <p>II部门</p>
                  </li>
                  <li>
                      <strong>NO.10</strong>
                      <p>JJ部门</p>
                  </li>
              </ul>
            </div>
            <div class="department-con-bottom-right">
               <div class="rctl-title">各部门米票情况</div>
               <div id="M-tickets-department" style="height:400px;margin-top:8px;"></div>
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
// 公司部门全年米票情况
        $(function () {
    $('#M-tickets-year').highcharts({
        chart: {
            type: 'areaspline'
        },
        title: {
            text: '',
            

        },
        legend: {
            x: 150,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: '#FFFFFF'
        },
        exporting: {enabled: false} ,
         colors: [ '#f7b547'],
        xAxis: {
            categories: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
           
        },
        yAxis: {
          gridLineColor:'#eee',
            title: {
                text: ''
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: '元/米票',

        },
        credits: {
            enabled: false
        },
        plotOptions: {
            areaspline: {
                fillOpacity: 0.5
            }
        },
        series: [{
            name: '米票率',
            data: [10, 12, 9, 8, 9, 10,11,9, 8, 14, 10, 9]
        }]
    });
});       
// 各部门米票情况
$(function () {
    $('#M-tickets-department').highcharts({
        chart: {
            type: 'column',
            
        },
        title: {
            text: ''
        },
        colors: ['#f7b547', ],
        xAxis: {
            categories: [
                'AA部门',
                'BB部门',
                'CC部门',
                'DD部门',
                'EE部门',
                'FF部门',
                'GG部门',
                'HH部门',
                'II部门',
                'JJ部门',
                'KK部门',
                'LL部门',
               
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
         plotOptions: {
            column: {
                pointPadding: 0,
                borderWidth: 0
            }},
        exporting: {enabled: false} ,
            tooltip: {
            shared: true,
            valueSuffix: '元/米票'
        },
        legend: {
            enabled: false
        },
       
        series: [{
            name: '米票率',
            data: [10, 12, 9, 8, 9, 10,11,9, 8, 14, 10, 9]

        }]
    });
});           

</script>
</body>
</html>