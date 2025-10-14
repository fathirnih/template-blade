<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'Mengenal Laravel Framework',
                'content' => 'Laravel adalah framework PHP yang powerful dan elegan untuk pengembangan aplikasi web modern. Framework ini memiliki fitur seperti routing, middleware, migration, dan Eloquent ORM.',
                'author' => 'King Admin',
                'date' => '2025-10-10',
                'image' => 'blog1.jpg'
            ],
            [
                'title' => 'Tips Membuat Website Modern',
                'content' => 'Desain web modern menekankan pada tampilan minimalis, navigasi yang mudah, serta kompatibilitas dengan berbagai perangkat. Gunakan warna netral dan fokus pada pengalaman pengguna.',
                'author' => 'King Admin',
                'date' => '2025-10-11',
                'image' => 'blog2.jpg'
            ],
            [
                'title' => 'Panduan CRUD di Laravel',
                'content' => 'Fitur CRUD (Create, Read, Update, Delete) adalah dasar dari hampir semua aplikasi. Laravel memudahkan pembuatan CRUD dengan Eloquent ORM dan route resource.',
                'author' => 'King Admin',
                'date' => '2025-10-12',
                'image' => 'blog3.jpg'
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}

