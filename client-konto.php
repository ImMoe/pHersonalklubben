<?php include 'partials/header.php'; ?>

<div class="container">
    <div class="row mt-4">
        <div class="card p-4 mx-auto">
            <?php if (@$message) : ?>
            <div class="alert alert-danger" role="alert"><?= $message; ?></div>
            <?php endif; ?>
            <div class="col-12">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="password" name="oldPassword" class="form-control" placeholder="Nuvarande lösenord">
                    </div>
                    <div class="form-group">
                        <input type="password" name="newPassword" class="form-control" placeholder="Nytt lösenord ">
                    </div>
                    <button type="submit" class="btn btn-primary" name="changepass">Uppdatera</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>