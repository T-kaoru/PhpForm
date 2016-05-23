<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>老人ホーム ～籠ノ鳥～ [入力フォーム]</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php
        // サニタイジング処理。一括処理を目的とした再起処理関数。
        function sany($a){
            $_data = array();
            foreach ($a as $key => $value) {
                if (is_array($value)) {
                    $_data[$key] = sany($value);
                }else{
                    $_data[$key] = htmlspecialchars($value);
                }
            }
            return $_data;
        }
        function error_echo($a){
            switch ($a) {
                case 1:
                    echo "未入力です";
                    break;
                case 2:
                    echo "不正な値です";
                    break;
                case 3:
                    echo "は？";
                    break;
                default:
                    break;
            }
        }
        // var_dump($_POST);
     ?>
  <h1 id="title">お問い合わせ 入力フォーム</h1>

  <div class="messeages">
      <p>
          <div id="default_msg">
              意見ください。お願いします。</br>
              必須マーク付いてる部分は必ず入力しないと怒られます。
          </div>
          <?php
          //エラーチェックとエラー文出力PHP。OKだったら通過できる。
                if( isset( $_POST['submit'] )){
                    echo '<div id="error_msg">';
                    $error = array();
                    $error_flg = 0;

                    //nameチェック
                    if(!strlen($_POST['name1']) || !strlen($_POST['name2'])){
                        $error['name'] = 1;
                    }
                    if(!isset( $_POST['sexual'] )){
                        $error['saxual'] = 1;
                    }
                    if(!strlen($_POST['mail1']) || !strlen($_POST['mail2'])){
                        $error['mail'] = 1;
                    }
                    //エラーチェック判定。
                    foreach ($error as $key => $value) {
                        if ($value > 0){
                            $error_flg = 1;
                            break;
                        }
                    }
                    if ( isset( $_POST['submit'] ) && $error_flg === 0 ){
                        session_start();
                        $_SESSION = sany($_POST);
                        header("Location: ./result.php");
                        exit;
                    }else{
                        echo "未入力、または入力に誤りがある項目があります！";
                    }
                    echo '</div>';
                }
             ?>
        </p>
    </div>

<!--名前入力フォーム  -->
    <form action="contact.php" method="post">
      <div class="form">
        <p>
          <div class="sub_title">お名前<span class="cns">必須</span>
          <div class="desc">姓の欄に苗字、名の欄に名前を記入して下さい。</div>
      </div>
          <div class="in_form">
            姓:<input type="textbox" name="name1" size="10" required placeholder="田中">
            <?php
                if( isset($_POST['submit']) && !strlen($_POST['name1'])){
                    echo "ここ";
                }
             ?>
            <!-- セイ<input type="textbox" name="kana1" size="6"　placeholder="タナカ"> -->
        </br>
            名:<input type="textbox" name="name2" size="10" required placeholder="太郎">
            <?php
                if( isset($_POST['submit']) && !strlen($_POST['name2'])){
                    echo "ここ";
                }
            ?>
            <!-- メイ<input type="textbox" name="kana2" size="6" placeholder="タロウ"> -->
          </div>
        </p>
      </div>

  <!-- 性別入力フォーム -->
      <div class="form">
        <p>
          <div class="sub_title">性別<span class="cns">必須</span>
          <div class="desc">性別に違和感のある方や、無性生物の方は「不明」を選択して下さい。</div>
      </div>
          <div class="in_form">
            <input type="radio" name="sexual" id="sexual1" value="男" /><label for="sexual1">:男</lavel>
            <input type="radio" name="sexual" id="sexual2" value="女" /><label for="sexual2">:女</lavel>
            <input type="radio" name="sexual" id="sexual3" value="不明" required /><label for="sexual3">:不明</lavel>
                <?php
                    if( isset($_POST['submit']) && !strlen($_POST['name2'])){
                        echo "両性だった？";
                    }
                ?>
          </div>
        </p>
      </div>

      <!-- 住所入力フォーム  -->
      <div class="form">
        <p>
          <div class="sub_title">郵便番号</br>
          <div class="desc">3ケタ、4ケタの数字をそれぞれ入力してください。</div></div>
          <div class="in_form">
            <input type="textbox" name="post1" size="1" pattern="\d{3}" placeholder="100">
            - <input type="textbox" name="post2" size="1" pattern="\d{4}" placeholder="0005">
          </div>
          <div class="nonline_form">
              <div class="to_float"></div>
              <div class="sub_title">住所
              <div class="desc">現在お住まいの住所をご記入下さい。</div>
          </div>
              <div class="in_form">
                  <input type="textbox" name="address" size="70"
                  placeholder="東京都千代田区丸の内1-8-3 丸の内トラストタワー本館5階">
              </div>
          </p>
        </div>
    </div>

      <!-- 電話番号入力フォーム  -->
      <div class="form">
        <p>
          <div class="sub_title">電話番号
          <div class="desc">適切なケタ数の数字のみで入力してください。</div>
      </div>
          <div class="in_form">
            <input type="textbox" name="phone1" size="1" pattern="\d{2,4}" placeholder="03">
            ( <input type="textbox" name="phone2" size="1" pattern="\d{3,4}" placeholder="3286">
            ) <input type="textbox" name="phone3" size="1" pattern="\d{3,4}" placeholder="7887">
          </div>
        </p>
      </div>

      <!-- メールアドレス入力フォーム  -->
      <div class="form">
        <p>
          <div class="sub_title">メールアドレス<span class="cns">必須</span>
          <div class="desc">@(あっとまーく)区切りでご記入下さい。</div>
      </div>
          <div class="in_form">
            <input type="textbox" name="mail1" size="20" required placeholder="sample">
            @ <input type="textbox" name="mail2" size="20" required placeholder="example.com">
            <?php
                if( isset($_POST['submit'])){
                    if(!strlen($_POST['mail1']) && !strlen($_POST['mail2'])){
                        echo "ヨロシク＾＾";
                    }elseif(!strlen($_POST['mail1'])){
                        echo "ホスト名ないんだけど？？？";
                    }elseif(!strlen($_POST['mail2'])){
                        echo "ドメイン名おかしくね？？？";
                    }
                }
            ?>
          </div>
        </p>
      </div>

      <!-- クレーム内容入力フォーム  -->
      <div class="form">
        <p>
          <div class="sub_title">ご不満など
          <div class="desc">当てはまるものを選択してください。</div>
          <div class="desc">(複数回答可)</div>
        </div>
          <div class="in_form">
            <input type="checkbox" name="box" id="box1" value="box1"><label for="box1">: 眠かった</lavel>
            <input type="checkbox" name="box" id="box2" value="box2"><label for="box2">: 疲れた</lavel>
            <input type="checkbox" name="box" id="box3" value="box3"><label for="box3">: お腹減った</lavel>
          </div>
        </p>
      </div>

      <!-- 質問カテゴリ入力フォーム  -->
      <div class="form">
          <p>
            <div class="sub_title">ご用件<span class="cns">必須</span>
            <div class="desc">用件の内容を選択して下さい。</div>
        </div>
            <div class="in_form">
              <select name="select" required>
                  <option value="select0">-- 選択してください --</option>
                <option value="select1">いい子だねー</option>
                <option value="select2">いい子でちゅね～</option>
                <option value="select3">ｱｰ、ﾖｼﾖｼﾖｼ</option>
              </select>
            </div>
          <div class="to_float"></div>
      </br>
            <div class="sub_title">ご意見ボックス<span class="cns">必須</span>
            <div class="desc">1000文字以内でご記入下さい。</div>
        </div>
            <div class="in_form">
                <textarea cols="80" rows="15" name="textarea" required placeholder="ご意見、ご感想をお聞かせください。"></textarea>
            </div>
            </p>
      </div>

      <!-- フォーム送信用ボタン -->
      <div class="form">
        <p>
          <div class="in_form">
            <input type="submit" name="submit" value="押せっ・・・！">
        </div>
        </p>
      </div>
    </form>


  </body>
