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

        $val = array(
            'sexual' => array(
                "男性", "女性", "不明"),
            'checkbox' => array(
                "眠かった", "疲れた", "お腹減った"),
            'select' => array(
                "null", "いい子だねー", "いい子でちゅね～", "ｱｰ、ﾖｼﾖｼﾖｼ")
            );
        $data['textarea'] = nl2br($data['textarea']);

     ?>
    <h1 id="title">お問い合わせ 内容確認</h1>

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
            <?php echo $val['sexual'][($data['sexual'])] ?>
          </div>
        </p>
      </div>

      <!-- 住所入力フォーム  -->
      <?php
        if( strlen($data['post1'])){
        ?>
      <div class="form">
        <p>
          <div class="sub_title">ご住所</div>
          <div class="in_form">
            <?php echo "〒 " . $data['post1'] . "-" . $data['post2']; ?>
        </br>
            <?php echo $data['address']; ?>
          </div>
        </p>
      </div>
      <?php
    }
    ?>

      <!-- 電話番号入力フォーム  -->
      <?php
        if( strlen($data['phone1'])){
        ?>
      <div class="form">
        <p>
          <div class="sub_title">電話番号</div>
          <div class="in_form">
            <?php echo $data['phone1'] . "-" . $data['phone2'] . "-" . $data['phone3'] ?>
          </div>
        </p>
      </div>
      <?php
    }
    ?>

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
      <?php
        if( isset($data['box'])){
        ?>
      <div class="form">
        <p>
          <div class="sub_title">ご不満など</div>
          <div class="in_form">
            <?php
                foreach ($data['box'] as $key => $value) {
                    echo "<li>" . $val['checkbox'][($value)] . "</li>";
                 }
                ?>
          </div>
        </p>
      </div>
      <?php
    }
    ?>

      <!-- 質問カテゴリ入力フォーム  -->
      <div class="form">
          <p>
            <div class="sub_title">ご用件</div>
            <div class="in_form">
              <?php echo $val['select'][($data['select'])] ?>
            </div>
          </br>
            <div class="sub_title">ご意見</div>
            <div class="in_form">
            <div class="test">
              <?php echo $data['textarea'] ?>
            </div>
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
