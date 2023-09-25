<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use Illuminate\Http\Request;
use App\Models\Agent;
use App\Http\Resources\AgentsResource;





class AgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AgentsResource::collection(Agent::all());
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
       $agent = Agent::create([
           'name'=> $faker->name
       ]);
       return new AgentsResource($agent);
    }


    public function show(Agent $agent)

    {
        return new AgentsResource($agent);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agent $agent)

    {
        $agent->update([
            //'name'=>'Mimie'
            'name'=> $request->input('name')
        ]);

        return new AgentsResource($agent);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        $agent->delete();
        return response(null, 204);
    }
}
