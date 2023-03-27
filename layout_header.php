<!DOCTYPE html>
<html lang="es">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php echo $page_title; ?></title>
 
    <!-- Latest compiled and minified Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
  
    <!-- our custom CSS -->
    <link rel="stylesheet" href="libs/css/custom.css" />
  
</head>
<body>
 
    <!-- container -->
    <div class="container">
 
        <?php
        // show page header
        echo "<div class='page-header'>
                <h1>{$page_title}</h1>
            </div>";    
          ?>
    
<?php    /*
  echo "<div>";
    echo "<a href='#' class='btn btn-primary pull-right'>";
        echo "<span class='glyphicon glyphicon-plus'></span> Inicio";
    echo "</a>";
echo "</div>";
          echo "<div>";
    echo "<a href='libros.php' class='btn btn-primary pull-right'>";
        echo "<span class='glyphicon glyphicon-plus'></span> Libros";
    echo "</a>";
echo "</div>";
          echo "<div>";
    echo "<a href='revistas.php' class='btn btn-primary pull-right'>";
        echo "<span class='glyphicon glyphicon-plus'></span> Revistas";
    echo "</a>";
echo "</div>";
        echo "<div>";
    echo "<a href='autores.php' class='btn btn-primary pull-right'>";
        echo "<span class='glyphicon glyphicon-plus'></span> Autores";
    echo "</a>";
echo "</div>";
        echo "<div>";
    echo "<a href='doi.php' class='btn btn-primary pull-right'>";
        echo "<span class='glyphicon glyphicon-plus'></span> DOI";
    echo "</a>";
echo "</div>";
        */
        ?>
        <html>

<a class="btn btn-primary" href="http://localhost:8888/inventario/CRUD2" role="button">Inicio</a>
            <a class="btn btn-primary" href="libros.php" role="button">Libros</a>
            <a class="btn btn-primary" href="revistas.php" role="button">Revistas</a>
            <a class="btn btn-primary" href="autores.php" role="button">Autores</a>
            <a class="btn btn-primary" href="doi.php" role="button">DOI</a>
            
        </html>
        
        
        