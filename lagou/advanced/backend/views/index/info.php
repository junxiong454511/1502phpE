<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>  
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>  
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="?r=index/list">
      <div class="form-group">
        <div class="label">
          <label>职位分类：</label>
        </div>
        <div class="field">
            <select name="cid" class="input" style="width:200px; line-height:17px;" onchange="changesearch()">

                <option value="">请选择分类</option>
             <?php
             foreach($res as $k=>$v){
                 echo "<option value='$v[cate_id]'>".str_repeat('　',$v['lev'])."$v[title]</option>";
             }
             ?>
            </select>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>职位名称：</label>
        </div>
          <input type="text" class="input" name="title" value="" />
        <div class="field">

        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>职位描述：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="desc" value="" />
        </div>
      </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>