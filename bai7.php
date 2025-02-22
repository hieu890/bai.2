<?php
function demSoTu($chuoi) {
    // Dùng hàm preg_split để tách chuỗi thành các từ và đếm số phần tử
    $tu = preg_split('/\s+/', trim($chuoi));
    return count($tu);
}

// Ví dụ sử dụng
$chuoi = "Học PHP là rất thú vị!";
$soTu = demSoTu($chuoi);
echo "Số từ trong chuỗi là: $soTu"; // Kết quả: Số từ trong chuỗi là: 5
?>
