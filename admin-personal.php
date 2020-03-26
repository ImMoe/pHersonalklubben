<?php include 'partials/header.php'; ?>
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-12 col-md-8 col-lg-5 mx-auto mb-4">
                <div class="col">
                    <div class="card">
                        <div class="card-header">Ny anställd</div>
                        <div class="card-body">
                           <?php if (@$message) : ?>
                            <div class="alert alert-info" role="alert"><?= $message; ?></div>
                           <?php endif; ?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="firstname">Förnamn</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Efternamn</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-post</label>
                                    <input type="text" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Lösenord</label>
                                    <input type="password" name="password" id="password" class="form-control" value="start123">
                                    <small class="form-text text-muted">Standard lösenord: start123</small>
                                </div>

                                <div class="form-group">
                                    <label for="institution">Institution</label>
                                    <select name="institut" id="" class="form-control" required>
                                    <option value="standard">Välj institut</option>
                                    <option value="Ekonomi och IT">Ekonomi och IT</option>
                                    <option value="Hälsovetenskap">Hälsovetenskap</option>
                                    <option value="Ingenjörsvetenskap">Ingenjörsvetenskap</option>
                                    <option value="Individ och Samhälle">Individ och Samhälle</option>
                                    <option value="Studentstöd och Bibliotek">Studentstöd och Bibliotek</option>
                                    <option value="Förvaltningen">Förvaltningen</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="valid">Giltigt till</label>
                                    <input type="date" name="giltighet" id="valid" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="addEmployee">Lägg till</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'partials/footer.php'; ?>