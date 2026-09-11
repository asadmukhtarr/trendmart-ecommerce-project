<?php 
    include('includes/header.php'); //  
    //
    session_start(); 
    if(empty($_SESSION['name'])){
        header('Location:index.php');
    }
?>
<h2>Welcome <?php echo $_SESSION['name']; ?></h2>
<?php include('includes/footer.php'); // footer ... ?>

