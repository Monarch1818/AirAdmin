<!doctype html>
<html lang="en">

 <head>
    <title>AdminLTE 4 | Learner Exam Answer report</title>
  </head>
  
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
        <div class="app-content-header py-3">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-sm-6">
                <h4 class="mb-0 fw-semibold text-dark">Learner Exam Answer report</h4>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end mb-0 small">
                  <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Learner Exam Answer report</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--end::App Content Header-->

        <!--begin::App Content-->
        <div class="app-content">
          <div class="container-fluid">

            <!-- Card 1: Advanced Search -->
            <div class="card card-outline card-primary shadow-sm border-0 mb-4 rounded-3">
              <div class="card-header bg-white py-3 border-bottom d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 fw-semibold fs-6 text-dark d-flex align-items-center gap-2">
                  <i class="bi bi-search"></i> Advanced Search
                </h5>
                <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                  <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                  <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
              </div>
              
              <div class="card-body bg-white p-4">
                <form id="advanced-search-form">
                  <div class="row g-3">
                    <!-- Course -->
                    <div class="col-12 col-md-6">
                      <label class="form-label small fw-semibold text-muted">Course</label>
                      <select class="form-select bg-light border-light-subtle" id="search-course">
                        <option value="All" selected>All</option>
                        <option value="NV2600">NV2600 1. Disassembly of Covers</option>
                        <option value="NV880e">NV880e User Training</option>
                      </select>
                    </div>

                    <!-- Full name -->
                    <div class="col-12 col-md-6">
                      <label class="form-label small fw-semibold text-muted">Full name</label>
                      <input type="text" class="form-control bg-light border-light-subtle" id="search-fullname" placeholder="Full name">
                    </div>
                  </div>

                  <!-- Buttons -->
                  <div class="mt-4 pt-2 border-top d-flex gap-2">
                    <button type="submit" class="btn btn-primary px-4 shadow-sm">
                      <i class="bi bi-search me-1"></i> Search
                    </button>
                  </div>
                </form>
              </div>
            </div>

            <!-- Card 2: Learner Exam Answer report (โชว์ไว้ตลอด ไม่ซ่อน) -->
            <div class="card shadow-sm border-0 rounded-3 bg-white mb-4">
              <div class="card-header bg-white py-3 border-bottom">
                <h5 class="card-title m-0 fw-semibold fs-6 text-dark d-flex align-items-center gap-2">
                  <i class="bi bi-list-task text-primary"></i> Learner Exam Answer report
                </h5>
              </div>

              <div class="card-body p-4">
                <!-- ข้อความแจ้งเตือนสีเขียวเริ่มต้นตามภาพต้นฉบับ -->
                <div id="notice-msg" class="py-2">
                  <h4 class="text-success fw-bold m-0" style="color: #2b7a4b !important;">
                    Please enter full name then search
                  </h4>
                </div>

                <!-- ส่วนแสดงผลตารางหลังจากกดค้นหา (เริ่มต้นซ่อนไว้) -->
                <div id="table-wrapper" class="d-none">
                  <div id="exam-answer-table"></div>

                  <div class="mt-3">
                    <button id="btn-export" class="btn btn-primary px-3 py-1 fw-semibold d-inline-flex align-items-center gap-1 shadow-sm">
                      <i class="bi bi-file-earmark-fill"></i> Export
                    </button>
                  </div>
                </div>
              </div>
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

    <style>
      .form-control:focus,
      .form-select:focus {
        border-color: #0d6efd !important;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15) !important;
      }

      /* ตกแต่งตาราง */
      #exam-answer-table {
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        overflow: hidden;
      }

      #exam-answer-table .tabulator-header {
        background-color: #0091ff !important;
        border-bottom: none !important;
        color: #ffffff !important;
        font-weight: 500;
      }

      #exam-answer-table .tabulator-col {
        background-color: #0091ff !important;
        border-right: 1px solid rgba(255, 255, 255, 0.25) !important;
      }

      #exam-answer-table .tabulator-col-title {
        color: #ffffff !important;
      }

      #exam-answer-table .tabulator-row {
        border-bottom: 1px solid #edf2f7;
      }

      #exam-answer-table .tabulator-row:hover {
        background-color: #f8fafc !important;
      }
    </style>

    <script>
      document.addEventListener('DOMContentLoaded', () => {
        let table = null;
        const searchForm = document.getElementById('advanced-search-form');
        const fullnameInput = document.getElementById('search-fullname');
        const noticeMsg = document.getElementById('notice-msg');
        const tableWrapper = document.getElementById('table-wrapper');
        const resetBtn = document.getElementById('btn-reset');

        searchForm.addEventListener('submit', (e) => {
          e.preventDefault();

          const nameVal = fullnameInput.value.trim();

          // ถ้าไม่ได้กรอกชื่อ ให้แสดงข้อความแจ้งเตือนตามเดิม
          if (!nameVal) {
            noticeMsg.classList.remove('d-none');
            tableWrapper.classList.add('d-none');
            return;
          }

          // สลับจากการแสดงข้อความแจ้งเตือนมาแสดงตาราง
          noticeMsg.classList.add('d-none');
          tableWrapper.classList.remove('d-none');

          if (!table) {
            table = new Tabulator('#exam-answer-table', {
              data: [], // ใส่ข้อมูลคำตอบข้อสอบ
              layout: 'fitColumns',
              placeholder: 'No Exam Answer Available',
              pagination: false,
              columns: [
                { title: 'No.', field: 'no', width: 70, headerHozAlign: 'center', hozAlign: 'center', formatter: 'rownum' },
                { title: 'Question', field: 'question', headerHozAlign: 'center', hozAlign: 'left', minWidth: 200 },
                { title: 'User Answer', field: 'user_answer', headerHozAlign: 'center', hozAlign: 'left', minWidth: 150 },
                { title: 'Correct Answer', field: 'correct_answer', headerHozAlign: 'center', hozAlign: 'left', minWidth: 150 },
                { 
                  title: 'Result', 
                  field: 'result', 
                  headerHozAlign: 'center', 
                  hozAlign: 'center', 
                  width: 110,
                  formatter: (cell) => {
                    const val = cell.getValue();
                    const isCorrect = val === 'Correct' || val === 'Pass';
                    return `<span class="badge text-bg-${isCorrect ? 'success' : 'danger'}">${val || '-'}</span>`;
                  }
                }
              ]
            });
          } else {
            table.redraw(true);
          }
        });

        // กด Reset ให้กลับสู่สถานะเริ่มต้น
        if (resetBtn) {
          resetBtn.addEventListener('click', () => {
            noticeMsg.classList.remove('d-none');
            tableWrapper.classList.add('d-none');
          });
        }

        // ปุ่ม Export
        const exportBtn = document.getElementById('btn-export');
        if (exportBtn) {
          exportBtn.addEventListener('click', () => {
            if (table) {
              table.download('csv', 'Learner_Exam_Answer_report.csv');
            }
          });
        }
      });
    </script>

  </body>
  <!--end::Body-->
</html>