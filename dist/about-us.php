
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

      
    <!--begin::App Content Header-->
    <div class="app-content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="mb-0 fs-3">About Us</h1>
          </div>

          <div class="col-sm-6">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item">
                  <a href="./index.php">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="./about-us.php">About Us</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Edit
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

        <div class="card about-edit-card">

          <!-- Edit Header -->
          <div class="card-header">
            <h3 class="card-title">
              <i class="fa-solid fa-pen-to-square me-2"></i>
              Edit
            </h3>
          </div>

          <!-- Edit Form -->
          <form id="aboutEditForm">

            <div class="card-body">

              <!-- Title -->
              <div class="mb-4">
                <label for="aboutTitle" class="form-label">
                  Title <span class="text-danger">*</span>
                </label>

                <input
                  type="text"
                  class="form-control"
                  id="aboutTitle"
                  name="title"
                  value="Brother Group Vision"
                  required
                >
              </div>


              <!-- Description -->
              <div class="mb-3">

                <label for="aboutDescription" class="form-label">
                  Description
                </label>

                <textarea
                  id="aboutDescription"
                  name="description"
                  rows="15"
                ><?php
    $aboutDescription = <<<'HTML'
    <div class="parbase brotherimage section">

      <h2 class="mod-2003">
        Brother Group Vision "At your side 2030"
      </h2>

      <p>
        <img
          src="https://global.brother/-/media/global/corporate/img/vision/ays2030-image.ashx"
          alt="At your side 2030 image"
        />
      </p>

    </div>


    <div class="parbase brotherimage section">

      <div class="mod-a010">

        <p>
          In order to grow sustainably in the midst of major environmental changes,
          the Brother Group has formulated the Brother Group Vision
          "At your side 2030" to show our direction from fiscal 2022 to 2030.
        </p>

      </div>


      <div class="mod-a010">

        <p>
          Centered on the spirit of "At your side." which puts customers first
          in every situation, we will present "Brother's raison d'être
          and value proposition to society" and propose and implement the strategy
          through backcasting by clearly setting the deadline of 2030.
        </p>

        <p>&nbsp;</p>

        <p>
          <img
            src="https://global.brother/-/media/global/corporate/img/vision/backcasting-image-en.ashx"
            alt="Implement Strategy through Backcasting Based on the Vision for 2030"
          />
        </p>

        <h2 class="mod-2003">
          Overview of "At your side 2030"
        </h2>

        <div class="mod-a010">

          <p>
            The Brother Group Vision "At your side 2030" comprises three elements.
            Based on Brother's raison d'être (Our Purpose), the Vision outlines
            how we intend to provide value (Our Approach) and what values we intend
            to realize by 2030 (Our Focus Areas).
          </p>

          <p>&nbsp;</p>

        </div>


        <div class="mod-7002 large center">

          <p class="img">

            <span class="block">

              <img
                src="https://global.brother/-/media/global/corporate/img/vision/structure-ays2030-en.ashx"
                alt="Structure of At your side 2030"
              />

            </span>

          </p>

        </div>


        <div class="mod-a010">
          &nbsp;
        </div>


        <!-- Our Purpose -->

        <div class="mod-7002 xsmall">

          <div class="description">

            <div class="mod-a010">

              <h3 class="mod-2004 mt10">
                <span class="txt">Our Purpose</span>
              </h3>

              <p>
                <strong>
                  By being "At your side," we enable people's productivity
                  and creativity, contribute to society, and help protect the earth.
                </strong>
              </p>

              <ul class="mod-4001">

                <li class="item">
                  <span class="txt">
                    As we have throughout our history, Brother continues to help
                    unlock people's innate productivity and creativity.
                  </span>
                </li>

                <li class="item">
                  <span class="txt">
                    By supporting people in their value-creation journeys,
                    and helping them realize their aspirations and goals,
                    we contribute to a better society.
                  </span>
                </li>

                <li class="item">
                  <span class="txt">
                    We are also "At your side." for the environment,
                    focusing on sustainability and on leaving as small
                    a footprint as possible.
                  </span>
                </li>

              </ul>

            </div>

          </div>

        </div>


        <!-- Our Approach -->

        <div class="mod-7002 xsmall">

          <div class="description">

            <div class="mod-a010">

              <h3 class="mod-2004 mt10">
                <span class="txt">Our Approach</span>
              </h3>

              <p>
                <strong>
                  We identify and eliminate barriers to customers' success
                  by utilizing our unique technologies and global network.
                </strong>
              </p>

              <ul class="mod-4001">

                <li class="item">
                  <span class="txt">
                    We will understand our customers' "value chain",
                    identify their core challenges, and provide unique products
                    and solutions that help them achieve their goals.
                  </span>
                </li>

                <li class="item">
                  <span class="txt">
                    We will continue developing and enhancing unique technologies
                    across Brother's multi-business portfolio.
                  </span>
                </li>

                <li class="item">
                  <span class="txt">
                    We will take advantage of our global network of local experts,
                    sales channels, and customer bases.
                  </span>
                </li>

                <li class="item">
                  <span class="txt">
                    We will expand our portfolio by focusing on adjacencies
                    to our two strong assets, technology &amp; global network.
                  </span>
                </li>

              </ul>

            </div>

          </div>

        </div>


        <!-- Our Focus Areas -->

        <div class="mod-7002 xsmall">

          <div class="description">

            <div class="mod-a010">

              <h3 class="mod-2004 mt10">
                <span class="txt">Our Focus Areas</span>
              </h3>


              <p>
                <strong>
                  Industrial - Become a trusted, invaluable solutions partner.
                </strong>
              </p>

              <p>
                In the industrial area: We will improve customers' productivity,
                solve their business challenges, and reduce our environmental impact.
                By doing so, we will gain their trust and become an invaluable partner.
              </p>

              <p>&nbsp;</p>


              <div class="mod-7002 large center">

                <p class="img">

                  <span class="block">

                    <img
                      src="https://global.brother/-/media/global/corporate/img/vision/best-partner-en.ashx"
                      alt="Industrial - Become a trusted, invaluable solutions partner"
                    />

                  </span>

                </p>

              </div>


              <p>
                <strong>
                  Printing - Continue leading print innovation and pioneering
                  new offerings.
                </strong>
              </p>

              <p>
                In the printing area: Even with huge changes in the definition
                of "office work" and the printing environment, we will continue
                to exceed customers' expectations. We will also build new business
                pillars that expand beyond our existing boundaries.
              </p>

              <p>&nbsp;</p>


              <div class="mod-7002 large center">

                <p class="img">

                  <span class="block">

                    <img
                      src="https://global.brother/-/media/global/corporate/img/vision/pioneering-en.ashx"
                      alt="Printing - Continue leading print innovation and pioneering new offerings"
                    />

                  </span>

                </p>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>
    HTML;

    echo htmlspecialchars($aboutDescription, ENT_QUOTES, 'UTF-8');
    ?></textarea>

              </div>

            </div>


            <!-- Footer -->
            <div class="card-footer">

              <button
                type="submit"
                class="btn btn-primary"
                id="saveAboutBtn"
              >
                <i class="fa-solid fa-check me-1"></i>
                Save
              </button>

            </div>

          </form>

        </div>

      </div>
    </div>
    <!--end::App Content-->

    </main>
    <!--end::App Main-->


    <!--begin::Footer-->
    <?php include 'include/footer.php';?>
    <!--end::Footer-->

  </div>
  <!--end::App Wrapper-->


  <!--begin::TinyMCE-->
  <script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js"></script>
  <!--end::TinyMCE-->


  <!--begin::Page Script-->
  <script>

    /*
    =========================================================
    ABOUT US EDITOR
    =========================================================
    */

    const aboutStorageKey = 'brotherAboutUsData';

    const aboutDefaultData = {
      title: 'Brother Group Vision',
      description: `
        <h2>Brother Group Vision "At your side 2030"</h2>
        <p>Brother Group strives to create value for customers through innovative products and services.</p>
      `
    };


    /*
    =========================================================
    INITIALIZE TINYMCE
    =========================================================
    */

    tinymce.init({

      selector: '#aboutDescription',

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

      elementpath: true,

      setup: function (editor) {

        editor.on('init', function () {

          loadAboutData();

        });

      }

    });


    /*
    =========================================================
    LOAD DATA FROM LOCALSTORAGE
    =========================================================
    */

    function loadAboutData() {

      const savedData = localStorage.getItem(aboutStorageKey);

      if (!savedData) {
        return;
      }

      try {

        const data = JSON.parse(savedData);

        const titleInput = document.getElementById('aboutTitle');

        if (data.title) {
          titleInput.value = data.title;
        }

        if (data.description !== undefined) {

          tinymce
            .get('aboutDescription')
            .setContent(data.description);

        }

      } catch (error) {

        console.error('Unable to load About Us data:', error);

      }

    }


    /*
    =========================================================
    SAVE DATA
    =========================================================
    */

    document
      .getElementById('aboutEditForm')
      .addEventListener('submit', function (event) {

        event.preventDefault();

        const titleInput = document.getElementById('aboutTitle');

        const title = titleInput.value.trim();

        const description = tinymce
          .get('aboutDescription')
          .getContent();

        const message = document.getElementById('aboutSaveMessage');

        if (!title) {

          titleInput.focus();

          showAboutMessage(
            'Please enter a title.',
            'danger'
          );

          return;

        }


        const aboutData = {

          title: title,

          description: description,

          updatedAt: new Date().toISOString()

        };


        try {

          localStorage.setItem(
            aboutStorageKey,
            JSON.stringify(aboutData)
          );

          showAboutMessage(
            'About Us content saved successfully.',
            'success'
          );

        } catch (error) {

          console.error('Unable to save About Us data:', error);

          showAboutMessage(
            'Unable to save content.',
            'danger'
          );

        }

      });


    /*
    =========================================================
    SHOW SAVE MESSAGE
    =========================================================
    */

    function showAboutMessage(text, type) {

      const message = document.getElementById('aboutSaveMessage');

      message.className = 'alert alert-' + type + ' mt-3';

      message.textContent = text;

    }

  </script>
  <!--end::Page Script-->


</body>
<!--end::Body-->

</html>