<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "judul pertama",
            "slug" => "judul-pertama",
            "author" => "R J Tumbal",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, pariatur? Eius porro 
                     ipsum magni deserunt veniam qui ratione, atque molestiae non fugit. Architecto facilis aliquam consequatur
                      animi harum nostrum libero."
        ],
        [
                    "title" => "judul post reinhard",
                    "slug" => "judul-post-kedua",
                    "author" => "Jackson Reinhard",
                    "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam repellendus accusantium a, 
                    suscipit amet aperiam eligendi enim facilis cumque at recusandae, voluptatibus voluptatum in illum laborum.
                     Natus et praesentium enim eaque illo labore nihil autem? Ullam sed fugiat minima sunt libero sequi est ex deserunt, 
                     tempora vel quaerat eligendi, officia temporibus? Enim, illo dignissimos? Itaque, quo adipisci eligendi fugiat 
                     accusantium pariatur obcaecati molestias vero quasi sed a error dolorem dolor. Unde consectetur aperiam ipsam 
                     eaque perspiciatis tempore voluptas placeat iusto quisquam doloremque maxime cum dignissimos aliquid incidunt 
                     molestiae amet deleniti architecto nihil sit quibusdam, laborum perferendis quae? Suscipit, fugit laboriosam!"
                ],
        ];
    

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
            // $post = [];
            // foreach($posts as $p){
            //     if($p["slug"] === $slug){
            //         $post = $p;
            //     }
            // }

            return $posts->firstWhere('slug', $slug);
        }
}
