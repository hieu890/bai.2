<?php
function kiemTraNamNhuan($nam) {
    // Điều kiện năm nhuận:
    // - Năm chia hết cho 4 và không chia hết cho 100, hoặc chia hết cho 400
    if (($nam % 4 == 0 && $nam % 100 != 0) || ($nam % 400 == 0)) {
        return "Năm $nam là năm nhuận.";
    } else {
        return "Năm $nam không phải là năm nhuận.";
    }
}

// Ví dụ sử dụng
$nam = 2024;
$ketQua = kiemTraNamNhuan($nam);
echo $ketQua; // Kết quả: Năm 2024 là năm nhuận.
?>
