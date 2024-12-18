<?php
// استخدام حلقة for
echo "حلقة for:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "العدد: $i<br>";
}

// استخدام if و elseif
echo "<br>عبارات if و elseif:<br>";
$score = 85;

if ($score >= 90) {
    echo "الدرجة: A<br>";
} elseif ($score >= 80) {
    echo "الدرجة: B<br>";
} elseif ($score >= 70) {
    echo "الدرجة: C<br>";
} elseif ($score >= 60) {
    echo "الدرجة: D<br>";
} else {
    echo "الدرجة: F<br>";
}

// استخدام عبارة switch
echo "<br>عبارة switch:<br>";
$day = 4;

switch ($day) {
    case 1:
        echo "اليوم هو الإثنين<br>";
        break;
    case 2:
        echo "اليوم هو الثلاثاء<br>";
        break;
    case 3:
        echo "اليوم هو الأربعاء<br>";
        break;
    case 4:
        echo "اليوم هو الخميس<br>";
        break;
    case 5:
        echo "اليوم هو الجمعة<br>";
        break;
    case 6:
        echo "اليوم هو السبت<br>";
        break;
    case 7:
        echo "اليوم هو الأحد<br>";
        break;
    default:
        echo "رقم اليوم غير صحيح<br>";
}

// استخدام حلقة do while
echo "<br>حلقة do while:<br>";
$count = 1;
do {
    echo "العدد: $count<br>";
    $count++;
} while ($count <= 5);

// استخدام حلقة while
echo "<br>حلقة while:<br>";
$number = 1;
while ($number <= 5) {
    echo "العدد: $number<br>";
    $number++;
}
?>