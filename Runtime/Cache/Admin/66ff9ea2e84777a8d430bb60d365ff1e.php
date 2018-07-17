<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>职位管理_透明化</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="/Qh_tpc/public/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Qh_tpc/public/admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Qh_tpc/public/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Qh_tpc/public/admin/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="/Qh_tpc/public/admin/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="/Qh_tpc/public/admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="/Qh_tpc/public/admin/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="/Qh_tpc/public/admin/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="/Qh_tpc/public/admin/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="/Qh_tpc/public/admin/css/select2_metro.css" />
	<link rel="stylesheet" href="/Qh_tpc/public/admin/css/DT_bootstrap.css" />
	<link href="/Qh_tpc/public/admin/css/multi-select-metro.css"rel="stylesheet" type="text/css" >
	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="/Qh_tpc/public/admin/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="header-BOX">
	<div class="h-logo"><img src="/Qh_tpc/public/admin/image/h-logo.jpg"/></div>
	<div class="h-con">
		<div class="h-title"><p>首页/HOME</p></div>
		<ul class="h-nav">
			<li>1</li>
			<li>2</li>
			<li>3</li>
		</ul>
	</div>
</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>
	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->
	<div class="page-container">

		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu">
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li>
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

					<form action="<?php echo U('Admin/Project/project_material');?>" class="sidebar-search" method="post" >
	<div class="input-box">
		<a href="javascript:;" class="remove"></a>
		<input type="text" id="Search_ProOrm" placeholder="Search..." />
		<input type="button" class="submit" value=" " />
	</div>
</form>

					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>

								<li class="start">
					<a href="<?php echo U('Admin/Project/index');?>">
						<i class="icon-home"></i>
						<span class="title">奇辉项目</span>	
					</a>
				</li>
				<li class="start">
					<a href="<?php echo U('Admin/Project/project_material');?>">
						<i class="icon-cogs"></i>
						<span class="title">项目及物料</span>
					</a>
				</li>
				<li class="start">
					<a href="<?php echo U('Admin/User/staffList');?>">
						<i class="icon-user"></i>
						<span class="title">人员列表</span>
					</a>
				</li>
				<li class="start">
					<a href="<?php echo U('Admin/Postion/jobManagement');?>">
						<i class="icon-user-md"></i>
						<span class="title">职位管理</span>
					</a>
				</li>
				<li class="start">
					<a href="<?php echo U('Admin/Project/projectDetails');?>">
						<i class="icon-user-md"></i>
						<span class="title">项目详情</span>
					</a>
				</li>
				<li class="start"> 
					<a href="<?php echo U('Admin/Materiel/materialDetails');?>">
						<i class="icon-user-md"></i>
						<span class="title">物料详情</span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->

		</div>

		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->
		<div class="page-content">

			<!-- BEGIN PAGE CONTAINER-->

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">
							职位列表 <small>Project List</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								透明化
								<i class="icon-angle-right"></i>
							</li>
							<li>
								职位列表
								<i class="icon-angle-right"></i>
							</li>
						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN EXAMPLE TABLE PORTLET-->

						<div class="portlet box green">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-group"></i>职位列表
								</div>
								<a href="javascript:;" class="btn red mini fr J_addJob">添加职位</a>
							</div>
							<div class="portlet-body">
								<table class="table table-striped table-bordered table-hover table-full-width J_jobTable" data-action-del="<?php echo U('Admin/Postion/delPostion');?>" data-action-add="createPostion" data-action-modify="<?php echo U('Admin/Postion/savePostionAuth');?>" id="sample_1" data-jobList='{"1":"前台","2":"行政","3":"人事","4":"工程师","5":"软件开发","6":"财务主管","7":"出纳","8":"成本"}'>
									<thead>
										<tr>
											<th>职位名称</th>
											<th class="hidden-480">所属部门</th>
											<th>权限</th>
											<th class="hidden-480">操作</th>	
										</tr>
									</thead>
									<tbody>
										<?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($k % 2 );++$k;?><tr data-id="<?php echo $list['postionId'];?>">
											<td><?php echo $list['p_name'];?></td>
											<td class="hidden-480">功能尚未开发</td>
											<td><?php echo $list['auth_name'];?>
											</td>
											<td class="hidden-480">
												<a class="btn purple mini J_modifyJob" ajax-url="<?php echo U('Admin/Postion/getHaveOrNotHave');?>" href="javascript:;" data-curJob='["1","2"]' >修改</a>
												<a href="javascript:;" role="button" class="btn red mini J_delJob">删除</a>
											</td>
										</tr><?php endforeach; endif; else: echo "" ;endif; ?>
									</tbody>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
	2015 &copy; QuickHigh Corporation, All Rights Reserved
</div>
<div class="footer-tools">
	<span class="go-top">
	<i class="icon-angle-up"></i>
	</span>
</div>
	</div>
	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="/Qh_tpc/public/admin/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="/Qh_tpc/public/admin/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="/Qh_tpc/public/admin/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>
	<script src="/Qh_tpc/public/admin/js/excanvas.min.js"></script>
	<script src="/Qh_tpc/public/admin/js/respond.min.js"></script>
	<![endif]-->

	<!-- <script src="/Qh_tpc/public/admin/js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="/Qh_tpc/public/admin/js/jquery.blockui.min.js" type="text/javascript"></script>
	<script src="/Qh_tpc/public/admin/js/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="/Qh_tpc/public/admin/js/jquery.uniform.min.js" type="text/javascript" ></script> -->
	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="/Qh_tpc/public/admin/js/select2.min.js"></script>
	<script src="/Qh_tpc/public/admin/js/jquery.dataTables.min.js"></script>
	<script src="/Qh_tpc/public/admin/js/DT_bootstrap.js"></script>
	<script src="/Qh_tpc/public/admin/js/jquery.bootpag.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="/Qh_tpc/public/admin/js/app.js"></script>
	<script src="/Qh_tpc/public/admin/js/table-advanced.js"></script>
	<script src="/Qh_tpc/public/admin/js/form-components.js"></script>
	<script src="/Qh_tpc/public/admin/js/index.js"></script>
	<script src="/Qh_tpc/public/admin/js/form-wizard.js"></script>
	<script src="/Qh_tpc/public/admin/js/ui-general.js"></script>
	<script src="/Qh_tpc/public/admin/js/jquery.multi-select.js"></script>
	<script src="/Qh_tpc/public/admin/js/jobManagement.js"></script>
	<!-- END PAGE LEVEL SCRIPTS -->

	<script>
		$(function() {
		   App.init(); // initlayout and core plugins
		   TableAdvanced.init();
		   Index.initTableEvent();
//		   FormComponents.init();
$('#my_multi_select1').multiSelect();
		   //验证职位名称是否重复。
		  
		});
	</script>
	<!-- END JAVASCRIPTS -->
	<!-- BEGIN ADD STAFFLIST -->
	<form action="createPostionx" method="post" id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true" >
		<div class="modal-header">
			<a class="close J_closeJobMg" href="javascript:;"></a>
			<h3 id="myModalLabel1">添加职位：</h3>
		</div>
		<div class="modal-body staffList">
			<div class="alert alert-error hide J_msgError">
				<button class="close" data-dismiss="alert"></button>
				<strong>错误提示信息显示在此</strong>
			</div>
			<div class="control-group">
				<label class="control-label">
					<span><i class="required">*</i>职位名称：</span>
					<input type="text" class="m-wrap" name="jobName" id="jobName" data-ajaxurl="/Qh_tpc/index.php/Admin/Postion/CheckPostionNameExit" required/>
				</label>
			</div>
			<div class="control-group">
				<!-- <label class="control-label">
					<span><i class="required">*</i>所属部门：</span>
					<select class="medium m-wrap" tabindex="1" required>
						<option value="">请选择</option>
						<option value="1">商务部</option>
						<option value="2">市场部</option>
						<option value="3">后勤部</option>
						<option value="4">行政部</option>
						<option value="5">客服部</option>
						<option value="6">工程部</option>
						<option value="7">账务部</option>
						<option value="8">研发部</option>
					</select>
				</label>  -->
			</div>
			<div class="control-group">
				<label class="control-label">
					<span> 职位权限：</span>
				</label>
				<!-- BEGIN PORTLET-->
				<div class="control-group">

					<div class="controls J_permissionList">
						<select multiple="multiple" id="my_multi_select1" required name="my_multi_select1[]">
							<?php if(is_array($AuthList)): $k = 0; $__LIST__ = $AuthList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$AuthList): $mod = ($k % 2 );++$k;?><option value="<?php echo $AuthList['a_id'];?>"><?php echo $AuthList['a_name'];?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>

					</div>

				</div>
				<!-- END PORTLET-->
			</div>


		</div>
		<div class="modal-footer">
			<a class="btn J_closeJobMg" href="javascript:;">取消</a>
			<button type="submit" class="btn blue"><i class="icon-ok"></i> 确认</button>
		</div>
	</form>
	<!-- END ADD STAFFLIST -->
</body>
<script>
		$(function() {
		   var active = $(".active");
		   if(active.length>0){
			   active[0].setAttribute('class','start');   
		   }
		   var start = $(".start");
		   start[4].setAttribute('class','active');
		  
		   
		});
</script>
<!-- END BODY -->
</html>