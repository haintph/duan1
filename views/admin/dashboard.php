<?php
include_once ROOT_DIR . "views/admin/header.php"
?>
<div class="app-main__inner">
  <div class="container-fluid">
    <div class="row mt-4">
      <!-- Stats Cards -->
      <div class="col-md-3">
        <div class="card text-white bg-primary mb-3">
          <div class="card-body">
            <h5 class="card-title">Total Sales</h5>
            <p class="card-text"><i class="fas fa-dollar-sign"></i> $10,000</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-white bg-success mb-3">
          <div class="card-body">
            <h5 class="card-title">New Users</h5>
            <p class="card-text"><i class="fas fa-users"></i> 250</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-white bg-warning mb-3">
          <div class="card-body">
            <h5 class="card-title">Revenue</h5>
            <p class="card-text"><i class="fas fa-chart-line"></i> $8,500</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-white bg-danger mb-3">
          <div class="card-body">
            <h5 class="card-title">Errors</h5>
            <p class="card-text"><i class="fas fa-exclamation-circle"></i> 5</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Charts Section -->
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Sales Overview
          </div>
          <div class="card-body">
            <canvas id="salesChart"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            User Growth
          </div>
          <div class="card-body">
            <canvas id="userChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style>
    body {
      background-color: #f4f6f9;
    }

    .card {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    .navbar {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card-body {
      text-align: center;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Sales Chart
    const salesCtx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(salesCtx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
          label: 'Sales',
          data: [1200, 1900, 3000, 5000, 2300, 3200],
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      }
    });

    // User Growth Chart
    const userCtx = document.getElementById('userChart').getContext('2d');
    const userChart = new Chart(userCtx, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
          label: 'New Users',
          data: [150, 200, 300, 500, 700, 400],
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1
        }]
      }
    });
  </script>
</div>
<?php
include_once ROOT_DIR . "views/admin/footer.php"
?>