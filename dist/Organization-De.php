<!doctype html>
<html lang="en">

 <head>
    <title>AdminLTE 4 | Department</title>
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
                <h4 class="mb-0 fw-semibold text-dark">Department</h4>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end mb-0 small">
                  <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Department</li>
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
            <div class="card shadow-sm border-0 rounded-3 bg-white mb-4">
              <div class="card-header bg-white py-3 border-bottom d-flex align-items-center">
                <div class="d-flex align-items-center gap-2 text-dark fw-semibold fs-6">
                  <i class="bi bi-search"></i> Advanced Search
                </div>
                <div class="card-tools ms-auto">
                  <button type="button" class="btn btn-sm btn-light border-0 rounded-circle text-muted" data-bs-toggle="collapse" data-bs-target="#searchCollapse" aria-expanded="true">
                    <i class="bi bi-chevron-down"></i>
                  </button>
                </div>
              </div>
              
              <div class="collapse show" id="searchCollapse">
                <div class="card-body bg-white p-4">
                  <form id="department-search-form">
                    <div class="row g-3">
                      <div class="col-12 col-md-6 col-lg-4">
                        <label class="form-label small fw-semibold text-muted">Department Title</label>
                        <input type="text" id="filter-dept-title" class="form-control bg-light border-light-subtle">
                      </div>
                    </div>

                    <div class="mt-4 pt-2 border-top d-flex gap-2">
                      <button type="submit" class="btn btn-primary px-4 shadow-sm fw-semibold">
                        <i class="bi bi-search me-1"></i> Search
                      </button>
                     
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- Card 2: Department Table -->
            <div class="card shadow-sm border-0 rounded-3 bg-white mb-4">
              <div class="card-header bg-white py-3 border-bottom">
                <div class="d-flex align-items-center gap-2 text-dark fw-semibold fs-6">
                  <i class="bi bi-list-task text-primary"></i> Department
                </div>
              </div>

              <div class="card-body p-3">
                <!-- Toolbar เหนือตาราง -->
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                  <button type="button" class="btn btn-primary px-3 py-1 fw-semibold d-inline-flex align-items-center gap-1 shadow-sm">
                    <i class="bi bi-plus-lg"></i> Create Department
                  </button>

                  <div class="d-flex align-items-center gap-2">
                    <span class="small fw-semibold text-muted">Showing:</span>
                    <select id="pagesize-select" class="form-select form-select-sm bg-light border-light-subtle" style="width: auto;">
                      <option value="10" selected>Default (10)</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                    </select>
                  </div>
                </div>

                <!-- Element สำหรับตาราง Tabulator -->
                <div id="department-table"></div>
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

      #department-table {
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        overflow: hidden;
      }

      #department-table .tabulator-header {
        background-color: #0091ff !important;
        border-bottom: none !important;
        color: #ffffff !important;
        font-weight: 500;
      }

      #department-table .tabulator-col {
        background-color: #0091ff !important;
        border-right: 1px solid rgba(255, 255, 255, 0.25) !important;
      }

      #department-table .tabulator-col-title {
        color: #ffffff !important;
      }

      #department-table .tabulator-header-filter input {
        border: 1px solid #cbd5e1;
        border-radius: 4px;
        padding: 3px 8px;
        font-size: 0.85rem;
      }

      #department-table .tabulator-row {
        border-bottom: 1px solid #edf2f7;
      }

      #department-table .tabulator-row:hover {
        background-color: #f8fafc !important;
      }

      .action-btn-group {
        display: inline-flex;
        gap: 3px;
      }

      .action-btn {
        background-color: #ffffff;
        border: 1px solid #ced4da;
        border-radius: 3px;
        padding: 2px 7px;
        color: #6c757d;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.15s;
      }

      .action-btn:hover {
        background-color: #f8f9fa;
        color: #212529;
      }

      .action-btn.btn-del {
        color: #dc3545;
      }

      .action-btn.btn-del:hover {
        background-color: #dc3545;
        color: #ffffff;
        border-color: #dc3545;
      }
    </style>

    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const data = [
          { id: 1, title: 'Customer Service', company: 'BICS', organization: 'Brother' },
          { id: 2, title: 'Department test', company: 'BICS', organization: 'Brother' },
          { id: 3, title: 'Department test', company: 'BICS', organization: 'Brother' },
          { id: 4, title: 'Department test', company: 'BICS', organization: 'Brother' },
          { id: 5, title: 'PM', company: 'BICV', organization: 'Brother' },
          { id: 6, title: 'MIS', company: 'BICV', organization: 'Brother' },
          { id: 7, title: 'Customer Service', company: 'BICV', organization: 'Brother' },
          { id: 8, title: 'Customer Service', company: 'BICP', organization: 'Brother' }
        ];

        const table = new Tabulator('#department-table', {
          data: data,
          layout: 'fitColumns',
          pagination: false,
          columns: [
            { 
              title: 'Department Title', 
              field: 'title', 
              headerFilter: 'input', 
              headerHozAlign: 'left', 
              hozAlign: 'left', 
              minWidth: 240 
            },
            { 
              title: 'Company', 
              field: 'company', 
              headerFilter: 'input', 
              headerHozAlign: 'left', 
              hozAlign: 'left', 
              minWidth: 220 
            },
            { 
              title: 'Organization Title', 
              field: 'organization', 
              headerFilter: 'input', 
              headerHozAlign: 'left', 
              hozAlign: 'left', 
              minWidth: 220 
            },
            { 
              title: 'Action', 
              headerHozAlign: 'center', 
              hozAlign: 'center', 
              width: 140, 
              headerSort: false,
              formatter: () => `
                <div class="action-btn-group">
                  <button type="button" class="action-btn" title="View"><i class="bi bi-eye"></i></button>
                  <button type="button" class="action-btn" title="Edit"><i class="bi bi-pencil"></i></button>
                  <button type="button" class="action-btn btn-del" title="Delete"><i class="bi bi-x-lg"></i></button>
                </div>
              `
            }
          ]
        });

        const pageSizeSelect = document.getElementById('pagesize-select');
        if (pageSizeSelect) {
          pageSizeSelect.addEventListener('change', (e) => {
            const size = parseInt(e.target.value);
            table.setPageSize(size);
          });
        }

        const searchForm = document.getElementById('department-search-form');
        const filterInput = document.getElementById('filter-dept-title');
        searchForm.addEventListener('submit', (e) => {
          e.preventDefault();
          const val = filterInput.value.trim();
          if (val) {
            table.setFilter('title', 'like', val);
          } else {
            table.clearFilter();
          }
        });

       
      });
    </script>

  </body>
  <!--end::Body-->
</html>