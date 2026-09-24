<!doctype html>
<html lang="en">

 <head>
    <title>AdminLTE 4 | Learner Exam Result report</title>
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
                <h4 class="mb-0 fw-semibold text-dark">Learner Exam Result report</h4>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end mb-0 small">
                  <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Learner Exam Result report</li>
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
                    <!-- Organization -->
                    <div class="col-12 col-md-6 col-lg-4">
                      <label class="form-label small fw-semibold text-muted">Organization</label>
                      <select class="form-select bg-light border-light-subtle">
                        <option value="" selected>--- Select Organization ---</option>
                        <option value="1">Organization 1</option>
                      </select>
                    </div>

                    <!-- Company -->
                    <div class="col-12 col-md-6 col-lg-4">
                      <label class="form-label small fw-semibold text-muted">Company</label>
                      <select class="form-select bg-light border-light-subtle">
                        <option value="" selected>--- Select Company ---</option>
                        <option value="1">Company 1</option>
                      </select>
                    </div>

                    <!-- Department -->
                    <div class="col-12 col-md-6 col-lg-4">
                      <label class="form-label small fw-semibold text-muted">Department</label>
                      <select class="form-select bg-light border-light-subtle">
                        <option value="" selected>--- Select Department ---</option>
                        <option value="1">Department 1</option>
                      </select>
                    </div>

                    <!-- Position -->
                    <div class="col-12 col-md-6 col-lg-4">
                      <label class="form-label small fw-semibold text-muted">Position</label>
                      <select class="form-select bg-light border-light-subtle">
                        <option value="" selected>--- Select Position ---</option>
                        <option value="1">Position 1</option>
                      </select>
                    </div>

                    <!-- Full name -->
                    <div class="col-12 col-md-6 col-lg-4">
                      <label class="form-label small fw-semibold text-muted">Full name</label>
                      <input type="text" class="form-control bg-light border-light-subtle" placeholder="Full name">
                    </div>

                    <!-- Course -->
                    <div class="col-12 col-md-6 col-lg-4">
                      <label class="form-label small fw-semibold text-muted">Course</label>
                      <select class="form-select bg-light border-light-subtle">
                        <option value="NV880e" selected>NV880e User Training</option>
                      </select>
                    </div>

                    <!-- Start Date End Date -->
                    <div class="col-12 col-md-6 col-lg-4">
                      <label class="form-label small fw-semibold text-muted">Start Date End Date</label>
                      <div class="input-group">
                        <input type="date" class="form-control bg-light border-light-subtle" value="2026-09-24">
                        <span class="input-group-text bg-light border-light-subtle text-muted">-</span>
                        <input type="date" class="form-control bg-light border-light-subtle" value="2026-09-24">
                      </div>
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

            <!-- Card 2: Learner Exam Result report -->
            <div class="card shadow-sm border-0 rounded-3 bg-white mb-4">
              <!-- แถบหัวข้อแสดงค้างไว้ตลอด -->
              <div class="card-header bg-white py-3 border-0">
                <h5 class="card-title m-0 fw-semibold fs-6 text-dark d-flex align-items-center gap-2">
                  <i class="bi bi-list-task text-primary"></i> Learner Exam Result report
                </h5>
              </div>

              <!-- ซ่อนส่วนตารางและปุ่ม Export (d-none) ไว้ก่อนกดค้นหา -->
              <div id="report-content" class="card-body p-3 pt-0 border-top d-none">
                <!-- ตาราง Tabulator สไตล์หัวสีฟ้าตามภาพต้นฉบับ -->
                <div id="learner-exam-table"></div>

                <!-- ปุ่ม Export ด้านล่าง -->
                <div class="mt-3">
                  <button id="btn-export" class="btn btn-primary px-3 py-1 fw-semibold d-inline-flex align-items-center gap-1 shadow-sm">
                    <i class="bi bi-file-earmark-fill"></i> Export
                  </button>
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

      /* ตกแต่งหัวตารางเป็นโทนสีฟ้าสดใสตามรูปต้นฉบับ */
      #learner-exam-table {
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        overflow: hidden;
      }

      #learner-exam-table .tabulator-header {
        background-color: #0091ff !important;
        border-bottom: none !important;
        color: #ffffff !important;
        font-weight: 500;
      }

      #learner-exam-table .tabulator-col {
        background-color: #0091ff !important;
        border-right: 1px solid rgba(255, 255, 255, 0.25) !important;
      }

      #learner-exam-table .tabulator-col-title {
        color: #ffffff !important;
      }

      #learner-exam-table .tabulator-row {
        border-bottom: 1px solid #edf2f7;
      }

      #learner-exam-table .tabulator-row:hover {
        background-color: #f8fafc !important;
      }
    </style>

    <script>
      // ฟังก์ชันสำหรับจัดรูปแบบแสดงผลของผลสอบ
      const examResultBadge = (cell) => {
        const value = cell.getValue();
        if (!value) return '-';
        const map = { 
          'Pass': 'success', 
          'Passed': 'success', 
          'Fail': 'danger',
          'Failed': 'danger' 
        };
        const color = map[value] || 'secondary';
        return `<span class="badge text-bg-${color}">${value}</span>`;
      };

      document.addEventListener('DOMContentLoaded', () => {
        let table = null;
        const reportContent = document.getElementById('report-content');
        const searchForm = document.getElementById('advanced-search-form');
        const resetBtn = document.getElementById('btn-reset');

        // เมื่อกดปุ่ม Search
        searchForm.addEventListener('submit', (e) => {
          e.preventDefault();

          // แสดงส่วนตารางและปุ่ม Export
          reportContent.classList.remove('d-none');

          // Initialize Tabulator เมื่อกดค้นหา
          if (!table) {
            table = new Tabulator('#learner-exam-table', {
              data: [], // นำข้อมูลมาใส่ตรงนี้
              layout: 'fitColumns',
              placeholder: 'No Data Available',
              pagination: false,
              columns: [
                { title: 'No.', field: 'no', width: 70, headerHozAlign: 'center', hozAlign: 'center', formatter: 'rownum' },
                { title: 'Full name', field: 'fullname', headerHozAlign: 'center', hozAlign: 'left', minWidth: 140 },
                { title: 'Course', field: 'course', headerHozAlign: 'center', hozAlign: 'left', minWidth: 150 },
                { title: 'Pre-test Score', field: 'pre_score', headerHozAlign: 'center', hozAlign: 'center', width: 130 },
                { title: 'Post-test Score', field: 'post_score', headerHozAlign: 'center', hozAlign: 'center', width: 130 },
                { 
                  title: 'Post-test Result', 
                  field: 'post_result', 
                  headerHozAlign: 'center', 
                  hozAlign: 'center', 
                  width: 140,
                  formatter: examResultBadge 
                },
                { title: 'Organization', field: 'organization', headerHozAlign: 'center', hozAlign: 'left' },
                { title: 'Company', field: 'company', headerHozAlign: 'center', hozAlign: 'left' },
                { title: 'Department', field: 'department', headerHozAlign: 'center', hozAlign: 'left' },
                { title: 'Position', field: 'position', headerHozAlign: 'center', hozAlign: 'left' }
              ]
            });
          } else {
            table.redraw(true);
          }
        });

        // เมื่อกด Reset ซ่อนส่วนตารางกลับไป ให้เหลือแต่หัวข้อ
        if (resetBtn) {
          resetBtn.addEventListener('click', () => {
            reportContent.classList.add('d-none');
          });
        }

        // ปุ่ม Export
        const exportBtn = document.getElementById('btn-export');
        if (exportBtn) {
          exportBtn.addEventListener('click', () => {
            if (table) {
              table.download('csv', 'Learner_Exam_Result_report.csv');
            }
          });
        }
      });
    </script>

  </body>
  <!--end::Body-->
</html>