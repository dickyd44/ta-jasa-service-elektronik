<?php

namespace App\Http\Controllers;

use App\Models\ServiceOrder;
use Illuminate\Http\Request;

class ServiceOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $types = ['NONE ---', 'AC', 'LISTRIK', 'WATER HITTER', 'KULKAS', 'MESIN CUCI', 'KIPAS ANGIN'];
        $items = ServiceOrder::orderByRaw('status="PENDING" desc')->orderBy('created_at', 'desc')->get();
        $changes = ['SUCCESS', 'PENDING'];

        return view('pages.service-order.index', [
            // 'types' => $types,
            'items' => $items,
            'changes' => $changes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        ServiceOrder::create($data);
        return redirect()->back()->with('success', 'Service Order berhasil di Tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceOrder  $serviceOrder
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceOrder $serviceOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceOrder  $serviceOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceOrder $serviceOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceOrder  $serviceOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        ServiceOrder::find($id)->update($data);
        return redirect()->back()->with('success', 'Service Order berhasil di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceOrder  $serviceOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ServiceOrder::find($id)->delete();
        return redirect()->back()->with('success', 'Service Order berhasil di Hapus!');
    }
}
