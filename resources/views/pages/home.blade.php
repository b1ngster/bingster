


                                           
@extends('layouts.app')

@section('content')


<div id="articles_container" style="

    top: 20%;
    position: absolute;"
>
<input type="text" id="searchInput" placeholder="Search...">
  
  <table id="dataTable">
    <thead>
      <tr>
        <th onclick="sortTable(0)">Title</th>
        <th onclick="sortTable(1)">Category</th>
        <th onclick="sortTable(2)">Date</th>
      </tr>
    </thead>
    <tbody id="dataBody">
      <!-- Table data will be inserted dynamically here -->
    </tbody>
  </table>
  
  <script>
// Sample data
var data = [
  { title: 'Item 1', category: 'Category A', date: '2023-01-01' },
  { title: 'Item 2', category: 'Category B', date: '2023-02-01' },
  { title: 'Item 3', category: 'Category A', date: '2023-03-01' },
  { title: 'Item 4', category: 'Category C', date: '2023-04-01' },
  { title: 'Item 5', category: 'Category B', date: '2023-05-01' },
];

// Function to create the table rows dynamically
function createTableRows(data) {
  var tableBody = document.getElementById('dataBody');
  
  // Clear existing table rows
  tableBody.innerHTML = '';
  
  for (var i = 0; i < data.length; i++) {
    var row = document.createElement('tr');
    row.innerHTML = '<td>' + data[i].title + '</td>' +
                    '<td>' + data[i].category + '</td>' +
                    '<td>' + data[i].date + '</td>';
    tableBody.appendChild(row);
  }
}

// Initial table creation
createTableRows(data);

// Function to sort the table by column index
function sortTable(columnIndex) {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById('dataTable');
  switching = true;
  
  while (switching) {
    switching = false;
    rows = table.rows;
    
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName('td')[columnIndex];
      y = rows[i + 1].getElementsByTagName('td')[columnIndex];
      
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        shouldSwitch = true;
        break;
      }
    }
    
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}

// Function to filter the table based on search input
function searchTable() {
  var input, filter, table, rows, cells, i, txtValue;
  input = document.getElementById('searchInput');
  filter = input.value.toLowerCase();
  table = document.getElementById('dataTable');
  rows = table.getElementsByTagName('tr');
  
  for (i = 0; i < rows.length; i++) {
    cells = rows[i].getElementsByTagName('td');
    var found = false;
    
    for (var j = 0; j < cells.length; j++) {
      txtValue = cells[j].textContent || cells[j].innerText;
      
      if (txtValue.toLowerCase().indexOf(filter) > -1) {
        found = true;
        break;
      }
    }
    
    if (found) {
      rows[i].style.display = '';
    } else {
      rows[i].style.display = 'none';
    }
  }
}

// Event listener for search input
document.getElementById('searchInput').addEventListener('input', searchTable);


</script>



@stop
