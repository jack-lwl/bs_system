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
     <div class="ps-chart-con-box">
        <div class="ps-chart-con-top">
            <div class="pcct-left">
                <div class="rctl-title">各公司预计总金额</div>
                <ul class="pcct-left-introduce">
                  <li class="l01">北京<span>￥300,000,000</span></li>
                  <li class="l02">上海<span>￥300,000,000</span></li>
                  <li class="l03">广州<span>￥300,000,000</span></li>
                  <li class="l04">沈阳<span>￥300,000,000</span></li>
                  <li class="l05">大连<span>￥300,000,000</span></li>
                </ul>
            </div>
            <div class="pcct-center">
                <div class="rctl-title">业绩目标百分比</div>
                  <ul class="pcct-center-introduce">
                  <li class="l01">
                      <p class="p01">北京</p>
                      <div class="beijing-percentage">
                        <div id="sample_goal-beijing"></div>
                      </div></li>
                  <li class="l02">
                      <p class="p02">上海</p>
                      <div class="shanghai-percentage">
                        <div id="sample_goal-shanghai"></div>
                      </div></li>
                  </li>
                  <li class="l03">
                      <p class="p03">广州</p>
                      <div class="guangzhou-percentage">
                        <div id="sample_goal-guangzhou"></div>
                      </div></li>
                  </li>
                  <li class="l04">
                      <p class="p04">沈阳</p>
                      <div class="shenyang-percentage">
                        <div id="sample_goal-shenyang"></div>
                      </div></li>
                  </li>
                  <li class="l05">
                      <p class="p05">大连</p>
                      <div class="dalian-percentage">
                        <div id="sample_goal-dalian"></div>
                      </div></li>
                  </li>
                </ul>
            </div>
            <div class="pcct-right">
                <div class="rctl-title">各公司项目数量</div>
                <div style="overflow:hidden;">
                  <div id="project-number-Each" style="width:400px;height:260px;float:left;"></div>
                   <div class="project-number-city">
                    <p><a class="a01"></a>北京<span>125</span></p>
                    <p><a class="a02"></a>上海<span>34</span></p>
                    <p><a class="a03"></a>广州<span>107</span></p>
                    <p><a class="a04"></a>沈阳<span>54</span></p>
                    <p><a class="a05"></a>大连<span>54</span></p>
                  </div>
                </div>
            </div>
        </div>
        <div class="ps-chart-con-bottom">
            <div class="pccb-left">
                <div class="rctl-title">成功率项目数量</div>
                <div id="pre-sale-list" style="height:200px;"></div>
                <ul class="successful-project">
                    <li><a class="a01"></a>10%成功率的项目:<span>123</span></li>
                    <li><a class="a02"></a>30%成功率的项目:<span>123</span></li>
                    <li><a class="a03"></a>50%成功率的项目:<span>123</span></li>
                    <li><a class="a04"></a>70%成功率的项目:<span>123</span></li>
                    <li><a class="a05"></a>90%成功率的项目:<span>123</span></li>
                </ul>
            </div>
            <div class="pccb-right">
                <div class="rctl-title">项目成功与未成功数量</div>
                <div style="overflow:hidden;position:relative;">
                    <div id="successful-and-unsuccessful" style="width:504px;height:340px;margin-top:20px;float:left;"></div>
                    <ul class="sau-introduce">
                        <li>
                          <p>北京</p>
                          <strong class="sr01">已成功:<span>63</span></strong>&nbsp;&nbsp;&nbsp;&nbsp;<strong class="sr02">未成功:<span>54</span></strong>
                        </li>
                        <li>
                          <p>上海</p>
                          <strong class="sr01">已成功:<span>76</span></strong>&nbsp;&nbsp;&nbsp;&nbsp;<strong class="sr02">未成功:<span>34</span></strong>
                        </li>
                        <li>
                          <p>广州</p>
                          <strong class="sr01">已成功:<span>45</span></strong>&nbsp;&nbsp;&nbsp;&nbsp;<strong class="sr02">未成功:<span>23</span></strong>
                        </li>
                        <li>
                          <p>沈阳</p>
                          <strong class="sr01">已成功:<span>156</span></strong>&nbsp;&nbsp;&nbsp;&nbsp;<strong class="sr02">未成功:<span>70</span></strong>
                        </li>
                        <li>
                          <p>大连</p>
                          <strong class="sr01">已成功:<span>100</span></strong>&nbsp;&nbsp;&nbsp;&nbsp;<strong class="sr02">未成功:<span>46</span></strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
     </div>
     <div></div>
	</div>
</div>

<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/Qh_tpc/public/admin/js/highcharts.js"></script>

<script src="/Qh_tpc/public/admin/js/goalProgress.js"></script>

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
$('.custom-pre-sale').find('dt').css('background-color','#333')
});
// 北京分公司百分比
   $(document).ready(function(){
            $('#sample_goal-beijing').goalProgress({
                goalAmount: 100,
                currentAmount: 70,
                textAfter: '%'
            });
        });
   // 上海分公司百分比
   $(document).ready(function(){
            $('#sample_goal-shanghai').goalProgress({
                goalAmount: 100,
                currentAmount: 70,
                textAfter: '%'
            });
        });
   // 广州分公司百分比
   $(document).ready(function(){
            $('#sample_goal-guangzhou').goalProgress({
                goalAmount: 100,
                currentAmount: 70,
                textAfter: '%'
            });
        });
   // 沈阳分公司百分比
   $(document).ready(function(){
            $('#sample_goal-shenyang').goalProgress({
                goalAmount: 100,
                currentAmount: 70,
                textAfter: '%'
            });
        });
   // 大连分公司百分比
   $(document).ready(function(){
            $('#sample_goal-dalian').goalProgress({
                goalAmount: 100,
                currentAmount: 70,
                textAfter: '%'
            });
        });
// 各公司项目数量
$(function () {
    $('#project-number-Each').highcharts({
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
        colors: ['#53c79f', '#7a6fca', '#ca6f96','#f7b547','#555'],
         tooltip: {
            valueSuffix: ''
        },
        series: [{
            type: 'pie',
            name: '项目数量',
            data: [
                ['北京分公司', 123],
                ['上海分公司', 123],
                {
                    name: '广州分公司',
                    y: 123,
                   
                    selected: true
                },
                ['沈阳分公司',123],
                ['大连分公司',123],
                
              
            ]
        }]
    });
});  
//售前情况饼状图
 $(function () {
    $('#pre-sale-list').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        exporting: {enabled: false} ,
        title: {
            text: ''
        },
        tooltip: {
            
        },
        colors: ['#53c79f', '#7a6fca', '#ca6f96','#f7b547','#555'],
        plotOptions: {
            pie: {
                 // innerSize:'1',
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                                     
                    
                }
            }
        },
        series: [{
            type: 'pie',
            name: '项目数量',
            data: [
                ['90%成功率', 123],
                {
                    name: '70%成功率',
                    y: 123,
                    
                    selected: true
                },
                ['50%成功率',123],
                ['30%成功率',123],
                ['10%成功率',123]
               
            ]
            
        }]
    });
});  
// 项目成功与未成功数量
$(function () {
    $('#successful-and-unsuccessful').highcharts({
        chart: {
            type: 'column',
            
        },
        title: {
            text: ''
        },
        colors: ['#53c79f', '#f7b547' ],
        xAxis: {
            categories: [
                '北京分公司',
                '上海分公司',
                '广州分公司',
                '沈阳分公司',
                '大连分公司',
               
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
            valueSuffix: '个'
        },
        legend: {
            enabled: false
        },
       
        series: [{
            name: '已成功',
            data: [63, 76, 45, 156,100, ]

        }, {
            name: '未成功',
            data: [54, 34, 23, 70,46,]

        }]
    });
});    
</script>
</body>
</html>