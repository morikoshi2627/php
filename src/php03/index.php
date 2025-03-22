<?php
// config/status_codes.phpを読み込み
require_once('config/status_codes.php');
// status_codesからランダムに４つ取り出す！
$random_numbers = array_rand($status_codes, 4);
// ランダムに取得された配列から４回新しい配列に代入
foreach ($random_numbers as $index) {
$options[] = $status_codes[$index];
// 取り出した４つの配列から一つだけ正解を決めてquestionに代入
$question = $options[mt_rand(0, 3)];
}

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
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <!-- ヘッダー青ゾーン -->
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/php03/index.php">
        Status Code Quiz
      </a>
    </div>
  </header>

  <main>
    <!-- 黄緑ゾーン -->
    <div class="quiz__content">
      <!-- 黄色ゾーン -->
      <div class="question">
        <!-- 問題部分-->
        <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
        <p class="question__text">
          <?php echo $question['description'] ?>
        </p>
      </div>
      <!-- 回答欄　result.phpへデータ送信 -->
      <form class="quiz-form" action="result.php" method="post">
        <!-- answer_codeはphpで使用するクラス（解答のステータスコード） -->
         <!-- 解答となるデータを送信（hiddenで表示せずに送信しないと答えが出ちゃう！ -->
        <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">

        <div class="quiz-form__item">
          <?php foreach ($options as $option): ?>
          <div class="quiz-form__group">
            <!-- optionはphpで使用するクラス（option=ランダムで選ばれた後の説明文）-->
            <input class="quiz-form__radio" id="<?php echo $option['code'] ?>" type="radio" name="option" value="<?php echo $option['code'] ?>">
            <label class="quiz-form__label" for="<?php echo $option['code'] ?>">
           <?php echo $option['code'] ?>
          </label>
          </div>
            <?php endforeach; ?>
        </div>
        <!-- 回答ボタン -->
        <div class="quiz-form__button">
          <button class="quiz-form__button-submit" type="submit">
            回答
          </button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>