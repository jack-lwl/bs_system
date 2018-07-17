//上传图片组件
function Upload(node, opt) {
    this.$node = $(node);
    this.opt = $.extend({
        url: '/bs_system/index.php/Admin/index/NewImage',
        uploadBtn: '.js-upload-input',
        progress: '.js-progress',
        fileSize: '5',
        msg: {
            100: '请上传图片',
            101: '读取文件失败',
            102: '文件过大'
        },
        fn: {
            initCb: function(){},
            startCb: function(){},
            errorCb: function() {},
            successCb: function() {}
        }
    }, opt || {});
    this.isHtml5 = window.File && window.FileReader && window.FileList && window.Blob && window.FormData ? true : false;
    this.init();
}


Upload.prototype = {
    init: function() {
        this.$uploadBtn = this.$node.find(this.opt.uploadBtn);
        this.$progress = this.$node.find(this.opt.progress);
        this.$uploaded = this.$progress.children();
        this.$uploadBtn.css('zIndex', 100);
        this.file = null;
        this.opt.fn.initCb && this.opt.fn.initCb(this.$node, this);
        this.bind();
    },
    bind: function() {
        this.$uploadBtn.on('change', $.proxy(this.handleFile, this));
        var $document = $(document);
        $document.on('dragenter dragleave dragover drop', function(e){e.preventDefault();});
        if(this.isHtml5){
            this.$node.on('drop', $.proxy(this.handleDrop, this));
        }
    },
    handleFile: function(e) {
        if(this.isHtml5){
            this.fileReader(this.$uploadBtn[0].files[0]);
        }else{
            this.handleFormIframeUpload();
        }
    },
    handleDrop: function(e){
        e.preventDefault();
        this.fileReader(e.originalEvent.dataTransfer.files[0]);
    },
    handleFormIframeUpload: function(){
        var self = this;
        var $form = this.$node.find('form');
        var $iframe = this.$node.find('iframe');
        var iframe = $iframe[0];
        self.opt.fn.startCb && self.opt.fn.startCb(self.$node);
        $form.submit();
        $iframe.on('load', function(){
            var el = (iframe.contentWindow || iframe.contentDocument.parentWindow).document.body;  
            while(el &&  el.nodeType !== 3){  
                el = el.firstChild;  
            }  
            var html = el.nodeValue;
            var data = JSON.parse(html);
            if(data.code == 0){
                self.handleLoad(null, data.msg);
                self.opt.fn.successCb && self.opt.fn.successCb(data, self.$node);
            }else{
                alert(self.opt.msg[101]);
            }
        });
    },
    fileReader: function(file){
        this.file = file;
        if (!/image\/\w+/.test(file.type)) {
            alert(this.opt.msg[100]);
            return false;
        }
        if(file.size > this.opt.fileSize * 1024 * 1024){
            alert(this.opt.msg[102]);
            return false;
        }
        var reader = new FileReader();
        this.reader = reader;
        reader.readAsDataURL(file);
        reader.onerror = function() {
            alert(this.opt.msg[101]);
            return false;
        };
        reader.onprogress = $.proxy(this.handleProgress, this);
        reader.onload = $.proxy(this.handleLoad, this);
        reader.onloadend = $.proxy(this.handleLoadEnd, this);
        this.uploadFile();
    },
    handleProgress: function(e) {
        if (e.lengthComputable) {
            this.$progress.show();
            var percent = Math.ceil((e.loaded / e.total) * 100);
            this.$uploaded.css('width', percent + '%');
            if (percent >= 100) {
                this.$progress.fadeOut();
            }
        }
    },
    handleLoad: function(e, url) {
        this.$node.children('img').remove();
        var img = new Image();
        img.src = url?url:this.reader.result;
        var $img = $(img);
        $img.css({
            width: this.$node.width(),
            height: this.$node.height(),
            position: 'absolute',
            top: 0,
            left: 0
        });
        this.$node.append($img);
    },
    handleLoadEnd: function(e){
        var percent = Math.ceil((e.loaded / e.total) * 100);
        this.$uploaded.css('width', percent + '%');
        if (percent >= 100) {
            this.$progress.fadeOut();
        }
    },
    uploadFile: function() {
        var self = this;
        var xhr = new XMLHttpRequest();
        if (xhr.upload) {
            self.opt.fn.startCb && self.opt.fn.startCb(self.$node);
            xhr.onreadystatechange = function() {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        var data = JSON.parse(this.responseText);

                        self.opt.fn.successCb && self.opt.fn.successCb(data, self.$node);
                    } else {
                        alert('系统异常');
                        self.opt.fn.errorCb && self.opt.fn.errorCb(data);
                    }
                }
            };
            xhr.open("POST", this.opt.url, true);
            var formData = new FormData();
            formData.append('imgFile', this.file);
            xhr.send(formData);
        }
    }
};

//分行详情
(function(){
	//员工详情
	var tmpl_detail = ''+
		'<table class="table table-hover pull-left table-user"'+
		'	<tr><th>姓名：</th><td>{{= it.name}}</td></tr>'+
		'	<tr><th>性别：</th><td>{{= it.sex}}</td></tr>'+
		'	<tr><th>职位：</th><td>{{= it.position}}</td></tr>'+
		'	<tr><th>级别：</th><td>{{= it.level}}</td></tr>'+
		'	<tr><th>考试次数：</th><td>{{= it.num}}次</td></tr>'+
		'	<tr><th>用户状态：</th><td>{{= it.type}}</td></tr>'+
		'</table>'+
		'<table class="table table-hover table-bordered pull-right table-exam">'+
		'	<thead>'+
		'		<tr><th>考试时间</th><th>持续时间</th><th>考试级别</th><th>考试分数</th></tr>'+
		'	</thead>'+
		'	<tbody>'+
		'	{{~ it.list:item}}<tr><td>{{= item.time}}</td><td>{{= item.persist}}</td><td>{{= item.level}}级</td><td>{{= item.score}}分</td></tr>{{~}}'+
		'	</tbody>'+
		'</table>';
	var $modal = $('#modal-detail');
	$('.table-branchdetail').delegate('.js-detail', 'click', function(evt){
		
		var user_id=$(this).attr('user_id');
		
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
                $modal.find('.modal-body').html(tmpl);
        		$modal.modal({});
            },
            error: function(obj){
                alert(obj&&obj.msg||'系统异常');
            }
        });
        //接口返回数据，暂时写死
        /*var data = {
        	name: '李四',
        	sex: '男',
        	position: '1',
        	level: '3',
        	num: 3,
        	type: '正常',
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

        };*/
        
	    
	});
	/*$modal.on('show.bs.modal', function (e) {
		console.log('enter show');
		
	});*/

	//重置分行密码
	var $resetpass = $('.js-resetpass');
	var $modal_resetpass = $('#modal-resetpass');
	$resetpass.on('click', function(evt){
		$modal_resetpass.modal({});
	});
	//确定重置
	$modal_resetpass.delegate('.js-save', 'click', function(){
		var url=$('#Resetpass').val();
		$.ajax({
            type: 'GET',
            url: url,
            
            dataType: 'json',
            success: function(obj){
            	if(obj==1){
            		alert('重置密码成功');
            		location=location;
            	}else if(obj==3){
            		alert('重置密码成功');
            		location=location;
            	}else{
            		alert('重置密码失败');
            	}
            },
            error: function(obj){
                alert(obj&&obj.msg||'系统异常');
            }
        });
	});

	//开通/关闭
	var $toggle = $('.js-toggle');
	var $modal_toggle = $('#modal-toggle');
	$toggle.on('click', function(evt){
		$modal_toggle.modal({});
	});
	//关闭
	$modal_toggle.delegate('.js-close', 'click', function(evt){
		
		var url=$('#openorshut').val();
		
		var data = $modal_toggle.find('form').serialize();
		
		if($('#remark').val()==''){
			alert('操作理由不能为空');
			exit;
		}
		
		console.log('data:  ', data)
		$.ajax({
            type: 'POST',
            url: url,
            data: data,
            dataType: 'json',
            success: function(obj){
            	//alert(obj);
            	//exit;
            	if(obj==1){
            		alert('关闭成功');
            		location.reload();
            	}else if(obj==3){
            		
            		alert('账号错误');
            		
            	}else{
            		alert('关闭失败');
            	}
                
            },
            error: function(obj){
                alert(obj&&obj.msg||'系统异常');
            }
        });
	});
	//开通
	$modal_toggle.delegate('.js-open', 'click', function(evt){
		
		var url=$('#openorshut').val();
		
		if($('#remark').val()==''){
			alert('操作理由不能为空');
			exit;
		}
		
		var data = $modal_toggle.find('form').serialize();
		console.log('data:  ', data)
		$.ajax({
            type: 'POST',
            url: url,
            data: data,
            dataType: 'json',
            success: function(obj){
            	//alert(obj);
            	//exit;
            	if(obj==1){
            		alert('开通成功');
            		location.reload();
            	}else if(obj==3){
            		
            		alert('账号错误');
            		
            	}else{
            		alert('开通失败');
            	}
                
            },
            error: function(obj){
                alert(obj&&obj.msg||'系统异常');
            }
        });
	});
	//清空
	$modal_toggle.delegate('.js-clear', 'click', function(evt){
		$modal_toggle.find('[name="account"]').val('');
	});
})();






//考试题库
(function(){
	
	if(document.body.id == 'page-examlist'){
		var editor;
		var data;
		var vm;
		//点击章节类表，异步获取各章节内容
		$('.js-chapter-list').delegate('a', 'click', function(evt){
			
			$('.js-chapter-list a').attr('class','');
						
			$(this).attr('class','active');
			
			var id = $(evt.currentTarget).data('id');
			
			$('#set_id').val(id);
			
			console.log('id:  ', id);
			
			getChapter(id);
			
		});
		
		function getChapter(id){
			//通过接口获取各章内容
			
			var url=$('#set_ques_list').val();
			
			$.ajax({
	            type: 'POST',
	            url: url,
	            data: {
	                id: id
	            },
	            dataType: 'json',
	            success: function(obj){
	                data = obj;
	                
	                data.compare_single = data.num_single < data.single.num;
	    			data.compare_multi = data.num_multi < data.multi.num;
	    			data.compare_judge = data.num_judge < data.judge.num;
	    			console.log('22shuchu data.compare_single:  ', data.compare_single);
	    			vm.$data = data;
	            },
	            error: function(obj){
	                alert(obj&&obj.msg||'系统异常');
	            }
	            
	        });
	        //从接口获取的数据结构格式
	       /* data = {
				chapter: '第一章',//章节
				score_excellent: 90,//优秀分数
				score_normal: 80,//普通分数
				score_pass: 60,//通过分数
				time_interval: 24,//考试间隔，小时单位
				single: {//单选
					num: 20,//个数
					score: 2//分数
				},
				multi: {//多选
					num: 10,//个数
					score: 2//分数
				},
				judge: {//判断
					num: 10,//个数
					score: 1//分数
				},
				num_single: 1,//现在实际创建的单选题数目
				num_multi: 1,//现在实际创建的多选题数目
				num_judge: 20,//现在实际创建的判断题数目
				total: 100,
				word_excellent: 'word_excellent',
				word_normal: 'word_normal',
				word_pass: 'word_pass',
				word_notpass: 'word_notpass'
				/*list: [
					{
						id: 1,
						type: '单选',
						cont: 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
					},
					{
						id: 2,
						type: '单选',
						cont: 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
					}
				]
			};*/
			
			
			
		}
		//数据默认值
		var data = {
			chapter: '',//章节
			score_excellent: 0,//优秀分数
			score_normal: 0,//普通分数
			score_pass: 0,//通过分数
			time_interval: 0,//考试间隔，小时单位
			time_kaoshi: 0,//考试时间，小时单位
			single: {//单选
				num: 0,//个数
				score: 0//分数
			},
			multi: {//多选
				num: 0,//个数
				score: 0//分数
			},
			judge: {//判断
				num: 0,//个数
				score: 0//分数
			},
			num_single: 1,//现在实际创建的单选题数目
			num_multi: 1,//现在实际创建的多选题数目
			num_judge: 1,//现在实际创建的判断题数目
			total: 0,
			word_excellent: '',
			word_normal: '',
			word_pass: '',
			word_notpass: '',
			list: [
				
			]
		};
		data.compare_single = data.num_single < data.single.num;
		data.compare_multi = data.num_multi < data.multi.num;
		data.compare_judge = data.num_judge < data.judge.num;
		console.log('11shuchu data.compare_single:  ', data.compare_single);
		vm = new Vue({
			el: '#page-examlist',
			data: data
		});
		getChapter(1);

		
		//设置-保存
		var $setting = $('.js-setting');
		var $modal = $('#modal-setting');
		$setting.on('click', function(){
			
			$modal.modal({});
		});

		$('#set_res').click(function(){

			$('#set_ok').submit();
		});
		
		
		//新建考题
		var $newexam = $('.js-newexam');
		var $modal_newexam = $('#modal-newexam');
		$newexam.on('click', function(){
			
			$('#old_XZ').val('');
			$('#old_PD').val('');
			
			$modal_newexam.data('type', 'new');
			$modal_newexam.modal({});
		});
		//弹层show时，初始化editor
		$modal_newexam.on('shown.bs.modal', function (e) {
			console.log('enter show');
			setTimeout(function(){
				editor = KindEditor.create('textarea[name="examcont"]', {
		            loadStyleMode: false,
		            showMask: false,
		            width: 570,
		            height: 100,
		            minWidth: 500,
		            uploadJson : '/bs_system/index.php/Admin/index/NewImage',
		            allowImageRemote: false,
		            items: ['fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline', 'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist', 'insertunorderedlist', '|', 'image', 'link']
		        });
			}, 200);
		});
		//弹层hide时，将各个元素重置
		$modal_newexam.on('hide.bs.modal', function (e) {
			console.log('enter hide~~');
			KindEditor.remove('textarea[name="examcont"]');
        	editor = null;
        	$modal_newexam.find('textarea').val('');
        	$modal_newexam.find('.js-ansbox').html('');
        	$modal_newexam.find('[name="type"]').prop('checked', false);
			
		});
		var choice_num = 0;
		var choice = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
		//新增答案
		$modal_newexam.delegate('.js-add', 'click', function(){
			var $ansbox = $modal_newexam.find('.js-ansbox');
			var type = $modal_newexam.find('[name="type"]:checked').val();
			if(!type){
				alert('请选择考题类型！');
			}
			var tmpl_judge = ''+
				'<p><label><input type="radio" name="judge" value="1" /><span class="js-cont">对</span></label></p>'+
				'<p><label><input type="radio" name="judge" value="0" /><span class="js-cont">错</span></label></p>';
			var tmpl_choice = ''+
				'<p><label><input type="checkbox" name="" value="0" /><span class="js-choice">{{= it.choice }}</span>：<input type="text" name="" class="form-control" /><a class="del js-del" href="javascript:;">&times;</span></a></p>';
			if(type == 2){
				$ansbox.html(tmpl_judge);
			}else if(type == 1){
				if(choice_num >= choice.length){
					alert('答案数已经达到最大值！');
					return;
				}
				var $p = $(doT.template(tmpl_choice).apply(null, [{choice: choice[choice_num]}]));
				$ansbox.append($p);
				choice_num++;
			}
		});
		
		
	
		//切换题目类型
		$modal_newexam.delegate('[name="type"]', 'change', function(){
			
			//alert($(this).val());
			
			var old_PD=$('#old_PD').val();
			var old_XZ=$('#old_XZ').val();
			//exit;
			if($(this).val()==1){
				$modal_newexam.find('.js-ansbox').html(old_XZ);
			}else{
				$modal_newexam.find('.js-ansbox').html(old_PD);
			}
			
			
			
			//$modal_newexam.find('.js-ansbox').html(old);
			choice_num = 0;
		});
		
		//删除新增的答案
		$modal_newexam.delegate('.js-del', 'click', function(evt){
			var $target = $(evt.currentTarget);
			$target.parents('p').remove();
			var $ansbox = $modal_newexam.find('.js-ansbox');
			$ansbox.find('p').each(function(index, item){
				$(item).find('.js-choice').html(choice[index]);
			});
			choice_num = $ansbox.find('p').size();
		});
		//保存
		$modal_newexam.delegate('.js-save', 'click', function(evt){
			console.log('click save~~');
			var modal_type = $modal_newexam.data('type');//new/detail
			console.log('shuchu type:  ', type);
			var $ansbox = $modal_newexam.find('.js-ansbox');
			var html = editor.html();
	        var html_filter = html.replace(/(\s)*([\r\n])(\s)*/g, '').replace(/\"/g,"\"");//上行内容参数
	        var text = $('<div>' + editor.html() + '</div>').text();
            var content_filter = $.trim(text.replace(/[\r\n\s]/g, '').replace(/\"/g,"\""));//上行内容参数，已经去掉样式，用于列表中显示
	        var type = $modal_newexam.find('[name="type"]:checked').val();
	        var list = [];
	        $ansbox.find('p').each(function(index, item){
	        	var $item = $(item);
	        	if(type == 1){
	        		list.push({
	        			choice: $item.find('.js-choice').html(),
	        			cont: $item.find('[type="text"]').val(),
	        			checked: ($item.find('[type="checkbox"]:checked').val()?1:0) 
	        		});
	        	}else if(type == 2){
	        		list.push({
	        			cont: $item.find('.js-cont').html(),
	        			checked: ($item.find('[type="radio"]:checked').val()?1:0) 
	        		});
	        	}
	        });
	
	        var set_id=$('#set_id').val();
	        var old_id=$('#old_id').val();
			//保存数据结构
			var data = {
				id: set_id,	
				old_id:old_id,
				html_cont: html_filter,
				filter_cont: content_filter,
				type: type,
				list: list
			};
			console.log('shuchu data:  ', data);
			
			console.log('modal_type:  ', modal_type);
			
			
			/*//保存处理
			if(modal_type == 'new'){
				vm.$data.list.push({
					id: 1111,//接口返回，暂时写死
					type: '单选',//接口返回，暂时写死
					cont: content_filter//接口返回，暂时写死
				});
			}else if(modal_type == 'detail'){
				var $tr = $modal_newexam.data('node');
				var $td = $tr.find('td');
				$td.eq(1).html('多选');//接口返回，暂时写死
				$td.eq(2).html(content_filter);//接口返回，暂时写死
			}*/
			
			
			 if(modal_type == 'new'){
				 var url=$('#add_question').val();
					
			 }else if(modal_type == 'detail'){
				 var url=$('#up_question').val();
			 }
         	
			
		$.ajax({
	            type: 'POST',
	            url: url,
	            data: data,
	            dataType: 'json',
	            success: function(obj){
	            	//保存时候分两种情况，详情：重写之前的那条数据，新增：追加数据
	                //data = obj.data;
	                
	               
	            	if(obj){
	            		alert('保存成功');
	            	
	            		getChapter(set_id);
	            		
	            		//$('.js-chapter-list').find("a[data-id='3']").click();
	            		
	            		//location=location;
	            	}else{
	            		alert('保存失败');
	            	}
	            	
	            },
	            error: function(obj){
	                alert(obj&&obj.msg||'系统异常');
	            }
	        });
		});

		
		
		//详情
		$('.js-examlist').delegate('.js-detail', 'click', function(evt){
			
			$('#old_XZ').val('');
			$('#old_PD').val('');
			
			
			var $tr = $(evt.currentTarget).parents('tr');
			var id = $tr.find('td:eq(0)').html();
			$('#old_id').val(id);
			//var id = $(this).attr('que_id');
			
			console.log('id:  ', id);
			
			var $ansbox = $modal_newexam.find('.js-ansbox');
			var tmpl_choice = ''+
				'{{~ it.list:item}}'+
				'<p><label><input type="checkbox" name="" value="0" {{? item.checked }}checked{{?}}/><span class="js-choice">{{= item.choice }}</span>：<input type="text" name="" class="form-control" value="{{= item.cont}}"/><a class="del js-del" href="javascript:;">&times;</span></a></p>'+
				'{{~}}';
			var tmpl_judge = ''+
				'{{~ it.list:item}}'+
				'<p><label><input type="radio" name="judge" {{? item.checked }}value="1" checked{{?}}/><span class="js-cont">{{= item.cont}}</span></label></p>'+
				'{{~}}';
			
			/*//接口返回，目前写死
			var data = {
				type: 1,
				cont: '2222',
				list: [
					{
						choice: 'A',
						cont: 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
						checked: false
					},
					{
						choice: 'B',
						cont: 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
						checked: true
					},
					{
						choice: 'C',
						cont: 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
						checked: true
					},
					{
						choice: 'D',
						cont: 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
						checked: false
					}
				]
			};
			$modal_newexam.find('textarea').val(data.cont);
			$modal_newexam.find('[name="type"][value="'+data.type+'"]').prop('checked', true);
			$ansbox.html(doT.template(data.type == 1?tmpl_choice:tmpl_judge).apply(null, [data]));
			if(data.type == 1){
				choice_num = $ansbox.find('p').size();
			}
			setTimeout(function(){
				$modal_newexam.data('type', 'detail');
				$modal_newexam.data('node', $tr);
				$modal_newexam.modal({});
			}, 200);*/
			
			var url=$('#select_que_detial').val();
			$.ajax({
	            type: 'POST',
	            url: url,
	            data: {
	                id: id
	            },
	            dataType: 'json',
	            success: function(obj){
	                data=obj;
	                
	                $modal_newexam.find('textarea').val(data.cont);
	    			$modal_newexam.find('[name="type"][value="'+data.type+'"]').prop('checked', true);
	    			$ansbox.html(doT.template(data.type == 1?tmpl_choice:tmpl_judge).apply(null, [data]));
	    			if(data.type == 1){
	    				choice_num = $ansbox.find('p').size();
	    			}
	    			setTimeout(function(){
	    				$modal_newexam.data('type', 'detail');
	    				$modal_newexam.data('node', $tr);
	    				$modal_newexam.modal({});
	    			}, 200);
	    			
	    			if(data.type == 1){
	    				$('#old_XZ').val($modal_newexam.find('.js-ansbox').html());
	    			}else{
	    				$('#old_PD').val($modal_newexam.find('.js-ansbox').html());
	    			}
	    			
	    			//alert($modal_newexam.find('.js-ansbox').html());
	    			
	            },
	            error: function(obj){
	                alert(obj&&obj.msg||'系统异常');
	            }
	        });
		});
		
		
		//删除
		$('.js-examlist').delegate('.js-delete', 'click', function(evt) {
			var $tr = $(evt.currentTarget).parents('tr');
			var id = $tr.find('td:eq(0)').html();
			$tr.fadeOut();
            setTimeout(function(){
                $tr.remove();
            }, 500);
            var set_id=$('#set_id').val();
            var url=$('#del_question').val();
			$.ajax({
                type: 'POST',
                url: url,
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(obj){
                	
                	if(obj){
                		alert('删除成功');
                		getChapter(set_id);
                		//location=location;
                	}else{
                		alert('删除成功');
                	}
                	
                    /*if(obj.status){
                        $tr.fadeOut();
			            setTimeout(function(){
			                $tr.remove();
			            }, 500);
                    }*/
                    
                    
                },
                error: function(obj){
                    alert(obj&&obj.msg||'系统异常');
                }
            });
		});
	}
})();

//App 图片设置
(function(){
	var $upload = $('.js-upload');
	if(!$upload.size()) return;
	var uploadObj = [];
    $.each($upload, function(index, item){
        uploadObj.push(new Upload($(item)));
    });
})();