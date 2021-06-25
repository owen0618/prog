<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>選手データ一覧</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">選手データ登録</a></div>
    </div>
    
    <div class="img">
    <h1 class='img'><img src='img/jfa.jpg' alt=''><h1>

    <style type="stylesheet">
    img.example1 {
      width: 96px;
      height: 65px;
    }
    </style>

    


  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここからinsert.phpにデータを送ります -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>選手データ登録</legend>
     <label>選手名：<input type="text" name="name"></label><br>
     <label>ポジション：<input type="text" name="position"></label><br>
     <label><textArea name="strong" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
