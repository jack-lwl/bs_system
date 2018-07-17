(function(){
	//修改密码
	var $modifypass = $('.js-modifypass');
	var $modal_modifypass = $('#modal-modifypass');
	$modifypass.on('click', function(){
		$modal_modifypass.modal({});
	});

	//分行员工详情
	var tmpl_detail = ''+
		'<table class="table table-hover pull-left table-user">'+
		'	<tr><th>姓名：</th><td>{{= it.name}}</td><td></td></tr>'+
		'	<tr><th>性别：</th><td>{{= it.sex}}</td><td></td></tr>'+
		'	<tr><th>职位：</th><td>{{= it.position}}</td><td></td></tr>'+
		'	<tr><th>级别：</th><td>{{= it.level}}</td><td></td></tr>'+
		'	<tr><th>考试次数：</th><td>{{= it.num}}次</td><td></td></tr>'+
		'	<tr><th>用户状态：</th><td colspan="2">{{= it.type}}'+
		'	{{? it.statusnum == 1 || it.statusnum == 4}}'+
		'	<button type="button" class="btn btn-primary btn-pass js-handle" data-type="pass" data-url="/bs_system/index.php/Admin/index/pass">通过</button><button type="button" class="btn btn-danger js-handle" data-type="reject" data-url="/bs_system/index.php/Admin/index/reject">拒绝</button></td></tr>'+
		'	{{?? it.statusnum == 2}}'+
		'	<button type="button" class="btn btn-primary btn-pass js-handle" data-type="freeze" data-url="/bs_system/index.php/Admin/index/freeze">冻结</button>'+
		'	{{?? it.statusnum == 3}}'+
		'	<button type="button" class="btn btn-primary btn-pass js-handle" data-type="unfreeze" data-url="/bs_system/index.php/Admin/index/unfreeze">解冻</button>'+
		'	{{?}}'+
		'	<tr><th>重置注册密码：</th><td><button type="button" class="btn btn-primary js-handle" data-type="resetpassword" data-url="/bs_system/index.php/Admin/index/resetpassword">确定</button></td><td></td></tr>'+
		'	<tr><th>调动工作：</th>'+
		'		<td>'+
		'			<select class="form-control js-branch-shangji" onchange="get_JG(this)">'+
		'			  {{~ it.branchlist:item}}<option value="{{= item.name}}" {{? it.branch == item.name }}selected{{?}}>{{= item.name}}</option>{{~}}'+
		'			</select>'+

		'			<select class="form-control js-branch">'+
		'			  {{~ it.jg_list:item}}<option value="{{= item.id}}" {{? it.JG == item.me_name }}selected{{?}}>{{= item.me_name}}</option>{{~}}'+
		'			</select>'+
		'		</td>'+
		'		<td><button type="button" class="btn btn-primary js-handle" data-url="/bs_system/index.php/Admin/index/surebranch" data-type="surebranch">确定</button></td></tr>'+
		'</table>'+
		'<table class="table table-hover table-bordered pull-right table-exam">'+
		'	<thead>'+
		'		<tr><th>考试时间</th><th>持续时间</th><th>考试级别</th><th>考试分数</th></tr>'+
		'	</thead>'+
		'	{{~ it.list:item}}<tr><td>{{= item.time}}</td><td>{{= item.persist}}</td><td>{{= item.level}}级</td><td>{{= item.score}}分</td></tr>{{~}}'+
		'</table>';
	

	
	var $modal_bdetail = $('#modal-bdetail');
	$('.table-branchmain').delegate('.js-detail', 'click', function(evt){
		
		var user_id=$(this).attr('user_id');
		
		$('#user').val(user_id);
		
		var url=$('#user_detial').val();
		
		var $tr = $(evt.currentTarget).parents('tr');
		var id = $tr.data('id');
		console.log('id:  ', id);
		$.ajax({
            type: 'POST',
            url: url,
            data: {
                id: user_id
            },
            dataType: 'json',
            success: function(obj){
                var data=obj;
                var tmpl = doT.template(tmpl_detail).apply(null, [data]);
        	    $modal_bdetail.find('.modal-body').html(tmpl);
        		$modal_bdetail.modal({});
            },
            error: function(obj){
                alert(obj&&obj.msg||'系统异常');
            }
        });
        //接口返回数据，暂时写死
        /*var data = {
        	name: '张三',
        	sex: '男',
        	position: '1',
        	level: '3',
        	num: 3,
        	type: '注册',//状态的文字参数
        	statusnum: '1',//状态对应的数字参数  1：注册；2：正常；3：冻结；4：调动ing；
        	branch: 2,//员工目前所在分行的id
        	branchlist: [//分行列表
        		{
        			id: '1',
        			name: '1XXXX分行'
        		},{
        			id: '2',
        			name: '2XXXX分行'
        		}
        	],
        	list: [
        		{
        			time: '2016年7月20日9:00',
        			persist: '56分钟',
        			level: '1',
        			score: '90'
        		},
        		{
        			time: '2016年7月20日9:00',
        			persist: '56分钟',
        			level: '1',
        			score: '90'
        		}
        	]

        };
        var tmpl = doT.template(tmpl_detail).apply(null, [data]);
	    $modal_bdetail.find('.modal-body').html(tmpl);
		$modal_bdetail.modal({});*/
	});
	//员工详情中各种按钮统一的class使用js-handle代理，通过data-url区分请求地址
	$modal_bdetail.delegate('.js-handle', 'click', function(evt){
		var $target = $(evt.currentTarget);
		var url = $target.data('url');
		var type = $target.data('type');
	
		var id=$('#user').val()
	
		var data = {};
		
		//修改分行
		if(type == 'surebranch'){
			data.branch = $modal_bdetail.find('.js-branch').val();
			
			
		}
		
		
		$.ajax({
			
            type: 'POST',
            url: url,
            data: {
                id: id,branch:data.branch
            },
            dataType: 'json',
            success: function(obj){
            	
       
                if(obj){
                	alert('设置成功');
                	location=location;
                }else{
                	alert('请改变后再点“确定”哦！');
                }
            	
                
            },
            error: function(obj){
                alert(obj&&obj.msg||'系统异常');
            }
        });
	});
})();