
<?php

$currentPage = basename($_SERVER['PHP_SELF']);

$searchTitle = trim($_GET['News']['cms_title'] ?? '');
$searchDetail = trim($_GET['News']['cms_short_title'] ?? '');

$newsPerPage = $_GET['news_per_page'] ?? '';

$newsData = [

    [
        'id' => 131,
        'image' => 'https://lms.bsisportal.com/sg/admin/../uploads/news/131/small/17022023163730_Picture.png',
        'image_alt' => '17022023163730_Picture.png',
        'title' => 'Brother Receives "Clarivate Top 100 Global Innovator 2023" Award',
        'detail' => 'Brother Industries, Ltd. (President: Ichiro Sasaki) today announced that it was selected by U.K. company Clarivate, a global information services firm, for "Clarivate Top 100 Global Innovators 2023" award.',
    ],

    [
        'id' => 130,
        'image' => './images/logo_course.png',
        'image_alt' => 'No Image',
        'title' => 'Brother Receives Silver Prize in the Gomez IR Site Ranking 2022',
        'detail' => 'Brother Industries, Ltd. (President: Ichiro Sasaki) has received the Silver Prize in the Gomez IR Site Ranking 2022 from BroadBand Security, Inc. Gomez Consulting Dept. following last year.',
    ],

    [
        'id' => 129,
        'image' => './images/logo_course.png',
        'image_alt' => 'No Image',
        'title' => 'The Brother Group Human Rights Global Policy is Formulated',
        'detail' => 'January 30, 2023 Brother Industries, Ltd. Brother Industries, Ltd. (President: Ichiro Sasaki) has formulated the Brother Group Human Rights Global Policy in order to clearly declare its stance on human rights.',
    ],

];

/*
|--------------------------------------------------------------------------
| Search
|--------------------------------------------------------------------------
*/

$filteredNews = array_filter($newsData, function ($news) use ($searchTitle, $searchDetail) {

    $matchTitle = true;
    $matchDetail = true;

    if ($searchTitle !== '') {
        $matchTitle = stripos($news['title'], $searchTitle) !== false;
    }

    if ($searchDetail !== '') {
        $matchDetail = stripos($news['detail'], $searchDetail) !== false;
    }

    return $matchTitle && $matchDetail;

});

/*
|--------------------------------------------------------------------------
| Pagination display
|--------------------------------------------------------------------------
*/

$displayNews = array_values($filteredNews);

if ($newsPerPage !== '' && is_numeric($newsPerPage)) {

    $limit = (int) $newsPerPage;

    if ($limit > 0) {
        $displayNews = array_slice($displayNews, 0, $limit);
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
                                News
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

                                    <li class="breadcrumb-item active" aria-current="page">
                                        News
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

                    <!--begin::Legacy News Content-->
                    <div class="innerLR">

                        <!--begin::Advanced Search-->
                        <div class="news-widget" id="advanced-search-widget">

                            <div
                                class="news-widget-head"
                                id="advanced-search-header"
                            >

                                <h4 class="news-heading">

                                    <i class="fa-solid fa-magnifying-glass"></i>

                                    Advanced Search

                                </h4>

                                <button
                                    type="button"
                                    class="collapse-toggle"
                                    id="advanced-search-toggle"
                                    aria-expanded="true"
                                    aria-controls="advanced-search-body"
                                    title="Collapse Advanced Search"
                                >

                                    <i class="fa-solid fa-chevron-up"></i>

                                </button>

                            </div>

                            <div
                                class="news-widget-body"
                                id="advanced-search-body"
                            >

                                <div class="search-form">

                                    <div class="wide form">

                                        <form
                                            id="SearchFormAjax"
                                            action="./news.php"
                                            method="get"
                                        >

                                            <!--begin::Search Title-->
                                            <div class="search-row">

                                                <label for="Search_cms_title">
                                                    Title
                                                </label>

                                                <input
                                                    class="span6"
                                                    name="News[cms_title]"
                                                    id="Search_cms_title"
                                                    type="text"
                                                    maxlength="250"
                                                    value="<?= htmlspecialchars(
                                                        $searchTitle,
                                                        ENT_QUOTES,
                                                        'UTF-8'
                                                    ) ?>"
                                                >

                                            </div>
                                            <!--end::Search Title-->

                                            <!--begin::Search Detail-->
                                            <div class="search-row">

                                                <label for="Search_cms_short_title">
                                                    Detail
                                                </label>

                                                <textarea
                                                    class="span6"
                                                    name="News[cms_short_title]"
                                                    id="Search_cms_short_title"
                                                ><?= htmlspecialchars(
                                                    $searchDetail,
                                                    ENT_QUOTES,
                                                    'UTF-8'
                                                ) ?></textarea>

                                            </div>
                                            <!--end::Search Detail-->

                                            <!--begin::Search Button-->
                                            <div class="search-row search-buttons">

                                                <button
                                                    type="submit"
                                                    class="btn btn-primary search-button"
                                                >

                                                    <i class="fa-solid fa-magnifying-glass"></i>

                                                    Search

                                                </button>

                                            </div>
                                            <!--end::Search Button-->

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <!--end::Advanced Search-->

                        <!--begin::News Table Widget-->
                        <div class="news-widget news-table-widget">

                            <div class="news-widget-head">

                                <h4 class="news-heading">

                                    <i class="fa-solid fa-list"></i>

                                    News

                                </h4>

                            </div>

                            <div class="news-widget-body">

                                <!--begin::Showing-->
                                <div class="showing-row">

                                    <span class="showing-content">

                                        <label for="news_per_page">
                                            Showing:
                                        </label>

                                        <select
                                            name="news_per_page"
                                            id="news_per_page"
                                            class="showing-select"
                                            onchange="changeNewsPerPage(this.value)"
                                        >

                                            <option value="" <?= $newsPerPage === '' ? 'selected' : '' ?>>
                                                Default (10)
                                            </option>

                                            <option value="10" <?= $newsPerPage === '10' ? 'selected' : '' ?>>
                                                10
                                            </option>

                                            <option value="50" <?= $newsPerPage === '50' ? 'selected' : '' ?>>
                                                50
                                            </option>

                                            <option value="100" <?= $newsPerPage === '100' ? 'selected' : '' ?>>
                                                100
                                            </option>

                                            <option value="200" <?= $newsPerPage === '200' ? 'selected' : '' ?>>
                                                200
                                            </option>

                                            <option value="250" <?= $newsPerPage === '250' ? 'selected' : '' ?>>
                                                250
                                            </option>

                                        </select>

                                    </span>

                                </div>
                                <!--end::Showing-->

                                <div class="clear-div"></div>

                                <!--begin::News Table-->
                                <div class="overflow-table">

                                    <div id="News-grid" class="grid-view">

                                        <table class="news-table">

                                            <thead>

                                                <tr>

                                                    <th class="checkbox-column">

                                                        <input
                                                            class="select-on-check-all"
                                                            type="checkbox"
                                                            value="1"
                                                            name="chk_all"
                                                            id="chk_all"
                                                        >

                                                    </th>

                                                    <th class="image-column">
                                                        Image
                                                    </th>

                                                    <th class="title-column">
                                                        Title
                                                    </th>

                                                    <th class="detail-column">
                                                        Detail
                                                    </th>

                                                    <th class="action-column">
                                                        Action
                                                    </th>

                                                </tr>

                                                <tr class="filters">

                                                    <td>
                                                        &nbsp;
                                                    </td>

                                                    <td>
                                                        &nbsp;
                                                    </td>

                                                    <td>

                                                        <input
                                                            type="text"
                                                            name="filter_title"
                                                            value="<?= htmlspecialchars(
                                                                $searchTitle,
                                                                ENT_QUOTES,
                                                                'UTF-8'
                                                            ) ?>"
                                                            readonly
                                                        >

                                                    </td>

                                                    <td>

                                                        <input
                                                            type="text"
                                                            name="filter_detail"
                                                            value="<?= htmlspecialchars(
                                                                $searchDetail,
                                                                ENT_QUOTES,
                                                                'UTF-8'
                                                            ) ?>"
                                                            readonly
                                                        >

                                                    </td>

                                                    <td>
                                                        &nbsp;
                                                    </td>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <?php if (count($displayNews) > 0): ?>

                                                    <?php foreach ($displayNews as $index => $news): ?>

                                                        <tr class="<?= $index % 2 === 0 ? 'odd' : 'even' ?> selectable">

                                                            <!--begin::Checkbox-->
                                                            <td class="checkbox-column">

                                                                <input
                                                                    class="select-on-check"
                                                                    type="checkbox"
                                                                    value="<?= (int) $news['id'] ?>"
                                                                    id="chk_<?= (int) $news['id'] ?>"
                                                                    name="chk[]"
                                                                >

                                                            </td>
                                                            <!--end::Checkbox-->

                                                            <!--begin::Image-->
                                                            <td class="image-column">

                                                                <img
                                                                    src="<?= htmlspecialchars(
                                                                        $news['image'],
                                                                        ENT_QUOTES,
                                                                        'UTF-8'
                                                                    ) ?>"
                                                                    alt="<?= htmlspecialchars(
                                                                        $news['image_alt'],
                                                                        ENT_QUOTES,
                                                                        'UTF-8'
                                                                    ) ?>"
                                                                    onerror="this.onerror=null; this.src='./assets/img/default-150x150.png';"
                                                                >

                                                            </td>
                                                            <!--end::Image-->

                                                            <!--begin::Title-->
                                                            <td class="title-column">

                                                                <?= htmlspecialchars(
                                                                    $news['title'],
                                                                    ENT_QUOTES,
                                                                    'UTF-8'
                                                                ) ?>

                                                            </td>
                                                            <!--end::Title-->

                                                            <!--begin::Detail-->
                                                            <td class="detail-column">

                                                                <?= htmlspecialchars(
                                                                    $news['detail'],
                                                                    ENT_QUOTES,
                                                                    'UTF-8'
                                                                ) ?>

                                                            </td>
                                                            <!--end::Detail-->

                                                            <!--begin::Action-->
                                                            <td class="action-column">

                                                                <a
                                                                    class="news-action-button view-button"
                                                                    title="View Detail"
                                                                    href="./news-detail.php?id=<?= (int) $news['id'] ?>"
                                                                >

                                                                    <i class="fa-solid fa-eye"></i>

                                                                </a>

                                                                <a
                                                                    class="news-action-button edit-button"
                                                                    title="Edit"
                                                                    href="./edit-news.php?id=<?= (int) $news['id'] ?>"
                                                                >

                                                                    <i class="fa-solid fa-pencil"></i>

                                                                </a>

                                                                <a
                                                                    class="news-action-button delete-button"
                                                                    title="Delete"
                                                                    href="./delete-news.php?id=<?= (int) $news['id'] ?>"
                                                                    onclick="return confirm('Are you sure you want to delete this news?');"
                                                                >

                                                                    <i class="fa-solid fa-xmark"></i>

                                                                </a>

                                                            </td>
                                                            <!--end::Action-->

                                                        </tr>

                                                    <?php endforeach; ?>

                                                <?php else: ?>

                                                    <tr>

                                                        <td colspan="5" class="no-news">
                                                            No news found.
                                                        </td>

                                                    </tr>

                                                <?php endif; ?>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>
                                <!--end::News Table-->

                            </div>

                        </div>
                        <!--end::News Table Widget-->

                        <!--begin::Options-->
                        <div class="news-options">

                            <div class="buttons pull-left">

                                <button
                                    type="button"
                                    class="btn btn-primary delete-all-button"
                                    onclick="deleteSelectedNews();"
                                >

                                    <i class="fa-solid fa-minus"></i>

                                    Delete All

                                </button>

                            </div>

                            <div class="clearfix"></div>

                        </div>
                        <!--end::Options-->

                    </div>
                    <!--end::Legacy News Content-->

                </div>

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
        NEWS PAGE STYLE
        โครงสร้างและขนาดใกล้เคียงกับหน้า News ต้นฉบับ
        =========================================================
        */

        .innerLR {
            width: 100%;
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            color: #333333;
        }

        .news-widget {
            width: 100%;
            margin: 0 0 9px 0;
            border: 1px solid #dddddd;
            background-color: #ffffff;
        }

        .news-widget-head {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 32px;
            padding: 0 10px;
            border-bottom: 1px solid #dddddd;
            background-color: #f7f7f7;
            background-image:
                linear-gradient(
                    45deg,
                    rgba(0, 0, 0, 0.035) 25%,
                    transparent 25%,
                    transparent 75%,
                    rgba(0, 0, 0, 0.035) 75%
                ),
                linear-gradient(
                    45deg,
                    rgba(0, 0, 0, 0.035) 25%,
                    transparent 25%,
                    transparent 75%,
                    rgba(0, 0, 0, 0.035) 75%
                );
            background-position: 0 0, 5px 5px;
            background-size: 10px 10px;
        }

        .news-heading {
            display: flex;
            align-items: center;
            gap: 9px;
            margin: 0;
            color: #333333;
            font-size: 14px;
            font-weight: bold;
            line-height: 32px;
        }

        .news-heading i {
            color: #333333;
            font-size: 14px;
        }

        .collapse-toggle {
            display: flex;
            align-items: center;
            justify-content: center;

            width: 20px;
            height: 20px;

            padding: 0;

            border: 1px solid #aaaaaa;
            border-radius: 3px;

            background-color: #ffffff;
            color: #555555;

            font-size: 11px;
            cursor: pointer;

            transition:
                background-color 0.15s ease,
                color 0.15s ease;
        }

        .collapse-toggle:hover {
            background-color: #eeeeee;
            color: #222222;
        }

        .collapse-toggle:focus {
            outline: none;
            box-shadow: none;
        }

        #advanced-search-body {
            display: block;
        }

        #advanced-search-body.is-collapsed {
            display: none;
        }

        .news-widget-body {
            padding: 12px 30px 10px 30px;
            background-color: #ffffff;
        }

        .search-form {
            width: 100%;
        }

        .news-widget .form {
            width: 100%;
            max-width: 680px;
            font-size: 13px;
        }

        .search-row {
            display: block;
            margin: 0 0 11px 0;
            padding: 0;
        }

        .search-row label {
            display: block;
            margin: 0 0 6px 0;
            color: #333333;
            font-size: 13px;
            font-weight: normal;
            line-height: 18px;
        }

        .search-row input,
        .search-row textarea {
            display: block;
            box-sizing: border-box;
            width: 490px;
            max-width: 100%;
            margin: 0;
            padding: 5px 8px;
            border: 1px solid #d4d4d4;
            border-radius: 4px;
            background-color: #ffffff;
            color: #333333;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            line-height: 18px;
            box-shadow: none;
        }

        .search-row input {
            height: 30px;
        }

        .search-row textarea {
            height: 70px;
            min-height: 70px;
            resize: vertical;
        }

        .search-row input:focus,
        .search-row textarea:focus {
            border-color: #999999;
            outline: none;
            box-shadow: none;
        }

        .search-buttons {
            margin-top: 2px;
            margin-bottom: 0;
        }

        .search-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            height: 32px;
            padding: 5px 11px;
            border: 0;
            border-radius: 4px;
            background-color: #168de2;
            color: #ffffff;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            font-weight: bold;
            line-height: 20px;
        }

        .search-button:hover {
            background-color: #087acb;
            color: #ffffff;
        }

        .search-button i {
            font-size: 13px;
        }

        .news-table-widget {
            margin-top: -1px;
        }

        .news-table-widget .news-widget-body {
            padding: 10px 10px 9px 10px;
        }

        .showing-row {
            min-height: 30px;
            margin: 0 0 5px 0;
            padding: 0;
            text-align: right;
        }

        .showing-content {
            display: inline-flex;
            align-items: center;
            gap: 7px;
        }

        .showing-content label {
            margin: 0;
            color: #333333;
            font-size: 13px;
            font-weight: bold;
            line-height: 30px;
        }

        .showing-select {
            box-sizing: border-box;
            width: 220px;
            height: 28px;
            padding: 3px 8px;
            border: 1px solid #d5d5d5;
            border-radius: 4px;
            background-color: #eeeeee;
            color: #555555;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        .clear-div {
            clear: both;
            height: 0;
        }

        .overflow-table {
            width: 100%;
            overflow-x: auto;
        }

        .news-table {
            width: 100%;
            min-width: 850px;
            margin: 0;
            border-collapse: collapse;
            border-spacing: 0;
            table-layout: fixed;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
        }

        .news-table th {
            height: 27px;
            padding: 5px 10px;
            border: 1px solid #ffffff;
            background-color: #168de2;
            color: #ffffff;
            font-size: 13px;
            font-weight: bold;
            line-height: 17px;
            text-align: left;
            vertical-align: middle;
        }

        .news-table td {
            padding: 7px 10px;
            border: 1px solid #dddddd;
            color: #333333;
            font-size: 13px;
            line-height: 19px;
            text-align: left;
            vertical-align: top;
            overflow-wrap: break-word;
        }

        .news-table .checkbox-column {
            width: 36px;
            padding: 7px 5px;
            text-align: center;
            vertical-align: middle;
        }

        .news-table .image-column {
            width: 190px;
        }

        .news-table .title-column {
            width: 30%;
        }

        .news-table .detail-column {
            width: 34%;
        }

        .news-table .action-column {
            width: 100px;
            text-align: center;
            vertical-align: middle;
        }

        .news-table thead .filters td {
            height: 38px;
            padding: 4px 10px;
            background-color: #ffffff;
        }

        .news-table thead .filters input {
            box-sizing: border-box;
            width: 100%;
            height: 30px;
            padding: 4px 7px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            background-color: #ffffff;
            color: #333333;
            font-size: 13px;
        }

        .news-table tbody tr.odd {
            background-color: #ffffff;
        }

        .news-table tbody tr.even {
            background-color: #fafafa;
        }

        .news-table tbody tr:hover {
            background-color: #f2f8fc;
        }

        .news-table td.image-column img {
            display: block;
            width: 110px;
            height: 90px;
            object-fit: contain;
            object-position: center;
            background-color: #ffffff;
        }

        .news-table td.title-column {
            color: #244d76;
            vertical-align: top;
        }

        .news-table td.detail-column {
            width: 450px;
            vertical-align: top;
        }

        .news-table input[type="checkbox"] {
            width: 14px;
            height: 14px;
            margin: 0;
            cursor: pointer;
        }

        .news-action-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 27px;
            height: 27px;
            margin: 0 1px;
            border: 1px solid #d5d5d5;
            border-radius: 5px;
            text-decoration: none;
            font-size: 13px;
            line-height: 25px;
            text-align: center;
            vertical-align: middle;
        }

        .news-action-button:hover {
            text-decoration: none;
            opacity: 0.85;
        }

        .view-button {
            background-color: #e8f5fb;
            color: #3987a8;
        }

        .edit-button {
            background-color: #f2f4ed;
            color: #65733c;
        }

        .delete-button {
            background-color: #faf1f1;
            color: #8d4040;
        }

        .no-news {
            padding: 25px !important;
            color: #777777 !important;
            text-align: center !important;
        }

        .news-options {
            min-height: 45px;
            margin-top: 10px;
            padding: 10px 0 0 0;
        }

        .pull-left {
            float: left;
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: "";
        }

        .delete-all-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            height: 32px;
            padding: 5px 12px;
            border: 0;
            border-radius: 4px;
            background-color: #168de2;
            color: #ffffff;
            font-size: 13px;
            font-weight: bold;
        }

        .delete-all-button:hover {
            background-color: #087acb;
            color: #ffffff;
        }

        .delete-all-button i {
            font-size: 12px;
        }

        @media (max-width: 767.98px) {

            .news-widget-body {
                padding: 10px 15px;
            }

            .news-table-widget .news-widget-body {
                padding: 10px 5px;
            }

            .search-row input,
            .search-row textarea {
                width: 100%;
            }

            .showing-row {
                text-align: left;
            }

            .showing-content {
                width: 100%;
                justify-content: flex-start;
            }

            .showing-select {
                width: 180px;
            }

            .news-table {
                min-width: 850px;
            }

            .news-options {
                padding-left: 0;
            }

        }

    </style>
    <!--end::Page CSS-->

    <!--begin::Page Script-->
    <script>

        /*
        =========================================================
        NEWS PAGE SCRIPT
        =========================================================
        */

        function changeNewsPerPage(value) {

            const url = new URL(window.location.href);

            if (value === '') {
                url.searchParams.delete('news_per_page');
            } else {
                url.searchParams.set('news_per_page', value);
            }

            window.location.href = url.toString();

        }

        document.addEventListener('DOMContentLoaded', function () {

            const selectAll = document.getElementById('chk_all');

            if (selectAll) {

                selectAll.addEventListener('change', function () {

                    const checkboxes = document.querySelectorAll(
                        '.select-on-check'
                    );

                    checkboxes.forEach(function (checkbox) {
                        checkbox.checked = selectAll.checked;
                    });

                });

            }

        });

        function deleteSelectedNews() {

            const selected = document.querySelectorAll(
                '.select-on-check:checked'
            );

            if (selected.length === 0) {

                alert('Please select at least one news item.');

                return;

            }

            const confirmed = confirm(
                'Are you sure you want to delete the selected news?'
            );

            if (!confirmed) {
                return;
            }

            /*
             * ส่วนนี้สามารถเชื่อมต่อกับระบบลบข้อมูลจริงภายหลัง
             */

            alert(
                'Delete function is not connected to the database yet.'
            );

        }

        document.addEventListener('DOMContentLoaded', function () {

            const searchToggle = document.getElementById(
                'advanced-search-toggle'
            );

            const searchBody = document.getElementById(
                'advanced-search-body'
            );

            if (searchToggle && searchBody) {

                searchToggle.addEventListener('click', function () {

                    const isCollapsed = searchBody.classList.toggle(
                        'is-collapsed'
                    );

                    const icon = searchToggle.querySelector('i');

                    searchToggle.setAttribute(
                        'aria-expanded',
                        String(!isCollapsed)
                    );

                    searchToggle.setAttribute(
                        'title',
                        isCollapsed
                            ? 'Expand Advanced Search'
                            : 'Collapse Advanced Search'
                    );

                    if (icon) {

                        icon.classList.toggle(
                            'fa-chevron-up',
                            !isCollapsed
                        );

                        icon.classList.toggle(
                            'fa-chevron-down',
                            isCollapsed
                        );

                    }

                });

            }

        });

    </script>
    <!--end::Page Script-->

</body>
<!--end::Body-->

</html>