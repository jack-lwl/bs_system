<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>透明化</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link href="/Qh_tpc/public/admin/css/css.css" rel="stylesheet" type="text/css" />
<link href="/Qh_tpc/public/admin/css/table.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/Qh_tpc/public/admin/css/jquery.monthpicker.css">
<link rel="stylesheet" type="text/css" href="/Qh_tpc/public/admin/css/SimpleCanleder.css">


</head>
<body>
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
		<div class="main" style="padding: 10px;">
		 <div class="d-c-title">
                <div class="d-c-square"></div>
                <p><?php echo $small_titleName;?></p>
        </div>
        <div class="p-p-box">
           <a href="results_project.html" >正常项目<span>(<?php echo $total;?>)</span></a>
           <a href="pre_sale_list.html" style="color:#1a96d2;border-bottom: 2px solid #1a96d2;cursor:pointer;text-decoration: none;">售前项目<span>(<?php echo $count;?>)</span></a> 
        </div>
			<div class="d-c-title">
				<div class="d-c-square"></div>
				<p>售前筛选</p>
			</div>
			<div class="selectNumberScreen">
				<div class="hasBeenSelected">
					<dl>
						<dt>您已选择：</dt>
						<dd style="DISPLAY: none" class=clearDd>
							<div class=clearList></div>
							<div style="DISPLAY: none" class="eliminateCriteria" id='clear_all'>清除筛选条件</div>
					</dl>
				</div>
				<div id="selectList" class="screenBox screenBackground">
					<dl class="listIndex" id="ComRange" attr="价格范围">
                      <dt><span></span>分公司：</dt>
                      <dd><a href="javascript:void(0)" values="3" attrval="10万以下" type='Com' id='beijing_total'>北京分公司(<?php echo $total_beijing;?>)</a> 
                      <a href="javascript:void(0)" values="4" attrval="10万-50万" type='Com' id='shanghai_total'>上海分公司(<?php echo $total_shanghai;?>)</a>
                      <a href="javascript:void(0)" values="2" attrval="50万-200万" type='Com' id='guangzhou_total'>广州分公司(<?php echo $total_guangzhou;?>)</a>
                      <a href="javascript:void(0)" values="1" attrval="200万-500万" type='Com' id='shenyang_total'>沈阳分公司(<?php echo $total_shenyang;?>)</a>
                      <a href="javascript:void(0)" values="5" attrval="200万-500万" type='Com' id='dalian_total'>大连分公司(<?php echo $total_dalian;?>)</a>
                    </dl>
                    <!-- 
                    <dl class="listIndex" attr="terminal_brand_s">
                      <dt><span></span>款&nbsp;&nbsp;&nbsp;源：</dt>
                      <dd><a href="javascript:void(0)" values2="" values1="" attrval="">基建</a> 
                      <a href="javascript:void(0)" values2="" values1="" attrval="">更改</a>
                      <a href="javascript:void(0)" values2="" values1="" attrval="">企业</a> 
                      <a href="javascript:void(0)" values2="" values1="" attrval="">成本</a> 
                      <a href="javascript:void(0)" values2="" values1="" attrval="">保价</a> 
                    </dl>  -->
                    
                    
                    <dl class="listIndex" id="Pro_type" attr="项目类型">
                      <dt><span></span>项目类型：</dt>
                      <dd><a href="javascript:void(0)" values="1" attrval="10万以下" type='Type' id='ZC' >正常(<?php echo $total_zhengchang;?>)</a> 
                      <a href="javascript:void(0)" values="2" attrval="10万-50万" type='Type' id='LS' >落实(<?php echo $total_luoshi;?>)</a>
                      <a href="javascript:void(0)" values="3" attrval="50万-200万" type='Type' id='SX' >失效(<?php echo $total_shixiao;?>)</a>
                    </dl>
                    
                   
					<dl class="listIndex" id="PriceRange" attr="价格范围">
						<dt>
							<span></span>金&nbsp;&nbsp;&nbsp;额：
						</dt>
						<!--<dd><a href="<?php echo U('Admin/Project/pre_sale_list',array('f_money'=>'10x'));?>" values2="100000" values1="0" attrval="10万以下">10万以下</a>-->
						<dd>
						  <a href="javascript:void(0)" values="100000x" attrval="10万以下" type='Price' id='lt_10' >10万以下(<?php echo $total_100000x;?>)</a> 
	                      <a href="javascript:void(0)" values="100000~500000" attrval="10万-50万" type='Price' id='10_50' >10万-50万(<?php echo $total_100000_500000;?>)</a>
	                      <a href="javascript:void(0)" values="500000~2000000" attrval="50万-200万" type='Price' id='50_200' >50万-200万(<?php echo $total_500000_2000000;?>)</a>
	                      <a href="javascript:void(0)" values="2000000~5000000" attrval="200万-500万" type='Price' id='200_500' >200万-500万(<?php echo $total_2000000_5000000;?>)</a>
	                      <a href="javascript:void(0)" values="5000000d" attrval="500万以上" type='Price' id='gt_500' >500万以上(<?php echo $total_5000000d;?>)</a></dd>
						</dd>
					</dl>
					<dl class=" listIndex" attr="terminal_os_s">
						<dt>
							<span></span>时&nbsp;&nbsp;&nbsp;间：
						</dt>
						<dd>
							<a href="javascript:void(0)" values2="" values1=""
								attrval="预计确认时间" id="data1" type='time_queren'>预计确认时间</a> <a
								href="javascript:void(0)" values2="" values1="" attrval="计划回款时间"
								id="data2" type='time_huikuan'>售前建立时间</a> <a href="javascript:void(0)" values2=""
								values1="" attrval="成功率" id="data3" type='Success'>成功率</a>
						</dd>
					</dl>
					<div class="data1">
						<input type="text" id="date_picker1" class="date_picker1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;至&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
							type="text" id="date_picker2" class="date_picker2"/ ><input
							type="button" onclick="exConfirm()" value="确认" class="in02" />
					</div>
					<div class="data2">
						<input type="text" id="date_picker3" class="date_picker3"><input
							type="text" id="date_picker4" class="date_picker4"><input
							type="button" onclick="planPayment()" value="确认" class="in02" />
					</div>
					<div class="data3">
						<select id="SuccessSelect"><option>请选择</option>
							<option value="0%~10%">0%~10%</option>
							<option value="10%~20%">10%~20%</option>
							<option value="20%~30%">20%~30%</option>
							<option value="30%~40%">30%~40%</option>
							<option value="40%~50%">40%~50%</option>
							<option value="50%~60%">50%~60%</option>
							<option value="60%~70%">60%~70%</option>
							<option value="70%~80%">70%~80%</option>
							<option value="80%~90%">80%~90%</option>
							<option value="90%~100%">90%~100%</option></select>
					</div>
				</div>
			</div>
			<!-- 售前列表 -->
			<div class="d-c-title">
				<div class="d-c-square"></div>
				<p>售前列表</p>
			</div>
			<div class="pre-list-Sort">
				<div class="pls-top">
					<div class="pls-top-left">
						<p style="font-weight: 700; font-size: 14px;">合计：</p>
						<p>
							<span id='shouqian_total' class="zje">正常售前项目总金额：</span><span id="html_sum"><?php echo $sum;?></span>
						</p>
						<p>
							总成功率后金额：<span id="html_succe_sum"><?php echo $succe_sum;?></span>
						</p>
					</div>
					<div class="pls-top-right">
						<input type="button" value="新建售前" id="pre-s-news" />
						<input type="button"  sub-url="<?php echo U('Admin/SaleRecord/excel_sale_record');?>" onclick="exportData(this)" value="导出数据" />
					</div>
				</div>
				<div class="pls-bootom">
					<ul>
						<li><a class="a01">默认排序</a></li>
						<li><a>立项日期</a></li>
						<li><a>回款时间</a></li>
				<!-- 		<li><a>金额</a></li>
						<li><a>进度</a></li>
						<li><a>关注度</a></li> -->
						<li style="margin-left:30px;color:#1a96d2;"><input type="checkbox" style="vertical-align:middle;margin-top:-4px;margin-right:10px;"/>只看有更新</li>
					</ul>
					<div class="pls-bootom-right">
						<p>
							共找到<span id="html_count"><?php echo $count;?></span>个售前项目
						</p>
					</div>
				</div>
			</div>
			<!-- 列表内容 -->
			<ul class="pl-con">
				<?php if(is_array($rows)): foreach($rows as $key=>$rows): ?><li onclick="aaa(this)" n_id="<?php echo $rows['n_id'];?>" id="bbb" >
					<!--<div class="pl-con-left"></div> -->
					<div class="pl-con-center">
						<p class="p01"><?php echo $rows['p_name'];?></p>
						<p>
							<a>创建时间：<?php echo $rows['c_time'];?></a><a>预计确认时间：<span
								style="color: red; width: 80; font-weight: 700;"><?php echo $rows['c_ok_time'];?></span></a>
						</p>
						<p>
							<a>跟踪负责人：<?php echo $rows['name'];?></a><a>建设单位：<?php echo $rows['str_c_name'];?></a><a>款源：<?php echo $rows['c_source'];?></a>
						</p>
						<p>备注：<?php echo $rows['str_remarks'];?></p>
					</div>
					<div class="pl-con-right">
						<p style="margin-top: 30px;">预计回款时间：<?php echo $rows['c_rm_time'];?></p>
						<p>成功率：<?php echo $rows['c_success'];?></p>
						<p>
							<!--<span class="s01">成本</span>--> <span class="s02"><?php echo $rows['c_name'];?></span>
						</p>
					</div>
					<div class="pl-con-right2">
						<p class="p01"><?php echo $rows['f_money'];?>万</p>
						<p style="margin-bottom: 20px;">成功率后金额：<?php echo $rows['s_success_money'];?>万</p>
						<p>
							<span n_id="<?php echo $rows['n_id'];?>" class="s02" onclick="updata_sale(this)"></span><span class="s01"></span>
						</p>
					</div>

				</li>
				<div class="psl-record" id="ttt">
					<div class="psl-record-con">
						<p>这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容</p>
						<label>2016-07-14 14:38</label>
					</div>
					<div class="psl-record-con">
						<p>这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里</p>
						<label>2016-07-14 14:38</label>
					</div>
					<div class="psl-record-con">
						<p>这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里是记录的内容这里</p>
						<label>2016-07-14 14:38</label>
					</div>
					
				</div><?php endforeach; endif; ?>
			</ul>
			<!-- 新建售前 -->
			<div class="new-preBox">
				<div class="shelter"></div>
				<div class="pre-con">
					<div class="pre-con-title">新建售前</div>
					<ul class="pc-con">
					    <li>
					    	<label>公司名称：</label>
					    	<div class=box>
					    		<div class=box2>
						    		<select  hidefocus id='company'>
						    		 <option value=0>请选择公司</option>
									 <option value=1>沈阳分公司</option>
									 <option value=2>广州分公司</option>
									 <option value=3>北京分公司</option>
									 <option value=4>上海分公司</option>
									 <option value=5>大连分公司</option>
									 </select>
								 </div>
							</div>
 
					    </li>
						<li><label>项目名称：</label><input id="ProName" placeholder="请填写售前项目名称" /></li>
						<li><label>预计确认时间：</label><input id="OktimeInput" type="text" class="date_picker5" /></li>
						<li><label>计划回款时间：</label><input id="PTimeInput" type="text"  /></li>
						
						<li><label>款源：</label><input placeholder="请填写款源" id="kuan"/></li>
						<li>
							<label>类型：</label>
	<!-- 						<div class="r-box"><input type="radio" name="a" value=3 class="ra01" id='chec'/>失效</div> -->
							<div class="r-box"><input type="radio" name="a" value=2 class="ra01" id='chec'/>落实</div>
							<div class="r-box"><input type="radio" name="a" value=1 class="ra01" id='chec' checked=checked/>正常</div>	
						</li>
						<li><label>金额：</label><input id="amountInput" placeholder="200,000,000" onblur="cheng1()"/></li>
						<li><label>成功率：</label><input placeholder="请输入整数百分数"  id='success_percent' onblur="cheng2()"/></li>
						<li><label>计算成功率后金额：</label><input id="SMoneyInput" placeholder="1800,000,000" /></li>
						<li><label>建设单位：</label><input id="ComInput" placeholder="请填写建设单位" /></li>
						<li ><label>跟踪负责人：</label><!-- <input id="personInput" placeholder="马小俊" /> -->
							<input id="NewAddName" class="xl02"/>
							<div class="xl-con" id="fuze">
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
							</div>
						</li>
						<li style="height: 60px;">
							<label style="width: 8%;line-height:20px;">备注：</label>
							<textarea id="RemarkInput" placeholder="请填写备注信息"></textarea>
						</li>
						<li style="border: none;height:40px;">
							<button id="add_sale">确认</button>
							<button id="pre-s-esc">取消</button>
						</li>
					</ul>
				</div>
			</div>
			<!-- 编辑售前 -->
			<div class="new-preBox2">
				<div class="shelter"></div>
				<div class="pre-con">
					<div class="pre-con-title">编辑售前</div>
					<ul class="pc-con2">
					    <li>
					    
					    	<label>公司名称：</label>
					    	<div class=box>
					    		<div class=box2>
						    		<select  hidefocus id='company_up'>
						    		 <option value=0>请选择公司</option>
									 <option value=1>沈阳分公司</option>
									 <option value=2>广州分公司</option>
									 <option value=3>北京分公司</option>
									 <option value=4>上海分公司</option>
									 <option value=5>大连分公司</option>
									 </select>
								 </div>
							</div>
 
 
					    </li>
					  
					    
						<li><label>项目名称：</label><input id="ProName_up" placeholder="请填写售前项目名称" /></li>
						<li><label>预计确认时间：</label><input id="OktimeInput_up" type="text" class="date_picker5" /></li>
						<li><label>计划回款时间：</label><input id="PTimeInput_up" type="text"  /></li>
						
						<li><label>款源：</label><input placeholder="请填写款源" id="kuan_up"/></li>
					
						<li>
							<label>类型：</label>
							<div class="r-box"><input type="radio" name="b" class="ra01" id='chec_up' value=3 />失效</div>
							<div class="r-box"><input type="radio" name="b" class="ra01" id='chec_up' value=2 />落实</div>
							<div class="r-box"><input type="radio" name="b" class="ra01" id='chec_up' value=1 />正常</div>	
						</li>
						<li><label>金额：</label><input id="amountInput_up" placeholder="200,000,000" onblur="cheng3()"/></li>
						<li><label>成功率：</label><input placeholder="请输入整数百分数" id='success_percent_up' onblur="cheng4()"/></li>
						<li><label>计算成功率后金额：</label><input id="SMoneyInput_up" placeholder="1800,000,000" /></li>
						<li><label>建设单位：</label><input id="ComInput_up" placeholder="请填写建设单位" /></li>
						<li ><label>跟踪负责人：</label><!-- <input id="personInput" placeholder="马小俊" /> -->
						
							<input class="xl02" id='personInput_up'/>
							<div class="xl-con" id="fuze_up">
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
								<p><input type="checkbox" class="TTh-in01"/><span>马俊</span><span>软件工程师</span></p>
							</div>
						</li>
						<li style="height: 60px;">
							<label style="width: 8%;line-height:20px;">备注：</label>
							<textarea id="RemarkInput_up" placeholder="请填写备注信息"></textarea>
						</li>
						<li style="border: none;height:40px;">
							<button id="updata_ok">确认</button>
							<button id="pre-s-esc2">取消</button>
						</li>
					</ul>
				</div>
			</div>
		
		

		</div>
		
		<input type="hidden" id="add_sale_record" value="<?php echo U('Admin/SaleRecord/add_sale_record');?>"/>
		
		<input type="hidden" id="updata_sale_record" value="<?php echo U('Admin/SaleRecord/updata_sale_record');?>"/>
		
		<input type="hidden" id="url_fuzhi" value="<?php echo U('Admin/SaleRecord/select_one_sale_record');?>"/>
		
		<input type="hidden" id="url_record" value="<?php echo U('Admin/SaleRecord/select_sale_save_record');?>"/>
		
		<input type="hidden" id="select_yewu" value="<?php echo U('Admin/SaleRecord/select_yewu');?>"/>
		
		<input type="hidden" id="up_n_id" />
		
		<input type="hidden" id="fu_check" />
		
		
		
		<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js"
			type="text/javascript"></script>
		<script src="/Qh_tpc/public/admin/js/jquery-1.4.3.min.js"
			type="text/javascript"></script>
		<script src="/Qh_tpc/public/admin/js/jquery-1.8.3.min.js"
			type="text/javascript"></script>
		<script src="/Qh_tpc/public/admin/js/jquery.date_input.pack.js"></script>
		<script src="/Qh_tpc/public/admin/js/pre_sale_list.js"></script>
		<script src="/Qh_tpc/public/admin/js/jquery.monthpicker.js"></script>
        <script src="/Qh_tpc/public/admin/js/SimpleCanleder.js"></script>
		<!-- 左侧目录 jq-->
		<script type="text/javascript">

//金额
var Com = '';		
//金额
var Price = '';
//确认时间
var confirm = '';
//回款时间
var Payment = '';
//成功率
var Success = '';

//预计确认开始时间
var Picker1 = '';
//预计确认结束时间
var Picker2 = '';
//计划回款开始时间
var Picker3 = '';
//计划回款结束时间
var Picker4 = '';

var time_queren='';

var time_huiquan='';

var Type='';



function ontest(){
	alert('xx');
}


//提交ajax走数据
function SubAjaxInfo(){
	
	$.ajax({  
              url:"/Qh_tpc/index.php/Admin/Project/PostSaleInfo",  
              type:"post",  
              async:true,  
              data:{'f_money':Price,'c_ok_time':time_queren,'c_rm_time':time_huiquan,'c_success':Success,'Com_id':Com,'c_type':Type},  
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
      		   
      		   
      		 if(data['total_type']!=''){
    			   
   			    $("#ZC").html('正常('+data['total_type']['zhengchang']+')');
   				
   				$("#LS").html('落实('+data['total_type']['luoshi']+')');
   				
   				$("#SX").html('失效('+data['total_type']['shixiao']+')');
 
               }	
            	  
            	  
            	  
            	  
            	  
            	if(!data['rows']){
            		$(".pl-con").html("");
					$("#html_sum").html(0);
            		$("#html_succe_sum").html(0);
            		$("#html_count").html(0);
            		exit;
            	}else{
            		
            		var rows = data['rows'];
            		
            		$("#html_sum").html(data['sum']);
            		
            		$("#html_succe_sum").html(data['succe_sum']);
            		
            		$("#html_count").html(data['count']);
            		
            		var html = "";
            		
            	    for(var i=0;i<rows.length;i++){
			    		html += '<li onclick="aaa(this)" n_id='+rows[i]['n_id']+' id="bbb"><div class="pl-con-center"><p class="p01">'+rows[i]['p_name']+'</p><p><a>创建时间：'+rows[i]['c_time']+'</a><a>预计确认时间：<span style="color:red;width:80;font-weight:700;">'+rows[i]['c_ok_time']+'</span></a></p><p><a>跟踪负责人：'+rows[i]['name']+'</a><a>建设单位：'+rows[i]['str_c_name']+'</a><a>款源：<?php echo $rows['c_source'];?></a></p><p>备注：'+rows[i]['str_remarks']+'</p></div> <div class="pl-con-right"><p style="margin-top:30px;">预计回款时间：'+rows[i]['c_rm_time']+'</p><p>成功率：'+rows[i]['c_success']+'</p><p><span class="s02">'+rows[i]['c_name']+'</span></p></div><div class="pl-con-right2"><p class="p01">'+rows[i]['f_money']+'万</p><p style="margin-bottom:20px;">成功率后金额：'+rows[i]['s_success_money']+'万</p><p><span n_id='+rows[i]['n_id']+' class="s02" onclick="updata_sale(this)"></span><span class="s01"></span></p></div></li><div class="psl-record" id="ttt"></div>';

            	    }
            	    $(".pl-con").html(html);
            	}
            }
  });
	
}

//导出数据
function exportData(obj){
	window.location.href = $(obj).attr('sub-url')+"?f_money="+Price;
}

$(function(){
	$('.results-situation').find('dt').css('background-color','#333')
//监听金额
$("#PriceRange a").click(function(){
	Price = $(this).attr('values');
	SubAjaxInfo();
});
//监听成功率
$("#SuccessSelect").change(function(){
	Success = $(this).val();
	SubAjaxInfo();
});

//监听公司
$('#ComRange dd a').click(function(){
	
	//if(Com==''){
	//	$('#not_do').show();
	//}
	
	Com = $(this).attr('values');
	SubAjaxInfo();
});



//监听项目类型
$("#Pro_type dd a").click(function(){		
	//alert(111);
	Type = $(this).attr('values');
	if(Type==1){
		$('#shouqian_total').html('正常售前项目总金额：');
	}else if(Type==2){
		$('#shouqian_total').html('落实售前项目总金额：');
	}else{
		$('#shouqian_total').html('失效售前项目总金额：');
	} 
	SubAjaxInfo();
});



	
});
//预计确认
function exConfirm(){
	Picker1 = $("#date_picker1").val();
	Picker2 = $("#date_picker2").val();
	
	if(Picker1==''){
		alert('请选择开始时间');
		exit;
	}

	if(Picker2==''){
		alert('请选择结束时间');
		exit;
	}

	if(Picker2!=''){
		time_queren=Picker1 +'~'+ Picker2;
	}else{
		time_queren=Picker1 +'d';
	}
	SubAjaxInfo();
	
}
//计划回款
function planPayment(){
	Picker3 = $("#date_picker3").val();
	Picker4 = $("#date_picker4").val();
	
	if(Picker3==''){
		alert('请选择开始时间');
		exit;
	}

	if(Picker4==''){
		alert('请选择结束时间');
		exit;
	}



	if(Picker4!=''){
		time_huiquan=Picker3 +'~'+ Picker4;
	}else{
		time_huikuan=Picker3 +'d';
	}
	SubAjaxInfo();
}

//提交售前
function addSaleRecordInfo(){
	
	var ProName = $("#ProName").val();
		
	var OktimeInput = $("#OktimeInput").val();

	var PTimeInput = $("#PTimeInput").val();

	var amountInput = $("#amountInput").val();

	var SMoneyInput = $("#SMoneyInput").val();

	var ComInput = $("#ComInput").val();

	var personInput = $("#personInput").val();
	
	var RemarkInput = $("#RemarkInput").val();
	
	
	
	
	
}




$(".leftsidebar_box dt").css({"background-color":"#4f5051"});
$(".leftsidebar_box dt img").attr("src","/Qh_tpc/public/admin/image/select_xl01.png");
$(function(){
	
	
	$('#title').bind('contentchanged', function() { 
		// do something after the div content has changed 
		alert('woo'); 
	}); 
	
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


$('.date_picker3').date_input();
$('.date_picker4').date_input();
$('.date_picker5').simpleCanleder();



  $('#data1').click(function(){

      $('.data1').toggle();
       $('.data2').hide();
        $('.data3').hide();
    });
  $('#data2').click(function(){

	  $('.data2').toggle();
      $('.data1').hide();
      $('.data3').hide();
    });
  $('#data3').click(function(){

	  $('.data3').toggle();
      $('.data1').hide();
      $('.data2').hide();
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
        }
    });
    
    $(".eliminateCriteria").live("click",function(){
        $(".selectedShow").hide();
        $('.data1').hide();
        $('.data2').hide();
        $('.data3').hide();
        $(this).hide();
        $(".listIndex a ").removeClass("selected");
    }); 
    
    
  //全部清除
    $('#clear_all').click(function(){
    	window.location.href=window.location.href;
    });
  
//清除某一条
function clear_one(obj){
	var ty=$(obj).attr('type');
    switch(ty){
	    case 'Com' : Com='';break;
	    case 'Price' : Price='';break;
	    case 'Success' : Success='';break;
	    case 'time_queren' : time_queren='';break;
	    case 'time_huikuan' : time_huikuan='';break;
	    case 'Type' : Type='';break;
    }
    SubAjaxInfo();
}      
  
  
</script>
<script>

$('#pre-s-news').click(function(){

    $('.new-preBox').show();
   


});

$('#pre-s-esc').click(function(){

    $('.new-preBox').hide();
});

$('#pre-s-esc2').click(function(){

    $('.new-preBox2').hide();
});



function aaa(obj){
	
	 if($(obj).find('.pl-con-right2 .s02').attr('ccc')==1)

    	{
			$(obj).next('#ttt').hide();

			$(obj).find('.pl-con-right2 .s02').attr('ccc',0);
			exit;
    	}
	 
	 
	 $(obj).addClass('check');
		
		$(obj).next('#ttt').toggle(600); 
		
		$('li:not(.check)').next('#ttt').hide();
		
		$(obj).removeClass();
	 
	 var n_id=$(obj).attr('n_id');
	 //alert(n_id);
	 var url=$('#url_record').val();
	 var info="n_id="+n_id;
	 var html='';
	 //<div class="psl-record-con"><p>容内容</p><label>2016-07-14 14:38</label></div>
	 $.post(url,info,function(data){
		 if(data==null){
			 alert('该项目暂无修改记录');
			 $(obj).next('#ttt').hide(); 
		 }else{
			 for(var i=0;i<data.length;i++)
		      {
				 
				 if(data[i]['c_success']=='0000'){   //只改了金额
					// alert('只改了金额');
					 html+='<div class="psl-record-con"><p>金额修改为:'+data[i]['f_money']+'&nbsp;&nbsp;备注:'+data[i]['str_remarks']+'</p><label>'+data[i]['s_time']+'</label></div>';
				 }else if(data[i]['f_money']=='0000'){   //只改了成功率
					 //alert('只改了成功率');
					 html+='<div class="psl-record-con"><p>成功率修改为:'+data[i]['c_success']+'&nbsp;&nbsp;备注:'+data[i]['str_remarks']+'</p><label>'+data[i]['s_time']+'</label></div>';
				 }else{  //改了成功率和金额
					 //alert('改了成功率和金额');
					 html+='<div class="psl-record-con"><p>成功率修改为:'+data[i]['c_success']+';金额修改为:'+data[i]['f_money']+'&nbsp;&nbsp;备注:'+data[i]['str_remarks']+'</p><label>'+data[i]['s_time']+'</label></div>';
				 }
				 
				
		      }
			 //alert(html);
			 $(obj).next('#ttt').html(html);
			
		 } 
	 },'json');
    
	
		
};
$('.pc-con .xl02').click(function(){
	if($('#company').val()==0){
		alert('请先选择公司');
		exit;
	}
	if($('#fuze').html()==''){
		alert('该公司暂无相关人员');
		exit;
	}
	$('.pc-con .xl-con').toggle();
	
});

$('.pc-con2 .xl02').click(function(){

	//$('#personInput_up').val('');
	if($('#company_up').val()==0){
		alert('请先选择公司');
		exit;
	}
	if($('#fuze_up').html()==''){
		alert('该公司暂无相关人员');
		exit;
	}
	$('.pc-con2 .xl-con').toggle();
	

	var temp=$('#fu_check').val()
	temp=temp.split(",");

	var user_id=''
	for(var j=0;j<temp.length;j++){ 
		//user_id+='"'+temp[j]+'"'+',';
		
		$('#fz_user_up[value="'+temp[j]+'"]').prop('checked', true);
	} 
	
	
	//$('#chec_up[value=2]').prop('checked', true);   //类型
	$('#chec_up').val([2]);   //类型
	
	
});

 $('#date_picker1').monthpicker({
		years: [2016,2017,2018],
        topOffset: 6
	})
	 $('#date_picker2').monthpicker({
		years: [2016,2017,2018],
        topOffset: 6
	})

	$(function(){ 
	$(document).bind("click",function(e){ 
	var target = $(e.target); 
		 
	}) 
}) 
</script>
</body>
</html>