<?php

session_start();

/**
 * When instance of object is created
 * it auto includes it. It'll be registred as
 * _AUTOLOAD implementation.
 */
function autoload_class($class) {
    include 'class/'.$class.".php";
}

spl_autoload_register("autoload_class");

// Create connection to database.
$database = new database("localhost", "klubben", "root", "");
$database->makeConnection();

$today = date("Y-m-d");
// Used for errors
$message = "";




// Förnya medlemskapet 1 år
if (isset($_POST["renew"])) {
    $nextYear = date("Y") + 1;
    $remaining = date("m-d");
    $email = $_POST["email"];
    $database->update("anställda", "valid_to", $nextYear . "-" . $remaining, $email);
}

// Incoming client login
if (isset($_POST["client"])){
    $email = $_POST["email"];
    $password = sha1($_POST["password"]);
    $result = $database->select("anställda", "email", $email);
    if ($password == $result->password) {
        $_SESSION["employee"] = $email;
        unset($_SESSION["user"]);
        header("Location: client-home.php");
    } else {
        $message = "Ogiltig e-post eller lösenord.";
    }
}

// Incoming login
if (isset($_POST['login'])) {
    $email = $_POST['admin_name'];
    $password = $_POST['admin_pass'];

    $statement = $database->select("medlemmar", "email", $email);
    if (@$statement->password == sha1($password)) {
        $_SESSION['user'] = $email;
        unset($_SESSION["employee"]);
        header("Location: home.php");
    } else {
        $message = "Email eller lösenord är ogiltigt.";
    }
}

// Incoming password change
if (isset($_POST['changePassword'])) {
    $old = sha1($_POST['oldPassword']);
    $new = sha1($_POST['newPassword']);

    $query = $database->select("medlemmar", "password", $old);
    
    if ($query) {
        $database->update("medlemmar", "password", $new, $old);
        header("Location: /logout.php");
    } else {
        $message = "Ogiltigt lösenord, vänligen försök igen.";
    }
}

if (isset($_POST['changepass'])) {
    $old = sha1($_POST['oldPassword']);
    $new = sha1($_POST['newPassword']);

    $query = $database->select("anställda", "email", $_SESSION["employee"]);
    $database->update("anställda", "password", $new, $_SESSION["employee"]);
    header("Location: logout.php");
}

// Incoming new article
if (isset($_POST['skapaArtikel'])) {
    $title = $_POST['title'];
    $article = $_POST['article'];
    $database->insert("INSERT INTO news (title, article, created_at) VALUES (:title, :article, :created)", [
        "title" => $title,
        "article" => $article,
        "created" => $today
    ]);
}

// Incoming new "employee"
if (isset($_POST['addEmployee'])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $giltighet = $_POST["giltighet"];
    $email = $_POST["email"];
    $password = sha1($_POST["password"]);
    $institut = $_POST["institut"];
    
    // Insert to the database
    $database->insert("INSERT INTO anställda (firstname, lastname, valid_from, valid_to, email, password, institut) VALUES(:f, :l, :vf, :vt, :em, :pass, :inst)", [
        ":f" => $firstname,
        ":l" => $lastname,
        ":vf" => $today,
        ":vt" => $giltighet,
        ":em" => $email,
        ":pass" => $password,
        ":inst" => $institut
    ]);

    $message = "$firstname $lastname har lagts till!";
}


$articles = $database->selectAll("news");
// $employees = $database->selectAll("anställda", "ASC");
$stats = $database->count("anställda", $today);



function substrwords($text, $maxchar, $end='') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i  = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output;
}