<main>
  <!-- Carousel -->
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/assets/images/img1.png" class="d-block w-100">
        <div class="container">
        </div>
      </div>
    </div>
  </div>

<?php
include_once(__DIR__ . '/../../../dbConnect.php');
$conn = connectDb();

$sql = "SELECT * FROM products LIMIT 6";
$result = $conn->query($sql);
?>

<div class="container marketing mt-5">
  <div class="row text-center mb-4">
   <?php while($row = $result->fetch_assoc()): ?>
  <div class="col-lg-4 mb-4">
    <img src="/Day4/assets/<?= htmlspecialchars($row['image_url']) ?>" 
        alt="<?= htmlspecialchars($row['name']) ?>" 
        class="img-fluid" 
        style="height: 200px; object-fit: cover;">

    <h2><?= htmlspecialchars($row['name']) ?></h2>
    <p><?= htmlspecialchars($row['description']) ?></p>
    <p><strong><?= number_format($row['price'], 0) ?>₫</strong></p>
    <p>
      <a class="btn btn-outline-primary" 
         href="/Day4/frontend/pages/productDetail.php?id=<?= $row['id'] ?>">
        Chi tiết
      </a>
    </p>
  </div>
<?php endwhile; ?>

  </div>
</div>


  <!-- Footer -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>© 2017–2025 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>
</main>

<style>
.carousel-item img {
  width: 100%;
  height: 300px;
  object-fit: cover;
}

</style>

