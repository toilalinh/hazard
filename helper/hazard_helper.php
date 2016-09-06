<?php

function getThumbnailFromYoutubeLink($youtube_link){
    if(strpos($youtube_link,'embed')!==false){
        //embed link.
        $video_id = substr(str_replace('embed/','',$youtube_link),strripos($youtube_link,'embed/'));
    }else{
        $video_id = substr(str_replace('watch?v=','',$youtube_link),strripos($youtube_link,'watch?v='));
    }
    return "http://img.youtube.com/vi/$video_id/0.jpg";
}

function getVideoEmbed($youtube_link){
    if(strpos($youtube_link,'embed')!==false){
        //embed link.
        $video_id = substr(str_replace('embed/','',$youtube_link),strripos($youtube_link,'embed/'));
    }else{
        $video_id = substr(str_replace('watch?v=','',$youtube_link),strripos($youtube_link,'watch?v='));
    }
    return "https://www.youtube.com/embed/$video_id";
}