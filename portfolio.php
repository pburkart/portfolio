<?php
    require('includes/init.php');
    require('includes/sidebar.php');
?>

<div class="container">
  <div class="portfolio-container">
    <h2>My Projects</h2>
    <?php
      if(isset($_SESSION['username'])) {
        $sql = "SELECT * FROM projects";
        if($result = $mysqli->query($sql)){
          while($row = $result->fetch_row()){
            echo "			<div class='portfolio-item'>\n";
            echo "        <a href='portfolio_item.php?id={$row[0]}'><img src='img/{$row[0]}.png'/></a>\n";
            echo "        <h3 class='item-title'>{$row[1]}</h3>";
            echo "      </div>";
          }
        } else {
          header("Location: about.php");
        }
        echo "			<div class='portfolio-item'>\n";
        echo "          <a href='add_project.php'><img src='img/add-item.png'/></a>\n";
        echo "          <h3 class='item-title'>Add Project</h3>\n";
        echo "			</div>";
      } else {
        $sql = "SELECT * FROM projects";
        if($result = $mysqli->query($sql)){
          while($row = $result->fetch_row()){
            echo "			<div class='portfolio-item'>\n";
            echo "        <a href='portfolio_item.php?id={$row[0]}'><img src='img/{$row[0]}.png'/></a>\n";
            echo "        <h3 class='item-title'>{$row[1]}</h3>";
            echo "      </div>";
          }
        }
      }
    ?>
  </div>
</div>

<?php
    require('includes/footer.php');
?>
