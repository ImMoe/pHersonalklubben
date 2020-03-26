<?php require 'partials/header.php'; ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><strong>Välkommen till pHersonalklubben Väst</strong></h1>
    <p class="lead" style = "width:65%"><strong>Klubben erbjuder aktiviteter för hälsa, trivsel och underhållning och alla anställda vid Högskolan Väst är välkomna att teckna medlemskap.</strong></p>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3">
            <p class="text-center" id="nyhetsflöde">Nyhetsflödet</p>
        </div>
        <div class="col-sm-12 col-md-9 col-lg-9">
        <?php foreach ($articles as $article) : ?>
            <div class="col mb-3">
                    <div class="card">
                    <div class="card-header"><?= $article["title"]; ?></div>
                    <div class="card-body" id="article">
                        <?php 
                            echo substrwords($article['article'], 400, '<a href="nyhet.php?artikel='.$article['id'].'" class="pl-1">Läs mer..</a>');
                        ?>
                    </div>
                    <div class="card-footer">
                        <strong>Publicerad:</strong> <?= $article["created_at"]; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>