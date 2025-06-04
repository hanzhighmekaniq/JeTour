<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use App\Models\Destination;
use App\Models\Lodging;
use App\Models\Transportation;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $destinations = Destination::inRandomOrder()->limit(4)->get();
        $jelajah = Destination::inRandomOrder()->limit(1)->get();
        $transport = Transportation::inRandomOrder()->limit(3)->get();
        return view('index', compact('destinations', 'jelajah', 'transport'));
    }
    public function indexdestination()
    {
        $destinations = Destination::paginate(8);
        $lodgings = Lodging::paginate(6);
        $culinarys = Culinary::inRandomOrder()->limit(6)->get();
        return view('pages.destination', compact('destinations', 'lodgings', 'culinarys'));
    }


    public function indexoverview($name)
    {
        $destinations = Destination::where('name', $name)
            ->with('coments.user')
            ->firstOrFail();

        $facilities = explode(',', $destinations->fasility);
        $multiple = json_decode($destinations->multiple_images, true);
        $comments = $destinations->coments;
        // Tambahkan rata-rata rating untuk ditampilkan di view
        $averageRating = $comments->avg('rating');

        return view('pages.overview', compact(
            'destinations',
            'facilities',
            'multiple',
            'comments',
            'averageRating'
        ));
    }
    public function indexticketing($name)
    {
        // Ambil destination beserta tiket-tiket yang terkait
        $destination = Destination::where('name', $name)->with('ticket')->firstOrFail();

        // Kirim data destination dan tiket ke view
        return view('pages.ticketing', compact('destination'));
    }
    public function indexlocation($name)
    {
        // Ambil destination beserta tiket-tiket yang terkait
        $destination = Destination::where('name', $name)->firstOrFail();
        $lodgings = Lodging::paginate(3);
        // Kirim data destination dan tiket ke view
        return view('pages.location', compact('destination', 'lodgings'));
    }
    public function indextransportation($name)
    {
        $destination = Destination::where('name', $name)->firstOrFail();
        $transportation = Transportation::paginate(20);

        return view('pages.transportation', compact('transportation', 'destination'));
    }


    public function indexfood($name)
    {
        // Ambil destination beserta kuliner yang terkait
        $destination = Destination::where('name', $name)->firstOrFail();

        // Ambil seluruh kuliner yang terkait dengan destination
        $foods = $destination->culinary()->paginate(3); // kalau mau paginasi
        // atau tanpa paginate kalau mau semua sekaligus:
        // $foods = $destination->foods;

        // Kirim data ke view
        return view('pages.food', compact('destination', 'foods'));
    }
}
