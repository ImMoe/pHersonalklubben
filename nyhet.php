<?php 
require 'partials/header.php'; 
if (isset($_GET['artikel'])) {
    $find =  $_GET['artikel'];
    $result = $database->select("news", "id", (int) $find);
}
?>

<div class="container">
    <div class="row mt-4">
        <div class="col">
            <div class="card-header"><?= $result->title; ?></div>
            <div class="card-body bg-light"><?= $result->article; ?></div>
            <div class="card-footer"><strong>Publicerad:</strong> <?= $result->created_at; ?></div>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>