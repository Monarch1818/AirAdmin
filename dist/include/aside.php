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

            <!-- Add News -->
            <li class="nav-item">
              <a
                href="./add-news.php"
                class="nav-link <?= isActivePage('add-news.php') ?>"
              >
                <p>Add News</p>
              </a>
            </li>

            <!-- News -->
            <li class="nav-item">
              <a
                href="./news.php"
                class="nav-link <?= isActivePage('news.php') ?>"
              >
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

            <!-- Add How to use -->
            <li class="nav-item">

              <a
                href="./add-how-to-use.php"
                class="nav-link <?= isActivePage('add-how-to-use.php') ?>"
              >
                <p>Add How to use</p>
              </a>

            </li>

            <!-- How to use -->
            <li class="nav-item">

              <a
                href="./how-to-use.php"
                class="nav-link <?= isActivePage('how-to-use.php') ?>"
              >
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
              <a href="./users.html" class="nav-link">
                
                <p>Category FAQ</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="./users.html" class="nav-link">
                
                <p>FAQ</p>
              </a>
            </li>

          </ul>
        </li>

        <!-- 7. Recommended video (เดิม) -->
        <li class="nav-item">
          <a href="./users.html" class="nav-link">
            <i class="nav-icon fa-solid fa-people-group"></i>
            <p>Recommended video</p>
          </a>
        </li>

        <!-- 8. Term and Conditions (เดิม) -->
        <li class="nav-item">
          <a href="./users.html" class="nav-link">
            <i class="nav-icon fa-solid fa-people-group"></i>
            <p>Term and Conditions</p>
          </a>
        </li>

        <!-- 9. Report Problem (เดิม) -->
        <li class="nav-item">
          <a href="./users.html" class="nav-link">
            <i class="nav-icon fa-solid fa-people-group"></i>
            <p>Report Problem</p>
          </a>
        </li>

                <!-- =========================================
             10. CATEGORY MANAGEMENT
        ========================================== -->
        <li class="nav-item <?= 
            in_array($currentPage, ['category-add.php', 'category.php']) 
                ? 'menu-open' 
                : '' 
        ?>">

          <a href="#" class="nav-link <?= 
              in_array($currentPage, ['category-add.php', 'category.php']) 
                  ? 'active' 
                  : '' 
          ?>">

            <!-- Folder Icon -->
            <i class="nav-icon fa-solid fa-folder"></i>

            <p>

              <!-- Number -->
              <span class="menu-number">
                1
              </span>

              Category Management

              <i class="nav-arrow fa-solid fa-chevron-right"></i>

            </p>

          </a>


          <!-- Dropdown -->
          <ul class="nav nav-treeview">

            <!-- Add Category -->
            <li class="nav-item">

              <a
                href="./category-add.php"
                class="nav-link <?= isActivePage('category-add.php') ?>"
              >

                <i class="nav-icon fa-solid fa-circle"></i>

                <p>
                  Add Category
                </p>

              </a>

            </li>


            <!-- Category Management -->
            <li class="nav-item">

              <a
                href="./category.php"
                class="nav-link <?= isActivePage('category.php') ?>"
              >

                <i class="nav-icon fa-solid fa-circle"></i>

                <p>
                  Category Management
                </p>

              </a>

            </li>

          </ul>

        </li>



        <!-- =========================================
             11. COURSE MANAGEMENT
        ========================================== -->
        <li class="nav-item <?= 
            in_array($currentPage, ['course-add.php', 'course.php']) 
                ? 'menu-open' 
                : '' 
        ?>">

          <a href="#" class="nav-link <?= 
              in_array($currentPage, ['course-add.php', 'course.php']) 
                  ? 'active' 
                  : '' 
          ?>">

            <!-- Monitor Icon -->
            <i class="nav-icon fa-solid fa-desktop"></i>

            <p>

              <!-- Number -->
              <span class="menu-number">
                2
              </span>

              Course Management

              <i class="nav-arrow fa-solid fa-chevron-right"></i>

            </p>

          </a>


          <!-- Dropdown -->
          <ul class="nav nav-treeview">

            <!-- Add Course -->
            <li class="nav-item">

              <a
                href="./course-add.php"
                class="nav-link <?= isActivePage('course-add.php') ?>"
              >

                <i class="nav-icon fa-solid fa-circle"></i>

                <p>
                  Add Course
                </p>

              </a>

            </li>


            <!-- Course Management -->
            <li class="nav-item">

              <a
                href="./course.php"
                class="nav-link <?= isActivePage('course.php') ?>"
              >

                <i class="nav-icon fa-solid fa-circle"></i>

                <p>
                  Course Management
                </p>

              </a>

            </li>

          </ul>

        </li>



        <!-- =========================================
             12. LESSON MANAGEMENT
        ========================================== -->
        <li class="nav-item <?= 
            in_array($currentPage, ['lesson-add.php', 'lesson.php']) 
                ? 'menu-open' 
                : '' 
        ?>">

          <a href="#" class="nav-link <?= 
              in_array($currentPage, ['lesson-add.php', 'lesson.php']) 
                  ? 'active' 
                  : '' 
          ?>">

            <!-- Monitor Icon -->
            <i class="nav-icon fa-solid fa-desktop"></i>

            <p>

              <!-- Number -->
              <span class="menu-number">
                3
              </span>

              Lesson Management

              <i class="nav-arrow fa-solid fa-chevron-right"></i>

            </p>

          </a>


          <!-- Dropdown -->
          <ul class="nav nav-treeview">

            <!-- Add Lesson -->
            <li class="nav-item">

              <a
                href="./lesson-add.php"
                class="nav-link <?= isActivePage('lesson-add.php') ?>"
              >

                <i class="nav-icon fa-solid fa-circle"></i>

                <p>
                  Add Lesson
                </p>

              </a>

            </li>


            <!-- Lesson Management -->
            <li class="nav-item">

              <a
                href="./lesson.php"
                class="nav-link <?= isActivePage('lesson.php') ?>"
              >

                <i class="nav-icon fa-solid fa-circle"></i>

                <p>
                  Lesson Management
                </p>

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