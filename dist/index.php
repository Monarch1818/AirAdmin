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
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h1 class="mb-0 fs-3">Terms of use</h1>
              </div>
              <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Terms of use</li>
                  </ol>
                </nav>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <div class="mb-3">
                      <label class="form-label" for="select-default">Select</label>
                      <select class="form-select" id="select-default">
                        <option selected="">Open this select menu</option>
                        <option>One</option>
                        <option>Two</option>
                        <option>Three</option>
                      </select>
                    </div>
            <div class="card card-primary card-outline mb-4">
                  <form>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="col-12">
                    <label class="form-label" for="mail-body">Detail</label>
                    <textarea id="mail-body" class="form-control" rows="12" placeholder="Write your message…" style="min-height: 8rem"></textarea>
                    <small class="text-secondary">
                      Hook up a rich-text editor such as
                      <a href="https://quilljs.com/" target="_blank" rel="noopener">Quill</a>
                      or
                      <a href="https://github.com/Ionaru/easy-markdown-editor" target="_blank" rel="noopener">EasyMDE</a>
                      to upgrade this textarea.
                    </small>
                  </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                  </form>
              </div>

              <div class="card">
              <div class="card-header">
                <h3 class="card-title">News</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 16rem">
                    <span class="input-group-text">
                      <i class="bi bi-search" aria-hidden="true"></i>
                    </span>
                    <input id="table-filter" type="search" class="form-control" placeholder="Filter rows…" aria-label="Filter rows">
                  </div>
                </div>
              </div>
              <div class="card-body">
             
                <div id="users-table" class="tabulator" role="grid" aria-owns="tabulator-table-body" tabulator-layout="fitColumns"><div class="tabulator-header" role="rowgroup"><div class="tabulator-header-contents"><div class="tabulator-headers" role="row" style="height: 84px;"><div class="tabulator-col tabulator-sortable tabulator-col-sorter-element" role="columnheader" aria-sort="none" tabulator-field="id" style="min-width: 40px; width: 60px; height: 84px;"><div class="tabulator-col-content"><div class="tabulator-col-title-holder"><div class="tabulator-col-title">#</div><div class="tabulator-col-sorter"><div class="tabulator-arrow"></div></div></div></div></div><span class="tabulator-col-resize-handle" style="height: 84px;"></span><div class="tabulator-col tabulator-sortable tabulator-col-sorter-element" role="columnheader" aria-sort="none" tabulator-field="name" style="min-width: 40px; width: 422px; height: 84px;"><div class="tabulator-col-content"><div class="tabulator-col-title-holder"><div class="tabulator-col-title">Name</div><div class="tabulator-col-sorter"><div class="tabulator-arrow"></div></div></div><div class="tabulator-header-filter"><input type="search" placeholder="" style="padding: 4px; width: 100%; box-sizing: border-box;"></div></div></div><span class="tabulator-col-resize-handle" style="height: 84px;"></span><div class="tabulator-col tabulator-sortable tabulator-col-sorter-element" role="columnheader" aria-sort="none" tabulator-field="email" style="min-width: 40px; width: 422px; height: 84px;"><div class="tabulator-col-content"><div class="tabulator-col-title-holder"><div class="tabulator-col-title">Email</div><div class="tabulator-col-sorter"><div class="tabulator-arrow"></div></div></div><div class="tabulator-header-filter"><input type="search" placeholder="" style="padding: 4px; width: 100%; box-sizing: border-box;"></div></div></div><span class="tabulator-col-resize-handle" style="height: 84px;"></span><div class="tabulator-col tabulator-sortable tabulator-col-sorter-element" role="columnheader" aria-sort="none" tabulator-field="role" style="min-width: 40px; width: 120px; height: 84px;"><div class="tabulator-col-content"><div class="tabulator-col-title-holder"><div class="tabulator-col-title">Role</div><div class="tabulator-col-sorter"><div class="tabulator-arrow"></div></div></div><div class="tabulator-header-filter"><input type="search" placeholder="" style="padding: 4px; width: 100%; box-sizing: border-box; cursor: default; caret-color: transparent;"></div></div></div><span class="tabulator-col-resize-handle" style="height: 84px;"></span><div class="tabulator-col tabulator-sortable tabulator-col-sorter-element" role="columnheader" aria-sort="none" tabulator-field="status" style="min-width: 40px; width: 130px; height: 84px;"><div class="tabulator-col-content"><div class="tabulator-col-title-holder"><div class="tabulator-col-title">Status</div><div class="tabulator-col-sorter"><div class="tabulator-arrow"></div></div></div><div class="tabulator-header-filter"><input type="search" placeholder="" style="padding: 4px; width: 100%; box-sizing: border-box; cursor: default; caret-color: transparent;"></div></div></div><span class="tabulator-col-resize-handle" style="height: 84px;"></span><div class="tabulator-col tabulator-sortable tabulator-col-sorter-element" role="columnheader" aria-sort="none" tabulator-field="joined" style="min-width: 40px; width: 130px; height: 84px;"><div class="tabulator-col-content"><div class="tabulator-col-title-holder"><div class="tabulator-col-title">Joined</div><div class="tabulator-col-sorter"><div class="tabulator-arrow"></div></div></div></div></div><span class="tabulator-col-resize-handle" style="height: 84px;"></span></div><div class="tabulator-frozen-rows-holder" style="min-width: 0px;"></div></div></div><div class="tabulator-tableholder" tabindex="0" style="height: 490px;"><div class="tabulator-table" role="rowgroup" id="tabulator-table-body" style="padding-top: 0px; padding-bottom: 0px;"><div class="tabulator-row tabulator-selectable tabulator-row-odd" role="row"><div class="tabulator-cell" role="gridcell" tabulator-field="id" style="width: 60px; height: 48px;">1</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="name" style="width: 422px; height: 48px;">dddddd</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="email" style="width: 422px; height: 48px;">olivia@example.com</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="role" style="width: 120px; height: 48px;">Admin</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="status" style="width: 130px; text-align: center; height: 48px;"><span class="badge text-bg-success">Active</span></div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="joined" style="width: 130px; height: 48px;">2024-03-12</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span></div><div class="tabulator-row tabulator-selectable tabulator-row-even" role="row"><div class="tabulator-cell" role="gridcell" tabulator-field="id" style="width: 60px; height: 48px;">2</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="name" style="width: 422px; height: 48px;">Liam Carter</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="email" style="width: 422px; height: 48px;">liam@example.com</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="role" style="width: 120px; height: 48px;">Editor</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="status" style="width: 130px; text-align: center; height: 48px;"><span class="badge text-bg-success">Active</span></div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="joined" style="width: 130px; height: 48px;">2024-04-08</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span></div><div class="tabulator-row tabulator-selectable tabulator-row-odd" role="row"><div class="tabulator-cell" role="gridcell" tabulator-field="id" style="width: 60px; height: 48px;">3</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="name" style="width: 422px; height: 48px;">Emma Dawson</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="email" style="width: 422px; height: 48px;">emma@example.com</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="role" style="width: 120px; height: 48px;">Viewer</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="status" style="width: 130px; text-align: center; height: 48px;"><span class="badge text-bg-info">Invited</span></div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="joined" style="width: 130px; height: 48px;">2024-06-21</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span></div><div class="tabulator-row tabulator-selectable tabulator-row-even" role="row"><div class="tabulator-cell" role="gridcell" tabulator-field="id" style="width: 60px; height: 48px;">4</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="name" style="width: 422px; height: 48px;">Noah Evans</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="email" style="width: 422px; height: 48px;">noah@example.com</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="role" style="width: 120px; height: 48px;">Editor</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="status" style="width: 130px; text-align: center; height: 48px;"><span class="badge text-bg-secondary">Suspended</span></div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="joined" style="width: 130px; height: 48px;">2024-07-15</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span></div><div class="tabulator-row tabulator-selectable tabulator-row-odd" role="row"><div class="tabulator-cell" role="gridcell" tabulator-field="id" style="width: 60px; height: 48px;">5</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="name" style="width: 422px; height: 48px;">Ava Foster</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="email" style="width: 422px; height: 48px;">ava@example.com</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="role" style="width: 120px; height: 48px;">Admin</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="status" style="width: 130px; text-align: center; height: 48px;"><span class="badge text-bg-success">Active</span></div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="joined" style="width: 130px; height: 48px;">2024-08-30</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span></div><div class="tabulator-row tabulator-selectable tabulator-row-even" role="row"><div class="tabulator-cell" role="gridcell" tabulator-field="id" style="width: 60px; height: 48px;">6</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="name" style="width: 422px; height: 48px;">Ethan Grant</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="email" style="width: 422px; height: 48px;">ethan@example.com</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="role" style="width: 120px; height: 48px;">Viewer</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="status" style="width: 130px; text-align: center; height: 48px;"><span class="badge text-bg-success">Active</span></div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="joined" style="width: 130px; height: 48px;">2024-09-14</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span></div><div class="tabulator-row tabulator-selectable tabulator-row-odd" role="row"><div class="tabulator-cell" role="gridcell" tabulator-field="id" style="width: 60px; height: 48px;">7</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="name" style="width: 422px; height: 48px;">Sophia Hayes</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="email" style="width: 422px; height: 48px;">sophia@example.com</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="role" style="width: 120px; height: 48px;">Editor</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="status" style="width: 130px; text-align: center; height: 48px;"><span class="badge text-bg-success">Active</span></div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="joined" style="width: 130px; height: 48px;">2024-10-02</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span></div><div class="tabulator-row tabulator-selectable tabulator-row-even" role="row"><div class="tabulator-cell" role="gridcell" tabulator-field="id" style="width: 60px; height: 48px;">8</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="name" style="width: 422px; height: 48px;">Mason Ingram</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="email" style="width: 422px; height: 48px;">mason@example.com</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="role" style="width: 120px; height: 48px;">Viewer</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="status" style="width: 130px; text-align: center; height: 48px;"><span class="badge text-bg-info">Invited</span></div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="joined" style="width: 130px; height: 48px;">2024-11-19</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span></div><div class="tabulator-row tabulator-selectable tabulator-row-odd" role="row"><div class="tabulator-cell" role="gridcell" tabulator-field="id" style="width: 60px; height: 48px;">9</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="name" style="width: 422px; height: 48px;">Isabella Jones</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="email" style="width: 422px; height: 48px;">isabella@example.com</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="role" style="width: 120px; height: 48px;">Admin</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="status" style="width: 130px; text-align: center; height: 48px;"><span class="badge text-bg-success">Active</span></div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="joined" style="width: 130px; height: 48px;">2025-01-05</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span></div><div class="tabulator-row tabulator-selectable tabulator-row-even" role="row"><div class="tabulator-cell" role="gridcell" tabulator-field="id" style="width: 60px; height: 48px;">10</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="name" style="width: 422px; height: 48px;">Lucas Klein</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="email" style="width: 422px; height: 48px;">lucas@example.com</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="role" style="width: 120px; height: 48px;">Viewer</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="status" style="width: 130px; text-align: center; height: 48px;"><span class="badge text-bg-secondary">Suspended</span></div><span class="tabulator-col-resize-handle" style="height: 48px;"></span><div class="tabulator-cell" role="gridcell" tabulator-field="joined" style="width: 130px; height: 48px;">2025-02-18</div><span class="tabulator-col-resize-handle" style="height: 48px;"></span></div></div></div><div class="tabulator-footer"><div class="tabulator-footer-contents"><span class="tabulator-paginator"><label>Page Size</label><select class="tabulator-page-size" aria-label="Page Size" title="Page Size"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><button class="tabulator-page" type="button" role="button" aria-label="First Page" title="First Page" data-page="first" disabled="">First</button><button class="tabulator-page" type="button" role="button" aria-label="Prev Page" title="Prev Page" data-page="prev" disabled="">Prev</button><span class="tabulator-pages"><button class="tabulator-page active" type="button" role="button" aria-label="Show Page 1" title="Show Page 1" data-page="1">1</button><button class="tabulator-page" type="button" role="button" aria-label="Show Page 2" title="Show Page 2" data-page="2">2</button></span><button class="tabulator-page" type="button" role="button" aria-label="Next Page" title="Next Page" data-page="next">Next</button><button class="tabulator-page" type="button" role="button" aria-label="Last Page" title="Last Page" data-page="last">Last</button></span></div></div></div>
              </div>
              <div class="card-footer text-secondary small">
                Powered by
                <a href="https://tabulator.info/" target="_blank" rel="noopener">Tabulator</a>
                — vanilla JS, no jQuery required.
              </div>
            </div>
         
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->

      <!--begin::Footer-->
      <?php include 'include/footer.php';?>
      <!--end::Footer-->
      
    </div>
    <!--end::App Wrapper-->
    
   
   
    <script>
      const statusBadge = (cell) => {
        const value = cell.getValue();
        const map = { Active: 'success', Invited: 'info', Suspended: 'secondary' };
        const color = map[value] || 'secondary';
        return `<span class="badge text-bg-${color}">${value}</span>`;
      };

      document.addEventListener('DOMContentLoaded', () => {
        const data = [
          {
            id: 1,
            name: 'dfedfwefewfew',
            detail: 'rrrrrrrr',
            role: 'Admin',
            status: 'Active',
            joined: '2024-03-12',
          },
          {
            id: 2,
            name: 'Liam Carter',
            detail: 'liam@example.com',
            role: 'Editor',
            status: 'Active',
            joined: '2024-04-08',
          },
          {
            id: 3,
            name: 'Emma Dawson',
            detail: 'emma@example.com',
            role: 'Viewer',
            status: 'Invited',
            joined: '2024-06-21',
          },
          {
            id: 4,
            name: 'Noah Evans',
            detail: 'noah@example.com',
            role: 'Editor',
            status: 'Suspended',
            joined: '2024-07-15',
          },
          {
            id: 5,
            name: 'Ava Foster',
            detail: 'ava@example.com',
            role: 'Admin',
            status: 'Active',
            joined: '2024-08-30',
          },
          {
            id: 6,
            name: 'Ethan Grant',
            detail: 'ethan@example.com',
            role: 'Viewer',
            status: 'Active',
            joined: '2024-09-14',
          }
        ];

        const table = new Tabulator('#users-table', {
          data: data,
          layout: 'fitColumns',
          pagination: true,
          paginationSize: 10,
          paginationSizeSelector: [10, 25, 50, 100],
          movableColumns: true,
          columns: [
            { title: '#', field: 'id', width: 60, headerSort: true },
            { title: 'Name', field: 'name', headerFilter: 'input' },
            { title: 'Detail', field: 'name', headerFilter: 'input' },
           
            {
              title: 'Status',
              field: 'status',
              formatter: statusBadge,
              headerFilter: 'list',
              headerFilterParams: { values: ['', 'Active', 'Invited', 'Suspended'] },
              width: 130,
              hozAlign: 'center',
            },
           
          ],
        });

        document.getElementById('table-filter').addEventListener('input', (e) => {
          const value = e.target.value;
          if (value) {
            table.setFilter([
              [
                { field: 'name', type: 'like', value: value },
                { field: 'email', type: 'like', value: value },
              ],
            ]);
          } else {
            table.clearFilter();
          }
        });

        document
          .getElementById('export-csv')
          .addEventListener('click', () => table.download('csv', 'users.csv'));
        document
          .getElementById('export-json')
          .addEventListener('click', () => table.download('json', 'users.json'));
        document
          .getElementById('print-table')
          .addEventListener('click', () => table.print(false, true));
      });
    </script>

  </body>
  <!--end::Body-->
</html>
