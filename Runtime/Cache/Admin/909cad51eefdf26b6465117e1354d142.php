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
		<dl class="pro-details">
			<dt >项目详情</dt>
		</dl>
		<dl class="pre_sale_list">
			<dt >售前列表</dt>
		</dl>
		
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
		location.href = "receivable.html"
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
		location.href = "project_details.html"
	});
    $('.pre_sale_list dt').click(function(){
		location.href = "pre_sale_list.html"
	});



</script>


	</div>
	<div class="main">
	     
       <div style="overflow:hidden;padding:10px;padding-top:0;">
        <table id="grid-data" data-url="<?php echo U('Admin/SaleRecord/select_sale_record');?>" class="table table-condensed table-hover table-striped">
            <thead>
                <tr>
                 <th data-column-id="id" data-type="numeric" data-align="left" data-width="56">编号</th>
                 <th data-column-id="p_name" data-width="130">项目名称</th>
                 <th data-column-id="f_money" data-width="80">金额</th>
                 <th data-column-id="str_c_name"  data-width="100">建设单位</th>
                 <th data-column-id="c_success" data-align="left"  >成功率</th>
                 <th data-column-id="s_success_money">计算成功率后金额</th>
                 <th data-column-id="c_source">款源</th>
                 <th data-column-id="c_ok_time" >预计确认时间</th>
                 <th data-column-id="c_rm_time" >计划回款时间</th>
                 <th data-column-id="name" >跟踪负责人</th>
                 <th data-column-id="str_remarks" data-visible="false">备注</th>
                 <th data-column-id="c_uid" data-visible="false">建立人</th>
                 <th data-column-id="c_type" data-visible="false">状态</th>
                 <th data-column-id="c_name" >隶属公司</th>               
                 <th data-column-id="commands" data-formatter="commands" data-sortable="false">操作</th>
                </tr>
                
            </thead>
        </table>
        </div>
       <button class="new-pre">新建售前</button>
       <input id="pre-page" style="display:none;" value="售前" />
		
	</div>
</div>

<!-- 新建售前 -->
<div class="new-preBox">
    <div class="shelter"></div>
    <div class="pre-con">
        <div class="pre-con-title"><p>新建售前</p><span></span></div>
        <div class="pre-con-1">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td  align="left"><input  placeholder="输入项目名称" id="xiang" required/></td>
                <td  align="right"><input placeholder="输入建设单位" id="jian"/></td>
              </tr>
              <tr>

                <td  align="left"><input  placeholder="输入成功率" id="cheng" onblur="cheng1()"/></td>
                <td  align="right"><input placeholder="输入金额" id="jin" onblur="cheng2()"/></td>

              </tr>
              <tr>
                <td  align="left"><input placeholder="成功率后金额" disabled="disabled" id="jisuan"/></td>
                <td  align="right"><input placeholder="预计确认时间" id="yu"/></td>
              </tr>
              <tr>
                <td  align="left"><input placeholder="款源" id="kuan"/></td>
                <!-- 
                <td  align="left"><input placeholder="预计确认时间" /></td>
                <td  align="left"><input placeholder="计划回款时间" /></td>
                 -->
                <td  align="right"><input placeholder="计划回款时间" id="jihua"/></td>
              	
              </tr>
               <tr>
                <td  align="left" style="position:relative;">
                  <div class="Track-the-head" id="gen"/>跟踪负责人</div>
                  <ul class="TTh-list" id="fuze">
                  <!-- 
                    <li><input type="checkbox" class="TTh-in01"/><span>张文强</span><span>软件工程师</span></li>
                    <li><input type="checkbox" class="TTh-in01"/><span>李伟龙</span><span>软件工程师</span></li>
                    <li><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></li>
                    -->
                  </ul>

                  </td>
                  <!-- 
                <td  align="right"><select><option>沈阳分公司</option><option>广州分公司</option><option>北京分公司</option><option>上海分公司</option><option>大连分公司</option></select></td>
                	-->
              </tr>
            </table>
      </div>
         <div class="pre-con-2">
            <label>选择状态：</label><input type="radio" name="a" class="in01" value='1' id="zheng" checked/><p>项目正常</p><input type="radio" name="a" class="in01" value='2' id="luo"/><p>项目落实</p><input type="radio" name="a" class="in01" value='3' id="shi"/><p>项目失效</p>
      </div>
      <div class="pre-con-3">

        <textarea placeholder="输入备注 (50个字)" id="bei"></textarea>
      </div>
      <div class="pre-con-4"><input type="button" value="提交" id="add_sale" /></div>
    </div>
</div>

<!-- 新建售前-确认提交 -->
<!-- <div class="submit-yes-no" style="display:none">
    <div class="shelter"></div>
    <div class="submit-con">
        <div class="submit-con-title"><span>温馨提示</span></div>
        <p>是否确认提交</p>
    </div>
</div> -->

<!-- 修改售前 -->
<div class="new-preBox2">
    <div class="shelter2"></div>
    <div class="pre-con2">
        <div class="pre-con-title2"><p>修改售前</p><span></span></div>
        <div class="edit-pre-con-1">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td  align="left"><input  placeholder="输入项目名称" id="xiang2" required/></td>
                <td  align="right"><input placeholder="输入建设单位" id="jian2"/></td>
              </tr>
              <tr>
                <td  align="left"><input  placeholder="输入成功率" id="cheng2" onblur="cheng3()"/></td>
                <td  align="right"><input placeholder="输入金额" id="jin2" onblur="cheng4()"/></td>
              </tr>
              <tr>
                <td  align="left"><input placeholder="成功率后金额" disabled="disabled" id="jisuan2"/></td>
                <td  align="right"><input placeholder="预计确认时间" id="yu2"/></td>
              </tr>
              <tr>
                <td  align="left"><input placeholder="款源" id="kuan2"/></td>
                <!-- 
                <td  align="left"><input placeholder="预计确认时间" /></td>
                <td  align="left"><input placeholder="计划回款时间" /></td>
                 -->
                <td  align="right"><input placeholder="计划回款时间" id="jihua2"/></td>
              	
              </tr>
               <tr>
                <td  align="left"><input placeholder="跟踪负责人" disabled="disabled" id="gen2"/></td>
                <!--  
                 <td  align="right"><select><option value='1'>沈阳分公司</option><option value='2'>广州分公司</option><option value='3'>北京分公司</option><option value='4'>上海分公司</option><option value='5'>大连分公司</option></select></td>
              -->
              </tr>
            </table>
      </div>
         <div class="edit-pre-con-2">
            <label>选择状态：</label><input type="radio" name="a" class="in01" value='1' id="zheng2"/><p>项目正常</p><input type="radio" name="a" class="in01" value='2' id="luo2"/><p>项目落实</p><input type="radio" name="a" class="in01" value='3' id="shi2"/><p>项目失效</p>
      </div>
      <div class="edit-pre-con-3">
        <textarea placeholder="输入备注 (50个字)" id="bei2"></textarea>
      </div>
      <div class="edit-pre-con-4"><input type="button" value="提交" id="updata_sale" /></div>
    </div>
</div>

<!-- 新建售前项目提交确认 -->
<div class="new-sale-confirm">
    <div class="shelter2"></div>
    <div class="new-sale-confirm-con">
         <div class="new-sale-confirm-con-title"><p>温馨提示</p></div>
         <p>是否确认删除</p>
         <div class="new-sale-btn">
                <input type="button" value="确认" style="border-right:1px solid #ccc;" id="add_ok"/><input type="button" value="取消" id="new-sale-out"/>
         </div>

    </div>
</div>

<!-- 修改售前项目提交确认 -->
<div class="sale-submit-confirm">
    <div class="shelter2"></div>
    <div class="sale-submit-confirm-con">
         <div class="sale-submit-confirm-con-title"><p>温馨提示</p></div>
         <p>是否确认删除</p>
         <div class="sale-submit-btn">
                <input type="button" value="确认" style="border-right:1px solid #ccc;" id="updata_ok"/><input type="button" value="取消" id="sale-submit-out"/>
         </div>

    </div>
</div>


<input type="hidden" id="add_sale_record" value="<?php echo U('Admin/SaleRecord/add_sale_record');?>"/>
<input type="hidden" id="updata_sale_record" value="<?php echo U('Admin/SaleRecord/updata_sale_record');?>"/>
<input type="hidden" id="url_fuzhi" value="<?php echo U('Admin/SaleRecord/select_one_sale_record');?>"/>
<input type="hidden" id="select_yewu" value="<?php echo U('Admin/SaleRecord/select_yewu');?>"/>
<input type="hidden" id="add_fuze" />


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
  $('.project dt').css('background-color','#4f5051');
 
	
	$('.new-pre').click(function(){
		
	    $('.new-preBox').css('display','block');
	       
	});
	
	$('.pre-con-title span').click(function(){
	
	    $('.new-preBox').css('display','none');
});

// 新建售前弹出层
$('#add_sale').click(function(){
    
    $('.new-preBox').hide();
    $('.new-sale-confirm').show();
    
});

$('#new-sale-out').click(function(){

    $('.new-sale-confirm').hide();
});

// 修改售前弹出层
$('#updata_sale').click(function(){
    
    $('.new-preBox2').hide();
    $('.sale-submit-confirm').show();
    
});

$('#sale-submit-out').click(function(){

    $('.sale-submit-confirm').hide();
});

// 跟踪负责人

$('.Track-the-head').click(function(){
       if($('.TTh-list').css('display')=='block'){
      $('.TTh-list').hide();
   }else{
      $('.TTh-list').show();
   }
      
      });
   


      






});
</script>
</body>
</html>