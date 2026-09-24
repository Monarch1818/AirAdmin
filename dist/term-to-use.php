
<?php

// =========================================================
// TERMS OF USE - SAVE CONFIGURATION
// =========================================================

$storageDirectory = __DIR__ . '/storage';
$storageFile = $storageDirectory . '/terms_detail.html';

$saveSuccess = false;
$saveError = '';


// =========================================================
// LOAD SAVED TERMS
// =========================================================

$savedTerms = null;

if (file_exists($storageFile)) {

    $savedTerms = file_get_contents($storageFile);

}


// =========================================================
// HANDLE FORM SUBMIT
// =========================================================

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $termsDetail = $_POST['terms_detail'] ?? '';

    if (!is_string($termsDetail)) {

        $termsDetail = '';

    }


    // Create storage directory if it does not exist

    if (!is_dir($storageDirectory)) {

        if (!mkdir($storageDirectory, 0755, true)) {

            $saveError = 'Unable to create storage directory.';

        }

    }


    // Save terms content

    if ($saveError === '') {

        $result = file_put_contents(
            $storageFile,
            $termsDetail,
            LOCK_EX
        );


        if ($result === false) {

            $saveError = 'Unable to save Terms of Use.';

        } else {

            // Redirect after successful save
            // Prevent duplicate form submission

            header('Location: term-to-use.php?saved=1');

            exit;

        }

    }

}


// =========================================================
// SAVE STATUS
// =========================================================

if (isset($_GET['saved']) && $_GET['saved'] === '1') {

    $saveSuccess = true;

}


// =========================================================
// RELOAD SAVED CONTENT AFTER ERROR / INITIAL LOAD
// =========================================================

if (file_exists($storageFile)) {

    $savedTerms = file_get_contents($storageFile);

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

      <!--begin::App Content Header-->
      <div class="app-content-header">

        <div class="container-fluid">

          <div class="row">

            <div class="col-sm-6">
              <h1 class="mb-0 fs-3">Terms of use</h1>
            </div>

            <div class="col-sm-6">

              <nav aria-label="breadcrumb">
                <ol class="breadcrumb float-sm-end">

                  <li class="breadcrumb-item">
                    <a href="./index.php">Home</a>
                  </li>

                  <li class="breadcrumb-item">
                    <a href="./term-to-use.php">Terms of use</a>
                  </li>

                  <li class="breadcrumb-item active"
                      aria-current="page">
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

          <!--begin::Edit Card-->
          <div class="card term-edit-card">

            <!--begin::Card Header-->
            <div class="card-header term-card-header">

              <div class="term-edit-title">
                <i class="fa-solid fa-pen-to-square"
                   aria-hidden="true"></i>
                <span>Edit</span>
              </div>

            </div>
            <!--end::Card Header-->


            <!--begin::Card Body-->
            <div class="card-body">
                
                <?php if ($saveError !== ''): ?>

                <div class="alert alert-danger"
                    role="alert">

                    <i class="fa-solid fa-circle-xmark me-2"></i>

                    <?= htmlspecialchars($saveError, ENT_QUOTES, 'UTF-8'); ?>

                </div>

                <?php endif; ?>

              <form id="terms-form"
                method="post"
                action="<?= htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'); ?>">

                <!--begin::Description-->
                <div class="term-form-group">

                  <label for="terms-editor"
                         class="form-label term-description-label">
                    Description
                  </label>


                  <!--begin::Editor-->
                  <div class="custom-editor">

                    <!--begin::Toolbar-->
                    <div class="editor-toolbar"
                         role="toolbar"
                         aria-label="Text editor toolbar">

                      <div class="toolbar-group">

                        <button type="button"
                                class="toolbar-menu"
                                data-command="formatBlock"
                                data-value="p">
                          File
                          <i class="fa-solid fa-caret-down"></i>
                        </button>

                        <button type="button"
                                class="toolbar-menu"
                                data-command="undo">
                          Edit
                          <i class="fa-solid fa-caret-down"></i>
                        </button>

                        <button type="button"
                                class="toolbar-menu"
                                data-command="insertText">
                          Insert
                          <i class="fa-solid fa-caret-down"></i>
                        </button>

                        <button type="button"
                                class="toolbar-menu"
                                data-command="formatBlock"
                                data-value="p">
                          View
                          <i class="fa-solid fa-caret-down"></i>
                        </button>

                        <button type="button"
                                class="toolbar-menu"
                                data-command="formatBlock"
                                data-value="p">
                          Format
                          <i class="fa-solid fa-caret-down"></i>
                        </button>

                        <button type="button"
                                class="toolbar-menu"
                                data-command="insertUnorderedList">
                          Table
                          <i class="fa-solid fa-caret-down"></i>
                        </button>

                        <button type="button"
                                class="toolbar-menu"
                                data-command="formatBlock"
                                data-value="p">
                          Tools
                          <i class="fa-solid fa-caret-down"></i>
                        </button>

                      </div>


                      <div class="toolbar-row">

                        <div class="toolbar-group">

                          <button type="button"
                                  class="toolbar-btn"
                                  data-command="undo"
                                  title="Undo">
                            <i class="fa-solid fa-rotate-left"></i>
                          </button>

                          <button type="button"
                                  class="toolbar-btn"
                                  data-command="redo"
                                  title="Redo">
                            <i class="fa-solid fa-rotate-right"></i>
                          </button>

                        </div>


                        <div class="toolbar-divider"></div>


                        <div class="toolbar-group">

                          <button type="button"
                                  class="toolbar-btn"
                                  data-command="bold"
                                  title="Bold">
                            <i class="fa-solid fa-bold"></i>
                          </button>

                          <button type="button"
                                  class="toolbar-btn"
                                  data-command="italic"
                                  title="Italic">
                            <i class="fa-solid fa-italic"></i>
                          </button>

                          <button type="button"
                                  class="toolbar-btn"
                                  data-command="underline"
                                  title="Underline">
                            <i class="fa-solid fa-underline"></i>
                          </button>

                        </div>


                        <div class="toolbar-divider"></div>


                        <div class="toolbar-group">

                          <button type="button"
                                  class="toolbar-btn"
                                  data-command="justifyLeft"
                                  title="Align left">
                            <i class="fa-solid fa-align-left"></i>
                          </button>

                          <button type="button"
                                  class="toolbar-btn"
                                  data-command="justifyCenter"
                                  title="Align center">
                            <i class="fa-solid fa-align-center"></i>
                          </button>

                          <button type="button"
                                  class="toolbar-btn"
                                  data-command="justifyRight"
                                  title="Align right">
                            <i class="fa-solid fa-align-right"></i>
                          </button>

                          <button type="button"
                                  class="toolbar-btn"
                                  data-command="justifyFull"
                                  title="Justify">
                            <i class="fa-solid fa-align-justify"></i>
                          </button>

                        </div>


                        <div class="toolbar-divider"></div>


                        <div class="toolbar-group">

                          <button type="button"
                                  class="toolbar-btn"
                                  data-command="insertUnorderedList"
                                  title="Bullet list">
                            <i class="fa-solid fa-list-ul"></i>
                          </button>

                          <button type="button"
                                  class="toolbar-btn"
                                  data-command="insertOrderedList"
                                  title="Numbered list">
                            <i class="fa-solid fa-list-ol"></i>
                          </button>

                          <button type="button"
                                  class="toolbar-btn"
                                  data-command="outdent"
                                  title="Decrease indent">
                            <i class="fa-solid fa-outdent"></i>
                          </button>

                          <button type="button"
                                  class="toolbar-btn"
                                  data-command="indent"
                                  title="Increase indent">
                            <i class="fa-solid fa-indent"></i>
                          </button>

                        </div>


                        <div class="toolbar-divider"></div>


                        <div class="toolbar-group">

                          <button type="button"
                                  class="toolbar-btn"
                                  id="format-heading"
                                  title="Format">
                            <i class="fa-solid fa-heading"></i>
                          </button>

                          <button type="button"
                                  class="toolbar-btn"
                                  id="insert-link"
                                  title="Insert link">
                            <i class="fa-solid fa-link"></i>
                          </button>

                          <button type="button"
                                  class="toolbar-btn"
                                  id="remove-link"
                                  title="Remove link">
                            <i class="fa-solid fa-link-slash"></i>
                          </button>

                          <button type="button"
                                  class="toolbar-btn"
                                  id="insert-image"
                                  title="Insert image">
                            <i class="fa-regular fa-image"></i>
                          </button>

                          <button type="button"
                                  class="toolbar-btn"
                                  id="view-source"
                                  title="View source code">
                            <i class="fa-solid fa-code"></i>
                          </button>

                        </div>

                      </div>

                    </div>
                    <!--end::Toolbar-->


                    
                    <!--begin::Editor Content-->
                    <div id="terms-editor"
                        class="editor-content"
                        contenteditable="true"
                        role="textbox"
                        aria-multiline="true"
                        spellcheck="true">

                    <?php if ($savedTerms !== null && $savedTerms !== false): ?>

                        <?= $savedTerms ?>

                    <?php else: ?>

                        <h2>Brother Learning Management System</h2>

                        <p>
                            <strong>
                            IMPORTANT - READ CAREFULLY: YOUR USE OF THE BROTHER INTERNATIONAL SINGAPORE REMOTE ACCESS SERVICES ("SERVICES") IS BASED UPON YOUR COMPLIANCE WITH ACCEPTANCE OF THESE TERMS OF USE.
                            </strong>
                        </p>

                        <h3>1. SERVICES</h3>

                        <p>
                            Brother provides the service of online learning in assisting you to repair/service your Brother product (“Services”) in accordance with the terms and conditions as stipulated hereunder and. Brother may, at its sole discretion, modify, add or remove any feature of the Services from time to time without prior notice. Brother maintains reasonable technical safeguards to protect the security of your data in the course of providing the Services. However, Brother does not warrant that your use of the Services is risk-free. Brother does not warrant the security and/or confidentiality of your data against any interception or access and will not be responsible for any theft, illegal activity or other unauthorized acts resulting in damage to you and/or your computer, data or other property as a result of your use of the Services.
                        </p>


                        <h3>2. CUSTOMER RESPONSIBILITY</h3>

                        <p>
                            You understand and agree that it is your responsibility to back up the data, software, information or other files stored on your computer disk and/or drives to prevent loss or corruption of information or data. As a condition for the use of the Services, you acknowledge that you are responsible for and have at all times during the provision of the Services installed all necessary virus protection software on your PC to avoid any loss/corruption of data, computer files and hard drive as a result of spyware or any computer viruses that may result in the deletion/corruption of data.
                        </p>


                        <h3>3. DISCLAIMER</h3>

                        <p>
                            You expressly agree and understand that the use of the Services is at your sole risk. Brother does not make any warranty, express or implied, including without limitation any implied warranty, fitness for a particular purpose, regarding the actions or omissions of third parties and services provided by third parties or claims that the Services do not infringe the rights of third parties, relating to the use or performance of the Services or related technology. Brother shall not be liable for any injury or damage to you or any persons using the Services, including, but not limited to, personal injury or property damage, loss of profit, loss of data, loss of use or other special, incidental or consequential damages, arising out of the use or performance of the Services.
                        </p>


                        <h3>4. RELEASE OF LIABILITY</h3>

                        <p>
                            To the fullest extent permitted by applicable law, you hereby release Brother from any and all liability arising from or related to the use of the Services and related technology.
                        </p>


                        <h3>5. INDEMNIFICATION</h3>

                        <p>
                            You hereby agree to defend, indemnify and hold Brother and its staff harmless from and against any and all liabilities, claims and costs incurred in connection with any demand, claims, action, suit or loss arising, directly or indirectly, as a result of any breach by you of these Terms and Conditions or your use of the Services.
                        </p>


                        <h3>6. PROPRIETARY RIGHTS</h3>

                        <p>
                            Brother retains ownership of all proprietary rights in and to the Services and the use thereof including without limitation the materials located on and linked to this Web Site, including without limitation text, data, documents, diagrams. trademarks and logos associated or displayed with the Services (“Contents”). All rights, title and interest in and to the Contents are owned and controlled by Brother.
                        </p>


                        <h3>7. CONTROLLING LAW</h3>

                        <p>
                            These terms of use shall be governed and construed in accordance with laws of the Republic of Singapore and each party agrees to submit to the exclusive jurisdiction of the courts of Singapore as regards any claim or matter arising under this Agreement. Nothing in this Terms and Conditions shall be construed to create any duty to, standard of care with respect to, or any liability to any person who is not a party to this Terms and Conditions. Without limiting the generality of the foregoing, a party who is not a party to this Terms and Conditions shall have no right under the Contracts (Rights of Third Parties) Act Cap 53B to enforce any provisions of this Terms and Conditions.
                        </p>

                    <?php endif; ?>

                    </div>
                    <!--end::Editor Content-->


                    <!--begin::Source Code-->
                    <textarea id="source-editor"
                              class="source-editor"
                              aria-label="HTML source code"></textarea>
                    <!--end::Source Code-->


                    <!--begin::Status Bar-->
                    <div class="editor-statusbar">

                      <div class="editor-path">
                        <span>div</span>
                      </div>

                      <div class="editor-wordcount">
                        Words: <span id="word-count">0</span>
                      </div>

                    </div>
                    <!--end::Status Bar-->

                  </div>
                  <!--end::Editor-->


                  <!--Hidden Input-->
                  <textarea name="terms_detail"
                            id="terms_detail"
                            hidden></textarea>

                </div>
                <!--end::Description-->


                <!--begin::Save-->
                <div class="term-save-wrapper">

                  <button type="submit"
                          class="btn btn-primary term-save-btn">

                    <i class="fa-solid fa-check me-2"
                       aria-hidden="true"></i>

                    Save

                  </button>

                </div>
                <!--end::Save-->

              </form>

            </div>
            <!--end::Card Body-->

          </div>
          <!--end::Edit Card-->

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


  <!--begin::Editor Script-->
  <script>

    document.addEventListener('DOMContentLoaded', function () {

      const editor = document.getElementById('terms-editor');
      const sourceEditor = document.getElementById('source-editor');
      const hiddenInput = document.getElementById('terms_detail');
      const wordCount = document.getElementById('word-count');
      const form = document.getElementById('terms-form');

      let sourceMode = false;


      // Update word count
      function updateWordCount() {

        const text = editor.innerText.trim();

        const words = text
          ? text.split(/\s+/).filter(Boolean).length
          : 0;

        wordCount.textContent = words;

      }


      // Execute formatting command
      function executeCommand(command, value = null) {

        if (sourceMode) return;

        editor.focus();

        document.execCommand(command, false, value);

        updateWordCount();

      }


      // Toolbar buttons
      document.querySelectorAll('[data-command]').forEach(function (button) {

        button.addEventListener('click', function () {

          const command = button.dataset.command;
          const value = button.dataset.value || null;

          executeCommand(command, value);

        });

      });


      // Heading format
      document.getElementById('format-heading').addEventListener('click', function () {

        if (sourceMode) return;

        editor.focus();

        document.execCommand('formatBlock', false, 'h3');

        updateWordCount();

      });


      // Insert link
      document.getElementById('insert-link').addEventListener('click', function () {

        if (sourceMode) return;

        editor.focus();

        const url = window.prompt('Enter URL:');

        if (!url) return;

        document.execCommand('createLink', false, url);

      });


      // Remove link
      document.getElementById('remove-link').addEventListener('click', function () {

        executeCommand('unlink');

      });


      // Insert image from URL
      document.getElementById('insert-image').addEventListener('click', function () {

        if (sourceMode) return;

        editor.focus();

        const imageUrl = window.prompt('Enter image URL:');

        if (!imageUrl) return;

        document.execCommand('insertImage', false, imageUrl);

      });


      // View source code
      document.getElementById('view-source').addEventListener('click', function () {

        if (!sourceMode) {

          sourceEditor.value = editor.innerHTML;

          editor.style.display = 'none';
          sourceEditor.style.display = 'block';

          sourceMode = true;

        } else {

          editor.innerHTML = sourceEditor.value;

          sourceEditor.style.display = 'none';
          editor.style.display = 'block';

          sourceMode = false;

          updateWordCount();

        }

      });


      // Update editor when typing
      editor.addEventListener('input', function () {

        updateWordCount();

      });


      // Form submit
      form.addEventListener('submit', function () {

        if (sourceMode) {

          editor.innerHTML = sourceEditor.value;

        }

        hiddenInput.value = editor.innerHTML;

      });


      // Initial count
      updateWordCount();

    });

  </script>
  <!--end::Editor Script-->

</body>
<!--end::Body-->

</html>