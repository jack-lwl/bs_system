<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="/Qh_tpc/public/admin/css/table.css" rel="stylesheet" type="text/css"/> 
    <link href="/Qh_tpc/public/admin/css/jquery.bootgrid.min.css" rel="stylesheet" type="text/css"/> 
     <link href="/Qh_tpc/public/admin/css/jquery.common.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<table id="grid-data" data-url="<?php echo U('Admin/Public/test');?>" class="table table-condensed table-hover table-striped">
            <thead>
                <tr>
                 <th data-column-id="id" data-type="numeric" data-align="left" data-width="56">编号</th>
                 <th data-column-id="repair_time" data-width="130">报修时间</th>
                 <th data-column-id="update_time" data-width="130">更新时间</th>
                 <th data-column-id="status"  data-width="100">任务状态</th>
                 <th data-column-id="important" data-align="left"  >紧急&重要</th>
                 <th data-column-id="contacter">联系人</th>
                 <th data-column-id="mobile">联系电话</th>
                 <th data-column-id="leader">维修队长</th>               
                 <th data-column-id="commands" data-formatter="commands" data-sortable="false">操作</th>
                </tr>
                
            </thead>
        </table>
<script src="/Qh_tpc/public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/Qh_tpc/public/admin/js/bootstrap.min.js"></script>
<script src="/Qh_tpc/public/admin/js/jquery.bootgrid.js"></script>
<script src="/Qh_tpc/public/admin/js/jquery.bootgrid.fa.min.js"></script>
<script src="/Qh_tpc/public/admin/js/common.js"></script>
<script src="/Qh_tpc/public/admin/js/taskMg.js"></script>
</body>
</html>