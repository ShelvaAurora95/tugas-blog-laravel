<?php

namespace App\Models;

class Post
{
   private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Shelva Aurora Maharani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem earum sapiente ullam commodi, non consequatur veritatis nobis nemo magni deserunt ratione tempora alias rem similique illo aliquam repudiandae, omnis et architecto quisquam odit praesentium eveniet quidem? Obcaecati officia adipisci accusantium ab enim exercitationem magnam, velit, natus iusto fugiat, voluptatem ea illum beatae eligendi suscipit vel? Minima, ipsam voluptate. Aperiam ipsam delectus eaque explicabo nam quidem sit animi recusandae porro iste laboriosam, neque quod, veniam nisi quas, rerum ab tempore unde?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Shelva Aurora Maharani",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, fuga quaerat explicabo, rerum, aliquid autem voluptates obcaecati praesentium quibusdam laborum neque amet numquam rem sequi ipsa! Deleniti fugiat incidunt voluptates nihil earum vel laborum possimus, ratione eos mollitia quis neque repellendus fugit eius eum. Beatae voluptas corporis mollitia vero sed aut est natus, libero officia aliquam suscipit accusamus vitae voluptatum veritatis fugiat quidem! Repudiandae, maxime veniam nesciunt qui laudantium quis corrupti excepturi, ut dolore libero distinctio aliquam accusantium placeat itaque! Consectetur aut odio voluptate? A repellendus dolorem, impedit necessitatibus repudiandae accusamus. Similique nostrum repudiandae amet iure nisi. Veritatis, quos alias."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts); 
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
