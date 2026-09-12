<?php 
    include('includes/header.php'); //  
    //
    // session_start(); 
    if(empty($_SESSION['name'])){
        header('Location:index.php');
    } else {
        if(!empty($_SESSION['last_activity'])){
            $last_acitivity = $_SESSION['last_activity'];
            $duration = time() - $last_acitivity;
            if($duration > 60){
                header('Location:actions/logout.php');
            }
        }   
    }
?>
<h2>
    Welcome <?php echo $_SESSION['name'].'-'.$_SESSION['last_activity']; ?>
    <?php echo $duration; ?>
</h2>
<?php include('includes/footer.php'); // footer ... ?>

