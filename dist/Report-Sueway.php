<!doctype html>
<html lang="en">

 <head>
    <title>AdminLTE 4 | Surway Report</title>
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
                <h4 class="mb-0 fw-semibold text-dark">Surway Report</h4>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end mb-0 small">
                  <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Surway Report</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--end::App Content Header-->

        <!--begin::App Content-->
        <div class="app-content">
          <div class="container-fluid">

            <!-- Card 1: Search -->
            <div class="card card-outline card-primary shadow-sm border-0 mb-4 rounded-3">
              <div class="card-header bg-white py-3 border-bottom d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 fw-semibold fs-6 text-dark d-flex align-items-center gap-2">
                  <i class="bi bi-search"></i> Search
                </h5>
                <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                  <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                  <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
              </div>
              
              <div class="card-body bg-white p-4">
                <form id="survey-search-form">
                  <div class="row g-3">
                    <!-- Course -->
                    <div class="col-12 col-md-6 col-lg-5">
                      <label class="form-label small fw-semibold text-muted">Course</label>
                      <select class="form-select bg-light border-light-subtle" id="select-course">
                        <option value="Select Course" selected>Select Course</option>
                        <option value="NV2600 1. Disassembly of Covers">NV2600 1. Disassembly of Covers</option>
                        <option value="NV880e User Training">NV880e User Training</option>
                      </select>
                    </div>
                  </div>

                  <!-- Button ค้นหา -->
                  <div class="mt-4 pt-2 border-top d-flex gap-2">
                    <button type="submit" class="btn btn-primary px-4 shadow-sm">
                      <i class="bi bi-search me-1"></i> ค้นหา
                    </button>
                   
                  </div>
                </form>
              </div>
            </div>

            <!-- Card 2: Report Card (ซ่อนทั้งการ์ดไว้ตั้งแต่แรกด้วย d-none) -->
            <div id="survey-result-card" class="card shadow-sm border-0 rounded-3 bg-white mb-4 d-none">
              <div class="card-header bg-white py-3 border-bottom">
                <h5 class="card-title m-0 fw-semibold fs-6 text-dark d-flex align-items-center gap-2">
                  <i class="bi bi-list-task text-primary"></i> <span id="card-course-title">of the course VR 5. Assembly of Covers</span>
                </h5>
              </div>

              <div class="card-body p-4">
                <!-- ตาราง Tabulator สำหรับผลสำรวจ -->

                <!-- กรณีไม่มีข้อมูล (No Data ตามรูป) -->
                <div id="no-data-msg" class="text-muted py-2 d-none">
                  No Data
                </div>

                <!-- ปุ่ม Export -->
                <div id="export-container" class="mt-3">
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

      #survey-table {
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        overflow: hidden;
      }

      #survey-table .tabulator-header {
        background-color: #0091ff !important;
        border-bottom: none !important;
        color: #ffffff !important;
        font-weight: 500;
      }

      #survey-table .tabulator-col {
        background-color: #0091ff !important;
        border-right: 1px solid rgba(255, 255, 255, 0.25) !important;
      }

      #survey-table .tabulator-col-title {
        color: #ffffff !important;
      }

      #survey-table .tabulator-row {
        border-bottom: 1px solid #edf2f7;
      }

      #survey-table .tabulator-row:hover {
        background-color: #f8fafc !important;
      }
    </style>

    <script>
      document.addEventListener('DOMContentLoaded', () => {
        let table = null;
        const searchForm = document.getElementById('survey-search-form');
        const selectCourse = document.getElementById('select-course');
        const surveyResultCard = document.getElementById('survey-result-card');
        const cardCourseTitle = document.getElementById('card-course-title');
        const noDataMsg = document.getElementById('no-data-msg');
        const exportContainer = document.getElementById('export-container');

        // เมื่อกดปุ่ม "ค้นหา"
        searchForm.addEventListener('submit', (e) => {
          e.preventDefault();

          // แสดงการ์ดผลลัพธ์ทั้งหมด
          surveyResultCard.classList.remove('d-none');

          // อัปเดตหัวข้อให้ตรงกับ Course ที่เลือก
          const selectedCourseText = selectCourse.options[selectCourse.selectedIndex].text;
          cardCourseTitle.textContent = `of the course ${selectedCourseText}`;

          // ข้อมูลผลสำรวจ (ตัวอย่าง: อาเรย์ว่างจะแสดง No Data Available หรือ No Data)
          const surveyData = [];

          if (surveyData.length === 0) {
            noDataMsg.classList.remove('d-none');
            exportContainer.classList.add('d-none');
          } else {
            noDataMsg.classList.add('d-none');
            exportContainer.classList.remove('d-none');
          }

          if (!table) {
            table = new Tabulator('#survey-table', {
              data: surveyData,
              layout: 'fitColumns',
              placeholder: 'No Data Available',
              pagination: false,
              columns: [
                { title: 'No.', field: 'no', width: 70, headerHozAlign: 'center', hozAlign: 'center', formatter: 'rownum' },
                { title: 'Topic / Question', field: 'question', headerHozAlign: 'center', hozAlign: 'left', minWidth: 200 },
                { title: 'Average Score', field: 'avg_score', headerHozAlign: 'center', hozAlign: 'center', width: 150 },
                { title: 'Feedback / Comments', field: 'comment', headerHozAlign: 'center', hozAlign: 'left' }
              ]
            });
          } else {
            table.setData(surveyData);
            table.redraw(true);
          }
        });

        // เมื่อกด Reset ซ่อนการ์ดผลลัพธ์กลับไปทั้งหมด
        if (resetBtn) {
          resetBtn.addEventListener('click', () => {
            surveyResultCard.classList.add('d-none');
          });
        }

        // ปุ่ม Export
        const exportBtn = document.getElementById('btn-export');
        if (exportBtn) {
          exportBtn.addEventListener('click', () => {
            if (table) {
              table.download('csv', 'Survey_Report.csv');
            }
          });
        }
      });
    </script>

  </body>
  <!--end::Body-->
</html>