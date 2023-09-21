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
        //
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
    public function store(StoreAgentRequest $request)
    {
        //
    }


    public function show(Agent $agent)

    {
        return new AgentsResource($agent);
        /**return response()->json([
       'data'=>[
           'id'=>$agent->id,
           'type'=>'agents',
           'attributes'=>[
               'name'=>$agent->name,
               'created_at'=>$agent->created_at,
               'updated_at'=>$agent->updated_at

           ]
       ]

   ]);**/
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
    public function update(UpdateAgentRequest $request, Agent $agent)

    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        //
    }
}
