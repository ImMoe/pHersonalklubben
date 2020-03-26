<?php 
    include 'partials/header.php'; 
    if (isset($_SESSION['user'])) {
        header("Location: admin-home.php");
    }
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">Logga in</div>
                <div class="card-body">
                    <?php if (@$message) : ?>
                        <div class="alert alert-danger" role="alert"><?= $message; ?></div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="admin_name" class="form-control" placeholder="Admin namn">
                        </div>
                        <div class="form-group">
                            <input type="password" name="admin_pass" class="form-control" placeholder="Admin lösenord">
                        </div>
                        <button type="submit" name="login" class="btn btn-primary">Logga in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>