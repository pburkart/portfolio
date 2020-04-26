<?php
    require('includes/init.php');
    require('includes/sidebar.php');


?>
<div class="container">
    <div class='add-item-container'>
      <form method="POST" enctype="multipart/form-data" class='add-item-form' action='actions/add-item-action.php'>
        <input type='text' id='title' name='title' placeholder='Title'>
        <textarea id='projectDescription' name='projectDescription' placeholder='Project Description...' style='height:175px'></textarea>
        <textarea id='technicalDescription' name='technicalDescription' placeholder='Technical Description...' style='height:175px'></textarea>
        <input type='text' id='repo' name='repo' placeholder='Repository Link'>
        <input type='text' id='tags' name='tags' placeholder='Tags'>
        Creation Date: <input type='date' id='date' name='date'>
        Project Image: <input type='file' id='projectImage' name='projectImage'>
        <input type='submit' class='submitProject' value='Add Project'>
      </form>
    </div>
  </div>
<?php
    require('includes/footer.php');
?>
