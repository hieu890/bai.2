<?php
function tachChuoi($chuoi, $kyTuPhanCach) {
    // Dùng hàm explode để tách chuỗi dựa trên ký tự phân cách
    return explode($kyTuPhanCach, $chuoi);
}

// Ví dụ sử dụng
$chuoi = "apple,banana,orange,grape";
$kyTuPhanCach = ",";
$mang = tachChuoi($chuoi, $kyTuPhanCach);

// In ra mảng kết quả
print_r($mang);
?>
