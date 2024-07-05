<?php

namespace App\Http\Controllers\Api;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Http\Resources\EventResource;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{

    public function index(){
        $events = Event::get();

        if($events->count() > 0){
            return EventResource::collection($events);
        }else{
            return response()->json(['message' => 'No record found'], 200);
        }
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'user_id'     => 'required',
            'title'       => 'required|string',
            'description' => 'required',
            'date'        => 'required',
            'location'    => 'required'
        ]);
    
        if($validator->fails()){
            return response()->json([
                'message' => 'All field are required',
                'error'   => $validator->messages(),
            ], 422);
        }    

        $events = Event::create([
            'user_id'     => $request->user_id,
            'title'       => $request->title,
            'description' => $request->description,
            'date'        => $request->date,
            'location'    => $request->location
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Event add successfully',
            'data'    => new EventResource($events)
        ], 200);
    }

    public function show(Event $event){
        return response()->json([
            'status' => true,
            'data'   => new EventResource($event)
        ], 200);
    }

    public function update(Request $request, Event $event){
        $validator = Validator::make($request->all(),[
            'title'       => 'required|string',
            'description' => 'required',
            'date'        => 'required',
            'location'    => 'required'
        ]);
    
        if($validator->fails()){
            return response()->json([
                'status'  => false,
                'message' => 'All field are required',
                'error'   => $validator->messages(),
            ], 422);
        }    

        $event->update([
            'title'       => $request->title,
            'description' => $request->description,
            'date'        => $request->date,
            'location'    => $request->location
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Event update successfully',
            'data'    => new EventResource($event)
        ], 200);
    }

    public function destroy(Event $event){
        $event->delete();
        return response()->json([
            'status'  => true,
            'message' => 'Event delete successfully',
            'data'    => new EventResource($event)
        ], 200);
    }
}