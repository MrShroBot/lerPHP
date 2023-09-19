<?php include __DIR__ . '/pars/header.php'; ?>

  <div class="container">
    <div class="columns">
      <?php foreach($articles as $article): ?>
      <div class="column is-3">
        <div class="card">
          <header class="card-header">
            <p class="card-header-title">
              <?=$article->title?>
            </p>
          </header>
          <div class="card-content">
            <div class="content">
              <!-- Bruh ma olen väga väsinud. Ma vaatasin filmisarja liig hilja öösse ja sain 6h magada -->
              <?=$article->body?>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

<?php include __DIR__ . '/pars/footer.php'; ?>