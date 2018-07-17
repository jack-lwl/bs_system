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
	  
      <button class="per-edit" style="position:absolute;top:10px;left:10px;">修改</button>
       
       <div style="overflow:hidden;padding:10px;padding-top:0;">
        <table id="grid-data" data-url="<?php echo U('Admin/User/select_user');?>" class="table table-condensed table-hover table-striped">
            <thead>
                <tr>
                 <th data-column-id="id" data-type="numeric" data-align="left" data-width="56">编号</th>
                 <th data-column-id="user_name" data-width="100">姓名</th>
                 <th data-column-id="user_code" data-width="100">登入名</th>
                 <th data-column-id="str_tel"  data-width="130">电话</th>
                 <th data-column-id="str_postion" data-width="200"  >职位</th>
                 <!--  
                 <th data-column-id="s_success_money">计算成功率后金额</th>
                 <th data-column-id="c_source">款源</th>
                 <th data-column-id="c_ok_time" >预计确认时间</th>
                 <th data-column-id="c_rm_time" >计划回款时间</th>
                 <th data-column-id="str_user" >跟踪负责人</th>
                 <th data-column-id="str_remarks" data-visible="false">备注</th>
                 <th data-column-id="c_uid" >建立人</th>
                 <th data-column-id="c_type" data-visible="false">状态</th>
                 <th data-column-id="c_corp" >隶属公司</th>  
                 -->             
                 <th data-column-id="commands" data-formatter="commands" data-sortable="false">操作</th>
               
                </tr>
                
            </thead>
        </table>
        </div>		
	</div>
     <!-- 修改人员 -->
    <div class="per-editBox">
        <div class="shelter"></div>
        <div class="p-edit-con">
            <div class="p-edit-con-title"><p>人员修改</p><span></span></div>
            <ul>
                <li><label><span>*&nbsp;</span>姓名：</label><input/></li>
                <li><label><span>*&nbsp;</span>登入名：</label><input/></li>
                <li><label><span>*&nbsp;</span>密码：</label><input/></li>
                <li><label><span>*&nbsp;</span>确认密码：</label><input/></li>
                <li><label><span>*&nbsp;</span>职位列表：</label></li>
                <li>
                 <div class="postion-test">   
                    <div class="position-list-left">
                        <a>项目经理</a>
                        <a>登入</a>
                        <a>库管</a>
                        <a>经理</a>
                        <a>物料单管理员</a>
                        <a>商务职员</a>
                        <a>商务经理</a>
                        <a>项目经理</a>
                        <a>登入</a>
                        <a>库管</a>
                        <a>经理</a>
                        <a>物料单管理员</a>
                        <a>商务职员</a>
                        <a>商务经理</a>
                    </div>
                    <div class="position-list-center";></div>
                    <div class="position-list-right"></div>
                    </div>
                </li>
            </ul>
            <div class="per-edit-btn"><button id="per-esc">取消</button><button>确定</button></div>
        </div>
    </div>



</div>


<input type="hidden" id="updata_user" value="<?php echo U('/Admin/User/saveUserGetUserInfo');?>"/>


<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/Qh_tpc/public/admin/js/bootstrap.min.js"></script>
<script src="/Qh_tpc/public/admin/js/jquery.bootgrid.js"></script>
<script src="/Qh_tpc/public/admin/js/jquery.bootgrid.fa.min.js"></script>
<script src="/Qh_tpc/public/admin/js/common.js"></script>
<script src="/Qh_tpc/public/admin/js/taskMg.js"></script>
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
$('.set-up dt').css('background-color','#4f5051');
$('.set-up').find('.custom-Per-list').css('background-color','#333')
$(this).find('dd').show();
});

// 数据 左右移动
$(document).ready(function(){
    
        
        $(".postion-test a").click(function(){
            
            if($(this).parent().attr('class')=='position-list-left'){
                $(this).prependTo(".position-list-right");
            } else if($(this).parent().attr('class')=='position-list-right') {
                $(this).prependTo(".position-list-left");   
            }
            
                
        });

        $('.per-edit').click(function(){

                $('.per-editBox').show();

        });

        $('.p-edit-con-title span').click(function(){

            $('.per-editBox').hide();
        });
        $('#per-esc').click(function(){

            $('.per-editBox').hide();
        });



    });
</script>
</body>
</html>