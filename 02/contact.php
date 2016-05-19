<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>老人ホーム ～籠ノ鳥～ [入力フォーム]</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <h1 id="title">お問い合わせ入力フォーム</h1>


  <table border="1">

<!--名前入力フォーム  -->
    <form action="result.php" method="post">
      <div id="form">
        <p>
          <class id="sub_title">お名前</class>
          <div id="in_form">
            姓 <input type="textbox" name="name1" size="10" placeholder="田中">
            <!-- セイ<input type="textbox" name="kana1" size="6"　placeholder="タナカ"> -->
          </br>
            名 <input type="textbox" name="name2" size="10" placeholder="太郎">
            <!-- メイ<input type="textbox" name="kana2" size="6" placeholder="タロウ"> -->
          </div>
        </p>
      </div>

  <!-- 性別入力フォーム -->
      <div id="form">
        <p>
          <class id="sub_title">性別</class>
          <div id="in_form">
            男:<input type="radio" name="sexual" value="男" />
            女:<input type="radio" name="sexual" value="女" />
            不明:<input type="radio" name="sexual" value="不明" />
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
          <class id="sub_title">メールアドレス</class>
          <div id="in_form">
            <input type="textbox" name="mail1" size="20" placeholder="sample">
            @ <input type="textbox" name="mail2" size="20" placeholder="example.com">
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
            <input type="checkbox" name="box" value="box1"> : 眠かった
            <input type="checkbox" name="box" value="box2"> : 疲れた
            <input type="checkbox" name="box" value="box3">　: お腹減った
          </div>
        </p>
      </div>

      <!-- 質問カテゴリ入力フォーム  -->
      <div id="form">
          <p>
            <class id="sub_title">どういった用件での問い合わせかね</class>
            <div id="in_form">
              <select name="select">
                <option value="select1">いい子だねー</option>
                <option value="select2">いい子でちゅね～</option>
                <option value="select3">ｱｰ、ﾖｼﾖｼﾖｼ</option>
              </select>
            </div>
          </br>
            <class id="sub_title">書いてねー。</class>
            <div id="in_form">
              <textarea cols="70" rows="10" name="textarea" placeholder="ご意見、ご感想をお聞かせください。"></textarea>
            </div>
          </p>
      </div>

      <!-- フォーム送信用ボタン -->
      <div id="form">
        <p>
          <div id="in_form">
            <input type="submit" value="押せっ・・・！">
          </div>
        </p>
      </div>
    </form>


  </body>
