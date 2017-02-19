<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin([
    'action' =>'?r=index/lists',
    'method'=>'get',
]); ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="css/pintuer.css">
<link rel="stylesheet" href="css/admin.css">
<script src="js/jquery.js"></script>
<script src="js/pintuer.js"></script>
</head>
<body>
<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
<!--        <li> <a class="button border-main icon-plus-square-o" href="add.html"> 添加内容</a> </li>-->
<!--        <li>搜索：</li>-->
<!--        <li>首页-->
<!--          <select name="s_ishome" class="input" onchange="changesearch()" style="width:60px; line-height:17px; display:inline-block">-->
<!--            <option value="">选择</option>-->
<!--            <option value="1">是</option>-->
<!--            <option value="0">否</option>-->
<!--          </select>-->
<!--          &nbsp;&nbsp;-->
<!--          推荐-->
<!--          <select name="s_isvouch" class="input" onchange="changesearch()"  style="width:60px; line-height:17px;display:inline-block">-->
<!--            <option value="">选择</option>-->
<!--            <option value="1">是</option>-->
<!--            <option value="0">否</option>-->
<!--          </select>-->
<!--          &nbsp;&nbsp;-->
<!--          置顶-->
<!--          <select name="s_istop" class="input" onchange="changesearch()"  style="width:60px; line-height:17px;display:inline-block">-->
<!--            <option value="">选择</option>-->
<!--            <option value="1">是</option>-->
<!--            <option value="0">否</option>-->
<!--          </select>-->
<!--        </li>-->
<!--        <if condition="$iscid eq 1">-->
<!--          <li>-->
<!--            <select name="cid" class="input" style="width:200px; line-height:17px;" onchange="changesearch()">-->
<!---->
<!--              <option value="">请选择分类</option>-->
<!---->
<!--              <option value="">产品分类</option>-->
<!--              <option value="">产品分类</option>-->
<!--              <option value="">产品分类</option>-->
<!--              <option value="">产品分类</option>-->
<!--            </select>-->
<!--          </li>-->
<!--        </if>-->
<!--        <li>-->

              <input type="text" placeholder="请输入搜索关键字" name="sou" class="input" style="width:250px; line-height:17px;display:inline-block" value="<?php echo $search?>" />
<!--              <a href="?r=index/lists" class="button border-main icon-search" > 搜索</a>-->
              <button class="button bg-main icon-check-square-o" type="submit"> 搜索</button>


      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">ID</th>
<!--        <th width="10%"></th>-->
        <th>分类名称</th>
        <th>pid</th>
        <th>描述</th>
<!--        <th>分类名称</th>-->
<!--        <th width="10%">更新时间</th>-->
        <th width="310">操作</th>
      </tr>
      <volist name="list" id="vo">
          <?php
          foreach($arr as $k=>$v){
             echo "<tr>";
//          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />
//           1</td>
//          <td><input type="text" name="sort[1]" value="1" style="width:50px; text-align:center; border:1px solid #ddd; padding:7px 0;" /></td>
//          <td width="10%"><img src="images/11.jpg" alt="" width="70" height="50" /></td>
//          <td>这是一套MUI后台精美管理系统，感谢您的支持</td>
//<!--          <td><font color="#00CC99">首页</font></td>-->
//          <td>产品分类</td>
          echo "<td>$v[cate_id]</td>";
          echo "<td class='ll'><span class='ls'>$v[title]</span></td>";
          echo "<td>$v[pid]</td>";
          echo "<td>$v[c_desc]</td>";
         echo "<td><div class='button-group'><a class='button border-red' href='?r=index/del&id=$v[cate_id]'><span class='icon-trash-o'></span> 删除</a> </div></td>";
       echo "</tr>";
          };
          ?>

<!--   		 <tr>-->
<!--          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />-->
<!--           1</td>-->
<!--          <td><input type="text" name="sort[1]" value="1" style="width:50px; text-align:center; border:1px solid #ddd; padding:7px 0;" /></td>-->
<!--          <td width="10%"><img src="images/11.jpg" alt="" width="70" height="50" /></td>-->
<!--          <td>这是一套MUI后台精美管理系统，感谢您的支持</td>-->
<!--          <td><font color="#00CC99">首页</font></td>-->
<!--          <td>产品分类</td>-->
<!--          <td>2016-07-01</td>-->
<!--          <td><div class="button-group"> <a class="button border-main" href="add.html"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>-->
<!--        </tr>-->
<!--         <tr>-->
<!--          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />-->
<!--           1</td>-->
<!--          <td><input type="text" name="sort[1]" value="1" style="width:50px; text-align:center; border:1px solid #ddd; padding:7px 0;" /></td>-->
<!--          <td width="10%"><img src="images/11.jpg" alt="" width="70" height="50" /></td>-->
<!--          <td>这是一套MUI后台精美管理系统，感谢您的支持</td>-->
<!--          <td><font color="#00CC99">首页</font></td>-->
<!--          <td>产品分类</td>-->
<!--          <td>2016-07-01</td>-->
<!--          <td><div class="button-group"> <a class="button border-main" href="add.html"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>-->
<!--        </tr>-->
<!--         <tr>-->
<!--          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />-->
<!--           1</td>-->
<!--          <td><input type="text" name="sort[1]" value="1" style="width:50px; text-align:center; border:1px solid #ddd; padding:7px 0;" /></td>-->
<!--          <td width="10%"><img src="images/11.jpg" alt="" width="70" height="50" /></td>-->
<!--          <td>这是一套MUI后台精美管理系统，感谢您的支持</td>-->
<!--          <td><font color="#00CC99">首页</font></td>-->
<!--          <td>产品分类</td>-->
<!--          <td>2016-07-01</td>-->
<!--          <td><div class="button-group"> <a class="button border-main" href="add.html"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>-->
<!--        </tr>-->
<!--         <tr>-->
<!--          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />-->
<!--           1</td>-->
<!--          <td><input type="text" name="sort[1]" value="1" style="width:50px; text-align:center; border:1px solid #ddd; padding:7px 0;" /></td>-->
<!--          <td width="10%"><img src="images/11.jpg" alt="" width="70" height="50" /></td>-->
<!--          <td>这是一套MUI后台精美管理系统，感谢您的支持</td>-->
<!--          <td><font color="#00CC99">首页</font></td>-->
<!--          <td>产品分类</td>-->
<!--          <td>2016-07-01</td>-->
<!--          <td><div class="button-group"> <a class="button border-main" href="add.html"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>-->
<!--        </tr>-->
<!--         <tr>-->
<!--          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" />-->
<!--           1</td>-->
<!--          <td><input type="text" name="sort[1]" value="1" style="width:50px; text-align:center; border:1px solid #ddd; padding:7px 0;" /></td>-->
<!--          <td width="10%"><img src="images/11.jpg" alt="" width="70" height="50" /></td>-->
<!--          <td>这是一套MUI后台精美管理系统，感谢您的支持</td>-->
<!--          <td><font color="#00CC99">首页</font></td>-->
<!--          <td>产品分类</td>-->
<!--          <td>2016-07-01</td>-->
<!--          <td><div class="button-group"> <a class="button border-main" href="add.html"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>-->
<!--        </tr>-->
<!--      <tr>-->
<!--        <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>-->
<!--          全选 </td>-->
<!--        <td colspan="7" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red icon-trash-o" style="padding:5px 15px;" onclick="DelSelect()"> 删除</a> <a href="javascript:void(0)" style="padding:5px 15px; margin:0 10px;" class="button border-blue icon-edit" onclick="sorts()"> 排序</a> 操作：-->
<!--          <select name="ishome" style="padding:5px 15px; border:1px solid #ddd;" onchange="changeishome(this)">-->
<!--            <option value="">首页</option>-->
<!--            <option value="1">是</option>-->
<!--            <option value="0">否</option>-->
<!--          </select>-->
<!--          <select name="isvouch" style="padding:5px 15px; border:1px solid #ddd;" onchange="changeisvouch(this)">-->
<!--            <option value="">推荐</option>-->
<!--            <option value="1">是</option>-->
<!--            <option value="0">否</option>-->
<!--          </select>-->
<!--          <select name="istop" style="padding:5px 15px; border:1px solid #ddd;" onchange="changeistop(this)">-->
<!--            <option value="">置顶</option>-->
<!--            <option value="1">是</option>-->
<!--            <option value="0">否</option>-->
<!--          </select>-->
<!--          &nbsp;&nbsp;&nbsp;-->
<!--          -->
<!--          移动到：-->
<!--          <select name="movecid" style="padding:5px 15px; border:1px solid #ddd;" onchange="changecate(this)">-->
<!--            <option value="">请选择分类</option>-->
<!--            <option value="">产品分类</option>-->
<!--            <option value="">产品分类</option>-->
<!--            <option value="">产品分类</option>-->
<!--            <option value="">产品分类</option>-->
<!--          </select>-->
<!--          <select name="copynum" style="padding:5px 15px; border:1px solid #ddd;" onchange="changecopy(this)">-->
<!--            <option value="">请选择复制</option>-->
<!--            <option value="5">复制5条</option>-->
<!--            <option value="10">复制10条</option>-->
<!--            <option value="15">复制15条</option>-->
<!--            <option value="20">复制20条</option>-->
<!--          </select></td>-->
<!--      </tr>-->
<!--      <tr>-->
<!--        <td colspan="8"><div class="pagelist"> <a href="">上一页</a> <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a> </div></td>-->
<!--      </tr>-->
    </table>
      <?= LinkPager::widget([
          'pagination'=>$pages,
      ]) ?>
      <?php ActiveForm::end(); ?>
  </div>
</form>
<script src="jquery-1.9.1.min.js"></script>
<script type="text/javascript">

    $(document).on('click','.ls',function(){
           var id=$(this).parent().prev().text();
           var name=$(this).html();
           $(this).parent().html('<input ids="'+id+'" type="text" value="'+name+'" class="aa">');
        $(document).on('blur','.aa',function(){
            var name1=$(this).val();
            var id=$(this).attr('ids');
            if(name==name1){
                $('.aa').parent().html('<span class="ls">' + name + '</span>');
            }else {
                $.ajax({
                    type: 'post',
                    url: '?r=index/up',
                    data: {
                        id: id,
                        val: name1
                    },
                    success: function (msg) {
                        if (msg == 1) {
                            $('.aa').parent().html('<span class="ls">' + name1 + '</span>');
                        }
                    }
                })
            }
        })

    })


//搜索
function changesearch(){	
		
}

//单个删除
function del(id,mid,iscid){
	if(confirm("您确定要删除吗?")){
		
	}
}

//全选
$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

//批量删除
function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false;		
		$("#listform").submit();		
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

//批量排序
function sorts(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		return false;
	}
}


//批量首页显示
function changeishome(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}

//批量推荐
function changeisvouch(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");	
		
		return false;
	}
}

//批量置顶
function changeistop(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();	
	}
	else{
		alert("请选择要操作的内容!");		
	
		return false;
	}
}


//批量移动
function changecate(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){		
		
		$("#listform").submit();		
	}
	else{
		alert("请选择要操作的内容!");
		
		return false;
	}
}

//批量复制
function changecopy(o){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){	
		var i = 0;
	    $("input[name='id[]']").each(function(){
	  		if (this.checked==true) {
				i++;
			}		
	    });
		if(i>1){ 
	    	alert("只能选择一条信息!");
			$(o).find("option:first").prop("selected","selected");
		}else{
		
			$("#listform").submit();		
		}	
	}
	else{
		alert("请选择要复制的内容!");
		$(o).find("option:first").prop("selected","selected");
		return false;
	}
}

</script>
</body>
</html>