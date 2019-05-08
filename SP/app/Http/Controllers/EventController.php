<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use DateTime;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class EventController extends Controller
{
    public function createEvent()
    {
        return view('events');
    }

    public function store(Request $request)
    {
        $event= new Event();
        $event->title=$request->get('title');
        $event->start_date=$request->get('start_date');
        $event->end_date=$request->get('end_date');
        $event->save();
        return redirect('event')->with('success', 'Event has been added');
    }

    public function calendar()
            {
                $events = [];
                $data = Event::all();
                if($data->count())
                 {
                    foreach ($data as $key => $value) 
                    {
                        $events[] = Calendar::event(
                            $value->title,
                            true,
                            new DateTime($value->start_date),
                            new DateTime($value->end_date.'+1 day'),
                            null,
                            // Add color
                         [
                             'color' => '#000000',
                             'textColor' => '#008000',
                         ]
                        );
                    }
                }
                $calendar = Calendar::addEvents($events);
                return view('calendar', compact('calendar'));
            }
}
