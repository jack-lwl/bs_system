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
     <ul class="File-upload">
     
        <li>
        <form method="post" action="<?php echo U('Admin/Project/projectinfo_excel');?>" enctype="multipart/form-data" id="import_com">
           <a>项目隶属公司导入：</a>
           <div style="float:left;">
             <div style="width:220px;height:40px;overflow:hidden;position:relative;border:1px solid #ccc;margin-top:10px;">
               <div style="float:left;"><input type="text" id="txt" name="txt" class="txt" placeholder="文件路径" /></div>
               <div style="float:left;"><div class="upload"></div></div>
               <div style="height:30px;float:left;"><input type="file" onchange="txt.value=this.value" class="file" name='file_stu' id='excel_com'/></div>
             </div> 
           </div>
        </form>
           <button id='imp_com_ok'>上传</button>
			<a href="/Qh_tpc/Public/upfile/Templet/Templet1.xlsx" style="width:100px;height:30px;line-height:30px;background:#999;color:white;border-radius:6px;text-align:center;margin-top:16px;margin-left:20px;">模版下载</a>
        </li>
        
       
          <li>
        <form method="post" action="<?php echo U('Admin/Project/import_project');?>" enctype="multipart/form-data" id="import_pro">
           <a>项目基本信息导入：</a>
           <div style="float:left;">
             <div style="width:220px;height:40px;overflow:hidden;position:relative;border:1px solid #ccc;margin-top:10px;">
               <div style="float:left;"><input type="text" id="txt" name="txt" class="txt" placeholder="文件路径" /></div>
               <div style="float:left;"><div class="upload"></div></div>
               <div style="height:30px;float:left;"><input type="file" onchange="txt.value=this.value" class="file" name='file_stu' id='excel_pro'/></div>
             </div> 
           </div>
        </form>
           
		   <button id='imp_pro_ok'>上传</button>
			<a href="#" style="width:100px;height:30px;line-height:30px;background:#999;color:white;border-radius:6px;text-align:center;margin-top:16px;margin-left:20px;">模版下载</a>
        </li>


		<li>
        <form method="post" action="<?php echo U('Admin/Project/impro_add_pro');?>" enctype="multipart/form-data" id="import_pro_add">
           <a>项目补充信息导入：</a>
           <div style="float:left;">
             <div style="width:220px;height:40px;overflow:hidden;position:relative;border:1px solid #ccc;margin-top:10px;">
               <div style="float:left;"><input type="text" id="txt" name="txt" class="txt" placeholder="文件路径" /></div>
               <div style="float:left;"><div class="upload"></div></div>
               <div style="height:30px;float:left;"><input type="file" onchange="txt.value=this.value" class="file" name='file_stu' id='excel_pro_add'/></div>
             </div> 
           </div>
        </form>
           <button id='imp_pro_add_ok'>上传</button>
			<a href="#" style="width:100px;height:30px;line-height:30px;background:#999;color:white;border-radius:6px;text-align:center;margin-top:16px;margin-left:20px;">模版下载</a>
        </li>
        

		<li>
        <form method="post" action="<?php echo U('Admin/Project/impro_pro_manager');?>" enctype="multipart/form-data" id="import_manager_add">
           <a>项目经理补充导入：</a>
           <div style="float:left;">
             <div style="width:220px;height:40px;overflow:hidden;position:relative;border:1px solid #ccc;margin-top:10px;">
               <div style="float:left;"><input type="text" id="txt" name="txt" class="txt" placeholder="文件路径" /></div>
               <div style="float:left;"><div class="upload"></div></div>
               <div style="height:30px;float:left;"><input type="file" onchange="txt.value=this.value" class="file" name='file_stu' id='imp_promanager_add'/></div>
             </div> 
           </div>
        </form>
           <button id='imp_promanager_ok'>上传</button>
			<a href="#" style="width:100px;height:30px;line-height:30px;background:#999;color:white;border-radius:6px;text-align:center;margin-top:16px;margin-left:20px;">模版下载</a>
        </li>



          <!--
        
          <li>
           <a>项目隶属公司导入：</a>
           <div style="float:left;">
             <div style="width:220px;height:40px;overflow:hidden;position:relative;border:1px solid #ccc;margin-top:10px;">
               <div style="float:left;"><input type="text" id="txt" name="txt" class="txt" placeholder="文件路径" /></div>
               <div style="float:left;"><div class="upload"></div></div>
               <div style="height:30px;float:left;"><input type="file" onchange="txt.value=this.value" class="file" name='file_stu' id='word'/></div>
             </div> 
           </div>
           <button>上传</button>
        </li>
          <li>
           <a>项目隶属公司导入：</a>
           <div style="float:left;">
             <div style="width:220px;height:40px;overflow:hidden;position:relative;border:1px solid #ccc;margin-top:10px;">
               <div style="float:left;"><input type="text" id="txt" name="txt" class="txt" placeholder="文件路径" /></div>
               <div style="float:left;"><div class="upload"></div></div>
               <div style="height:30px;float:left;"><input type="file" onchange="txt.value=this.value" class="file" name='file_stu' id='word'/></div>
             </div> 
           </div>
           <button>上传</button>
        </li>
          <li>
           <a>项目隶属公司导入：</a>
           <div style="float:left;">
             <div style="width:220px;height:40px;overflow:hidden;position:relative;border:1px solid #ccc;margin-top:10px;">
               <div style="float:left;"><input type="text" id="txt" name="txt" class="txt" placeholder="文件路径" /></div>
               <div style="float:left;"><div class="upload"></div></div>
               <div style="height:30px;float:left;"><input type="file" onchange="txt.value=this.value" class="file" name='file_stu' id='word'/></div>
             </div> 
           </div>
           <button>上传</button>
        </li>
          <li>
           <a>项目隶属公司导入：</a>
           <div style="float:left;">
             <div style="width:220px;height:40px;overflow:hidden;position:relative;border:1px solid #ccc;margin-top:10px;">
               <div style="float:left;"><input type="text" id="txt" name="txt" class="txt" placeholder="文件路径" /></div>
               <div style="float:left;"><div class="upload"></div></div>
               <div style="height:30px;float:left;"><input type="file" onchange="txt.value=this.value" class="file" name='file_stu' id='word'/></div>
             </div> 
           </div>
           <button>上传</button>
        </li>
          <li>
           <a>项目隶属公司导入：</a>
           <div style="float:left;">
             <div style="width:220px;height:40px;overflow:hidden;position:relative;border:1px solid #ccc;margin-top:10px;">
               <div style="float:left;"><input type="text" id="txt" name="txt" class="txt" placeholder="文件路径" /></div>
               <div style="float:left;"><div class="upload"></div></div>
               <div style="height:30px;float:left;"><input type="file" onchange="txt.value=this.value" class="file" name='file_stu' id='word'/></div>
             </div> 
           </div>
           <button>上传</button>
        </li>
          <li>
           <a>项目隶属公司导入：</a>
           <div style="float:left;">
             <div style="width:220px;height:40px;overflow:hidden;position:relative;border:1px solid #ccc;margin-top:10px;">
               <div style="float:left;"><input type="text" id="txt" name="txt" class="txt" placeholder="文件路径" /></div>
               <div style="float:left;"><div class="upload"></div></div>
               <div style="height:30px;float:left;"><input type="file" onchange="txt.value=this.value" class="file" name='file_stu' id='word'/></div>
             </div> 
           </div>
           <button>上传</button>
        </li>
          <li>
           <a>项目隶属公司导入：</a>
           <div style="float:left;">
             <div style="width:220px;height:40px;overflow:hidden;position:relative;border:1px solid #ccc;margin-top:10px;">
               <div style="float:left;"><input type="text" id="txt" name="txt" class="txt" placeholder="文件路径" /></div>
               <div style="float:left;"><div class="upload"></div></div>
               <div style="height:30px;float:left;"><input type="file" onchange="txt.value=this.value" class="file" name='file_stu' id='word'/></div>
             </div> 
           </div>
           <button>上传</button>
        </li>
          <li>
           <a>项目隶属公司导入：</a>
           <div style="float:left;">
             <div style="width:220px;height:40px;overflow:hidden;position:relative;border:1px solid #ccc;margin-top:10px;">
               <div style="float:left;"><input type="text" id="txt" name="txt" class="txt" placeholder="文件路径" /></div>
               <div style="float:left;"><div class="upload"></div></div>
               <div style="height:30px;float:left;"><input type="file" onchange="txt.value=this.value" class="file" name='file_stu' id='word'/></div>
             </div> 
           </div>
           <button>上传</button>
        </li>
         -->


     </ul>
     
	</div>
</div>

<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>

<!-- 左侧目录 jq-->
<script type="text/javascript">
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
$('.set-up dt').css('background-color','#4f5051');
$('.set-up').find('.information').css('background-color','#333')
$(this).find('dd').show();
});


//导入公司     
$('#imp_com_ok').click(function(){
	 
	
	 if($('#excel_com').val()==''){
		 alert('请选择文件');
		 exit;
	 }
	 
	 $('#import_com').submit();
	 //alert(0);
});


//导入项目基本信息     
$('#imp_pro_ok').click(function(){
	 
	
	 if($('#excel_pro').val()==''){
		 alert('请选择文件');
		 exit;
	 }
	 
	 $('#import_pro').submit();
	 //alert(0);
});


//导入补充项目基本信息          
$('#imp_pro_add_ok').click(function(){
	 
	
	 if($('#excel_pro_add').val()==''){
		 alert('请选择文件');
		 exit;
	 }
	 
	 $('#import_pro_add').submit();
	 //alert(0);
});


//导入项目经理          
$('#imp_promanager_ok').click(function(){
	 
	
	 if($('#imp_promanager_add').val()==''){
		 alert('请选择文件');
		 exit;
	 }
	 
	 $('#import_manager_add').submit();
	 //alert(0);
});



</script>
</body>
</html>