<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>透明化</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link href="/Qh_tpc/public/admin/css/css.css" rel="stylesheet" type="text/css"/>	
    <link href="/Qh_tpc/public/admin/css/table.css" rel="stylesheet" type="text/css"/>  
    <link rel="stylesheet" type="text/css" href="/Qh_tpc/public/admin/css/history.css"> 
    <link rel="stylesheet" type="text/css" href="/Qh_tpc/public/admin/css/bootstrap.min3.css" />
    <link rel="stylesheet" type="text/css" href="/Qh_tpc/public/admin/css/style2.css" />  
 
    
</head>
<body >

<!-- 项目施工模块内容 -->
            <div class="The-progress-of-box">
                <div class="d-c-title">
                    <div class="d-c-square"></div>
                    <p>项目进度</p>
                </div>
               
              <div class="c-tab">
                        <div style="position:relative;" class="2-2-box">
                            <div style="padding-left:20px;height:60px;" class="j-b">
                                <a class="a01" href="The_progress_of3.html">进度概况</a><a class="a02 dq" href="The_progress_of2.html">编辑进度</a>
                            </div>

                            
                           
                            <dir style="display:block;position:relative;padding:0 30px;color:#666;min-width:1050px;">
                                <div style="height:520px;overflow:auto;">
                                       <div id="just-a-slider" class="dragdealer">
                                        <div class="handle red-bar">
                                          <span class="value"></span>%
                                        </div>
                                      </div>
                                    
                                    
                                </div>
                            </dir>
                            
                           
                           
                        </div>
                   
                          
                     
                </div>
                  
              
            </div>
            

<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/Qh_tpc/public/admin/js/jquery-1.10.2.js"></script>
<script src="/Qh_tpc/public/admin/js/dragdealer.js"></script>
<script src="/Qh_tpc/public/admin/js/demos.js"></script>

<script type="text/javascript">

 

<!-- 树结构 -->

$(function(){
    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
    $('.tree li.parent_li > span').on('click', function (e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).attr('title', 'Expand this branch').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
        } else {
            children.show('fast');
            $(this).attr('title', 'Collapse this branch').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
        }
        e.stopPropagation();
    });
});
</script>
</body>
</html>