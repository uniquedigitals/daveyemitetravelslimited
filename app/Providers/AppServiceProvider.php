<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;



use App\Models\Team;
use App\Models\Service;
use App\Models\Offer;
use App\Models\Post;
use App\Models\Gallery;
use App\Models\Faqs;
use App\Models\Home;


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
        $home = Home::first();
        $services = Service::all();
        $offers = Offer::orderBy("created_at","desc")->get();
        $recent_offers = Offer::orderBy("created_at","desc")->limit(4)->get();
        $posts = Post::all();
        $teams = Team::all();
        $recent_posts = Post::where("id", ">", 0)->orderBy("created_at","desc")->limit(3)->get();
        $similar_offers = Offer::where("id",">", 0)->orderBy("created_at","desc")->limit(3)->get();
        $galleries = Gallery::all();
        $faqs = Faqs::where('id', '!=', 1)->get();



    view()->share([
        'home' => $home,
        'services' => $services,
        'offers'=> $offers,
        'recent_offers' => $recent_offers,
        'similar_offers'=> $similar_offers,
        'posts' => $posts,
        'recent_posts' => $recent_posts,
        'galleries' => $galleries,
        'teams' => $teams,
        'faqs' => $faqs
    ]);
    }


}
