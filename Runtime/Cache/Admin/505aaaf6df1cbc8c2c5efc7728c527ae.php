<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="renderer" content="webkit" />
	<meta name="Description" content="">
	<meta name="Keywords" content="">
	<title>分行详情</title>
	<link rel="stylesheet" href="/bs_system/public/admin/css/bootstrap.css">
	<link rel="stylesheet" href="/bs_system/public/admin/css/main.css">
	<!-- <script src="/bs_system/public/admin/js/lib/jquery.js" defer="defer"></script> -->
	<script src="/bs_system/public/admin/js/lib/bootstrap.js" defer="defer"></script>
	<script src="/bs_system/public/admin/js/lib/doT.js" defer="defer"></script>
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
        <!-- 内容 -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main main-branch">
        	<div class="infobar clearfix">
        		<span>总注册人数：<?php echo $info['zong']['total'];?>人</span>
        		<span>三级人员：<?php echo $info['zong']['lev_3'];?>人</span>
        		<span>二级人员：<?php echo $info['zong']['lev_2'];?>人</span>
        		<span>一级人员：<?php echo $info['zong']['lev_1'];?>人</span>
        		<span>无级人员：<?php echo $info['zong']['lev_0'];?>人</span>
        		<a href="./branchlist.html" class="pull-right">返回&gt;&gt;</a>
        	</div>
        	<div class="infobar infobar-sub">
        		<div class="infobar-title clearfix">
        			<?php echo $bank_name['me_name'];?>
        			<div class="infobar-title-btn pull-right">
        			
        			<?php if($bank_name['status'] == 0): ?><!-- 未开通 -->
        				<span class="dot"></span>
        				
        			<?php else: ?>
        				<!-- 已开通 -->
        				<span class="dot dot-open"></span><?php endif; ?>
        				
        				
        				<a class="btn btn-danger js-toggle" href="javascript:;" role="button">开通/关闭</a>
        				<a class="btn btn-primary js-resetpass" href="javascript:;" role="button">重置分行密码</a>
        			</div>
        		</div>
        		<div class="infobar-detail">
	        		<span>总注册人数：<?php echo $info['fen']['total'];?>人</span>
        			<span>三级人员：<?php echo $info['fen']['lev_3'];?>人</span>
        			<span>二级人员：<?php echo $info['fen']['lev_2'];?>人</span>
        			<span>一级人员：<?php echo $info['fen']['lev_1'];?>人</span>
        			<span>无级人员：<?php echo $info['fen']['lev_0'];?>人</span>
	        	</div>
        	</div>

        	
        	
        	<table class="table table-hover table-bordered table-branchdetail" id="table_list" data-url="<?php echo U('Admin/index/branchd_user_list');?>">
        	
        	
					<thead>
					   <tr id='table_tr_name' style="cursor:default">
					    <th name='id'>编号</th>
					    <th name='position'>职位</th>
					    <th name='name'>姓名</th>
					    <th name='sex'>性别</th>
					    <th name='level'>级别</th>
					    <th name='type'>用户状态</th>
					    <th name='comm'>操作</th>
					  </tr>
				  </thead>
				  
				 
			    	<tbody id="tblData">  
			    	</tbody> 
        	
        	<!-- 
				<thead>
					<tr><th>编号</th><th>职位</th><th>姓名</th><th>性别</th><th>级别</th><th>用户状态</th><th>操作</th></tr>
				</thead>
				<tbody>
					<tr data-id="1"><td>1</td><td>1</td><td>张三</td><td>男</td><td>3</td><td>正常</td><td><a href="javascript:;" class="js-detail">详情</a></td></tr>
				</tbody>
			 -->
			</table>
			
			<ul class="pagination pull-right" id="pagination">
			
			</ul>
			
        </div>
      </div>
    </div>





    <!-- 弹层Modal 员工详情-->
	<div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">详情</h4>
	      </div>
	      <div class="modal-body modal-draw clearfix">
	    	<!--table class="table table-hover pull-left table-user">
				<tr><th>姓名：</th><td>张三</td></tr>
				<tr><th>性别：</th><td>男</td></tr>
				<tr><th>级别：</th><td>3级</td></tr>
				<tr><th>考试次数：</th><td>3次</td></tr>
				<tr><th>用户状态：</th><td>正常</td></tr>
			</table>
			<table class="table table-hover table-bordered pull-right table-exam">
				<thead>
					<tr><th>考试时间</th><th>持续时间</th><th>考试级别</th><th>考试分数</th></tr>
				</thead>
				<tbody><tr><td>2016年7月20日9:00</td><td>56分钟</td><td>1级</td><td>90分</td></tr></tbody>
			</table-->
	      </div>
	    </div>
	  </div>
	</div>
	<!-- 弹层Modal 重置分行密码-->
	<div class="modal fade bs-example-modal-sm" id="modal-resetpass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-sm" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">提示</h4>
	      </div>
	      <div class="modal-body modal-draw clearfix">
	    	<p>确定重置分行密码？</p>
	    	<p>重置密码为：000000</p>
	      </div>
	      <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
            <button type="button" class="btn btn-primary js-save" data-dismiss="modal">确定</button>
          </div>
	    </div>
	  </div>
	</div>
	
	
	<?php if($bank_name['status'] == 0): ?><!-- 弹层Modal 开通/关闭 -->
			<div class="modal fade" id="modal-toggle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">开通/关闭</h4>
			      </div>
			      <div class="modal-body modal-draw clearfix">
			      	<form>
			    	<table>
			      		<tr><td width="30%">账号：</td><td><input name="account" type="text" class="form-control"/><a class="btn btn-danger btn-clear js-clear" href="javascript:;" role="button">清空</a></td></tr>
			      		<tr><td>操作理由：</td><td><textarea name="reason" class="form-control" rows="4" id="remark"></textarea></td></tr>
			      		<tr><td></td><td class="txt-red">初始密码：000000</td></tr>
			      	</table>
			      	</form>
			      </div>
			      <div class="modal-footer">
		            <!-- button type="button" class="btn btn-default js-close" data-dismiss="modal" id="GB">关闭</button-->
		            <button type="button" class="btn btn-primary js-open" data-dismiss="modal" id="KT">开通</button>
		          </div>
			    </div>
			  </div>
			</div>        				
     <?php else: ?>
        		<!-- 弹层Modal 开通/关闭 -->
			<div class="modal fade" id="modal-toggle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">开通/关闭</h4>
			      </div>
			      <div class="modal-body modal-draw clearfix">
			      	<form>
			    	<table>
			      		<tr><td width="30%">账号：</td><td><input name="account" type="text" class="form-control"/><a class="btn btn-danger btn-clear js-clear" href="javascript:;" role="button">清空</a></td></tr>
			      		<tr><td>操作理由：</td><td><textarea name="reason" class="form-control" rows="4" id="remark"></textarea></td></tr>
			      		<tr><td></td><td class="txt-red">初始密码：000000</td></tr>
			      	</table>
			      	</form>
			      </div>
			      <div class="modal-footer">
		            <button type="button" class="btn btn-default js-close" data-dismiss="modal" id="GB">关闭</button>
		            <!--button type="button" class="btn btn-primary js-open" data-dismiss="modal" id="KT">开通</button-->
		          </div>
			    </div>
			  </div>
			</div><?php endif; ?>
	
	
	
	
<input type="hidden" id="del_session" value="<?php echo U('Admin/Public/del_session');?>"/>

<input type="hidden" id="user_detial" value="<?php echo U('Admin/Index/getUserInfo');?>"/>

<input type="hidden" id="Resetpass" value="<?php echo U('Admin/Index/Resetpass');?>"/>

<input type="hidden" id="openorshut" value="<?php echo U('Admin/Index/openorshut');?>"/>
    
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

 
</script>	
	
	
	
</body>
</html>