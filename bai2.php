<?php
function kiemTraChanLe($n) {
    // Kiểm tra nếu số n chia hết cho 2 thì là số chẵn, ngược lại là số lẻ
    if ($n % 2 == 0) {
        return "Số $n là số chẵn.";
    } else {
        return "Số $n là số lẻ.";
    }
}

// Ví dụ sử dụng
echo kiemTraChanLe(10); // Kết quả: Số 10 là số chẵn.
echo "<br>";
echo kiemTraChanLe(15); // Kết quả: Số 15 là số lẻ.
?>
