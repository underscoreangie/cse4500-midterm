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
                'category' => 'required',
                'hardwareSpecs' => 'required',
                'manufacture' => 'required',
                'saleInfo' => 'required',
                'contactInfo' => 'required',
                'userName' => 'required',
                'contact' => 'required',
                'invoice' => 'required',
                'price' => 'required',
                'date' => 'required',
         ]);
      
         $equipment = Equipment::create([
                'category' => $request-> category,
                'hardwareSpecs' => $request-> hardwareSpecs,
                'manufacture' => $request-> manufacture,
                'saleInfo' => $request-> saleInfo,
                'contactInfo' => $request-> contactInfo,
                'userName' => $request-> userName,
                'contact' => $request-> contact,
                'invoice' => $request-> invoice,
                'price' => $request-> price,
                'date' => $request-> date,
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
