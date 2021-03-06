<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="renderer" content="webkit" />
	<meta name="Description" content="">
	<meta name="Keywords" content="">
	<title>App 部分设置</title>
	<link rel="stylesheet" href="/bs_system/public/admin/css/bootstrap.css">
    <link rel="stylesheet" href="/bs_system/public/admin/css/main.css">
	<script src="/bs_system/public/admin/js/lib/jquery.js" defer="defer"></script>
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
            <li><a href="#" class="link-logout" id="go_out" >退出</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
      	<!-- 左侧菜单 -->
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="./branchlist.html">分行列表</a></li>
            <li><a href="./studylist.html">学习章节</a></li>
            <li><a href="./examlist.html">考试题库</a></li>
            <li class="active"><a href="./appsetting.html">App 部分设置</a></li>
          </ul>
        </div>
        <!-- 内容 -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main main-appsetting">
        	<div class="infobar">e学习图片</div>
            <form class="form-study" method="post" id='import' action="<?php echo U('Admin/Index/Image_estudy');?>" enctype="multipart/form-data">
               
               <!--input type="file" onchange="txt.value=this.value" class="file" name='file_stu' id='excel' /-->
               
                <div class="uploadbox clearfix">
                    <div class="ui-upload js-upload">
                        <span>点此上传</span>
                        <div class="ui-upload-progress js-progress"><span></span></div>
                        <input type="file" name="study-file-1" class="js-upload-input" />
                     
                     	<?php if($info['ek_img1'] != null): ?><!-- 如果是已经上传过图片，再刷新页面需要输出上次上传的图片元素 -->
                         <img src="/bs_system/<?php echo $info['ek_img1'];?>" style="width: 198px; height: 108px; position: absolute; top: 0px; left: 0px;" /><?php endif; ?>
                        
                                            
                    </div>
                    
                    <div class="ui-upload js-upload">
                        <span>点此上传</span>
                        <div class="ui-upload-progress js-progress"><span></span></div>
                        <input type="file" name="study-file-2" class="js-upload-input" />
                        
                        <?php if($info['ek_img2'] != null): ?><!-- 如果是已经上传过图片，再刷新页面需要输出上次上传的图片元素 -->
                         <img src="/bs_system/<?php echo $info['ek_img2'];?>" style="width: 198px; height: 108px; position: absolute; top: 0px; left: 0px;" /><?php endif; ?>
                        
                        
                    </div>
                    <div class="ui-upload js-upload">
                        <span>点此上传</span>
                        <div class="ui-upload-progress js-progress"><span></span></div>
                        <input type="file" name="study-file-3" class="js-upload-input" />
                        
                        
                         <?php if($info['ek_img3'] != null): ?><!-- 如果是已经上传过图片，再刷新页面需要输出上次上传的图片元素 -->
                         <img src="/bs_system/<?php echo $info['ek_img3'];?>" style="width: 198px; height: 108px; position: absolute; top: 0px; left: 0px;" /><?php endif; ?>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">保存</button>
            </form>
            
            <div class="infobar">e考试图片</div>
            <form class="form-exam" method="post" id='import' action="<?php echo U('Admin/Index/Image_exam');?>" enctype="multipart/form-data">
                <div class="uploadbox clearfix">
                    <div class="ui-upload js-upload">
                        <span>点此上传</span>
                        <div class="ui-upload-progress js-progress"><span></span></div>
                        <input type="file" name="exam-file-1" class="js-upload-input" />
                        
                        <?php if($info['et_img1'] != null): ?><!-- 如果是已经上传过图片，再刷新页面需要输出上次上传的图片元素 -->
                         <img src="/bs_system/<?php echo $info['et_img1'];?>" style="width: 198px; height: 108px; position: absolute; top: 0px; left: 0px;" /><?php endif; ?>
                        
                        
                    </div>
                    <div class="ui-upload js-upload">
                        <span>点此上传</span>
                        <div class="ui-upload-progress js-progress"><span></span></div>
                        <input type="file" name="exam-file-2" class="js-upload-input" />
                        
                        <?php if($info['et_img2'] != null): ?><!-- 如果是已经上传过图片，再刷新页面需要输出上次上传的图片元素 -->
                         <img src="/bs_system/<?php echo $info['et_img2'];?>" style="width: 198px; height: 108px; position: absolute; top: 0px; left: 0px;" /><?php endif; ?>
                        
                        
                    </div>
                    <div class="ui-upload js-upload">
                        <span>点此上传</span>
                        <div class="ui-upload-progress js-progress"><span></span></div>
                        <input type="file" name="exam-file-3" class="js-upload-input" />
                        
                         <?php if($info['et_img3'] != null): ?><!-- 如果是已经上传过图片，再刷新页面需要输出上次上传的图片元素 -->
                         <img src="/bs_system/<?php echo $info['et_img3'];?>" style="width: 198px; height: 108px; position: absolute; top: 0px; left: 0px;" /><?php endif; ?>
                        
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">保存</button>
            </form>
            
            <div class="infobar">广播内容</div>
            <form class="form-cont" method="post" action="<?php echo U('Admin/Index/up_GB');?>">
                <input type="text" value="<?php echo $info['c_radio'];?>" name="up_GB" class="form-control" max-length="30" placeholder="30个字" />
                <button type="submit" class="btn btn-primary">更新</button>
            </form>
            
            <div class="infobar">第一部分介绍</div>
            <form class="form-cont" method="post" action="<?php echo U('Admin/Index/up_first');?>">
                <input type="text" value="<?php echo $info['c1'];?>" name="up_first" class="form-control" max-length="30" placeholder="30个字" />
                <button type="submit" class="btn btn-primary">更新</button>
            </form>
            <div class="infobar">第二部分介绍</div>
            <form class="form-cont" method="post" action="<?php echo U('Admin/Index/up_second');?>">
                <input type="text" value="<?php echo $info['c2'];?>" name="up_second" class="form-control" max-length="30" placeholder="30个字" />
                <button type="submit" class="btn btn-primary">更新</button>
            </form>
            <div class="infobar">第三部分介绍</div>
            <form class="form-cont" method="post" action="<?php echo U('Admin/Index/up_third');?>">
                <input type="text" value="<?php echo $info['c3'];?>" name="up_third" class="form-control" max-length="30" placeholder="30个字" />
                <button type="submit" class="btn btn-primary">更新</button>
            </form>
        </div>
      </div>
    </div>
<input type="hidden" id="del_session" value="<?php echo U('Admin/Public/del_session');?>"/>    
 
<script src="/bs_system/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>    
<script>



$('#go_out').click(function(){
	var url=$('#del_session').val();

	$.get(url,function(data){
		if(data==1){
 			location.href = "/bs_system/index.php/Admin/Public/log"
 		}
	});
});


//page()
</script>    
    
    
    
</body>
</html>