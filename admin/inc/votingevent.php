<style>
.candidate_photo{
width:80px;
height: 80px;
border:1px solid red;
border-radius: 100%;

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
line-height: 65px;
width: 100vw;
/* display: none; */

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
   font-size: 5px;
 margin-top: 5px;
 margin-left: 25px;

}}

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
line-height: 65px;
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

    thead{
        background-color: #f39c12;
    }
</style>
<link rel="icon" href="../assets/images/logo/logo-white.png">



<div class="row my-3">  
    <div class="col-12">
        <h3>Elections</h3>
        <table class="table">
            <thead>
                <tr class="banner">
                    <th class="txt" scope="col">S.No</th>
                    <th class="txt" scope="col">Election Name</th>
                    <th class="txt" id="txt2" scope="col">Candidates</th>
                    <th class="txt"  id="txt2" scope="col">Starting Date</th>
                    <th class="txt"  id="txt2"scope="col">Ending Date</th>
                    <th class="txt" scope="col">Status </th>
                    <th class="txt" scope="col">Action </th>
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                    $fetchingData = mysqli_query($db, "SELECT * FROM elections") or die(mysqli_error($db)); 
                    $isAnyElectionAdded = mysqli_num_rows($fetchingData);

                    if($isAnyElectionAdded > 0)
                    {
                        $sno = 1;
                        while($row = mysqli_fetch_assoc($fetchingData))
                        {
                            $election_id = $row['id'];
                            
                ?>
                            <tr class="banner" >
                                <td class="txt"><?php echo $sno++; ?></td>
                                <td class="txt"><?php echo $row['election_topic']; ?></td>
                                <td class="txt" id="txt2"><?php echo $row['no_of_candidates']; ?></td>
                            <td class="txt" id="txt2"><?php echo $row['starting_date']; ?></td>
                                <td class="txt" id="txt2"><?php echo $row['ending_date']; ?></td>
                                <td class="txt"><?php echo $row['status']; ?></td>
                                <td class="txt"> 
                                    <a href="index.php?viewResult=<?php echo $election_id; ?>" class="btn btn-sm btn-success"> View Results </a>
                                </td>
                            </tr>
                <?php
                        }
                    }else {
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



<?php

// require_once("footer.php");
?>