<?php
function demKyTuXuatHien($chuoi, $kyTu) {
    // Dùng hàm substr_count để đếm số lần xuất hiện của ký tự trong chuỗi
    return substr_count($chuoi, $kyTu);
}

// Ví dụ sử dụng
$chuoi = "Hello, how are you? Hello again!";
$kyTu = "o";
$soLanXuatHien = demKyTuXuatHien($chuoi, $kyTu);
echo "Ký tự '$kyTu' xuất hiện $soLanXuatHien lần trong chuỗi."; // Kết quả: Ký tự 'o' xuất hiện 4 lần trong chuỗi.
?>
