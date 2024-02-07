<?php
if (isset($_GET['added'])) {
    ?>
    <div class="alert alert-success my-3" role="alert">
        Election has been added successfully.
    </div>
<?php
} else if (isset($_GET['delete_id'])) {
    $d_id = $_GET['delete_id'];
    mysqli_query($db, "DELETE FROM elections WHERE id = '" . $d_id . "'") or die(mysqli_error($db));
    ?>
        <div class="alert alert-danger my-3" role="alert">
            Election has been deleted successfully!
        </div>
    <?php

}
?>


<style>
    /* Your default styling for larger screens */
    thead {
        background-color: #f39c12;
      overflow: hidden;
      height: 75px;
      width: 100%;
    }
    thead th {
            font-size: 15px;
            margin-top: 20px;
            /* float: left; */
            /* display: block; */
            color: black;
            text-align: center;
            margin-right: 20px;
           
            text-decoration:none;
            width: 10%;
          
            /* Equal width for buttons */
        }


    .col-4 {
  flex: 0 0 33.33%;}

    .row {
        display: flex;
        /* Additional styles for your row container */
    }

    /* Your styles for the divs within the row */
    .row>div {
        /* Your styles for the divs */
    }

    /* Media query for screens with a width less than 600px */
    @media screen and (max-width: 600px) {

        /* Change the flex-direction to make them stack in a column */
        .row {
            flex-direction: column;
        }
    }



    @media screen and (max-width:375px) {

        .row h3 {
            font-size: 13px;
        }
        .div1{
            width: 70%;
        }
.form-group{
    width: 330px;
    margin-left: 5%;
    height: ;
}
.btn{
    margin-left: 5%;

}
.table{
    width: 10%;
}

thead{
    height: 20px;
}
.th,.td{
    font-size: 10px;
    margin-left: 0;
}
    }
    @media screen and (max-width:450px) {

.row h3 {
    font-size: 22px;
}

}

    @media screen and (min-width:450px) {

        .row h3 {
            font-size: 23px;
        }
    }
        @media screen and (max-width:500px) {
            .row h3 {
            font-size: 15px;
        }
        .col-4{
            flex:  0 0 50%;
        }
        }

    

    @media screen and (min-width:900px) {

        .row h3 {
            font-size: 30px;
        }

    }

    @media screen and (min-width:765px) {

        .row h3 {
            font-size: 27px;
        }



    }

    @media (min-width:1280px) {

        h3 {
            font-size: 35px;
        }

    }

    .col-4 {
  flex: 0 0 33.33%; /* Default width for larger screens, assuming 3 columns in a row */
  /* Other styles for col-4 */
}

@media screen and (max-width: 600px) {
  .col-4 {
    flex: 0 0 50%; /* Adjust the width to 50% for smaller screens */
  }
}
</style>
<link rel="icon" href="../assets/images/logo/logo-white.png">


<div class="row   my-3">
    <div class="col-4  div1">
        <h3>Add New Election</h3>
        <form method="POST">
            <div class="form-group">
                <input type="text" name="election_topic" placeholder="Election Topic" class="form-control" required />
            </div>
            <div class="form-group">
                <input type="number" name="number_of_candidates" placeholder="No of Candidates" class="form-control"
                    required />
            </div>
            <div class="form-group">
                <input type="text" onfocus="this.type='Date'" name="starting_date" placeholder="Starting Date"
                    class="form-control" required />
            </div>
            <div class="form-group">
                <input type="text" onfocus="this.type='Date'" name="ending_date" placeholder="Ending Date"
                    class="form-control" required />
            </div>
            <input type="submit" value="Add Election" name="addElectionBtn" class="btn btn-success" />
        </form>
    </div>


    <div class="col-8 div2">
        <h3>Upcoming Elections</h3>
        <table class="table">
            <thead>
                <tr>
                    <th class="th" scope="col">S.No</th>
                    <th class="th" scope="col">Election Name</th>
                    <th class="th" scope="col"># Candidates</th>
                    <th class="th" scope="col">Starting Date</th>
                    <th class="th" scope="col">Ending Date</th>
                    <th class="th" scope="col">Status </th>
                    <th class="th" scope="col">Action </th>

                </tr>
            </thead>
            <tbody>
                <?php
                $fetchingData = mysqli_query($db, "SELECT * FROM elections") or die(mysqli_error($db));
                $isAnyElectionAdded = mysqli_num_rows($fetchingData);

                if ($isAnyElectionAdded > 0) {
                    $sno = 1;
                    while ($row = mysqli_fetch_assoc($fetchingData)) {
                        $election_id = $row['id'];
                        // $delete_id = $row['id'];
                        ?>
                        <tr>
                            <td  class="td" >
                                <?php echo $sno++; ?>
                            </td>
                            <td class="td" >
                                <?php echo $row['election_topic']; ?>
                            </td>
                            <td class="td" >
                                <?php echo $row['no_of_candidates']; ?>
                            </td>
                            <td class="td" >
                                <?php echo $row['starting_date']; ?>
                            </td>
                            <td class="td" >
                                <?php echo $row['ending_date']; ?>
                            </td>
                            <td class="td" >
                                <?php echo $row['status']; ?>
                            </td> 
                            <td>
                                <!-- <a href="#" class="btn btn-sm btn-warning"> Edit </a> -->
                                <button class="btn btn-sm btn-danger" onclick="DeleteData(<?php echo $election_id; ?>)"> Delete
                                </button>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="7"> No any election is added yet. </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


<script>
    const DeleteData = (e_id) => {
        let c = confirm("Are you really want to delete it?");

        if (c == true) {
            location.assign("index.php?addElectionPage=1&delete_id=" + e_id);
        }
    }
</script>

<?php

if (isset($_POST['addElectionBtn'])) {
    $election_topic = mysqli_real_escape_string($db, $_POST['election_topic']);
    $number_of_candidates = mysqli_real_escape_string($db, $_POST['number_of_candidates']);
    $starting_date = mysqli_real_escape_string($db, $_POST['starting_date']);
    $ending_date = mysqli_real_escape_string($db, $_POST['ending_date']);
    $inserted_by = $_SESSION['username'];
    $inserted_on = date("Y-m-d");


    $date1 = date_create($inserted_on);
    $date2 = date_create($starting_date);
    $diff = date_diff($date1, $date2);


    if ((int) $diff->format("%R%a") > 0) {
        $status = "InActive";
    } else {
        $status = "Active";
    }

    // inserting into db
    mysqli_query($db, "INSERT INTO elections(election_topic, no_of_candidates, starting_date, ending_date, status, inserted_by, inserted_on) VALUES('" . $election_topic . "', '" . $number_of_candidates . "', '" . $starting_date . "', '" . $ending_date . "', '" . $status . "', '" . $inserted_by . "', '" . $inserted_on . "')") or die(mysqli_error($db));

    ?>
    <script> location.assign("index.php?addElectionPage=1&added=1"); </script>
    <?php

}

// require_once("footer.php");




?>