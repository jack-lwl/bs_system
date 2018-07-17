<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends BaseController {
	
    
    
    
    //人员导出（全部）
    
    public function export_all_user(){
    
	    $U=M('db_exam.db_user a');
         
	   
        $info=$U->field('a.id,a.name as username,a.position,a.sex,a.level,b.name as bank_name,b.me_name')->join("LEFT JOIN db_exam.db_bank b on a.b_id = b.id")->select();
        
        foreach ($info as $k=>$v){
            $info[$k]['id']=$k+1;
            
            if($v['level']==0){
                $info[$k]['level']='无等级';
            }else if($v['level']==1){
                $info[$k]['level']='三级';
            }else if($v['level']==2){
                $info[$k]['level']='二级';
            }else if($v['level']==3){
                $info[$k]['level']='一级';
            }
            
           // $info[$k]['first_cj']=;
            
           // $info[$k]['second_cj']=;
            
           // $info[$k]['third_cj']=;
            
            
        }
        
       // print_r($info);
        
       // exit;
    
        exportUserExcel($info);
    }
    
    
    
    //人员导出（分行）
    
    public function export_fen_user(){
    
        $id=session('bank_fen_id');
        
        $U=M('db_exam.db_user a');
         
        $where['a.b_id']=array('EQ',$id);
        
        $info=$U->field('a.id,a.name as username,a.position,a.sex,a.level,b.name as bank_name,b.me_name')->join("LEFT JOIN db_exam.db_bank b on a.b_id = b.id")->where($where)->select();
        
        foreach ($info as $k=>$v){
            $info[$k]['id']=$k+1;
        
            if($v['level']==0){
                $info[$k]['level']='无等级';
            }else if($v['level']==1){
                $info[$k]['level']='三级';
            }else if($v['level']==2){
                $info[$k]['level']='二级';
            }else if($v['level']==3){
                $info[$k]['level']='一级';
            }
        
            // $info[$k]['first_cj']=;
        
            // $info[$k]['second_cj']=;
        
            // $info[$k]['third_cj']=;
        
        
        }
        
        //print_r($info);
        
       // exit;
        
        exportUserExcel($info);
    }
    
    
    
    
    //图片上传
    public function NewImage(){
    
        set_time_limit(0);
        if(IS_POST){
    
            if (! empty ( $_FILES ['imgFile'] ['name'] ))
            {
                $tmp_file = $_FILES ['imgFile'] ['tmp_name'];
                $file_types = explode ( ".", $_FILES ['imgFile'] ['name'] );
                $file_type = $file_types [count ( $file_types ) - 1];
                /*判别是不是.png文件，判别是不是jpg文件*/
                if (strtolower ( $file_type ) != "png" && strtolower ( $file_type ) != "jpg")
                {
                    $this->error ( '请选择png/jpg格式的图片上传' );
                }
                /*设置上传路径*/
                $savePath =  'Public/upfile/image/';
                /*以时间来命名上传的文件*/
                $str = date ( 'Ymdhis' );
                $file_name = $str . "." . $file_type;
    
                /*是否上传成功*/
                if (move_uploaded_file ( $tmp_file, $savePath . $file_name ))
                {
                    $data['error']=0;
                    $data['url']='/bs_system/'.$savePath . $file_name;
    
                    $this->ajaxReturn($data);
    
                    // $this->success('成功');
                }else{
                    var_dump('上传失败');
                }
                 
    
            }
        }
         
    
    }
    
    
    
 
    
    
    //app e学习图片上传
    public function Image_estudy(){
        
       // print_r($_FILES);
       // exit;
        
        set_time_limit(0);
        
        $key=0;
        
        $U=M('db_exam.db_app_setinfo');
        
        if($_FILES['study-file-1']['error']==0){
            
            if (! empty ( $_FILES['study-file-1']['name'] ))
            {
                $tmp_file = $_FILES['study-file-1']['tmp_name'];
                $file_types = explode ( ".", $_FILES['study-file-1']['name'] );
                $file_type = $file_types [count ( $file_types ) - 1];
                /*判别是不是.png文件，判别是不是jpg文件*/
                if (strtolower ( $file_type ) != "png" && strtolower ( $file_type ) != "jpg")
                {
                    $this->error ( '请选择png/jpg格式的图片上传' );
                }
                /*设置上传路径*/
                $savePath =  'Public/upfile/image/';
                /*以时间来命名上传的文件*/
                $str = date ( 'Ymdhis' ) . '_'.$key;
                $file_name = $str . "." . $file_type;
            
                /*是否上传成功*/
                if (move_uploaded_file ( $tmp_file, $savePath . $file_name ))
                {
                    
                  
                    //地址存入数据库
            
                    $where['id']=array('EQ',1);
            
                    $data['ek_img1']=$savePath . $file_name;
            
                    $rr=$U->where($where)->data($data)->save();
            
                    if($rr){
                        $key++;
                     
                    }
              }
            
            }
           
        }
        
        
    
        if($_FILES['study-file-2']['error']==0){
        
            if (! empty ( $_FILES['study-file-2']['name'] ))
            {
                $tmp_file = $_FILES['study-file-2']['tmp_name'];
                $file_types = explode ( ".", $_FILES['study-file-2']['name'] );
                $file_type = $file_types [count ( $file_types ) - 1];
                /*判别是不是.png文件，判别是不是jpg文件*/
                if (strtolower ( $file_type ) != "png" && strtolower ( $file_type ) != "jpg")
                {
                    $this->error ( '请选择png/jpg格式的图片上传' );
                }
                /*设置上传路径*/
                $savePath =  'Public/upfile/image/';
                /*以时间来命名上传的文件*/
                $str = date ( 'Ymdhis' ) . '_'.$key;
                $file_name = $str . "." . $file_type;
        
                /*是否上传成功*/
                if (move_uploaded_file ( $tmp_file, $savePath . $file_name ))
                {
                    //地址存入数据库
        
                    $where['id']=array('EQ',1);
        
                    $data['ek_img2']=$savePath . $file_name;
        
                    $rr=$U->where($where)->data($data)->save();
        
                    if($rr){
                        $key++;
                    }
                }
        
            }
             
        }
        
        
        if($_FILES['study-file-3']['error']==0){
        
            if (! empty ( $_FILES['study-file-3']['name'] ))
            {
                $tmp_file = $_FILES['study-file-3']['tmp_name'];
                $file_types = explode ( ".", $_FILES['study-file-3']['name'] );
                $file_type = $file_types [count ( $file_types ) - 1];
                /*判别是不是.png文件，判别是不是jpg文件*/
                if (strtolower ( $file_type ) != "png" && strtolower ( $file_type ) != "jpg")
                {
                    $this->error ( '请选择png/jpg格式的图片上传' );
                }
                /*设置上传路径*/
                $savePath =  'Public/upfile/image/';
                /*以时间来命名上传的文件*/
                $str = date ( 'Ymdhis' ) . '_'.$key;
                $file_name = $str . "." . $file_type;
        
                /*是否上传成功*/
                if (move_uploaded_file ( $tmp_file, $savePath . $file_name ))
                {
                    //地址存入数据库
        
                    $where['id']=array('EQ',1);
        
                    $data['ek_img3']=$savePath . $file_name;
        
                    $rr=$U->where($where)->data($data)->save();
        
                    if($rr){
                        $key++;
                    }
                }
        
            }
             
        }
        
           if($key){
                $this->success('成功');
            }
                   
    
    }
    
    
    //app e考试图片上传
    public function Image_exam(){
    
        // print_r($_FILES);
        // exit;
    
        set_time_limit(0);
    
        $key=0;
    
        $U=M('db_exam.db_app_setinfo');
    
        if($_FILES['exam-file-1']['error']==0){
    
            if (! empty ( $_FILES['exam-file-1']['name'] ))
            {
                $tmp_file = $_FILES['exam-file-1']['tmp_name'];
                $file_types = explode ( ".", $_FILES['exam-file-1']['name'] );
                $file_type = $file_types [count ( $file_types ) - 1];
                /*判别是不是.png文件，判别是不是jpg文件*/
                if (strtolower ( $file_type ) != "png" && strtolower ( $file_type ) != "jpg")
                {
                    $this->error ( '请选择png/jpg格式的图片上传' );
                }
                /*设置上传路径*/
                $savePath =  'Public/upfile/image/';
                /*以时间来命名上传的文件*/
                $str = date ( 'Ymdhis' ) . '_'.$key;
                $file_name = $str . "." . $file_type;
    
                /*是否上传成功*/
                if (move_uploaded_file ( $tmp_file, $savePath . $file_name ))
                {
    
    
                    //地址存入数据库
    
                    $where['id']=array('EQ',1);
    
                    $data['et_img1']=$savePath . $file_name;
    
                    $rr=$U->where($where)->data($data)->save();
    
                    if($rr){
                        $key++;
                         
                    }
                }
    
            }
             
        }
    
    
    
        if($_FILES['exam-file-2']['error']==0){
    
            if (! empty ( $_FILES['exam-file-2']['name'] ))
            {
                $tmp_file = $_FILES['exam-file-2']['tmp_name'];
                $file_types = explode ( ".", $_FILES['exam-file-2']['name'] );
                $file_type = $file_types [count ( $file_types ) - 1];
                /*判别是不是.png文件，判别是不是jpg文件*/
                if (strtolower ( $file_type ) != "png" && strtolower ( $file_type ) != "jpg")
                {
                    $this->error ( '请选择png/jpg格式的图片上传' );
                }
                /*设置上传路径*/
                $savePath =  'Public/upfile/image/';
                /*以时间来命名上传的文件*/
                $str = date ( 'Ymdhis' ) . '_'.$key;
                $file_name = $str . "." . $file_type;
    
                /*是否上传成功*/
                if (move_uploaded_file ( $tmp_file, $savePath . $file_name ))
                {
                    //地址存入数据库
    
                    $where['id']=array('EQ',1);
    
                    $data['et_img2']=$savePath . $file_name;
    
                    $rr=$U->where($where)->data($data)->save();
    
                    if($rr){
                        $key++;
                    }
                }
    
            }
             
        }
    
    
        if($_FILES['exam-file-3']['error']==0){
    
            if (! empty ( $_FILES['exam-file-3']['name'] ))
            {
                $tmp_file = $_FILES['exam-file-3']['tmp_name'];
                $file_types = explode ( ".", $_FILES['exam-file-3']['name'] );
                $file_type = $file_types [count ( $file_types ) - 1];
                /*判别是不是.png文件，判别是不是jpg文件*/
                if (strtolower ( $file_type ) != "png" && strtolower ( $file_type ) != "jpg")
                {
                    $this->error ( '请选择png/jpg格式的图片上传' );
                }
                /*设置上传路径*/
                $savePath =  'Public/upfile/image/';
                /*以时间来命名上传的文件*/
                $str = date ( 'Ymdhis' ) . '_'.$key;
                $file_name = $str . "." . $file_type;
    
                /*是否上传成功*/
                if (move_uploaded_file ( $tmp_file, $savePath . $file_name ))
                {
                    //地址存入数据库
    
                    $where['id']=array('EQ',1);
    
                    $data['et_img3']=$savePath . $file_name;
    
                    $rr=$U->where($where)->data($data)->save();
    
                    if($rr){
                        $key++;
                    }
                }
    
            }
             
        }
    
        if($key){
            $this->success('成功');
        }
         
    
    }
    
    
    //app 广播内容更新
    public function up_GB(){
        
        $data['c_radio']=$_POST['up_GB'];
        
        $U=M('db_exam.db_app_setinfo');
        
        $where['id']=array('EQ',1);
   
        $rr=$U->where($where)->data($data)->save();
        
       // if($rr){
            $this->success('成功');
       // }
    } 
    
    //app first内容更新
    public function up_first(){
    
        $data['c1']=$_POST['up_first'];
    
        $U=M('db_exam.db_app_setinfo');
    
        $where['id']=array('EQ',1);
         
        $rr=$U->where($where)->data($data)->save();
    
        // if($rr){
        $this->success('成功');
        // }
    }
    
    //app second内容更新
    public function up_second(){
    
        $data['c2']=$_POST['up_second'];
    
        $U=M('db_exam.db_app_setinfo');
    
        $where['id']=array('EQ',1);
         
        $rr=$U->where($where)->data($data)->save();
    
        // if($rr){
        $this->success('成功');
        // }
    }
    
    //app third内容更新
    public function up_third(){
    
        $data['c3']=$_POST['up_third'];
    
        $U=M('db_exam.db_app_setinfo');
    
        $where['id']=array('EQ',1);
         
        $rr=$U->where($where)->data($data)->save();
    
        // if($rr){
        $this->success('成功');
        // }
    }
    
    //app设置控制器
    public function appsetting(){
        $U=M('db_exam.db_app_setinfo');
        $where['id']=array('EQ',1);
        $data=$U->where($where)->find();
        
        $this->assign('info',$data);
        //print_r($data);
        $this->display();
    }
    
    
	
	/**
	 *  总管理登录控制器
	 */
	public function branchlist(){
	    
	    //获取当前平台各级总人数
	    $U=M('db_exam.db_user');
	    
	    $data['total']=$U->count();
	    
	    $where['level']=array('EQ',0);
	    $data['lev_0']=$U->where($where)->count();
	    
	    $where['level']=array('EQ',1);
	    $data['lev_3']=$U->where($where)->count();
	    
	    $where['level']=array('EQ',2);
	    $data['lev_2']=$U->where($where)->count();
	    
	    $where['level']=array('EQ',3);
	    $data['lev_1']=$U->where($where)->count();
	    
	    $this->assign('info',$data);
	    //print_r($data);
		$this->display();
	}
	
	
	/**
	 *  各个分行信息列表
	 */
	public function branchlist_fen(){
	    
	    $page=$_REQUEST['current']; //前台post过来当前页page
	    if(empty($page)){
	        $page=1;
	    }
	    $str=$_REQUEST['searchPhrase'];  //前台post过来搜索所需字符串str
	    if(empty($str)){
	        $str='';
	    }
	    $per=$_REQUEST['rowCount']; // 每页显示条数
	    if(empty($per)){
	        $per=10;
	    }
	   
	    $data['current'] = intval($page);  //将数据转换成整数
	    $data['rowCount'] = intval($per);  //将数据转换成整数
	    
	    $start=($page-1)*$per;
	    
	    $U=M('db_exam.db_bank');
	    
	    $data['total']=intval($U->count());
	    
	    $res=$U->limit("$start, $per")->select();
	    foreach ($res as $k=>$v){
	        
	        $res[$k]['id']=$k+($page-1)*$per+1;
	        
	        if($v['status']==0){
	            $res[$k]['status']='未开通';
	        }else if($v['status']==1){
	            $res[$k]['status']='开通';
	        }
	        
	        //获取当前平台各级总人数
	        $U=M('db_exam.db_user');
	        
	        $where['b_id']=array('EQ',$v['id']);
	        $res[$k]['total']=$U->where($where)->count();
	         
	        $where['level']=array('EQ',0);
	        $res[$k]['lev_0']=$U->where($where)->count();
	         
	        $where['level']=array('EQ',1);
	        $res[$k]['lev_3']=$U->where($where)->count();
	         
	        $where['level']=array('EQ',2);
	        $res[$k]['lev_2']=$U->where($where)->count();
	         
	        $where['level']=array('EQ',3);
	        $res[$k]['lev_1']=$U->where($where)->count();
	        
	        $res[$k]['comm']='<a href="./branchdetail.html?id='.$v['id'].'">详情</a>';
	    }
	    
	    
	    
	    $data['rows']=$res;
	   // print_r($data);
	    $this->ajaxReturn($data);
	}
	
	/**
	 *  获取当前平台各级总人数 (ajax)
	 */
	public function getTerraceCount(){
		
	}
	
	/**
	 *  分行详情控制器
	 */
	public function branchdetail(){
	    $id=$_GET['id'];
	    
	    session('bank_id',$id);
	    
	    //获取分行名称
	    $U=M('db_exam.db_bank');
	    $where_bank['id']=array('EQ',$id);
	    $bank_name=$U->field('name,me_name,status')->where($where_bank)->find();
	    
	   
	    //获取当前平台各级总人数
	    $U=M('db_exam.db_user');
	     
	    $res['total']=$U->count();

	    $where['level']=array('EQ',0);
	    $res['lev_0']=$U->where($where)->count();
	    
	    $where['level']=array('EQ',1);
	    $res['lev_3']=$U->where($where)->count();
	    
        $where['level']=array('EQ',2);
	    $res['lev_2']=$U->where($where)->count();
    
	    $where['level']=array('EQ',3);
	    $res['lev_1']=$U->where($where)->count();
	    
	    
	    
	    $where2['b_id']=array('EQ',$id);
	    
	    $res2['total']=$U->where($where2)->count();
	    
	    $where2['level']=array('EQ',0);
	    $res2['lev_0']=$U->where($where2)->count();
	     
	    $where2['level']=array('EQ',1);
	    $res2['lev_3']=$U->where($where2)->count();
	     
	    $where2['level']=array('EQ',2);
	    $res2['lev_2']=$U->where($where2)->count();
	    
	    $where2['level']=array('EQ',3);
	    $res2['lev_1']=$U->where($where2)->count();
	    
	    
	    $data['zong']=$res;
	    $data['fen']=$res2;
	    
	    //print_r($data);
	    $this->assign('bank_name',$bank_name);
	    $this->assign('info',$data);
	    $this->display();
	}
	
	/**
	 *  获取下属银行人员详细列表(分页)
	 */
	public function branchd_user_list(){
	    
	    $id=session('bank_id');
 	    
	    $page=$_REQUEST['current']; //前台post过来当前页page
	    if(empty($page)){
	        $page=1;
	    }
	    $str=$_REQUEST['searchPhrase'];  //前台post过来搜索所需字符串str
	    if(empty($str)){
	        $str='';
	    }
	    $per=$_REQUEST['rowCount']; // 每页显示条数
	    if(empty($per)){
	        $per=10;
	    }
	    
	    $data['current'] = intval($page);  //将数据转换成整数
	    $data['rowCount'] = intval($per);  //将数据转换成整数
	     
	    $start=($page-1)*$per;
	     
	    $U=M('db_exam.db_user');
	    
	    $where['b_id']=array('EQ',$id);
	     
	    $data['total']=intval($U->where($where)->count());
	     
	     
	    $res=$U->where($where)->limit("$start, $per")->select();
	    
	
	    foreach ($res as $k=>$v){
	         
	        $res[$k]['id']=$k+($page-1)*$per+1;
	         
	        if($v['level']==0){
	            $res[$k]['level']='无等级';
	        }else if($v['level']==1){
	            $res[$k]['level']='三级';
	        }else if($v['level']==2){
	            $res[$k]['level']='二级';
	        }else if($v['level']==3){
	            $res[$k]['level']='一级';
	        }
	         
	        
	        if($v['type']==1){
	            $res[$k]['type']='注册';
	        }else if($v['type']==2){
	            $res[$k]['type']='正常';
	        }else if($v['type']==3){
	            $res[$k]['type']='冻结';
	        }else if($v['type']==4){
	            $res[$k]['type']='调动ing';
	        }
	         
	        $res[$k]['comm']='<a user_id="'. $v['id'] .'" href="javascript:;" class="js-detail">详情</a>';
	    }
	     
	     
	     
	    $data['rows']=$res;
	    // print_r($data);
	    $this->ajaxReturn($data);
	}
	
	
	/**
	 *  获取人员详细信息
	 */
	public function getUserInfo(){
	    $id=$_POST['id'];
	    $U=M('db_exam.db_user');
	     
	    $where['id']=array('EQ',$id);
	    
	    $data=$U->where($where)->find();
	    
	    if($data['level']==0){
	        $data['level']='无等级';
	    }else if($data['level']==1){
	        $data['level']='三级';
	    }else if($data['level']==2){
	        $data['level']='二级';
	    }else if($data['level']==3){
	        $data['level']='一级';
	    }
	    
	     
	    if($data['type']==1){
	        $data['type']='注册';
	    }else if($data['type']==2){
	        $data['type']='正常';
	    }else if($data['type']==3){
	        $data['type']='冻结';
	    }else if($data['type']==4){
	        $data['type']='调动ing';
	    }
	    
	    //补充数据(暂时写死)
	    $data['num']=3;
	    
	    $list[0]['time']='2016年7月20日9:00';
	    $list[0]['persist']='56分钟';
	    $list[0]['level']='1';
	    $list[0]['score']='90';
	    
	    $list[1]['time']='2016年8月20日9:00';
	    $list[1]['persist']='56分钟';
	    $list[1]['level']='3';
	    $list[1]['score']='83';
	    
	    $data['list']=$list;
	    
	    
	   // print_r($data);
	    
	    $this->ajaxReturn($data);
	    
	}
	
	
	
	
	/**
	 *  开通/关闭分行 (更改银行账号)
	 */
	public function openorshut(){
	    

	    $id=session('bank_id');
	    $U=M('db_exam.db_bank');
	    $username=$_POST['account'];
	    
	    $data['remark']=$_POST['reason'];
	    
	    $where['id']=array('EQ',$id);
	    $where['username']=array('EQ',$username);
	    $check=$U->where($where)->find();
	    
	    if($check){
	        if($check['status']==1){
	            $data['status']=0;
	        }else if($check['status']==0){
	                 
	            $data['status']=1;
	        }    
	    }else{
	        $this->ajaxReturn(3);
	        exit;
	    }
	      
	    $where_up['id']=array('EQ',$id);
	    $res=$U->where($where_up)->data($data)->save();
	    if($res){
	        $this->ajaxReturn(1);
	    }else{
	        $this->ajaxReturn(0);
	    }
	    
	}
	
	/**
	 *  重置分行密码
	 */
	public function Resetpass(){
	    $id=session('bank_id');
	    $U=M('db_exam.db_bank');
	    $newpass=md5('000000');
	    
	    $where['id']=array('EQ',$id);
	    $where['password']=array('EQ',$newpass);
	    $check=$U->where($where)->count();
	    if($check){
	        $this->ajaxReturn(3);
	        exit;
	    }
	    
	    $where_up['id']=array('EQ',$id);
	    $data['password']=$newpass;
	    $res=$U->where($where_up)->data($data)->save();
	    if($res){
	        $this->ajaxReturn(1);
	    }else{
	        $this->ajaxReturn(0);
	    }
	}
	
	
	
	/**
	 *  分行详情控制器
	 */
	public function branchmain(){
	    $id=$_GET['id'];
	    	
	    session('bank_fen_id',$id);
	     
	    //获取分行名称
	    $U=M('db_exam.db_bank');
	    $where_bank['id']=array('EQ',$id);
	    $bank_name=$U->field('name,me_name,status')->where($where_bank)->find();
	     
	
	    //获取当前平台各级总人数
	    $U=M('db_exam.db_user');
	
	    $where2['b_id']=array('EQ',$id);
	     
	    $res2['total']=$U->where($where2)->count();
	     
	    $where2['level']=array('EQ',0);
	    $res2['lev_0']=$U->where($where2)->count();
	
	    $where2['level']=array('EQ',1);
	    $res2['lev_3']=$U->where($where2)->count();
	
	    $where2['level']=array('EQ',2);
	    $res2['lev_2']=$U->where($where2)->count();
	     
	    $where2['level']=array('EQ',3);
	    $res2['lev_1']=$U->where($where2)->count();
	     
	     
	    $data['fen']=$res2;
	     
	    //print_r($data);
	    $this->assign('bank_name',$bank_name);
	    $this->assign('info',$data);
	    $this->display();
	}
	
	/**
	 *  获取某个分行下属银行人员详细列表(分页)
	 */
	public function branchd_user_list_fen(){
	     
	    $id=session('bank_fen_id');
	
	    $page=$_REQUEST['current']; //前台post过来当前页page
	    if(empty($page)){
	        $page=1;
	    }
	    $str=$_REQUEST['searchPhrase'];  //前台post过来搜索所需字符串str
	    if(empty($str)){
	        $str='';
	    }
	    $per=$_REQUEST['rowCount']; // 每页显示条数
	    if(empty($per)){
	        $per=10;
	    }
	     
	    $data['current'] = intval($page);  //将数据转换成整数
	    $data['rowCount'] = intval($per);  //将数据转换成整数
	
	    $start=($page-1)*$per;
	
	    $U=M('db_exam.db_user');
	     
	    $where['b_id']=array('EQ',$id);
	
	    $data['total']=intval($U->where($where)->count());
	
	
	    $res=$U->where($where)->limit("$start, $per")->select();
	     
	
	    foreach ($res as $k=>$v){
	
	        $res[$k]['id']=$k+($page-1)*$per+1;
	
	        if($v['level']==0){
	            $res[$k]['level']='无等级';
	        }else if($v['level']==1){
	            $res[$k]['level']='三级';
	        }else if($v['level']==2){
	            $res[$k]['level']='二级';
	        }else if($v['level']==3){
	            $res[$k]['level']='一级';
	        }
	
	         
	        if($v['type']==1){
	            $res[$k]['type']='注册';
	        }else if($v['type']==2){
	            $res[$k]['type']='正常';
	        }else if($v['type']==3){
	            $res[$k]['type']='冻结';
	        }else if($v['type']==4){
	            $res[$k]['type']='调动ing';
	        }
	
	        $res[$k]['comm']='<a user_id="'. $v['id'] .'" href="javascript:;" class="js-detail">详情</a>';
	    }
	
	
	
	    $data['rows']=$res;
	    // print_r($data);
	    $this->ajaxReturn($data);
	}
	
	
	/**
	 *  修改分行密码
	 */
	public function up_fen_pass(){
	    
	    $id=session('bank_fen_id');
	    
	    $old_pass=md5($_POST['pass_origin']);
	    
	    $new_pass=md5($_POST['pass_new']);
	
	    $U=M('db_exam.db_bank');
	    
	    $where['id']=array('EQ',$id);
	    
	    //验证原始密码
	    $temp=$U->field('password')->where($where)->find();
	    
	    /*print_r($temp['password']);
	    echo '<br />';
	    print_r($old_pass);
	    echo '<br />';
	    print_r($new_pass);
	    exit;*/
	    
	    if($temp['password']!=$old_pass){
	        $this->error('原始密码错误');
	        exit;
	    }
	    
	    if($temp['password']==$new_pass){
	        $this->success('修改成功');
	        exit;
	    }
	    
	    $data['password']=$new_pass;
	
        $res=$U->where($where)->data($data)->save();
	    
	    if($res){
	        $this->success('修改成功');
	    }else{
	        $this->error('修改失败');
	    }
	    
	}
	
	/**
	 *  获取分行人员详细信息
	 */
	public function getUserInfo_fen(){
	    
	    $id_fen=session('bank_fen_id');
	    
	    $id=$_POST['id'];
	    $U=M('db_exam.db_user');
	
	    $where['id']=array('EQ',$id);
	     
	    $data=$U->where($where)->find();
	     
	    if($data['level']==0){
	        $data['level']='无等级';
	    }else if($data['level']==1){
	        $data['level']='三级';
	    }else if($data['level']==2){
	        $data['level']='二级';
	    }else if($data['level']==3){
	        $data['level']='一级';
	    }
	     
	
	    $data['statusnum']=$data['type'];
	    
	    if($data['type']==1){
	        $data['type']='注册';
	    }else if($data['type']==2){
	        $data['type']='正常';
	    }else if($data['type']==3){
	        $data['type']='冻结';
	    }else if($data['type']==4){
	        $data['type']='调动ing';
	    }
	     
	   // $data['branch']=$data['b_id'];
	    
	    
	    //分行列表
	    $V=M('db_exam.db_bank');
	    $bank=$V->field('id,name,me_name')->group('name')->select();
	    
	    
	    
	    foreach($bank as $x=>$y){
	        $branchlist[$x]['id']=$y['id'];
	        $branchlist[$x]['name']=$y['name'];
	        //$branchlist[$x]['me_name']=$y['me_name'];
	                
	    }
	    
	    
	    
	    //分行机构列表
	    $V=M('db_exam.db_bank');
	    $where_name['id']=array('EQ',$id_fen);
	    
	    $name=$V->field('name,me_name')->where($where_name)->find();
	    
	    $data['branch']=$name['name'];
	    
	    $data['JG']=$name['me_name'];;
	    
	    $where_jg['name']=array('EQ',$name['name']);
	    
	    $data['jg_list']=$V->field('id,name,me_name')->where($where_jg)->select();
	    	 	    
	    $data['branchlist']=$branchlist;
	    
	    	    
	    //补充数据(暂时写死)
	    $data['num']=3;
	    	     
	    $list[0]['time']='2016年7月20日9:00';
	    $list[0]['persist']='56分钟';
	    $list[0]['level']='1';
	    $list[0]['score']='90';
	     
	    $list[1]['time']='2016年8月20日9:00';
	    $list[1]['persist']='56分钟';
	    $list[1]['level']='3';
	    $list[1]['score']='83';
	     
	    $data['list']=$list;
	     
	     
	    // print_r($data);
	     
	    $this->ajaxReturn($data);
	     
	}
	
	
	
	/**
	 *  获取分行下属机构
	 */
	public function getfen_JG(){
	    $name=$_POST['name']; 
	    //分行机构列表
	    $V=M('db_exam.db_bank');
	    $where['name']=array('EQ',$name);
	    $bank=$V->field('id,me_name')->where($where)->select();
	   // print_r($bank);
	    $this->ajaxReturn($bank);
	}
	
	
	
	
	
	
	/**
	 *  通过
	 */
	public function pass(){
	    $id=$_POST['id'];
	    
	    $U=M('db_exam.db_user');
	    
	    $where['id']=array('EQ',$id);
	    
	    $data['type']=2;
	    
	    $res=$U->where($where)->data($data)->save();
	    
	    if($res){
	        $this->ajaxReturn(1);
	    }else{
	        $this->ajaxReturn(0);
	    }
	    
	}
	
	
	/**
	 *  拒绝
	 */
	public function reject(){
	    $id=$_POST['id'];
	     
	    $U=M('db_exam.db_user');
	     
	    $where['id']=array('EQ',$id);
	     
	    $data['type']=3;
	     
	    $res=$U->where($where)->data($data)->save();
	     
	    if($res){
	        $this->ajaxReturn(1);
	    }else{
	        $this->ajaxReturn(0);
	    }
	     
	}
	
	/**
	 *  冻结
	 */
	public function freeze(){
	    $id=$_POST['id'];
	
	    $U=M('db_exam.db_user');
	
	    $where['id']=array('EQ',$id);
	
	    $data['type']=3;
	
	    $res=$U->where($where)->data($data)->save();
	
	    if($res){
	        $this->ajaxReturn(1);
	    }else{
	        $this->ajaxReturn(0);
	    }
	
	}
	
	/**
	 *  解冻
	 */
	public function unfreeze(){
	    $id=$_POST['id'];
	
	    $U=M('db_exam.db_user');
	
	    $where['id']=array('EQ',$id);
	
	    $data['type']=2;
	
	    $res=$U->where($where)->data($data)->save();
	
	    if($res){
	        $this->ajaxReturn(1);
	    }else{
	        $this->ajaxReturn(0);
	    }
	
	}
	
	/**
	 *  重置注册密码
	 */
	public function resetpassword(){
	    $id=$_POST['id'];
	
	    $U=M('db_exam.db_user');
	    
	    $old_pass=md5('000000');
	    
	    $where_check['id']=array('EQ',$id);
	    $where_check['password']=array('EQ',$old_pass);
	    
	    $check=$U->where($where_check)->count();
	    if($check){
	        $this->ajaxReturn(1);
	        exit;
	    }
	
	    $where['id']=array('EQ',$id);
	
	    $data['password']=md5('000000');
	
	    $res=$U->where($where)->data($data)->save();
	
	    if($res){
	        $this->ajaxReturn(1);
	    }else{
	        $this->ajaxReturn(0);
	    }
	
	}
	
	
	/**
	 *  调动工作
	 */
	public function surebranch(){
	    
	    $id=$_POST['id'];
	    
	    $bank_id=$_POST['branch'];
	    
	    $U=M('db_exam.db_user');
	
	    $where['id']=array('EQ',$id);
	
	    $data['b_id']=$bank_id;
	
	    $res=$U->where($where)->data($data)->save();
	
	    if($res){
	        //改状态
	        $V=M('db_exam.db_user');
	        
	        $where['id']=array('EQ',$id);
	        
	        $data['type']=4;
	        
	        $V->where($where)->data($data)->save();
	        
	        $this->ajaxReturn(1);
	    }else{
	        $this->ajaxReturn(0);
	    }
	
	}
	
////////////////////////////////////////////////////////////	
	/**
	 *  新建题目
	 */
	public function add_question(){
	    
	  //  $this->ajaxReturn($_POST);
	    
	  //  exit;
	    
	    
	    //题目部分
	    $data['t_id']=$_POST['id'];  //隶属题库
	    
	    $data['type']=$_POST['type'];  //题目类型（2.判断 1.选择）
	    
	    if($data['type']==1){
	         //判断是单选还是多选
	         $chec=$_POST['list'];
	         $che=0;
	         foreach ($chec as $n=>$m){
	             if($m['checked']){
	                 $che+=1;
	             }
	         }
	         if($che>1){
	             $data['type']=3; //多选
	         }
	         
	    }
	     
    
	    $data['title']=$_POST['filter_cont'];  //题目标题（用于列表）
	    $data['content']=$_POST['html_cont'];  //题目内容（html）
	    
	    //图片？？？？？
	    
	    $U=M('db_exam.db_topic_ques');
	    

	    $ques_id=$U->data($data)->add();
	    
	    if($ques_id){
	        //题目建立成功，建答案部分
	        $ans=$_POST['list'];
	        $num=0;
	        foreach ($ans as $k=>$v){
	            $data_ans['tq_id']=$ques_id; //隶属题目
	            $data_ans['content']=$v['cont'];
	            if($v['checked']){
	                $data_ans['is_right']=1; //正确答案
	            }else{
	                $data_ans['is_right']=0; //非正确答案
	            }
	            //选择题存编号
	            if($v['choice']!=''){
	                $data_ans['code']=$v['choice'];
	            }
	            
	            
	            $V=M('db_exam.db_topic_answer');
	            $ans_id=$V->data($data_ans)->add();
	            if($ans_id){
	                $num+=1;
	            }
	        }
	        
	        if($num){
	            $this->ajaxReturn(1);
	        }	        
	    }else{
	        $this->ajaxReturn(0);
	    }
	    
	    
	    
	}
	
	
	
	
	/**
	 *  修改题目
	 */
	public function up_question(){
	     
	    //  $this->ajaxReturn($_POST);
	     
	    //  exit;
	     
	    $id=$_POST['old_id'];
	     
	    //题目部分
	    $data['t_id']=$_POST['id'];  //隶属题库
	     
	    $data['type']=$_POST['type'];  //题目类型（2.判断 1.选择）
	     
	    if($data['type']==1){
	        //判断是单选还是多选
	        $chec=$_POST['list'];
	        $che=0;
	        foreach ($chec as $n=>$m){
	            if($m['checked']){
	                $che+=1;
	            }
	        }
	        if($che>1){
	            $data['type']=3; //多选
	        }
	
	    }
	
	
	    $data['title']=$_POST['filter_cont'];  //题目标题（用于列表）
	    $data['content']=$_POST['html_cont'];  //题目内容（html）
	     
	    //图片？？？？？
	     
	    $U=M('db_exam.db_topic_ques');
	     
	    $where['id']=array('EQ',$id);
	
	    $ques_id=$U->where($where)->data($data)->save();
	     
	   // if($ques_id){
	        
	        $V=M('db_exam.db_topic_answer');
	        
	        $where_ans['tq_id']=array('EQ',$id);
	        
	        $ans_del=$V->where($where_ans)->delete();
	        
	      //  if($ans_del){
	            
	      //  }
	        
	        //题目建立成功，建答案部分
	        $ans=$_POST['list'];
	        $num=0;
	        foreach ($ans as $k=>$v){
	            
	            $data_ans['tq_id']=$id; //隶属题目
	            $data_ans['content']=$v['cont'];
	            if($v['checked']){
	                $data_ans['is_right']=1; //正确答案
	            }else{
	                $data_ans['is_right']=0; //非正确答案
	            }
	            //选择题存编号
	            if($v['choice']!=''){
	                $data_ans['code']=$v['choice'];
	            }
	             
	             
	            $V=M('db_exam.db_topic_answer');
	            $ans_id=$V->data($data_ans)->add();
	            if($ans_id){
	                $num+=1;
	            }
	        }
	         
	        if($num){
	            $this->ajaxReturn(1);
	        }
	    //}else{
	     //   $this->ajaxReturn(0);
	   // }
	     
	     
	     
	}
	
	
	
	/**
	 *  题目列表(分页)
	 */
	public function question_list(){
	    $t_id=$_POST['t_id']=1;  //隶属题库
	    
	    $page=$_REQUEST['current']; //前台post过来当前页page
	    if(empty($page)){
	        $page=1;
	    }
	    $str=$_REQUEST['searchPhrase'];  //前台post过来搜索所需字符串str
	    if(empty($str)){
	        $str='';
	    }
	    $per=$_REQUEST['rowCount']; // 每页显示条数
	    if(empty($per)){
	        $per=10;
	    }
	    
	    $data['current'] = intval($page);  //将数据转换成整数
	    $data['rowCount'] = intval($per);  //将数据转换成整数
	    
	    $start=($page-1)*$per;
	    
	    $U=M('db_exam.db_topic_ques');
	    
	    $where['t_id']=array('EQ',$t_id);
	    
	    $data['total']=intval($U->where($where)->count());
	    
	    $res=$U->field('type,title')->where($where)->select();
	    
	    foreach ($res as $k=>$v){
	        $res[$k]['id']=$k+($page-1)*$per+1;
	        
	        if($v['type']==1){
	            $res[$k]['type']='单选';
	        }else if($v['type']==2){
	            $res[$k]['type']='判断';
	        }else if($v['type']==3){
	            $res[$k]['type']='多选';
	        }
	        
	        $res[$k]['comm']='<a href="javascript:;" que_id='.$v['id'].' class="js-detail">详情</a><a href="javascript:;" que_id='.$v['id'].' class="js-delete">删除</a>';
	    }
	    
	    $data['rows']=$res;
	    
	   // print_r($data);
	    $this->ajaxReturn($data);
	    	    
	}
	
	
	/**
	 *  设置题库
	 */
	public function set_ques(){
	    $id=$_POST['id'];
	    
	    $data['t_id']=$_POST['id'];
	    $data['f_score']=$_POST['score_excellent'];
	    $data['p_score']=$_POST['score_normal'];
	    $data['t_score']=$_POST['score_pass'];
	    $data['k_time']=$_POST['time_interval'];
	    $data['time_kaoshi']=$_POST['time_kaoshi'];
	    $data['d_number']=$_POST['singlenum'];
	    $data['d_score']=$_POST['singlescore'];
	    $data['dt_number']=$_POST['multinum'];
	    $data['dt_score']=$_POST['multiscore'];
	    $data['p_number']=$_POST['judgenum'];
	    $data['pd_score']=$_POST['judgescore'];
	    $data['y_remark']=$_POST['word_excellent'];
	    $data['p_remark']=$_POST['word_normal'];
	    $data['t_remark']=$_POST['word_pass'];
	    $data['nt_remark']=$_POST['word_notpass'];
	     
	    $U=M('db_exam.db_topic_info');
	    
	    $where['t_id']=array('EQ',$id);
	    //判断是否设置过
	    $res=$U->where($where)->count();
	    
	    if($res){
	        $re=$U->where($where)->data($data)->save();
	    }else{
	        $re=$U->data($data)->add();
	    }
	    
	    if($re){
	        $this->success('设置成功');
	    }else{
	        $this->error('设置失败');
	    }
	    
	    
	}
	
	
	/**
	 *  题库详细信息
	 */
	public function set_ques_list(){
	    $id=$_POST['id'];
	    
	    if(empty($id)){
	        $id=1;
	    }
	    
	    $U=M('db_exam.db_topic_info');
	    $where['t_id']=array('EQ',$id);
	    $res=$U->where($where)->find();

	   	    
	    $data['chapter']='第'. $res['t_id'] .'章'; //章节
	    $data['score_excellent']=$res['f_score'];//优秀分数
	    $data['score_normal']=$res['p_score'];//普通分数
	    $data['score_pass']=$res['t_score'];//通过分数
	    $data['time_interval']=$res['k_time'];//考试间隔，小时单位
	    $data['time_kaoshi']=$res['time_kaoshi'];//考试时间，小时单位
	    $data['single']['num']=$res['d_number'];
	    $data['single']['score']=$res['d_score'];
	    
	    $sinle=$data['single']['num']*$data['single']['score'];
	    
	    
	    $data['multi']['num']=$res['dt_number'];
	    $data['multi']['score']=$res['dt_score'];
	    
	    $multi=$data['multi']['num']*$data['multi']['score'];
	    
	
	    $data['judge']['num']=$res['p_number'];
	    $data['judge']['score']=$res['pd_score'];
	    
	    $judge=$data['judge']['num']*$data['judge']['score'];
	    
	    $data['total']=$sinle+$multi+$judge;;
	    
	    $data['word_excellent']=$res['y_remark'];
	    $data['word_normal']=$res['p_remark'];
	    $data['word_pass']=$res['t_remark'];
	    $data['word_notpass']=$res['nt_remark'];
	    
	    $U=M('db_exam.db_topic_ques');
	     
	    $where_to['t_id']=array('EQ',$id);
	  
	    $where_to['type']=array('EQ',1);
	    $data['num_single']=intval($U->where($where_to)->count());//现在实际创建的单选题数目
	    $where_to['type']=array('EQ',3);
	    $data['num_multi']=intval($U->where($where_to)->count());//现在实际创建的多选题数目
	    $where_to['type']=array('EQ',2);
	    $data['num_judge']=intval($U->where($where_to)->count());//现在实际创建的判断题数目
	    	  
	    $where['t_id']=array('EQ',$id);
	    
	    $res=$U->field('id,type,title')->where($where)->select();
	     
	    foreach ($res as $k=>$v){
	        	        
	        $data['list'][$k]['que_id']=$v['id'];
	        
	        $data['list'][$k]['id']=$k+1;
	         
	        if($v['type']==1){
	            $data['list'][$k]['type']='单选';
	        }else if($v['type']==2){
	            $data['list'][$k]['type']='判断';
	        }else if($v['type']==3){
	            $data['list'][$k]['type']='多选';
	        }
	         
	        $data['list'][$k]['cont']=$v['title'];
	    }
	     
	    
	   // print_r($data);
	    $this->ajaxReturn($data);
	}
	
	/**
	 *  查出某条题目详细信息
	 */
	public function select_que_detial(){
	    $id=$_POST['id'];
	    $U=M('db_exam.db_topic_ques');
	    $where['id']=$id;
	    $res=$U->where($where)->find();
	    $V=M('db_exam.db_topic_answer');
	    
	    if($res['type']==3){
	        $res['type']=1;
	    }
	    
	    $data['type']=$res['type'];
	    $data['cont']=$res['content'];
	    
	    
	    //查出答案选项
	    
	    $where_ans['tq_id']=array('EQ',$res['id']);
	    $ans=$V->where($where_ans)->select();
	     
	    
	    foreach ($ans as $k=>$v){
	       
	        $data['list'][$k]['choice']=$v['code'];
	        $data['list'][$k]['cont']=$v['content'];
	        if($v['is_right']){
	            $data['list'][$k]['checked']=true;
	        }else{
	            $data['list'][$k]['checked']=false;
	        }
	        
	    }
	    
    
	    //print_r($data);
	    
	    $this->ajaxReturn($data);
	    
	}
	
	
	
	/**
	 *  删除题目
	 */
	public function del_question(){
	
	    //题目部分
	    $id=$_POST['id']; 
	
	    $data['title']=$_POST['filter_cont'];  //题目标题（用于列表）
	    $data['content']=$_POST['html_cont'];  //题目内容（html）
	
	    	
	    $U=M('db_exam.db_topic_ques');
	
	    $where['id']=array('EQ',$id);
	
	    $ques_id=$U->where($where)->delete();
	
        //答案	     
	    $V=M('db_exam.db_topic_answer');
	     
	    $where_ans['tq_id']=array('EQ',$id);
	     
	    $ans_del=$V->where($where_ans)->delete();
	     
	    if($ques_id){
	        $this->ajaxReturn(1);
	    }else{
	        $this->ajaxReturn(0);
	    }
	    
	}
	
//////////////////////////////////////////////////////////////////////////////////////
//学习部分

	/**
	 *  编辑章节内容
	 */
	public function edit_content(){
	    
	    $id=$_POST['id'];
	    
	    $data['z_id']=$_POST['id'];
	    $data['content']=$_POST['html_filter'];
	    $U=M('db_exam.db_study');
	    $where['z_id']=array('EQ',$id);
	    //查出内容是否存在
	    $r=$U->where($where)->count();
	    
	    if($r){
	        $res=$U->where($where)->data($data)->save();
	    }else{
	        $res=$U->data($data)->add();
	    }
	    
	    if($res){
	        $this->ajaxReturn(1);
	    }else{
	        $this->ajaxReturn(0);
	    }
	    
	}
	
	
	/**
	 *  查出章节内容
	 */
	public function select_content(){
	     
	    $id=$_POST['id'];
	    
	    if(empty($id)){
	        $id='1.1.1';
	    }
	     
	    $U=M('db_exam.db_study');
	    $where['z_id']=array('EQ',$id);
	    //查出内容是否存在
	    $res=$U->where($where)->find();
	    
	    $data=$res['content'];
	    
	    //print_r($data);
	    
	    $this->ajaxReturn($data);
	    
	     
	       
	}
	
	
	
	
}