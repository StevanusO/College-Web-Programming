<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function getPublish(Request $req)
    {
        $publisher = Publisher::paginate(3);
        return view('Publisher', compact('publisher'));
    }

    public function getPublishBook(Request $req)
    {
        $publisher = Publisher::find($req->id);
        return view('DetailPublisher', compact('publisher'));
    }

    public function indexContact()
    {
        $address = 'Jalan Pembangunan Baru Raya, Kompleks Pertokoan Emerald Blok III/12, Bintaro, Tangerang Selatan, Indonesia';
        $open = '08:00 - 20:00';
        $contact = '021-08899776655';
        $email = 'happybookstore@happy.com';
        return view('Contact', compact('address', 'open', 'contact', 'email'));
    }
}
