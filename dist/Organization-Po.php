<!doctype html>
<html lang="en">

 <head>
    <title>AdminLTE 4 | Position</title>
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
                <h4 class="mb-0 fw-semibold text-dark">Position</h4>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end mb-0 small">
                  <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Position</li>
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
                  <form id="position-search-form">
                    <div class="row g-3">
                      <div class="col-12 col-md-6 col-lg-3">
                        <label class="form-label small fw-semibold text-muted">Position Title</label>
                        <input type="text" id="filter-position-title" class="form-control bg-light border-light-subtle">
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

            <!-- Card 2: Position Table -->
            <div class="card shadow-sm border-0 rounded-3 bg-white mb-4">
              <div class="card-header bg-white py-3 border-bottom">
                <div class="d-flex align-items-center gap-2 text-dark fw-semibold fs-6">
                  <i class="bi bi-list-task text-primary"></i> Position
                </div>
              </div>

              <div class="card-body p-3">
                <!-- Toolbar เหนือตาราง -->
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                  <button type="button" class="btn btn-primary px-3 py-1 fw-semibold d-inline-flex align-items-center gap-1 shadow-sm">
                    <i class="bi bi-plus-lg"></i> Create Position
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
                <div id="position-table"></div>
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

    <!-- ตกแต่งตาราง Tabulator สไตล์ธีมสีฟ้า -->
    <style>
      .form-control:focus,
      .form-select:focus {
        border-color: #0d6efd !important;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15) !important;
      }

      #position-table {
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        overflow: hidden;
      }

      #position-table .tabulator-header {
        background-color: #0091ff !important;
        border-bottom: none !important;
        color: #ffffff !important;
        font-weight: 500;
      }

      #position-table .tabulator-col {
        background-color: #0091ff !important;
        border-right: 1px solid rgba(255, 255, 255, 0.25) !important;
      }

      #position-table .tabulator-col-title {
        color: #ffffff !important;
      }

      #position-table .tabulator-header-filter input {
        border: 1px solid #cbd5e1;
        border-radius: 4px;
        padding: 3px 8px;
        font-size: 0.85rem;
      }

      #position-table .tabulator-row {
        border-bottom: 1px solid #edf2f7;
      }

      #position-table .tabulator-row:hover {
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

      #position-table .tabulator-footer {
        background-color: #ffffff;
        border-top: 1px solid #edf2f7;
        padding: 8px 12px;
      }

      #position-table .tabulator-paginator {
        text-align: right;
      }

      #position-table .tabulator-page {
        border: 1px solid #dee2e6;
        border-radius: 4px;
        background-color: #ffffff;
        color: #0d6efd;
        padding: 4px 10px;
        margin: 0 2px;
      }

      #position-table .tabulator-page.active {
        background-color: #0d6efd;
        border-color: #0d6efd;
        color: #ffffff;
      }
    </style>

    <script>
      document.addEventListener('DOMContentLoaded', () => {
        // ข้อมูลจำลอง (Mock Data) สอดคล้องกับภาพแต่ปลอดภัย
        const data = [
          { id: 1, title: 'Regional General Manager', department: 'Customer Service', company: 'Branch Office 01', organization: 'Brother' },
          { id: 2, title: 'Customer Service Manager', department: 'Customer Service', company: 'Branch Office 01', organization: 'Brother' },
          { id: 3, title: 'Lead Operations Manager', department: 'Customer Service', company: 'Branch Office 02', organization: 'Brother' },
          { id: 4, title: 'Technical Trainer', department: 'Customer Service', company: 'Branch Office 01', organization: 'Brother' },
          { id: 5, title: 'Senior Executive', department: 'Customer Service', company: 'Branch Office 03', organization: 'Brother' },
          { id: 6, title: 'Associate Executive', department: 'Customer Service', company: 'Branch Office 02', organization: 'Brother' },
          { id: 7, title: 'Quality Associate', department: 'Customer Service', company: 'Branch Office 01', organization: 'Brother' },
          { id: 8, title: 'Technical Specialist', department: 'Customer Service', company: 'Branch Office 03', organization: 'Brother' },
          { id: 9, title: 'Support Officer', department: 'Customer Service', company: 'Branch Office 02', organization: 'Brother' },
          { id: 10, title: 'Service Coordinator', department: 'Customer Service', company: 'Branch Office 01', organization: 'Brother' },
          { id: 11, title: 'Field Support Technician', department: 'Customer Service', company: 'Branch Office 01', organization: 'Brother' }
        ];

        // สร้างตาราง Tabulator
        const table = new Tabulator('#position-table', {
          data: data,
          layout: 'fitColumns',
          pagination: true,
          paginationSize: 10,
          columns: [
            // Position Title
            { 
              title: 'Position Title', 
              field: 'title', 
              headerFilter: 'input', 
              headerHozAlign: 'left', 
              hozAlign: 'left', 
              minWidth: 220 
            },
            // Department
            { 
              title: 'Department', 
              field: 'department', 
              headerFilter: 'input', 
              headerHozAlign: 'left', 
              hozAlign: 'left', 
              minWidth: 180 
            },
            // Company
            { 
              title: 'Company', 
              field: 'company', 
              headerFilter: 'input', 
              headerHozAlign: 'left', 
              hozAlign: 'left', 
              minWidth: 180 
            },
            // Organization
            { 
              title: 'Organization', 
              field: 'organization', 
              headerFilter: 'input', 
              headerHozAlign: 'left', 
              hozAlign: 'left', 
              minWidth: 150 
            },
            // Action
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

        // Dropdown Showing ควบคุมขนาดหน้า
        const pageSizeSelect = document.getElementById('pagesize-select');
        if (pageSizeSelect) {
          pageSizeSelect.addEventListener('change', (e) => {
            table.setPageSize(parseInt(e.target.value));
          });
        }

        // ค้นหาผ่านฟอร์ม Search ด้านบน
        const searchForm = document.getElementById('position-search-form');
        searchForm.addEventListener('submit', (e) => {
          e.preventDefault();
          const filters = [];
          
          const titleVal = document.getElementById('filter-position-title').value.trim();
          const deptVal = document.getElementById('filter-department').value.trim();
          const compVal = document.getElementById('filter-company').value.trim();
          const orgVal = document.getElementById('filter-organization').value.trim();

          if (titleVal) filters.push({ field: 'title', type: 'like', value: titleVal });
          if (deptVal) filters.push({ field: 'department', type: 'like', value: deptVal });
          if (compVal) filters.push({ field: 'company', type: 'like', value: compVal });
          if (orgVal) filters.push({ field: 'organization', type: 'like', value: orgVal });

          table.setFilter(filters);
        });

        // ปุ่ม Reset
        document.getElementById('btn-reset-position').addEventListener('click', () => {
          table.clearFilter();
        });
      });
    </script>

  </body>
  <!--end::Body-->
</html>