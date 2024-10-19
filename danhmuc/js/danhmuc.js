// Mảng các danh mục có sẵn
let categories = [
    { name: 'iPhone', date: '05/10/2024' },
    { name: 'Vivo', date: '06/10/2024' },
    { name: 'Samsung', date: '08/10/2024' },
    { name: 'Oppo', date: '10/10/2024' }
];

// Hàm hiển thị danh mục lên bảng
function renderCategories(categoriesToDisplay) {
    const tableBody = document.getElementById('categoryTableBody');
    tableBody.innerHTML = ''; // Xóa nội dung cũ

    categoriesToDisplay.forEach((category, index) => {
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

// Hàm tìm kiếm danh mục
function searchCategories() {
    const searchInput = document.getElementById('searchInput').value.toLowerCase();
    const filteredCategories = categories.filter(category =>
        category.name.toLowerCase().includes(searchInput)
    );

    // Hiển thị kết quả tìm kiếm
    renderCategories(filteredCategories);

    // Hiển thị nút clear nếu có từ khóa tìm kiếm
    document.getElementById('clear-addon').style.display = searchInput ? 'block' : 'none';
}

// Hàm xóa danh mục
function deleteCategory(index) {
    categories.splice(index, 1); // Xóa danh mục tại vị trí index
    renderCategories(categories); // Cập nhật lại bảng
}

// Hàm sửa danh mục (giả sử hiển thị form chỉnh sửa ở nơi khác)
function editCategory(index) {
    const category = categories[index];
    alert(`Chỉnh sửa danh mục: ${category.name}`);
    // Logic chỉnh sửa sẽ được thực hiện ở đây
}

// Hàm thêm mới danh mục
function addCategory() {
    const categoryName = document.getElementById('categoryName').value;
    const currentDate = new Date().toLocaleDateString(); // Lấy ngày hiện tại

    // Kiểm tra xem tên danh mục có rỗng không
    if (categoryName.trim() === "") {
        alert("Vui lòng nhập tên danh mục!");
        return;
    }

    // Thêm danh mục mới vào mảng
    categories.push({
        name: categoryName,
        date: currentDate
    });

    // Cập nhật lại bảng
    renderCategories(categories);

    // Xóa nội dung input sau khi thêm
    document.getElementById('categoryName').value = '';

    alert("Danh mục đã được thêm thành công!");
}

// Hàm xóa tìm kiếm và hiển thị tất cả danh mục
function clearSearch() {
    document.getElementById('searchInput').value = '';
    renderCategories(categories);
    document.getElementById('clear-addon').style.display = 'none';
}

// Hiển thị danh mục ban đầu
renderCategories(categories);
