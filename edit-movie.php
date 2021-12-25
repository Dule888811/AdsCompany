<?php
require_once 'core/init.php';
$genres = Genres::getAllGenres();
$movie = GetMovieById::MovieId($_GET['id']);

?>
<div class="movies-add" >
            <form action="update-movie.php" name="movies" class="movieForm" method="post">
                <div class="movies">
                    <input type="hidden" id="movieId" name="movieId" value= <?php echo $_GET['id']?>
                    <label for="title">title:
                        <input type="text"  name="title" value=" . <?php echo $movie['title']  ?>" id="title"></label>
                </div>
                <div class=" movies">

                    <p>Date: <input type="text" name="year" value=" . <?php echo $movie['year']  ?>" id="datepicker" /></p>
                </div>

                <select class="selectpicker form-control" name="genre_id" id="genre_id" data-live-search="true">
                    <option>---------Select genre----------</option>
                   <?php

                    foreach($genres as $genre)
                    {

                        ?>
                    <option value="<?php   echo $genre['id'] ?>"> <?php echo $genre['name']   ?> </option>
                    <?php
                    }
                    ?>
                </select><br><br>
        <input type="submit"    value="Edit movie"><br/>
        </form>
        </div>
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


