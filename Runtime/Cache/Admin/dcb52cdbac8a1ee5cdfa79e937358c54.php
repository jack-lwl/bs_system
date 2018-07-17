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
            <div class="Invoice-receivable-box">
                <div class="d-c-title">
                    <div class="d-c-square"></div>
                    <p>应收发票</p>
                </div>
                <div class="statisticalbox">
                    <label>统计：</label>
                    <p>合同额：<span><?php echo $info['Camount'];?></span></p>
                    <p>回款：<span><?php echo $info['Pamount'];?></span></p>
                    <p>应收：<span><?php echo $recei;?></span></p>
                </div>
                <div class="tab-new-export">
                        <div id="oProjectReceivable" style="position:relative;">
                            <div style="padding-left:20px;height:60px;">
                                <p class="active p01">回款记录</p><p class="p02">回款计划</p><p>操作记录</p>
                            </div>  
                            <div class="news-record" >新建记录</div>
                            <div class="news-plan" >新建计划</div>
                            <dir style="display:block;">  
                                <!-- 时间轴 -->
                                <div style="border:1px solid #ededed">
                                        <div id="arrow">
                                            <ul>
                                                <li class="arrowup"></li>
                                                <li class="arrowdown"></li>
                                            </ul>
                                        </div>
                                        <div id="history">
                                        <div class="title">
                                            <h5>回款记录树</h5>
                                            <div id="circle">
                                                <div class="cmsk"></div>
                                                <div class="circlecontent">
                                                    <div thisyear="2016" class="timeblock">
                                                        <span class="numf"></span>
                                                        <span class="nums"></span>
                                                        <span class="numt"></span>
                                                        <span class="numfo"></span>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="timeyear">YEAR</div>
                                                </div>
                                                <a class="clock"></a>
                                            </div>
                                        </div>
                                        
                                        <div id="content">

                                            <ul class="list" id='pay_JL'>
                                            
                                            <!-- 
                                                <li >
                                                    <div class="liwrap">
                                                        <div class="lileft">
                                                            <div class="date">
                                                                <span class="year">2016</span>
                                                                <span class="md">08-19</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="point"><b></b></div>
                                                        
                                                        <div class="liright">
                                                            <div class="histt"><a >收到回款：200,000,000元</a></div>
                                                            <div class="hisct">这里写的是本次回款的原因或本次回款的来源信息，总之是介绍这笔款的来源，是什么的回款。如某某项目什么什么内容收到某个单位的回款多少...</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li >
                                                    <div class="liwrap">
                                                        <div class="lileft">
                                                            <div class="date">
                                                                <span class="year">2016</span>
                                                                <span class="md">08-20</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="point"><b></b></div>
                                                        
                                                        <div class="liright">
                                                            <div class="histt"><a >收到回款：200,000,000元</a></div>
                                                            <div class="hisct">这里写的是本次回款的原因或本次回款的来源信息，总之是介绍这笔款的来源，是什么的回款。如某某项目什么什么内容收到某个单位的回款多少...</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li >
                                                    <div class="liwrap">
                                                        <div class="lileft">
                                                            <div class="date">
                                                                <span class="year">2016</span>
                                                                <span class="md">08-21</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="point"><b></b></div>
                                                        
                                                        <div class="liright">
                                                            <div class="histt"><a>收到回款：200,000,000元</a></div>
                                                            <div class="hisct">这里写的是本次回款的原因或本次回款的来源信息，总之是介绍这笔款的来源，是什么的回款。如某某项目什么什么内容收到某个单位的回款多少...</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li >
                                                    <div class="liwrap">
                                                        <div class="lileft">
                                                            <div class="date">
                                                                <span class="year">2016</span>
                                                                <span class="md">08-22</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="point"><b></b></div>
                                                        
                                                        <div class="liright">
                                                            <div class="histt"><a >收到回款：200,000,000元</a></div>
                                                            <div class="hisct">这里写的是本次回款的原因或本次回款的来源信息，总之是介绍这笔款的来源，是什么的回款。如某某项目什么什么内容收到某个单位的回款多少...</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li >
                                                    <div class="liwrap">
                                                        <div class="lileft">
                                                            <div class="date">
                                                                <span class="year">2016</span>
                                                                <span class="md">08-23</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="point"><b></b></div>
                                                        
                                                        <div class="liright">
                                                            <div class="histt"><a >收到回款：200,000,000元</a></div>
                                                            <div class="hisct">这里写的是本次回款的原因或本次回款的来源信息，总之是介绍这笔款的来源，是什么的回款。如某某项目什么什么内容收到某个单位的回款多少...</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li >
                                                    <div class="liwrap">
                                                        <div class="lileft">
                                                            <div class="date">
                                                                <span class="year">2016</span>
                                                                <span class="md">08-24</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="point"><b></b></div>
                                                        
                                                        <div class="liright">
                                                            <div class="histt"><a >收到回款：200,000,000元</a></div>
                                                            <div class="hisct">这里写的是本次回款的原因或本次回款的来源信息，总之是介绍这笔款的来源，是什么的回款。如某某项目什么什么内容收到某个单位的回款多少...</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li >
                                                    <div class="liwrap">
                                                        <div class="lileft">
                                                            <div class="date">
                                                                <span class="year">2016</span>
                                                                <span class="md">08-25</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="point"><b></b></div>
                                                        
                                                        <div class="liright">
                                                            <div class="histt"><a>收到回款：200,000,000元</a></div>
                                                            <div class="hisct">这里写的是本次回款的原因或本次回款的来源信息，总之是介绍这笔款的来源，是什么的回款。如某某项目什么什么内容收到某个单位的回款多少...</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                   <li >
                                                    <div class="liwrap">
                                                        <div class="lileft">
                                                            <div class="date">
                                                                <span class="year">2016</span>
                                                                <span class="md">08-25</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="point"><b></b></div>
                                                        
                                                        <div class="liright">
                                                            <div class="histt"><a>收到回款：200,000,000元</a></div>
                                                            <div class="hisct">这里写的是本次回款的原因或本次回款的来源信息，总之是介绍这笔款的来源，是什么的回款。如某某项目什么什么内容收到某个单位的回款多少...</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                   <li >
                                                    <div class="liwrap">
                                                        <div class="lileft">
                                                            <div class="date">
                                                                <span class="year">2016</span>
                                                                <span class="md">08-25</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="point"><b></b></div>
                                                        
                                                        <div class="liright">
                                                            <div class="histt"><a>收到回款：200,000,000元</a></div>
                                                            <div class="hisct">这里写的是本次回款的原因或本次回款的来源信息，总之是介绍这笔款的来源，是什么的回款。如某某项目什么什么内容收到某个单位的回款多少...</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                   <li >
                                                    <div class="liwrap">
                                                        <div class="lileft">
                                                            <div class="date">
                                                                <span class="year">2016</span>
                                                                <span class="md">08-25</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="point"><b></b></div>
                                                        
                                                        <div class="liright">
                                                            <div class="histt"><a>收到回款：200,000,000元</a></div>
                                                            <div class="hisct">这里写的是本次回款的原因或本次回款的来源信息，总之是介绍这笔款的来源，是什么的回款。如某某项目什么什么内容收到某个单位的回款多少...</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                   <li >
                                                    <div class="liwrap">
                                                        <div class="lileft">
                                                            <div class="date">
                                                                <span class="year">2016</span>
                                                                <span class="md">08-25</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="point"><b></b></div>
                                                        
                                                        <div class="liright">
                                                            <div class="histt"><a>收到回款：200,000,000元</a></div>
                                                            <div class="hisct">这里写的是本次回款的原因或本次回款的来源信息，总之是介绍这笔款的来源，是什么的回款。如某某项目什么什么内容收到某个单位的回款多少...</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                   <li >
                                                    <div class="liwrap">
                                                        <div class="lileft">
                                                            <div class="date">
                                                                <span class="year">2016</span>
                                                                <span class="md">08-25</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="point"><b></b></div>
                                                        
                                                        <div class="liright">
                                                            <div class="histt"><a>收到回款：200,000,000元</a></div>
                                                            <div class="hisct">这里写的是本次回款的原因或本次回款的来源信息，总之是介绍这笔款的来源，是什么的回款。如某某项目什么什么内容收到某个单位的回款多少...</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                   <li >
                                                    <div class="liwrap">
                                                        <div class="lileft">
                                                            <div class="date">
                                                                <span class="year">2016</span>
                                                                <span class="md">08-25</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="point"><b></b></div>
                                                        
                                                        <div class="liright">
                                                            <div class="histt"><a>收到回款：200,000,000元</a></div>
                                                            <div class="hisct">这里写的是本次回款的原因或本次回款的来源信息，总之是介绍这笔款的来源，是什么的回款。如某某项目什么什么内容收到某个单位的回款多少...</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                   <li >
                                                    <div class="liwrap">
                                                        <div class="lileft">
                                                            <div class="date">
                                                                <span class="year">2016</span>
                                                                <span class="md">08-25</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="point"><b></b></div>
                                                        
                                                        <div class="liright">
                                                            <div class="histt"><a>收到回款：200,000,000元</a></div>
                                                            <div class="hisct">这里写的是本次回款的原因或本次回款的来源信息，总之是介绍这笔款的来源，是什么的回款。如某某项目什么什么内容收到某个单位的回款多少...</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                   <li >
                                                    <div class="liwrap">
                                                        <div class="lileft">
                                                            <div class="date">
                                                                <span class="year">2016</span>
                                                                <span class="md">08-29</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="point"><b></b></div>
                                                        
                                                        <div class="liright">
                                                            <div class="histt"><a>收到回款：200,000,000元</a></div>
                                                            <div class="hisct">这里写的是本次回款的原因或本次回款的来源信息，总之是介绍这笔款的来源，是什么的回款。如某某项目什么什么内容收到某个单位的回款多少...</div>
                                                        </div>
                                                    </div>
                                                </li>
												 -->
                                                
                                            </ul>
                                        </div>
                                    </div>   
                            </dir>
                            <dir >
                            <div style="height:520px;">
                                <div class="receivable-plan">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0"  id="pay_JH" >
                                
                                <!-- 
                                      <tr>
                                        <th>状态</th>
                                        <th>计划名称</th>
                                        <th>预计回款时间</th>
                                        <th>预计回款金额</th>
                                        
                                        <th>计划人</th>
                                        <th>操作</th>
                                      </tr>
                                      <tr>
                                        <td><span class="s01">进行中</span></td>
                                        <td>某某第一期回款计划</td>
                                        <td>2016-06-30</td>
                                        <td>500，000，000</td>
                                        
                                        <td>马小俊</td>
                                        <td><button class="b01"></button><button class="b02"></button></td>
                                      </tr>
                                        -->
                                    </table>
                                    </div>
                                   <div style="overflow:hidden;">
                                   <div class="plan-bottom">
                                        <label>计划统计：</label><a>计划回款总额：<span id='JH'>200，000，000</span></a><a>实际回款总额：<span id="SJ">190，000，000</span></a><a>应收款：<span id='YS'>190，000，000</span></a>
                                   </div>
                                   
                                    </div>
                                                                  
                                   
                                    
						</div>
                            </dir>
                            <dir>333</dir>
                            
                        </div>
                        <!-- 新建记录 -->
                          <div class="new-record-Box">
                                <div class="shelter"></div>
                                <div class="nr-con-box">
                                    <div class="pre-con-title">新建回款记录</div>
                                    <ul class="nr-con" >
                                         
                                        <li ><label>回款时间：</label><input type="text" id='JL_time' class="date_picker9"></li>  
                                        <li><label>回款金额：</label><input id='JL_money' onblur="check_JL()"/></li>
                                        <li><textarea placeholder="备注：" id='JL_remark'></textarea></li>
                                        <li><button id='add_JL'>确定</button><button id="nr-esc">取消</button></li>        
                                    </ul>
                               
                                             
                                </div>
                         </div>
                          <!-- 新建计划 -->
                          <div class="new-plan-Box">
                                <div class="shelter"></div>
                                <div class="np-con-box">
                                    <div class="pre-con-title">新建回款计划</div>
                                    <ul class="np-con" >
                                         
                                        <li ><label>回款时间：</label><input type="text" class="date_picker10" id='JH_time'></li>  
                                        <li><label>回款金额：</label><input id='JH_money' onblur="check_JH()"/></li>
                                        <li><button id='add_JH'>确定</button><button id="np-esc">取消</button></li>        
                                    </ul>
                               
                                             
                                </div>
                         </div>

                    
                </div>
            </div>
            
            
  <input type="hidden" id="add_pay" value="<?php echo U('Admin/Project/add_payment');?>"/>
  
  <input type="hidden" id="select_pay_JL" value="<?php echo U('Admin/Project/select_payment_JL');?>"/>
  
  <input type="hidden" id="select_pay_JH" value="<?php echo U('Admin/Project/select_payment_JH');?>"/>
  
  <input type="hidden" id="select_pay_JS" value="<?php echo U('Admin/Project/select_payment_JS');?>"/>
            
            
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

       // 应收发票 
         var oDiv=document.getElementById('oProjectReceivable');
        var aBtn=oDiv.getElementsByTagName('p');
        var aDiv=oDiv.getElementsByTagName('dir');
        for (var i=0;i<aBtn.length;i++)
        {
            aBtn[i].onclick=function()
            {
                for(var i=0;i<aBtn.length;i++)
                {
                    aBtn[i].index=i;
                    aBtn[i].className='';
                    aDiv[i].style.display='none';
                }
                this.className='active';
                aDiv[this.index].style.display='block';
            };
        };

    };
    $('.news-record').click(function(){

    $('.new-record-Box').show();
    });

    $('#nr-esc').click(function(){

        $('.new-record-Box').hide();
    });
        $('.news-plan').click(function(){

    $('.new-plan-Box').show();
    });

    $('#np-esc').click(function(){

        $('.new-plan-Box').hide();
    });

 $('.tab-new-export .p02').click(function(){

       $('.news-record').hide();
       $('.news-plan').show();
    });
  $('.tab-new-export .p01').click(function(){

       $('.news-record').show();
        $('.news-plan').hide();
    });
  
  $('#add_JL').click(function(){
	  //alert(1);
	  var url=$('#add_pay').val();
	  var JL_time=$('#JL_time').val();
	  if(JL_time==''){
		  alert('请选择时间');
		  exit;
	  }
	  var JL_money=$('#JL_money').val();
	  if(JL_money==''){
		  alert('请填写金额');
		  exit;
	  }
	  var JL_remark=$('#JL_remark').val();
	  if(JL_remark==''){
		  alert('请填写备注');
		  exit;
	  }
	  var info = "p_time="+JL_time+"&p_money="+JL_money+"&p_remark="+JL_remark+"&state="+2;
	  //alert(info);
	  
	  $.post(url,info,function(data){
		  if(data==1){
			  alert('新建成功');
			  window.location.href=window.location.href;
		  }else{
			  alert('新建失败');
			  $('#np-esc').click();
		  }
	  },'json');
	  
  });
  
  
  //检验金额
  function check_JL(){
  	
  	var re = /^[0-9]+[0-9]+.*$/;   //判断字符串是否为数字     //判断正整数 /^[1-9]+[0-9]*]*$/  
      var number = document.getElementById('JL_money').value;
     
      if (!re.test(number))
     {
         alert("请输入数字");
         document.getElementById('JL_money').value = "";
         return false;
      }

  }
  
  
  
  $('#add_JH').click(function(){
	  //alert(1);
	  var url=$('#add_pay').val();
	  var JH_time=$('#JH_time').val();
	  if(JH_time==''){
		  alert('请选择时间');
		  exit;
	  }
	  var JH_money=$('#JH_money').val();
	  if(JH_money==''){
		  alert('请填写金额');
		  exit;
	  }
	  
	  //var JL_remark=$('JL_remark').val();
	  var info = "p_time="+JH_time+"&p_money="+JH_money+"&state="+1;
	  //alert(info);
	  
	  $.post(url,info,function(data){
		  if(data==1){
			  alert('新建成功');
			  window.location.href=window.location.href;
		  }else{
			  alert('新建失败');
			  $('#np-esc').click();
		  }
	  },'json');
  });
  
  
  //检验金额
  function check_JH(){
  	
  	var re = /^[0-9]+[0-9]+.*$/;   //判断字符串是否为数字     //判断正整数 /^[1-9]+[0-9]*]*$/  
      var number = document.getElementById('JH_money').value;
     
      if (!re.test(number))
     {
         alert("请输入数字");
         document.getElementById('JH_money').value = "";
         return false;
      }

  }
  
  
  
  //回款记录树
  var url_JL=$('#select_pay_JL').val();
  //alert(url_JL);
  $.get(url_JL,function(data){
	  var html = "";
	  if(data!=null){
		  for(var i=0;i<data.length;i++)
	      {
			  html +='<li ><div class="liwrap"><div class="lileft"><div class="date"><span class="year">'+data[i]['year']+'</span><span class="md">'+data[i]['month']+'</span></div></div><div class="point"><b></b></div><div class="liright"><div class="histt"><a>收到回款：'+data[i]['p_money']+'元</a></div><div class="hisct">'+data[i]['p_remark']+'</div></div></div></li>';
	      }
		  
		  $("#pay_JL").html(html);
	  }
	  
  },'json');

  
//回款计划列表
  var url_JH=$('#select_pay_JH').val();
  //alert(url_JH);
  $.get(url_JH,function(res){
	  var html = "<tr><th>状态</th><th>计划名称</th><th>预计回款时间</th><th>预计回款金额</th><th>计划人</th><th>操作</th></tr>";
	  
	  if(res!=null){
		  for(var j=0;j<res.length;j++)
	      {
			  //alert(res[j]['date']);
			  //exit;
			  var num=j+1;
			  //html +='<tr><td><span class="s01">进行中</span></td><td>第期回款计划</td><td>111</td><td>'+res[j]['date']+'</td><td>'+res[j]['c_uid']+'</td><td><button class="b01"></button><button class="b02"></button></td></tr>';
			  html +='<tr><td><span class="s01">进行中</span></td><td>第'+num+'期回款计划</td><td>'+res[j]['date']+'</td><td>'+res[j]['p_money']+'</td><td>'+res[j]['u_name']+'</td><td><button class="b01"></button><button class="b02"></button></td></tr>'
	      }
		  
		  $("#pay_JH").html(html);
	  }
	  
  },'json');
  
//回款统计
  var url_JS=$('#select_pay_JS').val();
  //alert(url_JH);
  $.get(url_JS,function(res){
	 
	  
	  if(res!=null){
		 
		  
		  $("#JH").html(res['JH']);
		  $("#SJ").html(res['SJ']);
		  $("#YS").html(res['YS']);
	  }
	  
  },'json');
  
  //<tr><td><span class="s01">进行中</span></td><td>某某第一期回款计划</td><td>2016-06-30</td><td>500，000，000</td><td>马小俊</td><td><button class="b01"></button><button class="b02"></button></td></tr>    
  
  

</script>

</body>
</html>