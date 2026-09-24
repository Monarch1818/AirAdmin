<!doctype html>
<html lang="en">

 <head>
    <title>AdminLTE 4 | Data Tables</title>
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
                <h4 class="mb-0 fw-semibold text-dark">Academic Result report</h4>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end mb-0 small">
                  <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Academic Result report</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--end::App Content Header-->

        <!--begin::App Content-->
        <div class="app-content">
          <div class="container-fluid">

            <!-- ส่วน Advanced Search ด้านบน -->
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
                    <div class="col-12 col-md-6 col-lg-4">
                      <label class="form-label small fw-semibold text-muted">Organization</label>
                      <select class="form-select bg-light border-light-subtle">
                        <option value="" selected>--- Select Organization ---</option>
                        <option value="1">Organization 1</option>
                      </select>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                      <label class="form-label small fw-semibold text-muted">Company</label>
                      <select class="form-select bg-light border-light-subtle">
                        <option value="" selected>--- Select Company ---</option>
                        <option value="1">Company 1</option>
                      </select>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                      <label class="form-label small fw-semibold text-muted">Department</label>
                      <select class="form-select bg-light border-light-subtle">
                        <option value="" selected>--- Select Department ---</option>
                        <option value="1">Department 1</option>
                      </select>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                      <label class="form-label small fw-semibold text-muted">Position</label>
                      <select class="form-select bg-light border-light-subtle">
                        <option value="" selected>--- Select Position ---</option>
                        <option value="1">Position 1</option>
                      </select>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                      <label class="form-label small fw-semibold text-muted">Course</label>
                      <select class="form-select bg-light border-light-subtle">
                        <option value="" selected>Select Course</option>
                        <option value="1">VR 5. Assembly of Covers</option>
                      </select>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                      <label class="form-label small fw-semibold text-muted">Start Date End Date</label>
                      <div class="input-group">
                        <input type="date" class="form-control bg-light border-light-subtle">
                        <span class="input-group-text bg-light border-light-subtle text-muted">-</span>
                        <input type="date" class="form-control bg-light border-light-subtle">
                      </div>
                    </div>
                  </div>

                  <div class="mt-4 pt-2 border-top d-flex gap-2">
                    <button type="submit" class="btn btn-primary px-4 shadow-sm">
                      <i class="bi bi-search me-1"></i> Search
                    </button>
                   
                  </div>
                </form>
              </div>
            </div>

            <!-- ส่วนตาราง Academic Result report -->
            <div class="card shadow-sm border-0 rounded-3 bg-white mb-4">
              <!-- แถบหัวข้อแสดงค้างไว้ตลอด -->
              <div class="card-header bg-white py-3 border-0">
                <h5 class="card-title m-0 fw-semibold fs-6 text-dark d-flex align-items-center gap-2">
                  <i class="bi bi-list-task text-primary"></i> Academic Result report
                </h5>
              </div>

              <!-- ซ่อนเฉพาะส่วนตารางและปุ่ม Export (d-none) ไว้ก่อนกดค้นหา -->
              <div id="report-content" class="card-body p-3 pt-0 border-top d-none">
                <!-- ตาราง Tabulator -->
                <div id="academic-result-table"></div>

                <!-- ปุ่ม Export ด้านล่างตาราง -->
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

      /* สไตล์เส้นตารางให้ดูสะอาดตา */
      #academic-result-table {
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        overflow: hidden;
      }

      #academic-result-table .tabulator-header {
        background-color: #f8fafc !important;
        border-bottom: 2px solid #e2e8f0 !important;
        color: #475569 !important;
        font-weight: 600;
      }

      #academic-result-table .tabulator-row {
        border-bottom: 1px solid #edf2f7;
      }

      #academic-result-table .tabulator-row:hover {
        background-color: #f8fafc !important;
      }
    </style>

    <script>
      document.addEventListener('DOMContentLoaded', () => {
        let table = null;
        const reportContent = document.getElementById('report-content');
        const searchForm = document.getElementById('advanced-search-form');
        const resetBtn = document.getElementById('btn-reset');

        // ข้อมูลตัวอย่างรายงาน
        const data = [
          {
            course: 'VR 5. Assembly of Covers',
            lesson: 'VR 5. Assembly of Covers',
            total_learner: 0,
            passed: 0,
            failed: 0,
            passed_pct: '0.00'
          }
        ];

        // เมื่อกดปุ่ม Search
        searchForm.addEventListener('submit', (e) => {
          e.preventDefault();

          // แสดงส่วนเนื้อหาตารางและปุ่ม Export
          reportContent.classList.remove('d-none');

          // สร้างตาราง Tabulator เมื่อกดค้นหา
          if (!table) {
            table = new Tabulator('#academic-result-table', {
              data: data,
              layout: 'fitColumns',
              pagination: false,
              columns: [
                { 
                  title: 'Course', 
                  field: 'course', 
                  headerHozAlign: 'center', 
                  hozAlign: 'left' 
                },
                { 
                  title: 'Lesson', 
                  field: 'lesson', 
                  headerHozAlign: 'center', 
                  hozAlign: 'left' 
                },
                { 
                  title: 'Total Learner', 
                  field: 'total_learner', 
                  headerHozAlign: 'center', 
                  hozAlign: 'center',
                  width: 150
                },
                { 
                  title: 'Passed', 
                  field: 'passed', 
                  headerHozAlign: 'center', 
                  hozAlign: 'center',
                  width: 130
                },
                { 
                  title: 'Failed', 
                  field: 'failed', 
                  headerHozAlign: 'center', 
                  hozAlign: 'center',
                  width: 130
                },
                { 
                  title: 'Passed (%)', 
                  field: 'passed_pct', 
                  headerHozAlign: 'center', 
                  hozAlign: 'center',
                  width: 140
                }
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

        // Event สำหรับปุ่ม Export
        const exportBtn = document.getElementById('btn-export');
        if (exportBtn) {
          exportBtn.addEventListener('click', () => {
            if (table) {
              table.download('csv', 'Academic_Result_report.csv');
            }
          });
        }
      });
    </script>

  </body>
  <!--end::Body-->
</html>