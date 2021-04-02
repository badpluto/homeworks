<?php
require_once 'data.php';
?>

<!doctype html>
     <body lang="en">
     <head>
           <meta charset="UTF-8">
           <title>Books</title>
     </head>
     <body>

</body>

<?php
if (!empty($publicationsBooks)){
    echo '<div>';
    foreach ($publicationsBooks as $publicationsBook){
        $publicationsBook->printInfo();
    }
    echo '</div>';
}
?>
</body>
</html>