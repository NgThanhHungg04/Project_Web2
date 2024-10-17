<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="type-cart-details">
        <div class="container">
            <header>
                <div class="logo">
                    <a href="#">LOGO</a>
                </div>
                <nav class="main-nav">
                    <a href="#">Trang chủ</a>
                    <a href="#">Danh mục</a>
                    <a href="#">Liên hệ</a>
                </nav>
                <div class="search-user-cart">
                    <form action="/tim-kiem" method="GET" class="search-form">
                    <input type="text" name="q" placeholder="Tìm kiếm..." class="search-input" required>
                    <button type="submit" class="search-button">Tìm kiếm</button>
                    </form>
                    <a class="user" href="#">
                        <i class="fas fa-user"></i>
                    </a>
                    <a class="cart" href="#">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
            </header>
        </div>
        <div class="col-1">
            <div class="info-item">
                <a href="#">Trang chủ</a> <i id="icon" class='fas fa-greater-than' style='font-size:13px'></i>
                <div class="info-item2">
                    <a href="#">Chi Tiết Giỏ hàng</a>
                </div> 
            </div>
        </div>
        <div class="col-2">
            <h2>Chi tiết giỏ hàng</h2>
            <table>
                <tr>
                    <th></th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                    <th>Tổng tiền</th>
                    <th></th>
                </tr>
                <tr>
                    <td><img class="image" src="./images/tu.jpg" alt="Tủ Quần Áo"></td>
                    <td>Tủ Sách</td>
                    <td>250,000 VND</td>
                    <td>
                        <div class="product-quantity">
                        <input type="number" value="1" class="quantity" min="1">
                        </div>
                    </td>
                    <td><div class="product-total">250,000 VND</div></td>
                    <td>
                        <i class='fas fa-trash-alt delete-icon' style='font-size:25px'></i>
                    </td>
                </tr>
                <tr>
                    <td><img class="image" src="./images/sofa-da-bo.jpg" alt="sofa"></td>
                    <td>Sofa Da Bò</td>
                    <td>900,000 VND</td>
                    <td>
                        <div class="product-quantity">
                        <input type="number" value="1" class="quantity" min="1">
                        </div>
                    </td>
                    <td>
                        <div class="product-total">900,000 VND</div>
                    </td>
                    <td>
                        <i class='fas fa-trash-alt delete-icon' style='font-size:25px'></i>
                    </td>
                </tr>
                <tr>
                    <td><img class="image" src="./images/ban-tron.png" alt="Bàn Tròn"></td>
                    <td>Bàn Tròn</td>
                    <td>120,000 VND</td>
                    <td>
                        <div class="product-quantity">
                        <input type="number" value="1" class="quantity" min="1">
                        </div>
                    </td>
                    <td>
                        <div class="product-total">120,000 VND</div>
                    </td>
                    <td>
                        <i class='fas fa-trash-alt delete-icon' style='font-size:25px'></i>
                    </td>
                </tr>
                <tr>
                    <td><img class="image" src="./images/den.jpg" alt=""></td>
                    <td>Đèn Bàn</td>
                    <td>100,000 VND</td>
                    <td>
                        <div class="product-quantity">
                            <input type="number" value="1" class="quantity" min="1">
                        </div>
                    </td>
                    <td>
                        <div class="product-total">100,000 VND</div>
                    </td>
                    <td>
                    <i class='fas fa-trash-alt delete-icon' style='font-size:25px'></i>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="total-row">Tổng cộng: </td>
                    <td class="total-price">1,370,000 VND</td>
                </tr>
            </table>
            
        </div>
        <div class="thanhtoan-container">
            <button class="thanhtoan">Thanh toán</button>
        </div>
        <footer>
        <div class="footer-container">
            <div class="footer-info">
                <h3>Thông tin liên hệ</h3>
                <p>53 Võ Văn Ngân - Phường Linh Chiêu - Tp. Thủ Đức - Tp. Hồ Chí Minh</p>
                <p>Điện thoại: 03944 xxx xxx</p>
                <p>Email: kk0434860@gmail.com</p>
            </div>
            <div class="footer-links">
                <h3>Liên kết</h3>
                <a href="#">Chính sách bảo mật</a><br>
                <a href="#">Chính sách bảo hành</a><br>
                <a href="#">Điều khoản sử dụng</a>
            </div>
            <div class="footer-social">
                <h3>Kết nối với chúng tôi<br></h3>
                <a href="#"><i class="fab fa-facebook"></i>Ngọc Khánh</a><br>
                <a href="#"><i class="fab fa-instagram"></i>ngs_khnah</a><br>
                <a href="#"><i class="fab fa-twitter"></i>Khánh</a>
            </div>
        </div>
    </footer>
    </div>
    
</body>
<script>
    // Chọn tất cả các trường nhập số lượng và tổng tiền
    const quantityInputs = document.querySelectorAll('.product-quantity .quantity');
    const productTotals = document.querySelectorAll('.product-total');
    const deleteIcons = document.querySelectorAll('.delete-icon'); // Lấy tất cả các biểu tượng xóa

    // Hàm cập nhật tổng tiền
    function updateTotal(index) {
        const priceText = document.querySelectorAll('td:nth-child(3)')[index].textContent;
        const price = parseFloat(priceText.replace(/\D/g, ''));
        const quantity = parseInt(quantityInputs[index].value);
        const total = quantity * price;

        productTotals[index].textContent = total.toLocaleString() + ' VND';
    }

    // Lắng nghe sự kiện thay đổi cho từng trường nhập số lượng
    quantityInputs.forEach((input, index) => {
        input.addEventListener('input', () => {
            if (input.value < 1) {
                input.value = 1; // Đảm bảo số lượng không nhỏ hơn 1
            }
            updateTotal(index);
        });
    });
    
    // Thêm sự kiện click cho biểu tượng xóa
    deleteIcons.forEach((icon, index) => {
        icon.addEventListener('click', () => {
            const row = icon.closest('tr'); // Tìm hàng cha của biểu tượng xóa
            row.remove(); // Xóa hàng
            updateTotalAfterDelete(index); // Cập nhật tổng tiền sau khi xóa
        });
    });

    // Gọi hàm tính tổng tiền sau khi thay đổi số lượng hoặc xóa sản phẩm
    quantityInputs.forEach((input, index) => {
    input.addEventListener('input', () => {
        updateTotal(index);
        calculateTotalPrice();
        });
    });

    function updateTotalAfterDelete(index) {
        let totalPrice = 0;
        const productTotals = document.querySelectorAll('.product-total');

        // Cập nhật lại tổng tiền cho các sản phẩm còn lại
        productTotals.forEach((total, i) => {
            if (i < index) {
                const priceText = document.querySelectorAll('td:nth-child(3)')[i].textContent;
                const price = parseFloat(priceText.replace(/\D/g, ''));
                const quantity = parseInt(quantityInputs[i]?.value || 0);
                const newTotal = quantity * price;
                total.textContent = newTotal.toLocaleString() + ' VND';
                totalPrice += newTotal;
            } else if (i > index) {
                const priceText = document.querySelectorAll('td:nth-child(3)')[i - 1].textContent;
                const price = parseFloat(priceText.replace(/\D/g, ''));
                const quantity = parseInt(quantityInputs[i - 1]?.value || 0);
                const newTotal = quantity * price;
                total.textContent = newTotal.toLocaleString() + ' VND';
                totalPrice += newTotal;
            }
        });
        const totalPriceElement = document.querySelector('.total-price');
        totalPriceElement.textContent = totalPrice.toLocaleString() + ' VND';
    }
    //Tính tổng tiền tất cả sản phẩm
    function calculateTotalPrice() {
        let totalPrice = 0;
        const productTotals = document.querySelectorAll('.product-total');

        productTotals.forEach(total => {
            const price = parseFloat(total.textContent.replace(/\D/g, ''));
            totalPrice += price;
        });

        const totalPriceElement = document.querySelector('.total-price');
        totalPriceElement.textContent = totalPrice.toLocaleString() + ' VND';
    }
</script>
</html>