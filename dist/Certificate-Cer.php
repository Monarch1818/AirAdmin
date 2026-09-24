<!doctype html>
<html lang="en">

 <head>
    <title>AdminLTE 4 | Certificate Manage</title>
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
                <h4 class="mb-0 fw-semibold text-dark">Certificate Manage</h4>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end mb-0 small">
                  <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Certificate Manage</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--end::App Content Header-->

        <!--begin::App Content-->
        <div class="app-content">
          <div class="container-fluid">

            <!-- Card: Certificate Manage Table -->
            <div class="card shadow-sm border-0 rounded-3 bg-white mb-4">
              <div class="card-header bg-white py-3 border-bottom">
                <h5 class="card-title m-0 fw-semibold fs-6 text-dark d-flex align-items-center gap-2">
                  <i class="bi bi-list-task text-primary"></i> Certificate Manage
                </h5>
              </div>

              <div class="card-body p-3">
                <!-- Top Toolbar: ปุ่ม Create Certificate และ ตัวเลือก Showing -->
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                  <button type="button" class="btn btn-primary px-3 py-1 fw-semibold d-inline-flex align-items-center gap-1 shadow-sm">
                    <i class="bi bi-plus-circle-fill"></i> Create Certificate
                  </button>

                  <div class="d-flex align-items-center gap-2">
                    <span class="small fw-semibold text-muted">Showing :</span>
                    <select id="pagesize-select" class="form-select form-select-sm bg-light border-light-subtle" style="width: auto;">
                      <option value="10" selected>Default (10)</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                    </select>
                  </div>
                </div>

                <!-- Element สำหรับตาราง Tabulator -->
                <div id="certificate-manage-table"></div>

                <!-- ปุ่ม Delete All ด้านล่าง -->
                <div class="mt-3">
                  <button id="btn-delete-all" class="btn btn-primary px-3 py-1 fw-semibold d-inline-flex align-items-center gap-1 shadow-sm">
                    <i class="bi bi-dash-circle-fill"></i> Delete All
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
      #certificate-manage-table {
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        overflow: hidden;
      }

      #certificate-manage-table .tabulator-header {
        background-color: #0091ff !important;
        border-bottom: none !important;
        color: #ffffff !important;
        font-weight: 500;
      }

      #certificate-manage-table .tabulator-col {
        background-color: #0091ff !important;
        border-right: 1px solid rgba(255, 255, 255, 0.25) !important;
      }

      #certificate-manage-table .tabulator-col-title {
        color: #ffffff !important;
      }

      #certificate-manage-table .tabulator-header-filter input {
        border: 1px solid #cbd5e1;
        border-radius: 4px;
        padding: 2px 6px;
        font-size: 0.85rem;
      }

      #certificate-manage-table .tabulator-row {
        border-bottom: 1px solid #edf2f7;
      }

      #certificate-manage-table .tabulator-row:hover {
        background-color: #f8fafc !important;
      }
    </style>

    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const data = [
          {
            id: 1,
            name: 'for leading a successful marketing campaign that increased sales by 40% in Q2',
            created: '29 Mar 2023 09:48',
            course_name: '',
            status: 'Enable'
          },
          {
            id: 2,
            name: 'Basic Service Personnel Access Course',
            created: '29 Mar 2023 09:38',
            course_name: '',
            status: 'Disable'
          },
          {
            id: 3,
            name: 'Basic Service Personnel Access Course',
            created: '29 Mar 2023 08:46',
            course_name: '',
            status: 'Enable'
          },
          {
            id: 4,
            name: 'Template 2',
            created: '29 Jan 2023 11:35',
            course_name: '',
            status: 'Disable'
          },
          {
            id: 5,
            name: 'Brother Certificate Template 1',
            created: '03 Jan 2023 23:17',
            course_name: '1.<br>2.',
            status: 'Disable'
          }
        ];

        const table = new Tabulator('#certificate-manage-table', {
          data: data,
          layout: 'fitColumns',
            pagination: false,
          columns: [
            { 
              formatter: 'rowSelection', 
              titleFormatter: 'rowSelection', 
              hozAlign: 'center', 
              headerHozAlign: 'center', 
              width: 50, 
              headerSort: false 
            },
            { 
              title: 'Certificate Name', 
              field: 'name', 
              headerFilter: 'input', 
              headerHozAlign: 'center', 
              hozAlign: 'left', 
              minWidth: 260 
            },
            { 
              title: 'Create Date', 
              field: 'created', 
              headerFilter: 'input', 
              headerHozAlign: 'center', 
              hozAlign: 'left', 
              width: 170 
            },
            { 
              title: 'Select Course', 
              field: 'select_course', 
              headerHozAlign: 'center', 
              hozAlign: 'center', 
              width: 130,
              formatter: () => `<button class="btn btn-primary btn-sm px-2 py-1 fw-semibold shadow-none">Select<br>Course</button>` 
            },
            { 
              title: 'Course Name', 
              field: 'course_name', 
              formatter: 'html', 
              headerHozAlign: 'center', 
              hozAlign: 'left', 
              minWidth: 160 
            },
            { 
              title: 'Status', 
              field: 'status', 
              headerHozAlign: 'center', 
              hozAlign: 'center', 
              width: 110,
              formatter: (cell) => {
                const val = cell.getValue();
                return `<button class="btn btn-sm text-white fw-semibold px-3 py-1" style="background-color: #b93838; border-radius: 4px;">${val}</button>`;
              }
            },
            { 
              title: 'Certificate', 
              field: 'view', 
              headerHozAlign: 'center', 
              hozAlign: 'center', 
              width: 100,
              formatter: () => `<button class="btn btn-primary btn-sm px-3 py-1 fw-semibold shadow-none">View</button>` 
            },
            { 
              title: 'Manage', 
              headerHozAlign: 'center', 
              hozAlign: 'center', 
              width: 120,
              headerSort: false,
              formatter: () => `
                <div class="d-inline-flex gap-1">
                  <button class="btn btn-sm btn-outline-secondary px-1 py-0"><i class="bi bi-eye"></i></button>
                  <button class="btn btn-sm btn-outline-secondary px-1 py-0"><i class="bi bi-pencil"></i></button>
                  <button class="btn btn-sm btn-outline-secondary px-1 py-0"><i class="bi bi-x-lg"></i></button>
                </div>
              `
            }
          ]
        });

        const pageSizeSelect = document.getElementById('pagesize-select');
        if (pageSizeSelect) {
          pageSizeSelect.addEventListener('change', (e) => {
            table.setPageSize(parseInt(e.target.value));
          });
        }

        const deleteBtn = document.getElementById('btn-delete-all');
        if (deleteBtn) {
          deleteBtn.addEventListener('click', () => {
            const selectedRows = table.getSelectedRows();
            if (selectedRows.length === 0) {
              alert('กรุณาเลือกรายการที่ต้องการลบ');
            } else {
              if (confirm(`คุณต้องการลบ ${selectedRows.length} รายการที่เลือกหรือไม่?`)) {
                selectedRows.forEach(row => row.delete());
              }
            }
          });
        }
      });
    </script>

  </body>
  <!--end::Body-->
</html>