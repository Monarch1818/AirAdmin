<?php

$currentPage = basename($_SERVER['PHP_SELF']);

$saveError = '';

$title = '';
$detail = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $usabilityData = $_POST['Usability'] ?? [];

    $title = trim($usabilityData['usa_title'] ?? '');
    $detail = $usabilityData['usa_detail'] ?? '';

    if ($title === '') {

        $saveError = 'Please enter Title.';

    } elseif (trim(strip_tags($detail)) === '') {

        $saveError = 'Please enter Detail.';

    } else {

        /*
         * สามารถเพิ่มระบบบันทึกข้อมูลลงฐานข้อมูล
         * หรือไฟล์ storage/how-to-use.json ได้ภายหลัง
         */

    }

}

?>

<!doctype html>
<html lang="en">


<!--begin::Head-->
<?php include './include/head.php'; ?>
<!--end::Head-->


<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">


    <!--begin::App Wrapper-->
    <div class="app-wrapper">


        <!--begin::Header-->
        <?php include './include/header.php'; ?>
        <!--end::Header-->


        <!--begin::Sidebar-->
        <?php include './include/aside.php'; ?>
        <!--end::Sidebar-->


        <!--begin::App Main-->
        <main class="app-main">


            <!--begin::App Content Header-->
            <div class="app-content-header">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-sm-6">

                            <h1 class="mb-0 fs-3">
                                Add How to use
                            </h1>

                        </div>


                        <div class="col-sm-6">

                            <nav aria-label="breadcrumb">

                                <ol class="breadcrumb float-sm-end">

                                    <li class="breadcrumb-item">

                                        <a href="./index.php">
                                            Home
                                        </a>

                                    </li>


                                    <li class="breadcrumb-item">

                                        <a href="./how-to-use.php">
                                            How to use
                                        </a>

                                    </li>


                                    <li class="breadcrumb-item active"
                                        aria-current="page">

                                        Add How to use

                                    </li>

                                </ol>

                            </nav>

                        </div>

                    </div>

                </div>

            </div>
            <!--end::App Content Header-->


            <!--begin::App Content-->
            <div class="app-content">

                <div class="container-fluid">


                    <!--begin::Legacy Usability Content-->
                    <div class="innerLR">

                        <div class="widget widget-tabs border-bottom-none">


                            <!--begin::Widget Head-->
                            <div class="widget-head">

                                <ul>

                                    <li class="active">

                                        <a
                                            href="#account-details"
                                            data-toggle="tab"
                                        >
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            Add Usability
                                        </a>

                                    </li>

                                </ul>

                            </div>
                            <!--end::Widget Head-->


                            <!--begin::Widget Body-->
                            <div class="widget-body">


                                <?php if ($saveError !== ''): ?>

                                    <div class="alert alert-danger">

                                        <?= htmlspecialchars(
                                            $saveError,
                                            ENT_QUOTES,
                                            'UTF-8'
                                        ) ?>

                                    </div>

                                <?php endif; ?>


                                <div class="form">


                                    <form
                                        enctype="multipart/form-data"
                                        id="usability-form"
                                        method="post"
                                    >


                                        <!--begin::Title-->
                                        <div class="row">

                                            <label
                                                for="Usability_usa_title"
                                                class="required"
                                            >

                                                Title

                                                <span class="required">

                                                    <font color="red">*</font>

                                                </span>

                                            </label>


                                            <input
                                                size="60"
                                                maxlength="250"
                                                class="span8"
                                                name="Usability[usa_title]"
                                                id="Usability_usa_title"
                                                type="text"
                                                value="<?= htmlspecialchars(
                                                    $title,
                                                    ENT_QUOTES,
                                                    'UTF-8'
                                                ) ?>"
                                            >


                                            <div class="error help-block">

                                                <div
                                                    class="label label-important"
                                                    id="Usability_usa_title_em_"
                                                    style="display:none"
                                                ></div>

                                            </div>

                                        </div>
                                        <!--end::Title-->


                                        <!--begin::Detail-->
                                        <div class="row">

                                            <label
                                                for="Usability_usa_detail"
                                                class="required"
                                            >

                                                Detail

                                                <span class="required">

                                                    <font color="red">*</font>

                                                </span>

                                            </label>


                                            <textarea
                                                rows="6"
                                                cols="50"
                                                class="span8 tinymce"
                                                name="Usability[usa_detail]"
                                                id="Usability_usa_detail"
                                            ><?= htmlspecialchars(
                                                $detail,
                                                ENT_QUOTES,
                                                'UTF-8'
                                            ) ?></textarea>


                                            <div class="error help-block">

                                                <div
                                                    class="label label-important"
                                                    id="Usability_usa_detail_em_"
                                                    style="display:none"
                                                ></div>

                                            </div>

                                        </div>
                                        <!--end::Detail-->


                                        <br>


                                        <!--begin::Save Button-->
                                        <div class="row buttons">

                                            <button
                                                class="btn btn-primary btn-icon glyphicons ok_2"
                                                type="submit"
                                            >

                                                <i></i>Save

                                            </button>

                                        </div>
                                        <!--end::Save Button-->


                                    </form>


                                </div>
                                <!--form-->


                            </div>
                            <!--end::Widget Body-->


                        </div>

                    </div>
                    <!--end::Legacy Usability Content-->


                </div>

            </div>
            <!--end::App Content-->


        </main>
        <!--end::App Main-->


        <!--begin::Footer-->
        <?php include './include/footer.php'; ?>
        <!--end::Footer-->


    </div>
    <!--end::App Wrapper-->



    <!--begin::Page CSS-->
    <style>

        /*
        =========================================================
        INNER CONTENT
        =========================================================
        */

        .innerLR {

            width: 100%;

            margin: 0;
            padding: 0;

            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;

            color: #333333;

        }


        /*
        =========================================================
        WIDGET
        =========================================================
        */

        .widget.widget-tabs.border-bottom-none {

            width: 100%;

            margin: 0;

            border: 1px solid #dddddd;
            border-bottom: 0;

            background-color: #ffffff;

        }


        /*
        =========================================================
        WIDGET HEAD
        =========================================================
        */

        .widget-head {

            min-height: 31px;
            height: 31px;

            margin: 0;
            padding: 0;

            border-bottom: 1px solid #dddddd;

            background-color: #ffffff;

        }


        .widget-head ul {

            display: block;

            margin: 0;
            padding: 0;

            list-style: none;

        }


        .widget-head li {

            display: block;

            height: 30px;

            margin: 0;
            padding: 0;

        }


        /*
        =========================================================
        ADD USABILITY TAB
        ชิดขอบ Card และมีไอคอนดินสอ
        =========================================================
        */

        .widget-head li.active a {

            position: relative;

            display: inline-flex;

            align-items: center;

            box-sizing: border-box;

            height: 30px;
            min-height: 30px;

            margin: 0;
            padding: 0 12px 0 12px;

            gap: 6px;

            background-color: #666666;

            color: #ffffff;

            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            font-weight: normal;

            line-height: 30px;

            text-decoration: none;

        }


        .widget-head li.active a i {

            display: inline-block;

            width: 14px;
            height: 14px;

            margin: 0;

            color: #ffffff;

            font-family: "Font Awesome 7 Free";
            font-size: 13px;
            font-weight: 900;

            line-height: 14px;

        }


        /*
        =========================================================
        WIDGET BODY
        =========================================================
        */

        .widget-body {

            min-height: 625px;

            margin: 0;
            padding: 11px 30px 10px 30px;

            background-color: #ffffff;

        }


        /*
        =========================================================
        FORM
        =========================================================
        */

        .widget-body .form {

            width: 100%;
            max-width: 680px;

            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;

        }


        .widget-body .row {

            display: block;

            margin: 0 0 17px 0;
            padding: 0;

        }


        .widget-body .row label {

            display: block;

            margin: 0 0 7px 0;

            color: #333333;

            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            font-weight: normal;

            line-height: 18px;

        }


        .widget-body .row label.required {

            color: #333333;

        }


        /*
        =========================================================
        TITLE INPUT
        =========================================================
        */

        .widget-body .row input.span8 {

            display: block;

            box-sizing: border-box;

            width: 650px;
            max-width: 100%;

            height: 30px;

            margin: 0;
            padding: 5px 8px;

            border: 1px solid #cccccc;
            border-radius: 4px;

            background-color: #ffffff;

            color: #333333;

            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;

            line-height: 18px;

            box-shadow: none;

        }


        /*
        =========================================================
        DETAIL TEXTAREA
        =========================================================
        */

        .widget-body .row textarea.span8 {

            display: block;

            box-sizing: border-box;

            width: 680px;
            max-width: 100%;

            min-height: 300px;

            margin: 0;
            padding: 5px 8px;

            border: 1px solid #cccccc;
            border-radius: 0;

            background-color: #ffffff;

            color: #333333;

            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;

            line-height: 18px;

            resize: vertical;

            box-shadow: none;

        }


        /*
        =========================================================
        INPUT FOCUS
        =========================================================
        */

        .widget-body .row input.span8:focus,
        .widget-body .row textarea.span8:focus {

            border-color: #999999;

            outline: none;

            box-shadow: none;

        }


        /*
        =========================================================
        ERROR MESSAGE
        =========================================================
        */

        .error.help-block {

            margin: 4px 0 0 0;
            padding: 0;

        }


        .error.help-block .label {

            display: none;

        }


        /*
        =========================================================
        SAVE BUTTON ROW
        =========================================================
        */

        .widget-body .row.buttons {

            margin-top: 0;
            margin-bottom: 0;

        }


        /*
        =========================================================
        SAVE BUTTON
        ขนาดสั้นตามรูป
        =========================================================
        */

        .widget-body .row.buttons .btn {

            display: inline-flex;

            align-items: center;
            justify-content: center;

            box-sizing: border-box;

            width: 82px;
            min-width: 82px;
            max-width: 82px;

            height: 32px;

            margin: 0;
            padding: 5px 8px;

            gap: 6px;

            border: 0;
            border-radius: 4px;

            background-color: #168de2;

            color: #ffffff;

            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            font-weight: bold;

            line-height: 20px;

            text-align: center;
            text-decoration: none;

            cursor: pointer;

        }


        .widget-body .row.buttons .btn:hover {

            background-color: #087acb;

            color: #ffffff;

        }


        /*
        =========================================================
        SAVE BUTTON ICON
        =========================================================
        */

        .widget-body .row.buttons .btn.glyphicons.ok_2 i {

            display: inline-flex;

            align-items: center;
            justify-content: center;

            width: 14px;
            height: 14px;

            margin: 0;

            font-size: 0;
            line-height: 14px;

        }


        .widget-body .row.buttons .btn.glyphicons.ok_2 i::before {

            content: "\2713";

            display: inline-block;

            color: #ffffff;

            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            font-weight: bold;

            line-height: 14px;

        }


        /*
        =========================================================
        TINYMCE
        =========================================================
        */

        .tox.tox-tinymce {

            width: 680px !important;
            max-width: 100% !important;

            border: 1px solid #cccccc !important;
            border-radius: 0 !important;

        }


        .tox .tox-editor-header {

            box-shadow: none !important;

        }


        .tox .tox-edit-area iframe {

            min-height: 300px !important;

        }


        /*
        =========================================================
        RESPONSIVE
        =========================================================
        */

        @media (max-width: 767.98px) {


            .widget-body {

                padding: 10px 15px;

            }


            .widget-body .form {

                max-width: 100%;

            }


            .widget-body .row input.span8,
            .widget-body .row textarea.span8 {

                width: 100%;
                max-width: 100%;

            }


            .tox.tox-tinymce {

                width: 100% !important;
                max-width: 100% !important;

            }


            .widget-body .row.buttons .btn {

                width: 82px;
                min-width: 82px;
                max-width: 82px;

                height: 32px;

            }


        }

    </style>
    <!--end::Page CSS-->



    <!--begin::TinyMCE-->
    <script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js"></script>


    <script>

        document.addEventListener('DOMContentLoaded', function () {

            tinymce.init({

                selector: '#Usability_usa_detail',

                width: 680,

                height: 300,

                menubar: 'file edit insert view format table tools',

                plugins: [

                    'advlist',
                    'autolink',
                    'lists',
                    'link',
                    'image',
                    'media',
                    'table',
                    'charmap',
                    'preview',
                    'anchor',
                    'searchreplace',
                    'visualblocks',
                    'code',
                    'fullscreen',
                    'wordcount'

                ],

                toolbar: [

                    'undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | blocks',

                    'link unlink anchor | image media | forecolor backcolor | table | preview code'

                ],

                toolbar_mode: 'wrap',

                branding: false,

                promotion: false,

                elementpath: true,

                statusbar: true,

                resize: true,

                content_style: `
                    body {
                        font-family: Arial, Helvetica, sans-serif;
                        font-size: 13px;
                        color: #333333;
                        margin: 10px;
                    }
                `

            });

        });

    </script>
    <!--end::TinyMCE-->


</body>
<!--end::Body-->

</html>