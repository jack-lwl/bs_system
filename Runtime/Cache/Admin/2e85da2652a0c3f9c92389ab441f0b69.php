<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>透明化</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link href="/Qh_tpc/public/admin/css/css.css" rel="stylesheet" type="text/css"/>	
    <link href="/Qh_tpc/public/admin/css/table.css" rel="stylesheet" type="text/css"/>  
    <link rel="stylesheet" type="text/css" href="/Qh_tpc/public/admin/css/history.css">   
    
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
		document.cookie="menu_type=cfzx";
		location.href = "index2.html"
	});
	$('.results-situation dt').click(function(){
		location.href = "results_project.html"
	});
	$('.receivable-situation dt').click(function(){
		document.cookie="menu_type=hkqk";
		//location.href = "receivable.html"
		location.href = "index2.html"
	});
	$('.project-situation dt').click(function(){
		location.href = "receivable_project.html"
	});
   $('.custom-pre-sale dt').click(function(){
		location.href = "pre_sale_chart.html"
	});
     $('.department-situation dt').click(function(){
		 document.cookie="menu_type=bmqk";
		location.href = "index2.html"
	});
  	$('.pro-details dt').click(function(){
		location.href = "project.html"
	});
    $('.pre_sale_list dt').click(function(){
		location.href = "pre_sale_list.html"
	});
	


</script>


	</div>
	<div class="main" style="padding:10px;">
    <!-- 右侧内容 -->
    <div class="details-con">
    <!-- 项目详情头部信息 -->
        <div class="d-c-01">
            <div class="d-c-title">
                <div class="d-c-square"></div>
                <p>基本信息</p>
            </div>
            <ul class="dc01-con">
                <li><p class="p01">项目名称：<span><?php echo $data['Jobname'];?></span></p></li>
                <li><p>项目编号：<span><span><?php echo $data['jobcode'];?></span></p><p>立项日期：<span><span><?php echo $data['Begindate'];?></span></p>
				
				<?php if($data['is_rece'] == 0): ?><button id='is_rece'>算入应收款</button>
				<?php else: ?>
					<button id='is_rece' style="background: rgb(204, 204, 204);" disabled >已算入应收款</button><?php endif; ?>
				
				<!--<p>项目类型：<span>旅服系统 售后</span></p><p>项目经理：<span>马小俊</span></p>--></li>
                <!--<li><p>合同额度：<span>20,000,000</span></p><p>回款额度：<span>12,000,000</span></p><p>项目发票：<span>未知</span></p><p>项目进度：<span>80%</span></p>--></li>             
           
			</ul>

        </div>
        <div class="d-c-02">
            <div class="d-c-title">
                <div class="d-c-square"></div>
                <p>项目模块</p>
            </div>
            <div id="oProjectmodule" class="nav-Projectmodule">
                <div style="padding-left:20px;">
                <input type="button" value="全部" class="active"/><input type="button" value="人员"/><input type="button" value="费用"/><input type="button" value="项目"/>
                </div>
                <ul style="display:block;" class="pt-con">
                    <li iframe-url="<?php echo U('Admin/Project/Personnel_management');?>">
                            <div class="Personnel-module"></div>
                            <p>人员模块</p>
                    </li>
                    <li   iframe-url="<?php echo U('Admin/Project/Group_chat');?>">
                            <div class="Group-chat"></div>
                            <p>小组聊天</p>
                        </li>
                        <li iframe-url="<?php echo U('Admin/Project/The_contract');?>">
                            <div class="Contract-management"></div>
                            <p>合同管理</p>
                        </li>
                   <li iframe-url="<?php echo U('Admin/Project/estimate');?>">
                            <div class="Project-budget"></div>
                            <p>项目概算</p>
                        </li>
                    <li >
                            <div class="Project-cost"></div>
                            <p>项目费用</p>
                        </li>
                    <li iframe-url="<?php echo U('Admin/Project/Invoice_receivable');?>">
                            <div class="Invoice-receivable"></div>
                            <p>应收发票</p>
                        </li> 
                        <li iframe-url="<?php echo U('Admin/Project/Project_start');?>">
                            <div class="Project-start"></div>
                            <p>项目启动</p>
                        </li>
                    <li iframe-url="<?php echo U('Admin/Project/The_progress_of2');?>">
                            <div class="Project-construction"></div>
                            <p>项目施工</p>
                    </li>
                     <li >
                            <div class="Material-module"></div>
                            <p>物料模块</p>
                        </li>
                    <li iframe-url="<?php echo U('Admin/Project/The_project_acceptance');?>">
                            <div class="Project-income"></div>
                            <p>项目验收</p>
                    </li>
                     <li iframe-url="<?php echo U('Admin/Project/Project_over');?>">
                            <div class="Project-library"></div>
                            <p>项目移交</p>
                    </li>
                </ul>
                <ul class="pt-con">
                    <li iframe-url="<?php echo U('Admin/Project/Personnel_management');?>">
                            <div class="Personnel-module"></div>
                            <p>人员模块</p>
                        </li>
                    <li   iframe-url="<?php echo U('Admin/Project/Group_chat');?>">
                            <div class="Group-chat"></div>
                            <p>小组聊天</p>
                        </li>
                </ul>
                <ul class="pt-con">
                       <li iframe-url="<?php echo U('Admin/Project/The_contract');?>">
                            <div class="Contract-management"></div>
                            <p>合同管理</p>
                        </li>
                   <li iframe-url="<?php echo U('Admin/Project/estimate');?>">
                            <div class="Project-budget"></div>
                            <p>项目概算</p>
                        </li>
                    <li >
                            <div class="Project-cost"></div>
                            <p>项目费用</p>
                        </li>
                    <li iframe-url="<?php echo U('Admin/Project/Invoice_receivable');?>">
                            <div class="Invoice-receivable"></div>
                            <p>应收发票</p>
                        </li>
                </ul>
                <ul class="pt-con">

                     <li iframe-url="<?php echo U('Admin/Project/Project_start');?>">
                            <div class="Project-start"></div>
                            <p>项目启动</p>
                        </li>
                    <li iframe-url="<?php echo U('Admin/Project/The_progress_of');?>">
                            <div class="Project-income"></div>
                            <p>项目施工</p>
                    </li>
                     <li >
                            <div class="Material-module"></div>
                            <p>物料模块</p>
                        </li>
                    <li iframe-url="<?php echo U('Admin/Project/The_project_acceptance');?>">
                            <div class="Project-income"></div>
                            <p>项目验收</p>
                    </li>
                     <li iframe-url="<?php echo U('Admin/Project/Project_over');?>">
                            <div class="Project-library"></div>
                            <p>项目移交</p>
                    </li>
                   
                </ul>
			
            </div>
          
                <iframe src="" id="ir-url" scrolling="no" frameborder="0" style="width:100%;height:620px;overflow:hidden;display:none;"></iframe>

        </div>
  
    </div>

    </div>
	  
       
</div>


<input type="hidden" id="rece" value="<?php echo U('Admin/Project/update_rece');?>"/>

<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/Qh_tpc/public/admin/js/jquery.js"></script>
<script src="/Qh_tpc/public/admin/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/Qh_tpc/public/admin/js/jquery.date_input.pack2.js"></script>
<script type="text/javascript" src="/Qh_tpc/public/admin/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/Qh_tpc/public/admin/js/jquery.easing.js"></script>
<script type="text/javascript" src="/Qh_tpc/public/admin/js/history.js"></script>
<script type="text/javascript" src="/Qh_tpc/public/admin/js/jquery.cookie.js"></script>


<!-- 左侧目录 jq-->
<script type="text/javascript">
$(function(){

                $('.pt-con li').click(function(){
                    $("#ir-url").attr('src',$(this).attr('iframe-url'));
                    $("#ir-url").show();

                });


if($.cookie('detial_type')=='xm'){
	$('.project-situation').find('dt').css('background-color','#333')
	
}else if($.cookie('detial_type')=='yj'){
	$('.results-situation').find('dt').css('background-color','#333')
	
}else if($.cookie('detial_type')=='hk'){
	$('.receivable-situation').find('dt').css('background-color','#333')
	
}

});



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
	$('.custom').find('dt').css('background-color','#333')
	$('.details-con').css('min-height',$(window).height()-60);
});



</script>
<script>

    window.onload=function()
    {
        var oDiv=document.getElementById('oProjectmodule');
        var aBtn=oDiv.getElementsByTagName('input');
        var aDiv=oDiv.getElementsByTagName('ul');
        for (var i=0;i<aBtn.length;i++)
        {
            aBtn[i].onclick=function()
            {
                for(var i=0;i<aBtn.length;i++)
                {
                    aBtn[i].index=i;
                    aBtn[i].className='';
                    aDiv[i].style.display='none';
                }
                this.className='active';
                aDiv[this.index].style.display='block';
            };
        };
      
    };

//将项目算入应收款
$('#is_rece').click(function(){
	var url=$('#rece').val();
	$.get(url,function(data){
		if(data){
			alert('项目加入应收款成功');
		}else{
			alert('项目加入应收款失败');
		}
	},'json');

});
 $('#is_rece') .click(function(){
 
 $(this).css('background','#ccc');
 $(this).attr('disabled',true);
 document.getElementById('is_rece').innerHTML = '已算入应收款';
 })
</script>
</body>
</html>