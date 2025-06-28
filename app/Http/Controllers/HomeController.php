<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Team;
use App\Models\Photo;
use App\Models\About;


class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'artikels' => Blog::where('status', true)->orderBy('id', 'desc')->limit(3)->get(), // Menampilkan artikel aktif
            'photos' => Photo::where('status', true)->orderBy('id', 'desc')->limit(4)->get(), // Menampilkan foto aktif
            'teams' => Team::where('status', true)->orderBy('id', 'desc')->limit(4)->get(), // Menampilkan foto aktif
            'abouts' => About::all(), // Menampilkan foto aktif
        ]);
    }

    //     public function blog()
    // {
    //     return view('blog.blog', [
    //         'artikels' => Blog::where('status', true)->orderBy('id', 'desc')->get(),
    //     ]);
    // }
    public function blog()
{
    return view('blog.blog', [
        'artikels' => Blog::where('status', true)
                         ->orderBy('id', 'desc')
                         ->paginate(6), // 6 item per halaman
    ]);
}
        public function team()
    {
        return view('pages.team', [
            'teams' => Team::where('status', true)->orderBy('id', 'desc')->get(),
        ]);
    }

    public function detail($slug)
    {
        $artikel = Blog::where('slug',$slug)->first();
        // return view('blog.blogDetails',[
        //     'artikel' => $artikel
        // ]);
        // Ambil 4 team lainnya secara acak (atau sesuai kebutuhan)
        $otherBlogs = Blog::where('slug', '!=', $slug)
        ->inRandomOrder()
        ->limit(4)
        ->get();

        return view('blog.blogDetails', [
            'artikel' => $artikel,
            'otherBlog' => $otherBlogs
        ]);
    }
    // public function blog_detail()
    // {

    //     return view('blog.blogDetails',);
    // }

        public function blog_standard()
    {
        return view('blog.blogStandard',[

        ]);
    }

    public function services ()
    {
        return view('services/services');
    }

    public function airTransport ()
    {
        return view('services/airTransport');
    }
    public function cargoTransport ()
    {
        return view('services/cargoTransport');
    }
    public function oceanFreight ()
    {
        return view('services/oceanFreight');
    }
    public function railTransport ()
    {
        return view('services/railTransport');
    }
    public function roadTransport ()
    {
        return view('services/roadTransport');
    }

    public function warehousing ()
    {
        return view('services/warehousing');
    }
        public function contact()
    {
        return view('blog.contact', [
            // 'artikels' => Blog::where('status', true)->orderBy('id', 'desc')->get(),
        ]);
    }

    public function detail_team($slug)
    {
        $team = Team::where('slug', $slug)->first();

        // Ambil 4 team lainnya secara acak (atau sesuai kebutuhan)
        $otherTeams = Team::where('slug', '!=', $slug)
                        ->inRandomOrder()
                        ->limit(4)
                        ->get();

        return view('pages.teamDetails', [
            'team' => $team,
            'otherTeams' => $otherTeams
        ]);
    }

    public function photo()
    {
        return view('pages.photo', [
            'photos' => Photo::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(6),
        ]);
    }

    public function about()
    {
        return view('services.about', [
            'abouts' => About::all()
            ]);
    }
}