<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>

    <meta charset="UTF-8">
    <title>『喜事码头』后台管理</title>
    <link rel="stylesheet" type="text/css" href="/matouPCS/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/matouPCS/Public/Admin/css/main.css"/>
    <script type="text/javascript" src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script> 
    <link rel="stylesheet" href="/matouPCS/Public/Admin/css/datePicker.css" />    
    <script type="text/javascript" src="/matouPCS/Public/Admin/js/libs/modernizr.min.js"></script>
    <style type="text/css">
     .pagelist{ text-align:center; background:#f1f1f1; padding:7px 0;}
     .pagelist a{ margin:0 5px; border:#6185a2 solid 1px; display:inline-block; padding:2px 6px 1px; line-height:16px; background:#fff; color:#6185a2;}
   .pagelist span{ margin:0 5px; border:#6185a2 solid 1px; display:inline-block; padding:2px 6px 1px; line-height:16px; color:#6185a2; color:#fff; background:#6185a2;}
              
    
    </style>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/matouPCS/index.php/Admin/Index/index">首页</a></li>
                <li><a href="/matouPCS/index.php/Index/index" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">你好[<?php echo (cookie('username')); ?>]</a></li>
                <li><a href="#">修改密码</a></li>      
                <li><a href="/matouPCS/index.php/Admin/Login/index">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                         <li><a href="/matouPCS/index.php/Admin/Viwepager"><i class="icon-font">&#xe008;</i>图片轮播管理</a></li>
                          <li><a href="/matouPCS/index.php/Admin/Reward"><i class="icon-font">&#xe005;</i>悬赏大厅管理</a></li>
                            <li><a href="/matouPCS/index.php/Admin/Due"><i class="icon-font">&#xe005;</i>应赏区管理</a></li>
                          <li><a href="/matouPCS/index.php/Admin/Recruit"><i class="icon-font">&#xe005;</i>招聘大厅管理</a></li>
                              <li><a href="/matouPCS/index.php/Admin/Employ"><i class="icon-font">&#xe005;</i>应聘区管理</a></li>
                          <li><a href="/matouPCS/index.php/Admin/Force"><i class="icon-font">&#xe005;</i>码头部队管理</a></li>
                          <li><a href="/matouPCS/index.php/Admin/Shop"><i class="icon-font">&#xe005;</i>码头商城管理</a></li>
                          <li><a href="/matouPCS/index.php/Admin/Flea"><i class="icon-font">&#xe005;</i>跳蚤市场管理</a></li>
                       
                        
                         <li><a href="/matouPCS/index.php/Admin/Friend"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                         <li><a href="/matouPCS/index.php/Admin/Us"><i class="icon-font">&#xe052;</i>关于我们</a></li>
                    
                    </ul>
                </li>\
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>用户管理</a>
                    <ul class="sub-menu">
                     <li><a href="/matouPCS/index.php/Admin/User"><i class="icon-font">&#xe005;</i>用户信息管理</a></li>
                     <li><a href="/matouPCS/index.php/Admin/Bdzx"><i class="icon-font">&#xe005;</i>部队中心管理</a></li>
                      <li><a href="/matouPCS/index.php/Admin/Liuyan"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                  
                    </ul>
                </li>
            </ul>
        </div>
    </div>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/matouPCS/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">码头部队管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/matouPCS/index.php/Admin/Force/index" method="post">
               <table class="search-tab">
                        <tr>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/matouPCS/index.php/Admin/Force/add"><i class="icon-font"></i>添加部队</a>
                       <a id="batchDel" href="javascript:void(0)"><input form="myform"  formaction="/matouPCS/index.php/Admin/Force/bdel" 
                        type="submit" class="btn btn-primary btn2" onclick="return confirm('确定删除这些信息吗？');" value="批量删除"/></a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                           <tr>
                            <th></th>
                            <th></th>

                            <th colspan="16" style="color:red">基本信息</th>
                   
                      
                        </tr>
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                               <th>编号</th>
                               <th>用户名</th>
                             <th>部队名称</th>
                            <th>部队类型</th>
                            <th>审核状态</th>
                             <th>营业执照名称</th>
                            <th>法定代表人</th>
                             <th>详细地址</th>
                            <th>联系电话</th>
                            <th>qq</th>
                            <th>认证logo</th>
                            <th>官网链接</th>
                            <th>部队简介</th>
                            <th>关注数</th>
                            <th>审核</th>
                            <th>更多</th>
                            <th>操作</th>
                            
                        </tr> 
                        <?php if(is_array($operarr)): $i = 0; $__LIST__ = $operarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                             <td class="tc"><input name="ids[]" value="<?php echo ($v["id"]); ?>"  class="check" type="checkbox"></td>
                           <td> <?php echo ($i); ?> </td>
                               <th> <?php echo ($v["username"]); ?></th>
                            <td> <?php echo ($v["forcename"]); ?> </td>
                              <td><?php echo ($v["type"]); ?></td>
                            <td >   <?php if($v[status]=='1'): ?>未审核<?php endif; ?>
                                        <?php if($v[status]=='2'): ?>审核通过<?php endif; ?>
                                     <?php if($v[status]=='3'): ?>审核未通过<?php endif; ?>
                                     
                            </td>
                              <td><?php echo ($v["charter"]); ?></td>
                            <td><?php echo ($v["representative"]); ?></td>
                            <td><?php echo ($v["address"]); ?></td>
           
                            <td id="phone<?php echo ($v["id"]); ?>"><?php echo ($v["tels"]); ?></td>
                             <td><?php echo ($v["qqs"]); ?></td>
                              <td><img src="/matouPCS/Public/upload/<?php echo ($v["time"]); ?>/<?php echo ($v["logo"]); ?>" width="50"/></td>
                               <td><?php echo ($v["lianjie"]); ?></td>
                              <td><?php echo ($v["content"]); ?></td>
                              <td><?php echo ($v["collect"]); ?></td>
                           
                               <td><a  href="/matouPCS/index.php/Admin/Force/status?id=<?php echo ($v["id"]); ?>">审核详情</a></td>
                               
                                 <td>   <a class="link-update" href="/matouPCS/index.php/Admin/Force/updateimages?id=<?php echo ($v["id"]); ?>">照片作品</a>
                              <a class="link-update" href="/matouPCS/index.php/Admin/Force/updatevideo?id=<?php echo ($v["id"]); ?>">视频作品</a>
                             </td>
                            <td>
                                <a class="link-update" href="/matouPCS/index.php/Admin/Force/update?id=<?php echo ($v["id"]); ?>">修改内容</a>
                                <a class="link-update" href="/matouPCS/index.php/Admin/Force/updateimage?id=<?php echo ($v["id"]); ?>">修改logo图</a>
                                
                                      <a class="link-del"   onclick="shanchu(<?php echo ($v["id"]); ?>)">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div  class="pagelist"><?php echo ($pageStr); ?></div>
                </div>
  <script type="text/javascript" src="/matouPCS/Public/Home/js/jquery-1.8.3.min.js"></script>       
   <script type="text/javascript">

   function shanchu(id){
	   	//alert(id);
	   	if(confirm( '是否确定删除这条信息！')==true){
	      	$.ajax({

	      		url:"/matouPCS/index.php/Admin/force/delete/id/"+id,
	    
	      		type:"get",
	      		success:function(data){
	      			//alert(data);
	      			if(data == 'y'){
	      			
	      				alert('删除失败，请先删除照片或视频作品');
	   		
	   			}else{
	   				window.location.reload(true);
	   			}
	      		},error:function(){
	      			alert('no');
	      		}
	      	});
	   	}else{
	   		return false;
	   	}
	       };
	  


   $("#check").click(function(){
	 if($(this).prop("checked")){
		 $(".check").prop("checked","checked")
	 }else{
		 $(".check").removeAttr("checked")
	 }
	 
})


function shen(id){
	
	var ids=id;
	//alert(ids);
   	$.ajax({
   		url:"/matouPCS/index.php/Admin/Force/status/id/"+ ids,
   		type:"get",
   		success:function(data){
   		
   			if(data == 'y'){
   			
   		   			document.getElementById(id).innerHTML = "审核通过";
   		   		 var phone = $("#phone"+ids).text();
   		   		 //alert(123);
   		        xxoo(phone); 
   		  }
   		},error:function(){
   			alert('no');
   		}
   	});
   }
   
   function xxoo(phone){
  	 $.ajax({
          	url:"http://127.0.0.1/matouPCS/taobao-sdk-PHP-auto_1455552377940-20160607/newfile.php?phone="+phone,
          	type:"get",
          	success:function(phone){
          		alert('审核通过短信通知发送成功');
          	},error:function(){
          		alert('no');
          	}
          });  
   }
</script>
            </form>
        </div>
    </div>
    <!--/main-->
</div>

</body>
</html>