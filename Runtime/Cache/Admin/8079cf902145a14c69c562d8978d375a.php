<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>项目详情_透明化</title>
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
	<link href="/Qh_tpc/public/admin/css/multi-select-metro.css"rel="stylesheet" type="text/css" >
	
	
<link rel="stylesheet" type="text/css" href="/Qh_tpc/public/admin/css/bootstrap-fileupload.css">
	
	
	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->

	<link rel="stylesheet" type="text/css" href="/Qh_tpc/public/admin/css/multi-select-metro.css" />
	<link href="/Qh_tpc/public/admin/css/timeline.css" rel="stylesheet" type="text/css"/>
    <style>
		.timeline:before {background:#fff;}
	</style>
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

	<div class="page-container row-fluid">

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
							项目详情 <small><?php echo $project_name;?></small>
						</h3>

						<ul class="breadcrumb">

							<li>
								<i class="icon-home"></i>
								透明化
								<i class="icon-angle-right"></i>
							</li>
							<li>项目列表</li>
							<i class="icon-angle-right"></i>
							<li>项目详情</li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->

						<!-- BEGIN BUTTON -->
						<div class="margin-top-10" style="float:right;">

							<a href="javascript:;" class="btn green icn-only J_jobManage" _data-toggle="modal" data-jobList='<?php echo $nothave;?>' data-curJob='<?php echo $have;?>'>
								<i class="icon-user icon-white"></i>
								增减人员
							</a>
							<a href="#myModal1" class="btn blue"  data-toggle="modal">
								上传物料信息
								<i class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
						<!-- END BUTTON -->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid margin-top-10">

					<div class="span12">

						<ul class="timeline" id="timeline">
							<?php if(is_array($result)): $k = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$result): $mod = ($k % 2 );++$k; if($result['mid'] == ''): ?><li class="timeline-green">

								<div class="timeline-time">

									<span class="date"><?php echo $result['timeDown'];?></span>

									<span class="time"><?php echo $result['timeTop'];?></span>

								</div>

								<div class="timeline-icon"><i class="icon-user"></i></div>

								<div class="timeline-body">

									<h2><?php echo $result['title'];?></h2>

									<div class="timeline-content">
											<?php echo $result['content'];?>
									</div>

								</div>

							</li>
								
								
							<?php else: ?>
								<li class="timeline-blue" >

								<div class="timeline-time">

									<span class="date"><?php echo $result['timeDown'];?></span>

									<span class="time"><?php echo $result['timeTop'];?></span>

								</div>

								<div class="timeline-icon"><i class="icon-barcode"></i></div>

								<div class="timeline-body">

									<h2><?php echo $result['title'];?><span class="fr"><?php echo $result['error'];?>任务进度：<?php echo $result['sumProPercent'];?></span> </h2>

									<div class="timeline-content">
										<?php echo $result['content'];?>
									</div>
									
									<div class="timeline-footer">

										<a href="<?php echo U('Admin/Materiel/materialDetails',array('mid'=>$result['mid']));?>" class="nav-link pull-right">

										详情 <i class="m-icon-swapright m-icon-white"></i>

										</a>

									</div>

								</div>
							</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
						</ul>

					</div>
					<!-- BEGIN Paging-->
					<div class="row-fluid">
						<div class="span6">
	<div class="dataTables_info" id="sample_1_info">Showing 1 to 5</div>
</div>
<div class="span6">
	<div class="dataTables_paginate paging_bootstrap pagination">
		<ul id="Page_Row">
		
			<!--disabled-->
			<li class="prev ">
				<a href="#">← <span class="hidden-480">Previous</span></a>
			</li>
				<?php echo $page;?>
				<li class="next"><a href="#"><span class="hidden-480">Next</span> → </a></li>
		</ul>
	</div>
</div> 
					</div>
					<!-- END Paging-->
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
<script  type="text/javascript" src="/Qh_tpc/public/admin/js/bootstrap-fileupload.js"></script>
	<!--[if lt IE 9]>
	<script src="/Qh_tpc/public/admin/js/excanvas.min.js"></script>
	<script src="/Qh_tpc/public/admin/js/respond.min.js"></script>
	<![endif]-->


	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="/Qh_tpc/public/admin/js/jquery.multi-select.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->

	<!-- END CORE PLUGINS -->
	<script src="/Qh_tpc/public/admin/js/app.js"></script>
	<script src="/Qh_tpc/public/admin/js/form-components.js"></script>
	
	<script src="/Qh_tpc/public/admin/js/table-advanced.js"></script>
	
	<script src="/Qh_tpc/public/admin/js/index.js"></script>
	
	<script src="/Qh_tpc/public/admin/js/projectDetails.js" type="text/javascript"></script>
	<script>
		jQuery(document).ready(function() {
		   // initiate layout and plugins
		   App.init();
		   TableAdvanced.init();
		   Index.initTableEvent();
		   FormComponents.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->

	<!-- BEGIN MARTERIALID-->
	<form action="<?php echo U('Admin/Materiel/createMateriel');?>" method="post" enctype="multipart/form-data" id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			<h3 id="myModalLabel1">上传/创建物料单：</h3>
		</div>
		<div class="modal-body">
			<p>
				<label class="control-label"><span class="required">*</span>物料单号：</label>
				<input type="text" class="" name="number" required>
				<input type="hidden" name="pid" value="<?php echo $pid;?>" />

				<!--<input type="file" name="Mimg" />-->
				<!--如果有内容或过长可以用textarea标签-->
				<!-- <textarea class="txt" placeholder="上传/创建物料单"></textarea> -->
			</p>
							
				<p>
				<label class="control-label"><span class="required">*</span>上传物料单：</label>
				</p>
			<div class="fileupload fileupload-new" data-provides="fileupload">

				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
	
					<img src="/Qh_tpc/public/admin/image/default.png" alt="" />
	
				</div>

				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>

				<div>
	
					<span class="btn btn-file"><span class="fileupload-new">选择图片</span>
	
					<span class="fileupload-exists">修改</span>
	
					<input type="file" name="Mimg" class="default" /></span>
	
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">删除</a>
	
				</div>

			</div>
			
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
			<button type="submit" class="btn blue"><i class="icon-ok"></i> 确认</button>
		</div>
	</form>

	<!-- END MARTERIALID-->


	<form action="<?php echo U('Admin/Project/regulationProUser');?>" method="post" id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-header">
			<a class="close J_closeJobManage" href="javascript:;" title="关闭"></a>
			<h3 id="myModalLabel1">增加/减少人员：</h3>
		</div>
		<!-- BEGIN PORTLET-->
		<div class="portlet box">

			<div class="portlet-body form">

				<!-- BEGIN control-group-->

				<div class="control-group">

						<div class="controls margin-top-10 J_permissionList">

							<select multiple="multiple" id="my_multi_select1" required name="my_multi_select1[]">
							<option value="1">项目管理</option>
							<option value="2">人员管理</option>
							<option value="3">权限管理</option>
							<option value="4">职位管理</option>
						</select>

							
						</div>
							
						<li class="ms-elem-selection" id="0001161000000000023F-selection" style="display: none;"><span>ufida01</span></li>
							
					</div>

				<!-- END control-group-->

			</div>

		</div>
		<!-- END PORTLET-->

		<div class="modal-footer">
			<a class="btn J_closeJobManage" href="javascript:;">取消</a>
			<button type="submit" class="btn blue"><i class="icon-ok"></i> 确认</button>
		</div>
	</form>

	<!-- END PORTLET-->

</body>

<script>
		$(function() {
			
		 //  App.init(); // initlayout and core plugins
		 //  TableAdvanced.init();
		 ///  Index.initTableEvent();
			
		   var active = $(".active");
		   if(active.length>0){
			   active[0].setAttribute('class','start');  
		   }
		   var start = $(".start");
		   start[5].setAttribute('class','active');
		  		   
		});
		
		function hrefMater(obj){
			window.location.href = $(obj).attr('href');
		}
</script>

<!-- END BODY -->

</html>