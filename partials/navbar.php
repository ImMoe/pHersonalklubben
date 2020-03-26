<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="/"><img src="/images/logo.png" alt="Logga" width="170"></a>
        </li>
      </ul>
        <div class="navbar-nav">
        <?php if (!@$_SESSION["employee"]) : ?>
        <li class="nav-item">
          <a href="client-login.php" class="nav-link">Anställd Inlogg</a>
        </li>
        <?php else: ?>
        <li class="nav-item">
          <a href="client-home.php" class="nav-link">Mitt kort</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.hv.se/medarbetarportalen/min-anstallning/personalforeningar/phersonalklubben-vast/">
            pHersonalklubben
          </a>
        </li>
        <li class="nav-item">
          <a href="client-konto.php" class="nav-link">Konto</a>
        </li>
        <li class="nav-item">
          <a href="logout.php" class="nav-link">Logga ut</a>
        </li>
        <?php endif; ?>
        <?php if (!isset($_SESSION['user'])) : ?>
        <li class="nav-item">
          <a href="admin-inlogg.php" class="nav-link">Admin Inlogg</a>
        </li>
        <?php else: ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Admin
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/admin-home.php">Kontrollpanelen</a>
            <a class="dropdown-item" href="/admin-personal.php">Lägg till anställd</a>
            <a class="dropdown-item" href="admin-nyhet.php">Lägg till nyhet</a>
            <a class="dropdown-item" href="/admin-konto.php">Mitt konto</a>
            <a class="dropdown-item" href="/logout.php">Logga ut</a>
          </div>
        </li>
        <?php endif; ?>
        </div>
    </div>    
  </div>
</nav>