/**
 *分页 
 */


var model = {  
        pageIndex: 1,      //当前页  
        pageSize: 10,      //每页列表的行数  
        filterCounts: 1,   //筛选后的总行数  
        Search:'',  //搜索
    };  

var tableLength = $("#table_tr_name").children().length;
var TableNameAry = [];
for(var i=0;i<tableLength;i++){
	TableNameAry.push($("#table_tr_name").children().eq(i).attr('name'));	
}   


//搜索触发
$('#search_but').click(function(){
	model.Search=$('#search').val();  //搜索字符串
	model.pageIndex=1;
	page();
});


function page(){
	
	
	var searchPhrase=model.Search;  //搜索字符串
	
	var current=model.pageIndex;  //当前页码

	if(current==null){
		current=1;
	}
	var rowCount=10;  //每页显示条数

	var url_data=$('#table_list').attr('data-url');  //获取数据url
	
	$.ajax({  
	    url:url_data,  
	    type:"post",  
	    async:true,  
	    data:{'searchPhrase':searchPhrase,'current':current,'rowCount':rowCount},  
	    dataType:"json", 
	    error:function(){alert("服务加载出错");},  
	    success:function(data)  
	    {	

	    	model.filterCounts=data['total'];
	    	if (model.filterCounts == 0) {  
                model.filterCounts = 1;  
	    	}  
	    //	model.filterCounts=100;
	    	var html_add = '';
	    	
	    	var html_td = "";
	 
	    	var type='' //每行带显示数据
	    	
	    	if(data['rows']!=null){
	    		for(var i=0;i<data['rows'].length;i++){  //循环数据----》行
	      	    	
	    			for(var j=0;j<TableNameAry.length;j++){  //循环每一行要显示的数据类型----》列
	    	    		
	    	    		type=TableNameAry[j];
	    	    		
	    	    		html_td+='<td>'+data['rows'][i][type]+'</td>';
	    	    	
	    			}
	    			
	    			if(i%2){
	    				//加上<tr>形成一行
	            		html_td='<tr>'+html_td+'</tr>';
	    			}else{
	    				//加上<tr>形成一行
	            		html_td='<tr>'+html_td+'</tr>';
	    			}
	    				        		
	        		html_add+=html_td;
	        			        		
	        		html_td='';
	        	}

	    	}
	    		
	    	$("#tblData tr").remove();   //清空列表  
	    	
	    	//将循环后的html放到表头下面
	    	$('#tblData').append(html_add); 
	    	
	    

	    	paginator();
	  }
	    
	});	
	
	//paginator(1, 10, 100);
	
//	alert(model.filterCounts);
	//paginator(model.pageIndex, model.pageSize, model.filterCounts);
}








