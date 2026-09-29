<!doctype html>
<html lang="en">

<!--begin::Head-->
<?php include 'include/head.php'; ?>
<!--end::Head-->

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary faq-page">

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

      <!--begin::App Content Header-->
      <div class="app-content-header faq-content-header">

        <div class="container-fluid">

          <div class="row">

            <div class="col-12">

              <nav aria-label="breadcrumb">

                <ol class="breadcrumb faq-breadcrumb">

                  <li class="breadcrumb-item">
                    <a href="./index.php">Home</a>
                  </li>

                  <?php if (
                    isset($_GET['action']) &&
                    ($_GET['action'] === 'add' || $_GET['action'] === 'edit')
                  ): ?>

                    <li class="breadcrumb-item">
                      <a href="./faq.php">FAQ</a>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page">

                      <?php
                      echo $_GET['action'] === 'edit'
                        ? 'Edit'
                        : 'Add FAQ';
                      ?>

                    </li>

                  <?php else: ?>

                    <li class="breadcrumb-item active" aria-current="page">
                      FAQ
                    </li>

                  <?php endif; ?>

                </ol>

              </nav>

            </div>

          </div>

        </div>

      </div>
      <!--end::App Content Header-->


      <!--begin::App Content-->
      <div class="app-content faq-content">

        <div class="container-fluid">


          <?php if (
            isset($_GET['action']) &&
            ($_GET['action'] === 'add' || $_GET['action'] === 'edit')
          ): ?>


            <!--=========================================================
                ADD / EDIT FAQ
            =========================================================-->

            <div class="faq-widget faq-edit-widget">

              <!-- Widget Header -->
              <div class="faq-widget-head">

                <h4 class="faq-heading">

                  <i class="fa-solid fa-pen-to-square"></i>

                  <?php
                  echo $_GET['action'] === 'edit'
                    ? 'Edit FAQ'
                    : 'Add FAQ';
                  ?>

                </h4>

              </div>


              <!-- Widget Body -->
              <div class="faq-widget-body">

                <form id="faqForm">

                  <!-- Type -->
                  <div class="faq-form-row">

                    <label for="faqType">

                      Type

                      <span class="required">*</span>

                    </label>

                    <select
                      id="faqType"
                      name="type"
                      class="faq-form-control"
                      required
                    >

                      <option value="">
                        Select Type
                      </option>

                      <option value="Services">
                        Services
                      </option>

                      <option value="Search">
                        Search
                      </option>

                      <option value="What to do if user forgot password and input the wrong e-mail address ?">
                        What to do if user forgot password and input the wrong e-mail address ?
                      </option>

                      <option value="Which browser can access the e-learning system ?">
                        Which browser can access the e-learning system ?
                      </option>

                      <option value="Which devices can access the e-learning system?">
                        Which devices can access the e-learning system?
                      </option>

                    </select>

                  </div>


                  <!-- Topic -->
                  <div class="faq-form-row">

                    <label for="faqTopic">
                      Topic
                    </label>

                    <input
                      type="text"
                      id="faqTopic"
                      name="topic"
                      class="faq-form-control"
                      maxlength="250"
                    >

                  </div>


                  <!-- Answer -->
                  <div class="faq-form-row faq-answer-row">

                    <label for="faqAnswer">
                      Answer
                    </label>

                    <textarea
                      id="faqAnswer"
                      name="answer"
                      rows="15"
                    ></textarea>

                  </div>


                  <!-- Save Message -->
                  <div
                    id="faqSaveMessage"
                    class="d-none"
                  ></div>


                  <!-- Save -->
                  <div class="faq-save-area">

                    <button
                      type="submit"
                      class="faq-btn faq-btn-primary"
                      id="saveFaqBtn"
                    >

                      <i class="fa-solid fa-check"></i>

                      Save

                    </button>

                  </div>

                </form>

              </div>

            </div>


          <?php else: ?>


            <!--=========================================================
                ADVANCED SEARCH
            =========================================================-->

            <div class="faq-widget faq-search-widget">

              <div
                class="faq-widget-head faq-search-head"
                id="faqSearchHeader"
              >

                <h4 class="faq-heading">

                  <i class="fa-solid fa-magnifying-glass"></i>

                  Advanced Search

                </h4>

                <span
                  class="faq-collapse-toggle"
                  id="faqSearchToggle"
                >

                  <i
                    class="fa-solid fa-chevron-down"
                    id="faqSearchIcon"
                  ></i>

                </span>

              </div>


              <div
                class="faq-search-body"
                id="faqSearchBody"
              >

                <form id="faqSearchForm">

                  <div class="faq-search-row">

                    <label for="searchTopic">
                      Topic
                    </label>

                    <input
                      type="text"
                      id="searchTopic"
                      name="topic"
                      maxlength="250"
                    >

                  </div>


                  <div class="faq-search-buttons">

                    <button
                      type="submit"
                      class="faq-btn faq-btn-primary"
                    >

                      <i class="fa-solid fa-magnifying-glass"></i>

                      Search

                    </button>

                  </div>

                </form>

              </div>

            </div>


            <!--=========================================================
                FAQ LIST
            =========================================================-->

            <div class="faq-widget faq-list-widget">

              <!-- Widget Header -->
              <div class="faq-widget-head">

                <h4 class="faq-heading">

                  <i class="fa-solid fa-list"></i>

                  FAQ

                </h4>

              </div>


              <!-- Widget Body -->
              <div class="faq-widget-body faq-list-body">


                <!-- Toolbar -->
                <div class="faq-toolbar">

                  <div class="faq-toolbar-left">

                    <a
                      href="./faq.php?action=add"
                      class="faq-btn faq-btn-primary"
                    >

                      <i class="fa-solid fa-circle-plus"></i>

                      Add FAQ

                    </a>

                  </div>


                  <div class="faq-toolbar-right">

                    <label
                      for="faqPerPage"
                      class="faq-showing-label"
                    >
                      Showing:
                    </label>

                    <select
                      id="faqPerPage"
                      class="faq-per-page"
                    >

                      <option value="10">
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
                <div class="faq-table-wrapper">

                  <table
                    class="faq-table"
                    id="faqTable"
                  >

                    <thead>

                      <tr>

                        <th>
                          Type
                        </th>

                        <th>
                          Topic
                        </th>

                        <th class="faq-action-column">
                          Action
                        </th>

                      </tr>

                    </thead>


                    <tbody id="faqTableBody">
                    </tbody>

                  </table>

                </div>


              </div>

            </div>


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


  <!--begin::TinyMCE-->
  <script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js"></script>
  <!--end::TinyMCE-->


  <!--=========================================================
      FAQ STYLE
  =========================================================-->

  <style>

    /*
    =========================================================
    PAGE BACKGROUND
    =========================================================
    */

    .faq-page {
      background-color: #f7f7f7 !important;

      background-image:
        linear-gradient(
          90deg,
          rgba(0, 0, 0, 0.025) 1px,
          transparent 1px
        ),
        linear-gradient(
          rgba(0, 0, 0, 0.025) 1px,
          transparent 1px
        );

      background-size: 10px 10px;

      color: #333;
    }


    /*
    =========================================================
    CONTENT HEADER
    =========================================================
    */

    .faq-content-header {
      padding-top: 0 !important;
      padding-bottom: 0 !important;
      background: #666 !important;
      min-height: 38px;
    }


    .faq-content-header .container-fluid {
      padding-left: 10px !important;
      padding-right: 10px !important;
    }


    .faq-breadcrumb {
      margin: 0 !important;
      padding: 9px 0 !important;

      background: transparent !important;

      font-size: 13px;

      line-height: 20px;
    }


    .faq-breadcrumb .breadcrumb-item {
      color: #fff;
    }


    .faq-breadcrumb .breadcrumb-item > a,
    .faq-breadcrumb .breadcrumb-item > a:visited,
    .faq-breadcrumb .breadcrumb-item > a:hover,
    .faq-breadcrumb .breadcrumb-item > a:focus,
    .faq-breadcrumb .breadcrumb-item.active {
    color: #fff !important;
    text-decoration: none !important;
    }

    /*
    =========================================================
    MAIN CONTENT
    =========================================================
    */

    .faq-content {
      padding-top: 10px !important;
      padding-bottom: 30px !important;
    }


    .faq-content > .container-fluid {
      padding-left: 10px !important;
      padding-right: 10px !important;
    }


    /*
    =========================================================
    OLD STYLE WIDGET
    =========================================================
    */

    .faq-widget {
      background: rgba(255, 255, 255, 0.92);

      border: 1px solid #ddd;

      margin-bottom: 0;

      box-shadow: none;
    }


    .faq-widget-head {
      position: relative;

      min-height: 32px;

      padding: 6px 10px;

      border-bottom: 1px solid #ddd;

      background-color: #fff;

      background-image:
        linear-gradient(
          90deg,
          rgba(0, 0, 0, 0.035) 1px,
          transparent 1px
        ),
        linear-gradient(
          rgba(0, 0, 0, 0.035) 1px,
          transparent 1px
        );

      background-size: 10px 10px;
    }


    .faq-heading {
      margin: 0;

      font-size: 14px;

      font-weight: 600;

      line-height: 20px;

      color: #333;
    }


    .faq-heading i {
      margin-right: 8px;

      font-size: 14px;

      color: #333;
    }


    /*
    =========================================================
    SEARCH
    =========================================================
    */

    /* =========================================================
   ADVANCED SEARCH
   ========================================================= */

    .faq-search-widget {
    margin-bottom: -1px;
    }

    .faq-search-head {
    cursor: pointer;
    }

    .faq-collapse-toggle {
    position: absolute;

    top: 5px;
    right: 8px;

    width: 23px;
    height: 23px;

    display: flex;
    align-items: center;
    justify-content: center;

    border: 1px solid #aaa;
    border-radius: 4px;

    background: #fff;
    color: #555;

    font-size: 12px;
    }

    .faq-search-body {
    display: none;

    padding: 12px 15px 15px;

    border-top: 0;

    background: #fff;
    }

    .faq-search-body.open {
    display: block;
    }


    /* Topic label + input */
    .faq-search-row {
    display: block;

    margin-bottom: 10px;
    }

    .faq-search-row label {
    display: block;

    width: auto;

    margin: 0 0 7px 0;

    font-size: 13px;

    font-weight: 600;

    color: #222;
    }


    /* Input อยู่บรรทัดถัดจาก Topic */
    .faq-search-row input {
    display: block;

    width: 600px;

    max-width: 100%;

    height: 38px;

    padding: 6px 10px;

    border: 1px solid #ccc;

    border-radius: 3px;

    background: #fff;

    color: #333;

    font-size: 13px;

    outline: none;

    box-sizing: border-box;
    }

    .faq-search-row input:focus {
    border-color: #66afe9;

    box-shadow: 0 0 3px rgba(102, 175, 233, 0.35);
    }


    /* Search button */
    .faq-search-buttons {
    margin-left: 0;

    margin-top: 5px;
    }


    /*
    =========================================================
    LIST
    =========================================================
    */

    .faq-list-widget {
      margin-top: 0;
    }


    .faq-list-body {
      padding: 0 !important;

      background: #fff;
    }


    /*
    =========================================================
    TOOLBAR
    =========================================================
    */

    .faq-toolbar {
      min-height: 46px;

      display: flex;

      align-items: center;

      justify-content: space-between;

      padding: 7px 12px;

      border-bottom: 1px solid #ddd;

      background: #fff;
    }


    .faq-toolbar-left,
    .faq-toolbar-right {
      display: flex;

      align-items: center;
    }


    .faq-toolbar-right {
      gap: 7px;
    }


    .faq-showing-label {
      margin: 0;

      font-size: 13px;

      font-weight: 600;

      color: #222;
    }


    /*
    =========================================================
    BUTTONS
    =========================================================
    */

    .faq-btn {
      display: inline-flex;

      align-items: center;

      justify-content: center;

      min-height: 32px;

      padding: 5px 10px;

      border: 1px solid transparent;

      border-radius: 4px;

      font-size: 13px;

      line-height: 20px;

      text-decoration: none;

      cursor: pointer;

      transition: none;
    }


    .faq-btn i {
      margin-right: 6px;

      font-size: 13px;
    }


    .faq-btn-primary {
      background: #168de2;

      border-color: #168de2;

      color: #fff !important;
    }


    .faq-btn-primary:hover,
    .faq-btn-primary:focus {
      background: #168de2;

      border-color: #168de2;

      color: #fff !important;
    }


    /*
    =========================================================
    PER PAGE
    =========================================================
    */

    .faq-per-page {
      width: 190px;

      height: 30px;

      padding: 3px 30px 3px 10px;

      border: 1px solid #ccc;

      border-radius: 3px;

      background: #f5f5f5;

      color: #333;

      font-size: 13px;

      outline: none;
    }


    /*
    =========================================================
    TABLE
    =========================================================
    */

    .faq-table-wrapper {
      width: 100%;

      overflow-x: auto;
    }


    .faq-table {
      width: 100%;

      margin: 0;

      border-collapse: collapse;

      table-layout: fixed;

      font-size: 13px;

      color: #333;
    }


    .faq-table thead th {
      padding: 5px 10px;

      height: 27px;

      background: #168de2;

      border: 1px solid #168de2;

      color: #fff;

      font-weight: 600;

      text-align: left;

      vertical-align: middle;
    }


    .faq-table thead th:first-child {
      width: 47%;
    }


    .faq-table thead th:nth-child(2) {
      width: auto;
    }


    .faq-table thead th:last-child {
      width: 115px;
    }


    .faq-table tbody td {
      padding: 6px 10px;

      height: 36px;

      border: 1px solid #ddd;

      background: #fff;

      vertical-align: middle;

      word-break: break-word;
    }


    .faq-table tbody tr:nth-child(even) td {
      background: #fafafa;
    }


    .faq-table tbody tr:hover td {
      background: #f5f5f5;
    }


    .faq-action-column {
      text-align: center !important;
    }


    .faq-action-cell {
      width: 115px;

      text-align: center;

      white-space: nowrap;
    }


    /*
    =========================================================
    ACTION BUTTONS
    =========================================================
    */

    .faq-action-btn {
      display: inline-flex;

      width: 27px;

      height: 27px;

      align-items: center;

      justify-content: center;

      margin: 0 2px;

      padding: 0;

      border: 1px solid;

      border-radius: 4px;

      font-size: 12px;

      text-decoration: none;

      cursor: pointer;
    }


    .faq-action-view {
      background: #e5f5fc;

      border-color: #b7d9e8;

      color: #4b91ad;
    }


    .faq-action-edit {
      background: #f4f4ee;

      border-color: #d6d6c7;

      color: #77754d;
    }


    .faq-action-delete {
      background: #f8eeee;

      border-color: #dfcaca;

      color: #a34d4d;
    }


    .faq-action-btn:hover {
      opacity: 0.85;
    }


    /*
    =========================================================
    ADD / EDIT PAGE
    =========================================================
    */

    .faq-edit-widget {
      min-height: 700px;

      background: #fff;
    }


    .faq-edit-widget .faq-widget-head {
      padding: 6px 12px;
    }


    .faq-edit-widget .faq-widget-body {
      padding: 13px 30px 20px;
    }


    .faq-form-row {
      margin-bottom: 18px;
    }


    .faq-form-row > label {
      display: block;

      margin-bottom: 7px;

      font-size: 13px;

      font-weight: 400;

      color: #222;
    }


    .faq-form-row .required {
      color: #ff0000;
    }


    .faq-form-control {
      display: block;

      width: 650px;

      max-width: 100%;

      height: 30px;

      padding: 4px 9px;

      border: 1px solid #ccc;

      border-radius: 4px;

      background: #fff;

      color: #222;

      font-size: 13px;

      outline: none;
    }


    .faq-form-control:focus {
      border-color: #66afe9;

      box-shadow: 0 0 4px rgba(102, 175, 233, 0.35);
    }


    .faq-answer-row {
      margin-bottom: 20px;
    }


    .faq-save-area {
      margin-top: 10px;
    }


    /*
    =========================================================
    TINYMCE
    =========================================================
    */

    .faq-answer-row .tox-tinymce {
      width: 680px !important;

      max-width: 100% !important;

      border: 1px solid #ccc !important;

      border-radius: 0 !important;
    }


    /*
    =========================================================
    SAVE MESSAGE
    =========================================================
    */

    #faqSaveMessage {
      width: 650px;

      max-width: 100%;

      padding: 8px 10px;

      font-size: 13px;
    }


    /*
    =========================================================
    VIEW MODAL
    =========================================================
    */

    .faq-view-modal .modal-header {
      background: #168de2;

      color: #fff;
    }


    .faq-view-modal .modal-title {
      font-size: 16px;
    }


    .faq-view-label {
      margin-bottom: 5px;

      font-size: 13px;

      font-weight: 600;
    }


    .faq-view-value {
      padding: 8px 10px;

      border: 1px solid #ccc;

      border-radius: 3px;

      background: #fff;

      font-size: 13px;
    }


    /*
    =========================================================
    RESPONSIVE
    =========================================================
    */

    @media (max-width: 768px) {

      .faq-toolbar {
        flex-direction: column;

        align-items: stretch;

        gap: 8px;
      }


      .faq-toolbar-left {
        justify-content: flex-start;
      }


      .faq-toolbar-right {
        justify-content: flex-end;
      }


      .faq-search-row {
        display: block;
      }


      .faq-search-row label {
        display: block;

        width: auto;

        margin-bottom: 5px;
      }


      .faq-search-buttons {
        margin-left: 0;
      }


      .faq-table {
        min-width: 700px;
      }


      .faq-edit-widget .faq-widget-body {
        padding-left: 15px;

        padding-right: 15px;
      }

    }


    /* =========================================================
    ADD / EDIT TITLE
    ========================================================= */

    .faq-edit-widget .faq-widget-head {
    padding: 6px 12px;
    }

    .faq-edit-widget .faq-heading {
        display: inline-block;

        margin: 0;

        padding: 4px 10px;

        background: #666;

        color: #fff !important;

        font-size: 14px;

        font-weight: 600;

        line-height: 20px;
    }

    .faq-edit-widget .faq-heading i {
        margin-right: 8px;

        color: #fff !important;
    }

  </style>


  <!--begin::Page Script-->
  <script>

    /*
    =========================================================
    FAQ DATA
    =========================================================
    */

    const faqStorageKey = 'brotherFAQData';


    const faqDefaultData = [

      {
        id: 1,
        type: 'Services',
        topic: 'Basic Policies',
        answer: '<p>Basic Policies information.</p>'
      },

      {
        id: 2,
        type: 'Search',
        topic: 'Codes of Practice',
        answer: '<p>Codes of Practice information.</p>'
      },

      {
        id: 3,
        type: 'What to do if user forgot password and input the wrong e-mail address ?',
        topic: 'What to do if user forgot password and input the wrong e-mail address ?',
        answer: '<p>Please contact the administrator for assistance.</p>'
      },

      {
        id: 4,
        type: 'What to do if user forgot password and input the wrong e-mail address ?',
        topic: 'What to do if user forgot password and input the wrong e-mail address ?',
        answer: '<p>Please verify your e-mail address and contact support if necessary.</p>'
      }

    ];


    /*
    =========================================================
    GET FAQ DATA
    =========================================================
    */

    function getFaqData() {

      const savedData =
        localStorage.getItem(faqStorageKey);


      if (!savedData) {

        localStorage.setItem(
          faqStorageKey,
          JSON.stringify(faqDefaultData)
        );

        return faqDefaultData;

      }


      try {

        return JSON.parse(savedData);

      } catch (error) {

        console.error(
          'Unable to load FAQ data:',
          error
        );

        return faqDefaultData;

      }

    }


    /*
    =========================================================
    SAVE FAQ DATA
    =========================================================
    */

    function saveFaqData(data) {

      localStorage.setItem(
        faqStorageKey,
        JSON.stringify(data)
      );

    }


    /*
    =========================================================
    ESCAPE HTML
    =========================================================
    */

    function escapeHtml(value) {

      return String(value)
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#039;');

    }


    /*
    =========================================================
    RENDER FAQ TABLE
    =========================================================
    */

    function renderFaqTable(data = null) {

      const tableBody =
        document.getElementById('faqTableBody');


      if (!tableBody) {
        return;
      }


      const faqData =
        data || getFaqData();


      tableBody.innerHTML = '';


      if (faqData.length === 0) {

        tableBody.innerHTML = `

          <tr>

            <td
              colspan="3"
              style="text-align:center;"
            >
              No FAQ found.
            </td>

          </tr>

        `;

        return;

      }


      faqData.forEach(function (faq) {

        const row =
          document.createElement('tr');


        row.innerHTML = `

          <td>
            ${escapeHtml(faq.type)}
          </td>

          <td>
            ${escapeHtml(faq.topic)}
          </td>

          <td class="faq-action-cell">

            <button
              type="button"
              class="faq-action-btn faq-action-view faq-view-btn"
              data-id="${faq.id}"
              title="View Detail"
            >
              <i class="fa-solid fa-eye"></i>
            </button>


            <a
              href="./faq.php?action=edit&id=${faq.id}"
              class="faq-action-btn faq-action-edit"
              title="Edit"
            >
              <i class="fa-solid fa-pencil"></i>
            </a>


            <button
              type="button"
              class="faq-action-btn faq-action-delete faq-delete-btn"
              data-id="${faq.id}"
              title="Delete"
            >
              <i class="fa-solid fa-xmark"></i>
            </button>

          </td>

        `;


        tableBody.appendChild(row);

      });


      bindFaqActions();

    }


    /*
    =========================================================
    VIEW / DELETE ACTION
    =========================================================
    */

    function bindFaqActions() {


      document
        .querySelectorAll('.faq-view-btn')
        .forEach(function (button) {

          button.addEventListener(
            'click',
            function () {

              const id =
                Number(this.dataset.id);


              const faqData =
                getFaqData();


              const faq =
                faqData.find(
                  item => Number(item.id) === id
                );


              if (!faq) {
                return;
              }


              const modalElement =
                document.getElementById(
                  'faqViewModal'
                );


              if (
                typeof bootstrap !== 'undefined' &&
                modalElement
              ) {

                document.getElementById(
                  'faqViewType'
                ).textContent =
                  faq.type;


                document.getElementById(
                  'faqViewTopic'
                ).textContent =
                  faq.topic;


                document.getElementById(
                  'faqViewAnswer'
                ).innerHTML =
                  faq.answer || '';


                const modal =
                  new bootstrap.Modal(
                    modalElement
                  );


                modal.show();

              } else {

                alert(
                  'Type: ' +
                  faq.type +
                  '\n\nTopic: ' +
                  faq.topic
                );

              }

            }
          );

        });


      document
        .querySelectorAll('.faq-delete-btn')
        .forEach(function (button) {

          button.addEventListener(
            'click',
            function () {

              const id =
                Number(this.dataset.id);


              const confirmed =
                confirm(
                  'Are you sure you want to delete this FAQ?'
                );


              if (!confirmed) {
                return;
              }


              const faqData =
                getFaqData();


              const newData =
                faqData.filter(
                  item =>
                    Number(item.id) !== id
                );


              saveFaqData(newData);


              renderFaqTable(newData);

            }
          );

        });

    }


    /*
    =========================================================
    LOAD FAQ FOR EDIT
    =========================================================
    */

    function loadFaqForEdit() {

      const params =
        new URLSearchParams(
          window.location.search
        );


      const id =
        Number(params.get('id'));


      if (!id) {
        return;
      }


      const faqData =
        getFaqData();


      const faq =
        faqData.find(
          item => Number(item.id) === id
        );


      if (!faq) {
        return;
      }


      const type =
        document.getElementById('faqType');


      const topic =
        document.getElementById('faqTopic');


      if (type) {
        type.value = faq.type;
      }


      if (topic) {
        topic.value = faq.topic;
      }


      if (
        typeof tinymce !== 'undefined' &&
        tinymce.get('faqAnswer')
      ) {

        tinymce
          .get('faqAnswer')
          .setContent(
            faq.answer || ''
          );

      }

    }


    /*
    =========================================================
    INITIALIZE TINYMCE
    =========================================================
    */

    if (
      document.getElementById('faqAnswer')
    ) {

      tinymce.init({

        selector: '#faqAnswer',

        height: 420,

        menubar:
          'file edit view insert format table tools',

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

        elementpath: true,


        setup: function (editor) {

          editor.on(
            'init',
            function () {

              <?php if (
                isset($_GET['action']) &&
                $_GET['action'] === 'edit'
              ): ?>

                loadFaqForEdit();

              <?php endif; ?>

            }
          );

        }

      });

    }


    /*
    =========================================================
    ADD / EDIT FAQ FORM
    =========================================================
    */

    const faqForm =
      document.getElementById('faqForm');


    if (faqForm) {

      faqForm.addEventListener(
        'submit',
        function (event) {

          event.preventDefault();


          const typeInput =
            document.getElementById('faqType');


          const topicInput =
            document.getElementById('faqTopic');


          const type =
            typeInput.value.trim();


          const topic =
            topicInput.value.trim();


          const editor =
            tinymce.get('faqAnswer');


          const answer =
            editor
              ? editor.getContent()
              : '';


          if (!type) {

            typeInput.focus();

            showFaqMessage(
              'Please select a type.',
              'danger'
            );

            return;

          }


          const faqData =
            getFaqData();


          const params =
            new URLSearchParams(
              window.location.search
            );


          const action =
            params.get('action');


          const editId =
            Number(params.get('id'));


          if (
            action === 'edit' &&
            editId
          ) {

            const index =
              faqData.findIndex(
                item =>
                  Number(item.id) === editId
              );


            if (index !== -1) {

              faqData[index] = {

                id: editId,

                type: type,

                topic: topic,

                answer: answer,

                updatedAt:
                  new Date().toISOString()

              };

            }

          } else {

            const newId =
              faqData.length > 0

                ? Math.max(
                    ...faqData.map(
                      item =>
                        Number(item.id)
                    )
                  ) + 1

                : 1;


            faqData.push({

              id: newId,

              type: type,

              topic: topic,

              answer: answer,

              updatedAt:
                new Date().toISOString()

            });

          }


          saveFaqData(faqData);


          showFaqMessage(
            'FAQ saved successfully.',
            'success'
          );


          setTimeout(
            function () {

              window.location.href =
                './faq.php';

            },
            700
          );

        }
      );

    }


    /*
    =========================================================
    SAVE MESSAGE
    =========================================================
    */

    function showFaqMessage(
      text,
      type
    ) {

      const message =
        document.getElementById(
          'faqSaveMessage'
        );


      if (!message) {
        return;
      }


      message.className =
        'alert alert-' +
        type +
        ' mt-3';


      message.textContent =
        text;

    }


    /*
    =========================================================
    ADVANCED SEARCH TOGGLE
    =========================================================
    */

    const searchToggle =
      document.getElementById(
        'faqSearchToggle'
      );


    const searchHeader =
      document.getElementById(
        'faqSearchHeader'
      );


    const searchBody =
      document.getElementById(
        'faqSearchBody'
      );


    const searchIcon =
      document.getElementById(
        'faqSearchIcon'
      );


    function toggleFaqSearch() {

      if (!searchBody) {
        return;
      }


      searchBody.classList.toggle(
        'open'
      );


      const isOpen =
        searchBody.classList.contains(
          'open'
        );


      if (searchIcon) {

        searchIcon.className =
          isOpen

            ? 'fa-solid fa-chevron-up'

            : 'fa-solid fa-chevron-down';

      }

    }


    if (searchToggle) {

      searchToggle.addEventListener(
        'click',
        function (event) {

          event.stopPropagation();

          toggleFaqSearch();

        }
      );

    }


    if (searchHeader) {

      searchHeader.addEventListener(
        'click',
        function (event) {

          if (
            event.target.closest(
              '#faqSearchToggle'
            )
          ) {
            return;
          }


          toggleFaqSearch();

        }
      );

    }


    /*
    =========================================================
    SEARCH FAQ
    =========================================================
    */

    const faqSearchForm =
      document.getElementById(
        'faqSearchForm'
      );


    if (faqSearchForm) {

      faqSearchForm.addEventListener(
        'submit',
        function (event) {

          event.preventDefault();


          const keyword =
            document
              .getElementById('searchTopic')
              .value
              .trim()
              .toLowerCase();


          const faqData =
            getFaqData();


          if (!keyword) {

            renderFaqTable(
              faqData
            );

            return;

          }


          const filteredData =
            faqData.filter(
              function (faq) {

                return (

                  String(faq.type)
                    .toLowerCase()
                    .includes(keyword)

                  ||

                  String(faq.topic)
                    .toLowerCase()
                    .includes(keyword)

                );

              }
            );


          renderFaqTable(
            filteredData
          );

        }
      );

    }


    /*
    =========================================================
    ITEMS PER PAGE
    =========================================================
    */

    const faqPerPage =
      document.getElementById(
        'faqPerPage'
      );


    if (faqPerPage) {

      faqPerPage.addEventListener(
        'change',
        function () {

          const value =
            Number(this.value);


          const faqData =
            getFaqData();


          if (
            !value ||
            faqData.length <= value
          ) {

            renderFaqTable(
              faqData
            );

            return;

          }


          renderFaqTable(
            faqData.slice(
              0,
              value
            )
          );

        }
      );

    }


    /*
    =========================================================
    INITIALIZE FAQ LIST
    =========================================================
    */

    if (
      document.getElementById(
        'faqTableBody'
      )
    ) {

      renderFaqTable();

    }

  </script>
  <!--end::Page Script-->


  <!--begin::View FAQ Modal-->
  <div
    class="modal fade faq-view-modal"
    id="faqViewModal"
    tabindex="-1"
    aria-hidden="true"
  >

    <div class="modal-dialog modal-lg">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title">

            <i class="fa-solid fa-eye me-2"></i>

            FAQ Detail

          </h5>

          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>

        </div>


        <div class="modal-body">

          <div class="mb-3">

            <div class="faq-view-label">
              Type
            </div>

            <div
              id="faqViewType"
              class="faq-view-value"
            ></div>

          </div>


          <div class="mb-3">

            <div class="faq-view-label">
              Topic
            </div>

            <div
              id="faqViewTopic"
              class="faq-view-value"
            ></div>

          </div>


          <div>

            <div class="faq-view-label">
              Answer
            </div>

            <div
              id="faqViewAnswer"
              class="faq-view-value"
              style="min-height:150px;"
            ></div>

          </div>

        </div>

      </div>

    </div>

  </div>
  <!--end::View FAQ Modal-->


</body>
<!--end::Body-->

</html>