
<?php

$currentPage = basename($_SERVER['PHP_SELF']);

$saveError = '';

$title = '';
$detail = '';
$description = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $newsData = $_POST['News'] ?? [];

    $title = trim($newsData['cms_title'] ?? '');
    $detail = trim($newsData['cms_short_title'] ?? '');
    $description = $newsData['cms_detail'] ?? '';

    if ($title === '') {

        $saveError = 'Please enter Title.';

    } elseif ($detail === '') {

        $saveError = 'Please enter Detail.';

    } else {

        /*
         * สามารถเพิ่มระบบบันทึกข้อมูลลงฐานข้อมูล
         * หรือไฟล์ storage/news.json ได้ภายหลัง
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
                Add News
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

                    <a href="./news.php">
                      News
                    </a>

                  </li>


                  <li
                    class="breadcrumb-item active"
                    aria-current="page"
                  >
                    Add News
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


          <?php if ($saveError !== ''): ?>

            <div class="alert alert-danger">

              <?= htmlspecialchars(
                  $saveError,
                  ENT_QUOTES,
                  'UTF-8'
              ) ?>

            </div>

          <?php endif; ?>


          <!--begin::News Form-->
          <div class="card news-form-wrapper">


            <!--begin::Form Header-->
            <div class="card-header">

              <h3 class="card-title">

                <i class="fa-solid fa-pen-to-square me-2"></i>

                Add News

              </h3>

            </div>
            <!--end::Form Header-->


            <!--begin::Form Body-->
            <div class="card-body">

              <div class="form">


                <form
                  enctype="multipart/form-data"
                  id="news-form"
                  method="post"
                >


                  <!--begin::Title-->
                  <div class="row">

                    <label
                      for="News_cms_title"
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
                      name="News[cms_title]"
                      id="News_cms_title"
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
                        id="News_cms_title_em_"
                        style="display:none"
                      ></div>

                    </div>

                  </div>
                  <!--end::Title-->


                  <!--begin::Detail-->
                  <div class="row">

                    <label
                      for="News_cms_short_title"
                      class="required"
                    >
                      Detail
                      <span class="required">
                        <font color="red">*</font>
                      </span>
                    </label>


                    <textarea
                      rows="4"
                      cols="40"
                      maxlength="255"
                      class="span8"
                      name="News[cms_short_title]"
                      id="News_cms_short_title"
                    ><?= htmlspecialchars(
                        $detail,
                        ENT_QUOTES,
                        'UTF-8'
                    ) ?></textarea>


                    <div class="error help-block">

                      <div
                        class="label label-important"
                        id="News_cms_short_title_em_"
                        style="display:none"
                      ></div>

                    </div>

                  </div>
                  <!--end::Detail-->


                  <!--begin::Description-->
                  <div class="row">

                    <label
                      for="News_cms_detail"
                    >
                      Description
                    </label>


                    <textarea
                      rows="6"
                      cols="50"
                      class="span8 tinymce"
                      name="News[cms_detail]"
                      id="News_cms_detail"
                    ><?= htmlspecialchars(
                        $description,
                        ENT_QUOTES,
                        'UTF-8'
                    ) ?></textarea>


                    <div class="error help-block">

                      <div
                        class="label label-important"
                        id="News_cms_detail_em_"
                        style="display:none"
                      ></div>

                    </div>

                  </div>
                  <!--end::Description-->


                  <br>


                  <!--begin::Empty Row-->
                  <div class="row">
                  </div>
                  <!--end::Empty Row-->


                  <br>


                  <!--begin::Picture-->
                  <div class="row">

                    <label
                      for="News_cms_picture"
                    >
                      Picture
                    </label>


                    <div
                      class="fileupload fileupload-new"
                      data-provides="fileupload"
                    >

                      <div class="input-append">

                        <div class="uneditable-input span3">

                          <i class="icon-file fileupload-exists"></i>

                          <span class="fileupload-preview"></span>

                        </div>


                        <span class="btn btn-default btn-file">

                          <span class="fileupload-new">
                            Select file
                          </span>

                          <span class="fileupload-exists">
                            Change
                          </span>


                          <input
                            id="ytNews_cms_picture"
                            type="hidden"
                            value=""
                            name="News[cms_picture]"
                          >


                          <input
                            name="News[cms_picture]"
                            id="News_cms_picture"
                            type="file"
                          >

                        </span>


                        <a
                          href="#"
                          class="btn fileupload-exists"
                          data-dismiss="fileupload"
                        >
                          Remove
                        </a>

                      </div>

                    </div>


                    <div class="error help-block">

                      <div
                        class="label label-important"
                        id="News_cms_picture_em_"
                        style="display:none"
                      ></div>

                    </div>

                  </div>
                  <!--end::Picture-->


                  <!--begin::Original Image Size Hint-->
                  <!--
                  <div class="row">

                    <font color="#990000">

                      <span
                        style="margin:0;"
                        class="btn-action single glyphicons circle_question_mark"
                      >
                        <i></i>
                      </span>

                      Size 250x180(horizontal)
                      Or Size 250x(xxx) (แนวยาว)

                    </font>

                  </div>
                  -->
                  <!--end::Original Image Size Hint-->


                  <br>


                  <!--begin::Save Button-->
                  <div class="row buttons">

                    <button
                      type="submit"
                      class="btn btn-primary btn-icon glyphicons ok_2"
                    >
                      <i></i>Save
                    </button>

                  </div>
                  <!--end::Save Button-->


                </form>


              </div>
              <!--end::Form-->


            </div>
            <!--end::Form Body-->


          </div>
          <!--end::News Form-->


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
    NEWS FORM STYLE
    ปรับเฉพาะขนาด Font โดยไม่เปลี่ยนกรอบและ Layout เดิม
    =========================================================
    */

    .news-form-wrapper .card-body {
        padding: 10px 34px 10px 34px;
        background-color: #ffffff;
    }


    .news-form-wrapper .form {
        width: 100%;
        max-width: 680px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 13px;
        color: #000000;
    }


    .news-form-wrapper .row {
        display: block;
        margin: 0 0 17px 0;
        padding: 0;
    }


    .news-form-wrapper label {
        display: block;
        width: 100%;
        margin: 0 0 6px 0;
        padding: 0;
        font-size: 13px;
        font-weight: normal;
        line-height: 18px;
        color: #000000;
    }


    .news-form-wrapper label.required {
        font-weight: normal;
    }


    .news-form-wrapper label .required {
        color: red;
        font-size: 13px;
    }


    .news-form-wrapper input.span8,
    .news-form-wrapper textarea.span8 {
        display: block;
        box-sizing: border-box;
        width: 548px;
        max-width: 100%;
        margin: 0;
        padding: 5px 8px;
        border: 1px solid #d6d6d6;
        border-radius: 3px;
        background-color: #ffffff;
        color: #333333;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 13px;
        line-height: 20px;
        box-shadow: none;
    }


    .news-form-wrapper input.span8 {
        height: 26px;
    }


    .news-form-wrapper textarea.span8 {
        min-height: 91px;
        resize: vertical;
    }


    .news-form-wrapper input.span8:focus,
    .news-form-wrapper textarea.span8:focus {
        border-color: #aaaaaa;
        outline: none;
        box-shadow: none;
    }


    .news-form-wrapper .error.help-block {
        margin: 3px 0 0 0;
        padding: 0;
        font-size: 12px;
        line-height: 16px;
    }


    .news-form-wrapper .label-important {
        display: none;
    }


    /*
    =========================================================
    TINYMCE
    =========================================================
    */

    .news-form-wrapper .tox-tinymce {
        width: 570px !important;
        max-width: 100%;
        border: 1px solid #bfbfbf !important;
        border-radius: 0 !important;
        box-shadow: none !important;
    }


    .news-form-wrapper .tox .tox-menubar {
        padding: 0 5px;
        background-color: #eeeeee;
    }


    .news-form-wrapper .tox .tox-menubar button {
        font-size: 12px;
    }


    .news-form-wrapper .tox .tox-toolbar-overlord,
    .news-form-wrapper .tox .tox-toolbar,
    .news-form-wrapper .tox .tox-toolbar__primary {
        background-color: #eeeeee;
    }


    .news-form-wrapper .tox .tox-edit-area {
        border-top: 1px solid #cccccc;
    }


    .news-form-wrapper .tox .tox-statusbar {
        min-height: 28px;
        background-color: #eeeeee;
        font-size: 11px;
    }


    /*
    =========================================================
    FILE UPLOAD
    =========================================================
    */

    .news-form-wrapper .fileupload {
        display: block;
        margin: 0;
        padding: 0;
    }


    .news-form-wrapper .input-append {
        display: flex;
        align-items: stretch;
        width: 270px;
        max-width: 100%;
        margin: 0;
        padding: 0;
    }


    .news-form-wrapper .uneditable-input {
        display: block;
        box-sizing: border-box;
        width: 188px;
        height: 25px;
        min-height: 25px;
        padding: 3px 7px;
        overflow: hidden;
        border: 1px solid #e0e0e0;
        border-radius: 3px 0 0 3px;
        background-color: #ffffff;
        color: #555555;
        font-size: 12px;
        line-height: 18px;
    }


    .news-form-wrapper .uneditable-input .icon-file {
        display: none;
    }


    .news-form-wrapper .btn-file {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
        height: 25px;
        min-width: 76px;
        padding: 3px 8px;
        overflow: hidden;
        border: 1px solid #d6d6d6;
        border-radius: 0 3px 3px 0;
        background: linear-gradient(#ffffff, #e9e9e9);
        color: #333333;
        font-size: 12px;
        line-height: 18px;
        white-space: nowrap;
    }


    .news-form-wrapper .btn-file input[type="file"] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        margin: 0;
        padding: 0;
        opacity: 0;
        cursor: pointer;
    }


    .news-form-wrapper .fileupload-exists {
        display: none;
    }


    .news-form-wrapper .fileupload-new {
        display: inline;
    }


    .news-form-wrapper .fileupload-preview {
        display: inline-block;
        max-width: 170px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        vertical-align: middle;
        font-size: 12px;
    }


    .news-form-wrapper .fileupload .btn {
        font-size: 12px;
    }


    .news-form-wrapper .fileupload a.btn {
        font-size: 12px;
        line-height: 18px;
    }


    /*
    =========================================================
    ADD NEWS HEADER BUTTON
    =========================================================
    */

    .news-form-wrapper .card-header {
        width: fit-content;
        min-width: 0;
        height: 27px;
        min-height: 27px;
        padding: 0 10px;
        display: flex;
        align-items: center;
        background-color: #666666;
        border: 0;
        border-radius: 0;
    }


    .news-form-wrapper .card-title {
        margin: 0;
        color: #ffffff;
        font-size: 12px;
        font-weight: normal;
        line-height: 27px;
        white-space: nowrap;
    }


    .news-form-wrapper .card-title i {
        margin-right: 5px !important;
        font-size: 11px;
    }


    /*
    =========================================================
    SAVE BUTTON
    คงขนาดปุ่มและ Font เดิม
    =========================================================
    */

    .news-form-wrapper .row.buttons .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        width: 68px;
        min-width: 68px;
        height: 27px;

        padding: 3px 8px;

        border: 0;
        border-radius: 3px;

        background-color: #168de2;
        color: #ffffff;

        font-family: Arial, Helvetica, sans-serif;
        font-size: 11px;
        font-weight: normal;
        line-height: 19px;

        box-shadow: none;
    }


    .news-form-wrapper .row.buttons .btn i {
        margin-right: 4px;
        font-size: 10px;
    }


    .news-form-wrapper .row.buttons .btn:hover {
        background-color: #087acb;
        color: #ffffff;
    }


    /*
    =========================================================
    RESPONSIVE
    =========================================================
    */

    @media (max-width: 767.98px) {

        .news-form-wrapper .card-body {
            padding: 10px 20px;
        }


        .news-form-wrapper .form {
            max-width: 100%;
        }


        .news-form-wrapper input.span8,
        .news-form-wrapper textarea.span8,
        .news-form-wrapper .tox-tinymce {
            width: 100% !important;
        }


        .news-form-wrapper .input-append {
            width: 270px;
        }

    }

    </style>
    <!--end::Page CSS-->


  <!--begin::TinyMCE-->
  <script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js"></script>
  <!--end::TinyMCE-->


  <!--begin::Page Script-->
  <script>

    /*
    =========================================================
    NEWS DESCRIPTION EDITOR
    =========================================================
    */

    tinymce.init({

      selector: '#News_cms_detail',

      height: 300,

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

  </script>
  <!--end::Page Script-->


</body>
<!--end::Body-->


</html>