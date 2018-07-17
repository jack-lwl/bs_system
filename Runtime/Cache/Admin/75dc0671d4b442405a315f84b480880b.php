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
            <div class="estimate-box">
                <div class="d-c-title">
                    <div class="d-c-square"></div>
                    <p>项目概算</p>
                </div>
                
                <div class="e-tab">
                        <div id="oProjectReceivable" style="position:relative;">
                            <div style="padding-left:20px;height:60px;">
                                <p class="active ">预算情况</p><p>操作记录</p>
                            </div> 
                    
                    <!--       
                    <?php if(($data == '')): ?><div class="estimate-list">
                                    
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0" id='HT_list'>
                                      <tr>
                                        <th>成本项目</th>
                                        <th>预计费用</th>
                                        <th>实际费用</th>
                                        <th>备注</th>
                                        <th>操作</th>
                                      </tr>
                                      <tr>
                                        <td>业务费</td>
                                        <td>100，000，000</td>
                                        <td><span class="s01">120，000，000</span></td>
                                        <td>包括项目前期考察至项目结束整个期间各项业务开展费用</td>

                                        <td><button></button></td>
                                      </tr>
                                      <tr>
                                        <td>工程费（含外包费）</td>
                                        <td>100，000，000</td>
                                        <td><span class="s02">80，000，000</span></td>
                                        <td>包含项目外包的各项费用</td>

                                        <td><button></button></td>
                                      </tr>
                                       <tr>
                                        <td>材料费</td>
                                        <td>100，000，000</td>
                                        <td><span class="s02">80，000，000</span></td>
                                        <td>含辅材，为不含税价格</td>

                                        <td><button></button></td>
                                      </tr>
                                       <tr>
                                        <td>财务费（税金）</td>
                                        <td>100，000，000</td>
                                        <td><span class="s02">80，000，000</span></td>
                                        <td>(合同额-材料费) * 1.17 * 17% * 0.12</td>

                                        <td><button></button></td>
                                      </tr>
                                       <tr>
                                        <td>维修费（售后费用）</td>
                                        <td>100，000，000</td>
                                        <td><span class="s02">80，000，000</span></td>
                                        <td>施工类2%，销售类1%，特殊项目无维修需要单独申请</td>

                                        <td><button></button></td>
                                      </tr>
                                      <tr>
                                        <td>成本小计</td>
                                        <td>100，000，000</td>
                                        <td><span class="s02">80，000，000</span></td>
                                        <td>等于以上各项成本之和</td>

                                        <td><button></button></td>
                                      </tr>
                                       <tr class="t01">
                                        <td >项目毛利</td>
                                        <td>100，000，000</td>
                                        <td><span class="s02">80，000，000</span></td>
                                        <td></td>

                                        <td><button></button></td>
                                      </tr>
                                      <tr>
                                        <td>所得税费用</td>
                                        <td>100，000，000</td>
                                        <td><span class="s02">80，000，000</span></td>
                                        <td>（合同额-成本）* 15%</td>

                                        <td><button></button></td>
                                      </tr>
                                       <tr class="t01">
                                        <td><span style="color:red;">净利润</span></td>
                                        <td>100，000，000</td>
                                        <td><span class="s02">80，000，000</span></td>
                                        <td></td>

                                        <td><button></button></td>
                                      </tr>
                                    </table> 
                                    <div style="height:80px;/*line-height:20px;*/font-size:12px;color:red;width:96%;margin:0 auto;margin-top:10px;">
                                      *要求：由业务主导，“项目工程费用预算明细表”由项目经理填写，工程部经理签字确认后提交给业务；“项目业务费用预算明细表”由业务负责人填写并且分公司经理签字确认；项目经理提交给商务物料清单
三天后，由商务填写“项目物料预算明细表”并且由商务经理签字确认后提交给业务；业务负责人将四张表同时提交给财务，然后由财务把“项目概算明细表”交给商务“项目概算明细表”后，方可采购。特殊
情况：由业务申请以邮件的形式发送给总经理，总经理以邮件的形式回复业务，同时抄送商务、工程、财务，工程方可施工，商务方可采购；或者总经理回复业务，然后由业务转发工程、商务、财务，工程方可
施工，商务方可采购；从启动会开始，十天之内由业务主导补交上述流程。超过十天不提交，业务员黄牌处罚
                                    </div> 
                                    </div> 
                                    
                         <?php else: ?>
                                <div class="news-estimate" >新建概算</div>
                            <dir style="display:block">
                                <div style="height:520px;"><?php endif; ?>
                            
                             -->  
                            
                  
                         
                                <div class="news-estimate" id="add_GS">新建概算</div>
                            <dir style="display:block">
                                <div style="height:520px;">
                               
                      
                               
                                    <div class="estimate-list">
                                    
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0" id='table_list'>
                                      <tr>
                                        <th>成本项目</th>
                                        <th>预计费用</th>
                                        <th>实际费用</th>
                                        <th>备注</th>
                                        <th>操作</th>
                                      </tr>
                                      <tr>
                                        <td>业务费</td>
                                        <td><?php echo $data['001']['f_money'];?></td>
                                        <td><span class="s01">120，000，000</span></td>
                                        <td>包括项目前期考察至项目结束整个期间各项业务开展费用</td>

                                        <td><button type="001" onclick="up_bud(this)"></button></td>
                                      </tr>
                                      <tr>
                                        <td>工程费（含外包费）</td>
                                        <td><?php echo $data['002']['f_money'];?></td>
                                        <td><span class="s02">80，000，000</span></td>
                                        <td>包含项目外包的各项费用</td>

                                        <td><button type="002" onclick="up_bud(this)"></button></td>
                                      </tr>
                                       <tr>
                                        <td>材料费</td>
                                        <td><?php echo $data['003']['f_money'];?></td>
                                        <td><span class="s02">80，000，000</span></td>
                                        <td>含辅材，为不含税价格</td>

                                        <td><button type="003" onclick="up_bud(this)"></button></td>
                                      </tr>
                                       <tr>
                                        <td>财务费（税金）</td>
                                        <td><?php echo $data['004']['f_money'];?></td>
                                        <td><span class="s02">80，000，000</span></td>
                                        <td>(合同额-材料费) * 1.17 * 17% * 0.12</td>

                                        <td><button type="004" onclick="up_bud(this)"></button></td>
                                      </tr>
                                       <tr>
                                        <td>维修费（售后费用）</td>
                                        <td><?php echo $data['005']['f_money'];?></td>
                                        <td><span class="s02">80，000，000</span></td>
                                        <td>施工类2%，销售类1%，特殊项目无维修需要单独申请</td>

                                        <td><button type="005" onclick="up_bud(this)"></button></td>
                                      </tr>
                                      <tr>
                                        <td>成本小计</td>
                                        <td><?php echo $data['006']['f_money'];?></td>
                                        <td><span class="s02">80，000，000</span></td>
                                        <td>等于以上各项成本之和</td>

                                        <td><button type="006" onclick="up_bud(this)"></button></td>
                                      </tr>
                                       <tr class="t01">
                                        <td >项目毛利</td>
                                        <td><?php echo $data['007']['f_money'];?></td>
                                        <td><span class="s02">80，000，000</span></td>
                                        <td></td>

                                        <td><button type="007" onclick="up_bud(this)"></button></td>
                                      </tr>
                                      <tr>
                                        <td>所得税费用</td>
                                        <td><?php echo $data['008']['f_money'];?></td>
                                        <td><span class="s02">80，000，000</span></td>
                                        <td>（合同额-成本）* 15%</td>

                                        <td><button type="008" onclick="up_bud(this)"></button></td>
                                      </tr>
                                       <tr class="t01">
                                        <td><span style="color:red;">净利润</span></td>
                                        <td><?php echo $data['009']['f_money'];?></td>
                                        <td><span class="s02">80，000，000</span></td>
                                        <td></td>

                                        <td><button type="009" onclick="up_bud(this)"></button></td>
                                      </tr>
                                    </table> 
                                    <div id="shuoming" style="height:80px;/*line-height:20px;*/font-size:12px;color:red;width:96%;margin:0 auto;margin-top:10px;">
                                      *要求：由业务主导，“项目工程费用预算明细表”由项目经理填写，工程部经理签字确认后提交给业务；“项目业务费用预算明细表”由业务负责人填写并且分公司经理签字确认；项目经理提交给商务物料清单
三天后，由商务填写“项目物料预算明细表”并且由商务经理签字确认后提交给业务；业务负责人将四张表同时提交给财务，然后由财务把“项目概算明细表”交给商务“项目概算明细表”后，方可采购。特殊
情况：由业务申请以邮件的形式发送给总经理，总经理以邮件的形式回复业务，同时抄送商务、工程、财务，工程方可施工，商务方可采购；或者总经理回复业务，然后由业务转发工程、商务、财务，工程方可
施工，商务方可采购；从启动会开始，十天之内由业务主导补交上述流程。超过十天不提交，业务员黄牌处罚
                                    </div> 
                                    </div> 
                                    
                                     
      						            </div>
                            </dir>
                            
                      
                            
                            
                            
                            <dir>
                                 <div style="border:1px solid #ededed">333</div>
                            
                            </dir>
                            
                        </div>
                </div>
                 <!-- 新建概算-->
                          <div class="ne-Box">
                                <div class="shelter"></div>
                                <div class="ne-con-box">
                                    <div class="pre-con-title">新建概算</div>
                                      <ul class="ne-con">
                                          <li style="margin-top:10px;"><label>业&nbsp;&nbsp;务&nbsp;&nbsp;费：</label><input class="in01" id="YW_money"/></li>
                                          <li style="margin-top:10px;"><label>工&nbsp;&nbsp;程&nbsp;&nbsp;费：</label><input class="in01" id="GH_money" /></li>
                                          <li style="margin-top:10px;"><label>材&nbsp;&nbsp;料&nbsp;&nbsp;费：</label><input class="in01" id="CL_money" /></li>
                                          <li style="margin-top:10px;"><label>财&nbsp;&nbsp;务&nbsp;&nbsp;费：</label><input class="in01" id="CY_money" /></li>
                                          <li style="margin-top:10px;"><label>维&nbsp;&nbsp;修&nbsp;&nbsp;费：</label><input class="in01"  id="WX_money"/></li>
                                          <li style="margin-top:10px;"><label>成本小计：</label><input class="in01" id="CB_money" /></li>
                                          <li style="margin-top:10px;"><label>项目毛利：</label><input class="in01" id="ML_money" /></li>
                                          <li style="margin-top:10px;"><label>所&nbsp;&nbsp;得&nbsp;&nbsp;税：</label><input class="in01" id="SD_money" /></li>
                                          <li style="margin-top:10px;"><label>净&nbsp;&nbsp;利&nbsp;&nbsp;润：</label><input class="in01" id="JL_money" /></li>
                                         
                                          <li style="margin-top:10px;padding-left:90px;"><input type="button" " value="确定" id="add_budget" class="b01"/><input type="button" value="取消" class="b02"/></li>
                                      </ul>       
                                </div>
                         </div>
                          <!-- 编辑概算-->
                          <div class="ne-Box-edit">
                                <div class="shelter"></div>
                                <div class="ne-con-box-edit">
                                    <div class="pre-con-title">编辑概算</div>
                                      <ul class="ne-con-edit">
                                          <li style="margin-top:10px;"><label id="BJ_name">业&nbsp;&nbsp;务&nbsp;&nbsp;费：</label><input class="in01" id="money"/></li>
                                                          
                                          <li style="margin-top:10px;padding-left:90px;"><input type="button" " value="确定" id="updata_OK" class="b01"/><input type="button" value="取消" class="b02"/></li>
                                      </ul>       
                                </div>
                         </div>
              
              
            </div>
            
 <input type="hidden" id="select_bud" value="<?php echo U('Admin/Project/select_pro_budget');?>"/>
 
 <input type="hidden" id="add_bud" value="<?php echo U('Admin/Project/add_pro_budget');?>"/>
 
 <input type="hidden" id="updata_bud" value="<?php echo U('Admin/Project/select_budget');?>"/>
 
 <input type="hidden" id="updata_ok" value="<?php echo U('Admin/Project/updata_pro_budget');?>"/>
 
 <input type="hidden" id="old_money" />
 
 <input type="hidden" id="data" value="<?php echo $data;?>"/>
            
            
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
 $('.news-estimate').click(function(){

      $('.ne-Box').show();
    });
      $('.ne-con .b02').click(function(){

      $('.ne-Box').hide();
    });
  $('.estimate-list button').click(function(){

      $('.ne-Box-edit').show();
    });
      $('.ne-con-edit .b02').click(function(){

      $('.ne-Box-edit').hide();
    });

//添加项目概算  add_budget
$('#add_budget').click(function(){
	
	 var url=$('#add_bud').val();
	 
	 //alert(url);
	 
	 var YW_money=$('#YW_money').val();  //业务费
	   
	 var GH_money=$('#GH_money').val();  //工程费
	    
	 var CL_money=$('#CL_money').val();  //材料费
	    	
	 var CY_money=$('#CY_money').val(); //财务费
	    	    
	 var WX_money=$('#WX_money').val(); //维修费
	    
	 var CB_money=$('#CB_money').val(); //成本小计
	 
    var ML_money=$('#ML_money').val(); //毛利
	    
	 var SD_money=$('#SD_money').val(); //所得税
	    
	 var JL_money=$('#JL_money').val(); //净利润
	 
	 	var info = "YW_money="+YW_money+"&GH_money="+GH_money+"&CL_money="
		+CL_money+"&CY_money="+CY_money+"&WX_money="+WX_money+"&CB_money="
		+CB_money+"&ML_money="+ML_money+"&SD_money="+SD_money+"&JL_money="+JL_money;
	 
	 //alert(info);
	 
	 	$.post(url,info,function(data){
	 		//alert(data);
	 		if(data==1){
	 			alert('新建成功');
	 			window.location.href=window.location.href;
	 		}else{
	 			alert('新建失败');
	 			$('.b02').click();
	 		}
	 	},"json");
	   
	 
});

 var da=$('#data').val();
 if(da==''){
 	$("#table_list").hide();
 	$("#shuoming").hide();
 }else{
 	$('#add_GS').hide();
 }
// //alert(da)

//修改预计费用
function up_bud(obj){

	var c_type=$(obj).attr('type');
	//alert(c_type);
	
	
	switch(c_type){
		case '001':$('#BJ_name').html('业&nbsp;&nbsp;务&nbsp;&nbsp;费：'); break;
		case '002':$('#BJ_name').html('工&nbsp;&nbsp;程&nbsp;&nbsp;费：'); break;
		case '003':$('#BJ_name').html('业&nbsp;&nbsp;务&nbsp;&nbsp;费：'); break;
		case '004':$('#BJ_name').html('材&nbsp;&nbsp;料&nbsp;&nbsp;费：'); break;
		case '005':$('#BJ_name').html('财&nbsp;&nbsp;务&nbsp;&nbsp;费：'); break;
		case '006':$('#BJ_name').html('成&nbsp;本&nbsp;小&nbsp;计&nbsp;：'); break;
		case '007':$('#BJ_name').html('项&nbsp;目&nbsp;毛&nbsp;利&nbsp;：'); break;
		case '008':$('#BJ_name').html('所&nbsp;&nbsp;得&nbsp;&nbsp;税：'); break;
		case '009':$('#BJ_name').html('净&nbsp;&nbsp;利&nbsp;&nbsp;润：'); break;
	}

	var url=$('#updata_bud').val();
	var info="c_type="+c_type;
	$.post(url,info,function(data){
		$('#money').val(data);
		$('#old_money').val(data);
	},'json');
	
	
	$('#updata_OK').click(function(){
		var old_money=$('#old_money').val();
		var url=$('#updata_ok').val();
		var f_money=$('#money').val();
		if(f_money==''){
			alert('修改项不能为空');
			exit;
		}
		if(f_money==old_money){
			alert('您的修改金额和原来相同，请重新填写');
			exit;
		}
		//alert(url);
		var info="c_type="+c_type+"&f_money="+f_money;
		//alert(info);
		
		$.post(url,info,function(data){
			if(data==1){
	 			alert('修改成功');
	 			window.location.href=window.location.href;
	 		}else{
	 			alert('修改失败');
	 			$('.b02').click();
	 		}
		},'json');
		
	});
	
}

</script>

</body>
</html>