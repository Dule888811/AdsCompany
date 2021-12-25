<?php
require_once 'core/init.php';
?>

<head>
    <title>Index</title>
    <link rel='stylesheet' type="text/css" href="css/stlye.css">

</head>
<?php
$movies =GetMovies::getAllUMovies();
$genres = Genres::getAllGenres();
if(!isset( $_SESSION['username']))
{
    ?>
    <div class="users-auth">
        <a href="login.php" id="login-form-layout">Login</a>


        <a href="register.php" id="register-form-layout">Register</a>

    </div>
    <?php
}elseif(isset($_SESSION['first_name']))

{
    ?>

    <div class="paginated-table">
        <table class="paginated">
            <thead>
            <tr>
                <td>Name</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            </thead>
            <tbody>
            <?php


            foreach ($genres as $genre)
            {

                echo "<tr>
                <td >  $genre[name]  </td >
                <td ><a href='edit-genre.php?id={$genre['id']}'>Edit</a></td >
                <td ><a href='delete-genre.php?id={$genre['id']}'>Delete</a></td >
                </tr>";

            }
            ?>
            </tbody>
        </table>
    </div><br><br>

    <div class="genre-add">
        <form action="add-genre.php" name="name" class="genresForm" method="post">
            <div class="movies">
                <label for="name">name:
                    <input type="text"  name="name" id="name"></label>
                <input type="submit" value="Enter new genre">
        </form>
    </div>





    <div class="users-logout">
        <a href="logout.php" id="logout-form-layout">Logout</a>
    </div>
    <?php

}
?>

