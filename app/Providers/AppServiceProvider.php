<?php

namespace App\Providers;

use App\Models\Destination;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator as PaginationPaginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        PaginationPaginator::useBootstrap();
        $settings = Setting::checkSettings();

        $destinations = Destination::with('children')->where('parent_id' , 0)->orWhere('parent_id' , null)->get();
        $destinations_footer = Destination::with('children')->where('parent_id' ,'!=', 0)->get();
        $destinations_with_posts = Destination::with(['posts'=>function ($q){
            $q->limit(2);
        }])->get();

        $lastFivePosts = Post::with('destination','admin')->orderBy('id','DESC')->limit(6)->get();
        $posts = Post::with('destination','admin')->inRandomOrder()->limit(8)->get();
        View()->share([
            'setting'=>$settings,
            'destinations'=>$destinations,
            'destinations_footer'=>$destinations_footer,
            'destinations_with_posts'=>$destinations_with_posts,
            'lastFivePosts'=>$lastFivePosts,
            'posts'=>$posts
        ]);
    }
}
