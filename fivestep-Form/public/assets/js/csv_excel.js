$(document).ready(function() {
    document.getElementById('exportCSV').addEventListener('click', function() {
      exportTableToCSV('order-details.csv');
    });
  
    document.getElementById('exportExcel').addEventListener('click', function() {
      exportTableToExcel('order-details.xlsx');
    });
  
    function exportTableToCSV(filename) {
      const table = document.querySelector('.table');
      const rows = table.querySelectorAll('tbody tr');
      let csvContent = 'data:text/csv;charset=utf-8,';
  
      // Loop through table rows and cells to generate CSV content
      rows.forEach(function(row) {
        const rowData = [];
        row.querySelectorAll('td').forEach(function(cell) {
          rowData.push(cell.textContent);
        });
        csvContent += rowData.join(',') + '\n';
      });
  
      // Create a data URI for the CSV content
      const encodedUri = encodeURI(csvContent);
      const link = document.createElement('a');
      link.setAttribute('href', encodedUri);
      link.setAttribute('download', filename);
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    }
  
    function exportTableToExcel(filename) {
      const table = document.querySelector('.table');
      const ws = XLSX.utils.table_to_sheet(table);
      const wb = XLSX.utils.book_new();
      XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');
  
      // Write the workbook to a file
      XLSX.writeFile(wb, filename);
    }
  });
  