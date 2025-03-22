<!__バージョンを宣言__>
<!DOCTYPE html>
<!-- 要素内は日本語で表記 -->
<html lang="ja">
<head>
  <!-- 文字コード指定、文字化け防止 -->
  <meta charset="UTF-8">
  <!--　InternetExplorer(IE)に対し互換性のモードを指定可能　-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- 表示領域を指定（その端末画面の幅に合わせて） -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- タイトルバー表示や検索結果のタイトル等、このページのタイトル -->
  <title>World Clock</title>
  <!-- sanitize.cssを読み込む指示 -->
  <link rel="stylesheet" href="css/sanitize.css">
  <!-- common.cssを読み込む指示 -->
  <link rel="stylesheet" href="css/common.css">
  <!-- index.cssを読み込む指示 -->
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <!-- ヘッダー全体のクラス名 -->
  <header class="header">
    <!-- ヘッダーのクラス名 -->
    <div class="header__inner">
      <!-- World Clockをクリック→index.phpへリンク -->
       <a class="header__logo" href="/php02/index.php">
        World Clock
      </a>
    </div>
  </header>

  <main>
    <!-- 日本と世界の時間を比較 のブロック -->
    <div class="search-form__content">
      <div class="search-form__heading">
        <h2>日本と世界の時間を比較</h2>
    </div>
    <!-- result.phpへGETでデータを送信する -->
      <form class="search-form" action="result.php" method="get">
      <!-- ラジオボタンのブロック -->
        <div class="search-form__item">
        <!-- セレクトボックス作成 -->
          <select class="search-form__item-select" name="city">
          <!-- 送信する値を指示（セレクトボックスの選択肢 -->
            <option value="シドニー">シドニー</option>
            <option value="上海">上海</option>
            <option value="モスクワ">モスクワ</option>
            <option value="ロンドン">ロンドン</option>
            <option value="ヨハネスブルグ">ヨハネスブルグ</option>
            <option value="ニューヨーク">ニューヨーク</option>
          </select>
        </div>
      <!-- 検索ボタン作成ブロック -->
      <div class="search-form__button">
        <!-- 送信ボタン→”検索ボタン”に -->
          <button class="search-form__button-submit" type="submit">
            検索
          </button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
