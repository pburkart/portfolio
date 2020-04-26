<?php
    require('includes/init.php');
    require('includes/sidebar.php');
?>

<div class="container">
  <h2>My Projects</h2>
  <?php
    if(isset($_SESSION['username'])) {
      echo "			<div class='portfolio-item'>\n";
      echo "          <a href=''#''><img src='img/add-item.png'/></a>\n";
      echo "			</div>";
    } else {
      echo "<h3 class='noProjects'>No projects have been added yet</h3>\n";
      echo "<h4>Be sure to check back soon";
    }
  ?>

</div>

<?php
    require('includes/footer.php');
?>
