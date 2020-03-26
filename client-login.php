<?php include "partials/header.php"; ?>


<div class="container">
    <div class="row mt-4">
        <div class="col-sm-12 col-md-5 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header">Logga in</div>
                <div class="card-body">
                <?php if (@$message) : ?>
                    <div class="alert alert-danger" role="alert"><?= $message; ?></div>
                <?php endif; ?>
                <form action="" method="POST">  
                    <div class="form-group">
                        <label for="email">E-post</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Lösenord</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <button class="btn btn-primary" type="submit" name="client">Logga in</button>
                </form>
                </div>

            </div>
        </div>
    </div>
</div>


<?php include "partials/footer.php"; ?>
