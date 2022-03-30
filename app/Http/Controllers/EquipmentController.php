<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;

class EquipmentController extends Controller
{

    public function index()
    {
        $equipments = Equipment::all();
        return view('equipments',compact('equipments'));
    }


    public function create()
    {
        return view('equipments.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
                'title' => 'required',
                'progress' => 'required',
         ]);
      
         $equipment = Equipment::create([
                'title' => $request->title,
                'progress' => $request->progress, 
         ]);
      
          return $this->index();
    }


    public function show($id)
    {
          $equipment= Equipment::find($id);
          return view('equipments.show',compact('equipment'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
