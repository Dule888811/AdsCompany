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
$users = GetAllUsers::GetUsers();
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
                <td>Title</td>
                <td>Year</td>
                <td>Genre</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            </thead>
            <tbody>
            <?php


            foreach ($movies as $movie)
            {


              echo "<tr>
                <td >  $movie[title]  </td >
                <td >  $movie[year]</td >
               
                 <td> " .   GetGenresById::GenreId($movie['genre_id'])['name']  . " </td >
                <td ><a href='edit-movie.php?id={$movie['id']}'>Edit</a></td >
                <td ><a href='delete-movie.php?id={$movie['id']}'>Delete</a></td >
                </tr>";

            }
            ?>
            </tbody>
        </table>
            </div>

       <div class="movies-add" >
            <form action="add-movie.php" name="movies" class="movieForm" method="post">
                <div class="movies">
                    <label for="title">title:
                        <input type="text"  name="title" id="title"></label>
                </div>
                <div class=" movies">

                    <p>Date: <input type="text" name="year" id="datepicker" /></p>
                </div>

                <select class="selectpicker form-control" name="genre_id" id="genre_id" data-live-search="true">
                    <option>---------Select genre----------</option>
                   <?php

                    foreach($genres as $genre)
                    {

                        ?>
                    <option value=<?php   echo $genre['id'] ?>> <?php echo $genre['name']   ?> </option>
                    <?php
                    }
                    ?>
                </select><br>
        <input type="submit"  id="formSubmit"  value="Inser movie"><br/>
        </form>
           <h3><a href='add-genres.php'>Add genre</a></h3><br><br>
           <?php
           foreach($users as $user)
           {
               if($_SESSION['username'] == $user['username'])
               {
          echo "<h3><a href='edit-users.php?username={$user['username']}'>Edit your profile</a></h3>";
               }
           }
           ?>




<div class="users-logout">
    <a href="logout.php" id="logout-form-layout">Logout</a>
</div>
<?php

}
?>








    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(function() {
            $('#datepicker').datepicker({
                changeYear: true,
                showButtonPanel: true,
                dateFormat: 'yy',
                onClose: function(dateText, inst) {
                    var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                    $(this).datepicker('setDate', new Date(year, 1));
                }
            });

            $("#datepicker").focus(function() {
                $(".ui-datepicker-month").hide();
                $(".ui-datepicker-calendar").hide();
            });
            $table.bind('repaginate', function () {
                $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
            });
            $table.trigger('repaginate');
            var numRows = $table.find('tbody tr').length;
            var numPages = Math.ceil(numRows / numPerPage);
            var $pager = $('<div class="pager"></div>');
            for (var page = 0; page < numPages; page++) {
                $('<span class="page-number"></span>').text(page + 1).bind('click', {
                    newPage: page
                }, function (event) {
                    currentPage = event.data['newPage'];
                    $table.trigger('repaginate');
                    $(this).addClass('active').siblings().removeClass('active');
                }).appendTo($pager).addClass('clickable');
            }
            if (numRows > numPerPage) {
                $pager.insertAfter($table).find('span.page-number:first').addClass('active');
            }
        });

    </script>






