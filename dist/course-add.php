<?php
// =====================================================
// Course Add
// =====================================================

// ถ้าต้องการรับข้อมูลในอนาคต สามารถเพิ่ม PHP INSERT DATABASE ตรงนี้ได้
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $category = $_POST['category'] ?? '';
    $teacher = $_POST['teacher'] ?? '';
    $title = $_POST['title'] ?? '';
    $short_title = $_POST['short_title'] ?? '';
    $detail = $_POST['detail'] ?? '';
    $exam_duration = $_POST['exam_duration'] ?? '';
    $passing_score = $_POST['passing_score'] ?? '';
    $start_date = $_POST['start_date'] ?? '';
    $end_date = $_POST['end_date'] ?? '';
    $pin = $_POST['pin'] ?? '';
    $note = $_POST['note'] ?? '';

    // ตอนนี้ยังไม่ได้เชื่อม Database
    // สามารถเพิ่มคำสั่ง INSERT ภายหลังได้

    if (
        !empty($category) &&
        !empty($title) &&
        !empty($short_title) &&
        !empty($exam_duration) &&
        !empty($passing_score) &&
        !empty($start_date) &&
        !empty($end_date)
    ) {
        $message = 'Course saved successfully.';
    }
}
?>

<!doctype html>

<html lang="en">

<!--begin::Head-->

<?php include 'include/head.php';?>

<!--end::Head-->

<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

<!--begin::App Wrapper-->

<div class="app-wrapper">

<!--begin::Header-->
<?php include 'include/header.php';?>
<!--end::Header-->


<!--begin::Sidebar-->
<?php include 'include/aside.php';?>
<!--end::Sidebar-->


<!--begin::App Main-->
<main class="app-main">


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


        .course-card {
            background: #ffffff;

            border: 1px solid #dddddd;

            border-radius: 0;

            min-height: 770px;
        }


        /* ================================================
           CARD HEADER
        ================================================ */

        .course-header {
            height: 35px;

            display: flex;

            align-items: center;

            padding: 0 12px;

            background: #666666;

            color: #ffffff;

            font-size: 13px;

            font-weight: 600;
        }


        .course-header i {
            margin-right: 7px;
        }


        /* ================================================
           FORM
        ================================================ */

        .course-form {
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
           INPUT / SELECT
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
           SHORT TITLE
        ================================================ */

        .short-title {
            width: 548px;

            max-width: 100%;

            height: 92px;

            resize: vertical;

            padding: 7px;

            border: 1px solid #cccccc;

            border-radius: 3px;

            font-size: 12px;

            outline: none;
        }


        .short-title:focus {
            border-color: #80bdff;

            box-shadow: 0 0 0 1px rgba(0,123,255,.15);
        }


        /* ================================================
           DETAIL / TINYMCE
        ================================================ */

        .detail-label {
            margin-bottom: 6px;
        }


        .editor-wrapper {
            width: 570px;

            max-width: 100%;
        }


        /* ================================================
           TWO COLUMN
        ================================================ */

        .two-column {
            display: flex;

            gap: 20px;

            width: 100%;

            max-width: 100%;
        }


        .two-column .column {
            width: 264px;
        }


        .two-column .column .form-control-custom {
            width: 264px;
        }


        /* ================================================
           PIN SWITCH
        ================================================ */

        .pin-wrapper {
            display: flex;

            align-items: center;

            gap: 8px;
        }


        .pin-switch {
            position: relative;

            display: inline-block;

            width: 48px;

            height: 24px;
        }


        .pin-switch input {
            opacity: 0;

            width: 0;

            height: 0;
        }


        .pin-slider {
            position: absolute;

            cursor: pointer;

            inset: 0;

            background-color: #cccccc;

            border-radius: 24px;

            transition: .2s;
        }


        .pin-slider:before {
            position: absolute;

            content: "";

            width: 18px;

            height: 18px;

            left: 3px;

            top: 3px;

            background-color: #ffffff;

            border-radius: 50%;

            transition: .2s;
        }


        .pin-switch input:checked + .pin-slider {
            background-color: #168bea;
        }


        .pin-switch input:checked + .pin-slider:before {
            transform: translateX(24px);
        }


        .pin-text {
            font-size: 11px;

            color: #555555;
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

            .course-form {
                padding: 10px 15px 20px;
            }


            .form-control-custom,
            .short-title,
            .editor-wrapper,
            .image-upload {
                width: 100%;
            }


            .two-column {
                flex-direction: column;

                gap: 0;
            }


            .two-column .column {
                width: 100%;

                margin-bottom: 17px;
            }


            .two-column .column .form-control-custom {
                width: 100%;
            }


            .content {
                padding: 8px;
            }


            .course-card {
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


            .course-header {
                font-size: 12px;
            }


            .course-form {
                padding: 10px;
            }


            .two-column .column {
                margin-bottom: 15px;
            }

        }

    </style>



    <!-- =============================================
         BREADCRUMB
    ============================================== -->

    <div class="content-header">

        <div class="breadcrumb-custom">

            <a href="./index.php">
                Home
            </a>

            <span>»</span>

            <a href="./course.php">
                Course
            </a>

            <span>»</span>

            <span>
                Add Course
            </span>

        </div>

    </div>



    <!-- =============================================
         CONTENT
    ============================================== -->

    <div class="content">

        <div class="course-card">


            <!-- =====================================
                 TITLE
            ====================================== -->

            <div class="course-header">

                <i class="bi bi-pencil-square"></i>

                Add Course

            </div>



            <!-- =====================================
                 FORM
            ====================================== -->

            <form
                method="POST"
                enctype="multipart/form-data"
                class="course-form"
            >


                <?php if (!empty($message)): ?>

                    <div class="success-message">

                        <i class="bi bi-check-circle"></i>

                        <?php echo htmlspecialchars($message); ?>

                    </div>

                <?php endif; ?>



                <!-- =================================
                     CATEGORY
                ================================== -->

                <div class="form-group">

                    <label
                        for="category"
                        class="form-label"
                    >

                        Category

                        <span class="required">
                            *
                        </span>

                    </label>


                    <select
                        name="category"
                        id="category"
                        class="form-control-custom"
                        required
                    >

                        <option value="">
                            All
                        </option>

                        <option value="41">
                            หมวด A
                        </option>

                        <option value="42">
                            P&amp;S
                        </option>

                        <option value="43">
                            P&amp;H
                        </option>

                        <option value="44">
                            Category recheck bf uat
                        </option>

                        <option value="45">
                            UAT category
                        </option>

                        <option value="46">
                            BHmini19HT Technical Training
                        </option>

                        <option value="47">
                            Customer Service Training
                        </option>

                        <option value="48">
                            Basic
                        </option>

                        <option value="49">
                            Inkjet Printer Training
                        </option>

                        <option value="50">
                            DCP-t420w
                        </option>

                        <option value="51">
                            ECL Series Training
                        </option>

                        <option value="52">
                            HSM Low End Training
                        </option>

                        <option value="58">
                            Type of Wifi Connections for HSM
                        </option>

                        <option value="59">
                            Machine Repair (NV2600)
                        </option>

                        <option value="62">
                            CRM D365 New
                        </option>

                        <option value="63">
                            Customer Service
                        </option>

                        <option value="65">
                            Overlock 2104D
                        </option>

                        <option value="66">
                            Computerize Sewing Machine A80
                        </option>

                        <option value="67">
                            Common Problems Face
                        </option>

                        <option value="68">
                            Embroidery Machine NV880e
                        </option>

                        <option value="69">
                            PR680W
                        </option>

                        <option value="70">
                            PR1055X
                        </option>

                        <option value="71">
                            VR
                        </option>

                    </select>

                </div>



                <!-- =================================
                     TEACHER
                ================================== -->

                <div class="form-group">

                    <label
                        for="teacher"
                        class="form-label"
                    >

                        Teacher

                    </label>


                    <select
                        name="teacher"
                        id="teacher"
                        class="form-control-custom"
                    >

                        <option value="">
                            All
                        </option>

                        <option value="62">
                            Terry Liu
                        </option>

                        <option value="61">
                            Dick Tengay
                        </option>

                        <option value="60">
                            FName LName
                        </option>

                        <option value="59">
                            UATTrainerFName UATTraninerLName
                        </option>

                        <option value="58">
                            TrainerFName TrainerLName
                        </option>

                    </select>

                </div>



                <!-- =================================
                     TITLE
                ================================== -->

                <div class="form-group">

                    <label
                        for="title"
                        class="form-label"
                    >

                        Title

                        <span class="required">
                            *
                        </span>

                    </label>


                    <input
                        type="text"
                        name="title"
                        id="title"
                        class="form-control-custom"
                        maxlength="255"
                        required
                    >

                </div>



                <!-- =================================
                     SHORT TITLE
                ================================== -->

                <div class="form-group">

                    <label
                        for="short_title"
                        class="form-label"
                    >

                        Short Title

                        <span class="required">
                            *
                        </span>

                    </label>


                    <textarea
                        name="short_title"
                        id="short_title"
                        class="short-title"
                        required
                    ></textarea>

                </div>



                <!-- =================================
                     DETAIL
                ================================== -->

                <div class="form-group">

                    <label
                        for="detail"
                        class="form-label detail-label"
                    >

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
                     EXAM / PASSING SCORE
                ================================== -->

                <div class="form-group">

                    <div class="two-column">

                        <div class="column">

                            <label
                                for="exam_duration"
                                class="form-label"
                            >

                                Exam duration (Minutes)

                                <span class="required">
                                    *
                                </span>

                            </label>


                            <input
                                type="number"
                                name="exam_duration"
                                id="exam_duration"
                                class="form-control-custom"
                                value="10"
                                min="1"
                                required
                            >

                        </div>


                        <div class="column">

                            <label
                                for="passing_score"
                                class="form-label"
                            >

                                Passing score at (Percentage)

                                <span class="required">
                                    *
                                </span>

                            </label>


                            <input
                                type="number"
                                name="passing_score"
                                id="passing_score"
                                class="form-control-custom"
                                value="50"
                                min="0"
                                max="100"
                                required
                            >

                        </div>

                    </div>

                </div>



                <!-- =================================
                     COURSE DATE
                ================================== -->

                <div class="form-group">

                    <div class="two-column">

                        <div class="column">

                            <label
                                for="start_date"
                                class="form-label"
                            >

                                Course Start Date

                                <span class="required">
                                    *
                                </span>

                            </label>


                            <input
                                type="date"
                                name="start_date"
                                id="start_date"
                                class="form-control-custom"
                                required
                            >

                        </div>


                        <div class="column">

                            <label
                                for="end_date"
                                class="form-label"
                            >

                                Course End Date

                                <span class="required">
                                    *
                                </span>

                            </label>


                            <input
                                type="date"
                                name="end_date"
                                id="end_date"
                                class="form-control-custom"
                                required
                            >

                        </div>

                    </div>

                </div>



                <!-- =================================
                     PIN
                ================================== -->

                <div class="form-group">

                    <label class="form-label">

                        Pin

                    </label>


                    <div class="pin-wrapper">

                        <label class="pin-switch">

                            <input
                                type="checkbox"
                                name="pin"
                                id="pin"
                                value="y"
                            >

                            <span class="pin-slider"></span>

                        </label>


                        <span class="pin-text">
                            Pin this course
                        </span>

                    </div>

                </div>



                <!-- =================================
                     NOTE
                ================================== -->

                <div class="form-group">

                    <label
                        for="note"
                        class="form-label"
                    >

                        Note

                    </label>


                    <input
                        type="text"
                        name="note"
                        id="note"
                        class="form-control-custom"
                        maxlength="255"
                    >

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
<!--end::App Main-->



<!--begin::Footer-->
<?php include 'include/footer.php';?>
<!--end::Footer-->
```

</div>
<!--end::App Wrapper-->

<!--begin::TinyMCE-->

<script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js"></script>

<!--end::TinyMCE-->

<!--begin::Page Script-->

<script>

    /*
    =========================================================
    COURSE ADD EDITOR
    =========================================================
    */

    const courseEditor = 'detail';



    /*
    =========================================================
    INITIALIZE TINYMCE
    =========================================================
    */

    tinymce.init({

        selector: '#detail',

        height: 520,

        menubar: 'file edit view insert format table tools',

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
            'help',
            'wordcount'
        ],

        toolbar:
            'undo redo | blocks | ' +
            'bold italic underline | ' +
            'alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | ' +
            'forecolor backcolor | ' +
            'link image media | ' +
            'table | code preview fullscreen',

        content_style: `
            body {
                font-family: Arial, sans-serif;
                font-size: 16px;
                padding: 10px;
            }

            img {
                max-width: 100%;
                height: auto;
            }
        `,

        branding: false,

        promotion: false,

        resize: true,

        statusbar: true,

        elementpath: true

    });



    /*
    =========================================================
    FILE NAME
    =========================================================
    */

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
<!--end::Page Script-->
</body>
<!--end::Body-->
</html>