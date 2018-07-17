
    
    function paginator() {  
    
    totalCount = 5;
    $.jqPaginator('#pagination', {
       // totalPages: parseInt($("#countindex").val()),
       // visiblePages: parseInt($("#visiblePages").val()),
       // currentPage: 1,
    	totalCounts: model.filterCounts,  //总行数  
        pageSize: model.pageSize,         //每页行数  
        visiblePages: 10,                 //可见页数  
        currentPage: model.pageIndex,     //当前页  
        
        // first: '<li class="first"><a href="javascript:;"><<</a></li>',
        prev: '<li class="prev"><a href="javascript:;"><i class="arrow arrow2"></i>«</a></li>',
        next: '<li class="next"><a href="javascript:;">»<i class="arrow arrow3"></i></a></li>',
       // last: '<li class="last"><a href="javascript:;">>></a></li>',
        page: '<li class="page"><a href="javascript:;">{{page}}</a></li>',
        onPageChange: function (num, type) {
            if (type == "change") {
                //exeData(num, type);
                //alert(num);
                model.pageIndex = num;    //点击改变页码时，同步model中的页码  
                page(); 
            }
        }
    });
    
    }

 
