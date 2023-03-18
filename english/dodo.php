if(isset($_POST['logout'])){
session_destroy();
unset($_SESSION['username']);
headrer('location: login.php');
}