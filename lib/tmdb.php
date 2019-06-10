<?php
function get_popular_movies(){
    if(!file_exists('data_cache/popular.ser')){
        $response = file_get_contents(
            TMDB_API_URL_v3 . "movie/popular?api_key=" . TMDB_API_KEY_v3
        );
        $data=json_decode($response, true);
        // var_dump($data);
        file_put_contents('data_cache/popular.ser',serialize($data));
    }else{
        $data=unserialize(file_get_contents('data_cache/popular.ser'));
    }
        return $data;
}

function get_genres_movies(){
    if(!file_exists('data_cache/genres.ser')){
        $response = file_get_contents(
            TMDB_API_URL_v3 . "genre/movie/list?api_key=" . TMDB_API_KEY_v3
        );
        $data=json_decode($response, true);
        // var_dump($data);
        file_put_contents('data_cache/genres.ser',serialize($data));
    }else{
        $data=unserialize(file_get_contents('data_cache/genres.ser'));
    }
        return $data;

}


?>
