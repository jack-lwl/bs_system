<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="renderer" content="webkit" />
	<meta name="Description" content="">
	<meta name="Keywords" content="">
	<title>分行列表</title>
	<link rel="stylesheet" href="/bs_system/public/admin/css/bootstrap.css">
	<link rel="stylesheet" href="/bs_system/public/admin/css/main.css">
	
	
	<!-- <script src="/bs_system/public/admin/js/lib/jquery.js" defer="defer"></script> -->
	<script src="/bs_system/public/admin/js/lib/bootstrap.js" defer="defer"></script>
	<script src="/bs_system/public/admin/js/main.js" defer="defer"></script>
	
	
	<style>

	</style>
</head>
<body>
	<!-- 头部 -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">中国银行学习系统后台</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:;" class="txt-identity">身份：系统管理员</a></li>
            <li><a href="#" class="link-logout" id="go_out">退出</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
      	<!-- 左侧菜单 -->
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">分行列表</a></li>
            <li><a href="./studylist.html">学习章节</a></li>
            <li><a href="./examlist.html">考试题库</a></li>
            <li><a href="./appsetting.html">App 部分设置</a></li>
          </ul>
        </div>
        
        <form method="post" id='export' action="<?php echo U('Admin/Index/export_all_user');?>" enctype="multipart/form-data">				
		</form>
        
        <!-- 内容 -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        	<div class="infobar">
        		<span>总注册人数：<?php echo $info['total'];?>人</span>
        		<span>三级人员：<?php echo $info['lev_3'];?>人</span>
        		<span>二级人员：<?php echo $info['lev_2'];?>人</span>
        		<span>一级人员：<?php echo $info['lev_1'];?>人</span>
        		<span>无级人员：<?php echo $info['lev_0'];?>人</span>
        		
        		
			
        		<button id="DG_user" >人员导出</button>
        		
        	</div>
        	
        	<table class="table table-hover table-bordered" id="table_list" data-url="<?php echo U('Admin/index/branchlist_fen');?>">
        	
        	
					<thead>
					   <tr id='table_tr_name' style="cursor:default">
					    <th name='id'>编号</th>
					    <th name='status'>状态</th>
					    <th name='name'>单位名称</th>
					    <th name='me_name'>机构名</th>
					    <th name='total'>注册人数</th>
					    <th name='lev_1'>三级人员</th>
					    <th name='lev_2'>二级人员</th>
					    <th name='lev_3'>一级人员</th>
					    <th name='lev_0'>无级人员</th>
					    <th name='comm'>操作</th>
					  </tr>
				  </thead>
				  
				 
			    	<tbody id="tblData">  
			    	</tbody> 
			    

        	
        	<!-- 
				<thead>
					<tr><th>编号</th><th>状态</th><th>单位名称</th><th>机构名</th><th>注册人数</th><th>三级人员</th><th>二级人员</th><th>一级人员</th><th>无级人员</th><th>操作</th></tr>
				</thead>
			 	
				<tbody><tr><td>1</td><td>开通</td><td>XXXXX分行</td><td>XXX</td><td>80</td><td>20</td><td>20</td><td>20</td><td>20</td><td><a href="./branchdetail.html">详情</a></td></tr></tbody>
			-->

			</table>
			
			<ul class="pagination pull-right" id="pagination">
			<!-- 
				<li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
				 -->
			</ul>

        </div>
      </div>
    </div>
    
<input type="hidden" id="del_session" value="<?php echo U('Admin/Public/del_session');?>"/>
    
<script src="/bs_system/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/bs_system/public/admin/js/jqPaginator.min.js" type="text/javascript"></script>
<script src="/bs_system/public/admin/js/myPage.js" type="text/javascript"></script> 
<script src="/bs_system/public/admin/js/page.js" type="text/javascript"></script>     

<script>



$('#go_out').click(function(){
	var url=$('#del_session').val();

	$.get(url,function(data){
		if(data==1){
 			location.href = "/bs_system/index.php/Admin/Public/log"
 		}
	});
});


	
page();

$('#DG_user').click(function(){
	$('#export').submit();
});


 
</script>
    
    
    
    
</body>
</html>