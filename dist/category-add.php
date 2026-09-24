<?php
// =====================================================
// Category Add
// =====================================================

// ถ้าต้องการรับข้อมูลในอนาคต สามารถเพิ่ม PHP INSERT DATABASE ตรงนี้ได้
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'] ?? '';
    $short_detail = $_POST['short_detail'] ?? '';
    $detail = $_POST['detail'] ?? '';

    // ตอนนี้ยังไม่ได้เชื่อม Database
    // สามารถเพิ่มคำสั่ง INSERT ภายหลังได้

    if (!empty($title) && !empty($short_detail)) {
        $message = 'Category saved successfully.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include './include/aside.php'; ?>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Add Category - Brother Admin</title>


    <!-- =================================================
         Bootstrap Icons
    ================================================== -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    >


    <!-- =================================================
         AdminLTE
    ================================================== -->
    <link
        rel="stylesheet"
        href="./css/adminlte.css"
    >


    <!-- =================================================
         Custom CSS
    ================================================== -->
    <style>

        /* ================================================
           PAGE
        ================================================ */

        body {
            background-color: #f4f6f9;
        }


        /* ================================================
           BREADCRUMB
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

            min-height: 770px;
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
           FORM
        ================================================ */

        .category-form {
            padding: 10px 25px 25px 25px;
        }


        .form-group {
            margin-bottom: 17px;
        }


        .form-label {
            display: block;

            margin-bottom: 5px;

            color: #111111;

            font-size: 12px;
        }


        .required {
            color: red;
        }


        /* ================================================
           INPUT
        ================================================ */

        .form-control-custom {
            width: 548px;

            max-width: 100%;

            height: 26px;

            padding: 3px 7px;

            border: 1px solid #cccccc;

            border-radius: 3px;

            background: #ffffff;

            font-size: 12px;

            outline: none;
        }


        .form-control-custom:focus {
            border-color: #80bdff;

            box-shadow: 0 0 0 1px rgba(0,123,255,.15);
        }


        /* ================================================
           SHORT DETAIL
        ================================================ */

        .short-detail {
            width: 548px;

            max-width: 100%;

            height: 92px;

            resize: vertical;

            padding: 7px;

            border: 1px solid #cccccc;

            border-radius: 3px;

            font-size: 12px;
        }


        /* ================================================
           DETAIL
        ================================================ */

        .detail-label {
            margin-bottom: 6px;
        }


        /* TinyMCE */
        .editor-wrapper {
            width: 570px;

            max-width: 100%;
        }


        /* ================================================
           IMAGE
        ================================================ */

        .image-upload {
            display: flex;

            align-items: center;

            width: 570px;

            max-width: 100%;
        }


        .image-name {
            flex: 1;

            height: 26px;

            border: 1px solid #cccccc;

            border-right: none;

            border-radius: 3px 0 0 3px;

            padding: 3px 7px;

            font-size: 12px;

            background: #ffffff;
        }


        .select-file {
            height: 26px;

            border: 1px solid #cccccc;

            background: #eeeeee;

            padding: 2px 10px;

            border-radius: 0 3px 3px 0;

            font-size: 12px;

            cursor: pointer;
        }


        .select-file:hover {
            background: #dddddd;
        }


        .size-text {
            margin-top: 7px;

            color: red;

            font-size: 11px;
        }


        /* ================================================
           SAVE BUTTON
        ================================================ */

        .save-btn {
            margin-top: 10px;

            background: #168bea;

            border: 1px solid #087acb;

            color: #ffffff;

            padding: 5px 12px;

            border-radius: 3px;

            font-size: 12px;

            cursor: pointer;
        }


        .save-btn:hover {
            background: #087acb;
        }


        .save-btn i {
            margin-right: 5px;
        }


        /* ================================================
           SUCCESS MESSAGE
        ================================================ */

        .success-message {
            margin-bottom: 15px;

            padding: 8px 10px;

            background: #d4edda;

            border: 1px solid #c3e6cb;

            color: #155724;

            font-size: 12px;

            border-radius: 3px;
        }


        /* ================================================
           RESPONSIVE
        ================================================ */

        @media (max-width: 768px) {

            .category-form {
                padding: 10px 15px 20px;
            }


            .form-control-custom,
            .short-detail,
            .editor-wrapper,
            .image-upload {
                width: 100%;
            }


            .content {
                padding: 8px;
            }


            .category-card {
                min-height: auto;
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


            .category-form {
                padding: 10px;
            }

        }

    </style>

</head>


<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">


<div class="app-wrapper">


    <!-- =================================================
         HEADER
    ================================================== -->

    <?php include './include/header.php'; ?>


    <!-- =================================================
         SIDEBAR
    ================================================== -->

    <?php include './include/aside.php'; ?>


    <!-- =================================================
         MAIN
    ================================================== -->

    <main class="app-main">


        <!-- =============================================
             BREADCRUMB
        ============================================== -->

        <div class="content-header">

            <div class="breadcrumb-custom">

                <a href="./index.php">
                    Home
                </a>

                <span>»</span>

                <a href="./category.php">
                    Category
                </a>

                <span>»</span>

                <span>
                    Add Category
                </span>

            </div>

        </div>



        <!-- =============================================
             CONTENT
        ============================================== -->

        <div class="content">

            <div class="category-card">


                <!-- =====================================
                     TITLE
                ====================================== -->

                <div class="category-header">

                    <i class="bi bi-pencil-square"></i>

                    Add Category

                </div>



                <!-- =====================================
                     FORM
                ====================================== -->

                <form
                    method="POST"
                    enctype="multipart/form-data"
                    class="category-form"
                >


                    <?php if (!empty($message)): ?>

                        <div class="success-message">

                            <i class="bi bi-check-circle"></i>

                            <?php echo htmlspecialchars($message); ?>

                        </div>

                    <?php endif; ?>



                    <!-- =================================
                         TITLE
                    ================================== -->

                    <div class="form-group">

                        <label class="form-label">

                            Title

                            <span class="required">
                                *
                            </span>

                        </label>


                        <input
                            type="text"
                            name="title"
                            class="form-control-custom"
                            required
                        >

                    </div>



                    <!-- =================================
                         SHORT DETAIL
                    ================================== -->

                    <div class="form-group">

                        <label class="form-label">

                            Short Detail

                            <span class="required">
                                *
                            </span>

                        </label>


                        <textarea
                            name="short_detail"
                            class="short-detail"
                            required
                        ></textarea>

                    </div>



                    <!-- =================================
                         DETAIL
                    ================================== -->

                    <div class="form-group">

                        <label class="form-label detail-label">

                            Detail

                        </label>


                        <div class="editor-wrapper">

                            <textarea
                                id="detail"
                                name="detail"
                            ></textarea>

                        </div>

                    </div>



                    <!-- =================================
                         IMAGE
                    ================================== -->

                    <div class="form-group">

                        <label class="form-label">

                            Image

                        </label>


                        <div class="image-upload">

                            <input
                                type="text"
                                id="file-name"
                                class="image-name"
                                readonly
                            >


                            <label
                                for="image"
                                class="select-file"
                            >
                                Select file
                            </label>


                            <input
                                type="file"
                                id="image"
                                name="image"
                                accept="image/*"
                                hidden
                            >

                        </div>


                        <div class="size-text">

                            Size 250x180

                        </div>

                    </div>



                    <!-- =================================
                         SAVE
                    ================================== -->

                    <button
                        type="submit"
                        class="save-btn"
                    >

                        <i class="bi bi-check-lg"></i>

                        Save

                    </button>


                </form>

            </div>

        </div>

    </main>


    <!-- =================================================
         FOOTER
    ================================================== -->

    <?php include './include/footer.php'; ?>


</div>



<!-- =====================================================
     AdminLTE JS
====================================================== -->

<script src="./js/adminlte.js"></script>



<!-- =====================================================
     TinyMCE
====================================================== -->

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js"
></script>



<script>

    /* ================================================
       TinyMCE
    ================================================= */

    tinymce.init({

        selector: '#detail',

        height: 370,

        menubar: 'file edit insert view format table tools',

        plugins: [
            'advlist',
            'autolink',
            'lists',
            'link',
            'image',
            'charmap',
            'preview',
            'anchor',
            'searchreplace',
            'visualblocks',
            'code',
            'fullscreen',
            'insertdatetime',
            'media',
            'table',
            'wordcount'
        ],

        toolbar:
            'undo redo | ' +
            'bold italic underline | ' +
            'alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist | ' +
            'outdent indent | ' +
            'forecolor backcolor | ' +
            'link image media | ' +
            'code preview',

        branding: false,

        statusbar: true,

        resize: true

    });



    /* ================================================
       FILE NAME
    ================================================= */

    document
        .getElementById('image')
        .addEventListener('change', function () {

            const fileName =
                document.getElementById('file-name');

            if (this.files.length > 0) {

                fileName.value =
                    this.files[0].name;

            } else {

                fileName.value = '';

            }

        });

</script>


</body>

</html>