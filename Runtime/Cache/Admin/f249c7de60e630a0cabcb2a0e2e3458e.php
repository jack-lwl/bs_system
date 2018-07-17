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
                    <p>合同管理</p>
                </div>
                
                <div class="c-tab">
                        <div id="oProjectReceivable" style="position:relative;">
                            <div style="padding-left:20px;height:60px;">
                                <p class="active ">合同列表</p><p>操作记录</p>
                            </div>  
                            <div class="news-contract" >上传合同</div>
                            
                           
                            <dir style="display:block">
                                <div style="height:520px;">
                                    <div class="container-list">
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0" id='HT_list'>
                                      
                                      
                                      <!-- 
                                      <tr>
                                        <th>类型</th>
                                        <th>名称</th>
                                        <th>大小</th>
                                        <th>上传时间</th>
                                        
                                        <th>上传人</th>
                                        <th>操作</th>
                                      </tr>
                                      <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>2016-06-23 16：05</td>
                                        
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr>
                                       <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>2016-06-23 16：05</td>
                                        
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr>
                                       <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>2016-06-23 16：05</td>
                                        
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr>
                                       <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>2016-06-23 16：05</td>
                                        
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr>
                                       <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>2016-06-23 16：05</td>
                                        
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr>
                                       <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>2016-06-23 16：05</td>
                                        
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr>
                                       <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
                                        <td>2016-06-23 16：05</td>
                                        
                                        <td>田慧</td>
                                        <td><a class="a01" href=""></a><button class="b02"></button></td>
                                      </tr>
                                       <tr>
                                        <td style="width:100px;text-align:center;"><div class="word-pic"></div></td>
                                        <td>《LNQH2015年广铁集团国铁货运系统维保合同第一版》</td>
                                        <td>20k</td>
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
                          <div class="tc-Box">
                                <div class="shelter"></div>
                                <div class="tc-con-box">
                                    <div class="pre-con-title">上传合同</div>
                                    <form method="post" action="<?php echo U('Admin/Contract/NewFile');?>" enctype="multipart/form-data" id="imp_HT">
                                      <ul class="tc-con">
                                          <li style="margin-top:20px;"><label>合同金额：</label><input class="in01" id='HT_money' onblur="check_money()" name='f_amount'/></li>
                                          <li style="margin-top:20px;"><label>合同编号：</label><input class="in02" id='HT_code' name='v_code'/></li>
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
                    
                </div>
            </div>
            
 <input type="hidden" id="url_HT_list" value="<?php echo U('Admin/Contract/select_contract');?>"/>
            
            
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

      $('.tc-Box').show();
    });
      $('.tc-con .b02').click(function(){

      $('.tc-Box').hide();
    });
  
  
 
 //合同列表
  var url_HT_list=$('#url_HT_list').val();
 //alert(url_HT_list);
  $.get(url_HT_list,function(data){
	  var html = "<tr><th>类型</th><th>名称</th><th>大小</th><th>上传时间</th> <th>上传人</th><th>操作</th></tr>";
	  if(data!=null){
		  for(var i=0;i<data.length;i++)
	      {
			  html +='<tr><td style="width:100px;text-align:center;"><div class="word-pic"></div></td><td>《'+data[i]['name']+'》</td><td>'+data[i]['n_size']+'k</td><td>'+data[i]['c_time']+'</td> <td>'+data[i]['u_name']+'</td><td><a class="a01" href="'+data[i]['commands']+'"></a><button class="b02"></button></td></tr>';
	      }
		  
		  $("#HT_list").html(html);
	  }
	  
  },'json'); 
  
  
  //上传合同
  $('#imp_data').click(function(){
		 if($('#HT_money').val()==0){
			 alert('请填写合同金额');
			 exit;
		 }
		 
		 if($('#HT_code').val()==0){
			 alert('请填写合同编号');
			 exit;
		 }
		 if($('#word').val()==''){
			 alert('请选择文件');
			 exit;
		 }
		 
		 $('#imp_HT').submit();
		 //alert(0);
	 });

  
  //检验金额
  function check_money(){
  	
  	var re = /^[0-9]+[0-9]+.*$/;   //判断字符串是否为数字     //判断正整数 /^[1-9]+[0-9]*]*$/  
      var number = document.getElementById('HT_money').value;
     
      if (!re.test(number))
     {
         alert("请输入数字");
         document.getElementById('HT_money').value = "";
         return false;
      }

  }
  
</script>

</body>
</html>