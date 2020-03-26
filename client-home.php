<?php 
    include 'partials/header.php'; 
    $user = $database->select("anställda", "email", $_SESSION["employee"]);
?>
    <div class="row">
        <!-- Kortet v1 -->
        <div class="col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-3 kort mx-auto py-4 px-4">
            <img class="d-block mx-auto" src="images/logo.png" width="200">
            <div>
                    <p><?= $user->firstname . " " . $user->lastname; ?></p>
                    <div class="d-flex justify-content-between">
                        <p><?= $user->institut; ?></p>
                        <p>Giltig till: <?= $user->valid_to; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'partials/footer.php'; ?>