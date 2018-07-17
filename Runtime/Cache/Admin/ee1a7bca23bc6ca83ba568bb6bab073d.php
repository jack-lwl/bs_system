<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>物料详情_透明化</title>

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

	<link rel="stylesheet" type="text/css" href="/Qh_tpc/public/admin/css/select2_metro.css" />
	<link rel="stylesheet" type="text/css" href="/Qh_tpc/public/admin/css/chosen.css" />
	<link rel="stylesheet" type="text/css" href="/Qh_tpc/public/admin/css/timeline.css" >

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

						<h3 class="page-title">
							物料详情
							 <small><?php echo $project_name;?></small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								透明化
								<span class="icon-angle-right"></span>
							</li>
							<li>物料详情</li>
						</ul>
					</div>
				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<div class="portlet box blue" id="form_wizard_1">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-reorder"></i> 物料任务进度六个阶段 - <span class="step-title">Step 1 of 6</span>
									<a href="#myModal1" role="button" class="btn btn-primary" data-toggle="modal">结束任务</a>

								</div>
								<div class="tools hidden-phone">
									<!--<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a> -->
									<a href="javascript:;" class="collapse"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<form action="#" class="form-horizontal" id="submit_form">
									<div class="form-wizard">
										<div class="navbar steps">

											<div class="navbar-inner">

												<ul class="row-fluid nav nav-pills">
													<?php if($mstatus=='2'){ ?>
													<li class="span2 active">
													<?php }else{ ?>
													<li class="span2 done">
													<?php } ?>
														<a href="javascript:;"  class="step active">

														<span class="number">1</span>

														<span class="desc"><i class="icon-ok"></i> 库存确认</span>

														</a>

													</li>

													<?php if($mstatus=='3'){ ?>
													<li class="span2 active">
													<?php }else{ ?>
													<li class="span2 done">
													<?php } ?>

														<a href="javascript:;"  class="step active">

														<span class="number">2</span>

														<span class="desc"><i class="icon-ok"></i> 寻价</span>

														</a>

													</li>

													<?php if($mstatus=='4'){ ?>
													<li class="span2 active">
													<?php }else{ ?>
													<li class="span2 done">
													<?php } ?>

														<a href="javascript:;"  class="step active">

														<span class="number">3</span>

														<span class="desc"><i class="icon-ok"></i> 报批</span>

														</a>

													</li>
							
													<?php if($mstatus=='5'){ ?>
													<li class="span2 active">
													<?php }else{ ?>
													<li class="span2 done">
													<?php } ?>

														<a href="javascript:;"  class="step active">

														<span class="number">4</span>

														<span class="desc"><i class="icon-ok"></i> 发货</span>

														</a>

													</li>

													<?php if($mstatus=='6'){ ?>
													<li class="span2 active">
													<?php }else{ ?>
													<li class="span2 done">
													<?php } ?>

														<a href="javascript:;"  class="step active">

														<span class="number">5</span>

														<span class="desc"><i class="icon-ok"></i> 到货</span>

														</a>

													</li>
													
													<?php if($mstatus=='7'){ ?>
													<li class="span2 active">
													<?php }else{ ?>
													<li class="span2 done">
													<?php } ?>

														<a href="javascript:;"  class="step active">

														<span class="number">6</span>

														<span class="desc"><i class="icon-ok"></i> 关闭</span>

														</a>

													</li>
												</ul>
											</div>
										</div>
										<div id="bar" class="progress progress-success progress-striped">
											<div class="bar"></div>
										</div>
									</div>
								</form>
							</div>

						</div>

					</div>

				</div>

				<div class="row-fluid">

						<div style="float:right;">

							<a href="#myModal3" class="btn green icn-only" data-toggle="modal">

								<i class="icon-rss icon-white"></i> 发布信息
							</a>

						</div>

				</div>

				<div class="row-fluid">

					<div class="span12">

						<ul class="timeline margin-top-10" ajax-url="<?php echo U('Admin/Materiel/WebThroughMateriel');?>" id="timeline">
							<?php if(is_array($upinfo)): $i = 0; $__LIST__ = $upinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$upinfo): $mod = ($i % 2 );++$i; if($upinfo['title'] == '发布人:系统'): ?><li class="timeline-yellow">
	
									<div class="timeline-time">
	
										<span class="date"><?php echo $upinfo['timeDown'];?></span>
	
										<span class="time"><?php echo $upinfo['timeTop'];?></span>
	
									</div>
	
								<div class="timeline-icon"><i class="icon-trophy"></i></div>
	
									<div class="timeline-body">
										<h2><?php echo $upinfo['title'];?></h2>
										<div class="timeline-content">
											
											<?php if($upinfo['type']=='1'){ ?>
													
												<!-- pull-right(右边) -->
												<img class="timeline-img " src="/Qh_tpc/upload/img/<?php echo $upinfo['content'];?>" alt="">
											<?php }else{ ?>
												<?php echo $upinfo['content'];?>
											<?php } ?>										
	
	
										</div>
	
									</div>
									</li>
																	
								<?php else: ?>
									
										<li class="timeline-blue">
	
									<div class="timeline-time">
	
										<span class="date"><?php echo $upinfo['timeDown'];?></span>
	
										<span class="time"><?php echo $upinfo['timeTop'];?></span>
	
									</div>
	
								<div class="timeline-icon"><i class="icon-rss"></i></div>
	
									<div class="timeline-body">
										<h2><?php echo $upinfo['title'];?></h2>
										<div class="timeline-content">
											
											<?php if($upinfo['type']=='1'){ ?>
													
												<!-- pull-right(右边) -->
												<img class="timeline-img " src="/Qh_tpc/upload/img/<?php echo $upinfo['content'];?>" alt="">
											<?php }else{ ?>
												<?php echo $upinfo['content'];?>
											<?php } ?>										
	
	
										</div>
	
									</div>
									</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>

						</ul>

					</div>

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
<script type="text/javascript" src="/Qh_tpc/public/admin/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="/Qh_tpc/public/admin/js/additional-methods.min.js"></script>
	<script type="text/javascript" src="/Qh_tpc/public/admin/js/jquery.bootstrap.wizard.min.js"></script>
	<script type="text/javascript" src="/Qh_tpc/public/admin/js/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="/Qh_tpc/public/admin/js/select2.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->


	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="/Qh_tpc/public/admin/js/app.js"></script>
	<script src="/Qh_tpc/public/admin/js/form-wizard.js"></script>

	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {
		   var active = $(".active");
		   if(active.length>0){
			   active[0].setAttribute('class','start');  
		   }
		   var start = $(".start");
		   start[6].setAttribute('class','active');
		   // initiate layout and plugins
		   App.init();
		   FormWizard.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->

    <!-- END CONTAINER -->

	<!-- BEGIN myModal 弹窗开始 -->

	<!-- BEGIN myModal1 物料任务关闭原因 -->
	<form action="<?php echo U('Admin/Materiel/endMateriel');?>" method="post">
		<div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 id="myModalLabel1">物料任务关闭原因：</h3>
			</div>
			<div class="modal-body">
				<p>
					<textarea class="txt" name="CloseReason" placeholder="请在此输入物料任务关闭原因" required></textarea>
					<input type="hidden" name="mid" value="<?php echo $mid;?>" />
				</p>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
				<!-- <button class="btn yellow">Save</button> -->
				<a href="#myModal2" role="button" class="btn btn-danger" data-toggle="modal">确认</a>
			</div>
		</div>
		<!-- END myModal1 物料任务关闭原因 -->

		<!-- BEGIN myModal2 二次确认物料任务关闭 -->

		<div action="materialDetails.html" method="post" id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3 id="myModalLabel2">确认关闭</h3>
			</div>
			<div class="modal-body">
				<p>你确认要关闭吗？</p>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
				<button type="submit" class="btn blue"><i class="icon-ok"></i> 确认</button>
			</div>
		</div>
	</form>
	<!-- END myModal2 二次确认物料任务关闭 -->

	<!-- BEGIN myModal3 发布消息 -->

	<form action="<?php echo U('Admin/Materiel/PublishInfo');?>" method="post" id="myModal3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true" >
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			<h3 id="myModalLabel1">信息：</h3>
		</div>
		<div class="modal-body">
			<p>
				<textarea class="txt" name="ramark" placeholder="请在此输入你要发布信息"></textarea>
				<input type="hidden" name="mid" value="<?php echo $mid;?>" />
				
			</p>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
			<button type="submit" class="btn blue"><i class="icon-ok"></i> 确认</button>
		</div>
	</form>
	<!-- END myModal3 发布消息 -->

	<!-- END myModal 弹窗开始 -->

</body>
<!-- END BODY -->
<script>
$(function() {

	   var active = $(".active");
	   if(active.length>0){
		   active[0].setAttribute('class','start');  
	   }
	     
	   var start = $(".start");
	   start[6].setAttribute('class','active');
	  		   
	   $('.next').click(function(){
			
			var aryObj = $("#Page_Row").children(".active");
			
			var row = $(aryObj[0]).children().html();
			
			$("#page_"+(parseInt(row)+1)).click();
			
		});
		
		$('.prev').click(function(){
			
			var aryObj = $("#Page_Row").children(".active");
			
			var row = $(aryObj[0]).children().html();
			
			$("#page_"+(parseInt(row)-1)).click();
		});
		
		$('.number').click(function(){
		
			 $.ajax(  
			            {  
			                url:$('#timeline').attr('ajax-url'),  
			                type : 'post',
			                async:true,
			                dataType:"json",  
			                data:{'Click':$(this).html()},
			                error:function(){alert("服务加载出错");},  
			                success:function(data)  
			                       {
			                			if(data['Code']=='0'){
			                				window.location.reload();
			                			}else{
			                				//console.log(data);
			                				alert(data['Msg']);
			                			}
			               		   }
			            }  
			      ); 
			
		});
	   
	});
	
window.onload = myPage;

function myPage() {

	var child = $("#timeline").children();
	
	for ( var i = 0; i < child.length; i++) {

		if (i >= 5) {
			$(child[i]).attr('style', 'display:none');
		}

	}

}	



function savePag(obj) {

	var page = $(obj).html();

	/** 取消分页点击色* */
	$("#Page_Row").find(".active").attr('class', '');
	
	$(obj).parent().attr('class','active');
	
	//exit;
	
	var localPage = page * 5;

	var row = localPage - 5;

	var child = $("#timeline").children();
	
	for ( var i = 0; i < child.length; i++) {
		
		if (i > (row-1) && i <= (localPage-1)) {
			$(child[i]).attr('style', 'display:inherit');
		} else {
			$(child[i]).attr('style', 'display:none');
		}

	}
}
	
</script>
</html>