<?php
function chuyenDoiInHoa($chuoi) {
    // Sử dụng hàm strtoupper để chuyển chuỗi thành chữ in hoa
    return strtoupper($chuoi);
}

// Ví dụ sử dụng
$chuoi = "chào mừng bạn đến với PHP!";
$chuoiInHoa = chuyenDoiInHoa($chuoi);
echo "Chuỗi sau khi chuyển đổi: $chuoiInHoa"; // Kết quả: CHÀO MỪNG BẠN ĐẾN VỚI PHP!
?>
