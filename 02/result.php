<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力フォーム</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <h1 id="title">お問い合わせ入力フォーム</h1>

    <table border="1">

<!--名前入力フォーム  -->
      <div id="form">
        <p>
          <class id="sub_title">お名前</class>
          <div id="in_form">
            お名前 <?php echo $_POST['name1'] . " " . $_POST['name2']; ?>
          </div>
        </p>
      </div>

  <!-- 性別入力フォーム -->
      <div id="form">
        <p>
          <class id="sub_title">性別</class>
          <div id="in_form">
            <?php echo $_POST['sexual'] ?>
          </div>
        </p>
      </div>

      <!-- 住所入力フォーム  -->
      <div id="form">
        <p>
          <class id="sub_title">ご住所</class>
          <div id="in_form">
            <?php echo "〒 " . $_POST['post1'] . "-" . $_POST['post2'] ?>
            <?php echo $_POST['address'] ?>
          </div>
        </p>
      </div>

      <!-- 電話番号入力フォーム  -->
      <div id="form">
        <p>
          <class id="sub_title">電話番号</class>
          <div id="in_form">
            <?php echo $_POST['phone1'] . $_POST['phone2'] . $_POST['phone3'] ?>
          </div>
        </p>
      </div>

      <!-- メールアドレス入力フォーム  -->
      <div id="form">
        <p>
          <class id="sub_title">メールアドレス</class>
          <div id="in_form">
            <?php echo $_POST['mail1'] . "@" . $_POST['mail2'] ?>
          </div>
        </p>
      </div>

      <!-- クレーム内容入力フォーム  -->
      <div id="form">
        <p>
          <class id="sub_title">
            よろしければ、どの点にご不満があったのかお聞かせください(複数回答可)
          </class>
          <div id="in_form">
            <?php echo $_POST['box'] ?>
          </div>
        </p>
      </div>

      <!-- 質問カテゴリ入力フォーム  -->
      <div id="form">
          <p>
            <class id="sub_title">どういった用件での問い合わせかね</class>
            <div id="in_form">
              <?php echo $_POST['select'] ?>
            </div>
          </br>
            <class id="sub_title">書いてねー。</class>
            <div id="in_form">
              <?php echo $_POST['textarea'] ?>
            </div>
          </p>
      </div>

      <!-- フォーム送信用ボタン -->
      <div id="form">
        <p>
          <div id="in_form">
            <input type="submit" value="ｧ(^。^)！">
          </div>
        </p>
      </div>
    </form>


  </body>
