<?php
$popular_movies = get_popular_movies();

?>

<div>
<h2>Top 20 Popular Movies</h2>
<ul>
<?php foreach($popular_movies['results'] as $movie){ ?>
    <li>
        
            <h3> <?php print $movie['title']?> </h3>
            <img src='https://image.tmdb.org/t/p/w300<?php print $movie['poster_path']?>' >
            <img src='https://image.tmdb.org/t/p/h100<?php print $movie['backdrop_path']?>' >
        
    </li>
<?php }?>
</ul>
<!-- // hw carousel -->
</div>