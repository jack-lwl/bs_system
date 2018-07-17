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
		<dl class="custom-pre-sale">
			<dt >售前项目</dt>
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
		location.href = "results.html"
	});
	$('.receivable-situation dt').click(function(){
		//location.href = "receivable.html"
		location.href = "project.html"
	});
	$('.project-situation dt').click(function(){
		location.href = "project_situation.html"
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
     <div class="project-situation-con-box">
       <div class="project-situation-con-left">
          <div class="pscl-title">公司项目总体情况</div>
          <div id="project-list" style="height:200px;border-bottom:1px solid #ededed;"></div>
          <ul class="project-situation-introduce">
              <li>
                <div class="psi-title1"><a></a>已完工项目</div>
                <div class="psi-city1">
                  <p>北京<span>125</span></p>
                  <p>上海<span>34</span></p>
                  <p>广州<span>107</span></p>
                  <p>沈阳<span>54</span></p>
                  <p>大连<span>54</span></p>
                </div>
              </li>
              <li>
                <div class="psi-title2"><a></a>施工中项目</div>
                <div class="psi-city2">
                  <p>北京<span>125</span></p>
                  <p>上海<span>34</span></p>
                  <p>广州<span>107</span></p>
                  <p>沈阳<span>54</span></p>
                  <p>大连<span>54</span></p>
                </div>
              </li>
              <li>
                <div class="psi-title3"><a></a>未开工项目</div>
                <div class="psi-city3">
                  <p>北京<span>125</span></p>
                  <p>上海<span>34</span></p>
                  <p>广州<span>107</span></p>
                  <p>沈阳<span>54</span></p>
                  <p>大连<span>54</span></p>
                </div>
              </li>
              <li>
                <div class="psi-title4"><a></a>停工项目</div>
                <div class="psi-city4">
                  <p>北京<span>125</span></p>
                  <p>上海<span>34</span></p>
                  <p>广州<span>107</span></p>
                  <p>沈阳<span>54</span></p>
                  <p>大连<span>54</span></p>
                </div>
              </li>
          </ul>
       </div>
       <ul class="project-situation-con-right">
          <li style="margin-right:20px;margin-bottom:20px;">
            <div class="pscr-titel">已完工项目情况</div>
            <div id="project-list1" style="height:200px;"></div>
            <div style="height:100px;">
                  <p><a class="a01"></a>北京<span>125</span></p>
                  <p><a class="a02"></a>上海<span>34</span></p>
                  <p><a class="a03"></a>广州<span>107</span></p>
                  <p><a class="a04"></a>沈阳<span>54</span></p>
                  <p><a class="a05"></a>大连<span>54</span></p>
            </div>
          </li>
          <li>
            <div class="pscr-titel">施工中项目情况</div>
              <div id="project-list2" style="height:200px;"></div>
            <div style="height:100px;">
                  <p><a class="a01"></a>北京<span>125</span></p>
                  <p><a class="a02"></a>上海<span>34</span></p>
                  <p><a class="a03"></a>广州<span>107</span></p>
                  <p><a class="a04"></a>沈阳<span>54</span></p>
                  <p><a class="a05"></a>大连<span>54</span></p>
            </div>
          </li>
          <li style="margin-right:20px;">
            <div class="pscr-titel">未开工项目情况</div>
              <div id="project-list3" style="height:200px;"></div>
            <div style="height:100px;">
                  <p><a class="a01"></a>北京<span>125</span></p>
                  <p><a class="a02"></a>上海<span>34</span></p>
                  <p><a class="a03"></a>广州<span>107</span></p>
                  <p><a class="a04"></a>沈阳<span>54</span></p>
                  <p><a class="a05"></a>大连<span>54</span></p>
            </div>
          </li>
          <li>
            <div class="pscr-titel">停工项目情况</div>
              <div id="project-list4" style="height:200px;"></div>
            <div style="height:100px;">
                  <p><a class="a01"></a>北京<span>125</span></p>
                  <p><a class="a02"></a>上海<span>34</span></p>
                  <p><a class="a03"></a>广州<span>107</span></p>
                  <p><a class="a04"></a>沈阳<span>54</span></p>
                  <p><a class="a05"></a>大连<span>54</span></p>
            </div>
          </li>
       </ul>
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
$('.project-situation').find('dt').css('background-color','#333')
});
// 项目饼状图
 $(function () {
    $('#project-list').highcharts({
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
         colors: ['#53c79f', '#7a6fca', '#ca6f96','#e58c72'],
        plotOptions: {
            pie: {
                innerSize:'1',
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#666',                  
                    
                }
            }
        },
        series: [{
            type: 'pie',
            name: '项目数量',
            data: [
                ['已完工',  125],
                ['施工中',  34],
                {
                    name: '未开工',
                    y: 107,
                    
                    selected: true
                },
                ['停工',54]
               
            ]
        }]
    });
});   
// 已完工项目饼状图
  $(function () {
    $('#project-list1').highcharts({
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
         colors: ['#017bce','#ffaa3d','#4db159','#ec494c','#555555'],
        plotOptions: {
            pie: {
                innerSize:'8',
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#666',                  
                    
                }
            }
        },
        series: [{
            type: 'pie',
            name: '项目数量',
            data: [
                ['北京分公司',  125],
                ['上海分公司',  34],
                {
                    name: '广州分公司',
                    y: 107,
                    
                    selected: true
                },
                ['沈阳分公司',54],
                ['大连分公司',54]
               
            ]
        }]
    });
});   
// 施工中项目饼状图
  $(function () {
    $('#project-list2').highcharts({
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
         colors: ['#017bce','#ffaa3d','#4db159','#ec494c','#555555'],
        plotOptions: {
            pie: {
                innerSize:'8',
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#666',                  
                    
                }
            }
        },
        series: [{
            type: 'pie',
            name: '项目数量',
            data: [
                ['北京分公司',  125],
                ['上海分公司',  34],
                {
                    name: '广州分公司',
                    y: 107,
                    
                    selected: true
                },
                ['沈阳分公司',54],
                ['大连分公司',54]
               
            ]
        }]
    });
});   
// 未开工项目饼状图
  $(function () {
    $('#project-list3').highcharts({
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
         colors: ['#017bce','#ffaa3d','#4db159','#ec494c','#555555'],
        plotOptions: {
            pie: {
                innerSize:'8',
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#666',                  
                    
                }
            }
        },
        series: [{
            type: 'pie',
            name: '项目数量',
            data: [
                ['北京分公司',  125],
                ['上海分公司',  34],
                {
                    name: '广州分公司',
                    y: 107,
                    
                    selected: true
                },
                ['沈阳分公司',54],
                ['大连分公司',54]
               
            ]
        }]
    });
});   
//停工项目饼状图
  $(function () {
    $('#project-list4').highcharts({
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
         colors: ['#017bce','#ffaa3d','#4db159','#ec494c','#555555'],
        plotOptions: {
            pie: {
                innerSize:'8',
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#666',                  
                    
                }
            }
        },
        series: [{
            type: 'pie',
            name: '项目数量',
            data: [
                ['北京分公司',  125],
                ['上海分公司',  34],
                {
                    name: '广州分公司',
                    y: 107,
                    
                    selected: true
                },
                ['沈阳分公司',54],
                ['大连分公司',54]
               
            ]
        }]
    });
});   
</script>
</body>
</html>