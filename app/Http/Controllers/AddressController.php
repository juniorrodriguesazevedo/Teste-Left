<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Address;
use App\Http\Requests\Adresses\AdressesStoreRequest;
use App\Http\Requests\Adresses\AdressesUpdateRequest;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adresses = Address::with('client')->latest()->paginate(5);

        return view('address.index', compact('adresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::orderBy('name')->get();

        return view('address.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\AdressesStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdressesStoreRequest $request)
    {
        $data = $request->validated();

        Address::create($data);

        return redirect()->route('address.index')->withStatus('Endereço cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        return view('address.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        $clients = Client::orderBy('name')->get();

        return view('address.edit', compact('clients', 'address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\AdressesUpdateRequest  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(AdressesUpdateRequest $request, Address $address)
    {
        $data = $request->validated();

        $address->update($data);

        return redirect()->route('address.index')->withStatus('Endereço atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        $address->delete();

        return redirect()->route('address.index')->withStatus('Endereço deletado com sucesso!');
    }
}
