<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>クラス作成</title>
</head>

<body>
  <p>
    <?php
        //クラスを定義
        class Food{
            // プロパティを定義
            private $name;
            private $price;

            // コンストラクタを定義
            public function __construct(string $name, int $price){
            $this->name = $name;
            $this->price = $price;
            }

            // メソッドを定義
            public function show_price(){
            return $this->price;
            }
            }

            // インスタンス化
            $food = new Food('potato', 250);

            // インスタンス$foodの各プロパティ値を出力
            print_r($food);
            echo '<br>';

        //クラスを定義
        class Animal{
            // プロパティを定義
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義
            public function __construct(string $name, int $height, int $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
            }

            // メソッドを定義
            public function show_height(){
            return $this->height;
            }
            }

            // インスタンス化
            $animal = new Animal('dog', 60, 5000);

            // インスタンス$animalのプロパティ値を出力
            print_r($animal);
            echo '<br>';

        // 実行する
        echo $food->show_price();
        echo '<br>';
        echo $animal->show_height();

        //むずかしいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい
    ?>
  </p>
</body>
</html>

