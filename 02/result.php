<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>老人ホーム ～來來軒～ [内容確認]</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div id="body">
    <?php
        //セッション呼び出し
        session_start();
        $data = array();
        foreach ($_SESSION as $key => $value) {
            $data[$key] = $value;
        }
        var_dump($data);
     ?>
    <h1 id="title">お問い合わせ 内容確認</h1>

    <table border="1">

<!--名前入力フォーム  -->
      <div class="form">
        <p>
          <div class="sub_title">お名前</div>
          <div class="in_form">
            <?php echo $data['name1'] . " " . $data['name2']; ?>
          </div>
        </p>
      </div>

  <!-- 性別入力フォーム -->
      <div class="form">
        <p>
          <div class="sub_title">性別</div>
          <div class="in_form">
            <?php echo $data['sexual'] ?>
          </div>
        </p>
      </div>

      <!-- 住所入力フォーム  -->
      <div class="form">
        <p>
          <div class="sub_title">ご住所</div>
          <div class="in_form">
            <?php
                // if( echo "〒 " . $data['post1'] . "-" . $data['post2'] ?>
            <?php echo $data['address'] ?>
          </div>
        </p>
      </div>

      <!-- 電話番号入力フォーム  -->
      <div class="form">
        <p>
          <div class="sub_title">電話番号</div>
          <div class="in_form">
            <?php echo $data['phone1'] . $data['phone2'] . $data['phone3'] ?>
          </div>
        </p>
      </div>

      <!-- メールアドレス入力フォーム  -->
      <div class="form">
        <p>
          <div class="sub_title">メールアドレス</div>
          <div class="in_form">
            <?php echo $data['mail1'] . "@" . $data['mail2'] ?>
          </div>
        </p>
      </div>

      <!-- クレーム内容入力フォーム  -->
      <div class="form">
        <p>
          <div class="sub_title">
            よろしければ、どの点にご不満があったのかお聞かせください(複数回答可)
          </div>
          <div class="in_form">
            <?php
                 if(in_array("box", $data)){
                    foreach ($data['box'] as $key => $value) {
                        echo $value;
                    }
                 }
                ?>
          </div>
        </p>
      </div>

      <!-- 質問カテゴリ入力フォーム  -->
      <div class="form">
          <p>
            <div class="sub_title">どういった用件での問い合わせかね</div>
            <div class="in_form">
              <?php echo $data['select'] ?>
            </div>
          </br>
            <div class="sub_title">書いてねー。</div>
            <div class="in_form">
              <?php echo $data['textarea'] ?>
            </div>
          </p>
      </div>

      <!-- フォーム送信用ボタン -->
      <div class="form">
        <p>
          <div class="in_form">
            <input type="submit" name="submit" value="ｧ(^｡^)！" onclick="history.back()">
          </div>
        </p>
      </div>
    </form>

</div>
  </body>
