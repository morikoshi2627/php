<?php

require_once('config/status_codes.php');
// answer_codeとoptionをコードをテキストとして表示させる
$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);
// もしoptionが正しく送信されなかった時の処理
if (!$option) {
  header('Location: index.php');
}
// foreachでstatus_codesを一つずつ分解→解答コードと配列が合致した時のみ必要となるデータを取得
foreach ($status_codes as $status_code) {
  if ($status_code['code'] === $answer_code) {
    $code = $status_code['code'];
    $description = $status_code['description'];
  }
}
  // 変数 option と変数 code が合致したものを変数 resultとする
$result = $option === $code;

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="./index.php">
        Status Code Quiz
      </a>
    </div>
  </header>
  
  <main>
    <!-- 緑（main)ゾーン -->
    <div class="result__content">
      <!-- 黄色（正解・不正解）ゾーン もしresultなら正解、elseなら不正解-->
    <div class="result">
        <?php if ($result): ?>
        <h2 class="result__text--correct">正解</h2>
        <?php else: ?>
        <h2 class="result__text--incorrect">不正解</h2>
         <?php endif; ?>
      </div>
      <!-- ピンクゾーン(tableタグで表) -->
      <div class="answer-table">
        <table class="answer-table__inner">
          <tr class="answer-table__row">
            <th class="answer-table__header">ステータスコード</th>
            <td class="answer-table__text">
              <!-- 正解を表示する処理 -->
            　<?php echo $code?>
            </td>
          </tr>
          <tr class="answer-table__row">
            <th class="answer-table__header">説明</th>
            <td class="answer-table__text">
              <!-- 不正解を表示する処理 -->
              <?php echo $description?>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </main>
</body>

</html>