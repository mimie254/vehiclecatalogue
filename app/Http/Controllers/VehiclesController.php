<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\VehiclesRequest;
//use App\Http\Resources\AgentsResource;
use App\Http\Resources\VehiclesResource;
use App\Models\Vehicle;
//use App\Http\Requests\StoreVehicleRequest;
//use App\Http\Requests\UpdateVehicleRequest;




class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return VehiclesResource::collection(Vehicle::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $faker = \Faker\Factory::create(1);
        $vehicle = Vehicle::create([
            'name'=> $faker->name,
            'model'=> $faker->words(2, true),
            'make'=> $faker->word,
            'description'=> $faker->sentence,
            'year_of_manufacture'=> $faker->year,
        ]);
        return new VehiclesResource($vehicle);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        return new VehiclesResource($vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VehiclesRequest $request, Vehicle $vehicle)
    {
        $vehicle->update([
            'name'=> $request->input('name'),
            'make'=> $request->input('make'),
            'model'=> $request->input('model'),
            'description'=> $request->input('description'),
            'year_of_manufacture'=> $request->input('year_of_manufacture')
        ]);

        return new VehiclesResource($vehicle);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return response(null, 204);
    }
}
