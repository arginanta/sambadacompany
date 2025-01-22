<?php

namespace App\Http\Controllers;

use App\Models\OurPrinciple;
use App\Models\CompanyStatistic;
use App\Models\HeroSection;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\Testimonial;

class FrontController extends Controller
{
    //
    public function index()
    {
        $hero_sections = HeroSection::orderByDesc('id')->take(1)->get();
        $principles = OurPrinciple::take(4)->get();
        $statistics = CompanyStatistic::take(4)->get();
        $products = Product::take(3)->get();
        $teams = OurTeam::take(7)->get();
        $testimonials = Testimonial::take(5)->get();
        return view('front.index', compact('hero_sections', 'principles', 'statistics', 'products', 'teams', 'testimonials'));
    }
}
