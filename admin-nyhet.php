<?php include 'partials/header.php'; ?>

<div class="container">
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-header">Lägg till nyhet</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Titel..">
                        </div>
                        <div class="form-group">
                        <textarea name="article" cols="30" rows="10"></textarea>
                        <script>
                        tinymce.init({selector:'textarea'});
                        </script>
                        </div>
                        <button type="submit" name="skapaArtikel" class="btn btn-primary">Skicka</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>