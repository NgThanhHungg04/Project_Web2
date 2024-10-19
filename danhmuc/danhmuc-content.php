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
    <title>Danh mục</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid" style="font-size:1.7rem;">
        <div class="row">
            <div class="col-3 sidebar">
                <div class="d-flex flex-column h-100">
                    <a href="#" class="mb-3 menu-item"><i class="fas fa-user-shield"></i> Admin</a>
                    <a href="#" class="mb-3 menu-item"><i class="fas fa-chart-bar"></i> Theo dõi & Thống kê</a>
                    <a href="#" class="mb-3 menu-item active"><i class="fas fa-boxes"></i> Loại sản phẩm</a>
                    <a href="#" class="mb-3 menu-item"><i class="fas fa-box"></i> Sản phẩm</a>
                    <a href="#" class="mb-3 menu-item"><i class="fas fa-shopping-cart"></i> Đơn hàng</a>
                    <a href="#" class="mb-3 menu-item"><i class="fas fa-dollar-sign"></i> Doanh số</a>
                </div>
            </div>
            <div class="col-9 content">
                <div class="d-flex justify-content-between mb-5">
                    <div>
                        <a href="#" class="text-decoration-none me-5 ms-5 link-black">Trang chủ</a>
                        <a href="#" class="text-decoration-none me-5 link-black">Danh mục</a>
                        <a href="#" class="text-decoration-none link-black">Liên hệ</a>
                    </div>

                    <div class="input-group me-5" style="max-width: 300px;">
                        <input type="text" class="form-control" id="searchInput" placeholder="Search"
                            aria-label="Search" aria-describedby="search-addon">
                        <button class="btn btn-outline-success" type="button" id="search-addon"
                            onclick="searchCategories()">
                            <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-outline-danger" type="button" id="clear-addon" style="display: none;"
                            onclick="clearSearch()">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>




                <hr>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="text-dark mb-3">Loại sản phẩm - </h2>
                    <a href="themmoi-content.php"
                        class="btn btn-dark d-flex justify-content-center align-items-center">Thêm Mới</a>

                </div>


                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Tên danh mục</th>
                            <th>Ngày tạo</th>
                            <th>Sửa | Xóa</th>
                        </tr>
                    </thead>
                    <tbody id="categoryTableBody">
                        <!-- Các dòng sẽ được thêm vào ở đây -->
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script>
        // Hàm hiển thị danh mục từ LocalStorage
        function renderCategories() {
            const categories = JSON.parse(localStorage.getItem('categories')) || [];

            const tableBody = document.getElementById('categoryTableBody');
            tableBody.innerHTML = ''; // Xóa nội dung cũ

            categories.forEach((category, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${category.name}</td>
                    <td>${category.date}</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editCategory(${index})">Sửa</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteCategory(${index})">Xóa</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Gọi hàm render khi tải trang
        renderCategories();
    </script>

</body>

</html>