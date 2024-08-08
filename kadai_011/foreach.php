<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $variable_name = ['name' => '玉ねぎ', 'price' => 200, 'place' => '北海道'];

        //  配列$user_namesの要素を1つずつ順番に出力
        foreach ($variable_name as $key => $value) {
            echo "{$key}:{$value}<br>";
        }
        ?>
    </p>
</body>

</html>
