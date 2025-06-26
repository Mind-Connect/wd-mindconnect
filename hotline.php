<?php
include("connection.php");

$categoryResult = executeQuery("SELECT DISTINCT category FROM hotlines ORDER BY category");
$hotlineResult = executeQuery("SELECT * FROM hotlines ORDER BY category, organization");

$hotlines = [];
while ($row = mysqli_fetch_assoc($hotlineResult)) {
  $hotlines[$row['category']][] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Hotline Directory</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
</head>
<body>

  <div class="container">
    <div class="title">
      <h2>Philippine Mental Health & Crisis Hotlines</h2>
      <p>Select a category to view available hotlines</p>
    </div>

    <div class="d-flex flex-wrap justify-content-center mb-4">
      <?php foreach ($hotlines as $category => $entries) { ?>
        <button class="btn btn-outline-primary category-btn" onclick="showCategory('<?php echo md5($category); ?>', this)">
          <?php echo htmlspecialchars($category); ?>
        </button>
      <?php } ?>
    </div>

    <div class="hotline-section">
      <?php foreach ($hotlines as $category => $entries) {
        $catID = md5($category); ?>
        <div class="hotline-category" id="cat-<?php echo $catID; ?>">
          <h4 class="text-primary text-center mb-4"><?php echo htmlspecialchars($category); ?></h4>
          <div class="row g-4">
            <?php foreach ($entries as $hotline) { ?>
              <div class="col-md-4">
                <div class="hotline-card">
                  <h5><?php echo $hotline['organization']; ?></h5>
                  <p><strong>Phone:</strong> <?php echo $hotline['phone_number']; ?></p>
                  <p><strong>Info:</strong> <?php echo $hotline['address'] ?? $hotline['notes'] ?? 'No details provided'; ?></p>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <script>
    function showCategory(categoryId, btn) {
      document.querySelectorAll('.hotline-category').forEach(div => div.style.display = 'none');
      document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));

      const section = document.getElementById('cat-' + categoryId);
      if (section) {
        section.style.display = 'block';
        if (btn) btn.classList.add('active');
        window.scrollTo({ top: section.offsetTop - 100, behavior: 'smooth' });
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
