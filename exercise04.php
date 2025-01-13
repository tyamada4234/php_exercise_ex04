<?php
/*1題目
項目表示と改行*/
echo "\n";
echo "2題目"."\n";

//数値を2倍にして返す関数の定義
function double($number){

    return $number*2;
}

//50の2倍を表示
echo double (50);
echo "\n";

/*2題目
項目表示と改行*/
echo "2題目"."\n";

//$a と $b　を足した結果を返す関数の定義
function add($a, $b){
    //処理したい内容
    return $a + $b;
    }

    //59と47の和を表示
    $a = 59;
    $b = 47;

echo add ($a, $b);
echo "\n";

/*3題目
項目表示と改行*/
echo "3題目"."\n";

function array_total_multiple ($arr){
    $total = 1;

    foreach ($arr as $i){
        $total *= $i;
    }

    return $total;
}

$array = [1, 3, 5, 7, 9];
    echo array_total_multiple ($array);

    echo "\n";

    /*4題目
項目表示と改行*/
echo "4題目"."\n";

    function max_array($arr){
        // とりあえず配列の最初の要素を一番大きい値とする
        $max_number = $arr[0];
        foreach($arr as $a){
          // ここで配列の中の1番大きい値を探すS
          if ($a > $max_number){
            $max_number = $a;
          }
        }
        return $max_number;
      }

      //具体的に配列を指定して実行
      $array1 = [29,80,11,30,78];
      echo max_array($array1);
      echo "\n";

   /*5題目
項目表示と改行*/
echo "5題目"."\n";
echo "5.1"."\n";
//strip_tags
//指定した文字列 (string) から全ての NULL バイトと HTML および PHP タグを取り除く

$text = "<p>This is a test</>";
echo strip_tags ($text);


//array_push
//一つ以上の要素を配列の最後に追加する
echo "\n";
echo "5.2"."\n";

$fruits = ["banana", "orange", "apple"];
array_push($fruits, "grape", "cherry");
print_r($fruits);

//array_merge
//1つまたは複数の配列をマージする
echo "\n";
echo "5.3"."\n";

$fruits01 = ["banana", "orange", "apple"];
$fruits02 = ["grape", "cherry"];
print_r(array_merge($fruits01, $fruits02));

echo "\n";
echo "5.4"."\n";
//time
//現在の Unix タイムスタンプを返す
//現在時刻を Unix エポック (1970 年 1 月 1 日 00:00:00 GMT) からの通算秒
echo "現在時刻はUnix エポック (1970 年 1 月 1 日 00:00:00 GMT) から通算".time()."秒です";


//mktime
//日付を Unix のタイムスタンプとして取得する
echo "\n";
echo "5.5"."\n";

//タイムゾーンの設定
date_default_timezone_set('Asia/Tokyo');

//2024年12月31日を"M-d-Y"の形式で表示
echo date("M-d-Y", mktime(0, 0, 0, 12, 31, 2024));

//date
//指定された引数 timestamp (Unixタイムスタンプ) を、与えられた フォーマット文字列によりフォーマットし、日付文字列を返す。
echo "\n";
echo "5.6"."\n";

//タイムゾーンの設定
date_default_timezone_set('Asia/Tokyo');

echo date("Y/m/d H:i:s") . "\n";
