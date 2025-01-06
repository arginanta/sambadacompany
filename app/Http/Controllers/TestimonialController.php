<?php

namespace App\Http\Controllers;

use App\Models\ProjectClient;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::oderByDesc('id')->pagination(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengambil data klien dari tabel project_clients
        // Data diurutkan berdasarkan kolom 'id' secara menurun (data terbaru terlebih dahulu)
        // Hanya 10 data per halaman dengan mekanisme pagination
        $clients = ProjectClient::orderByDesc('id')->paginate(10);

        // Mengirimkan data klien ke view 'admin.testimonials.create'
        // Variabel $clients akan tersedia di view dengan nama yang sama
        return view('admin.testimonials.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
