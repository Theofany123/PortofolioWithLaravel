<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function home()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'E-Commerce Platform',
                'description' => 'Full-featured online store with payment integration and admin dashboard.',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Tailwind'],
                'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&h=300&fit=crop',
                'category' => 'Web Development'
            ],
            [
                'id' => 2,
                'title' => 'Task Management App',
                'description' => 'Collaborative task management tool with real-time updates.',
                'technologies' => ['Laravel', 'Livewire', 'MySQL'],
                'image' => 'https://images.unsplash.com/photo-1611224923853-80b023f02d71?w=400&h=300&fit=crop',
                'category' => 'Productivity'
            ],
            [
                'id' => 3,
                'title' => 'API Service',
                'description' => 'RESTful API service with authentication and rate limiting.',
                'technologies' => ['Laravel', 'Sanctum', 'Redis'],
                'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=400&h=300&fit=crop',
                'category' => 'Backend'
            ],
            [
                'id' => 4,
                'title' => 'Mobile Banking App',
                'description' => 'Secure mobile banking application with biometric authentication.',
                'technologies' => ['React Native', 'Node.js', 'MongoDB'],
                'image' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=400&h=300&fit=crop',
                'category' => 'Mobile'
            ],
            [
                'id' => 5,
                'title' => 'Analytics Dashboard',
                'description' => 'Real-time analytics dashboard with interactive charts.',
                'technologies' => ['Vue.js', 'D3.js', 'Laravel'],
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=300&fit=crop',
                'category' => 'Data Visualization'
            ],
            [
                'id' => 6,
                'title' => 'Social Media Platform',
                'description' => 'Social networking platform with real-time messaging.',
                'technologies' => ['Laravel', 'WebSocket', 'Vue.js'],
                'image' => 'https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?w=400&h=300&fit=crop',
                'category' => 'Social'
            ]
        ];

        return view('home', compact('projects'));
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        $posts = [
            [
                'title' => 'Project Laravel Pertama Saya',
                'excerpt' => 'Pengalaman membangun aplikasi web pertama dengan Laravel dan tantangan yang dihadapi...',
                'date' => '15 Oktober 2024',
                'read_time' => '5 min read'
            ],
            [
                'title' => 'Tips Mengoptimalkan Performa Laravel',
                'excerpt' => 'Beberapa teknik untuk meningkatkan kecepatan aplikasi Laravel dan best practices...',
                'date' => '10 Oktober 2024',
                'read_time' => '7 min read'
            ],
            [
                'title' => 'Mengenal Blade Template Engine',
                'excerpt' => 'Blade adalah template engine powerful yang disediakan Laravel dengan fitur yang menarik...',
                'date' => '5 Oktober 2024',
                'read_time' => '4 min read'
            ]
        ];

        return view('blog', compact('posts'));
    }

    public function contact()
    {
        return view('contact');
    }
}