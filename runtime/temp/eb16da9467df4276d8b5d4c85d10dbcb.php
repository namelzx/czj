<?php /*a:1:{s:83:"/Users/jon/Documents/项目汇总/车自主/application/admin/view/index/excel.html";i:1545549147;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>上传excel</title>
</head>
<body>
<form action="<?php echo url('index/excel'); ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="excel" />
    <input type="submit" value="提交"/>
</form>
</body>
</html>