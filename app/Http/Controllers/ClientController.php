<?php

namespace App\Http\Controllers;

use App\Models\Client;

use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;
use Throwable;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {

        try {


            $photoPath = null;
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('', 'user_photos');
            }

            $cpf_hash = hash_hmac('sha256', $request->cpf, config('app.key'));


            $password = Hash::make($request->password);
            $user = new User();
            $user->email = $request->email;
            $user->password = $password;
            $user->photo = $photoPath;
           $user->timestamps = false;
      
            $user->save();


            $client = new Client();
            $client->user_id = $user->id;
            $client->full_name = $request->full_name;
            $client->birthday = $request->birthday;

            $client->cpf_hash = $cpf_hash;
            $client->perfil_name = $request->perfil_name;
            $client->preferences = $request->preferences;
            $client->timestamps = false;
            $client->save();


            return redirect()->route('home')->with('success', 'Cliente cadastrado com sucesso');
        } catch (Throwable $e) {

            report($e);

            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
