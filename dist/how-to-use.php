<?php

$currentPage = basename($_SERVER['PHP_SELF']);

$searchTitle = trim(
    $_GET['Usability']['usa_title'] ?? ''
);

/*
|--------------------------------------------------------------------------
| ตัวอย่างข้อมูล
|--------------------------------------------------------------------------
| สามารถเปลี่ยนเป็นข้อมูลจากฐานข้อมูลภายหลัง
|--------------------------------------------------------------------------
*/

$usabilityItems = [

    [
        'id' => 14,
        'title' => 'Dashboard'
    ],

    [
        'id' => 13,
        'title' => 'Questionnaire'
    ],

    [
        'id' => 10,
        'title' => 'Exam'
    ]

];


/*
|--------------------------------------------------------------------------
| Filter ข้อมูลด้วย Title
|--------------------------------------------------------------------------
*/

if ($searchTitle !== '') {

    $usabilityItems = array_filter(

        $usabilityItems,

        function ($item) use ($searchTitle) {

            return stripos(
                $item['title'],
                $searchTitle
            ) !== false;

        }

    );

}

?>

<!doctype html>
<html lang="en">

<!--begin::Head-->
<?php include './include/head.php'; ?>
<!--end::Head-->


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
                                How to use
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

                                    <li
                                        class="breadcrumb-item active"
                                        aria-current="page">

                                        Usability

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


                    <!--begin::Legacy Content-->
                    <div class="innerLR">


                        <!--begin::Advanced Search Widget-->
                        <div
                            class="widget usability-widget"
                            data-toggle="collapse-widget"
                            data-collapse-closed="false">


                            <!--begin::Widget Head-->
                            <div class="widget-head">

                                <h4 class="heading">

                                    <i
                                        class="fa-solid fa-magnifying-glass">
                                    </i>

                                    Advanced Search

                                </h4>


                                <button
                                    type="button"
                                    class="search-collapse-toggle"
                                    id="searchCollapseButton"
                                    aria-expanded="true"
                                    aria-controls="advancedSearchBody"
                                    title="Collapse Search">

                                    <i
                                        class="fa-solid fa-chevron-up"
                                        id="searchCollapseIcon">
                                    </i>

                                </button>

                            </div>
                            <!--end::Widget Head-->


                            <!--begin::Widget Body-->
                            <div
                                class="widget-body search-widget-body"
                                id="advancedSearchBody">


                                <div class="search-form">

                                    <div class="wide form">


                                        <form
                                            id="SearchFormAjax"
                                            action="./how-to-use.php"
                                            method="get">


                                            <div class="row">

                                                <label
                                                    for="Usability_usa_title">

                                                    Title

                                                </label>


                                                <input
                                                    class="span6"
                                                    name="Usability[usa_title]"
                                                    id="Usability_usa_title"
                                                    type="text"
                                                    maxlength="255"
                                                    value="<?= htmlspecialchars(
                                                        $searchTitle,
                                                        ENT_QUOTES,
                                                        'UTF-8'
                                                    ) ?>">


                                            </div>


                                            <div class="row search-buttons">


                                                <button
                                                    type="submit"
                                                    class="btn btn-primary btn-icon">


                                                    <i
                                                        class="fa-solid fa-magnifying-glass">
                                                    </i>


                                                    Search


                                                </button>


                                            </div>


                                        </form>


                                    </div>

                                </div>


                            </div>
                            <!--end::Widget Body-->


                        </div>
                        <!--end::Advanced Search Widget-->



                        <!--begin::Usability Widget-->
                        <div
                            class="widget usability-list-widget"
                            style="margin-top: -1px;">


                            <!--begin::Widget Head-->
                            <div class="widget-head">


                                <h4 class="heading">

                                    <i
                                        class="fa-solid fa-list">
                                    </i>

                                    Usability

                                </h4>


                            </div>
                            <!--end::Widget Head-->



                            <!--begin::Widget Body-->
                            <div class="widget-body">


                                <!--begin::Showing-->
                                <div
                                    class="separator bottom form-inline small">


                                    <span class="pull-right">


                                        <label class="strong">

                                            Showing:

                                        </label>


                                        <select
                                            class="selectpicker"
                                            data-style="btn-default btn-small"
                                            id="news_per_page"
                                            name="news_per_page">


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


                                    </span>


                                </div>
                                <!--end::Showing-->



                                <div class="clear-div"></div>



                                <!--begin::Table-->
                                <div class="overflow-table">


                                    <div
                                        id="Usability-grid"
                                        class="grid-view">


                                        <table
                                            class="table table-striped table-bordered table-condensed dataTable js-table-sortable">


                                            <thead>


                                                <tr>


                                                    <th
                                                        class="checkbox-column"
                                                        id="chk">


                                                        <input
                                                            class="select-on-check-all"
                                                            type="checkbox"
                                                            value="1"
                                                            name="chk_all"
                                                            id="chk_all">


                                                    </th>


                                                    <th
                                                        id="Usability-grid_c1">


                                                        <a
                                                            class="sort-link"
                                                            href="#">

                                                            Title

                                                        </a>


                                                    </th>


                                                    <th
                                                        class="button-column"
                                                        id="Usability-grid_c2">


                                                        Action


                                                    </th>


                                                </tr>



                                                <tr class="filters">


                                                    <td>
                                                        &nbsp;
                                                    </td>


                                                    <td>


                                                        <input
                                                            name="Usability[usa_title]"
                                                            type="text"
                                                            maxlength="255"
                                                            value="<?= htmlspecialchars(
                                                                $searchTitle,
                                                                ENT_QUOTES,
                                                                'UTF-8'
                                                            ) ?>">


                                                    </td>


                                                    <td>
                                                        &nbsp;
                                                    </td>


                                                </tr>


                                            </thead>



                                            <tbody>


                                                <?php if (count($usabilityItems) > 0): ?>


                                                    <?php foreach (
                                                        $usabilityItems
                                                        as $index => $item
                                                    ): ?>


                                                        <tr
                                                            class="<?= $index % 2 === 0
                                                                ? 'odd'
                                                                : 'even' ?> selectable">


                                                            <td
                                                                class="checkbox-column">


                                                                <input
                                                                    class="select-on-check"
                                                                    value="<?= (int) $item['id'] ?>"
                                                                    id="chk_<?= $index ?>"
                                                                    type="checkbox"
                                                                    name="chk[]">


                                                            </td>



                                                            <td>


                                                                <?= htmlspecialchars(
                                                                    $item['title'],
                                                                    ENT_QUOTES,
                                                                    'UTF-8'
                                                                ) ?>


                                                            </td>



                                                            <td
                                                                class="center action-column">


                                                                <!--begin::View-->
                                                                <a
                                                                    class="btn-action action-view"
                                                                    title="View Detail"
                                                                    href="./how-to-use-view.php?id=<?= (int) $item['id'] ?>">


                                                                    <i
                                                                        class="fa-solid fa-eye">
                                                                    </i>


                                                                </a>
                                                                <!--end::View-->



                                                                <!--begin::Edit-->
                                                                <a
                                                                    class="btn-action action-edit"
                                                                    title="Edit"
                                                                    href="./how-to-use-edit.php?id=<?= (int) $item['id'] ?>">


                                                                    <i
                                                                        class="fa-solid fa-pen-to-square">
                                                                    </i>


                                                                </a>
                                                                <!--end::Edit-->



                                                                <!--begin::Delete-->
                                                                <a
                                                                    class="btn-action action-delete remove-item"
                                                                    title="Delete"
                                                                    href="./how-to-use-delete.php?id=<?= (int) $item['id'] ?>">


                                                                    <i
                                                                        class="fa-solid fa-xmark">
                                                                    </i>


                                                                </a>
                                                                <!--end::Delete-->


                                                            </td>


                                                        </tr>


                                                    <?php endforeach; ?>


                                                <?php else: ?>


                                                    <tr>


                                                        <td
                                                            colspan="3"
                                                            class="text-center">


                                                            No data found.


                                                        </td>


                                                    </tr>


                                                <?php endif; ?>


                                            </tbody>


                                        </table>


                                    </div>


                                </div>
                                <!--end::Table-->


                            </div>
                            <!--end::Widget Body-->


                        </div>
                        <!--end::Usability Widget-->



                        <!--begin::Options-->
                        <div
                            class="separator top form-inline small">


                            <div class="buttons pull-left">


                                <a
                                    class="btn btn-primary btn-icon"
                                    href="#"
                                    id="deleteAllButton">


                                    <i
                                        class="fa-solid fa-circle-minus">
                                    </i>


                                    Delete All


                                </a>


                            </div>


                            <div class="clearfix"></div>


                        </div>
                        <!--end::Options-->


                    </div>
                    <!--end::Legacy Content-->


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
        |--------------------------------------------------------------------------
        | GENERAL
        |--------------------------------------------------------------------------
        */

        .innerLR {

            width: 100%;

            margin-left: 0;
            margin-right: 0;

            padding: 0;

            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;

        }



        div#sidebar,
        a.search-button,
        div.form {

            margin-left: 30px;

        }



        .usability-widget,
        .usability-list-widget {

            width: 100%;

            margin-bottom: 0;

            border: 1px solid #dddddd;

        }



        /*
        |--------------------------------------------------------------------------
        | WIDGET HEAD
        |--------------------------------------------------------------------------
        */

        .widget-head {

            position: relative;

            min-height: 40px;
            height: 40px;

            margin: 0;

            padding: 0 10px;

            display: flex;

            align-items: center;
            justify-content: space-between;

            border-bottom: 1px solid #dddddd;

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



        .widget-head .heading {

            display: flex;

            align-items: center;

            gap: 8px;

            margin: 0;

            color: #333333;

            font-family: Arial, Helvetica, sans-serif;

            font-size: 14px;

            font-weight: bold;

            line-height: 40px;

        }



        .widget-head .heading i {

            font-size: 13px;

            color: #333333;

        }



        /*
        |--------------------------------------------------------------------------
        | SEARCH COLLAPSE BUTTON
        |--------------------------------------------------------------------------
        */

        .search-collapse-toggle {

            display: flex;

            align-items: center;
            justify-content: center;

            width: 20px;
            height: 20px;

            margin: 0;

            padding: 0;

            border: 1px solid #999999;

            border-radius: 2px;

            background: transparent;

            color: #555555;

            cursor: pointer;

        }



        .search-collapse-toggle:hover {

            color: #222222;

        }



        .search-collapse-toggle i {

            font-size: 11px;

        }



        /*
        |--------------------------------------------------------------------------
        | WIDGET BODY
        |--------------------------------------------------------------------------
        */

        .widget-body {

            margin: 0;

            padding: 15px 30px;

        }



        .search-widget-body {

            overflow: hidden;

            max-height: 300px;

            opacity: 1;

            transition:
                max-height 0.25s ease,
                opacity 0.2s ease,
                padding 0.25s ease;

        }



        .search-widget-body.is-collapsed {

            max-height: 0;

            padding-top: 0;
            padding-bottom: 0;

            opacity: 0;

        }



        /*
        |--------------------------------------------------------------------------
        | SEARCH FORM
        |--------------------------------------------------------------------------
        */

        .search-form {

            width: 100%;

        }



        .search-form .form {

            width: 100%;

        }



        .search-form .row {

            display: block;

            margin: 0 0 10px 0;

            padding: 0;

        }



        .search-form label {

            display: block;

            margin: 0 0 6px 0;

            color: #333333;

            font-size: 13px;

            font-weight: normal;

        }



        .search-form input.span6 {

            box-sizing: border-box;

            width: 490px;

            max-width: 100%;

            height: 30px;

            padding: 5px 8px;

            border: 1px solid #cccccc;

            border-radius: 4px;

            font-family: Arial, Helvetica, sans-serif;

            font-size: 13px;

        }



        .search-form input.span6:focus {

            outline: none;

            border-color: #999999;

            box-shadow: none;

        }



        .search-buttons {

            display: flex !important;

            align-items: center;

            margin-bottom: 0 !important;

        }



        /*
        |--------------------------------------------------------------------------
        | SEARCH BUTTON
        |--------------------------------------------------------------------------
        */

        .search-buttons .btn {

            display: inline-flex;

            align-items: center;
            justify-content: center;

            width: 96px;

            min-width: 96px;

            height: 33px;

            min-height: 33px;

            padding: 6px 10px;

            gap: 7px;

            border: 1px solid #168de2;

            border-radius: 4px;

            font-family: Arial, Helvetica, sans-serif;

            font-size: 13px;

            font-weight: bold;

            line-height: 18px;

        }



        .search-buttons .btn i {

            font-size: 12px;

        }



        /*
        |--------------------------------------------------------------------------
        | BUTTON ICON
        |--------------------------------------------------------------------------
        */

        .btn-icon {

            display: inline-flex;

            align-items: center;
            justify-content: center;

            gap: 6px;

        }



        /*
        |--------------------------------------------------------------------------
        | SEPARATOR / SHOWING
        |--------------------------------------------------------------------------
        */

        .separator {

            min-height: 30px;

        }



        .separator.bottom {

            margin-bottom: 10px;

        }



        .separator.top {

            margin-top: 10px;

        }



        .form-inline.small {

            font-size: 12px;

        }



        .strong {

            font-weight: bold;

        }



        .pull-right {

            float: right;

        }



        .pull-left {

            float: left;

        }



        .clear-div {

            clear: both;

            height: 0;

        }



        /*
        |--------------------------------------------------------------------------
        | SHOWING SELECT
        |--------------------------------------------------------------------------
        */

        #news_per_page {

            height: 27px;

            min-width: 220px;

            padding: 4px 8px;

            border: 1px solid #cccccc;

            border-radius: 4px;

            font-size: 12px;

        }



        /*
        |--------------------------------------------------------------------------
        | TABLE
        |--------------------------------------------------------------------------
        */

        .overflow-table {

            width: 100%;

            overflow-x: auto;

        }



        #Usability-grid {

            margin-top: -1px;

        }



        #Usability-grid table {

            width: 100%;

            margin-bottom: 0;

            border-collapse: collapse;

        }



        #Usability-grid thead th {

            padding: 6px 8px;

            background-color: #168de2;

            color: #ffffff;

            font-size: 13px;

            font-weight: bold;

            vertical-align: middle;

            white-space: nowrap;

        }



        #Usability-grid thead th a {

            color: #ffffff;

            text-decoration: none;

        }



        /*
        |--------------------------------------------------------------------------
        | TABLE FILTER ROW
        |--------------------------------------------------------------------------
        */

        #Usability-grid thead tr.filters td {

            padding: 5px;

        }



        #Usability-grid thead tr.filters input {

            box-sizing: border-box;

            width: 100%;

            min-width: 120px;

            height: 29px;

            padding: 4px 6px;

            border: 1px solid #cccccc;

            border-radius: 3px;

            font-size: 13px;

        }



        /*
        |--------------------------------------------------------------------------
        | TABLE BODY
        |--------------------------------------------------------------------------
        */

        #Usability-grid tbody td {

            padding: 7px 8px;

            color: #333333;

            font-size: 13px;

            vertical-align: middle;

        }



        #Usability-grid tbody tr {

            height: 36px;

        }



        #Usability-grid tbody tr:hover td {

            background-color: rgba(0, 0, 0, 0.025);

        }



        /*
        |--------------------------------------------------------------------------
        | TABLE COLUMNS
        |--------------------------------------------------------------------------
        */

        #Usability-grid .checkbox-column {

            width: 35px;

            text-align: center;

        }



        #Usability-grid .action-column {

            width: 110px;

            text-align: center;

            white-space: nowrap;

        }



        /*
        |--------------------------------------------------------------------------
        | ACTION BUTTONS
        |--------------------------------------------------------------------------
        */

        .btn-action {

            display: inline-flex;

            align-items: center;
            justify-content: center;

            width: 27px;

            height: 27px;

            margin: 0 1px;

            padding: 0;

            border: 1px solid #cccccc;

            border-radius: 3px;

            text-decoration: none;

        }



        .btn-action i {

            font-size: 12px;

        }



        .btn-action:hover {

            text-decoration: none;

            opacity: 0.8;

        }



        /*
        |--------------------------------------------------------------------------
        | VIEW BUTTON
        |--------------------------------------------------------------------------
        */

        .action-view {

            background-color: #e5f2f9;

            border-color: #b8d3e1;

            color: #5590ad;

        }



        .action-view:hover {

            color: #5590ad;

        }



        /*
        |--------------------------------------------------------------------------
        | EDIT BUTTON
        |--------------------------------------------------------------------------
        */

        .action-edit {

            background-color: #f0f2e9;

            border-color: #cbd2bc;

            color: #68764e;

        }



        .action-edit:hover {

            color: #68764e;

        }



        /*
        |--------------------------------------------------------------------------
        | DELETE BUTTON
        |--------------------------------------------------------------------------
        */

        .action-delete {

            background-color: #f8eeee;

            border-color: #dfc6c6;

            color: #914646;

        }



        .action-delete:hover {

            color: #914646;

        }



        /*
        |--------------------------------------------------------------------------
        | OPTIONS
        |--------------------------------------------------------------------------
        */

        #deleteAllButton {

            min-height: 32px;

            padding: 6px 12px;

            font-size: 13px;

        }



        /*
        |--------------------------------------------------------------------------
        | RESPONSIVE
        |--------------------------------------------------------------------------
        */

        @media (max-width: 767.98px) {


            .widget-body {

                padding: 12px 15px;

            }



            .widget-head {

                padding: 0 10px;

            }



            .search-form input.span6 {

                width: 100%;

                max-width: 100%;

            }



            .pull-right {

                float: none;

            }



            #news_per_page {

                min-width: 180px;

            }



            .action-column {

                width: 100px !important;

            }


        }


    </style>
    <!--end::Page CSS-->



    <!--begin::Page JavaScript-->
    <script>


        document.addEventListener(
            'DOMContentLoaded',
            function () {



                /*
                |--------------------------------------------------------------------------
                | ADVANCED SEARCH COLLAPSE
                |--------------------------------------------------------------------------
                */

                const searchButton =
                    document.getElementById(
                        'searchCollapseButton'
                    );


                const searchBody =
                    document.getElementById(
                        'advancedSearchBody'
                    );


                const searchIcon =
                    document.getElementById(
                        'searchCollapseIcon'
                    );



                if (
                    searchButton &&
                    searchBody &&
                    searchIcon
                ) {


                    searchButton.addEventListener(
                        'click',
                        function () {


                            const isCollapsed =
                                searchBody.classList.toggle(
                                    'is-collapsed'
                                );



                            searchButton.setAttribute(
                                'aria-expanded',
                                String(!isCollapsed)
                            );



                            if (isCollapsed) {


                                searchIcon.classList.remove(
                                    'fa-chevron-up'
                                );


                                searchIcon.classList.add(
                                    'fa-chevron-down'
                                );



                                searchButton.setAttribute(
                                    'title',
                                    'Expand Search'
                                );


                            } else {


                                searchIcon.classList.remove(
                                    'fa-chevron-down'
                                );


                                searchIcon.classList.add(
                                    'fa-chevron-up'
                                );



                                searchButton.setAttribute(
                                    'title',
                                    'Collapse Search'
                                );


                            }


                        }
                    );


                }



                /*
                |--------------------------------------------------------------------------
                | SELECT ALL CHECKBOX
                |--------------------------------------------------------------------------
                */

                const checkAll =
                    document.getElementById(
                        'chk_all'
                    );


                const checkboxes =
                    document.querySelectorAll(
                        '.select-on-check'
                    );



                if (checkAll) {


                    checkAll.addEventListener(
                        'change',
                        function () {


                            checkboxes.forEach(
                                function (checkbox) {


                                    checkbox.checked =
                                        checkAll.checked;


                                }
                            );


                        }
                    );


                }



                /*
                |--------------------------------------------------------------------------
                | UPDATE SELECT ALL STATE
                |--------------------------------------------------------------------------
                */

                checkboxes.forEach(
                    function (checkbox) {


                        checkbox.addEventListener(
                            'change',
                            function () {


                                const checkedCount =
                                    document.querySelectorAll(
                                        '.select-on-check:checked'
                                    ).length;


                                checkAll.checked =
                                    checkedCount === checkboxes.length;


                                checkAll.indeterminate =
                                    checkedCount > 0 &&
                                    checkedCount < checkboxes.length;


                            }
                        );


                    }
                );



                /*
                |--------------------------------------------------------------------------
                | DELETE ALL
                |--------------------------------------------------------------------------
                */

                const deleteAllButton =
                    document.getElementById(
                        'deleteAllButton'
                    );



                if (deleteAllButton) {


                    deleteAllButton.addEventListener(
                        'click',
                        function (event) {


                            event.preventDefault();



                            const selected =
                                document.querySelectorAll(
                                    '.select-on-check:checked'
                                );



                            if (selected.length === 0) {


                                alert(
                                    'Please select at least one item.'
                                );


                                return;


                            }



                            const confirmed =
                                confirm(
                                    'Are you sure you want to delete selected items?'
                                );



                            if (confirmed) {


                                /*
                                เชื่อมต่อระบบลบข้อมูลจริงภายหลัง
                                */


                                alert(
                                    'Delete function can be connected later.'
                                );


                            }


                        }
                    );


                }



                /*
                |--------------------------------------------------------------------------
                | DELETE SINGLE ITEM
                |--------------------------------------------------------------------------
                */

                const deleteButtons =
                    document.querySelectorAll(
                        '.remove-item'
                    );



                deleteButtons.forEach(
                    function (button) {


                        button.addEventListener(
                            'click',
                            function (event) {


                                const confirmed =
                                    confirm(
                                        'Are you sure you want to delete this item?'
                                    );



                                if (!confirmed) {


                                    event.preventDefault();


                                }


                            }
                        );


                    }
                );



            }
        );


    </script>
    <!--end::Page JavaScript-->


</body>

</html>