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
      height: 50px;
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


    .col-12 {
  flex: 0 0   66%;}

    .row {
        display: flex;
        /* Additional styles for your row container */
    }

    /* Your styles for the divs within the row */
    .row>div {
        /* Your styles for the divs */
    }

    /* Media query for screens with a width less than 600px */
    @media screen and (max-width: 880px) {

        /* Change the flex-direction to make them stack in a column */
        .row {
            flex-direction: column;
        }
    }

@media  screen and (max-width:394px) {

.table .txt{
   padding: 0.5px;
   font-size: 15px;
   text-align: center;
line-height: 65px;
width: 100vw;

}
.table #txt2{
   padding: 0.5px;
   font-size: 15px;
   text-align: center;
line-height: 50px;
width: 100vw;
display: none;

}
tr .txt{
   margin-top: 5px;
}

.btn{
   font-size: 10px;
 margin-top: 5px;
 margin-left: 25px;

}

.row h3 {
            font-size: 18px;
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
    width: 100%;
}

thead{
    height: 20px;
}

}
@media  screen and (max-width:412px) {

    .table .txt{
   padding: 0.5px;
   font-size: 15px;
   text-align: center;
line-height: 65px;
width: 100vw;

}
.table #txt2{
   padding: 0.5px;
   font-size: 15px;
   text-align: center;
line-height: 65px;
width: 100vw;
display: none;

}
tr .txt{
   margin-top: 5px;
}

.btn{
   font-size: 10px;
 margin-top: 5px;
 margin-left: 25px;

}

.row h3 {
            font-size: 18px;
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
    width: 100%;
}

thead{
    height: 20px;
}

} 
@media  screen and (max-width:1200px) {

.table .txt{
   padding: 0.5px;
   font-size: 15px;
   text-align: center;
line-height: 60px;
width: 100vw;

}
.table #txt2{
   padding: 0.5px;
   font-size: 15px;
   text-align: center;
line-height: 65px;
width: 100vw;
display: none;

}
tr .txt{
   margin-top: 5px;
}

.btn{
   font-size: 15px;
 margin-top: 5px;
 margin-left: 25px;

}

.form-group{
    width: 286px;
    margin-left: 5%;
    height: ;
}
.btn{
    margin-left: 5%;

}
.table{
    width: 100%;
}

thead{
    height: 20px;
} }
@media  screen and (max-width:670px) {

.table .txt{
   padding: 0.5px;
   font-size: 16px;
   text-align: center;
line-height: 35px;
width: 100vw;

}
.table #txt2{
   padding: 0.5px;
   font-size: 15px;
   text-align: center;
line-height: 65px;
width: 100vw;
display: none;

}
tr .txt{
   margin-top: 5px;
}

.btn{
   font-size: 10px;
 margin-top: 5px;
 margin-left: 25px;

}


}

@media  screen and (min-width:805px) {

.table .txt{
   padding: 0.5px;
   font-size: 15px;
   text-align: center;
line-height: 40px;
/* width: 100vw; */

}


tr .txt{
   margin-top: 5px;
}
.btn{
   font-size: 15px;
 margin-top: 5px;
 margin-left: 25px;

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
                <input type="number" name="number_of_candidates" placeholder="No of Candidates"   class="form-control"
                    required />
            </div>
            <div class="form-group">
                <input type="text" onfocus="this.type='Date'" name="starting_date"   placeholder="Starting Date"
                    class="form-control" required />
            </div>
            <div class="form-group">
                <input type="text" onfocus="this.type='Date'" name="ending_date"   placeholder="Ending Date"
                    class="form-control" required />
            </div>
            <input type="submit" value="Add Election" name="addElectionBtn" class="btn btn-success" />
        </form>
    </div>


    <div class=" col-8 col-12 div2">
        <h3>Upcoming Elections</h3>
        <table class="table">
            <thead>
                <tr class="banner  ">
                    <th class="txt" scope="col">S.No</th>
                    <th class="txt" scope="col">Election Name</th>
                    <th class="txt"  id="txt2" scope="col"> Candidates</th>
                    <th class="txt"  id="txt2" scope="col">Starting Date</th>
                    <th class="txt" id="txt2"  scope="col">Ending Date</th>
                    <th class="txt" scope="col">Status </th>
                    <th class="txt" scope="col">Action </th>

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
                            <td  class="txt" >
                                <?php echo $sno++; ?>
                            </td>
                            <td class="txt" >
                                <?php echo $row['election_topic']; ?>
                            </td>
                            <td class="txt"  id="txt2">
                                <?php echo $row['no_of_candidates']; ?>
                            </td>
                            <td class="txt"  id="txt2">
                                <?php echo $row['starting_date']; ?>
                            </td>
                            <td class="txt"  id="txt2">
                                <?php echo $row['ending_date']; ?>
                            </td>
                            <td class="txt" >
                                <?php echo $row['status']; ?>
                            </td> 
                            <td class="txt">
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