<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <?php include_once(__DIR__ . '/../layouts/style.php'); ?>
</head>
<body>
  <div class="container-fluid">
    <div class="row">

      <!-- Sidebar -->
      <?php include_once(__DIR__ . '/../layouts/partials/sidebar.php'); ?>

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       <?php include_once(__DIR__ . '/../layouts/partials/home.php'); ?>

      </main>
    </div>
  </div>

  <?php include_once(__DIR__ . '/../layouts/scripts.php'); ?>
</body>
</html>

<!-- Bootstrap JS Bundle (gồm Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Nếu dùng Chart.js hoặc thêm thư viện nào khác thì thêm vào đây -->
