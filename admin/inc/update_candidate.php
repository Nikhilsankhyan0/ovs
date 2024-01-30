<?php
include_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $newCandidateName = $_POST["newCandidateName"];
  $newDetails = $_POST["editCandidateDetails"];

  // Perform SQL UPDATE query
//   $sql = "UPDATE candidates SET candidate_name = ?, party = ? WHERE id = ?";

 $sql= "UPDATE `candidate_details` SET `candidate_name` = '$newCandidateName', `candidate_details` = '$editCandidateDetails' WHERE ` `id` = $election_id ";


//  $sql= "UPDATE candidate_details
// SET candidate_name = 'new_candidate_name', candidate_details = 'editCandidateDetails'
// WHERE candidate_name = 'candidate_name' AND candidate_details = 'candidate_details' ";


  $stmt = $pdo->prepare($sql);
  $stmt->execute([$newCandidateName, $newDetails]);

  // Check if the query was successful
  if ($stmt->rowCount() > 0) {
    echo "Candidate information updated successfully";
  } else {
    echo "Failed to update candidate information";
  }
}
?>
