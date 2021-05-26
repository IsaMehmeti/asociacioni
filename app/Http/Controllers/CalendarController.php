<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Event;

class CalendarController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()){
            $data = Event::whereDate('start', '>=', $request->start)
                         ->whereDate('end', '<=', $request->end)
                         ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
        }
        return view('calendar.index');
    }

    public function action(Request $request)
    {
            $today = new Carbon;
        if ($request->ajax()){
            //create event
            if ($request->type == 'add'){
                $event = Event::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);
                $event = $event->toArray();
                $event['after_date'] = Event::whereDate('start', '>=', $today->format('Y-m-d h:m:s'))->count();
                return response()->json($event);
            }
            //update event
            if ($request->type == 'update'){
                $event = Event::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end
                ]);
                $event = [];
                $event['after_date'] = Event::whereDate('start', '>=', $today->format('Y-m-d h:m:s'))->count();
                return response()->json($event);
            }
            //delete event
            if ($request->type == 'delete'){
                $event = Event::find($request->id)->delete();
                $count = Event::whereDate('start', '>=', $today->format('Y-m-d h:m:s'))->count();
                return response()->json([$event, $count]);
            }
        }
    }
}
