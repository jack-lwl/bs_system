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
            <div class="Personnel-management-box">
                <div class="d-c-title">
                    <div class="d-c-square"></div>
                    <p>人员模块</p>
                </div>
                
                <div class="pm-tab">
                        <div id="oProjectReceivable2" style="position:relative;">
                            <div style="padding-left:20px;height:60px;">
                                <p class="active ">项目人员</p><p>人员管理</p>
                            </div>                             
                            <dir style="display:block">
                                <div style="height:510px;overflow:hidden;">
                                    <ul class="pm-con-left" id='person_list'>
                                    
                                    <!-- 
                                        <li class="p-current">

                                            <div class="pcl-left"><a>马小俊</a></div>
                                            <div class="pcl-center">                                                
                                                <label>职位：</label>                                               
                                                <a>a部-项目经理<br/>b部-项目经理</a>

                                            <div class="pcl-left"><a>马小俊</ a></div>
                                            <div class="pcl-center">
                                            
                                            <label>职位：</label>                                               
                                             <a>a部-项目经理</ a><br/>
                                             <a>b部-项目经理</ a>
                                                

                                            </div>
                                            <div class="pcl-right"><span>深圳</span></div>
                                        </li>
                                        <li>
                                            <div class="pcl-left"><a>马小俊</a></div>
                                            <div class="pcl-center"> 
                                               <label>职位：</label>                                               
                                                <a>a部-项目经理<br/>b部-项目经理</a>
                                            </div>
                                            <div class="pcl-right"><span>深圳</span></div>
                                        </li>
                                        <li>
                                            <div class="pcl-left"><a>马小俊</a></div>
                                            <div class="pcl-center">                                                
                                                <label>职位：</label>                                               
                                                <a>a部-项目经理<br/>b部-项目经理</a>
                                            </div>
                                            <div class="pcl-right"><span>深圳</span></div>
                                        </li>
                                        <li>
                                            <div class="pcl-left"><a>马小俊</a></div>
                                            <div class="pcl-center">                                                
                                                <label>职位：</label>                                               
                                                <a>a部-项目经理<br/>b部-项目经理</a>
                                            </div>
                                            <div class="pcl-right"><span>深圳</span></div>
                                        </li>
                                        <li>
                                            <div class="pcl-left"><a>马小俊</a></div>
                                            <div class="pcl-center">                                                
                                                <label>职位：</label>                                               
                                                <a>a部-项目经理<br/>b部-项目经理</a>>
                                            </div>
                                            <div class="pcl-right"><span>深圳</span></div>
                                        </li>
                                        <li>
                                            <div class="pcl-left"><a>马小俊</a></div>
                                            <div class="pcl-center">                                                
                                                <label>职位：</label>                                               
                                                <a>a部-项目经理<br/>b部-项目经理</a>
                                            </div>
                                            <div class="pcl-right"><span>深圳</span></div>
                                        </li>
                                        <li>
                                            <div class="pcl-left"><a>马小俊</a></div>
                                            <div class="pcl-center">                                                
                                               <label>职位：</label>                                               
                                                <a>a部-项目经理<br/>b部-项目经理</a>
                                            </div>
                                            <div class="pcl-right"><span>深圳</span></div>
                                        </li>
                                        <li>
                                            <div class="pcl-left"><a>马小俊</a></div>
                                            <div class="pcl-center">                                                
                                                <label>职位：</label>                                               
                                                <a>a部-项目经理<br/>b部-项目经理</a>
                                            </div>
                                            <div class="pcl-right"><span>深圳</span></div>
                                        </li>
                                        <li>
                                            <div class="pcl-left"><a>马小俊</a></div>
                                            <div class="pcl-center">                                                
                                                <label>职位：</label>                                               
                                                <a>a部-项目经理<br/>b部-项目经理</a>
                                            </div>
                                            <div class="pcl-right"><span>深圳</span></div>
                                        </li>
                                        <li>
                                            <div class="pcl-left"><a>马小俊</a></div>
                                            <div class="pcl-center">                                                
                                                <label>职位：</label>                                               
                                                <a>a部-项目经理<br/>b部-项目经理</a>
                                            </div>
                                            <div class="pcl-right"><span>深圳</span></div>

                                        </li>                                        

                                        </li>
                                         -->

                                    </ul>
                                    <div class="pm-con-right">
                                        <label>他参与的项目</label>
                                        <ul id="project_list">
                                        
                                        <!-- 
                                          <li>
                                            <div class="pcr-left"><div class="Focus-on"></div></div>
                                            <div class="pcr-center">
                                               <h5 style="color:#1a96d2;margin:0;">2015年广铁集团国铁货运系统维保2015年广铁集团国铁货运系统维保</h5>
                                               <div class="pmcr-con">
                                                  <label>立项日期：2016-06-23</label><label>项目经理：马小俊</label><br/>
                                                  <label>项目编号：LNSH201606</label><label>项目类型：售后</label>
                                               </div>
                                              <div class="pcr-con-bottom"><span class="s01">旅服系统</span><span class="s02">沈阳分公司</span></div>  
                                            </div>
                                            <div class="pcr-right">
                                                <h3 style="color:orange;">10.68万</h3>
                                                <label>已回款：6.22万</label>
                                                <div class="pcr-right2">深圳</div>
                                            </div>
                                            
                                          </li>
                                          
                                          
                                           -->
                                        </ul>
                                    </div>
      						              </div>
                            </dir>
                            <dir>
                                 <div style="height:510px;overflow:hidden;">
                                    <div class="postion-test-title">
                                        <div class="ptt-left">
                                            <a><span></span>未在项目中</a>
                                            <input class="in02" placeholder="请输入要查找的人员" />
                                        </div>
                                        <div class="ptt-right">
                                            <a><span></span>已在项目中</a>
                                            <input class="in02" placeholder="请输入要查找的人员"/>
                                        </div>
                                    </div>
                                    <div class="postion-test">   
                                        <ul class="p-list-left">
                                            <li>
                                               <div class="pll-left">
                                                <a>马小俊</a>
                                                <a>工程部-项目经理</a>
                                               </div>
                                               <div class="pll-right">
                                                 <a>上海</a>
                                               </div> 
                                            </li>
                                             <li>
                                               <div class="pll-left">
                                                <a>马小俊</a>
                                                <a>工程部-项目经理</a>
                                               </div>
                                               <div class="pll-right">
                                                 <a>上海</a>
                                               </div> 
                                            </li>
                                             <li>
                                               <div class="pll-left">
                                                <a>马小俊</a>
                                                <a>工程部-项目经理</a>
                                               </div>
                                               <div class="pll-right">
                                                 <a>上海</a>
                                               </div> 
                                            </li>
                                             <li>
                                               <div class="pll-left">
                                                <a>马小俊</a>
                                                <a>工程部-项目经理</a>
                                               </div>
                                               <div class="pll-right">
                                                 <a>上海</a>
                                               </div> 
                                            </li>
                                             <li>
                                               <div class="pll-left">
                                                <a>马小俊</a>
                                                <a>工程部-项目经理</a>
                                               </div>
                                               <div class="pll-right">
                                                 <a>上海</a>
                                               </div> 
                                            </li>
                                             <li>
                                               <div class="pll-left">
                                                <a>马小俊</a>
                                                <a>工程部-项目经理</a>
                                               </div>
                                               <div class="pll-right">
                                                 <a>上海</a>
                                               </div> 
                                            </li>
                                             <li>
                                               <div class="pll-left">
                                                <a>马小俊</a>
                                                <a>工程部-项目经理</a>
                                               </div>
                                               <div class="pll-right">
                                                 <a>上海</a>
                                               </div> 
                                            </li>
                                             <li>
                                               <div class="pll-left">
                                                <a>马小俊</a>
                                                <a>工程部-项目经理</a>
                                               </div>
                                               <div class="pll-right">
                                                 <a>上海</a>
                                               </div> 
                                            </li>
                                             <li>
                                               <div class="pll-left">
                                                <a>马小俊</a>
                                                <a>工程部-项目经理</a>
                                               </div>
                                               <div class="pll-right">
                                                 <a>上海</a>
                                               </div> 
                                            </li>
                                        </ul>
                                        <div class="p-list-center"></div>
                                        <ul class="p-list-right"></ul>
                                    </div>


                                 </div>
                            
                            </dir>
                            
                        </div>
                   
                        
                </div>
            </div>
            
 <input type="hidden" id="url_HT_list" value="<?php echo U('Admin/Contract/select_contract');?>"/>
 
 <input type="hidden" id="userpro_list" value="<?php echo U('Admin/User/select_user_pro');?>"/>
 
  <input type="hidden" id="user_list" value="<?php echo U('Admin/Project/select_pro_user');?>"/>
            
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
         var oDiv2=document.getElementById('oProjectReceivable2');
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
    // 数据左右移
           $(".postion-test li").click(function(){
            
            if($(this).parent().attr('class')=='p-list-left'){
                $(this).prependTo(".p-list-right");
            } else if($(this).parent().attr('class')=='p-list-right') {
                $(this).prependTo(".p-list-left");   
            }
            
                
        });
 //人员列表
 var url_userlist=$('#user_list').val();
 //var user_id=$('#xxxx').val();
 //var info='user_id='+user_id;
 $.get(url_userlist,function(data){
	  var html = "";
	  if(data!=null){
		  for(var i=0;i<data.length;i++)
	      {
			  if(data[i]['str_postion'].length>1){
				  html +='<li id="user" user_id="'+data[i]['p_user_id']+'" onclick="select_pro(this)" ><div class="pcl-left"><a>'+data[i]['user_name']+'</ a></div><div class="pcl-center"><label>部门：</label><a>'+data[i]['str_postion'][0]+'</ a><br /><a>'+data[i]['str_postion'][1]+'</ a></div><div class="pcl-right"><span>深圳</span></div></li>';
			  }else{
				  html +='<li id="user" user_id="'+data[i]['p_user_id']+'" onclick="select_pro(this)" ><div class="pcl-left"><a>'+data[i]['user_name']+'</ a></div><div class="pcl-center"><label>部门：</label><a>'+data[i]['str_postion']+'</ a></div><div class="pcl-right"><span>深圳</span></div></li>';
			  }
			  
	      }
		  
		  
		  $("#person_list").html(html);
	  }
	  
 },'json');
 
 
 function select_pro(obj){
	 
	 $("#person_list>li").removeAttr('class');
	 
	 $(obj).attr('class','p-current');
	  
	 var user_id=$(obj).attr('user_id');
	 //alert(user_id);
	 var url_prolist=$('#userpro_list').val();
	 var info='user_id='+user_id;
	 $.post(url_prolist,info,function(data){
		  var html = "";
		  if(data!=null){
			  for(var i=0;i<data.length;i++)
		      {
				  html +='<li><div class="pcr-left"><div class="Focus-on"></div></div><div class="pcr-center"><h5 style="color:#1a96d2; margin:0;">'+data[i]['Jname']+'</h5><div class="pmcr-con"><label>立项日期：'+data[i]['Begindate']+'</label><label>项目经理：马小俊</label><br/><label>项目编号：'+data[i]['Jobcode']+'</label><label>项目类型：售后</label></div><div class="pcr-con-bottom"><span class="s01">旅服系统</span><span class="s02">'+data[i]['c_name']+'</span></div>  </div><div class="pcr-right"><h3 style="color:orange;">'+data[i]['Camount']+'</h3><label>已回款：'+data[i]['Pamount']+'</label><div class="pcr-right2">深圳</div></div></li>';
		      }

			  $("#project_list").html(html);
		  }
		  
	 },'json');
 }
 
 
 


</script>

</body>
</html>