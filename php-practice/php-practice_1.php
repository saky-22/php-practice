<?php
// Q1 変数と文字列
$name='安藤';
echo '私の名前は「' .$name. '」です。';
//3行目：nameという関数に安藤を指定
//4行目：シングルクォーテーションで文字列を作る。関数の前後には、文字列結合演算子「.」がマスト

// Q2 四則演算
$num=5*4;
echo $num . "\n";
$num=5*4/2;
echo $num;
//9行目：5×4
//10行目：\nで改行
//11行目：5×4÷2
//12行目：$num

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');

$year = date("Y");
$month = date("m");
$day = date("d");
$hour = date("H");
$minute = date("i");
$second = date("s");

echo "現在時刻は、" . $year . "年" . $month . "月" . $day . "日 "
    . $hour . "時" . $minute . "分" . $second . "秒です。";
//19行目：現在時刻を取得
//21～26行目：それぞれの関数を宣言する
//28行目：文字列結合で出力する

// Q4 条件分岐-1 if文
$device = "windows";

if ($device === "windows"||$device === "mac") {
    echo "使用OSは、" .$device."です。";
}
else {
        echo "どちらでもありません。";
    }

// Q5 条件分岐-2 三項演算子
$age = 20;
echo ($age < 18) ? "未成年です。" : "成人です。";

// Q6 配列
$kanto = ["東京都", "神奈川県", "栃木県", "千葉県", "茨城県", "群馬県", "埼玉県", "山梨県"];

$pref1 = $kanto[2];
$pref2 = $kanto[3];

echo $pref1 . "と" . $pref2 . "は関東地方の都道府県です。";

// Q7 連想配列-1
$kanto_capitals = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "栃木県" => "宇都宮市",
    "千葉県" => "千葉市",
    "茨城県" => "水戸市",
    "群馬県" => "前橋市",
    "埼玉県" => "さいたま市",
    "山梨県" => "甲府市"
];

foreach ($kanto_capitals as $capital) {
    echo $capital . "\n";
}

// Q8 連想配列-2
$kanto_capitals = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "栃木県" => "宇都宮市",
    "千葉県" => "千葉市",
    "茨城県" => "水戸市",
    "群馬県" => "前橋市",
    "埼玉県" => "さいたま市",
    "山梨県" => "甲府市"
];

foreach ($kanto_capitals as $prefecture => $capital) {
    if ($prefecture === "埼玉県") {
        echo $prefecture . "の県庁所在地は、" . $capital . "です。";
    }
}

// Q9 連想配列-3
$kanto_capitals = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "栃木県" => "宇都宮市",
    "千葉県" => "千葉市",
    "茨城県" => "水戸市",
    "群馬県" => "前橋市",
    "埼玉県" => "さいたま市",
    "山梨県" => "甲府市",
    "愛知県" => "名古屋市",
    "大阪府" => "大阪市"
];

$kanto_list = ["東京都", "神奈川県", "千葉県", "埼玉県", "栃木県", "群馬県", "茨城県", "山梨県"];

foreach ($kanto_capitals as $prefecture => $capital) {

    if (in_array($prefecture, $kanto_list)) {
        echo $prefecture . "の県庁所在地は、" . $capital . "です。\n";
    } else {
        echo $prefecture . "は関東地方ではありません。\n";
    }

}

// Q10 関数-1
function hello($name) {
    return $name . "さん、こんにちは。";
}

echo hello("金谷") . "\n";
echo hello("安藤") . "\n";

// Q11 関数-2
function calcTaxInPrice($price) {
    return $price * 1.10;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。";

// Q12 関数とif文
function distinguishNum($num) {
    if ($num % 2 !== 0) {
        return $num . "は奇数です。";
    } else {
        return $num . "は偶数です。";
    }
}

echo distinguishNum(11) . "\n";
echo distinguishNum(24) . "\n";

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case "A":
        case "B":
            return "合格です。";
        case "C":
            return "合格ですが追加課題があります。";
        case "D":
            return "不合格です。";
        default:
            return "判定不明です。講師に問い合わせてください。";
    }
}

echo evaluateGrade("A") . "\n";
echo evaluateGrade("X") . "\n";

?>