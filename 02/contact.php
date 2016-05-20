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
        function error_check($a){
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

  <div id="messeages">
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
                    if ( $error_flg === 0 ){
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
      <div id="form">
        <p>
          <class id="sub_title">お名前</class><class id="cns">必須</class></br>
          <div id="in_form">
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
      <div id="form">
        <p>
          <class id="sub_title">性別</class><class id="cns">必須</class>
          <div id="in_form">
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
      <div id="form">
        <p>
          <class id="sub_title">郵便番号</class></br>
          <class id="desc">3ケタ、4ケタの数字をそれぞれ入力してください。</class>
          <div id="in_form">
            <input type="textbox" name="post1" size="1" pattern="\d{3}" placeholder="100">
            - <input type="textbox" name="post2" size="1" pattern="\d{4}" placeholder="0005">
          </div>
          </br>
          <class id="sub_title">住所</class>
          <div id="in_form">
            <input type="textbox" name="address" size="70"
             placeholder="東京都千代田区丸の内1-8-3 丸の内トラストタワー本館5階">
          </div>
        </p>
      </div>

      <!-- 電話番号入力フォーム  -->
      <div id="form">
        <p>
          <class id="sub_title">電話番号</class>
          <div id="in_form">
            <input type="textbox" name="phone1" size="1" pattern="\d{2,4}" placeholder="03">
            ( <input type="textbox" name="phone2" size="1" pattern="\d{3,4}" placeholder="3286">
            ) <input type="textbox" name="phone3" size="1" pattern="\d{3,4}" placeholder="7887">
          </div>
        </p>
      </div>

      <!-- メールアドレス入力フォーム  -->
      <div id="form">
        <p>
          <class id="sub_title">メールアドレス</class><class id="cns">必須</class>
          <div id="in_form">
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
      <div id="form">
        <p>
          <class id="sub_title">
            よろしければ、どの点にご不満があったのかお聞かせください(複数回答可)
          </class>
          <div id="in_form">
            <input type="checkbox" name="box" id="box1" value="box1"><label for="box1">: 眠かった</lavel>
            <input type="checkbox" name="box" id="box2" value="box2"><label for="box2">: 疲れた</lavel>
            <input type="checkbox" name="box" id="box3" value="box3"><label for="box3">: お腹減った</lavel>
          </div>
        </p>
      </div>

      <!-- 質問カテゴリ入力フォーム  -->
      <div id="form">
          <p>
            <class id="sub_title">どういった用件での問い合わせかね</class><class id="cns">必須</class>
            <div id="in_form">
              <select name="select" required>
                  <option value="select0">-- 選択してください --</option>
                <option value="select1">いい子だねー</option>
                <option value="select2">いい子でちゅね～</option>
                <option value="select3">ｱｰ、ﾖｼﾖｼﾖｼ</option>
              </select>
            </div>
          </br>
            <class id="sub_title">書いてねー。</class><class id="cns">必須</class>
            <div id="in_form">
              <textarea cols="80" rows="15" name="textarea" required placeholder="ご意見、ご感想をお聞かせください。"></textarea>
            </div>
          </p>
      </div>

      <!-- フォーム送信用ボタン -->
      <div id="form">
        <p>
          <div id="in_form">
            <input type="submit" name="submit" value="押せっ・・・！">
          </div>
        </p>
      </div>
    </form>


  </body>
