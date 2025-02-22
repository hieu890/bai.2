<?php
function kiemTraSoNguyenTo($n) {
    // Số nguyên tố phải lớn hơn 1
    if ($n <= 1) {
        return "Số $n không phải là số nguyên tố.";
    }

    // Kiểm tra chia hết cho bất kỳ số nào từ 2 đến căn bậc hai của n
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return "Số $n không phải là số nguyên tố.";
        }
    }

    return "Số $n là số nguyên tố.";
}

// Ví dụ sử dụng
$n = 29;
$ketQua = kiemTraSoNguyenTo($n);
echo $ketQua; // Kết quả: Số 29 là số nguyên tố.
?>
