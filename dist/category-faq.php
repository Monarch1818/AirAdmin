<?php

session_start();

/*
|--------------------------------------------------------------------------
| FAQ Category Data
|--------------------------------------------------------------------------
| ใช้ Session เก็บข้อมูลชั่วคราว
| ภายหลังสามารถเปลี่ยนเป็น Database ได้
|--------------------------------------------------------------------------
*/

if (!isset($_SESSION['faq_categories'])) {

    $_SESSION['faq_categories'] = [

        [
            'id' => 41,
            'title' => 'Search'
        ],

        [
            'id' => 40,
            'title' => 'Services'
        ],

        [
            'id' => 37,
            'title' => 'What to do if user forgot password and input the wrong e-mail address ?'
        ],

        [
            'id' => 35,
            'title' => 'What to do if user forgot password and input the wrong e-mail address ?'
        ],

        [
            'id' => 34,
            'title' => 'Which browser can access the e-learning system ?'
        ],

        [
            'id' => 33,
            'title' => 'Which devices can access the e-learning system?'
        ]

    ];
}


/*
|--------------------------------------------------------------------------
| Add Category
|--------------------------------------------------------------------------
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = trim($_POST['category_title'] ?? '');

    if ($title !== '') {

        $newId = 1;

        if (!empty($_SESSION['faq_categories'])) {

            $ids = array_column(
                $_SESSION['faq_categories'],
                'id'
            );

            $newId = max($ids) + 1;
        }

        $_SESSION['faq_categories'][] = [

            'id' => $newId,

            'title' => $title

        ];

        header('Location: category-faq.php');

        exit;
    }
}


/*
|--------------------------------------------------------------------------
| Delete Category
|--------------------------------------------------------------------------
*/

if (isset($_GET['delete'])) {

    $deleteId = (int) $_GET['delete'];

    foreach ($_SESSION['faq_categories'] as $key => $category) {

        if ((int) $category['id'] === $deleteId) {

            unset($_SESSION['faq_categories'][$key]);

            break;
        }
    }

    $_SESSION['faq_categories'] =
        array_values($_SESSION['faq_categories']);

    header('Location: category-faq.php');

    exit;
}


/*
|--------------------------------------------------------------------------
| Page Mode
|--------------------------------------------------------------------------
*/

$isAddPage =
    isset($_GET['action']) &&
    $_GET['action'] === 'add';


$currentPage = basename($_SERVER['PHP_SELF']);

?>

<!doctype html>

<html lang="en">

<!--begin::Head-->
<?php include 'include/head.php'; ?>
<!--end::Head-->


<style>

/*
|--------------------------------------------------------------------------
| Category FAQ
|--------------------------------------------------------------------------
*/

/* Page background */
body {
    background-color: #f5f5f5;
}


/*
|--------------------------------------------------------------------------
| Breadcrumb
|--------------------------------------------------------------------------
| ทำให้เหมือนรูปตัวอย่าง
|--------------------------------------------------------------------------
*/

.category-faq-breadcrumb {
    background: #666666;

    color: #ffffff;

    padding: 10px 14px;

    margin: 0;

    min-height: 38px;

    font-size: 13px;

    font-weight: 600;
}

.category-faq-breadcrumb a {
    color: #ffffff;

    text-decoration: none;
}

.category-faq-breadcrumb a:hover {
    color: #ffffff;

    text-decoration: underline;
}

.category-faq-breadcrumb .separator {
    margin: 0 5px;

    color: #ffffff;
}


/*
|--------------------------------------------------------------------------
| Main Content
|--------------------------------------------------------------------------
*/

.category-faq-page {
    padding: 10px;
}


/*
|--------------------------------------------------------------------------
| Category FAQ Card
|--------------------------------------------------------------------------
*/

.category-faq-card {
    border: 1px solid #dddddd;

    border-radius: 0;

    box-shadow: none;

    background: #ffffff;

    margin-bottom: 20px;
}


/*
|--------------------------------------------------------------------------
| Widget Head
|--------------------------------------------------------------------------
| ทำให้เหมือน
|
| <div class="widget-head">
|     <h4 class="heading ...">Category FAQ</h4>
| </div>
|--------------------------------------------------------------------------
*/

.category-faq-card .card-header {

    position: relative;

    padding: 0;

    min-height: 32px;

    border: 0;

    border-bottom: 1px solid #dddddd;

    border-radius: 0;

    display: flex;

    align-items: center;

    background-color: #ffffff;

    /*
    Grid Background
    */
    background-image:
        linear-gradient(
            #eeeeee 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            #eeeeee 1px,
            transparent 1px
        );

    background-size: 10px 10px;
}


/*
|--------------------------------------------------------------------------
| Widget Head Title
|--------------------------------------------------------------------------
*/

/* Category FAQ ปกติ */
.category-faq-card .card-header .card-title {
    display: inline-flex;

    align-items: center;

    width: auto;

    min-height: 32px;

    margin: 0;

    padding: 7px 12px;

    background: transparent;

    color: #666666;

    font-size: 14px;

    font-weight: 600;

    line-height: 18px;

    border-radius: 0;
}


/*
|--------------------------------------------------------------------------
| Header Icon
|--------------------------------------------------------------------------
*/

.category-faq-card .card-header .card-title i {
    color: #666666;

    font-size: 13px;

    margin-right: 7px !important;
}

/* Add Category FAQ ยังคงมีพื้นหลังสีเทา */
.category-faq-add-page .card-header .card-title {
    background: #666666;

    color: #ffffff;
}

.category-faq-add-page .card-header .card-title i {
    color: #ffffff;
}


/*
|--------------------------------------------------------------------------
| Card Body
|--------------------------------------------------------------------------
*/

.category-faq-card .card-body {

    padding: 10px;

    background: #ffffff;
}


/*
|--------------------------------------------------------------------------
| Top Controls
|--------------------------------------------------------------------------
*/

.category-faq-controls {

    margin-bottom: 4px;
}


/*
|--------------------------------------------------------------------------
| Add Button
|--------------------------------------------------------------------------
*/

.category-faq-add-btn {

    background: #168de2;

    border: 1px solid #168de2;

    color: #ffffff;

    border-radius: 4px;

    font-size: 14px;

    font-weight: 600;

    padding: 7px 12px;

    text-decoration: none;
}

.category-faq-add-btn:hover {

    background: #087dcc;

    border-color: #087dcc;

    color: #ffffff;
}


/*
|--------------------------------------------------------------------------
| Showing
|--------------------------------------------------------------------------
*/

.category-faq-showing {

    display: flex;

    align-items: center;

    justify-content: flex-end;

    gap: 7px;

    font-size: 13px;

    font-weight: 600;
}

.category-faq-showing label {

    margin: 0;

    color: #222222;
}

.category-faq-showing select {

    width: 220px;

    height: 30px;

    padding: 4px 10px;

    border: 1px solid #cccccc;

    border-radius: 4px;

    background-color: #f5f5f5;

    color: #555555;

    font-size: 13px;
}


/*
|--------------------------------------------------------------------------
| Table
|--------------------------------------------------------------------------
*/

.category-faq-table {

    width: 100%;

    margin: 0;

    border-collapse: collapse;

    border: 1px solid #dddddd;

    font-size: 13px;
}


/*
|--------------------------------------------------------------------------
| Table Header
|--------------------------------------------------------------------------
*/

.category-faq-table thead th {

    background: #168de2;

    color: #ffffff;

    border: 1px solid #168de2;

    padding: 6px 10px;

    height: 28px;

    font-size: 13px;

    font-weight: 600;

    vertical-align: middle;
}


/*
|--------------------------------------------------------------------------
| Table Body
|--------------------------------------------------------------------------
*/

.category-faq-table tbody td {

    background: #ffffff;

    color: #333333;

    border: 1px solid #dddddd;

    padding: 5px 10px;

    height: 34px;

    vertical-align: middle;
}


/*
|--------------------------------------------------------------------------
| Table Hover
|--------------------------------------------------------------------------
*/

.category-faq-table tbody tr:hover td {

    background: #f7f7f7;
}


/*
|--------------------------------------------------------------------------
| Checkbox
|--------------------------------------------------------------------------
*/

.category-faq-table input[type="checkbox"] {

    width: 13px;

    height: 13px;

    margin: 0;

    cursor: pointer;
}


/*
|--------------------------------------------------------------------------
| Action Column
|--------------------------------------------------------------------------
*/

.category-faq-action {

    width: 120px;

    text-align: center;

    white-space: nowrap;
}


/*
|--------------------------------------------------------------------------
| Action Buttons
|--------------------------------------------------------------------------
*/

.category-faq-action .btn {

    width: 27px;

    height: 27px;

    padding: 0;

    margin: 0 2px;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    border-radius: 4px;

    font-size: 13px;
}


/*
|--------------------------------------------------------------------------
| View
|--------------------------------------------------------------------------
*/

.category-faq-view {

    background: #e5f3fb;

    border: 1px solid #c6dce8;

    color: #168de2;
}

.category-faq-view:hover {

    background: #d3ebf7;

    color: #168de2;
}


/*
|--------------------------------------------------------------------------
| Edit
|--------------------------------------------------------------------------
*/

.category-faq-edit {

    background: #f5f5f0;

    border: 1px solid #d8d8d0;

    color: #666666;
}

.category-faq-edit:hover {

    background: #eeeeea;

    color: #444444;
}


/*
|--------------------------------------------------------------------------
| Delete
|--------------------------------------------------------------------------
*/

.category-faq-delete {

    background: #f7eeee;

    border: 1px solid #dfcaca;

    color: #a33a3a;
}

.category-faq-delete:hover {

    background: #f0dddd;

    color: #8a2222;
}


/*
|--------------------------------------------------------------------------
| Card Footer
|--------------------------------------------------------------------------
*/

.category-faq-card .card-footer {

    padding: 10px;

    background: #ffffff;

    border-top: 0;

    border-radius: 0;
}


/*
|--------------------------------------------------------------------------
| Delete All Button
|--------------------------------------------------------------------------
*/

.category-faq-delete-all {

    background: #168de2;

    border: 1px solid #168de2;

    color: #ffffff;

    border-radius: 4px;

    font-size: 14px;

    font-weight: 600;

    padding: 7px 12px;
}

.category-faq-delete-all:hover {

    background: #087dcc;

    border-color: #087dcc;

    color: #ffffff;
}


/*
|--------------------------------------------------------------------------
| Add Page
|--------------------------------------------------------------------------
*/

.category-faq-form {

    max-width: 650px;
}

.category-faq-form label {

    display: block;

    margin-bottom: 7px;

    color: #333333;

    font-size: 13px;

    font-weight: 400;
}

.category-faq-form .required {

    color: #d9534f;
}

.category-faq-form input {

    width: 100%;

    height: 31px;

    padding: 5px 9px;

    border: 1px solid #cccccc;

    border-radius: 4px;

    font-size: 13px;

    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.05);
}

.category-faq-form input:focus {

    border-color: #168de2;

    outline: none;

    box-shadow:
        0 0 0 2px rgba(22, 141, 226, 0.12);
}


/*
|--------------------------------------------------------------------------
| Save Button
|--------------------------------------------------------------------------
*/

.category-faq-save {

    background: #168de2;

    border: 1px solid #168de2;

    color: #ffffff;

    border-radius: 4px;

    padding: 7px 14px;

    font-size: 14px;

    font-weight: 600;
}

.category-faq-save:hover {

    background: #087dcc;

    border-color: #087dcc;

    color: #ffffff;
}


/*
|--------------------------------------------------------------------------
| Cancel Button
|--------------------------------------------------------------------------
*/

.category-faq-cancel {

    background: #eeeeee;

    border: 1px solid #cccccc;

    color: #555555;

    border-radius: 4px;

    padding: 7px 14px;

    font-size: 14px;

    margin-left: 5px;
}

.category-faq-cancel:hover {

    background: #dddddd;

    color: #333333;
}


/*
|--------------------------------------------------------------------------
| Responsive
|--------------------------------------------------------------------------
*/

@media (max-width: 767px) {

    .category-faq-showing {

        justify-content: flex-start;

        margin-top: 10px;
    }

    .category-faq-showing select {

        width: 160px;
    }

    .category-faq-table {

        min-width: 700px;
    }

}

</style>


<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">


<!--begin::App Wrapper-->

<div class="app-wrapper">


    <!--begin::Header-->

    <?php include 'include/header.php'; ?>

    <!--end::Header-->


    <!--begin::Sidebar-->

    <?php include 'include/aside.php'; ?>

    <!--end::Sidebar-->


    <!--begin::App Main-->

    <main class="app-main">


        <!--begin::Breadcrumb-->

        <div class="category-faq-breadcrumb">

            <a href="./index.php">
                Home
            </a>

            <span class="separator">
                »
            </span>

            <span>
                <?= $isAddPage ? 'Category FAQ » Add Category FAQ' : 'Category FAQ' ?>
            </span>

        </div>

        <!--end::Breadcrumb-->


        <!--begin::App Content-->

        <div class="app-content">

            <div class="container-fluid category-faq-page">


                <?php if ($isAddPage): ?>


                    <!--begin::Add Category Card-->

                    <div class="card category-faq-card category-faq-add-page">


                        <!--begin::Card Header-->

                        <div class="card-header">

                            <h3 class="card-title">

                                <i class="fa-solid fa-pen-to-square"></i>

                                Add Category FAQ

                            </h3>

                        </div>

                        <!--end::Card Header-->


                        <!--begin::Form-->

                        <form
                            method="POST"
                            action="./category-faq.php"
                        >


                            <!--begin::Card Body-->

                            <div class="card-body">


                                <div class="category-faq-form">


                                    <div class="mb-3">

                                        <label
                                            for="category_title"
                                        >

                                            Category FAQ

                                            <span class="required">
                                                *
                                            </span>

                                        </label>


                                        <input
                                            type="text"
                                            id="category_title"
                                            name="category_title"
                                            required
                                        >

                                    </div>


                                </div>


                            </div>

                            <!--end::Card Body-->


                            <!--begin::Card Footer-->

                            <div class="card-footer">


                                <button
                                    type="submit"
                                    class="category-faq-save"
                                >

                                    <i class="fa-solid fa-check me-1"></i>

                                    Save

                                </button>


                            </div>

                            <!--end::Card Footer-->


                        </form>

                        <!--end::Form-->


                    </div>

                    <!--end::Add Category Card-->


                <?php else: ?>


                    <!--begin::Category FAQ Card-->

                    <div class="card category-faq-card">


                        <!--begin::Card Header-->

                        <div class="card-header">

                            <h3 class="card-title">

                                <i class="fa-solid fa-list"></i>

                                Category FAQ

                            </h3>

                        </div>

                        <!--end::Card Header-->


                        <!--begin::Card Body-->

                        <div class="card-body">


                            <!--begin::Top Controls-->

                            <div class="row category-faq-controls align-items-center">


                                <div class="col-md-6">

                                    <a
                                        href="./category-faq.php?action=add"
                                        class="category-faq-add-btn"
                                    >

                                        <i class="fa-solid fa-plus me-1"></i>

                                        Add Category FAQ

                                    </a>

                                </div>


                                <div class="col-md-6">

                                    <div class="category-faq-showing">

                                        <label
                                            for="showing"
                                        >
                                            Showing:
                                        </label>


                                        <select
                                            id="showing"
                                        >

                                            <option>
                                                Default (10)
                                            </option>

                                            <option>
                                                10
                                            </option>

                                            <option>
                                                50
                                            </option>

                                            <option>
                                                100
                                            </option>

                                            <option>
                                                200
                                            </option>

                                            <option>
                                                250
                                            </option>

                                        </select>

                                    </div>

                                </div>


                            </div>

                            <!--end::Top Controls-->


                            <!--begin::Table-->

                            <div class="table-responsive">


                                <table class="category-faq-table">


                                    <thead>

                                        <tr>

                                            <th style="width: 40px; text-align: center;">

                                                <input
                                                    type="checkbox"
                                                    id="checkAll"
                                                >

                                            </th>


                                            <th>
                                                Title
                                            </th>


                                            <th class="category-faq-action">
                                                Action
                                            </th>

                                        </tr>

                                    </thead>


                                    <tbody>


                                        <?php if (empty($_SESSION['faq_categories'])): ?>


                                            <tr>

                                                <td
                                                    colspan="3"
                                                    style="text-align: center;"
                                                >

                                                    No category FAQ found.

                                                </td>

                                            </tr>


                                        <?php else: ?>


                                            <?php foreach (
                                                $_SESSION['faq_categories']
                                                as $category
                                            ): ?>


                                                <tr>


                                                    <td style="text-align: center;">

                                                        <input
                                                            type="checkbox"
                                                            class="category-check"
                                                            value="<?= (int) $category['id'] ?>"
                                                        >

                                                    </td>


                                                    <td>

                                                        <?= htmlspecialchars(
                                                            $category['title'],
                                                            ENT_QUOTES,
                                                            'UTF-8'
                                                        ) ?>

                                                    </td>


                                                    <td class="category-faq-action">


                                                        <!-- View -->

                                                        <a
                                                            href="#"
                                                            class="btn category-faq-view"
                                                            title="View Detail"
                                                        >

                                                            <i class="fa-solid fa-eye"></i>

                                                        </a>


                                                        <!-- Edit -->

                                                        <a
                                                            href="#"
                                                            class="btn category-faq-edit"
                                                            title="Edit"
                                                        >

                                                            <i class="fa-solid fa-pencil"></i>

                                                        </a>


                                                        <!-- Delete -->

                                                        <a
                                                            href="./category-faq.php?delete=<?= (int) $category['id'] ?>"
                                                            class="btn category-faq-delete"
                                                            title="Delete"
                                                            onclick="return confirm('Are you sure you want to delete this item?');"
                                                        >

                                                            <i class="fa-solid fa-xmark"></i>

                                                        </a>


                                                    </td>


                                                </tr>


                                            <?php endforeach; ?>


                                        <?php endif; ?>


                                    </tbody>


                                </table>


                            </div>

                            <!--end::Table-->


                        </div>

                        <!--end::Card Body-->


                        <!--begin::Card Footer-->

                        <div class="card-footer">


                            <button
                                type="button"
                                class="category-faq-delete-all"
                                onclick="deleteSelected()"
                            >

                                <i class="fa-solid fa-minus me-1"></i>

                                Delete All

                            </button>


                        </div>

                        <!--end::Card Footer-->


                    </div>

                    <!--end::Category FAQ Card-->


                <?php endif; ?>


            </div>

        </div>

        <!--end::App Content-->


    </main>

    <!--end::App Main-->


    <!--begin::Footer-->

    <?php include 'include/footer.php'; ?>

    <!--end::Footer-->


</div>

<!--end::App Wrapper-->


<!--begin::Page Script-->

<script>

/*
|--------------------------------------------------------------------------
| Check All
|--------------------------------------------------------------------------
*/

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const checkAll =
            document.getElementById('checkAll');


        if (!checkAll) {

            return;

        }


        checkAll.addEventListener(
            'change',
            function () {

                document
                    .querySelectorAll('.category-check')
                    .forEach(
                        function (checkbox) {

                            checkbox.checked =
                                checkAll.checked;

                        }
                    );

            }
        );

    }
);


/*
|--------------------------------------------------------------------------
| Delete Selected
|--------------------------------------------------------------------------
*/

function deleteSelected() {

    const checked =
        document.querySelectorAll(
            '.category-check:checked'
        );


    if (checked.length === 0) {

        alert(
            'Please select at least one item.'
        );

        return;

    }


    if (
        !confirm(
            'Are you sure you want to delete selected items?'
        )
    ) {

        return;

    }


    /*
     * ตอนนี้ยังเป็น UI เท่านั้น
     * สามารถเชื่อม Database / Multi Delete ภายหลัง
     */

    alert(
        'Selected items are ready for deletion.'
    );

}

</script>

<!--end::Page Script-->


</body>

<!--end::Body-->

</html>