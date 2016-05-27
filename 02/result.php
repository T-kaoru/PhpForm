<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>老人ホーム ～來來軒～ [内容確認]</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div id="body">
    <?php
        //Noticeエラー回避
        error_reporting(E_ALL & ~E_NOTICE);

        //セッション呼び出し
        session_start();

        //念押し
        function sany($a){
            $_data = array();
            foreach ($a as $key => $value) {
                if (is_array($value)) {
                    $_data[$key] = sany($value);
                }else{
                    $_data[$key] = htmlspecialchars($value, ENT_QUOTES);
                }
            }
            return $_data;
        }

        $data = sany($_SESSION);
        // var_dump($data);
        //
        $val = array(
            'sexual' => array(
                "男性", "女性", "不明"),
            'checkbox' => array(
                "眠かった", "疲れた", "お腹減った"),
            'select' => array(
                "null", "いい子だねー", "いい子でちゅね～", "ｱｰ、ﾖｼﾖｼﾖｼ")
            );
        $data['textarea'] = nl2br($data['textarea']);

        //ログ書き出し
        function output($a){
            $puttin = array();
            foreach ($a as $key => $value) {
                if (is_array($value)) {
                    $puttin[$key] = output($value);
                }else{
                    $output = $key . "  " . $value . "\n";
                    file_put_contents( "log.txt", $output, FILE_APPEND);
                }
            }
        }

        file_put_contents("log.txt", "---------------------------------\n", FILE_APPEND);
        output($data);

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
      <div class="form">
        <p>
          <div class="sub_title">ご住所</div>
          <div class="in_form">
            <?php
                if( !empty($data['post1'])){
                    echo "〒 " . $data['post1'] . "-" . $data['post2'];
                }else{
                    echo "(未記入)";
                }
            ?>
        </br>
            <?php
                if( !empty($data['address'])){
                    echo $data['address'];;
                }else{
                    echo "(未記入)";
                }
            ?>
          </div>
        </p>
      </div>

      <!-- 電話番号入力フォーム  -->
      <div class="form">
        <p>
          <div class="sub_title">電話番号</div>
          <div class="in_form">
            <?php
            if( !empty($data['phone1'])){
                echo $data['phone1'] . "-" . $data['phone2'] . "-" . $data['phone3'];
            }else{
                echo "(未記入)";
            }
             ?>
          </div>
        </p>
      </div>

      <!-- メールアドレス入力フォーム  -->
      <div class="form">
        <p>
          <div class="sub_title">メールアドレス</div>
          <div class="in_form">
            <?php
            if( !empty($data['mail1'])){
                echo $data['mail1'] . "@" . $data['mail2'];
            }else{
                echo "(未記入)";
            }
            ?>
          </div>
        </p>
      </div>

      <!-- クレーム内容入力フォーム  -->
      <div class="form">
        <p>
          <div class="sub_title">ご不満など</div>
          <div class="in_form">
            <?php
            if( !empty($data['box'])){
                foreach ($data['box'] as $key => $value) {
                    echo "<li>" . $val['checkbox'][($value)] . "</li>";
                }
            }else{
                echo "(未選択)";
            }
            ?>
          </div>
        </p>
      </div>

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
            <div id="textarea_put">
              <?php echo $data['textarea'] ?>
            </div>
            </div>
          </p>
      </div>

      <!-- フォーム送信用ボタン -->
      <div class="form">
        <p>
            <div class="button">
            <input type="submit" name="submit" value="ｧ(^｡^)！" onclick="history.back()">
          </div>
        </p>
      </div>
    </form>

</div>

  </body>
