<?php
$currentPage = basename($_SERVER['PHP_SELF']);

function isActivePage($page)
{
    global $currentPage;
    return $currentPage === $page ? 'active' : '';
}
?>

<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <a href="./index.php" class="brand-link">
      <img
        src="./assets/img/AdminLTELogo.png"
        alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow"
      />
      <span class="brand-text fw-light">Brother Admin</span>
    </a>
  </div>
  <!--end::Sidebar Brand-->

  <!--begin::Sidebar Search-->
  <div class="sidebar-search" role="search">
    <label for="sidebar-search-input" class="visually-hidden">
      Filter menu
    </label>

    <input
      type="search"
      id="sidebar-search-input"
      class="form-control form-control-sm"
      placeholder="Filter menu…"
      autocomplete="off"
      data-lte-toggle="sidebar-search"
      data-lte-target="#navigation"
    />

    <p
      class="fs-7 text-secondary mt-2 mb-0"
      data-lte-search-empty
      role="status"
      hidden
    >
      No matching pages.
    </p>
  </div>
  <!--end::Sidebar Search-->

  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2" aria-label="Main navigation">

      <!--begin::Sidebar Menu-->
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        data-accordion="false"
        id="navigation"
      >

        <!-- 1. Home -->
        <li class="nav-item">
          <a href="./index.php" class="nav-link <?= isActivePage('index.php') ?>">
            <i class="nav-icon fa-solid fa-house"></i>
            <p>Home</p>
          </a>
        </li>

        <!-- 2. About Us -->
        <li class="nav-item">
          <a href="./about-us.php" class="nav-link <?= isActivePage('about-us.php') ?>">
            <i class="nav-icon fa-solid fa-table-cells-large"></i>
            <p>About Us</p>
          </a>
        </li>

        <!-- 3. Terms of use -->
        <li class="nav-item">
          <a href="./term-to-use.php" class="nav-link <?= isActivePage('term-to-use.php') ?>">
            <i class="nav-icon fa-solid fa-gear"></i>
            <p>Terms of use</p>
          </a>
        </li>

        <!-- 4. News -->
        <li class="nav-item <?= in_array($currentPage, ['add-news.php', 'news.php']) ? 'menu-open' : '' ?>">
          <a
            href="#"
            class="nav-link <?= in_array($currentPage, ['add-news.php', 'news.php']) ? 'active' : '' ?>"
          >
            <i class="nav-icon fa-solid fa-folder-open"></i>
            <p>
              News
              <i class="nav-arrow fa-solid fa-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./add-news.php" class="nav-link <?= isActivePage('add-news.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Add News</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./news.php" class="nav-link <?= isActivePage('news.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>News</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- 5. How to use -->
        <li class="nav-item <?= in_array($currentPage, ['add-how-to-use.php', 'how-to-use.php']) ? 'menu-open' : '' ?>">
          <a
            href="#"
            class="nav-link <?= in_array($currentPage, ['add-how-to-use.php', 'how-to-use.php']) ? 'active' : '' ?>"
          >
            <i class="nav-icon fa-solid fa-clipboard"></i>
            <p>
              How to use
              <i class="nav-arrow fa-solid fa-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./add-how-to-use.php" class="nav-link <?= isActivePage('add-how-to-use.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Add How to use</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./how-to-use.php" class="nav-link <?= isActivePage('how-to-use.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>How to use</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- 6. FAQ -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-circle-question"></i>
            <p>
              FAQ
              <i class="nav-arrow fa-solid fa-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./faq-category.php" class="nav-link">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Category FAQ</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./faq.php" class="nav-link">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>FAQ</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- 7. Recommended video -->
        <li class="nav-item">
          <a href="./recommended-video.php" class="nav-link">
            <i class="nav-icon fa-solid fa-play"></i>
            <p>Recommended video</p>
          </a>
        </li>

        <!-- 8. Term and Conditions -->
        <li class="nav-item">
          <a href="./terms-conditions.php" class="nav-link">
            <i class="nav-icon fa-solid fa-file-contract"></i>
            <p>Term and Conditions</p>
          </a>
        </li>

        <!-- 9. Report Problem -->
        <li class="nav-item">
          <a href="./report-problem.php" class="nav-link">
            <i class="nav-icon fa-solid fa-triangle-exclamation"></i>
            <p>Report Problem</p>
          </a>
        </li>

       <!-- 10. Report -->
        <li class="nav-item <?= in_array($currentPage, [
            'Report-Academic.php',
            'Report-LearnerT.php',
            'Report-LearnerS.php',
            'Report-LearnerEr.php',
            'Report-LearnerEs.php',
            'Report-Attending.php',
            'Report-Sueway.php'
        ]) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link <?= in_array($currentPage, [
              'Report-Academic.php',
              'Report-LearnerT.php',
              'Report-LearnerS.php',
              'Report-LearnerEr.php',
              'Report-LearnerEs.php',
              'Report-Attending.php',
              'Report-Sueway.php'
          ]) ? 'active' : '' ?>">
            <i class="nav-icon bi bi-printer"></i>
            <p>
              Report
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./Report-Academic.php" class="nav-link <?= isActivePage('Report-Academic.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Academic Result report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./Report-LearnerT.php" class="nav-link <?= isActivePage('Report-LearnerT.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Learner Tracking report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./Report-LearnerS.php" class="nav-link <?= isActivePage('Report-LearnerS.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Learner Status Report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./Report-LearnerEr.php" class="nav-link <?= isActivePage('Report-LearnerEr.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Learner Exam Result report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./Report-LearnerEs.php" class="nav-link <?= isActivePage('Report-LearnerEs.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Learner Exam Answer report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./Report-Attending.php" class="nav-link <?= isActivePage('Report-Attending.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Attending Class report</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./Report-Sueway.php" class="nav-link <?= isActivePage('Report-Sueway.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Surway Report</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- 11. Certificate Management -->
        <li class="nav-item <?= in_array($currentPage, [
            'Certificate-Cer.php',
            'Certificate-Sig.php',
            'Certificate-Pass.php'
        ]) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link <?= in_array($currentPage, [
              'Certificate-Cer.php',
              'Certificate-Sig.php',
              'Certificate-Pass.php'
          ]) ? 'active' : '' ?>">
            <i class="nav-icon bi bi-award"></i>
            <p>
              Certificate Management
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./Certificate-Cer.php" class="nav-link <?= isActivePage('Certificate-Cer.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Certificate</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./Certificate-Sig.php" class="nav-link <?= isActivePage('Certificate-Sig.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Signature</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./Certificate-Pass.php" class="nav-link <?= isActivePage('Certificate-Pass.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Report Passcours</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- 12. Organization Management -->
        <li class="nav-item <?= in_array($currentPage, ['Organization-Or.php', 'Organization-Co.php', 'Organization-De.php', 'Organization-Po.php']) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link <?= in_array($currentPage, ['Organization-Or.php', 'Organization-Co.php', 'Organization-De.php', 'Organization-Po.php']) ? 'active' : '' ?>">
            <i class="nav-icon bi bi-building"></i>
            <p>
              Organization Management
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./Organization-Or.php" class="nav-link <?= isActivePage('Organization-Or.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Organization</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./Organization-Co.php" class="nav-link <?= isActivePage('Organization-Co.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Company</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./Organization-De.php" class="nav-link <?= isActivePage('Organization-De.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Department</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./Organization-Po.php" class="nav-link <?= isActivePage('Organization-Po.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Position</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- 13. Category Management -->
        <li class="nav-item <?= in_array($currentPage, ['category-add.php', 'category.php']) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link <?= in_array($currentPage, ['category-add.php', 'category.php']) ? 'active' : '' ?>">
            <i class="nav-icon fa-solid fa-folder"></i>
            <p>
              <span class="menu-number">1</span>
              Category Management
              <i class="nav-arrow fa-solid fa-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./category-add.php" class="nav-link <?= isActivePage('category-add.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Add Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./category.php" class="nav-link <?= isActivePage('category.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Category Management</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- 14. Course Management -->
        <li class="nav-item <?= in_array($currentPage, ['course-add.php', 'course.php']) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link <?= in_array($currentPage, ['course-add.php', 'course.php']) ? 'active' : '' ?>">
            <i class="nav-icon fa-solid fa-desktop"></i>
            <p>
              <span class="menu-number">2</span>
              Course Management
              <i class="nav-arrow fa-solid fa-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./course-add.php" class="nav-link <?= isActivePage('course-add.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Add Course</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./course.php" class="nav-link <?= isActivePage('course.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Course Management</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- 15. Lesson Management -->
        <li class="nav-item <?= in_array($currentPage, ['lesson-add.php', 'lesson.php']) ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link <?= in_array($currentPage, ['lesson-add.php', 'lesson.php']) ? 'active' : '' ?>">
            <i class="nav-icon fa-solid fa-desktop"></i>
            <p>
              <span class="menu-number">3</span>
              Lesson Management
              <i class="nav-arrow fa-solid fa-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./lesson-add.php" class="nav-link <?= isActivePage('lesson-add.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Add Lesson</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./lesson.php" class="nav-link <?= isActivePage('lesson.php') ?>">
                <i class="nav-icon fa-solid fa-circle"></i>
                <p>Lesson Management</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
      <!--end::Sidebar Menu-->

      <!-- Docs CTA (bottom of sidebar) -->
      <div class="p-3 mt-3 border-top border-secondary border-opacity-25">
        <a
          href="./docs/introduction.html"
          class="btn btn-sm btn-outline-light w-100 d-flex align-items-center justify-content-center gap-2"
        >
          <i class="fa-solid fa-book" aria-hidden="true"></i>
          View documentation
        </a>
      </div>

    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>