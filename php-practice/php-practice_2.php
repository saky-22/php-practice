<?php
// Q1 tic-tac問題
//・FizzBuzz問題？らしい
echo "1から100までのカウントを開始します\n\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 == 0) {
        echo "tic\n";
    } elseif ($i % 5 == 0) {
        echo "tac\n";
    } else {
        echo $i . "\n";
    }
}

// Q2 多次元連想配列
//問題1
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];
var_dump($personalInfos);
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

//問題2
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];


$info = [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
];


foreach($personalInfos as $index => $info){
    var_dump($info);
    $number = $index + 1;
    echo $number . '番目の' . $info['name']. 'のメールアドレスは' . $info['mail'] . 'で、電話番号は' . $info['tel'] . "です。\n";
}

//問題3
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

$ageList = [25, 30, 18];

foreach ($ageList as $index => $age) {
    var_dump($index);
    $personalInfos[$index]['age'] = $age;
}
var_dump($personalInfos);

// Q3 オブジェクト-1
function：クラスの中のメソッドを定義している
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '学籍番号' . $this->studentId . '番の生徒は' . $this->studentName . 'です。';
    }
}
$Student = new Student('120','山田');
$Student->attend();
//クラス(オブジェクトの設計図)、オブジェクト、インスタンス化(オブジェクトから実体化されること)



// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($program)
    {
        echo $this->studentName .'は'.$program.'の授業に参加しました。学籍番号：'. $this->studentId ;
    }
}
$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1
$date = new DateTime('now');
$date->modify('-1 month');

echo $date->format('Y-m-d');

//問題2

?>