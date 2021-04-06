<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
        <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
</head>

<body>
    <ul>
        <li><a href="index.php">index.php</a></li>
        <li><a href="insert.php">insert.php</a></li>
        <li><a href="select.php">select.php</a></li>
    </ul>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ入力</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>個人データ入力</legend>
                <label id="name">名前：<input type="text" name="name"></label><br>
                <label id="lid">ログインID：<input type="text" name="lid"></label><br>
                <label id="lpw">ログインPass：<input type="text" name="lpw"></label><br>
                <label id="kanri_flg">管理者：<input type="checkbox" name="kanri_flg" value="1"></label><br>
                <label id="life_flg">退職者：<input type="checkbox" name="life_flg" value ="1"></label><br>
                <!-- <label id="b_name">書籍名：<input type="text" name="b_name"></label><br>
                <label id="b_url">書籍URL：<input type="text" name="b_url"></label><br>
                <label id="b_remarks">コメント：<br><textArea name="b_remarks" rows="4" cols="40"></textArea></label><br> -->
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    
    
    
    <!-- Main[End] -->

    <script>
    
    // ＊(1)書籍のジャンルは大分類と小分類（詳細）に分ける
    // ＊(2)大分類ジャンルをセットしたら、小分類ジャンルのラジオボタンが出現するように設定。

    // ＊(3)まず、ジャンルを配列で持つこととする。
    // ary[*][0]は大分類ジャンル、ary[*][1,2,3‥‥]は小分類ジャンル。
    // [大項目⇒"文芸",小項目1⇒"小説",小項目2⇒"エッセイ",小項目3⇒"評論"‥‥]ということ。

    // let book_genre_ary =[
    //     ["文芸","小説","エッセイ","評論","詩","短歌","俳句","戯曲"],
    //     ["実用書","料理","育児","スポーツ","趣味","旅行","地図"],
    //     ["ビジネス書","経済学","経営学","マーケティング","税務会計","金融"],
    //     ["児童書","絵本","学習図鑑","学習漫画","学習用の教材"],
    //     ["学習参考書","小・中学生の学習参考書","高校生の学習参考書","大学受験参考書","各試験","各資格取得"],
    //     ["専門書","医学書","学術書","美術書","アート関連"],
    //     ["コミック・雑誌","単行本","月刊雑誌","週刊雑誌"]
    // ]; 

    let kanri_flg = ["管理者","非管理者"];
    let life_flg = ["現在も在籍している","退職している"];

    // ＊(4)ラジオボタンの設定のFunction。
        function selectionCreate_1(type_name,name,items){
        let str ="";
        for(let i=0; i<items.length ;i++){
            str += '<input type="'+type_name+'" name="'+name+'" value="'+i+'" id="id_'+name + i+'">'+items[i];
        }
        return str;
    }

    // function selectionCreate_2(type_name,name,items,num){
    //     let str ="⇒書籍ジャンル（詳細）：";
    //     for(let i=0; i<items[num].length-1 ;i++){
    //         str += '<input type="'+type_name+'" name="'+name+'" value="'+items[num][i+1]+'">'+items[num][i+1];
    //     }
    //     return str;
    // }


    // ＊(5)大分類ジャンルのラジオボタンが変化したときに、小分類のラジオボタンが出現する。
    // let kanri_flg_h = selectionCreate_1("radio","kanri_flg",kanri_flg);
    // $("#kanri_flg").append(kanri_flg_h);

    // let life_flg_h = selectionCreate_1("radio","life_flg",life_flg);
    // $("#life_flg").append(life_flg_h);



    // ※CRUD: Create（生成）、Read（読み取り）、Update（更新）、Delete（削除）
    // ユーザインタフェースが備えるべき機能（情報の参照/検索/更新）を指す用語としても使われる。
    </script>

</body>

</html>
