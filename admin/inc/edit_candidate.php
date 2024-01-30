
  <h1>Edit Candidate</h1>
  <!-- Candidate edit form -->
  <form id="editCandidateForm">
    <br>
    <label for="editCandidateName">New Candidate Name:</label>
    <input type="text" id="editCandidateName" name="editCandidateName" required>
    <br> <br>
    <label for="editCandidateDetails">Details</label>
    <input type="text" id="editCandidateDetails" name="editCandidateDetails" required>
    <br> <br>
    <button type="submit" name="updatebtn" onclick="updateCandidate()">Update Candidate</button>
  </form>

  <script>
    function updateCandidate() {
      // Perform AJAX request to update candidate using PHP

      const newCandidateName = $('editCandidateName').val();
      const newDetails = $('editCandidateDetails').val();

      $.post('update_candidate.php', { newCandidateName, newDetails }, function(update_candidate) {
        alert(response);
      });
    }
  </script>
</body>
</html>
