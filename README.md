## Psalm là gì?

Psalm được phát triển bởi Vimeo trong bối cảnh năm 2015 thì khối lượng codebase của Vimeo đã trở nên vô cùng lớn, phục vụ hàng triệu requests mỗi giờ.

Mặc dù codebase hiện tại vẫn hoạt động bình thường nhưng khi thay đổi code ở 1 file, để có thể biết được nó có ảnh hưởng đến các chức năng khác hay không thì chỉ có cách đẩy lên production và sẵn sàng rollback 😢 Refactor trở nên khó khăn và codebase vẫn tiếp tục trở nên phình to ra.

Và Psalm đã được ra đời với các chức năng:

- Hạn chế errors khi thực hiện nhiều refactor
- Đảm bảo chất lượng code trong một team lớn
- Đảm bảo không có lỗi nào liên quan đến kiểu dữ liệu khi chạy
- Cung cấp công cụ tự động fix một số lỗi thông thường

## Cài đặt Psalm trên vscode

Trước tiên, hãy tìm psalm trong extensions của Visual Studio Code và cài đặt nó:

![](https://imgur.com/gd8ZKXt.png)

Extension này cung cấp language server giữa psalm và vscode.

Cài đặt psalm trong dự án của bạn thông qua `composer`:

```bash
composer require --dev vimeo/psalm
```

Chạy lệnh:

```bash
./vendor/bin/psalm --init
```

Psalm sẽ scan tất cả các file trong dự án của bạn và tạo ra một file `psalm.xml`.

## Sử dụng

Ở đây mình tạo 1 file `example.php` có nội dung như sau:

```php
<?php

declare(strict_types=1);

function sum($a, $b)
{
    return $a + $b;
}
```

Đây là hàm tính tổng 2 hai biến `$a` và `$b`, nhìn thì có vẻ không có nó lỗi gì nhưng Psalm sẽ phát hiện ra lỗi tiềm ẩn trong đoạn mã của bạn:

![](https://imgur.com/wPLsOU7.png)

Nó cho thấy rằng chúng ta chưa cung cấp `docblock` về kiểu dữ liệu cho `$a` và `$b` cũng như kiểu dữ liệu trả về của hàm `sum()`.

Giờ hãy thử fix nó:

```php
<?php

declare(strict_types=1);

/**
 * @param float|int $a
 * @param float|int $b
 *
 * @return float|int
 */
function sum($a, $b)
{
    return $a + $b;
}
```

Okay, vậy là mọi thứ đã an toàn!
