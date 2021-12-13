<?php

// $item_text = "アイテム１";
// if文
if($_GET['test1']) {
    $item_text = $_GET['test1'];
} else {
    $item_text = "空でした";
}

// 三項演算子
$item_text = $_GET['test1'] ? $_GET['test1'] : "空でした";

// 三項演算子の省略形
$item_text = $_GET['test1'] ?? "空でした";


$item_array = [
    "one" => "111111",
    "two" => "22222",
    "three" => "33333",
    "four" => "4444",
    "five" => "555555",
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h1>テストページ</h1>
    <?php
        echo "<div>エコーで書きました";
        echo "<ul>";
        echo "<li>" . $item_text . "</li>";
        echo "</ul>";
        echo "</div>";
    ?>
    <div>
        構造１
        <ul>
            <li><?= $item_text?></li>
        </ul>
    </div>
    <div>
        構造２
        <ul>
            <?php
                foreach ($item_array as $key => $item) {
                    echo "<li>{$item}</li>";
                }
            ?>
        </ul>
    </div>
    <div>
        構造3
        <ol>
            <li>111111</li>
            <li>222222</li>
            <li>333333</li>
        </ol>
    </div>
    <div>
        <img src="./img/cat.jpg" alt="猫" style="width: 200px">
    </div>
    <div>
        <img src="./img/cat2.jpg" alt="猫" style="width: 200px">
    </div>
    <div>
        構造4
        <ul>
            <?php
                foreach ($item_array as $key => $item) {
                    echo "<li>{$item}</li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>
