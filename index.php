<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>オリジナルゲームテンプレ</title>
</head>
<body>
    <?php
                                        //フォームに入力された数字を変数$noに格納します
                                        //$_POST["no"]は、noという名前で送信された内容です。
                                        //を$noへ
    if(!empty($_POST["no"])){
        $no = $_POST["no"];
                                        //フォームからの入力があったら判定します
        if( $no ){
                                        //１から１０の乱数を発生させて、変数$rand_noに格納します。
            $rand_no = rand(1,10);

            if( $rand_no == $no ){
                                        //乱数と入力が一致した場合
                echo "おめでとう！　正解！<BR>";
                echo "それでは、続けてがんばろう<HR>";
            }else{ 
                                        //乱数と入力が不一致の場合
                echo "残念! ハズレ！<BR>";
                echo "正解は、".$rand_no."！<BR>";
                echo "乱数は変更されます。当たるまでチャレンジしてね。<HR>";
            }
        }
    }
    ?>
数当てゲームです。<br>
１から１０までの好きな数字を入力して送信ボタンを押してください。<br>
<br>
<form action = "index.php" method ="POST" >
    <div class = "former">
        <input size="20" type="text" name="no"><input type="submit" value = "送信">
    </div>
</form>
<br>
</body>
</html>