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
	<div class="main">
	   <div class="d-c-title">
                <div class="d-c-square"></div>
                <p>项目筛选</p>
        </div>
            <div class="selectNumberScreen">
                <div class="hasBeenSelected">
                    <dl>
                      <dt>您已选择：</dt>
                      <dd style="DISPLAY: none" class=clearDd>
                      <div class=clearList></div>
                      <div style="DISPLAY: none" class="eliminateCriteria" id='clear_all'>全部清除</div>
                    </dl>
                </div>
                <div id="selectList" class="screenBox screenBackground">
                    <!--<dl class="listIndex" attr="terminal_brand_s">
                      <dt><span></span>类&nbsp;&nbsp;&nbsp;型：</dt>
                      <dd><a href="javascript:void(0)" values="10x" attrval="基建">施工</a> 
                      <a href="javascript:void(0)" values="10~50" attrval="更改">客运</a>
                      <a href="javascript:void(0)" values="50~200" attrval="企业">货检</a> 
                      <a href="javascript:void(0)" values="200~500" attrval="成本">旅服系统</a> 
                      <a href="javascript:void(0)" values="500d" attrval="保价">售后</a> 
                    </dl> -->
                   <dl class="listIndex" id="ComRange" attr="价格范围">
                      <dt><span></span>分公司：</dt>
                      <dd><a href="javascript:void(0)" values="3" attrval="10万以下" type='Com' id='beijing_total'>北京分公司(<?php echo $total_beijing;?>)</a> 
                      <a href="javascript:void(0)" values="4" attrval="10万-50万" type='Com' id='shanghai_total'>上海分公司(<?php echo $total_shanghai;?>)</a>
                      <a href="javascript:void(0)" values="2" attrval="50万-200万" type='Com' id='guangzhou_total'>广州分公司(<?php echo $total_guangzhou;?>)</a>
                      <a href="javascript:void(0)" values="1" attrval="200万-500万" type='Com' id='shenyang_total'>沈阳分公司(<?php echo $total_shenyang;?>)</a>
                      <a href="javascript:void(0)" values="5" attrval="200万-500万" type='Com' id='dalian_total'>大连分公司(<?php echo $total_dalian;?>)</a>
                    </dl>
                    
                    <!-- <dl class="listIndex" >
                      <dt><span></span>类&nbsp;&nbsp;&nbsp;型：</dt>
                      <dd><a href="javascript:void(0)" values="" attrval="10万以下">施工</a> 
                      <a href="javascript:void(0)" values="" attrval="10万-50万">客运</a>
                      <a href="javascript:void(0)" values="" attrval="50万-200万">货检</a>
                      <a href="javascript:void(0)" values="200~500" attrval="200万-500万">旅服系统</a>
                      <a href="javascript:void(0)" values="200~500" attrval="200万-500万">售后</a>
                    </dl> -->
                    <dl class="listIndex" id="PriceRange" attr="价格范围">
                      <dt><span></span>合同额：</dt>
                     <dd><a href="javascript:void(0)" values="100000x" attrval="10万以下" type='Price' id='lt_10'>10万以下(<?php echo $total_100000x;?>)</a> 
                      <a href="javascript:void(0)" values="100000~500000" attrval="10万-50万" type='Price' id='10_50'>10万-50万(<?php echo $total_100000_500000;?>)</a>
                      <a href="javascript:void(0)" values="500000~2000000" attrval="50万-200万" type='Price' id='50_200'>50万-200万(<?php echo $total_500000_2000000;?>)</a>
                      <a href="javascript:void(0)" values="2000000~5000000" attrval="200万-500万" type='Price' id='200_500'>200万-500万(<?php echo $total_2000000_5000000;?>)</a>
                      <a href="javascript:void(0)" values="5000000d" attrval="500万以上" type='Price' id='gt_500'>500万以上(<?php echo $total_5000000d;?>)</a></dd>
                    </dl>
                    
                    <dl class=" listIndex" attr="terminal_os_s">
                      <dt><span></span>时&nbsp;&nbsp;&nbsp;间：</dt>
                      <dd>
                      <a href="javascript:void(0)" values2="" values1="" attrval="预计确认时间" id="data1" style="margin-left:20px;" type='time'>立项日期</a> 
                      </dd>
                    </dl> 
                    <div class="data1"><input type="text" id='start_time' class="date_picker7"><input type="text" id='stop_time' class="date_picker8"><input
							type="button" onclick="exConfirm()" id='time_ok' value="确认" class="in02" /></div>    
                   
            </div>	
	</div>
     <!-- 项目列表 -->
            <div class="d-c-title">
                <div class="d-c-square"></div>
                <p>项目列表</p>
            </div>
            <div class="pre-list-Sort">
                <div class="pls-top">
                    <div class="pls-top-left">
                        <p style="font-weight:700;font-size:14px;">合计：</p>
                        <p>产值总额：<span id="Camount"><?php echo $data['Camount_sum'];?>万</span></p>
                        <!-- <p>实际回款总额：<span id="Pamount"><?php echo $data['payment_sum'];?></span></p> -->
                        <!-- <p>应收款总额：<span id="Recei"><?php echo $data['yingshou'];?></span></p> -->
                        <!--<p>利润总额：<span>200,000,000</span></p>-->
                    </div>
                    <div class="pls-bootom-right">
                        <p>共找到<span id="totalCount"><?php echo $total;?></span>条项目</p>
                    </div>
                </div>
                <div class="pls-bootom">
                    <ul>
					<!--
                        <li><a class="a01">默认排序</a></li>
                        <li><a>立项日期</a></li>
                        <li><a>合同额</a></li>
					-->
						 <li><a id='admin_order'>默认排序(立项日期)</a></li>
                        <!-- <li><a>立项日期</a></li> -->
                        <li><a id='money_order' order='money'>合同额</a></li>

                       <!--  <li><a>回款额</a></li>
                        <li><a>进度</a></li>  -->
                        <li style="margin-left:30px;color:#1a96d2;"><input type="checkbox" style="vertical-align:middle;margin-top:-4px;margin-right:10px;"/>只看有更新</li>
						<li><input class="in08" placeholder="请输入要搜索的内容" id='search'/><button class="b08" id='search_ok'></button></li>
                    </ul>
                    <!-- <div class="Import-data-btn"><input type="button" value="导入数据" /></div> -->
                </div>
                         <!-- 导入数据 -->
                        
                          <div class="Id-Box">
                                <div class="shelter"></div>
                                <div class="Id-con-box">
                                     <div class="pre-con-title">导入数数据</div>
                                      <ul class="Id-con">
                                          <li style="margin-top:20px;"><label>数据类型：</label><select id=select_type><option value=0>请选择数据类型</option><option value=1>合同额与回款</option></select></li>
                                          <li style="margin-top:20px;">
                                          <label style="float:left;">文件路径：</label>
                                                <ul style="float:left;">
                                                    <li><!-- <input type="file" placeholder="导入数据" class="in02"/> -->
                                                      <div style="width:220px;height:40px;overflow:hidden;position:relative;border:1px solid #ccc;">
                                                        <form method="post" action="<?php echo U('Admin/Project/project_excel');?>" enctype="multipart/form-data" id="import">
                                                        <div style="float:left;"><input type="text" id="txt" name="txt" class="txt"/></div>
                                                        <div style="float:left;"><div class="upload"></div></div>
                                                        <div style="height:30px;float:left;"><input type="file" onchange="txt.value=this.value" class="file" name='file_stu' id='excel'/></div>
                                                        </form>
                                                      </div>
                                                    </li>
                                                  </ul>
                                          </li>
                                          <li style="margin-top:10px;padding-left:90px;"><input type="button" value="确定" class="b01" id='imp_data'/><input type="button" value="取消" class="b02"/></li>
                                      </ul>       
                                </div>
                                
                         </div>
                      
            <!-- 项目列表内容 -->
            <ul class="pl-con">
            <?php if(is_array($rows)): foreach($rows as $key=>$rows): ?><li id="<?php echo $rows['p_id'];?>" onclick="ProListInfo(this)" ondblclick="sss(this)" class="dblbtn">
                   <div class="pl-con-left2"><div class="Focus-on"></div></div>
                   <div class="pl-con-center">
                    <p class="p01"><?php echo $rows['Jobname'];?><span class="s01"><?php echo $rows['buttype'];?></span><span class="s02"><?php echo $rows['c_name'];?></span></p>
                    <p><a style="width:160px;">立项日期：<?php echo $rows['Begindate'];?></a><!--<a>项目经理：马小俊</a>--><a>立项编号：<?php echo $rows['jobcode'];?></a><a>项目经理：<?php echo $rows['pro_manager'];?></a></p>
					<div class="milestone-box">
						<div class="mb-con1">
							<?php if(empty($rows['start_time']) != true ): if($rows['imple_time'] == null AND $rows['closeout_time'] == null AND $rows['check_time'] == null ): if($rows['start_time'] < $rows['p_start'] ): ?><div class="s-kg2" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际开工&nbsp;(<?php echo $rows['start_time'];?>)</div>
									<?php elseif($rows['start_time'] > $rows['p_start'] ): ?>
										<div class="s-kg3" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际开工&nbsp;(<?php echo $rows['start_time'];?>)</div>
									<?php else: ?>
										<div class="s-kg1" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际开工&nbsp;(<?php echo $rows['start_time'];?>)</div><?php endif; ?>

								<?php else: ?>
									<?php if($rows['start_time'] < $rows['p_start'] ): ?><div class="s-kg2" >实际开工&nbsp;(<?php echo $rows['start_time'];?>)</div>
									<?php elseif($rows['start_time'] > $rows['p_start'] ): ?>
										<div class="s-kg3" >实际开工&nbsp;(<?php echo $rows['start_time'];?>)</div>
									<?php else: ?>
										<div class="s-kg1" >实际开工&nbsp;(<?php echo $rows['start_time'];?>)</div><?php endif; endif; endif; ?>

							<?php if($rows['imple_time'] != null ): if($rows['closeout_time'] == null AND $rows['check_time'] == null ): if($rows['imple_time'] < $rows['p_imple'] ): ?><div class="s-ss2" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际实施&nbsp;(<?php echo $rows['imple_time'];?>)</div>
									<?php elseif($rows['imple_time'] > $rows['p_imple'] ): ?>
										<div class="s-ss3" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际实施&nbsp;(<?php echo $rows['imple_time'];?>)</div>
									<?php else: ?>
										<div class="s-ss1" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际实施&nbsp;(<?php echo $rows['imple_time'];?>)</div><?php endif; ?>

								<?php else: ?>
									<?php if($rows['imple_time'] < $rows['p_imple'] ): ?><div class="s-ss2" >实际实施&nbsp;(<?php echo $rows['imple_time'];?>)</div>
									<?php elseif($rows['imple_time'] > $rows['p_imple'] ): ?>
										<div class="s-ss3" >实际实施&nbsp;(<?php echo $rows['imple_time'];?>)</div>
									<?php else: ?>
										<div class="s-ss1" >实际实施&nbsp;(<?php echo $rows['imple_time'];?>)</div><?php endif; endif; endif; ?>

							<?php if($rows['closeout_time'] != null ): if($rows['check_time'] == null ): if($rows['closeout_time'] < $rows['p_closeout'] ): ?><div class="s-sw2" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际收尾&nbsp;(<?php echo $rows['closeout_time'];?>)</div>
									<?php elseif($rows['closeout_time'] > $rows['p_closeout'] ): ?>
										<div class="s-sw3" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际收尾&nbsp;(<?php echo $rows['closeout_time'];?>)</div>
									<?php else: ?>
										<div class="s-sw1" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际收尾&nbsp;(<?php echo $rows['closeout_time'];?>)</div><?php endif; ?>

								<?php else: ?>
									<?php if($rows['closeout_time'] < $rows['p_closeout'] ): ?><div class="s-sw2" >实际收尾&nbsp;(<?php echo $rows['closeout_time'];?>)</div>
									<?php elseif($rows['closeout_time'] > $rows['p_closeout'] ): ?>
										<div class="s-sw3" >实际收尾&nbsp;(<?php echo $rows['closeout_time'];?>)</div>
									<?php else: ?>
										<div class="s-sw1" >实际收尾&nbsp;(<?php echo $rows['closeout_time'];?>)</div><?php endif; endif; endif; ?>

							<?php if($rows['check_time'] != null ): if($rows['check_time'] < $rows['p_check'] ): ?><div class="s-ys2" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际验收&nbsp;(<?php echo $rows['check_time'];?>)</div>
								<?php elseif($rows['check_time'] > $rows['p_check'] ): ?>
									<div class="s-ys3" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际验收&nbsp;(<?php echo $rows['check_time'];?>)</div>
								<?php else: ?>
									<div class="s-ys1" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际验收&nbsp;(<?php echo $rows['check_time'];?>)</div><?php endif; endif; ?>
						<!-- 
							<div class="s-kg1">实际开工&nbsp;(2016-07-27)</div>
							<div class="s-ss1">实际实施&nbsp;(2016-08-27)</div>
							<div class="s-sw3">实际收尾&nbsp;(2016-09-27)</div>
							<div class="s-ys2" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际验收&nbsp;(2016-10-27)</div>
						-->
						</div>
						<div class="mb-con2"></div>
						<div class="mb-con3">
							<div class="j-kg">计划开工&nbsp;(<?php echo $rows['p_start'];?>)</div>
							<div class="j-ss">计划实施&nbsp;(<?php echo $rows['p_imple'];?>)</div>
							<div class="j-sw">计划收尾&nbsp;(<?php echo $rows['p_closeout'];?>)</div>
							<div class="j-ys">计划验收&nbsp;(<?php echo $rows['p_check'];?>)</div>
						</div>
						<div style="color:#999;height:23px;line-height:23px;width:750px;overflow:hidden;">项目要求：<?php echo $rows['p_remark'];?></div>
					</div>
                  
                   </div> 
                    <!--<div class="pl-con-right">
                        <p style="margin-top:30px;">项目地点：清原站</p> 
                    </div>-->
                   <div class="pl-con-right2" style="position: absolute;right:14px;">

				  <?php if($rows['Camount'] == 0 ): ?><p class="p01"><span style="font-size:14px;color:#666;">暂无合同额</p>		
								
					<?php else: ?>

						<p class="p01"><span style="font-size:14px;color:#666;">合同额:&nbsp;&nbsp;&nbsp;&nbsp;</span><?php echo $rows['Camount'];?>万</p><?php endif; ?>


                        
                        
						<!--<p style="color:#0084ff;margin-top:30px;font-weight:700;" class="p02">费用:  50%回款：<?php echo $rows['percent'];?> &nbsp;<?php echo $rows['Pamount'];?></p>-->
						<p style="color:green;font-weight:700;" class="p03">进度:  <?php echo $rows['ProSpeed'];?><!--回款：<?php echo $rows['percent'];?> &nbsp;<?php echo $rows['Pamount'];?>--></p>
                        <p style="margin-top:80px;"><span class="s03">3</span><span class="s02"></span><span class="s01"></span></p> 
                   </div>
                </li>
				<div class="psl-record" id="ttt" >
					<div class="psl-record-con"><p>该项目暂无项目进度记录</p></div>
				</div><?php endforeach; endif; ?>
            </ul>
</div>


<input type="hidden" id="progress_list" value="<?php echo U('Admin/Project/select_project_progress2');?>"/>

<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/Qh_tpc/public/admin/js/jquery-1.4.3.min.js" type="text/javascript"></script>
<script src="/Qh_tpc/public/admin/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/Qh_tpc/public/admin/js/jquery.date_input.pack.js"></script>

<!-- 左侧目录 jq-->
<script type="text/javascript">

//提交ajax走数据
function SubAjaxInfo(){
	
	$.ajax({  
            url:"/Qh_tpc/index.php/Admin/Project/postreceivable",  
            type:"post",  
            async:true,  
            data:{'Camount':Price,'Com_id':Com,'Begindate':time,'order':order,'Jobname':Search},  
            dataType:"json", 
            error:function(){alert("服务加载出错");},  
            success:function(data)  
            {	
          	


			if(data['com_total']!=''){
            	
				$("#beijing_total").html('北京分公司('+data['com_total']['beijing']+')');
				
				$("#shenyang_total").html('沈阳分公司('+data['com_total']['shenyang']+')');
				
				$("#guangzhou_total").html('广州分公司('+data['com_total']['guangzhou']+')');
				
				$("#dalian_total").html('大连分公司('+data['com_total']['dalian']+')');
				
				$("#shanghai_total").html('上海分公司('+data['com_total']['shanghai']+')');
      
          		//alert(data['not_Camount_sum']);
          		
            }	
			
			
		   if(data['total_money']!=''){
			   
			    $("#lt_10").html('10万以下('+data['total_money']['100000x']+')');
				
				$("#10_50").html('10万-50万('+data['total_money']['100000_500000']+')');
				
				$("#50_200").html('50万-200万('+data['total_money']['500000_2000000']+')');
				
				$("#200_500").html('200万-500万('+data['total_money']['2000000_5000000']+')');
				
				$("#gt_500").html('500万以上('+data['total_money']['5000000d']+')');
     
          		
            }	




          	if(!data['rows']){
          		$(".pl-con").html("");
				$("#Camount").html(0);
          		$("#Pamount").html(0);
          		$("#Recei").html(0);
          		$("#totalCount").html(0);
          		exit;
          	}else{
          		
          		
          		var rows = data['rows'];
          		
          		//alert(data['Camount_sum']);
          		
          		$("#Camount").html(data['Camount_sum']+'万');
          		
          		$("#Pamount").html(data['payment_sum']);
          		
          		$("#totalCount").html(data['total']);
          		
          		$("#Recei").html(data['yingshou']);
          		

				var html = "";
				
          		
          	    for(var i=0;i<rows.length;i++){

					html+='<li id='+rows[i]['p_id']+' onclick="ProListInfo(this)" ondblclick="sss(this)" class="dblbtn">'
                   +'<div class="pl-con-left2"><div class="Focus-on"></div></div>'
                   +'<div class="pl-con-center">'
                    +'<p class="p01">'+rows[i]['Jobname']+'<span class="s01">'+rows[i]['buttype']+'</span><span class="s02">'+rows[i]['c_name']+'</span></p>'
                    +'<p><a style="width:160px;">立项日期：'+rows[i]['Begindate']+'</a><!--<a>项目经理：马小俊</a>--><a>立项编号：'+rows[i]['jobcode']+'</a><a>项目经理：'+rows[i]['pro_manager']+'</a></p>'
					+'<div class="milestone-box">'
					+'	<div class="mb-con1">';


				
					if(rows[i]['start_time']!=''){
						if(rows[i]['imple_time']=='' && rows[i]['closeout_time']=='' && rows[i]['check_time']==''){
							if(rows[i]['start_time']<rows[i]['p_start']){
								html+='<div class="s-kg2" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际开工&nbsp;('+rows[i]['start_time']+')</div>';
							}else if(rows[i]['start_time']>rows[i]['p_start']){
								html+='<div class="s-kg3"  style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际开工&nbsp;('+rows[i]['start_time']+')</div>';
							}else{
								html+='<div class="s-kg1"  style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际开工&nbsp;('+rows[i]['start_time']+')</div>';
							}
						}else{
							if(rows[i]['start_time']<rows[i]['p_start']){
								html+='<div class="s-kg2">实际开工&nbsp;('+rows[i]['start_time']+')</div>';
							}else if(rows[i]['start_time']>rows[i]['p_start']){
								html+='<div class="s-kg3">实际开工&nbsp;('+rows[i]['start_time']+')</div>';
							}else{
								html+='<div class="s-kg1">实际开工&nbsp;('+rows[i]['start_time']+')</div>';
							}
						}
						
					}

					if(rows[i]['imple_time']!=''){

						if(rows[i]['closeout_time']=='' && rows[i]['check_time']==''){
							if(rows[i]['imple_time']<rows[i]['p_imple']){
								html+='<div class="s-ss2" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际实施&nbsp;('+rows[i]['imple_time']+')</div>';
							}else if(rows[i]['imple_time']>rows[i]['p_imple']){
								html+='<div class="s-ss3"  style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际实施&nbsp;('+rows[i]['imple_time']+')</div>';
							}else{
								html+='<div class="s-ss1"  style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际实施&nbsp;('+rows[i]['imple_time']+')</div>';
							}
						}else{
							if(rows[i]['imple_time']<rows[i]['p_imple']){
								html+='<div class="s-ss2">实际实施&nbsp;('+rows[i]['imple_time']+')</div>';
							}else if(rows[i]['imple_time']>rows[i]['p_imple']){
								html+='<div class="s-ss3">实际实施&nbsp;('+rows[i]['imple_time']+')</div>';
							}else{
								html+='<div class="s-ss1">实际实施&nbsp;('+rows[i]['imple_time']+')</div>';
							}
						}


					}

					if(rows[i]['closeout_time']!=''){

						if(rows[i]['check_time']==''){
							if(rows[i]['closeout_time']<rows[i]['p_closeout']){
								html+='<div class="s-sw2" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际收尾&nbsp;('+rows[i]['closeout_time']+')</div>';
							}else if(rows[i]['closeout_time']>rows[i]['p_closeout']){
								html+='<div class="s-sw3"  style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际收尾&nbsp;('+rows[i]['closeout_time']+')</div>';
							}else{
								html+='<div class="s-sw1"  style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际收尾&nbsp;('+rows[i]['closeout_time']+')</div>';
							}
						}else{
							if(rows[i]['closeout_time']<rows[i]['p_closeout']){
								html+='<div class="s-sw2">实际收尾&nbsp;('+rows[i]['closeout_time']+')</div>';
							}else if(rows[i]['closeout_time']>rows[i]['p_closeout']){
								html+='<div class="s-sw3">实际收尾&nbsp;('+rows[i]['closeout_time']+')</div>';
							}else{
								html+='<div class="s-sw1">实际收尾&nbsp;('+rows[i]['closeout_time']+')</div>';
							}
						}


						
					}

					if(rows[i]['check_time']!=''){
						if(rows[i]['check_time']<rows[i]['p_check']){
							html+='<div class="s-ys2" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际验收&nbsp;('+rows[i]['check_time']+')</div>';
						}else if(rows[i]['start_time']>rows[i]['p_check']){
							html+='<div class="s-ys3" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际验收&nbsp;('+rows[i]['check_time']+')</div>';
						}else{
							html+='<div class="s-ys1" style="background:url(/Qh_tpc/public/admin/image/shishiblue.png)no-repeat !important;">实际验收&nbsp;('+rows[i]['check_time']+')</div>';
						}
					}
						
						html+='</div>'
						+'<div class="mb-con2"></div>'
						+'<div class="mb-con3">'
							+'<div class="j-kg">计划开工&nbsp;('+rows[i]['p_start']+')</div>'
							+'<div class="j-ss">计划实施&nbsp;('+rows[i]['p_imple']+')</div>'
							+'<div class="j-sw">计划收尾&nbsp;('+rows[i]['p_closeout']+')</div>'
							+'<div class="j-ys">计划验收&nbsp;('+rows[i]['p_check']+')</div>'
						+'</div>'
						+'<div style="color:#999;height:23px;line-height:23px;width:750px;overflow:hidden;">项目要求：'+rows[i]['p_remark']+'</div>'
					+'</div>'
                  
                   +'</div>'  
                    +'<!--<div class="pl-con-right">'
                       +' <p style="margin-top:30px;">项目地点：清原站</p>' 
                   +' </div>-->'
                   +'<div class="pl-con-right2" style="position: absolute;right:14px;">'
					if(rows[i]['Camount']==0){
						html+='<p class="p01"><span style="font-size:14px;color:#666;">暂无合同额</p>';	
					}else{
						 html+='<p class="p01"><span style="font-size:14px;color:#666;">合同额:&nbsp;&nbsp;&nbsp;&nbsp;</span>'+rows[i]['Camount']+'万</p>' 
					}

                       
						
						html+='<!--<p style="color:#0084ff;margin-top:30px;font-weight:700;" class="p02">费用:  50%回款：'+rows[i]['percent']+' &nbsp;'+rows[i]['Pamount']+'</p>-->'
						+'<p style="color:green;font-weight:700;" class="p03">进度:  '+rows[i]['ProSpeed']+'<!--回款：'+rows[i]['percent']+' &nbsp;'+rows[i]['Pamount']+'--></p>'
                        +'<p style="margin-top:24px;"><span class="s03">3</span><span class="s02"></span><span class="s01"></span></p> '
                  +' </div>'
                +'</li>'
				+'<div class="psl-record" id="ttt" >'					
				+'</div>';
				

          	    }
          	    $(".pl-con").html(html);
          	}
          }
});	
}




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


function ProListInfo(obj){
	
	$(obj).addClass('check');
		
		$(obj).next('#ttt').toggle(600); 
		
		$('li:not(.check)').next('#ttt').hide();
		
		$(obj).removeClass();

	 var n_id=$(obj).attr('id');
	 //alert(n_id);
	 var url=$('#progress_list').val();
	 var info="n_id="+n_id;
	 var html='';
	 //<div class="psl-record-con"><p>容内容</p><label>2016-07-14 14:38</label></div>
	 $.post(url,info,function(data){
		 if(data==null){
			 //alert('该项目暂无项目进度记录');
			// $(obj).next('#ttt').hide(); 
			 html+='<div class="psl-record-con"><p>该项目暂无项目进度记录</p></div>';
		 }else{
			 for(var i=0;i<data.length;i++)
		      {	
					 html+='<div class="psl-record-con"><p>'+data[i]['p_remark']+'</p><label>'+data[i]['p_time']+'</label></div>';
			
		      }
			 //alert(html);
			 $(obj).next('#ttt').html(html);
			
		 } 
	 },'json');
    







}

/*
$('.dblbtn').dblclick(function(){
	window.location.href = "/Qh_tpc/index.php/Admin/Project/project_details.html?pid="+$(this).attr('id');
})
*/
	
function sss(obj){
	//alert(111);
	//存cookie
	document.cookie="detial_type=xm";
	window.location.href = "/Qh_tpc/index.php/Admin/Project/project_details.html?pid="+$(obj).attr('id');
}



//金额
var Price = '';


//公司
var Com = '';

//时间
var time='';

//排序////////////////////////////////////////////////////////////////////////
var order='';

//项目名搜索
var Search=''

$(function(){

//监听金额
$('#PriceRange dd a').click(function(){
	Price = $(this).attr('values');
	SubAjaxInfo();
});
	

//监听公司
$('#ComRange dd a').click(function(){
	
//	if(Com==''){
//		$('#not_do').show();
//	}
	
	Com = $(this).attr('values');
	SubAjaxInfo();
});

//监听时间
$('#time_ok').click(function(){
	
//	if(Com==''){
//		$('#not_do').hide();
//	}
	
	var start=$('#start_time').val();
	var stop=$('#stop_time').val();
	if(start==''){
		alert('请选择开始时间');
		exit;
	}
	if(stop!=''){
		time=start +'~'+ stop;
	}else{
		time=start +'d';
	}
	SubAjaxInfo();
	//alert(time);
});

//全部清除
$('#clear_all').click(function(){
	window.location.href=window.location.href;
});


$('.custom').find('dt').css('background-color','#333')

$('.date_picker7').date_input();
$('.date_picker8').date_input();
});
 $('#data1').click(function(){

      $('.data1').toggle();
     
    });
</script>
<!-- 筛选 -->
<script>
    var dlNum  =$("#selectList").find("dl");
    for (i = 0; i < dlNum.length; i++) {
        $(".hasBeenSelected .clearList").append("<div class=\"selectedInfor selectedShow\" style=\"display:none\"><label></label><em onclick='clear_one(this)'></em></div>");
    }
    
    var refresh = "true";
    
    $(".listIndex a ").live("click",function(){
        var text =$(this).text();
        
        var type=$(this).attr('type');  //加类型，用于清除某个筛选项时走ajax
        
        var selectedShow = $(".selectedShow");
        var textTypeIndex =$(this).parents("dl").index();
        var textType =$(this).parent("dd").siblings("dt").text();
        index = textTypeIndex -(2);
        $(".clearDd").show();
        $(".selectedShow").eq(index).show();
        $(this).addClass("selected").siblings().removeClass("selected");
        selectedShow.eq(index).find("span").text(textType);
        selectedShow.eq(index).find("label").text(text);
        
        
        selectedShow.eq(index).find("em").attr('type',type);//加类型，用于清除某个筛选项时走ajax
        
        var show = $(".selectedShow").length - $(".selectedShow:hidden").length;
        if (show > 1) {
            $(".eliminateCriteria").show();
        }
       
    });
    $(".selectedShow em").live("click",function(){
        $(this).parents(".selectedShow").hide();
        var textTypeIndex =$(this).parents(".selectedShow").index();
        index = textTypeIndex;
        $(".listIndex").eq(index).find("a").removeClass("selected");
        
        if($(".listIndex .selected").length < 2){
            $(".eliminateCriteria").hide();
             $('.data1').hide();
        }
    });
    
    $(".eliminateCriteria").live("click",function(){
        $(".selectedShow").hide();
        $('.data1').hide();
        $(this).hide();
        $(".listIndex a ").removeClass("selected");
    }); 

    $('.Import-data-btn input').click(function(){

      $('.Id-Box').show();
    });
      $('.Id-con .b02').click(function(){

      $('.Id-Box').hide();
    });
      
     
//清除某一条
function clear_one(obj){
	var ty=$(obj).attr('type');
    switch(ty){
	    case 'Com' : Com='';break;
	    case 'Price' : Price='';break;
	    case 'time' : time='';break;
    }
    SubAjaxInfo();
}            
      
      
 $('#imp_data').click(function(){
	 if($('#select_type').val()==0){
		 alert('请选择数据类型');
		 exit;
	 }
	 if($('#excel').val()==''){
		 alert('请选择文件');
		 exit;
	 }
	 
	 $('#import').submit();
	 //alert(0);
 });

  //默认排序//////////////////////////////////////////////////////////////////////////////////////////
 $('#admin_order').click(function(){
	 //Com = $(this).attr('values');
	 //class="a01"
	 $('#money_order').removeClass();
	 $(this).addClass('a01');
	 order ='';
	 SubAjaxInfo();
 });
 
 //合同额排序
$('#money_order').click(function(){
	 $('#admin_order').removeClass();
	$(this).addClass('a01');
	order = $(this).attr('order');
	 SubAjaxInfo();
 });
 
 //搜索
 $('#search_ok').click(function(){
	
	 Search=$('#search').val();
	 SubAjaxInfo();
	 
 }); 
	 
</script>
</body>
</html>