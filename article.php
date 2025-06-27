<?php
include("connection.php");

$yearResult = executeQuery("SELECT DISTINCT year FROM article ORDER BY year DESC");
$articleResult = executeQuery("SELECT * FROM article ORDER BY year DESC, title ASC");

$articles = [];
while ($row = mysqli_fetch_assoc($articleResult)) {
  $articles[$row['year']][] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Philippine Mental Health Articles</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
</head>
<body>

<div class="container py-4">
  <div class="title text-center mb-4">
    <h2>Philippine Mental Health Articles</h2>
    <p>Select a year to browse related publications</p>
  </div>

  <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
    <?php foreach ($articles as $year => $entries) { ?>
      <button class="btn btn-outline-dark category-btn" onclick="showYear('<?php echo $year; ?>', this)">
        <?php echo htmlspecialchars($year); ?>
      </button>
    <?php } ?>
  </div>

  <div class="article-section">
    <?php foreach ($articles as $year => $entries) { ?>
      <div class="article-year" id="year-<?php echo $year; ?>" style="display: none;">
        <h4 class="text-primary text-center mb-4">Published in <?php echo htmlspecialchars($year); ?></h4>
        <div class="row g-4">
          <?php foreach ($entries as $article) { ?>
            <div class="col-md-6 col-lg-4">
              <div class="card h-100 shadow-sm">
                <div class="card-body">
                  <h5 class="card-title"><?php echo htmlspecialchars($article['title']); ?></h5>
                  <p class="card-text"><strong>Source:</strong> <?php echo htmlspecialchars($article['source']); ?></p>
                  <a href="<?php echo htmlspecialchars($article['url']); ?>" class="btn btn-sm btn-primary" target="_blank">Read Article</a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<script>
  function showYear(yearId, btn) {
    document.querySelectorAll('.article-year').forEach(div => div.style.display = 'none');
    document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));

    const section = document.getElementById('year-' + yearId);
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
