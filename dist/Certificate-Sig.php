<!doctype html>
<html lang="en">

 <head>
    <title>AdminLTE 4 | Signature</title>
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
                <h4 class="mb-0 fw-semibold text-dark">Signature</h4>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end mb-0 small">
                  <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Signature</li>
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
                  <div class="card-header bg-white py-3 border-bottom d-flex align-items-center">
                    <h5 class="card-title m-0 fw-semibold fs-6 text-dark d-flex align-items-center gap-2">
                        <i class="bi bi-search"></i> Advanced Search
                    </h5>
                    
                    <!-- ใส่ ms-auto เพื่อดันปุ่มไปขวาสุดแน่นอน -->
                    <div class="card-tools ms-auto">
                        <button type="button" class="btn btn-sm btn-light border-0 rounded-circle text-muted" data-bs-toggle="collapse" data-bs-target="#searchCollapse" aria-expanded="true">
                        <i class="bi bi-chevron-down"></i>
                        </button>
                    </div>
                    </div>
                    
                    <!-- หุ้ม card-body ด้วย collapse show -->
                    <div class="collapse show" id="searchCollapse">
                        <div class="card-body bg-white p-4">
                        <form id="signature-search-form">
                            <div class="row g-3">
                            <div class="col-12 col-md-6 col-lg-4">
                                <label class="form-label small fw-semibold text-muted">Signature</label>
                                <input type="text" id="filter-signature-input" class="form-control bg-light border-light-subtle">
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
                    </div>

            <!-- Card 2: Signature Table -->
            <div class="card shadow-sm border-0 rounded-3 bg-white mb-4">
              <div class="card-header bg-white py-3 border-bottom">
                <h5 class="card-title m-0 fw-semibold fs-6 text-dark d-flex align-items-center gap-2">
                  <i class="bi bi-list-task text-primary"></i> Signature
                </h5>
              </div>

              <div class="card-body p-3">
                <!-- Top Toolbar: Add Signature & Showing selector -->
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                  <button type="button" class="btn btn-primary px-3 py-1 fw-semibold d-inline-flex align-items-center gap-1 shadow-sm">
                    <i class="bi bi-plus-circle-fill"></i> Add Signature
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

                <!-- Element ตาราง Tabulator -->
                <div id="signature-table"></div>

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
      .form-control:focus,
      .form-select:focus {
        border-color: #0d6efd !important;
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15) !important;
      }

      #signature-table {
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        overflow: hidden;
      }

      #signature-table .tabulator-header {
        background-color: #0091ff !important;
        border-bottom: none !important;
        color: #ffffff !important;
        font-weight: 500;
      }

      #signature-table .tabulator-col {
        background-color: #0091ff !important;
        border-right: 1px solid rgba(255, 255, 255, 0.25) !important;
      }

      #signature-table .tabulator-col-title {
        color: #ffffff !important;
      }

      #signature-table .tabulator-header-filter input {
        border: 1px solid #cbd5e1;
        border-radius: 4px;
        padding: 2px 6px;
        font-size: 0.85rem;
      }

      #signature-table .tabulator-row {
        border-bottom: 1px solid #edf2f7;
      }

      #signature-table .tabulator-row:hover {
        background-color: #f8fafc !important;
      }
    </style>

    <script>
      document.addEventListener('DOMContentLoaded', () => {
        // ข้อมูลตัวอย่างตามภาพต้นฉบับ
        const data = [
          {
            id: 1,
            signature: 'Juan dela Cruz',
            created: '29 Mar 2023 08:44',
            status: 'Enable'
          },
          {
            id: 2,
            signature: 'Signature 2',
            created: '01 Feb 2023 10:55',
            status: 'Enable'
          },
          {
            id: 3,
            signature: 'Milton Toh',
            created: '29 Jan 2023 11:33',
            status: 'Enable'
          },
          {
            id: 4,
            signature: 'Norihisa Hirai',
            created: '04 Jan 2023 21:09',
            status: 'Enable'
          }
        ];

        const table = new Tabulator('#signature-table', {
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
              title: 'Signature', 
              field: 'signature', 
              headerFilter: 'input', 
              headerHozAlign: 'center', 
              hozAlign: 'left', 
              minWidth: 200 
            },
            { 
              title: 'Create Date', 
              field: 'created', 
              headerFilter: 'input', 
              headerHozAlign: 'center', 
              hozAlign: 'left', 
              width: 220 
            },
            { 
              title: 'Status', 
              field: 'status', 
              headerHozAlign: 'center', 
              hozAlign: 'center', 
              width: 130,
              formatter: (cell) => {
                const val = cell.getValue();
                return `<button class="btn btn-sm text-white fw-semibold px-3 py-1 shadow-none" style="background-color: #447e45; border-radius: 4px;">${val}</button>`;
              }
            },
            { 
              title: 'Action', 
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

        const searchForm = document.getElementById('signature-search-form');
        const filterInput = document.getElementById('filter-signature-input');
        searchForm.addEventListener('submit', (e) => {
          e.preventDefault();
          const val = filterInput.value.trim();
          if (val) {
            table.setFilter('signature', 'like', val);
          } else {
            table.clearFilter();
          }
        });

      

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