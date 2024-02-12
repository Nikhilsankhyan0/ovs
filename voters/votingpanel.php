<?php 
    require_once("inc/header.php");
    require_once("inc/navigation.php");
?>
        <link rel="icon" href="../assets/images/logo/logo-white.png">


    <div class="row my-3">
        <div class="col-12">
    
<style>
        .candidate_photo{
width:80px;
height: 80px;
border:1px solid red;
border-radius: 100%;
margin-left: 15px;

}
.banner1{
    background-color: #edac42;
    
    color: black;
    
}
#nth:nth-child(odd) {
    background-color: #d3f2e4;
}
#nth:nth-child(even) {
    background-color: #e7d3eb;
}
.txt{
    opacity: 1;
}

@media  screen and (max-width:375px) {

.banner h5{
   font-size: 15px;
   padding: 0;
}
.table .txt{
   padding: 0.5px;
   font-size: 15px;
   text-align: center;
line-height: 65px;

}
tr .txt{
   margin-top: 5px;
}
.candidate_photo {
 width: 50px;
 height: 50px;
 border: 1px solid red;
 border-radius: 100%;
}
.btn{
   font-size: 10px;
 margin-top: 5px;
 margin-left: 25px;

}


}
@media  screen and (min-width:375px) {

 .banner h5{
    font-size: 15px;
    padding: 0;
 }
.table .txt{
    padding: 0.5px;
    font-size: 15px;
    text-align: center;
line-height: 65px;

}
tr .txt{
    margin-top: 5px;
}
.candidate_photo {
  width: 50px;
  height: 50px;
  border: 1px solid red;
  border-radius: 100%;
}
.btn{
    font-size: 10px;
  margin-top: 5px;
  margin-left: 25px;

}


}

@media  screen and (min-width:420px) {
    .banner h5{
    font-size: 17px;
    padding: 0;
 }
.table .txt{
    padding: 0.5px;
    font-size: 16px;
    text-align: center;
line-height: 70px;

}
tr .txt{
    margin-top: 5px;
}
.candidate_photo {
  width: 60px;
  height: 60px;
  border: 1px solid red;
  border-radius: 100%;
}
.btn{
    font-size: 12px;
  margin-top: 5px;
  margin-left: 25px;

}
}
@media  screen and (min-width:550px) {

.banner h5{
   font-size: 18px;
   padding: 0;
}
.table .txt{
   padding: 0.5px;
   font-size: 18px;
   text-align: center;
line-height: 70px;

}
tr .txt{
   margin-top: 5px;
}
.candidate_photo {
 width: 70px;
 height: 70px;
 border: 1px solid red;
 border-radius: 100%;
margin-left: 25px;

}
.btn{
   font-size: 15px;
 margin-top: 5px;
 margin-left: 25px;

}


}
@media  screen and (min-width:900px) {

.banner h5{
   font-size: 20px;
   padding: 0;
}
.table .txt{
   padding: 0.5px;
   font-size: 20px;
   text-align: center;
line-height: 65px;

}
tr .txt{
   margin-top: 5px;
}
.candidate_photo {
 width: 90px;
 height: 90px;
 border: 1px solid red;
 border-radius: 100%;

}
.btn{
   font-size: 20px;
 margin-top: 5px;
 margin-left: 25px;

}


}
@media (min-width:1280px){
    .img img {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 230px;
            width: 230px;
        }
        h1{
            font-size: 35px ;
        }

}

</style>
            <?php 
                $fetchingActiveElections = mysqli_query($db, "SELECT * FROM elections WHERE status = 'Active'") or die(mysqli_error($db));
                
                $totalActiveElections = mysqli_num_rows($fetchingActiveElections);

                if($totalActiveElections > 0) 
                {
                    while($data = mysqli_fetch_assoc($fetchingActiveElections))
                    {
                        $election_id = $data['id'];
                        $election_topic = $data['election_topic'];    
                ?>
                <style>
                    .banner{
                        background-color: #f39c12;

                    }
                </style>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="7" class=" banner text-white"><h5> ELECTION TOPIC: <?php echo strtoupper($election_topic); ?></h5></th>
                                </tr>
                                <tr class="banner1" >
                                    <th class='txt' > Photo </th>
                                    <th class='txt' > Name </th>

                                    <th class='txt' >  Details </th>
                                    <th class='txt' >  Votes </th>
                                    <th class='txt' > Action </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $fetchingCandidates = mysqli_query($db, "SELECT * FROM candidate_details WHERE election_id = '". $election_id ."'") or die(mysqli_error($db));

                                while($candidateData = mysqli_fetch_assoc($fetchingCandidates))
                                {
                                    $candidate_id = $candidateData['id'];
                                    $candidate_photo = $candidateData['candidate_photo'];

                                    // Fetching Candidate Votes 
                                    // $fetchingVotes = mysqli_query($db, "SELECT * FROM votings WHERE candidate_id = '". $candidate_id . "'") or die(mysqli_error($db));
                                    // $totalVotes = mysqli_num_rows($fetchingVotes);
                                    $fetchingData = mysqli_query($db, "SELECT * FROM candidate_details") or die(mysqli_error($db)); 


                                    $fetchingVotes = mysqli_query($db, "SELECT * FROM votings WHERE candidate_id = '". $candidate_id . "'") or die(mysqli_error($db));
                                    $totalVotes = mysqli_num_rows($fetchingVotes);
                            ?>
                                    <tr id="nth">
                                        <td  > <center><img src="<?php echo $candidate_photo; ?>" class="candidate_photo"></center> </td>
                                        <td class='txt'><?php echo "<b>" . $candidateData['candidate_name'] . "<br />" ?></td>
                                        <td class='txt'><?php echo  $candidateData['candidate_details'] ?></td>
                                        <td class='txt'><?php echo $totalVotes; ?></td>
                                        <td class="txt" >
                                    <?php
                                            $checkIfVoteCasted = mysqli_query($db, "SELECT * FROM votings WHERE voters_id = '". $_SESSION['user_id'] ."' AND election_id = '". $election_id ."'") or die(mysqli_error($db));    
                                            $isVoteCasted = mysqli_num_rows($checkIfVoteCasted);

                                            if($isVoteCasted > 0)
                                            {
                                                $voteCastedData = mysqli_fetch_assoc($checkIfVoteCasted);
                                                $voteCastedToCandidate = $voteCastedData['candidate_id'];

                                                if($voteCastedToCandidate == $candidate_id)
                                                {
                                    ?>

                                                    <img src="../assets/images/logo/vote.png" width="100px;">
                                    <?php
                                                }
                                            }else {
                                    ?>
                                                <button class="btn btn-md btn-success" onclick="CastVote(<?php echo $election_id; ?>, <?php echo $candidate_id; ?>, <?php echo $_SESSION['user_id']; ?>)">Vote </button>
                                    <?php
                                            }

                                            
                                    ?>


                                    </td>
                                    </tr>
                            <?php
                                }
                            ?>
                            </tbody>

                        </table>
                <?php
                    
                    }
                }else {
                    echo "No any active election.";
                }
            ?>

            
        </div>
    </div>


<script>
    const CastVote = (election_id, customer_id, voters_id) => 
    {
        $.ajax({
            type: "POST", 
            url: "inc/ajaxCalls.php",
            data: "e_id=" + election_id + "&c_id=" + customer_id + "&v_id=" + voters_id, 
            success: function(response) {
                
                if(response == "Success")
                {
                    location.assign("votingpanel.php?voteCasted=1");
                }else {
                    location.assign("votingpanel.php?voteNotCasted=1");
                }
            }
        });
    }

</script>



<?php
    require_once("inc/footer.php");
?>