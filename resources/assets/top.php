<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>アップローダー</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>画像アップローダー</h1>
<form id="form" method="post" action="upload" enctype="multipart/form-data">
  <dl>
    <dt><label for="img01">画像1</label></dt>
    <dd><input type="file" name="img01"></dd>
<!--     <dt><label for="img02">画像2</label></dt>
    <dd><input type="file" name="img02"></dd>
    <dt><label for="img03">画像3</label></dt>
    <dd><input type="file" name="img03"></dd> -->
    <input type="submit" id="submit" value="送信する">
  </dl>
</form>
<div id="preview"></div>
<script src="js/all.min.js"></script>
</body>
</html>