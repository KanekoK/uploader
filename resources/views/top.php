<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>アップローダー</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>画像アップローダー</h1>
<form id="form" method="post" action="upload" enctype="multipart/form-data">
  <dl class="form_wrapper clearfix">
    <div class="form_block">
      <dt><label for="img01">画像1</label></dt>
      <dd>
        <input type="file" name="img01">
        <div id="preview01" class="preview">
          <img src="" alt="画像1プレビュー" class="no_display">
        </div>
      </dd>
    </div>
    <div class="form_block">
      <dt><label for="img02">画像2</label></dt>
      <dd>
        <input type="file" name="img02">
        <div id="preview02" class="preview">
          <img src="" alt="画像2プレビュー" class="no_display">
        </div>
      </dd>
    </div>
    <div class="form_block">
      <dt><label for="img03">画像3</label></dt>
      <dd>
        <input type="file" name="img03">
        <div id="preview03" class="preview">
          <img src="" alt="画像3プレビュー" class="no_display">
        </div>
      </dd>
    </div>
  </dl>
  <div class="form_button">
    <input type="submit" id="submit" value="送信する">
  </div>
  <div class="message no_display">アップロードしました。</div>
</form>

<script src="js/all.min.js"></script>
</body>
</html>