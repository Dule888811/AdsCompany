<?php
require_once 'core/init.php';
$genre = GetGenresById::GenreId($_GET['id']);

?>
<head>
    <title>Index</title>
    <link rel='stylesheet' type="text/css" href="css/stlye.css">

</head>
<div class="movies-add">
    <form action="update-genre.php"  method="post">
        <div class="movies">
            <input type="hidden" id="genreId" name="genreId" value=<?php echo $genre["id"]?>

            <label for="name">Name:
            <input type="text"  name="name" value="<?php echo $genre['name']?>" id="title"></label>
        </div>
        <br><br>
        <input type="submit"    value="Edit ganre"><br/>
    </form>
</div>
<?php  echo "</br></br><a href='index.php'>Back to admin panel</a>"; ?>
