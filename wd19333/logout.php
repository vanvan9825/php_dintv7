<?php
session_start();//Khởi tạo session
session_unset();//Xóa toàn bộ các biến đang lưu trong session
session_destroy();//Hủy toàn bộ session
header("Location: asm2.php");