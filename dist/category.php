<?php
// =====================================================
// Category Management
// =====================================================


// =====================================================
// Category Data - Page 1
// =====================================================

$categoriesPage1 = [
    [
        'id' => 41,
        'image' => './assets/img/default-150x150.png',
        'title' => 'หมวด A'
    ],
    [
        'id' => 42,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/42/small/26092024083744_Picture.png',
        'title' => 'P&S'
    ],
    [
        'id' => 43,
        'image' => './assets/img/default-150x150.png',
        'title' => 'P&H'
    ],
    [
        'id' => 44,
        'image' => './assets/img/default-150x150.png',
        'title' => 'Category recheck bf uat'
    ],
    [
        'id' => 45,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/45/small/20022023131054_Picture.png',
        'title' => 'UAT category'
    ],
    [
        'id' => 46,
        'image' => './assets/img/default-150x150.png',
        'title' => 'BHmini19HT Technical Training'
    ],
    [
        'id' => 47,
        'image' => './assets/img/default-150x150.png',
        'title' => 'Customer Service Training'
    ],
    [
        'id' => 48,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/48/small/08032023074349_Picture.jpg',
        'title' => 'Basic'
    ],
    [
        'id' => 49,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/49/small/08032023165028_Picture.jpg',
        'title' => 'Inkjet Printer Training'
    ],
    [
        'id' => 50,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/50/small/09032023064130_Picture.jpg',
        'title' => 'DCP-t420w '
    ]
];


// =====================================================
// Category Data - Page 2
// =====================================================

$categoriesPage2 = [
    [
        'id' => 51,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/51/small/29032023080359_Picture.jpg',
        'title' => 'ECL Series Training'
    ],
    [
        'id' => 52,
        'image' => './assets/img/default-150x150.png',
        'title' => 'HSM Low End Training'
    ],
    [
        'id' => 58,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/58/small/09122024012258_Picture.png',
        'title' => 'Type of Wifi Connections for HSM'
    ],
    [
        'id' => 59,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/59/small/09122024014202_Picture.jpg',
        'title' => 'Machine Repair (NV2600)'
    ],
    [
        'id' => 62,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/62/small/07082024032244_Picture.png',
        'title' => 'CRM D365 New'
    ],
    [
        'id' => 63,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/63/small/26092024084343_Picture.png',
        'title' => 'Customer Service '
    ],
    [
        'id' => 65,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/65/small/09122024015559_Picture.jpg',
        'title' => 'Overlock 2104D '
    ],
    [
        'id' => 66,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/66/small/09122024024914_Picture.jpg',
        'title' => 'Computerize Sewing Machine A80'
    ],
    [
        'id' => 67,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/67/small/09122024031352_Picture.jpg',
        'title' => 'Common Problems Face'
    ],
    [
        'id' => 68,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/68/small/09122024033039_Picture.jpg',
        'title' => 'Embroidery Machine NV880e'
    ]
];


// =====================================================
// Category Data - Page 3
// =====================================================

$categoriesPage3 = [
    [
        'id' => 69,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/69/small/09122024035704_Picture.jpg',
        'title' => 'PR680W'
    ],
    [
        'id' => 70,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/70/small/09122024052713_Picture.jpg',
        'title' => 'PR1055X'
    ],
    [
        'id' => 71,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/category/71/small/09122024054732_Picture.jpg',
        'title' => 'VR'
    ]
];


// =====================================================
// Current Page
// =====================================================

$currentPage = isset($_GET['Category_page'])
    ? (int) $_GET['Category_page']
    : 1;


if ($currentPage < 1 || $currentPage > 3) {
    $currentPage = 1;
}


// =====================================================
// Select Data For Current Page
// =====================================================

if ($currentPage === 2) {

    $categories = $categoriesPage2;

} elseif ($currentPage === 3) {

    $categories = $categoriesPage3;

} else {

    $categories = $categoriesPage1;

}

?>


<!doctype html>

<html lang="en">


<!--begin::Head-->

<?php include 'include/head.php';?>

<!--end::Head-->


<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">


    <div class="app-wrapper">


        <!--begin::Header-->

        <?php include 'include/header.php';?>

        <!--end::Header-->


        <!--begin::Sidebar-->

        <?php include 'include/aside.php';?>

        <!--end::Sidebar-->


        <!--begin::Main-->

        <main class="app-main">


            <!-- =====================================================
                 CUSTOM CSS
            ====================================================== -->

            <style>


                /* ================================================
                   PAGE
                ================================================ */

                body {
                    background-color: #f4f6f9;
                }


                /* ================================================
                   CONTENT HEADER / BREADCRUMB
                ================================================ */

                .content-header {
                    background-color: #3a3a3a;
                    color: #ffffff;
                    min-height: 34px;
                    padding: 8px 16px;
                }

                .breadcrumb-custom {
                    margin: 0;
                    padding: 0;
                    list-style: none;
                    font-size: 12px;
                    font-weight: 600;
                }

                .breadcrumb-custom a {
                    color: #ffffff;
                    text-decoration: none;
                }

                .breadcrumb-custom a:hover {
                    text-decoration: underline;
                }

                .breadcrumb-custom span {
                    margin: 0 4px;
                }


                /* ================================================
                   MAIN CONTENT
                ================================================ */

                .content {
                    padding: 10px;
                }

                .category-card {
                    background: #ffffff;
                    border: 1px solid #dddddd;
                    border-radius: 0;
                    min-height: 600px;
                }


                /* ================================================
                   CARD HEADER
                ================================================ */

                .category-header {
                    height: 35px;
                    display: flex;
                    align-items: center;
                    padding: 0 12px;
                    background: #666666;
                    color: #ffffff;
                    font-size: 13px;
                    font-weight: 600;
                }

                .category-header i {
                    margin-right: 7px;
                }


                /* ================================================
                   NOTE
                ================================================ */

                .category-toolbar {
                    padding: 10px 15px;
                    border-bottom: 1px solid #dddddd;
                    min-height: 50px;
                }

                .note-label {
                    display: inline-block;
                    background: #ed1c24;
                    color: #ffffff;
                    padding: 5px 8px;
                    font-size: 11px;
                    line-height: 1.4;
                    border-radius: 2px;
                }

                .showing-area {
                    float: right;
                    display: flex;
                    align-items: center;
                    gap: 7px;
                    font-size: 12px;
                }

                .showing-label {
                    font-weight: 600;
                }

                .showing-select {
                    height: 27px;
                    min-width: 120px;
                    padding: 2px 7px;
                    border: 1px solid #cccccc;
                    border-radius: 3px;
                    background: #ffffff;
                    font-size: 12px;
                }


                /* ================================================
                   TABLE
                ================================================ */

                .table-wrapper {
                    width: 100%;
                    overflow-x: auto;
                    padding: 0 15px;
                }

                .category-table {
                    width: 100%;
                    min-width: 720px;
                    margin-top: 0;
                    border-collapse: collapse;
                    font-size: 12px;
                }


                /* TABLE HEADER - BLUE */

                .category-table th {
                    background: #168bea;
                    color: #ffffff;
                    border: 1px solid #087acb;
                    padding: 7px 8px;
                    height: 32px;
                    font-weight: 600;
                    text-align: left;
                    white-space: nowrap;
                }

                .category-table th.checkbox-column {
                    width: 38px;
                    text-align: center;
                }

                .category-table th.image-column {
                    width: 120px;
                }

                .category-table th.action-column {
                    width: 110px;
                    text-align: center;
                }

                .category-table td {
                    border: 1px solid #dddddd;
                    padding: 6px 8px;
                    height: 50px;
                    vertical-align: middle;
                    background: #ffffff;
                }

                .category-table tbody tr:nth-child(even) td {
                    background: #f8f8f8;
                }

                .category-table tbody tr:hover td {
                    background: #eeeeee;
                }

                .category-table td.checkbox-column {
                    text-align: center;
                }

                .category-table td.image-column {
                    width: 120px;
                }

                .category-image {
                    width: 110px;
                    height: 90px;
                    object-fit: cover;
                    display: block;
                    border: 1px solid #dddddd;
                    background: #eeeeee;
                }

                .category-title {
                    color: #333333;
                    font-size: 12px;
                }

                .action-column {
                    text-align: center;
                }


                /* ================================================
                   ACTION BUTTONS
                ================================================ */

                .action-btn {
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    width: 28px;
                    height: 27px;
                    margin: 1px;
                    border-radius: 3px;
                    color: #ffffff;
                    text-decoration: none;
                    border: 1px solid transparent;
                    cursor: pointer;
                    font-size: 13px;
                }

                .action-btn:hover {
                    color: #ffffff;
                    opacity: 0.85;
                }

                .view-btn {
                    background: #17a2b8;
                    border-color: #138496;
                }

                .edit-btn {
                    background: #28a745;
                    border-color: #218838;
                }

                .delete-btn {
                    background: #dc3545;
                    border-color: #c82333;
                }


                /* ================================================
                   FILTER
                ================================================ */

                .filter-row td {
                    height: 35px;
                    padding: 4px 7px;
                    background: #f4f4f4 !important;
                }

                .filter-input {
                    width: 100%;
                    max-width: 500px;
                    height: 25px;
                    padding: 3px 7px;
                    border: 1px solid #cccccc;
                    border-radius: 3px;
                    font-size: 12px;
                    outline: none;
                }

                .filter-input:focus {
                    border-color: #80bdff;
                    box-shadow: 0 0 0 1px rgba(0,123,255,.15);
                }


                /* ================================================
                   PAGINATION
                ================================================ */

                .pagination-wrapper {
                    display: flex;
                    justify-content: flex-end;
                    padding: 12px 15px;
                }

                .pagination-custom {
                    display: flex;
                    margin: 0;
                    padding: 0;
                    list-style: none;
                }

                .pagination-custom li {
                    margin-left: 3px;
                }

                .pagination-custom a {
                    display: block;
                    min-width: 30px;
                    height: 28px;
                    line-height: 28px;
                    padding: 0 8px;
                    text-align: center;
                    border: 1px solid #cccccc;
                    border-radius: 3px;
                    background: #ffffff;
                    color: #333333;
                    text-decoration: none;
                    font-size: 11px;
                }

                .pagination-custom a:hover {
                    background: #eeeeee;
                }


                /* CURRENT PAGE - BLUE */

                .pagination-custom .active a {
                    background: #168bea;
                    border-color: #087acb;
                    color: #ffffff;
                }


                /* ================================================
                   OPTIONS
                ================================================ */

                .options-area {
                    padding: 10px 15px;
                    margin-top: 10px;
                }


                /* DELETE ALL - BLUE */

                .delete-all-btn {
                    background: #168bea;
                    border: 1px solid #087acb;
                    color: #ffffff;
                    padding: 5px 12px;
                    border-radius: 3px;
                    font-size: 12px;
                    cursor: pointer;
                    text-decoration: none;
                    display: inline-flex;
                    align-items: center;
                    gap: 5px;
                }

                .delete-all-btn:hover {
                    background: #087acb;
                    border-color: #087acb;
                    color: #ffffff;
                }


                /* ================================================
                   CLEAR
                ================================================ */

                .clearfix::after {
                    content: "";
                    display: table;
                    clear: both;
                }


                /* ================================================
                   RESPONSIVE
                ================================================ */

                @media (max-width: 768px) {

                    .content-header {
                        padding: 8px 12px;
                    }

                    .content {
                        padding: 8px;
                    }

                    .category-card {
                        min-height: auto;
                    }

                    .category-toolbar {
                        padding: 10px;
                    }

                    .note-label {
                        display: block;
                        margin-bottom: 10px;
                    }

                    .showing-area {
                        float: none;
                        justify-content: flex-start;
                    }

                    .table-wrapper {
                        padding: 0 10px;
                    }

                    .category-table {
                        min-width: 700px;
                    }

                    .options-area {
                        padding: 10px;
                    }

                }


                @media (max-width: 480px) {

                    .content-header {
                        padding: 8px 10px;
                    }

                    .breadcrumb-custom {
                        font-size: 11px;
                    }

                    .category-header {
                        font-size: 12px;
                    }

                    .category-toolbar {
                        padding: 8px;
                    }

                    .note-label {
                        font-size: 10px;
                    }

                    .showing-area {
                        font-size: 11px;
                    }

                    .table-wrapper {
                        padding: 0 8px;
                    }

                    .pagination-wrapper {
                        justify-content: center;
                        padding: 10px 5px;
                    }

                    .pagination-custom a {
                        min-width: 27px;
                        padding: 0 5px;
                    }

                }

            </style>


            <!-- =====================================================
                 CONTENT HEADER
            ====================================================== -->

            <div class="content-header">

                <ul class="breadcrumb-custom">

                    <li>

                        <a href="./index.php">
                            Home
                        </a>

                        <span>»</span>

                        <a href="./category.php">
                            Category
                        </a>

                    </li>

                </ul>

            </div>


            <!-- =====================================================
                 MAIN CONTENT
            ====================================================== -->

            <div class="content">

                <div class="category-card">


                    <!-- Card Header -->

                    <div class="category-header">

                        <i class="bi bi-grid-3x3-gap-fill"></i>

                        Category Management

                    </div>


                    <!-- Toolbar -->

                    <div class="category-toolbar clearfix">

                        <span class="note-label">

                            * Note: If deleting a course category Courses, lessons (videos), exams will also be deleted.

                        </span>


                        <div class="showing-area">

                            <span class="showing-label">
                                Showing:
                            </span>

                            <select
                                class="showing-select"
                                name="news_per_page"
                                id="news_per_page"
                                onchange="changePerPage(this.value)"
                            >

                                <option value="">
                                    Default (10)
                                </option>

                                <option value="10">
                                    10
                                </option>

                                <option value="50">
                                    50
                                </option>

                                <option value="100">
                                    100
                                </option>

                                <option value="200">
                                    200
                                </option>

                                <option value="250">
                                    250
                                </option>

                            </select>

                        </div>

                    </div>


                    <!-- Table -->

                    <div class="table-wrapper">

                        <table class="category-table">


                            <thead>

                                <tr>

                                    <th class="checkbox-column">

                                        <input
                                            type="checkbox"
                                            id="chk_all"
                                            onclick="selectAll(this)"
                                        >

                                    </th>


                                    <th class="image-column">
                                        Image
                                    </th>


                                    <th>
                                        Title
                                    </th>


                                    <th class="action-column">
                                        Action
                                    </th>

                                </tr>


                                <!-- Filter -->

                                <tr class="filter-row">

                                    <td>
                                        &nbsp;
                                    </td>

                                    <td>
                                        &nbsp;
                                    </td>

                                    <td>

                                        <input
                                            type="text"
                                            id="titleFilter"
                                            class="filter-input"
                                            placeholder=""
                                            onkeyup="filterCategory()"
                                        >

                                    </td>

                                    <td>
                                        &nbsp;
                                    </td>

                                </tr>

                            </thead>


                            <tbody id="categoryTableBody">

                                <?php foreach ($categories as $category): ?>

                                    <tr>


                                        <!-- Checkbox -->

                                        <td class="checkbox-column">

                                            <input
                                                type="checkbox"
                                                class="category-check"
                                                name="chk[]"
                                                value="<?php echo $category['id']; ?>"
                                            >

                                        </td>


                                        <!-- Image -->

                                        <td class="image-column">

                                            <img
                                                class="category-image"
                                                src="<?php echo htmlspecialchars($category['image']); ?>"
                                                alt="<?php echo htmlspecialchars($category['title']); ?>"
                                                onerror="this.src='./assets/img/default-150x150.png';"
                                            >

                                        </td>


                                        <!-- Title -->

                                        <td class="category-title">

                                            <?php echo htmlspecialchars($category['title']); ?>

                                        </td>


                                        <!-- Action -->

                                        <td class="action-column">


                                            <!-- View -->

                                            <a
                                                href="./category-view.php?id=<?php echo $category['id']; ?>"
                                                class="action-btn view-btn"
                                                title="View Detail"
                                            >

                                                <i class="bi bi-eye"></i>

                                            </a>


                                            <!-- Edit -->

                                            <a
                                                href="./category-edit.php?id=<?php echo $category['id']; ?>"
                                                class="action-btn edit-btn"
                                                title="Edit"
                                            >

                                                <i class="bi bi-pencil"></i>

                                            </a>


                                            <!-- Delete -->

                                            <a
                                                href="#"
                                                class="action-btn delete-btn"
                                                title="Delete"
                                                onclick="return deleteCategory(<?php echo $category['id']; ?>);"
                                            >

                                                <i class="bi bi-trash"></i>

                                            </a>


                                        </td>

                                    </tr>

                                <?php endforeach; ?>

                            </tbody>

                        </table>

                    </div>


                    <!-- =====================================================
                         Pagination
                         อิงจาก Inspector
                    ====================================================== -->

                    <div class="pagination-wrapper">

                        <ul class="pagination-custom">


                            <!-- First -->

                            <li
                                style="<?php echo ($currentPage === 1) ? 'display:none;' : ''; ?>"
                            >

                                <a href="./category.php">

                                    &lt;&lt; First

                                </a>

                            </li>


                            <!-- Previous -->

                            <li
                                style="<?php echo ($currentPage === 1) ? 'display:none;' : ''; ?>"
                            >

                                <?php if ($currentPage === 2): ?>

                                    <a href="./category.php">

                                        &lt; Previous

                                    </a>

                                <?php else: ?>

                                    <a href="./category.php?Category_page=2">

                                        &lt; Previous

                                    </a>

                                <?php endif; ?>

                            </li>


                            <!-- Page 1 -->

                            <li
                                class="<?php echo ($currentPage === 1) ? 'active' : ''; ?>"
                            >

                                <a href="./category.php">

                                    1

                                </a>

                            </li>


                            <!-- Page 2 -->

                            <li
                                class="<?php echo ($currentPage === 2) ? 'active' : ''; ?>"
                            >

                                <a href="./category.php?Category_page=2">

                                    2

                                </a>

                            </li>


                            <!-- Page 3 -->

                            <li
                                class="<?php echo ($currentPage === 3) ? 'active' : ''; ?>"
                            >

                                <a href="./category.php?Category_page=3">

                                    3

                                </a>

                            </li>


                            <!-- Next -->

                            <li
                                style="<?php echo ($currentPage === 3) ? 'display:none;' : ''; ?>"
                            >

                                <?php if ($currentPage === 1): ?>

                                    <a href="./category.php?Category_page=2">

                                        Next &gt;

                                    </a>

                                <?php else: ?>

                                    <a href="./category.php?Category_page=3">

                                        Next &gt;

                                    </a>

                                <?php endif; ?>

                            </li>


                            <!-- Last -->

                            <li
                                style="<?php echo ($currentPage === 3) ? 'display:none;' : ''; ?>"
                            >

                                <a href="./category.php?Category_page=3">

                                    Last &gt;&gt;

                                </a>

                            </li>


                        </ul>

                    </div>

                </div>


                <!-- =====================================================
                     OPTIONS
                ====================================================== -->

                <div class="options-area clearfix">

                    <div class="buttons">

                        <a
                            href="#"
                            class="delete-all-btn"
                            onclick="return deleteSelected();"
                        >

                            <i class="bi bi-dash-circle"></i>

                            Delete All

                        </a>

                    </div>

                </div>

            </div>

        </main>

        <!--end::Main-->


        <!--begin::Footer-->

        <?php include 'include/footer.php';?>

        <!--end::Footer-->

    </div>


    <!--begin::Scripts-->

    <script src="./js/adminlte.js"></script>


    <script>


        // =====================================================
        // Select All
        // =====================================================

        function selectAll(source) {

            const checkboxes =
                document.querySelectorAll('.category-check');

            checkboxes.forEach(function (checkbox) {

                checkbox.checked =
                    source.checked;

            });

        }


        // =====================================================
        // Delete Single Category
        // =====================================================

        function deleteCategory(id) {

            const confirmDelete =
                confirm(
                    'Are you sure you want to delete this category?\n\n' +
                    'Courses, lessons (videos), exams will also be deleted.'
                );


            if (!confirmDelete) {

                return false;

            }


            alert(
                'Category ID ' +
                id +
                ' is ready to be deleted.'
            );


            return false;

        }


        // =====================================================
        // Delete Selected
        // =====================================================

        function deleteSelected() {

            const selected =
                document.querySelectorAll(
                    '.category-check:checked'
                );


            if (selected.length === 0) {

                alert(
                    'Please select at least one category.'
                );

                return false;

            }


            const confirmDelete =
                confirm(
                    'Are you sure you want to delete the selected categories?\n\n' +
                    'Courses, lessons (videos), exams will also be deleted.'
                );


            if (!confirmDelete) {

                return false;

            }


            alert(
                selected.length +
                ' category(s) selected for deletion.'
            );


            return false;

        }


        // =====================================================
        // Filter Category
        // =====================================================

        function filterCategory() {

            const input =
                document.getElementById(
                    'titleFilter'
                );


            const filter =
                input.value.toLowerCase();


            const rows =
                document.querySelectorAll(
                    '#categoryTableBody tr'
                );


            rows.forEach(function (row) {

                const title =
                    row.querySelector(
                        '.category-title'
                    );


                if (!title) {

                    return;

                }


                const text =
                    title.textContent.toLowerCase();


                if (text.indexOf(filter) > -1) {

                    row.style.display = '';

                } else {

                    row.style.display = 'none';

                }

            });

        }


        // =====================================================
        // Showing
        // =====================================================

        function changePerPage(value) {

            if (value === '') {

                return;

            }


            console.log(
                'Showing:',
                value
            );

        }

    </script>


    <!--end::Scripts-->


</body>

<!--end::Body-->

</html>

