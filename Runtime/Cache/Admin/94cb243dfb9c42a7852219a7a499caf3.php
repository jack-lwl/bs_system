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
     <div class="results-con-box">
        <div class="results-con-left">
          <div class="results-Total-title">
            <strong class="sr01">公司总业绩金额</strong>
            <strong class="sr02">￥326,123,107</strong>
          </div>
          <div id="results-Total" style="height:310px;margin-top:10px;"></div>
        </div>
        <div class="results-con-right">
          <div class="results-con-right-title">各公司业绩情况</div>
          <ul>
              <li class="l01">
                  <strong>￥26,123,000</strong>
                  <p>北京分公司业绩金额</p>
              </li>
              <li class="l02">
                  <strong>￥126,000,000</strong>
                  <p>上海分公司业绩金额</p>
              </li>
              <li class="l03">
                  <strong>￥22,000,000</strong>
                  <p>广州分公司业绩金额</p>
              </li>
              <li class="l04">
                  <strong>￥110,000,107</strong>
                  <p>沈阳分公司业绩金额</p>
              </li>
              <li class="l05">
                  <strong>￥27,000,000</strong>
                  <p>大连分公司业绩金额</p>
              </li>
              <li class="l06">
                  <strong>￥18,000,000</strong>
                  <p>其它</p>
              </li>
          </ul>
        </div>
     </div>
     <ul class="Each-company-con">
        <li title="点击查看">
            <div style="overflow:hidden;background:#f5f6f8;">
                <p>北京分公司</p>
                <a>点击查看 >></a>
            </div>
            <div class="results-ec-title1">
                <strong class="sr01">业绩总金额</strong>
                <strong class="sr02">￥26,123,000</strong>
            </div>
            <div id="results-beijing" style="height:120px;margin-top:10px"></div>
        </li>
        <li title="点击查看">
            <div style="overflow:hidden;background:#f5f6f8;">
                <p>上海分公司</p>
                <a>点击查看 >></a>
            </div>
             <div class="results-ec-title2">
                <strong class="sr01">业绩总金额</strong>
                <strong class="sr02">￥126,000,000</strong>
            </div>
            <div id="results-shanghai" style="height:120px;margin-top:10px"></div>
        </li>
        <li title="点击查看">
            <div style="overflow:hidden;background:#f5f6f8;">
                <p>广州分公司</p>
                <a>点击查看 >></a>
            </div>
             <div class="results-ec-title3">
                <strong class="sr01">业绩总金额</strong>
                <strong class="sr02">￥22,000,000</strong>
            </div>
            <div id="results-guangzhou" style="height:120px;margin-top:10px"></div>
        </li>
        <li title="点击查看">
            <div style="overflow:hidden;background:#f5f6f8;">
                <p>沈阳分公司</p>
                <a>点击查看 >></a>
            </div>
             <div class="results-ec-title4">
                <strong class="sr01">业绩总金额</strong>
                <strong class="sr02">￥110,000,107</strong>
            </div>
            <div id="results-shenyang" style="height:120px;margin-top:10px"></div>
        </li>
        <li title="点击查看">
            <div style="overflow:hidden;background:#f5f6f8;">
                <p>大连分公司</p>
                <a>点击查看 >></a>
            </div>
             <div class="results-ec-title5">
                <strong class="sr01">业绩总金额</strong>
                <strong class="sr02">￥27,000,000</strong>
            </div>
            <div id="results-dalian" style="height:120px;margin-top:10px"></div>
        </li>
        <li title="点击查看">
            <div style="overflow:hidden;background:#f5f6f8;">
                <p>其它</p>
                <a>点击查看 >></a>
            </div>
             <div class="results-ec-title6">
                <strong class="sr01">业绩总金额</strong>
                <strong class="sr02">￥18,000,000</strong>
            </div>
            <div id="results-qita" style="height:120px;margin-top:10px"></div>
        </li>
     </ul>
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
$('.results-situation').find('dt').css('background-color','#333');

});

// 总业绩曲线图
        $(function () {
    $('#results-Total').highcharts({
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
         colors: [ '#3cc6d0'],
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
            valueSuffix: '万',

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
            name: '总业绩',
            data: [3000, 4000, 3000, 5000, 4000, 8000,7000,3000, 4000, 3000, 5000, 4000]
        }]
    });
});       
        // 北京业绩曲线图
        $(function () {
    $('#results-beijing').highcharts({
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
         colors: [ '#53c79f'],
        xAxis: {
            categories: ['1','2','3','4','5','6','7','8','9','10','11','12'],
           
        },
        yAxis: {
          gridLineColor:'#eee',
            title: {
                text: ''
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: '万',

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
            name: '总业绩',
            data: [6000, 8000, 4000, 9000, 7000, 9000,3000,10000, 6000, 4000, 7000, 4000]
        }]
    });
});       
         // 上海业绩曲线图
        $(function () {
    $('#results-shanghai').highcharts({
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
         colors: [ '#64b0cc'],
        xAxis: {
            categories: ['1','2','3','4','5','6','7','8','9','10','11','12'],
           
        },
        yAxis: {
          gridLineColor:'#eee',
            title: {
                text: ''
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: '万',

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
            name: '总业绩',
            data: [2000, 8000, 6000, 5000, 7000, 12000,3000,12000, 6000, 4000, 5000, 4000]
        }]
    });
});  
 // 广州业绩曲线图
        $(function () {
    $('#results-guangzhou').highcharts({
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
         colors: [ '#7a6fca'],
        xAxis: {
            categories: ['1','2','3','4','5','6','7','8','9','10','11','12'],
           
        },
        yAxis: {
          gridLineColor:'#eee',
            title: {
                text: ''
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: '万',

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
            name: '总业绩',
            data: [4000, 8000, 12000, 5000, 7000, 4000,3000,12000, 6000, 8000, 5000, 7000]
        }]
    });
});  
 // 沈阳业绩曲线图
        $(function () {
    $('#results-shenyang').highcharts({
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
         colors: [ '#ca6f96'],
        xAxis: {
            categories: ['1','2','3','4','5','6','7','8','9','10','11','12'],
           
        },
        yAxis: {
          gridLineColor:'#eee',
            title: {
                text: ''
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: '万',

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
            name: '总业绩',
            data: [6000, 8000, 4000, 5000, 7000, 4000,3000,12000, 6000, 12000, 5000, 7000]
        }]
    });
});  
 // 大连业绩曲线图
        $(function () {
    $('#results-dalian').highcharts({
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
         colors: [ '#e58c72'],
        xAxis: {
            categories: ['1','2','3','4','5','6','7','8','9','10','11','12'],
           
        },
        yAxis: {
          gridLineColor:'#eee',
            title: {
                text: ''
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: '万',

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
            name: '总业绩',
            data: [3000, 4000, 2000, 5000, 6000, 4000,2000,5000, 3000, 12000, 5000, 3000]
        }]
    });
});
 // 其它业绩曲线图
        $(function () {
    $('#results-qita').highcharts({
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
         colors: [ '#f6be46'],
        xAxis: {
            categories: ['1','2','3','4','5','6','7','8','9','10','11','12'],
           
        },
        yAxis: {
          gridLineColor:'#eee',
            title: {
                text: ''
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: '万',

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
            name: '总业绩',
            data: [5000, 3000, 2000, 4000, 1000, 6000,7000,2000, 3000, 4000, 5000, 2000]
        }]
    });
});                             
$(function(){
  $('.Each-company-con div').click(function(){

    location.href = "project.html"
  });

});

</script>
</body>
</html>