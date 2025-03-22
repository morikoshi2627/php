<!--   http://localhost/php000/index2.php   -->

<?php

require_once('config2/status_codes2.php');

$random_numbers = array_rand($status_codes, 4);

// random_numbersはランダムに取り出した４つのキー、indexはその４つのキーの配列番号（０〜１０）、optionsへ４つ代入
foreach ($random_numbers as $index) {
  $options[] = $status_codes[$index];
}
$question = $options[mt_rand(0, 3)];


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <!-- 常に最新のエンジンを使うようにIEに指示するためのメタタグ -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>
  <link rel="stylesheet" href="css/sanitize2.css">
  <link rel="stylesheet" href="css/common2.css">
  <link rel="stylesheet" href="css/index2.css">
</head>

<body>
<header class="header">
  <div class="header__inner">
    <a class="header__logo" href="/php000/index2.php">
      Status Code Quiz
    </a>
  </div>
</header>

<main>
<div class="quiz__content">
  <div class="question">
    <p class="question__text">Q.以下の内容に当てはまるステータスコードを選んでください </p>
     <p class="question__text">
      <?php echo $question['description']?>
     </p>
      </div>
        <div class="quiz-form">
          <form class="quiz-form" action="/php000/result2.php" method="post">
            <input type="hidden" name="answer_code" value="<?php echo $question['code']?>"">
              <div class="quiz-form__item">
                <?php foreach ($options as $option): ?>
                 <div class="quiz-form__group">
                  <input class="quiz-form__radio" id="<?php echo $option['code']?>" type="radio" name="option" value="<?php echo $option['code']?>">
                  <label class="quiz-form__label" for="<?php echo $option['code']?>">
                  <?php echo $option['code'] ?>
                </label>
                 </div>
                 <?php endforeach; ?>
                </div>
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