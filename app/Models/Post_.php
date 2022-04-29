<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = 
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Afifa Aulia Zahra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ratione quisquam repellendus alias nam rerum accusamus! Ad laborum incidunt nobis architecto est? Illo ipsa ullam facilis repellat tempora? Ipsam, sequi aliquam dignissimos odit blanditiis assumenda nihil delectus nam aliquid nisi fugiat facere sit reprehenderit sed quod aperiam esse libero dicta quibusdam culpa architecto alias repudiandae. Laboriosam perspiciatis tempora sunt obcaecati suscipit mollitia facilis vel. Neque sed dicta minus numquam quasi incidunt sit exercitationem accusantium molestiae? Labore incidunt voluptate explicabo qui!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Winda Agustin",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic non aliquam nisi ea, consequatur assumenda dicta magni, ipsa ipsum cumque nostrum debitis dolorum. Ut tenetur necessitatibus, quisquam odit aperiam, corrupti nesciunt dolor ratione error impedit dicta rem obcaecati rerum sapiente enim saepe! Ratione molestias, ex saepe facere dolores qui hic enim iure suscipit neque pariatur repudiandae laborum sed tenetur aspernatur explicabo ad, et quae quo libero. Culpa, accusantium architecto reprehenderit iure exercitationem ut quidem consequuntur consectetur esse, totam asperiores aspernatur qui recusandae fugit sapiente voluptas, vero blanditiis! Enim nulla ipsam eaque totam debitis aliquid ipsa aspernatur repudiandae eveniet dolorem? Incidunt."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
      return $posts->firstWhere('slug', '$slug');
    }
    
}
