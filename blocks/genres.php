<?php
$genres = get_genres_movies();

?>

<div>
<h2>All Genres</h2>
<ul>
<?php foreach($genres['genres'] as $genre){ ?>
    <li>        
            <a href="#"> <?php print $genre['name']?> </a>             
        
    </li>
<?php }?>
</ul>
<!-- // hw carousel -->
</div>