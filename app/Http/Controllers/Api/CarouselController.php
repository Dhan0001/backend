<?php

namespace App\Http\Controllers\Api;

use App\Models\Carousel;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarouselRequest;
use Illuminate\Http\Request;


class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Carousel::all();
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarouselRequest $request)
    {
        $validated = $request->validated();

        $carousel = Carousel::create($validated);

        return $carousel;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Carousel::findorfail($id);
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(CarouselRequest $request, string $id)
    {
        $validated = $request->validated();

        $carousel = Carousel::findorfail($id);

        $carousel -> update($validated);

        return $carousel;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carousel = Carousel::findorfail($id);
 
        $carousel->delete();

        return $carousel;
    }
}
