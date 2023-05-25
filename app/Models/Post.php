<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hasan Nur Wakhid",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus corporis obcaecati atque, temporibus ipsam minus? Esse fugiat minus dicta. Amet esse voluptatem tempora tenetur a dolor nihil eius eum optio."
            
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Imam Bonjol",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus corporis obcaecati atque, temporibus ipsam minus? Esse fugiat minus dicta. Amet esse voluptatem tempora tenetur a dolor nihil eius eum optio."
            
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug',$slug);
    }

}
