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

<!-- 项目施工模块内容 -->
            <div class="The-progress-of-box">
                <div class="d-c-title">
                    <div class="d-c-square"></div>
                    <p>项目进度</p>
                </div>
                <div class="p-tab">
                    <div style="overflow:hidden;">
                      <div class="container5">
                          <div id="sample_goal5"></div>
                      </div>
                      <button id="news-pf">新建进度</button>
                    </div>

                    <ul class="tpf-con" id='prog_list'>
                    
                    <!-- 
                        <li>
                            <div class="tpfc-left1"></div>
                            <div class="tpfc-right">
                              <p class="p01">【 项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称 】</p>
                              <p class="p01" style="line-height:16px;">这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述</p>
                              <p class="p01">2016-07-07 17:13</p>
                            </div>
                        </li>
                        <li>
                            <div class="tpfc-left2"></div>
                            <div class="tpfc-right">
                              <p class="p02">【 项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称 】</p>
                              <p class="p02" style="line-height:16px;">这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述</p>
                              <p class="p02">2016-07-07 17:13</p>
                            </div>
                        </li>
                        <li>
                            <div class="tpfc-left2"></div>
                            <div class="tpfc-right">
                              <p class="p02">【 项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称 】</p>
                              <p class="p02" style="line-height:16px;">这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述</p>
                              <p class="p02">2016-07-07 17:13</p>
                            </div>
                        </li>
                        <li>
                            <div class="tpfc-left2"></div>
                            <div class="tpfc-right">
                              <p class="p02">【 项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称 】</p>
                              <p class="p02" style="line-height:16px;">这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述</p>
                              <p class="p02">2016-07-07 17:13</p>
                            </div>
                        </li>
                        <li>
                            <div class="tpfc-left2"></div>
                            <div class="tpfc-right">
                              <p class="p02">【 项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称 】</p>
                              <p class="p02" style="line-height:16px;">这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述</p>
                              <p class="p02">2016-07-07 17:13</p>
                            </div>
                        </li>
                        <li>
                            <div class="tpfc-left2"></div>
                            <div class="tpfc-right">
                              <p class="p02">【 项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称 】</p>
                              <p class="p02" style="line-height:16px;">这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述</p>
                              <p class="p02">2016-07-07 17:13</p>
                            </div>
                        </li>
                        <li>
                            <div class="tpfc-left2"></div>
                            <div class="tpfc-right">
                              <p class="p02">【 项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称 】</p>
                              <p class="p02" style="line-height:16px;">这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述</p>
                              <p class="p02">2016-07-07 17:13</p>
                            </div>
                        </li>
                        <li>
                            <div class="tpfc-left2"></div>
                            <div class="tpfc-right">
                              <p class="p02">【 项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称 】</p>
                              <p class="p02" style="line-height:16px;">这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述</p>
                              <p class="p02">2016-07-07 17:13</p>
                            </div>
                        </li>
                        <li>
                            <div class="tpfc-left2"></div>
                            <div class="tpfc-right">
                              <p class="p02">【 项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称项目名称 】</p>
                              <p class="p02" style="line-height:16px;">这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述这里是对项目进度的情况描述</p>
                              <p class="p02">2016-07-07 17:13</p>
                            </div>
                        </li>
                        
                         -->
                    </ul>
                </div>
                   <!-- 新建进度-->
                          <div class="tpof-Box">
                                <div class="shelter"></div>
                                <div class="tpof-con-box">
                                    <div class="pre-con-title">新建进度</div>
                                    <form method="post" action="<?php echo U('Admin/Contract/NewFile');?>" enctype="multipart/form-data" id="imp_HT">
                                      <ul class="tpof-con">
                                          <li style="margin-top:20px;"><label>项目进度：</label><input id="pro_speed" class="in01" onblur="cheng()" /></li>
										  <li style="margin-top:20px;"><label>项目状态：</label><select id='pro_type'>
											
										  </select></li>
                                          <li style="margin-top:20px;"><label>进度备注：</label><textarea id="pro_remark" placeholder="备注："></textarea></li>
                                          <li style="margin-top:10px;padding-left:90px;"><input type="button" id="up_pro" value="确定" class="b01"/><input type="button" value="取消" class="b02"/></li>
                                      </ul>    
                                    </form>   
                                </div>
                         </div>
              
            </div>
            
<input type="hidden" id="progress_list" value="<?php echo U('Admin/Project/select_project_progress');?>"/>

<input type="hidden" id="pro_per" value="<?php echo U('Admin/Project/select_speed');?>"/>
            
<input type="hidden" id="updata_progress" value="<?php echo U('Admin/Project/updata_project_progress');?>"/>

<input type="hidden" id="select_protype" value="<?php echo U('Admin/Project/select_pro_type');?>"/>
            
<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/Qh_tpc/public/admin/js/goalProgress.js"></script>
<script type="text/javascript">
       // 项目施工
 			
       //项目总体进度
        	var url_per=$('#pro_per').val();
       
        	$.get(url_per,function(data){
           	 
           	  if(data!=null){
           		 
           		 $('#sample_goal5').goalProgress({
                 	
                 	goalAmount: 100,
                     currentAmount: data,
                     textAfter: '%'
                    
                 });	 
           	  }
           	  
            },'json');
        
          $('#news-pf').click(function(){

            $('.tpof-Box').show();

			var url=$('#select_protype').val();
			var html='';
			$.get(url,function(data){
				if(data['start']==0 && data['imple']==0 && data['closeout']==0 && data['check']==0){
					html+='<option value=0>请选择当前项目状态</option>'
						+'<option value=1>实际开工</option>'
						+'<option value=2>实际实施</option>'
						+'<option value=3>实际收尾</option>'
						+'<option value=4>实际验收</option>';
				}else if(data['start']==1 && data['imple']==0 && data['closeout']==0 && data['check']==0){
					html+='<option value=0>请选择当前项目状态</option>'
						+'<option value=2>实际实施</option>'
						+'<option value=3>实际收尾</option>'
						+'<option value=4>实际验收</option>';
				}else if(data['start']==1 && data['imple']==1 && data['closeout']==0 && data['check']==0){
					html+='<option value=0>请选择当前项目状态</option>'
						+'<option value=3>实际收尾</option>'
						+'<option value=4>实际验收</option>';
				}else if(data['start']==1 && data['imple']==1 && data['closeout']==1 && data['check']==0){
					html+='<option value=0>请选择当前项目状态</option>'
						+'<option value=4>实际验收</option>';
				}else if(data['start']==1 && data['imple']==1 && data['closeout']==1 && data['check']==1){
					html+='<option value=0>该项目已进入实际验收</option>';
				}

				$('#pro_type').html(html);
				
			},'json');





          });
          $('.tpof-con .b02').click(function(){

            $('.tpof-Box').hide();
          });
          
          
        //项目进度列表
          
          var url_progress_list=$('#progress_list').val();
          $.get(url_progress_list,function(data){
         	  var html = '';
         	  if(data!=null){
         		  
         		 html = '<li><div class="tpfc-left1"></div><div class="tpfc-right"><p class="p01">项目进度:'+data[0]['p_speed']+'</p><p class="p01" style="line-height:16px;">'+data[0]['p_remark']+'</p><p class="p01">'+data[0]['p_time']+'</p></div></li>';
         		 
         		 for(var i=1;i<data.length;i++)
         	      {
         			  
         			  html +='<li><div class="tpfc-left2"></div><div class="tpfc-right"><p class="p02">项目进度:'+data[i]['p_speed']+'</p><p class="p02" style="line-height:16px;">'+data[i]['p_remark']+'</p><p class="p02">'+data[i]['p_time']+'</p></div></li>';
         	      }
         		  
         		  $("#prog_list").html(html);
         	  }
         	  
          },'json');
          
          
        //修改项目进度
          
          $('#up_pro').click(function(){
         	 if($('#pro_speed').val()==''){
         		 alert('请填写项目进度');
         		 exit;
         	 }
         	 if($('#pro_remark').val()==''){
         		 alert('请填写备注');
         		 exit;
         	 }
         	 var url=$('#updata_progress').val();
         	 var p_speed=$('#pro_speed').val();
         	 var p_remark=$('#pro_remark').val();
			 var p_type=$('#pro_type').val();
         	 var info='p_speed='+p_speed+'&p_remark='+p_remark+'&p_type='+p_type;
			 //alert(info);
			// exit;
         	 $.post(url,info,function(data){
         		 if(data==2){
         			 alert('您所填写的进度不大于上次的进度，请重新填写！');
         			//$('.b02').click();
         		 }else if(data==3){
         			 alert('您未用于此权限！！');
          			$('.b02').click();
          		 }else if(data==0){
         			 alert('创建失败');
         			$('.b02').click();
         		 }else if(data==1){
         			 alert('创建成功');
         			window.location.href=window.location.href;
         		 }
         	 },'json');
          });
                   
    
        //检验项目进度是否为百分数
          function cheng(){
          	//alert(1);
          	
          	var re = /^[0-9]+[0-9]+%*$/;   //判断字符串是否为数字     //判断正整数 /^[1-9]+[0-9]*]*$/  
          	var number = document.getElementById('pro_speed').value;

          	 if (!re.test(number)){
          	    alert("请输入正确的百分数");
          	    document.getElementById('pro_speed').value = "";
          	    return false;
          	 }else{
          	    
          	    if(number.substr(number.length-1,1)!='%')
          	    {alert("请输入正确的百分数")};
          	    
          	 }
          
          }
        
        
        
       
          
</script>
</body>
</html>