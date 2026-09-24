<!doctype html>
<html lang="en">

 <head>
    <title>AdminLTE 4 | Organization</title>
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
                <h3 class="mb-0 fw-bold text-dark">Organization</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end mb-0 small">
                  <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Organization</li>
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
            <div class="card shadow-sm border-0 rounded-2 bg-white mb-4">
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
                  <form id="org-search-form">
                    <div class="row g-3">
                      <div class="col-12 col-md-6 col-lg-4">
                        <label class="form-label small fw-semibold text-secondary">Organization Title</label>
                        <input type="text" id="filter-org-title" class="form-control bg-light border-light-subtle">
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

            <!-- Card 2: Organization Table -->
            <div class="card shadow-sm border-0 rounded-2 bg-white mb-4">
              <div class="card-header bg-white py-3 border-bottom">
                <div class="d-flex align-items-center gap-2 text-dark fw-semibold fs-6">
                  <i class="bi bi-list-task text-primary"></i> Organization
                </div>
              </div>

              <div class="card-body p-3">
                <!-- Toolbar เหนือตาราง -->
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                  <button type="button" class="btn btn-primary px-3 py-1 fw-semibold d-inline-flex align-items-center gap-1 shadow-sm">
                    <i class="bi bi-plus-lg"></i> Create Organization
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

                <!-- จุดวางตาราง Tabulator -->
                <div id="organization-table"></div>
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

    <!-- CSS ปรับแต่ง Tabulator ให้ได้ดีไซน์เป๊ะตามภาพ -->
    <style>
      .form-control:focus,
      .form-select:focus {
        border-color: #0d6efd !important;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15) !important;
      }

      /* กรอบตารางหลัก */
      #organization-table {
        border: 1px solid #e9ecef;
        border-radius: 4px;
        overflow: hidden;
      }

      /* แถบหัวตารางสีฟ้าสด */
      #organization-table .tabulator-header {
        background-color: #0084ff !important;
        border-bottom: none !important;
        color: #ffffff !important;
      }

      #organization-table .tabulator-col {
        background-color: #0084ff !important;
        border-right: 1px solid rgba(255, 255, 255, 0.2) !important;
      }

      #organization-table .tabulator-col-title {
        color: #ffffff !important;
        font-weight: 600;
        font-size: 13.5px;
      }

      /* ช่องค้นหาใต้หัวคอลัมน์ */
      #organization-table .tabulator-header-filter input {
        border: 1px solid #dee2e6;
        border-radius: 4px;
        padding: 5px 10px;
        font-size: 13px;
        background-color: #ffffff;
      }

      /* แถวของตารางและเอฟเฟกต์ชี้เมาส์ */
      #organization-table .tabulator-row {
        border-bottom: 1px solid #f1f3f5;
      }

      #organization-table .tabulator-row:hover {
        background-color: #f8f9fa !important;
      }

      /* ปุ่ม Action: ดู, แก้ไข, ลบ */
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

      /* แถบ Pagination ด้านล่าง */
      #organization-table .tabulator-footer {
        background-color: #e9ecef;
        border-top: 1px solid #dee2e6;
        padding: 8px 12px;
      }

      #organization-table .tabulator-paginator {
        text-align: right;
      }

      #organization-table .tabulator-page {
        border: 1px solid #ced4da;
        border-radius: 3px;
        background-color: #ffffff;
        color: #6c757d;
        padding: 4px 10px;
        margin: 0 2px;
      }

      #organization-table .tabulator-page.active {
        background-color: #007bff;
        border-color: #007bff;
        color: #ffffff;
      }
    </style>

    <script>
      document.addEventListener('DOMContentLoaded', () => {
        // ข้อมูลตามตัวอย่างในภาพ
        const data = [
          { id: 1, title: 'Brother' },
          { id: 2, title: 'Regional Office HQ' },
          { id: 3, title: 'Customer Support Division' },
          { id: 4, title: 'Technical Service Center' }
        ];

        // กำหนดตาราง Tabulator
        const table = new Tabulator('#organization-table', {
          data: data,
          layout: 'fitColumns',
          pagination: true,
          paginationSize: 10,
          columns: [
            // Checkbox
            { 
              formatter: 'rowSelection', 
              titleFormatter: 'rowSelection', 
              hozAlign: 'center', 
              headerHozAlign: 'center', 
              width: 45, 
              headerSort: false 
            },
            // Organization Title
            { 
              title: 'Organization Title', 
              field: 'title', 
              headerFilter: 'input', 
              headerHozAlign: 'left', 
              hozAlign: 'left', 
              minWidth: 320 
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

        // Dropdown Showing ควบคุมจำนวนแถว
        const pageSizeSelect = document.getElementById('pagesize-select');
        if (pageSizeSelect) {
          pageSizeSelect.addEventListener('change', (e) => {
            table.setPageSize(parseInt(e.target.value));
          });
        }

        // ค้นหาผ่านฟอร์ม Search ด้านบน
        const searchForm = document.getElementById('org-search-form');
        const filterInput = document.getElementById('filter-org-title');
        searchForm.addEventListener('submit', (e) => {
          e.preventDefault();
          const val = filterInput.value.trim();
          if (val) {
            table.setFilter('title', 'like', val);
          } else {
            table.clearFilter();
          }
        });

        // ปุ่ม Reset
        document.getElementById('btn-reset-org').addEventListener('click', () => {
          table.clearFilter();
        });
      });
    </script>

  </body>
  <!--end::Body-->
</html>