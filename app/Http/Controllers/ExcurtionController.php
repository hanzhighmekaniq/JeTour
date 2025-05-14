<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Excurtion;
use App\Models\Destination;
class ExcurtionController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        $excurtions = Excurtion::all();
        return view('admin.excurtions.index', compact('excurtions', 'destinations'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'rules' => 'required',
            'open' => 'required',
            'close' => 'required',
            'destination_id' => 'required|exists:destinations,id'
        ]);
        Excurtion::create($request->all());

        return redirect()->route('excurtion.index')->with('success', 'Data Tamasya berhasil ditambahkan.');
    }

    public function update(Request $request, Excurtion $excurtion)
    {
        $request->validate([
            'name' => 'required',
            'rules' => 'required',
            'open' => 'required',
            'close' => 'required',
            'destination_id' => 'required|exists:destinations,id'
        ]);

        $excurtion->update($request->all());

        return redirect()->route('excurtion.index')->with('success', 'Data Tamasya berhasil diperbarui.');
    }

    public function destroy(Excurtion $excurtion)
    {
        $excurtion->delete();

        return redirect()->route('excurtion.index')->with('success', 'Data Tamasya berhasil dihapus.');
    }
}
