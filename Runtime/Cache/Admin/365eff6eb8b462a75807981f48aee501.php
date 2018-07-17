<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>项目列表及物料列表_透明化</title>

	<meta content="width=device-width, height=device-height, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="/Qh_tpc/public/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Qh_tpc/public/admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Qh_tpc/public/admin/css/font-awesome.css" rel="stylesheet" type="text/css"/>
	<link href="/Qh_tpc/public/admin/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="/Qh_tpc/public/admin/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="/Qh_tpc/public/admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="/Qh_tpc/public/admin/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="/Qh_tpc/public/admin/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" href="/Qh_tpc/public/admin/css/DT_bootstrap.css" />
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
							项目列表及物料列表 <small>Projects and Materials</small>
						</h3>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								透明化
								<i class="icon-angle-right"></i>
							</li>
							<!--
							<li>
								<a href="index.html">项目列表</a>
								<i class="icon-angle-right"></i>
							</li> -->
							<li>查询结果</li>

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<div class="alert alert-success">

							<button class="close" data-dismiss="alert"></button>

							Please try to re-size your browser window in order to see the tables in responsive mode.<br>

							<span class="label label-important">NOTE:</span>&nbsp;This feature is supported by Internet Explorer 10, Latest Firefox, Chrome, Opera and Safari

						</div>

						<!-- BEGIN SAMPLE TABLE PORTLET-->

						<div class="portlet box green">
							<div class="portlet-title">
								<div class="caption"><i class="icon-cogs"></i>项目列表</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body flip-scroll">
								<table class="table-bordered table-striped table-hover table-condensed flip-content J_tableClick">
									<thead class="flip-content">
										<tr>
											<th>项目名称</th>
											<th>项目类型</th>
											<th>甲方联系人</th>
											<th class="numeric">联系电话</th>
											<th class="numeric">项目进度</th>
											<th class="numeric">立项时间</th>
										</tr>
									</thead>
									<tbody>
										<?php if(is_array($ProList)): $k = 0; $__LIST__ = $ProList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ProList): $mod = ($k % 2 );++$k;?><tr data-url="projectDetails.html?pid=<?php echo $ProList['p_id'];?>">
											<td><?php echo $ProList['Jobname'];?></td>
											<td><?php echo $ProList['pro_type'];?></td>
											<td class="numeric">功能尚未开发</td>
											<td class="numeric">功能尚未开发</td>
											<td class="numeric">功能尚未开发</td>
											<td class="numeric"><?php echo $ProList['Begindate'];?></td>
										</tr><?php endforeach; endif; else: echo "" ;endif; ?>
									</tbody>
								</table>
								<!-- BEGIN Paging-->
								<div class="row-fluid margin-top-10">
									<div class="span6">
	<div class="dataTables_info" id="sample_1_info">Showing 1 to 10 of 31 entries</div>
</div>
<div class="span6">
	<div class="dataTables_paginate paging_bootstrap pagination">
		<ul>
			<li class="prev disabled">
				<a href="#">← <span class="hidden-480">Previous</span></a>
			</li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li class="next"><a href="#"><span class="hidden-480">Next</span> → </a></li>
		</ul>
	</div>
</div>
								</div>
								<!-- END Paging-->
							</div>
						</div>

						<!-- END SAMPLE TABLE PORTLET-->

						<!-- BEGIN SAMPLE TABLE PORTLET-->

						<div class="portlet box blue">

							<div class="portlet-title">
								<div class="caption"><i class="icon-cogs"></i>物料列表</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>

							<div class="portlet-body no-more-tables">
								<table class="table-bordered table-striped table-hover table-condensed cf J_tableClick">
									<thead class="cf">
										<tr>
											<th>物料单号</th>
											<th>所属项目名称</th>
											<th>所属项目类型</th>
											<th class="numeric">建立日期</th>
											<th class="numeric">目前进度</th>
										</tr>
									</thead>
									<tbody>
										<?php if(is_array($MaterList)): $k = 0; $__LIST__ = $MaterList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$MaterList): $mod = ($k % 2 );++$k;?><tr data-url="/Qh_tpc/index.php/Admin/Materiel/materialDetails.html?mid=<?php echo $MaterList['p_mid'];?>">
											<th><?php echo $MaterList['m_number'];?></th>
											<td data-title="所属项目名称"><?php echo $MaterList['Jobname'];?></td>
											<td data-title="所属项目类型"><?php echo $MaterList['pro_type'];?></td>
											<td data-title="建立日期" class="numeric"><?php echo $MaterList['m_create_time'];?></td>
											<td data-title="目前进度" class="numeric"><?php echo $MaterList['sumProPercent'];?></td>
										</tr><?php endforeach; endif; else: echo "" ;endif; ?>
									</tbody>
								</table>
								<!-- BEGIN Paging-->
								<div class="row-fluid margin-top-10">
									<div class="span6">
	<div class="dataTables_info" id="sample_1_info">Showing 1 to 10 of 31 entries</div>
</div>
<div class="span6">
	<div class="dataTables_paginate paging_bootstrap pagination">
		<ul>
			<li class="prev disabled">
				<a href="#">← <span class="hidden-480">Previous</span></a>
			</li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li class="next"><a href="#"><span class="hidden-480">Next</span> → </a></li>
		</ul>
	</div>
</div>
								</div>
								<!-- END Paging-->
							</div>
						</div>

						<!-- END SAMPLE TABLE PORTLET-->

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

	<script src="/Qh_tpc/public/admin/js/app.js"></script>

	<script>

		jQuery(document).ready(function() {
		   // initiate layout and plugins
		   App.init();
		   var start = $(".start");
		   start[1].setAttribute('class','active');
		});
		
		
		
	</script>

</html>