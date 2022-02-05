## Psalm là gì?

Psalm được phát triển bởi Vimeo trong bối cảnh năm 2015 thì khối lượng codebase của Vimeo đã trở nên vô cùng lớn, phục vụ hàng triệu requests mỗi giờ.

Mặc dù codebase hiện tại vẫn hoạt động bình thường nhưng khi thay đổi code ở 1 file, để có thể biết được nó có ảnh hưởng đến các chức năng khác hay không thì chỉ có cách đẩy lên production và sẵn sàng rollback 😢 Refactor trở nên khó khăn và codebase vẫn tiếp tục trở nên phình to ra.

Và Psalm đã được ra đời với các chức năng:

- Hạn chế errors khi thực hiện nhiều refactor
- Đảm bảo chất lượng code trong một team lớn
- Đảm bảo không có lỗi nào liên quan đến kiểu dữ liệu khi chạy
- Cung cấp công cụ tự động fix một số lỗi thông thường
