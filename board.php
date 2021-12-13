<?php

// var_dump($_POST);
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

$error_msg = [];


if (!empty($_POST['btn']) ) {
    if (empty($_POST['name']) ) {
        $error_msg[] = 'ニックネームが入力されていません';
    }

    if (empty($_POST['message']) ) {
        $error_msg[] = 'コメントが入力されていません';
    }

    if (empty($error_msg) ) {
        try {

            $name=$_POST['name'];
            $message=$_POST['message'];

            $name=htmlspecialchars($name,ENT_QUOTES,'UTF-8');
            $message=htmlspecialchars($message,ENT_QUOTES,'UTF-8');

            $dsn = 'mysql:dbname=github;host=localhost;charset=utf8';
            $user = 'root';
            $password = 'root';
            $dbh = new PDO($dsn, $user ,$password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sql = 'INSERT INTO board (name,message) VALUES (?,?)';
            $stmt = $dbh->prepare($sql);
            $data[] = $name;
            $data[] = $message;
            $stmt->execute($data);
            
            $dbh = null;
            
            echo 'メッセージを送信しました。 <br />';
            
        }
        catch (Exception $e)
        {
            // print $e->getMessage ();
            print 'ただいま障害により大変ご迷惑をお掛けしております。 ';
            exit();
        }
    }
}

try {

    $name=$_POST['name'];
    $message=$_POST['message'];

    $name=htmlspecialchars($name,ENT_QUOTES,'UTF-8');
    $message=htmlspecialchars($message,ENT_QUOTES,'UTF-8');

    $dsn = 'mysql:dbname=github;host=localhost;charset=utf8';
    $user = 'root';
    $password = 'root';
    $dbh = new PDO($dsn, $user ,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = 'SELECT * FROM board ORDER BY time DESC';
    $stmt = $dbh->query($sql);
    
    $dbh = null;

    
}
catch (Exception $e)
{
    // print $e->getMessage ();
    print 'ただいま障害により大変ご迷惑をお掛けしております。 ';
    exit();
}




    
?>





<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
    <style>
        .main {
            background-color: gray;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="containar">
            <h1>掲示板</h1>
            <?php if( !empty($_POST['btn']) ): ?> 
                <?php foreach($error_msg as $msg) :?>
                    <?php echo $msg ?>
                    <?php echo '<br>' ?>
                <?php endforeach ?>
        `   <?php endif ?>
            <form method="post">
                ニックネーム
                <br>
                <input type="text" class="form" name="name" value="">
                <br>
                コメント
                <br>
                <textarea name="message" class="form" rows="5" value=""></textarea>
                <br>
                <button type="submit" name="btn" value="決定">投稿</button>
            </form>
        </div>
        <?php
            foreach ($stmt as $row) {
                echo $row['id'].'.'.$row['name'];
                echo '<br>';
                echo $row['message'];
                echo '<br>';
                echo $row['time'];
                echo '<br>';
                echo '<hr>';
            }
        ?>
    </div>
</body>
</html>