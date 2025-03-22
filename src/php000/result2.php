<!--   http://localhost/php000/result2.php   -->

<?php

require_once('config2/status_codes2.php');

$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);

if (!$option) {
  header('Location: index2.php');
}

foreach ($status_codes as $status_code) {
  if ($status_code['code'] === $answer_code) {
    $code = $status_code['code'];
    $description = $status_code['description'];
  }
}

$result = $option === $code;

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>
  <link rel="stylesheet" href="css/sanitize2.css">
  <link rel="stylesheet" href="css/common2.css">
  <link rel="stylesheet" href="css/result2.css">
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
    <div class="result__content">
      <div class="result">
        <?php if($result): ?>
       <h2 class="result__text--correct">正解</h2>
       <?php else: ?>
         <h2 class="result__text--incorrect">不正解</h2>
         <?php endif; ?>
      </div>
          <div class="answer-table">
            <table class="answer-table__inner">
              <tr class="answer-table__row">
                <th class="answer-table__header">ステ-タスコード</th>
                  <td class="answer-table__text">
                    <?php echo $code ?>
                  </td>
              </tr>
              <tr class="answer-table__row">
                <th class="answer-table__header">説明</th>
                  <td class="answer-table__text">
                    <?php echo $description ?>
                  </td>
              </tr>
        </table>
       </div>
    </div>
  </main>
</body>
</html>