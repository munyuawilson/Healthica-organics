@extends("layouts.adminlayout")

@section('title', "Dashboard")

@section('content')

<!-- Main Dashboard Container -->
<div class="dashboard-container">
<div class="container mt-5">
        <h1 class="text-center">
            Welcome <span class="waving"><i class="fas fa-hand-wave"></i> Ivy!</span>
        </h1>
    </div>
  <!-- Stats Cards Row -->
  <div class="row mb-4 mt-4">
    <div class="col-6 col-sm-4 col-md-3 pt-2 ">
      <div class="card bg-success-light text-white text-center pt-5 pb-5" >
        <i class="icon fas fa-shopping-cart"></i>
        <span class="stat-value text-center">450 Orders</span>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 pt-2 ">
      <div class="card bg-info-light text-white text-center pt-5 pb-5">
        <i class="icon fas fa-users"></i>
        <span class="stat-value text-center">1,200 Customers</span>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 pt-2 ">
      <div class="card bg-warning-light text-white text-center pt-5 pb-5">
        <i class="icon fas fa-boxes"></i>
        <span class="stat-value text-center">350 Products</span>
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 pt-2 ">
      <div class="card bg-danger-light text-white text-center pt-5 pb-5">
        <i class="icon fas fa-dollar-sign"></i>
        <span class="stat-value text-center">$45,000 Revenue</span>
      </div>
    </div>
  </div>

  <!-- Recent Orders Table -->
  <div class="card card-custom mb-4">
    <div class="card-header bg-success text-white">
      <h4>Recent Orders</h4>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Customer</th>
            <th>Status</th>
            <th>Date</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#101</td>
            <td>John Doe</td>
            <td><span class="badge badge-success">Completed</span></td>
            <td>Oct 26, 2024</td>
            <td>$300</td>
          </tr>
          <tr>
            <td>#102</td>
            <td>Jane Smith</td>
            <td><span class="badge badge-warning">Pending</span></td>
            <td>Oct 25, 2024</td>
            <td>$150</td>
          </tr>
          <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>
  </div>

  <!-- Charts Section -->
  <div class="row mb-4 text-center">
    <div class="col-md-6">
      <div class="card card-custom">
        <div class="card-header bg-info text-white">
          <h4>Monthly Sales</h4>
        </div>
        <div class="card-body">
          <canvas id="salesChart"></canvas>
        </div>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="card card-custom">
        <div class="card-header bg-primary text-white">
          <h4>Customer Growth</h4>
        </div>
        <div class="card-body">
          <canvas id="customerChart"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
    .dashboard-container {
      padding: 20px;
    }
    .content {
      padding: 20px;
    }
    .card-custom {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: 0.3s;
    }
    .card-custom:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .stats-card {
      color: #fff;
      padding: 20px;
      border-radius: 10px;
      display: flex;
      align-items: center;
    }
    .stats-card .icon {
      font-size: 1.5rem;
      margin-right: 15px;
    }
    .stat-value {
      font-size: 1.4rem;
      font-weight: bold;
    }
    .bg-success-light {
      background-color: #28a745;
    }
    .bg-info-light {
      background-color: #17a2b8;
    }
    .bg-warning-light {
      background-color: #ffc107;
    }
    .bg-danger-light {
      background-color: #dc3545;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
  // Monthly Sales Bar Chart
  var ctxSales = document.getElementById('salesChart').getContext('2d');
  var salesChart = new Chart(ctxSales, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [{
        label: 'Sales ($)',
        data: [1200, 1500, 1100, 2000, 1700, 2300, 2500, 2200, 1900, 2400, 2100, 2800],
        backgroundColor: '#28a745',
        borderColor: '#28a745',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            callback: function(value) { return '$' + value; }
          }
        }
      }
    }
  });

  // Customer Growth Line Chart
  var ctxCustomer = document.getElementById('customerChart').getContext('2d');
  var customerChart = new Chart(ctxCustomer, {
    type: 'line',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [{
        label: 'New Customers',
        data: [200, 250, 300, 280, 320, 340, 360, 380, 400, 420, 450, 480],
        backgroundColor: 'rgba(0, 123, 255, 0.2)',
        borderColor: '#007bff',
        fill: true,
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

@endsection
