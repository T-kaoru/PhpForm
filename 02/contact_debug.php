<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>老人ホーム ～籠ノ鳥～ [入力フォーム]</title>
  <link rel="stylesheet" type="text/css" href="css/style_debug.css">
</head>

<body>
  <h1 id="title">お問い合わせ入力フォーム</h1>


  <table class="form_table">
  <tbody>
<!--名前入力フォーム  -->
    <form action="result.php" method="post">
      <tr>
        <div id="form">
          <p>
            <th><class id="sub_title">お名前</class></th>
            <div id="in_form">
              <td>姓 <input type="textbox" name="name1" size="10" placeholder="田中"></td>
              <!-- セイ<input type="textbox" name="kana1" size="6"　placeholder="タナカ"> -->
            </br>
              <td>名 <input type="textbox" name="name2" size="10" placeholder="太郎"></td>
              <!-- メイ<input type="textbox" name="kana2" size="6" placeholder="タロウ"> -->
            </div>
          </p>
        </div>
      </tr>
    <!-- 性別入力フォーム -->
      <tr>
        <div id="form">
          <p>
            <th><class id="sub_title">性別</class></th>
            <div id="in_form"><td>
              男:<input type="radio" name="sexual" value="男" />
              女:<input type="radio" name="sexual" value="女" />
              不明:<input type="radio" name="sexual" value="不明" />
            </td></div>
          </p>
        </div>
      </tr>

        <!-- 住所入力フォーム  -->
      <tr>
        <div id="form">
          <p>
          <th><class id="sub_title">郵便番号</class></th>
            <div id="in_form"><td>
              <input type="textbox" name="post1" size="1" placeholder="100">
              - <input type="textbox" name="post2" size="1" placeholder="0005">
            </td></div>
            </br>
            <th><class id="sub_title">住所</class></th>
            <div id="in_form"><td>
              <input type="textbox" name="address" size="70"
               placeholder="東京都千代田区丸の内1-8-3 丸の内トラストタワー本館5階">
            </td></div>
          </p>
        </div>
      </tr>

        <!-- 電話番号入力フォーム  -->
      <tr>
        <div id="form">
          <p>
            <th><class id="sub_title">電話番号</class></th>
            <div id="in_form"><td>
              <input type="textbox" name="phone1" size="1" placeholder="03">
              - <input type="textbox" name="phone2" size="1" placeholder="3286">
              - <input type="textbox" name="phone3" size="1" placeholder="7887">
            </td></div>
          </p>
        </div>
      </tr>

        <!-- メールアドレス入力フォーム  -->
      <tr>
        <div id="form">
          <p>
            <th><class id="sub_title">メールアドレス</class></th>
            <div id="in_form"><td>
              <input type="textbox" name="mail1" size="20" placeholder="sample">
              @ <input type="textbox" name="mail2" size="20" placeholder="example.com">
            </td></div>
          </p>
        </div>
      </tr>

        <!-- クレーム内容入力フォーム  -->
      <tr>
        <div id="form">
          <p>
            <th><class id="sub_title">
              よろしければ、どの点にご不満があったのかお聞かせください(複数回答可)
            </class></th>
            <div id="in_form"><td>
              <input type="checkbox" name="box" value="box1"> : 眠かった
              <input type="checkbox" name="box" value="box2"> : 疲れた
              <input type="checkbox" name="box" value="box3">　: お腹減った
            </td></div>
          </p>
        </div>
      </tr>

        <!-- 質問カテゴリ入力フォーム  -->
      <tr>
        <div id="form">
            <p>
              <th><class id="sub_title">どういった用件での問い合わせかね</class></th>
              <div id="in_form"><td>
                <select name="select">
                  <option value="select1">いい子だねー</option>
                  <option value="select2">いい子でちゅね～</option>
                  <option value="select3">ｱｰ、ﾖｼﾖｼﾖｼ</option>
                </td></select>
              </div>
            </br>
              <th><class id="sub_title">書いてねー。</class></th>
              <div id="in_form"><td>
                <textarea cols="70" rows="10" name="textarea" placeholder="ご意見、ご感想をお聞かせください。"></textarea>
              </td></div>
            </p>
        </div>
      </tr>

    </tbody>
  </table>

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
