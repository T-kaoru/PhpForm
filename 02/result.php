<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>老人ホーム ～來來軒～ [内容確認]</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php
        //セッション呼び出し
        session_start();
        $data = array();
        foreach ($_SESSION as $key => $value) {
            $data[$key] = $value;
        }
        // var_dump($data);
     ?>
    <h1 id="title">お問い合わせ 内容確認</h1>

    <table border="1">

<!--名前入力フォーム  -->
      <div id="form">
        <p>
          <class="sub_title">お名前</class>
          <div id="in_form">
            <?php echo $data['name1'] . " " . $data['name2']; ?>
          </div>
        </p>
      </div>

  <!-- 性別入力フォーム -->
      <div id="form">
        <p>
          <class="sub_title">性別</class>
          <div id="in_form">
            <?php echo $data['sexual'] ?>
          </div>
        </p>
      </div>

      <!-- 住所入力フォーム  -->
      <div id="form">
        <p>
          <class="sub_title">ご住所</class>
          <div id="in_form">
            <?php
                // if( echo "〒 " . $data['post1'] . "-" . $data['post2'] ?>
            <?php echo $data['address'] ?>
          </div>
        </p>
      </div>

      <!-- 電話番号入力フォーム  -->
      <div id="form">
        <p>
          <class="sub_title">電話番号</class>
          <div id="in_form">
            <?php echo $data['phone1'] . $data['phone2'] . $data['phone3'] ?>
          </div>
        </p>
      </div>

      <!-- メールアドレス入力フォーム  -->
      <div id="form">
        <p>
          <class="sub_title">メールアドレス</class>
          <div id="in_form">
            <?php echo $data['mail1'] . "@" . $data['mail2'] ?>
          </div>
        </p>
      </div>

      <!-- クレーム内容入力フォーム  -->
      <div id="form">
        <p>
          <class="sub_title">
            よろしければ、どの点にご不満があったのかお聞かせください(複数回答可)
          </class>
          <div id="in_form">
            <?php echo $data['box'] ?>
          </div>
        </p>
      </div>

      <!-- 質問カテゴリ入力フォーム  -->
      <div id="form">
          <p>
            <class="sub_title">どういった用件での問い合わせかね</class>
            <div id="in_form">
              <?php echo $data['select'] ?>
            </div>
          </br>
            <class="sub_title">書いてねー。</class>
            <div id="in_form">
              <?php echo $data['textarea'] ?>
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
