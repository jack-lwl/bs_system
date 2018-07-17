<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>透明化</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link href="/Qh_tpc/public/admin/css/css.css" rel="stylesheet" type="text/css"/>	
    <link href="/Qh_tpc/public/admin/css/table.css" rel="stylesheet" type="text/css"/>  
    <link rel="stylesheet" type="text/css" href="/Qh_tpc/public/admin/css/history.css">  
 
    
</head>
<body >

<!-- 应收发票模块内容 -->
            <div class="The-contract-box">
                <div class="d-c-title">
                    <div class="d-c-square"></div>
                    <p>项目启动</p>
                </div>
                
                <div class="c-tab">
                        <div id="oProjectReceivable" style="position:relative;">
                            <div style="padding-left:20px;height:60px;">
                                <p class="active ">文件列表</p><p>操作记录</p>
                            </div>
							

							<?php if($rows['p_start'] == null AND $rows['p_imple'] == null AND $rows['p_closeout'] == null AND $rows['p_check'] == null AND $rows['p_remark'] == null ): ?><div class="news-contract2" >新建项目计划</div><?php endif; ?>

                            <div class="news-contract" >上传文件</div>
                            
                           
                            <dir style="display:block">
                                <div style="height:520px;">
                                    <div class="container-list">
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0" id="start_list" >
                                      
                                      
                                      <!-- 
                                      <tr>
                                        <th>类型</th>
                                        <th>名称</th>
                                        <th>大小</th>
                                        <th>重点提醒</th>
                                        <th>上传时间</th>
                                        <th>上传人</th>
                                        <th>操作</th>
                                      </tr>
                                      <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>我是一条重点信息提醒QAQ</td>
                                        <td>2016-06-23 16：05</td>
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr>
                                      <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>我是一条重点信息提醒QAQ</td>
                                        <td>2016-06-23 16：05</td>
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr>
                                      <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>我是一条重点信息提醒QAQ</td>
                                        <td>2016-06-23 16：05</td>
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr>
                                      <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>我是一条重点信息提醒QAQ</td>
                                        <td>2016-06-23 16：05</td>
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr>
                                      <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>我是一条重点信息提醒QAQ</td>
                                        <td>2016-06-23 16：05</td>
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr>
                                      <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>我是一条重点信息提醒QAQ</td>
                                        <td>2016-06-23 16：05</td>
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr>
                                      <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>我是一条重点信息提醒QAQ</td>
                                        <td>2016-06-23 16：05</td>
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr><tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>我是一条重点信息提醒QAQ</td>
                                        <td>2016-06-23 16：05</td>
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr>
                                      <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>我是一条重点信息提醒QAQ</td>
                                        <td>2016-06-23 16：05</td>
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr>
                                      <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>我是一条重点信息提醒QAQ</td>
                                        <td>2016-06-23 16：05</td>
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr>
                                       -->
                                    </table>  
                                    </div>  
      						</div>
                            </dir>
                            
                            <dir>
                                 <div style="border:1px solid #ededed">333</div>
                            
                            </dir>
                           
                        </div>
                   
                           <!-- 上传合同-->
                          <div class="ps-Box">
                                <div class="shelter"></div>
                                <div class="ps-con-box">
                                    <div class="pre-con-title">上传文件</div>
                                    <form method="post" action="<?php echo U('Admin/ProjectStart/NewFile');?>" enctype="multipart/form-data" id="imp_HT">
                                      <ul class="ps-con">
                                          <li style="margin-top:20px;"><label>重点提醒：</label><input class="in02" id="important" name="doc_remind"/></li>
                                          <li style="margin-top:20px;">
                                          <label style="float:left;">文件路径：</label>
                                                <ul style="float:left;">
                                                    <li><!-- <input type="file" placeholder="导入数据" class="in02"/> -->
                                                      <div style="width:220px;height:40px;overflow:hidden;position:relative;border:1px solid #ccc;">
                                                        
                                                        <div style="float:left;"><input type="text" id="txt" name="txt" class="txt"/></div>
                                                        <div style="float:left;"><div class="upload"></div></div>
                                                        <div style="height:30px;float:left;"><input type="file" onchange="txt.value=this.value" class="file" name='file_stu' id='word'/></div>
                                                        
                                                      </div>
                                                    </li>
                                                  </ul>
                                          </li>
                                          <li style="margin-top:10px;padding-left:90px;"><input type="button" value="确定" class="b01" id='imp_data'/><input type="button" value="取消" class="b02"/></li>
                                      </ul>    
                                  </form> 
                                </div>
                         </div>
                      <!-- 新建项目计划-->
                          <div class="ps-Box2">
                                <div class="shelter"></div>
                                <div class="ps-con-box2">
                                    <div class="pre-con-title">新建项目计划</div>
                                    <form method="post" action="<?php echo U('Admin/ProjectStart/NewFile');?>" enctype="multipart/form-data" id="imp_HT">
                                      <ul class="ps-con2">
										 <!-- <li style="margin-top:20px;"><label>项目经理：</label><input class="in02" id="important" name="doc_remind"/></li>-->
                                          <li style="margin-top:20px;"><label>项目开工：</label><input class="date_picker9" id="xmkg" name="doc_remind"/></li>
										  <li style="margin-top:20px;"><label>项目实施：</label><input class="date_picker10" id="xmss" name="doc_remind"/></li>
										  <li style="margin-top:20px;"><label>项目收尾：</label><input class="date_picker11"" id="xmsw" name="doc_remind"/></li>
										  <li style="margin-top:20px;"><label>项目验收：</label><input class="date_picker12" id="xmys" name="doc_remind"/></li>
                                          <li style="margin-top:20px;"><label>项目要求：</label><input class="in02" id="xmyq" name="doc_remind"/></li>
                                          <li style="margin-top:10px;padding-left:90px;"><input type="button" value="确定" class="b01" id='add_xmjh'/><input type="button" value="取消" class="b02"/></li>
                                      </ul>    
                                  </form> 
                                </div>
                         </div>
                </div>
            </div>
            
<input type="hidden" id="url_list" value="<?php echo U('Admin/ProjectStart/select_prostart');?>"/>

<input type="hidden" id="add_JH" value="<?php echo U('Admin/Project/add_JH_lcb');?>"/>


            
            
<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/Qh_tpc/public/admin/js/jquery.js"></script>
<script src="/Qh_tpc/public/admin/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/Qh_tpc/public/admin/js/jquery.date_input.pack2.js"></script>
<script type="text/javascript" src="/Qh_tpc/public/admin/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/Qh_tpc/public/admin/js/jquery.easing.js"></script>
<script type="text/javascript" src="/Qh_tpc/public/admin/js/history.js"></script>


<!-- 左侧目录 jq-->
<script type="text/javascript">

$('.date_picker9').date_input();
$('.date_picker10').date_input();
$('.date_picker11').date_input();
$('.date_picker12').date_input();
</script>
<script>

    window.onload=function()
    {
         var oDiv2=document.getElementById('oProjectReceivable');
        var aP=oDiv2.getElementsByTagName('p');
        var aDir=oDiv2.getElementsByTagName('dir');
        for (var i=0;i<aP.length;i++)
        {
            aP[i].onclick=function()
            {
                for(var i=0;i<aP.length;i++)
                {
                    aP[i].index=i;
                    aP[i].className='';
                    aDir[i].style.display='none';
                }
                this.className='active';
                aDir[this.index].style.display='block';
            };
        };

    };
 $('.news-contract').click(function(){

      $('.ps-Box').show();
    });
      $('.ps-con .b02').click(function(){

      $('.ps-Box').hide();
    });
       
 $('.news-contract2').click(function(){

      $('.ps-Box2').show();
    });
      $('.ps-con2 .b02').click(function(){

      $('.ps-Box2').hide();
    });
       
      
      
    //列表
      var url_list=$('#url_list').val();
     //alert(url_HT_list);
      $.get(url_list,function(data){
    	  var html = "<tr><th>类型</th><th>名称</th><th>大小</th><th>上传时间</th> <th>上传人</th><th width='400'>重点提醒</th><th>操作</th></tr>";
    	  if(data!=null){
    		  for(var i=0;i<data.length;i++)
    	      {
    			  html +='<tr><td style="width:100px;text-align:center;"><div class="word-pic"></div></td><td>《'+data[i]['name']+'》</td><td>'+data[i]['doc_size']+'k</td><td>'+data[i]['doc_time']+'</td> <td>'+data[i]['u_name']+'</td><td width="400" style="line-height:20px;text-align:left;padding-left:10px;color:red;">'+data[i]['doc_remind']+'</td><td><a class="a01" href="'+data[i]['commands']+'"></a><button class="b02"></button></td></tr>';
    	      }
    		  
    		  $("#start_list").html(html);
    	  }
    	  
      },'json');       

      
 //上传
$('#imp_data').click(function(){
   if($('#important').val()==0){
    	alert('请填写重点提醒');
    	exit;
    	}
    		     		 
    	$('#imp_HT').submit();
    		 //alert(0);
});


  
//新建项目计划
$('#add_xmjh').click(function(){
	var url=$('#add_JH').val();
	var p_start=$('#xmkg').val();
	var p_imple=$('#xmss').val();
	var p_closeout=$('#xmsw').val();
	var p_check=$('#xmys').val();
	var p_remark=$('#xmyq').val();
	if(p_start=='' || p_imple=='' || p_closeout=='' || p_check=='' || p_remark==''){
		alert('以上五项信息必须全部添写完整！！');
		exit;
	}
	var info='p_start='+p_start+'&p_imple='+p_imple+'&p_closeout='+p_closeout+'&p_check='+p_check+'&p_remark='+p_remark;
	//alert(url);
	//alert(info);
	$.post(url,info,function(data){
		if(data){
			alert('创建成功');
         	window.location.href=window.location.href;
		}else{
			alert('创建失败');
         	window.location.href=window.location.href;
		}
	},'json');

});

</script>

</body>
</html>