/**
 * 
 */


//学习章节
(function(){
	
	get_study_detial('1.1.1');
	
	
	var $studylist = $('.main-studylist');
	var $contTxt = $studylist.find('.js-cont-txt');
	
	//alert($contTxt);
	
	var $contEditor = $studylist.find('.js-cont-editor');
	var textarea = $contEditor.find('textarea');
	var $btnEdit = $('.js-edit');
	var $btnSave = $('.js-save');
	var cont = '';
	var editor;
	var id;
	
	
	$studylist.delegate('.list-two a', 'click', function(evt){
		
		$('.list-two a').attr('class','');
		
		$(this).attr('class','active');
		
		var $target = $(evt.currentTarget);
		id = $target.data('id');
		
		$('#z_id').val(id);
		
		
		console.log('shuchu id:  ', id);
		//cont = 'id:  ' + id;
		
		//$contTxt.html(cont);
		get_study_detial(id);
		
	});
	
	function get_study_detial(id){
		var url=$('#select_content').val();
		$.ajax({
            type: 'POST',
            url: url,
            data: {
                id: id
            },
            dataType: 'json',
            success: function(obj){
            	$contTxt.html(obj);
            },
            error: function(obj){
                alert(obj&&obj.msg||'系统异常');
            }
        });
	}
	
	
	
	$studylist.delegate('.js-edit', 'click', function(){
		$contEditor.show();
		textarea.html($contTxt.html());
		editor = KindEditor.create('textarea[name="content"]', {
            loadStyleMode: false,
            showMask: false,
            // minWidth: 600,
            minHeight: 400,
            uploadJson : '/bs_system/index.php/Admin/index/NewImage',
            allowImageRemote: false,
            items: ['fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline', 'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist', 'insertunorderedlist', '|', 'image', 'link']
        });
        $contTxt.hide();
        $btnEdit.hide();
        $btnSave.show();
	});
	
	
	$studylist.delegate('.js-save', 'click', function(){
		var html = editor.html();
		//上行内容参数
        var html_filter = html.replace(/(\s)*([\r\n])(\s)*/g, '').replace(/\"/g,"\"");
        
       // alert(html_filter);
        
        //exit;
        var id=$('#z_id').val();
        
       // alert(id);
       // exit;
        
        var url=$('#edit_content').val();
        
        $contEditor.hide();
        $contTxt.show();
        $btnEdit.show();
        $btnSave.hide();
        KindEditor.remove('textarea[name="content"]');
        editor = null;
		$.ajax({
            type: 'POST',
            url: url,
            data: {
                id: id,
                html_filter:html_filter
            },
            dataType: 'json',
            success: function(obj){
                if(obj){
                	alert('编辑成功');
                	
                	get_study_detial(id);
                	
                	//location=location;
                }else{
                	alert('编辑失败');
                }
            },
            error: function(obj){
                alert(obj&&obj.msg||'系统异常');
            }
        });
	});
})();
