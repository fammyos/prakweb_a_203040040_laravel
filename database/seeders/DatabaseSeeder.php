<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Fammy Oktariva S',
            'username' => 'fammyos',
            'email' => 'fammyoktrva@gmail.com',
            'password' => bcrypt('123')
        ]);

        User::factory(3)->create();

        // User::create([
        //     'name' => 'Esya Titis Pangesti',
        //     'email' => 'esyatitis@gmail.com',
        //     'password' => bcrypt('12')
        // ]);
        


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-Design'
        ]);


        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis officia quia veritatis odio exercitationem magni inventore animi suscipit ipsam repellat, voluptatibus quaerat, deserunt ea placeat debitis similique consequuntur tenetur autem consectetur accusantium rem porro sint culpa modi? Nobis praesentium corrupti dolore tenetur nam aut eum error odio, qui ea assumenda? Vel aperiam mollitia deleniti laborum architecto earum quos exercitationem molestiae, provident quas nobis officia ad et cum nisi labore laboriosam alias veritatis repellat fuga similique eveniet ducimus temporibus?.</p><p>Voluptatem ex eveniet perferendis, dolor ducimus nobis recusandae libero expedita delectus totam ipsum illum veniam quo assumenda.</p><p>Voluptas dignissimos voluptatibus praesentium delectus eligendi velit vel. In provident neque delectus ipsam omnis at unde porro dolore exercitationem, sed excepturi non. Doloribus, vitae? Inventore consequuntur voluptate non, omnis consequatur aperiam earum, perspiciatis, quos doloribus expedita distinctio eligendi odit repellat sint libero velit quidem exercitationem natus atque necessitatibus officia? Dolores eligendi laboriosam ullam laudantium qui.',
        //     'category_id' => 1,
        //     'user_id' => 1    
        // ]);

        
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis officia quia veritatis odio exercitationem magni inventore animi suscipit ipsam repellat, voluptatibus quaerat, deserunt ea placeat debitis similique consequuntur tenetur autem consectetur accusantium rem porro sint culpa modi? Nobis praesentium corrupti dolore tenetur nam aut eum error odio, qui ea assumenda? Vel aperiam mollitia deleniti laborum architecto earum quos exercitationem molestiae, provident quas nobis officia ad et cum nisi labore laboriosam alias veritatis repellat fuga similique eveniet ducimus temporibus?.</p><p>Voluptatem ex eveniet perferendis, dolor ducimus nobis recusandae libero expedita delectus totam ipsum illum veniam quo assumenda.</p><p>Voluptas dignissimos voluptatibus praesentium delectus eligendi velit vel. In provident neque delectus ipsam omnis at unde porro dolore exercitationem, sed excepturi non. Doloribus, vitae? Inventore consequuntur voluptate non, omnis consequatur aperiam earum, perspiciatis, quos doloribus expedita distinctio eligendi odit repellat sint libero velit quidem exercitationem natus atque necessitatibus officia? Dolores eligendi laboriosam ullam laudantium qui.',
        //     'category_id' => 1,
        //     'user_id' => 1    
        // ]);

        
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis officia quia veritatis odio exercitationem magni inventore animi suscipit ipsam repellat, voluptatibus quaerat, deserunt ea placeat debitis similique consequuntur tenetur autem consectetur accusantium rem porro sint culpa modi? Nobis praesentium corrupti dolore tenetur nam aut eum error odio, qui ea assumenda? Vel aperiam mollitia deleniti laborum architecto earum quos exercitationem molestiae, provident quas nobis officia ad et cum nisi labore laboriosam alias veritatis repellat fuga similique eveniet ducimus temporibus?.</p><p>Voluptatem ex eveniet perferendis, dolor ducimus nobis recusandae libero expedita delectus totam ipsum illum veniam quo assumenda.</p><p>Voluptas dignissimos voluptatibus praesentium delectus eligendi velit vel. In provident neque delectus ipsam omnis at unde porro dolore exercitationem, sed excepturi non. Doloribus, vitae? Inventore consequuntur voluptate non, omnis consequatur aperiam earum, perspiciatis, quos doloribus expedita distinctio eligendi odit repellat sint libero velit quidem exercitationem natus atque necessitatibus officia? Dolores eligendi laboriosam ullam laudantium qui.',
        //     'category_id' => 2,
        //     'user_id' => 1    
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis officia quia veritatis odio exercitationem magni inventore animi suscipit ipsam repellat, voluptatibus quaerat, deserunt ea placeat debitis similique consequuntur tenetur autem consectetur accusantium rem porro sint culpa modi? Nobis praesentium corrupti dolore tenetur nam aut eum error odio, qui ea assumenda? Vel aperiam mollitia deleniti laborum architecto earum quos exercitationem molestiae, provident quas nobis officia ad et cum nisi labore laboriosam alias veritatis repellat fuga similique eveniet ducimus temporibus?.</p><p>Voluptatem ex eveniet perferendis, dolor ducimus nobis recusandae libero expedita delectus totam ipsum illum veniam quo assumenda.</p><p>Voluptas dignissimos voluptatibus praesentium delectus eligendi velit vel. In provident neque delectus ipsam omnis at unde porro dolore exercitationem, sed excepturi non. Doloribus, vitae? Inventore consequuntur voluptate non, omnis consequatur aperiam earum, perspiciatis, quos doloribus expedita distinctio eligendi odit repellat sint libero velit quidem exercitationem natus atque necessitatibus officia? Dolores eligendi laboriosam ullam laudantium qui.',
        //     'category_id' => 2,
        //     'user_id' => 2    
        // ]);



    }
}
