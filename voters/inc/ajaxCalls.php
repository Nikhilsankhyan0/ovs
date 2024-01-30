<?php 
    require_once("../../admin/inc/config.php");
    

    if(isset($_POST['e_id']) AND isset($_POST['c_id']) AND isset($_POST['v_id']))
    {
        date_default_timezone_set('Asia/Kolkata');
        $vote_date = date("Y-m-d");
        $vote_time = date("H:i:s a");

        mysqli_query($db, "INSERT INTO votings(election_id, voters_id, candidate_id, vote_date, vote_time) VALUES('". $_POST['e_id'] ."', '". $_POST['v_id'] ."','". $_POST['c_id'] ."','". $vote_date ."','". $vote_time ."')") or die(mysqli_error($db));

        echo "Success";
    }

?>