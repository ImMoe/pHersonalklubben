<?php 
    include 'partials/header.php'; 
    if (!isset($_SESSION['user'])) {
        header("Location: admin-inlogg.php");
    }
    $check = isset($_GET["page"]) ? (int) $_GET["page"] : 0;
    $amount = 100;
    $employees = $database->paginate("anställda", $check, $amount);
?>

<div class="container mt-4">
    <div class="search">
        <form action="" method="post" class="">
            <div class="row d-flex justify-content-between align-items-center mb-3">
                <div>
                    <input type="text" name="user" class="form-control mr-2" placeholder="Sök efter anställd.." onkeyup="myFunction()" id="myInput">
                </div>
                <div class="stats">
                    <span class="bg-primary text-light p-2" id="medlemmar"><strong>(<?= $stats->stats; ?>)</strong> Aktiva Medlemmar</span>
                </div>
            </div>
        </form>
    </div>
    <div class="row">
        <table class="table table-striped" id="myTable2">
        <thead>
            <tr>
            <th scope="col">ID <ion-icon name="caret-down-outline"></ion-icon></th>
            <th scope="col" onclick="sortTable(0)">Förnamn <ion-icon name="caret-down-outline"></ion-icon></th>
            <th scope="col" onclick="sortTable(1)">Efternamn <ion-icon name="caret-down-outline"></ion-icon></th>
            <th scope="col" onclick="sortTable(2)">Institution <ion-icon name="caret-down-outline"></ion-icon></th>
            <th scope="col" onclick="sortTable(3)">Giltig från <ion-icon name="caret-down-outline"></ion-icon></th>
            <th scope="col" onclick="sortTable(4)">Giltig till <ion-icon name="caret-down-outline"></ion-icon></th>
            <th scope="col">Status</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($employees as $employee) : ?>
            <tr>
                <th scope="row"><?= $employee["id"]; ?></th>
                <td id="firstname"><?= $employee["firstname"]; ?></td>
                <td><?= $employee["lastname"]; ?></td>
                <td><?= $employee["institut"]; ?></td>
                <td><?= $employee["valid_from"]; ?></td>
                <td><?= $employee["valid_to"]; ?></td>
                <td><?php echo $employee["valid_to"] < $today ? "Utgått" : "Aktiv"; ?></td>
                <?php if ($employee["valid_to"] < $today) : ?>
                    <form action="" method="post">
                        <input name="email" type="hidden" value="<?= $employee["email"]; ?>">
                        <td><button type="submit" class="btn btn-sm btn-warning" name="renew">Förnya</button></td>
                    </form>
                <?php else: ?>
                    <form action="delete.php" method="post">
                    <input type="hidden" name="delete" value="<?= $employee['id']; ?>" />
                    <td><button class="btn btn-sm btn-danger" type="submit" name=>Radera</button></td>
                    </form>
                <?php endif; ?>
                <td></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
        <!-- <div class="ml-auto mb-4">
            <a href="?page=<?php echo isset($_GET['page']) ? ($_GET["page"] <= 0 ? 0 : (int) $_GET["page"] - $amount) : (int) $_GET["page"] - 5 ?>"><button class="btn btn-primary">Förgående</button></a>
            <a href="?page=<?php echo isset($_GET['page']) ? $_GET['page'] + $amount : 0; ?>"><button class="btn btn-primary">Nästa</button></a>
        </div> -->
    </div>
    
</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    
<?php include 'partials/footer.php'; ?>