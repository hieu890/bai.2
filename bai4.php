<?php
function fibonacci($n) {
    // Điều kiện dừng của hàm đệ quy: fibonacci(0) = 0, fibonacci(1) = 1
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        // Hàm đệ quy tính fibonacci(n) = fibonacci(n-1) + fibonacci(n-2)
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Ví dụ sử dụng
$n = 6;
$ketQua = fibonacci($n);
echo "Số Fibonacci thứ $n là: $ketQua"; // Kết quả: Số Fibonacci thứ 6 là: 8
?>
