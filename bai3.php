<?php
function daoNguocChuoi($chuoi) {
    // Dùng hàm built-in strrev để đảo ngược chuỗi
    return strrev($chuoi);
}

// Ví dụ sử dụng
$chuoi = "hello";
$chuoiDaoNguoc = daoNguocChuoi($chuoi);
echo "Chuỗi đảo ngược của chuỗi $chuoi là: $chuoiDaoNguoc"; // Kết quả: Chuỗi đảo ngược của chuỗi hello là: olleh
?>
