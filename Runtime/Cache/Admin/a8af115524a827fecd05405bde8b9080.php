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
     <div class="receivable-con-box">
        <div class="receivable-con-top">
            <div class="receivable-con-top-left">
               <div class="rctl-title">公司回款情况</div>
               <div id="receivable-Total" style="width:440px;height:260px;"></div>
               <ul class="rctl-introduce">
                    <li class="l01">
                      <p class="p01"><a></a>1年内</p>
                      <p>应回款:<span>￥30,000,000</span></p>
                      <p>未回款:<span>￥30,000,000</span></p>
                    </li>
                    <li class="l02">
                      <p class="p01"><a></a>1~2年</p>
                      <p>应回款:<span>￥30,000,000</span></p>
                      <p>未回款:<span>￥30,000,000</span></p>
                    </li>
                    <li class="l03">
                      <p class="p01"><a></a>2~3年</p>
                      <p>应回款:<span>￥30,000,000</span></p>
                      <p>未回款:<span>￥30,000,000</span></p>
                    </li>
                    <li class="l04">
                      <p class="p01"><a></a>3年以上</p>
                      <p>应回款:<span>￥30,000,000</span></p>
                      <p>未回款:<span>￥30,000,000</span></p>
                    </li>
               </ul>
            </div>
            <div class="receivable-con-top-right">
               <div class="rctr-title">各公司回款金额</div>
               <div id="receivable-Each" style="width:400px;height:220px;"></div>
               <ul class="rctr-introduce">
                    <li class="l01"><a></a>北京</li>
                    <li class="l02"><a></a>上海</li>
                    <li class="l03"><a></a>广州</li>
                    <li class="l04"><a></a>沈阳</li>
                    <li class="l05"><a></a>大连</li>
               </ul>
            </div>
        </div>
        <div class="receivable-con-bottom">
            <div class="rctl-title">公司每月回款情况</div>
            <ul class="rcb-introduce">
                <li>01月份:￥80,000,000</li>
                <li>02月份:￥80,000,000</li>
                <li>03月份:￥80,000,000</li>
                <li>04月份:￥80,000,000</li>
                <li>05月份:￥80,000,000</li>
                <li>06月份:￥80,000,000</li>
                <li>07月份:￥80,000,000</li>
                <li>08月份:￥80,000,000</li>
                <li>09月份:￥80,000,000</li>
                <li>10月份:￥80,000,000</li>
                <li>11月份:￥80,000,000</li>
                <li>12月份:￥80,000,000</li>
            </ul>
            <div id="receivable-month" style="height:260px;margin-top:8px"></div>
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
$('.receivable-situation').find('dt').css('background-color','#333')
});
//总回款情况
$(function () {
    $('#receivable-Total').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: '',
            
        },
       
        plotOptions: {
            pie: {
                innerSize:'5',
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color:'#1e89b2',
                    
                   
                   
                }
            }
        },
        colors: ['#3996db', '#ec4b39', '#1dba9d','#f4c20d'],
         tooltip: {
            valueSuffix: '万'
        },
        series: [{
            type: 'pie',
            name: '回款情况',
            data: [
                ['1~2年', 6000],
                ['2~3年', 4000],
                {
                    name: '1年内',
                    y: 8000,
                    
                    selected: true
                },
                ['3年以上', 5000],
              
            ]
        }]
    });
});
// 各公司回款情况 
$(function () {
    $('#receivable-Each').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: '',
            
        },
       
        plotOptions: {
            pie: {
                innerSize:'5',
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color:'#1e89b2',
                    
                   
                   
                }
            }
        },
        colors: ['#53c79f', '#64b0cc', '#7a6fca','#ca6f96','#e58c72'],
         tooltip: {
            valueSuffix: '万'
        },
        series: [{
            type: 'pie',
            name: '回款情况',
            data: [
                ['北京分公司', 6000],
                ['上海分公司', 4000],
                {
                    name: '广州分公司',
                    y: 8000,
                   
                    selected: true
                },
                ['沈阳分公司', 9000],
                ['大连分公司', 3000],
                
              
            ]
        }]
    });
});  
// 公司每月回款情况
$(function () {
    $('#receivable-month').highcharts({
        chart: {
            type: 'column',
            
        },
        title: {
            text: ''
        },
        colors: ['#63c6cf','#f7b547', ],
        xAxis: {
            categories: [
                '1月',
                '2月',
                '3月',
                '4月',
                '5月',
                '6月',
                '7月',
                '8月',
                '9月',
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
         plotOptions: {
            column: {
                pointPadding: 0,
                borderWidth: 0
            }},
        exporting: {enabled: false} ,
            tooltip: {
            shared: true,
            valueSuffix: '万'
        },
        legend: {
            enabled: false
        },
       
        series: [{
            name: '已回款',
            data: [6000, 5000, 8000, 4000,6000, 9000, 6000, 6000,7000, 7000, 8000, 6000 ]

        }, {
            name: '未回款',
            data: [4000, 2000, 3000, 1000,5000, 6000, 4000, 4000,6000, 4000, 2000, 4000]

        }]
    });
});           
</script>
</body>
</html>