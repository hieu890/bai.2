<?php
function mayTinh($a, $b, $phepTinh) {
    // Kiểm tra phép tính và thực hiện phép toán tương ứng
    switch ($phepTinh) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return 'Lỗi: Không thể chia cho 0.';
            }
            return $a / $b;
        default:
            return 'Lỗi: Phép toán không hợp lệ.';
    }
}

// Ví dụ sử dụng
echo mayTinh(10, 5, '+'); // Kết quả: 15
echo mayTinh(10, 5, '-'); // Kết quả: 5
echo mayTinh(10, 5, '*'); // Kết quả: 50
echo mayTinh(10, 0, '/'); // Kết quả: Lỗi: Không thể chia cho 0.
?>
