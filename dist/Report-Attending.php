<!doctype html>
<html lang="en">

 <head>
    <title>AdminLTE 4 | Attending Class report</title>
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
                <h4 class="mb-0 fw-semibold text-dark">Attending Class report</h4>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end mb-0 small">
                  <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Attending Class report</li>
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
                    <!-- Full name -->
                    <div class="col-12 col-md-6 col-lg-3">
                      <label class="form-label small fw-semibold text-muted">Full name</label>
                      <input type="text" class="form-control bg-light border-light-subtle" placeholder="Search by name - surname">
                    </div>

                    <!-- Attending status -->
                    <div class="col-12 col-md-6 col-lg-3">
                      <label class="form-label small fw-semibold text-muted">Attending status</label>
                      <select class="form-select bg-light border-light-subtle">
                        <option value="" selected>Select student status</option>
                        <option value="Attended">Attended</option>
                        <option value="Absent">Absent</option>
                        <option value="Late">Late</option>
                      </select>
                    </div>

                    <!-- Class room -->
                    <div class="col-12 col-md-6 col-lg-3">
                      <label class="form-label small fw-semibold text-muted">Class room</label>
                      <select class="form-select bg-light border-light-subtle">
                        <option value="" selected>--- Select Organization ---</option>
                        <option value="1">Room 101</option>
                        <option value="2">Room 102</option>
                      </select>
                    </div>

                    <!-- Start Date End Date -->
                    <div class="col-12 col-md-6 col-lg-3">
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

            <!-- Card 2: Attending Class report -->
            <div class="card shadow-sm border-0 rounded-3 bg-white mb-4">
              <!-- แถบหัวข้อแสดงค้างไว้ตลอด -->
              <div class="card-header bg-white py-3 border-0">
                <h5 class="card-title m-0 fw-semibold fs-6 text-dark d-flex align-items-center gap-2">
                  <i class="bi bi-list-task text-primary"></i> Attending Class report
                </h5>
              </div>

              <!-- ซ่อนส่วนตารางและปุ่ม Export (d-none) ไว้ก่อนกดค้นหา -->
              <div id="report-content" class="card-body p-3 pt-0 border-top d-none">
                <!-- ตาราง Tabulator สไตล์หัวสีฟ้าตามภาพต้นฉบับ -->
                <div id="attending-class-table"></div>

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
      #attending-class-table {
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        overflow: hidden;
      }

      #attending-class-table .tabulator-header {
        background-color: #0091ff !important;
        border-bottom: none !important;
        color: #ffffff !important;
        font-weight: 500;
      }

      #attending-class-table .tabulator-col {
        background-color: #0091ff !important;
        border-right: 1px solid rgba(255, 255, 255, 0.25) !important;
      }

      #attending-class-table .tabulator-col-title {
        color: #ffffff !important;
      }

      #attending-class-table .tabulator-row {
        border-bottom: 1px solid #edf2f7;
      }

      #attending-class-table .tabulator-row:hover {
        background-color: #f8fafc !important;
      }
    </style>

    <script>
      // จัดรูปแบบ Badge สถานะการเข้าเรียน
      const attendingBadge = (cell) => {
        const value = cell.getValue();
        if (!value) return '-';
        const map = { 
          'Attended': 'success', 
          'Present': 'success', 
          'Late': 'warning', 
          'Absent': 'danger' 
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
            table = new Tabulator('#attending-class-table', {
              data: [], // นำข้อมูลการเข้าเรียนมาใส่ตรงนี้
              layout: 'fitColumns',
              placeholder: 'No Data Available',
              pagination: false,
              columns: [
                { title: 'No.', field: 'no', width: 80, headerHozAlign: 'center', hozAlign: 'center', formatter: 'rownum' },
                { title: 'Full name', field: 'fullname', headerHozAlign: 'center', hozAlign: 'left', minWidth: 200 },
                { title: 'Classroom', field: 'classroom', headerHozAlign: 'center', hozAlign: 'left', minWidth: 200 },
                { 
                  title: 'Attending Status', 
                  field: 'status', 
                  headerHozAlign: 'center', 
                  hozAlign: 'center', 
                  width: 180,
                  formatter: attendingBadge 
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

        // ปุ่ม Export
        const exportBtn = document.getElementById('btn-export');
        if (exportBtn) {
          exportBtn.addEventListener('click', () => {
            if (table) {
              table.download('csv', 'Attending_Class_report.csv');
            }
          });
        }
      });
    </script>

  </body>
  <!--end::Body-->
</html>