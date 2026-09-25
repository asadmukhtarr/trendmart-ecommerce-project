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
            if($duration > 6000){
                header('Location:actions/logout.php');
            }
        }   
        include('actions/cn.php'); // connection ..
        $query  = "SELECT * FROM `users` ORDER BY id DESC";
        $result = mysqli_query($cn,$query) or die('cant run query'); 
        $row = mysqli_num_rows($result);

    }
?>
<div class="container">
    <h2>
        Welcome <?php echo $_SESSION['name']; ?>
    </h2>
        <?php if(!empty($_GET['error'])) {?>
            <div class="alert bg-danger">
                <span class="text-white"><b><?php echo $_GET['error']; ?></b></span>
            </div>
        <?php } ?>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-users"></i> Users
        </div>
        <table class="table table-bordered table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php 
                if($row > 0){ 
                while($rows = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $rows['id']; ?></td>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['email']; ?></td>
                <td>
                    <a href="actions/delete.php?id=<?php echo $rows['id']; ?>">
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </a>
                    <button class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>
                </td>
            </tr>
            <?php  
            }} else { 
            ?>
            <tr>
                <td colspan="4" align="center">
                    No Record Found
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
<?php include('includes/footer.php'); // footer ... ?>

