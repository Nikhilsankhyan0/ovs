

        <?php
session_start();
include_once("config.php");


if ($_SESSION['key'] != "AdminKey") {
    ?>
    <script>location.assign("logout.php");</script>
    <?php
    die;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/header.css">
</head>
<style>
    .bg-blue{
    background-color:  #f39c12;
    ;
    color:aliceblue;
    height: 75px;
    /* position: fixed; */
}
</style>
<body>

    <div class="container-fluid ">
        <div class="row bg-blue">
            <div class="col-1">
                <img src="../assets/images/download1.gif" style="margin-top:2px; height:70px" width="80">

            </div>

            <div class="col-11 my-auto">
                <h3> ONLINE VOTING SYSTEM  - <small> Welcome  <?php echo $_SESSION['username']; ?></small> </h3>
            </div>
        </div>
    </div>
</body>




