<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller  
   {  
   public function index()  
      {  
         $events = [];  
         $data = Event::all();  
         if($data->count()){  
         foreach ($data as $key => $value) {  
         $events[] = Calendar::event(  
         $value->title,  
         true,  
         new \DateTime($value->start_date),  
         new \DateTime($value->end_date)  
      );  
   }  
}  
$calendar = Calendar::addEvents($events);   
   return view('mycalender', compact('calendar'));  
   }  
}  
