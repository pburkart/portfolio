<?php
    require('includes/init.php');
    require('includes/sidebar.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM projects WHERE id={$id}";
    $result = $mysqli->query($sql);
    $row = $result->fetch_row();
?>
<div class='container'>
  <h1 class='header'><?php echo $row[1] ?></h1>

  <p class='app_description'>
    <?php
      echo "<img src='img/{$row[0]}.png'>\n";
      echo $row[2];
    ?>
  </p>

  <p class='tech_description'>
    <?php
      echo $row[3];
    ?>
  </p>

  GitHub Repository: <?php echo $row[5]; ?>

  <p class='tags'>Tags: <?php echo $row[4];?><p>
  <a class='view-project' href="<?php echo $row[5]; ?>"><input type='submit' value='View Project'></a>
</div>
<?php
    require('includes/footer.php');
?>
