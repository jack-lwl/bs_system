<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>人员管理_透明化</title>
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

		<div class="navbar-inner">
	<div class="container-fluid">

		<!-- BEGIN LOGO -->
		<a class="brand" href="index.html">
			<img src="/Qh_tpc/public/admin/image/logo.png" alt="logo"/>
		</a>
		<!-- END LOGO -->

		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
			<img src="/Qh_tpc/public/admin/image/menu-toggler.png" alt="" />
		</a>

		<!-- END RESPONSIVE MENU TOGGLER -->

		<!-- BEGIN TOP NAVIGATION MENU -->

		<ul class="nav pull-right">

			<!-- BEGIN NOTIFICATION DROPDOWN -->

			<li class="dropdown" id="header_notification_bar">

				<a href="#" class="dropdown-toggle" data-toggle="dropdown">

				<i class="icon-warning-sign"></i>

				<!-- <span class="badge">6</span> -->

				</a>

				<ul class="dropdown-menu extended notification">

					<li>

						<p>You have 14 new notifications</p>

					</li>

					<li>

						<a href="#">

						<span class="label label-success"><i class="icon-plus"></i></span>

						New user registered.

						<span class="time">Just now</span>

						</a>

					</li>

					<li>

						<a href="#">

						<span class="label label-important"><i class="icon-bolt"></i></span>

						Server #12 overloaded.

						<span class="time">15 mins</span>

						</a>

					</li>

					<li>

						<a href="#">

						<span class="label label-warning"><i class="icon-bell"></i></span>

						Server #2 not respoding.

						<span class="time">22 mins</span>

						</a>

					</li>

					<li>

						<a href="#">

						<span class="label label-info"><i class="icon-bullhorn"></i></span>

						Application error.

						<span class="time">40 mins</span>

						</a>

					</li>

					<li>

						<a href="#">

						<span class="label label-important"><i class="icon-bolt"></i></span>

						Database overloaded 68%.

						<span class="time">2 hrs</span>

						</a>

					</li>

					<li>

						<a href="#">

						<span class="label label-important"><i class="icon-bolt"></i></span>

						2 user IP blocked.

						<span class="time">5 hrs</span>

						</a>

					</li>

					<li class="external">

						<a href="#">See all notifications <i class="m-icon-swapright"></i></a>

					</li>

				</ul>

			</li>

			<!-- END NOTIFICATION DROPDOWN -->

			<!-- BEGIN INBOX DROPDOWN -->

			<li class="dropdown" id="header_inbox_bar">

				<a href="#" class="dropdown-toggle" data-toggle="dropdown">

				<i class="icon-envelope"></i>

				<!-- <span class="badge">5</span> -->

				</a>

				<ul class="dropdown-menu extended inbox">

					<li>

						<p>You have 12 new messages</p>

					</li>

					<li>

						<a href="inbox.html?a=view">

						<span class="photo"><img src="/Qh_tpc/public/admin/image/avatar2.jpg" alt="" /></span>

						<span class="subject">

						<span class="from">Lisa Wong</span>

						<span class="time">Just Now</span>

						</span>

						<span class="message">

						Vivamus sed auctor nibh congue nibh. auctor nibh

						auctor nibh...

						</span>

						</a>

					</li>

					<li>

						<a href="inbox.html?a=view">

						<span class="photo"><img src=".//Qh_tpc/public/admin/image/avatar3.jpg" alt="" /></span>

						<span class="subject">

						<span class="from">Richard Doe</span>

						<span class="time">16 mins</span>

						</span>

						<span class="message">

						Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh

						auctor nibh...

						</span>

						</a>

					</li>

					<li>

						<a href="inbox.html?a=view">

						<span class="photo"><img src=".//Qh_tpc/public/admin/image/avatar1.jpg" alt="" /></span>

						<span class="subject">

						<span class="from"><?php echo $username;?></span>

						<span class="time">2 hrs</span>

						</span>

						<span class="message">

						Vivamus sed nibh auctor nibh congue nibh. auctor nibh

						auctor nibh...

						</span>

						</a>

					</li>

					<li class="external">

						<a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>

					</li>

				</ul>

			</li>

			<!-- END INBOX DROPDOWN -->

			<!-- BEGIN TODO DROPDOWN -->

			<li class="dropdown" id="header_task_bar">

				<a href="#" class="dropdown-toggle" data-toggle="dropdown">

				<i class="icon-tasks"></i>

				<!-- <span class="badge">5</span> -->

				</a>

				<ul class="dropdown-menu extended tasks">

					<li>

						<p>You have 12 pending tasks</p>

					</li>

					<li>

						<a href="#">

						<span class="task">

						<span class="desc">New release v1.2</span>

						<span class="percent">30%</span>

						</span>

						<span class="progress progress-success ">

						<span style="width: 30%;" class="bar"></span>

						</span>

						</a>

					</li>

					<li>

						<a href="#">

						<span class="task">

						<span class="desc">Application deployment</span>

						<span class="percent">65%</span>

						</span>

						<span class="progress progress-danger progress-striped active">

						<span style="width: 65%;" class="bar"></span>

						</span>

						</a>

					</li>

					<li>

						<a href="#">

						<span class="task">

						<span class="desc">Mobile app release</span>

						<span class="percent">98%</span>

						</span>

						<span class="progress progress-success">

						<span style="width: 98%;" class="bar"></span>

						</span>

						</a>

					</li>

					<li>

						<a href="#">

						<span class="task">

						<span class="desc">Database migration</span>

						<span class="percent">10%</span>

						</span>

						<span class="progress progress-warning progress-striped">

						<span style="width: 10%;" class="bar"></span>

						</span>

						</a>

					</li>

					<li>

						<a href="#">

						<span class="task">

						<span class="desc">Web server upgrade</span>

						<span class="percent">58%</span>

						</span>

						<span class="progress progress-info">

						<span style="width: 58%;" class="bar"></span>

						</span>

						</a>

					</li>

					<li>

						<a href="#">

						<span class="task">

						<span class="desc">Mobile development</span>

						<span class="percent">85%</span>

						</span>

						<span class="progress progress-success">

						<span style="width: 85%;" class="bar"></span>

						</span>

						</a>

					</li>

					<li class="external">

						<a href="#">See all tasks <i class="m-icon-swapright"></i></a>

					</li>

				</ul>

			</li>

			<!-- END TODO DROPDOWN -->

			<!-- BEGIN USER LOGIN DROPDOWN -->

			<li class="dropdown user">

				<a href="#" class="dropdown-toggle" data-toggle="dropdown">

				<img alt="" src="/Qh_tpc/public/admin/image/avatar1_small.jpg" />
				
				<span class="username"><?php echo session('name'); ?></span>

				<i class="icon-angle-down"></i>

				</a>

				<ul class="dropdown-menu">
					<li><a href="<?php echo U('Admin/User/userOut');?>"><i class="icon-key"></i> 退 出</a></li>
				</ul>

			</li>

			<!-- END USER LOGIN DROPDOWN -->

		</ul>

		<!-- END TOP NAVIGATION MENU -->
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
							人员管理 <small>Project List</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								透明化
								<i class="icon-angle-right"></i>
							</li>
							<li>
								人员管理
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
									<i class="icon-group"></i>人员列表
								</div>
								<div class="tools">
									<a href="javascript:;" class="reload"></a>
								</div>
								<!--<a href="#myModal1" class="btn red mini fr" data-toggle="modal">添加人员</a> --> 
							</div>

							<div class="portlet-body">
								<table class="table table-striped table-bordered table-hover table-full-width" data-jobList='{"1":"前台","2":"行政","3":"人事","4":"工程师","5":"软件开发","6":"财务主管","7":"出纳","8":"成本"}' id="sample_1">
									<thead>
										<tr>
											<th class="hidden-480">姓名</th>
											<th>登入名</th>
											<th>电话号</th>
											<th class="hidden-480">职位</th>
											<th class="hidden-480">修改</th>
										</tr>
									</thead>
									<tbody>
										<?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($k % 2 );++$k;?><tr data-id="<?php echo $list['Cuserid'];?>">
											<td class="hidden-480"><?php echo $list['user_name'];?></td>
											<td><?php echo $list['user_code'];?></td>
											<td><?php echo $list['str_tel'];?></td>
											<td class="hidden-480"><?php echo $list['str_postion'];?></td>
											<td><a class="btn purple mini J_modifyJob" ajax-url="<?php echo U('Admin/User/saveUserGetUserInfo');?>" href="javascript:;" data-curjob="[&quot;1&quot;,&quot;2&quot;]">修改</a></td>
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
	<script src="/Qh_tpc/public/admin/js/personManage.js"></script>
	<!-- END PAGE LEVEL SCRIPTS -->

	<!-- END JAVASCRIPTS -->
	<!-- BEGIN ADD STAFFLIST -->
	<form action="<?php echo U('Admin/User/saveUserInfo');?>" method="post" id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true" >
		<div class="modal-header">
			<a href="javascript:;"  class="close J_closeModifyStaff"></a>
			<h3 id="myModalLabel1">添加人员：</h3>
		</div>
		<div class="modal-body staffList J_staffList">
			<div class="control-group">
				<label class="control-label">
					<span><i class="required">*</i>姓名：</span>
					<input type="text" name="username" disabled required/>
				</label>
			</div>
			<div class="control-group">
				<label class="control-label">
					<span><i class="required">*</i>登入名：</span>
					<input type="text" name="username" disabled required/>
				</label>
			</div>
			<div class="control-group">
				<label class="control-label">
					<span><i class="required">*</i>密码：</span>
					<input type="password"  name="password" id="submit_form_password" required/>
				</label>
			</div>

			<div class="control-group">
				<label class="control-label">
					<span><i class="required">*</i>确认密码：</span>
					<input type="password" name="rpassword" required/>
				</label>
			</div>
			<div class="control-group">
				<label class="control-label">
					<span><i class="required">*</i>职位列表：</span>
				</label>
				<!-- BEGIN PORTLET-->
				<div class="portlet box">

					<div class="portlet-body form">

						<!-- BEGIN control-group-->

						<div class="control-group">

								<div class="controls J_permissionList">

									<!--<!--要求 ：第个部门职位 将value=职位ID  -->
<select multiple="multiple" id="my_multi_select2" required name="my_multi_select2[]">

<!--<optgroup label="工程部"></optgroup> -->
	
	<?php if(is_array($nothave)): $k = 0; $__LIST__ = $nothave;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nothave): $mod = ($k % 2 );++$k;?><option value="<?php echo $nothave['Cuserid'];?>"><?php echo $nothave['user_name'];?></option><?php endforeach; endif; else: echo "" ;endif; ?>


</select> -->

								</div>

							</div>

						<!-- END control-group-->

					</div>

				</div>
				<!-- END PORTLET-->
			</div>
			
			<input type="hidden" id="user_id" name="saveuserId" />

		</div>
		<div class="modal-footer">
			<a class="btn J_closeModifyStaff" href="javascript:;">取消</a>
			<button type="submit" class="btn blue ClickStaffList"><i class="icon-ok"></i> 确认</button>
		</div>
	</form>
	<!-- END ADD STAFFLIST -->
</body>
<script>
		$(function() {
		   var active = $(".active");
		   active[0].setAttribute('class','start');
		   var start = $(".start");
		   start[3].setAttribute('class','active');

		   App.init(); // initlayout and core plugins
		   TableAdvanced.init();
		   Index.initTableEvent();
		   $('#my_multi_select1').multiSelect();
		   
		   $('.reload').click(function(){
			    //请求更新项目信息
			   location.href = "/Qh_tpc/index.php/Admin/User/saveMysqlUserInfo";	 
		   });
		   
		});
</script>
<!-- END BODY -->
</html>