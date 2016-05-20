<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>老人ホーム ～籠ノ鳥～ [入力フォーム]</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <h1 id="title">お問い合わせ入力フォーム</h1>

  <div id="messeages">
      <p>
          <div id="default_msg">
              意見ください。</br>
              お願いします。</br>
          </div>
          <?php
                if( isset( $_POST['submit'] )){
                    echo '<div id="error_msg">';
                    $error_flg = 0;
                    if(!strlen($_POST['name1']) || !strlen($_POST['name2'])){
                        $error_flg = 1;
                        echo "名前が未入力です。</br>";
                    }
                    if(!isset( $_POST['sexual'] )){
                        $error_flg = 1;
                        echo "性別を選択してください。</br>";
                    }
                    if(!strlen($_POST['mail1']) || !strlen($_POST['mail2'])){
                        $error_flg = 1;
                        echo "メールアドレスが未入力です。</br>";
                    }
                    if ( $error_flg === 0 ){
                        header("Location: http://192.168.1.101/php/PhpForm/02/result.php");
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
          <class id="sub_title">お名前</class><class id="cns">必須</class>
          <div id="in_form">
            姓:<input type="textbox" name="name1" size="10" placeholder="田中">
            <?php
                if( isset($_POST['submit']) && !strlen($_POST['name1'])){
                    echo "ここ";
                }
             ?>
            <!-- セイ<input type="textbox" name="kana1" size="6"　placeholder="タナカ"> -->
          </br>
            名:<input type="textbox" name="name2" size="10" placeholder="太郎">
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
            <input type="radio" name="sexual" id="sexual3" value="不明" /><label for="sexual3">:不明</lavel>
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
          <class id="sub_title">郵便番号</class>
          <div id="in_form">
            <input type="textbox" name="post1" size="1" placeholder="100">
            - <input type="textbox" name="post2" size="1" placeholder="0005">
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
            <input type="textbox" name="phone1" size="1" placeholder="03">
            - <input type="textbox" name="phone2" size="1" placeholder="3286">
            - <input type="textbox" name="phone3" size="1" placeholder="7887">
          </div>
        </p>
      </div>

      <!-- メールアドレス入力フォーム  -->
      <div id="form">
        <p>
          <class id="sub_title">メールアドレス</class><class id="cns">必須</class>
          <div id="in_form">
            <input type="textbox" name="mail1" size="20" placeholder="sample">
            @ <input type="textbox" name="mail2" size="20" placeholder="example.com">
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
              <select name="select">
                <option value="select1">いい子だねー</option>
                <option value="select2">いい子でちゅね～</option>
                <option value="select3">ｱｰ、ﾖｼﾖｼﾖｼ</option>
              </select>
            </div>
          </br>
            <class id="sub_title">書いてねー。</class><class id="cns">必須</class>
            <div id="in_form">
              <textarea cols="80" rows="15" name="textarea" placeholder="ご意見、ご感想をお聞かせください。"></textarea>
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
