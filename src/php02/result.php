<?php
// search_city_time.phpをresult.phpに読み込む
require_once('functions/search_city_time.php');
$tokyo = searchCityTime('東京');

$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
$comparison = searchCityTime($city);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
<!-- webサイトの互換モードを無効にして表示エラーを回避 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Clock</title>
  <!--  それぞれ、読み込む指示 -->
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/php02/index.php">
        World Clock
      </a>
    </div>
  </header>

  <main>
    <!-- 緑色のゾーンのクラス名　-->
    <div class="result__content">
      <!-- 黄色のゾーンのクラス名 -->
      <div class="result-cards">
        <!-- ピンクのゾーンのクラス名 -->
        <div class="result-card">
          <!-- ピンクゾーンに表示される国旗の画像 -->
          <div class="result-card__img-wrapper">
            <!-- 東京の国旗の画像を埋め込む -->
            <img class="result-card__img"
            <img class="result-card__img" src="img/<?php echo $tokyo['img']?>" alt="国旗">
          </div>
          <!-- 日本の国旗 -->
          <div class="result-card__body">
          <!-- 国旗の国の首都名 -->
            <p class="result-card__city">
              <?php echo $tokyo['name']?>
            </p>
            <!-- 国旗の国の時刻 -->
            <p class="result-card__time">
              <?php echo $tokyo['time']?>
            </p>
           </div>
          </div>
           <!-- 国旗② -->
          <div class="result-card">
          <div class="result-card__img-wrapper">
            <img class="result-card__img" src="img/<?php echo $comparison['img']?>" alt="国旗">
          </div>
          <div class="result-card__body">
            <p class="result-card__city">
              <?php echo $comparison['name']?>
            </p>
            <p class="result-card__time">
              <?php echo $comparison['time']?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>