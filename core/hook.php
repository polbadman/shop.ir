<?php
function apply_operation($number, $operation) {
  return $operation($number);
}

function square($num) {
  return $num * $num;
}

$result = apply_operation(5, "square");
echo $result; // خروجی: 25

$result = apply_operation(5, function($num) { return $num + 5; });
echo $result; // خروجی: 10


/**?
 * 
در این مثال:

    apply_operation یک تابع است که یک عدد و یک تابع دیگر به عنوان پارامتر می‌گیرد.
    square یک تابع ساده است که مربع یک عدد را محاسبه می‌کند.
    در فراخوانی apply_operation(5, "square")، نام تابع square (بدون پرانتز) به عنوان پارامتر به apply_operation پاس داده می‌شود.
    در داخل apply_operation، تابع square با استفاده از $operation($number) فراخوانی می‌شود و نتیجه به عنوان خروجی apply_operation برگردانده می‌شود.
    همچنین، می‌توانید یک تابع ناشناس (anonymous function) را نیز به عنوان پارامتر به apply_operation پاس دهید، مانند apply_operation(5, function($num) { return $num + 5; })
 */
?>