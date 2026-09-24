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
