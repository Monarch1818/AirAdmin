<!doctype html>
<html lang="en">

 <head>
    <title>AdminLTE 4 | Report Passcours</title>
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
                <h4 class="mb-0 fw-semibold text-dark">Report Passcours</h4>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end mb-0 small">
                  <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Report Passcours</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--end::App Content Header-->

        <!--begin::App Content-->
        <div class="app-content">
          <div class="container-fluid">

            <!-- Card: Report Passcours Table -->
            <div class="card shadow-sm border-0 rounded-3 bg-white mb-4">
              <div class="card-header bg-white py-3 border-bottom">
                <h5 class="card-title m-0 fw-semibold fs-6 text-dark d-flex align-items-center gap-2">
                  <i class="bi bi-list-task text-primary"></i> Report Passcours
                </h5>
              </div>

              <div class="card-body p-3">
                <!-- Top Toolbar: Showing selector -->
                <div class="d-flex justify-content-end align-items-center gap-2 mb-3">
                  <span class="small fw-semibold text-muted">Showing:</span>
                  <select id="pagesize-select" class="form-select form-select-sm bg-light border-light-subtle" style="width: auto;">
                    <option value="10" selected>Default (10)</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select>
                </div>

                <!-- Element สำหรับตาราง Tabulator -->
                <div id="passcours-table"></div>
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
      #passcours-table {
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        overflow: hidden;
      }

      #passcours-table .tabulator-header {
        background-color: #0091ff !important;
        border-bottom: none !important;
        color: #ffffff !important;
        font-weight: 500;
      }

      #passcours-table .tabulator-col {
        background-color: #0091ff !important;
        border-right: 1px solid rgba(255, 255, 255, 0.25) !important;
      }

      #passcours-table .tabulator-col-title {
        color: #ffffff !important;
      }

      #passcours-table .tabulator-header-filter input {
        border: 1px solid #cbd5e1;
        border-radius: 4px;
        padding: 2px 6px;
        font-size: 0.85rem;
      }

      #passcours-table .tabulator-row {
        border-bottom: 1px solid #edf2f7;
      }

      #passcours-table .tabulator-row:hover {
        background-color: #f8fafc !important;
      }
    </style>

    <script>
      const generateRandomCode = () => {
        const datePart = Math.floor(230000 + Math.random() * 9999);
        const letter = ['A', 'B'][Math.floor(Math.random() * 2)];
        const numPart = String(Math.floor(1 + Math.random() * 99999)).padStart(5, '0');
        return `SG-${datePart}-${letter}${numPart}`;
      };

      document.addEventListener('DOMContentLoaded', () => {
        const rawData = [
          { name: '', course: 'Basic Service Personnel access', pass_date: '14 Apr 2023' },
          { name: 'Nguyen Viet Linh', course: 'Basic Service Personnel access', pass_date: '30 Mar 2023' },
          { name: 'Neil Berunio', course: 'Basic Service Personnel access', pass_date: '28 Mar 2023' },
          { name: 'Admin Sofia1', course: 'UAT Course1', pass_date: '15 Mar 2023' },
          { name: 'Test Phongsak', course: 'UAT Course1', pass_date: '27 Feb 2023' },
          { name: '', course: 'Maintenance Function Codes', pass_date: '22 Feb 2023' },
          { name: 'Lalita Raksaitong3', course: 'UAT Brother', pass_date: '20 Feb 2023' },
          { name: 'Lalita Raksaitong3', course: 'Course recheck', pass_date: '20 Feb 2023' },
          { name: 'Test Importuser', course: 'UAT Course1', pass_date: '20 Feb 2023' },
          { name: 'Lalita Raksaitong3', course: 'UAT Course1', pass_date: '18 Feb 2023' }
        ];

        const data = rawData.map(item => ({
          ...item,
          code: generateRandomCode()
        }));

        const table = new Tabulator('#passcours-table', {
          data: data,
          layout: 'fitColumns',
          pagination: true,
          paginationSize: 10,
          columns: [
            { 
              title: 'Name', 
              field: 'name', 
              headerFilter: 'input', 
              headerHozAlign: 'left', 
              hozAlign: 'left', 
              minWidth: 200 
            },
            { 
              title: 'Course', 
              field: 'course', 
              headerFilter: 'input', 
              headerHozAlign: 'left', 
              hozAlign: 'left', 
              minWidth: 220 
            },
            { 
              title: 'Code', 
              field: 'code', 
              headerHozAlign: 'center', 
              hozAlign: 'center', 
              width: 170 
            },
            { 
              title: 'Pass Date', 
              field: 'pass_date', 
              headerFilter: 'input', 
              headerHozAlign: 'center', 
              hozAlign: 'center', 
              width: 140 
            },
            { 
              title: 'Certificate', 
              headerHozAlign: 'center', 
              hozAlign: 'center', 
              width: 110,
              headerSort: false,
              formatter: () => `<button class="btn btn-primary btn-sm px-3 py-1 fw-semibold shadow-none">Print</button>` 
            }
          ]
        });

        const pageSizeSelect = document.getElementById('pagesize-select');
        if (pageSizeSelect) {
          pageSizeSelect.addEventListener('change', (e) => {
            table.setPageSize(parseInt(e.target.value));
          });
        }
      });
    </script>

  </body>
  <!--end::Body-->
</html>