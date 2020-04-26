<?php
    require('../includes/init.php');

    $title = $_POST['title'];
    $project_description = $_POST['projectDescription'];
    $technical_description = $_POST['technicalDescription'];
    $repo = $_POST['repo'];
    $tags = $_POST['tags'];
    $creation_date = $_POST['date'];

    $query = $mysqli -> query("SELECT * FROM projects");
    $total_rows = $query->num_rows+1;

    $target_dir = "../img/{$total_rows}.png";

    move_uploaded_file($_FILES['projectImage']['tmp_name'], $target_dir);

    $sql = "INSERT INTO projects (name, app_description, tech_description, tags, repo_link, creation_date) VALUES ('{$title}', '{$project_description}', '{$technical_description}', '{$tags}', '{$repo}', '{$creation_date}')";
    $sql = htmlspecialchars($sql);

    $result = $mysqli -> query($sql);
    header("Location: ../portfolio.php");
?>
