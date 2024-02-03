

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
    <style>
   
    .bg-blue{
    background-color:  #f39c12;
    color:aliceblue;
    height: 75px;
    /* position: fixed; */
}
@media screen and (max-width:375px){
    h3{
        font-size: 20px;
    }
    .col-1{
        display: none;
    }
}
@media screen and (min-width:376px){
    h3{
        font-size: 22px;
    }
    .col-1 img{
        height: 50px;
        width: 60px;
    }
.text{
    margin-left: 30px;
}
}
@media screen and (min-width:630px){
    h3{
        font-size: 26px;
    }
    .col-1 img{
        height: 70px;
        width: 80px;
    }

}
</style>
</head>
<body>



    <div class="container-fluid ">
        <div class="row bg-blue">
            <div class="col-1">
                <img src="../assets/images/logo/download1.gif" style="margin-top:2px; height:70px" width="80">

            </div>

            <div class="col-10 text my-auto ">
                <h3> DemocraLink  - <small> Welcome  <?php echo $_SESSION['username']; ?></small> </h3>
            </div>
        </div>
    </div>
</body>



