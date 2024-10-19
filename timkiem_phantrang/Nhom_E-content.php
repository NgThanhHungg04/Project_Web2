<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . preg_quote($pattern_document_root, '/') . '(.*)$/';

preg_match($pattern_uri, $_SERVER['REQUEST_URI'], $matches);
$url_path = $url_host . (isset($matches[1]) ? $matches[0] : '');

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="container">
    <header>
        <div class="logo">
            <a href="./Nhom_E.php">LOGO</a>
        </div>
        <nav class="main-nav">
            <a href="./Nhom_E.php">Trang chủ</a>
            <div class="menu-item">
                <a href="#">Danh mục</a>
                <ul class="submenu">
                    <li><a href="#">Danh mục 1</a></li>
                    <li><a href="#">Danh mục 2</a></li>
                    <li><a href="#">Danh mục 3</a></li>
                    <li><a href="#">Danh mục 4</a></li>
                </ul>
            </div>
            <a href="#">Liên hệ</a>
        </nav>
        <div class="search-user-cart">
            <form action="#" method="GET" class="search-form" id="searchForm">
                <input type="text" id="searchInput" name="q" placeholder="Tìm kiếm..." class="search-input" required>
                <button type="button" class="search-button" id="searchButton">Tìm kiếm</button>
            </form>
            <a class="user" href="#">
                <i class="fas fa-user"></i>
            </a>
            <a class="cart" href="#">
                <i class="fas fa-shopping-cart"></i>
            </a>
        </div>
    </header>

    <div class="swiper">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/anh1.jpg" alt="Slide 1">
                </div>
                <div class="swiper-slide">
                    <img src="./images/anh2.jpg" alt="Slide 2">
                </div>
                <div class="swiper-slide">
                    <img src="./images/anh3.jpg" alt="Slide 3">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
            slidesPerView: 1,
            spaceBetween: 70,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });
    </script>

    <div class="product-list" id="productList">
        <div class="product-item">
            <a href="#"><img src="./images/1.jpg" alt="Đồng hồ treo tường"></a>
            <h3><a href="#">Đồng hồ treo tường</a></h3>
            <p>Giá: 599.000 VNĐ</p>
        </div>
        <div class="product-item">
            <a href="#"><img src="./images/2.jpg" alt="Bình gốm"></a>
            <h3><a href="#chi_ti">Bình gốm</a></h3>
            <p>Giá: 999.999 VNĐ</p>
        </div>
        <div class="product-item">
            <a href="#"><img src="./images/nt3.jpg" alt="Kệ sách"></a>
            <h3><a href="#">Kệ sách</a></h3>
            <p>Giá: 1.200.000 VNĐ</p>
        </div>
        <div class="product-item">
            <a href="#"><img src="./images/4.jpg" alt="Ghế đơn"></a>
            <h3><a href="#">Ghế đơn</a></h3>
            <p>Giá: 799.000 VNĐ</p>
        </div>
        <div class="product-item">
            <a href="#"><img src="./images/5.jpg" alt="Kệ trưng bày"></a>
            <h3><a href="#">Kệ trưng bày</a></h3>
            <p>Giá: 999.999 VNĐ</p>
        </div>
        <div class="product-item">
            <a href="#"><img src="./images/nt6.jpg" alt="Ghế Sofa"></a>
            <h3><a href="#6">Ghế Sofa</a></h3>
            <p>Giá: 300.000 VNĐ</p>
        </div>
        <div class="product-item">
            <a href="#"><img src="./images/nt7.jpg" alt="Bàn làm việc"></a>
            <h3><a href="#">Bàn làm việc</a></h3>
            <p>Giá: 999.999 VNĐ</p>
        </div>
        <div class="product-item">
            <a href="#"><img src="./images/8.jpg" alt="Đèn treo tường"></a>
            <h3><a href="#">Đèn treo tường</a></h3>
            <p>Giá: 799.999 VNĐ</p>
        </div>
        <div class="product-item">
            <a href="#"><img src="./images/9.jpg" alt="Bàn uống nước"></a>
            <h3><a href="#">Bàn uống nước</a></h3>
            <p>Giá: 300.000 VNĐ</p>
        </div>
        <div class="product-item">
            <a href="#"><img src="./images/10.jpg" alt="Giường đơn"></a>
            <h3><a href="#0">Giường đơn</a></h3>
            <p>Giá: 1.500.000 VNĐ</p>
        </div>
        <div class="product-item">
            <a href="#"><img src="./images/11.jpg" alt="Ghế Sofa dài"></a>
            <h3><a href="#">Ghế Sofa dài</a></h3>
            <p>Giá: 1.000.000 VNĐ</p>
        </div>
        <div class="product-item">
            <a href="#"><img src="./images/12.jpg" alt="Kệ để đồ"></a>
            <h3><a href="#">Kệ để đồ</a></h3>
            <p>Giá: 500.000 VNĐ</p>
        </div>
    </div>

    <div class="pagination">
        <button class="prev" id="prevBtn" onclick="changePage(currentPage - 1)" disabled>« Trang trước</button>
        <span id="page-info"></span>
        <button class="next" id="nextBtn" onclick="changePage(currentPage + 1)" disabled>Trang sau »</button>
    </div>

    <script>
        let currentPage = 1;
        const itemsPerPage = 8;
        let filteredProducts = Array.from(document.querySelectorAll('.product-item'));
        const products = document.querySelectorAll('.product-item');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const searchInput = document.getElementById('searchInput');
        const searchButton = document.getElementById('searchButton');

        function highlightText(text, query) {
            const regex = new RegExp(`(${query})`, 'gi');
            return text.replace(regex, '<strong>$1</strong>');
        }

        function showPage(page, productsToShow) {
            const totalPages = Math.ceil(productsToShow.length / itemsPerPage);
            const startIndex = (page - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;

            products.forEach((item) => {
                item.style.display = 'none'; // Ẩn tất cả sản phẩm
            });

            productsToShow.forEach((item, index) => {
                if (index >= startIndex && index < endIndex) {
                    item.style.display = 'block'; // Hiển thị sản phẩm trong khoảng
                }
            });

            document.getElementById('page-info').textContent = `Trang ${page} / ${totalPages}`;

            prevBtn.disabled = (page === 1);
            nextBtn.disabled = (page === totalPages);
        }

        function changePage(page) {
            const totalPages = Math.ceil(filteredProducts.length / itemsPerPage);
            if (page < 1) {
                currentPage = 1;
            } else if (page > totalPages) {
                currentPage = totalPages;
            } else {
                currentPage = page;
            }
            showPage(currentPage, filteredProducts);
        }

        function searchProducts() {
            const query = searchInput.value.toLowerCase().trim();
            filteredProducts = Array.from(products).filter(product => {
                const productName = product.querySelector('h3').innerText.toLowerCase();
                return productName.includes(query);
            });

            // Nếu không có sản phẩm nào khớp với tìm kiếm
            if (filteredProducts.length === 0) {
                document.getElementById('page-info').textContent = "Không có sản phẩm nào.";
                prevBtn.disabled = true;
                nextBtn.disabled = true;
            } else {
                currentPage = 1; // Reset trang về 1
                showPage(currentPage, filteredProducts);
            }

            // Tô đậm từ khóa trong tiêu đề sản phẩm
            filteredProducts.forEach(product => {
                const productName = product.querySelector('h3');
                productName.innerHTML = highlightText(productName.innerText, query);
            });
        }


        // Lắng nghe sự kiện click trên nút tìm kiếm
        searchButton.addEventListener('click', searchProducts);

        // Gán sự kiện click cho các nút trang
        prevBtn.onclick = () => changePage(currentPage - 1);
        nextBtn.onclick = () => changePage(currentPage + 1);

        // Hiển thị trang đầu tiên khi tải trang
        showPage(currentPage, products);

    </script>

    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <h3>Thông tin liên hệ</h3>
                <p>53 Võ Văn Ngân - Phường Linh Chiêu - Tp. Thủ Đức - Tp. Hồ Chí Minh</p>
                <p>Điện thoại: 0337 xxx xxx</p>
                <p>Email: ninhhieu0337@gmail.com</p>
            </div>
            <div class="footer-links">
                <h3>Liên kết nhanh</h3>
                <ul>
                    <li><a href="./Nhom_E.php">Trang chủ</a></li>
                    <li><a href="#">Danh mục</a></li>
                    <li><a href="#">Liên hệ</a></li>
                    <li><a href="#">Chính sách bảo mật</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h3>Theo dõi chúng tôi</h3>
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; Trường Cao Đẳng Công Nghệ Thủ Đức</p>
        </div>
    </footer>
</div>