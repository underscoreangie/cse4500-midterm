<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;

class EquipmentController extends Controller
{

    public function index()
    {
        $equipment = Equipment::all();
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
                'manuName' => 'required',
                'saleContact' => 'required',
                'techContact' => 'required',
                'userName' => 'required',
                'userContact' => 'required',
                'invoice' => 'required',
                 'price' => 'required',
                'purchaseDate' => 'required',
         ]);
      
         $equipment = Equipment::create([
                'category' => $request->category,
                'hardwareSpecs' => $request->hardwareSpecs,
                'manuName' => $request->manuName,
                'saleContact' => $request->saleContact,
                'techContact' => $request-> techContact,
                'userName' => $request-> userName,
                'userContact' => $request->userContact,
                'invoice' => $request-> invoice,
                'price' => $request-> price,
                'purchaseDate' => $request-> purchaseDate,
                
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
