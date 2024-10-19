<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ form
    $categoryName = $_POST['categoryName'];
    $parentCategory = $_POST['parentCategory'];

    // Bạn có thể thêm code để lưu danh mục vào cơ sở dữ liệu tại đây

    // Điều hướng về lại trang danh sách danh mục
    header("Location: danhmuc.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Mới Danh Mục</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="<?php echo $url_path ?>/css/danhmuc.css" rel="stylesheet" type="text/css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e9ecef;
            color: black;
        }

        .sidebar {
            background: linear-gradient(135deg, #343a40, #212529);
            height: 100vh;
            padding: 1.5rem;
            color: white;
        }

        .sidebar a {
            color: #adb5bd;
            padding: 0.75rem 1.25rem;
            border-radius: 0.5rem;
            display: block;
            font-size: 1.1rem;
            transition: background-color 0.3s ease, color 0.3s ease;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
            color: #f8f9fa;
        }

        .content {
            padding: 2rem;
            background-color: #f8f9fa;
            border-radius: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        hr {
            border-top: 1px solid #dee2e6;
            margin: 1rem 0;
        }
    </style>
</head>

<body>
    <div class="container-fluid" style="font-size:1.7rem;">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-3 sidebar">
                <div class="d-flex flex-column h-100">
                    <a href="#" class="mb-3 menu-item"><i class="fas fa-user-shield"></i> Admin</a>
                    <a href="#" class="mb-3 menu-item"><i class="fas fa-chart-bar"></i> Theo dõi & Thống kê</a>
                    <a href="danhmuc.php" class="mb-3 menu-item active"><i class="fas fa-boxes"></i> Loại sản phẩm</a>
                    <a href="#" class="mb-3 menu-item"><i class="fas fa-box"></i> Sản phẩm</a>
                    <a href="#" class="mb-3 menu-item"><i class="fas fa-shopping-cart"></i> Đơn hàng</a>
                    <a href="#" class="mb-3 menu-item"><i class="fas fa-dollar-sign"></i> Doanh số</a>
                </div>
            </div>

            <!-- Nội dung chính -->
            <div class="col-9 content">
                <!-- Phần điều hướng -->
                <div class="d-flex justify-content-between mb-5">
                    <div>
                        <a href="danhmuc.php" class="text-decoration-none me-5 ms-5 text-dark">Trang chủ</a>
                        <a href="#" class="text-decoration-none me-5 text-dark">Danh mục</a>
                        <a href="#" class="text-decoration-none text-dark">Liên hệ</a>
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

                <!-- Form Thêm mới danh mục -->
                <div class="container mt-5">
                    <h4>Thêm Mới Danh Mục</h4>
                    <hr>
                    <form id="addCategoryForm">
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Tên Danh Mục</label>
                            <input type="text" class="form-control" id="categoryName" name="categoryName"
                                placeholder="Nhập tên danh mục" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm danh mục</button>
                        <a href="danhmuc-content.php" class="btn btn-secondary">Quay lại</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Hàm lưu danh mục vào LocalStorage
        function saveCategoryToLocalStorage(category) {
            const categories = JSON.parse(localStorage.getItem('categories')) || [];
            categories.push(category);
            localStorage.setItem('categories', JSON.stringify(categories));
        }

        // Xử lý form khi người dùng submit
        document.getElementById('addCategoryForm').addEventListener('submit', function (event) {
            event.preventDefault();

            const categoryName = document.getElementById('categoryName').value;
            const currentDate = new Date().toLocaleDateString();

            if (categoryName.trim() === "") {
                alert("Vui lòng nhập tên danh mục!");
                return;
            }

            // Tạo đối tượng danh mục mới
            const newCategory = {
                name: categoryName,
                date: currentDate
            };

            // Lưu danh mục vào LocalStorage
            saveCategoryToLocalStorage(newCategory);

            // Điều hướng về trang danh sách danh mục
            window.location.href = 'danhmuc.php';
        });
    </script>
</body>

</html>