<?php

namespace App\Models;

class home
{
    private static $home_post =[
        [
            "tittle" => "Danau Malang Indah",
            "slug" => "home_1",
            "penulis" => "Joko Andre",
            "isi" =>  "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores odio dolore et fugit cupiditate mollitia libero, consectetur modi, quae distinctio explicabo deserunt voluptatum necessitatibus. Alias voluptatum atque quibusdam animi nostrum quod! Sit molestias nostrum illo dolor dolorum? Alias cum consectetur minima eum. Minus, a ad dignissimos autem corrupti, provident, asperiores nesciunt voluptatibus sapiente recusandae est tenetur molestiae. Aperiam illo quo, suscipit quibusdam quam accusantium quisquam pariatur? Accusantium, ab soluta iusto explicabo distinctio nostrum cumque voluptatum sed assumenda. Pariatur repellat laborum sint itaque reiciendis reprehenderit esse tenetur tempore cum! Quisquam culpa magni inventore veniam itaque maxime sed accusantium distinctio, minus voluptate quas enim dolore rerum ea quam quod error odio et nihil minima laboriosam? Quibusdam, nemo maiores. Quo perferendis beatae aliquid odit tempore? Eveniet unde aperiam ratione fugit modi quasi soluta quibusdam aliquid. Sed eius itaque dolore a dignissimos totam delectus quaerat, omnis fuga error voluptate aliquam magni explicabo officiis fugit vitae dicta exercitationem. Vitae illum, natus expedita magni vero asperiores debitis qui odit consequuntur perspiciatis molestiae sequi animi. Accusantium ab illo fugit modi iure recusandae, soluta, iusto architecto repudiandae aspernatur aliquid deserunt ullam eaque quam veniam voluptatem cum quia nemo inventore error adipisci consequatur temporibus possimus! Incidunt maiores quod ab.",
            "rating" => "4",
            "image" => "danau.png" 
        ],
        [
            "tittle" => "Air Terjun Malang Epic",
            "slug" => "home_2",
            "penulis" => "Ahmad Husein",
            "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores odio dolore et fugit cupiditate mollitia libero, consectetur modi, quae distinctio explicabo deserunt voluptatum necessitatibus. Alias voluptatum atque quibusdam animi nostrum quod! Sit molestias nostrum illo dolor dolorum? Alias cum consectetur minima eum. Minus, a ad dignissimos autem corrupti, provident, asperiores nesciunt voluptatibus sapiente recusandae est tenetur molestiae. Aperiam illo quo, suscipit quibusdam quam accusantium quisquam pariatur? Accusantium, ab soluta iusto explicabo distinctio nostrum cumque voluptatum sed assumenda. Pariatur repellat laborum sint itaque reiciendis reprehenderit esse tenetur tempore cum! Quisquam culpa magni inventore veniam itaque maxime sed accusantium distinctio, minus voluptate quas enim dolore rerum ea quam quod error odio et nihil minima laboriosam? Quibusdam, nemo maiores. Quo perferendis beatae aliquid odit tempore? Eveniet unde aperiam ratione fugit modi quasi soluta quibusdam aliquid. Sed eius itaque dolore a dignissimos totam delectus quaerat, omnis fuga error voluptate aliquam magni explicabo officiis fugit vitae dicta exercitationem. Vitae illum, natus expedita magni vero asperiores debitis qui odit consequuntur perspiciatis molestiae sequi animi. Accusantium ab illo fugit modi iure recusandae, soluta, iusto architecto repudiandae aspernatur aliquid deserunt ullam eaque quam veniam voluptatem cum quia nemo inventore error adipisci consequatur temporibus possimus! Incidunt maiores quod ab.",
            "rating" => "3",
            "image" => "air_terjun.png"
        ],
        [
            "tittle" => "Kuliner di Gunung Malang",
            "slug" => "home_3",
            "penulis" => "Andi Alibibi",
            "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores odio dolore et fugit cupiditate mollitia libero, consectetur modi, quae distinctio explicabo deserunt voluptatum necessitatibus. Alias voluptatum atque quibusdam animi nostrum quod! Sit molestias nostrum illo dolor dolorum? Alias cum consectetur minima eum. Minus, a ad dignissimos autem corrupti, provident, asperiores nesciunt voluptatibus sapiente recusandae est tenetur molestiae. Aperiam illo quo, suscipit quibusdam quam accusantium quisquam pariatur? Accusantium, ab soluta iusto explicabo distinctio nostrum cumque voluptatum sed assumenda. Pariatur repellat laborum sint itaque reiciendis reprehenderit esse tenetur tempore cum! Quisquam culpa magni inventore veniam itaque maxime sed accusantium distinctio, minus voluptate quas enim dolore rerum ea quam quod error odio et nihil minima laboriosam? Quibusdam, nemo maiores. Quo perferendis beatae aliquid odit tempore? Eveniet unde aperiam ratione fugit modi quasi soluta quibusdam aliquid. Sed eius itaque dolore a dignissimos totam delectus quaerat, omnis fuga error voluptate aliquam magni explicabo officiis fugit vitae dicta exercitationem. Vitae illum, natus expedita magni vero asperiores debitis qui odit consequuntur perspiciatis molestiae sequi animi. Accusantium ab illo fugit modi iure recusandae, soluta, iusto architecto repudiandae aspernatur aliquid deserunt ullam eaque quam veniam voluptatem cum quia nemo inventore error adipisci consequatur temporibus possimus! Incidunt maiores quod ab.",
            "rating" => "5",
            "image" => "gunung.png"
        ]
    ];


    public static function all()
    {
        return collect(self::$home_post);
    }

    public static function find($slug)
    {
        $post = static::all();
        return $post -> firstwhere ('slug',$slug);
    }

}
