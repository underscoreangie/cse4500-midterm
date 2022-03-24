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
                'userName' => 'required',
                'userContact' => 'required',
                'manuName' => 'required',
                'saleContact' => 'required',
                'techContact' => 'required',
                'purchaseDate' => 'required',
                'price' => 'required',
                'invoice' => 'required',
         ]);
      
         $equipment = Equipment::create([
                'category' => $request->category,
                'hardwareSpecs' => $request->hardwareSpecs,
                'userName' => $request-> userName,
                'userContact' => $request->userContact,
                'manuName' => $request->manuName,
                'saleContact' => $request->saleContact,
                'techContact' => $request-> techContact,
                'purchaseDate' => $request-> purchaseDate,
                'price' => $request-> price,
                'invoice' => $request-> invoice,
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
