<?php

namespace App\Http\Controllers;

use App\Classes\Client;
use App\Classes\Employ;
use App\Http\Requests\clients\GetClientsRequest;
use App\Http\Requests\clients\StoreClientRequest;
use App\Http\Requests\clients\UpdateClientRequest;
use App\Notifications\WelcomeNotification;
use Illuminate\Http\JsonResponse;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(GetClientsRequest $request): JsonResponse
    {
        $clients = [
            new Client('John', 'Doe', 'john.doe@gmail.com', 'Google'),
            new Client('Manana', 'Doe', 'manana.doe@gmail.com', 'Goodwill'),
            new Client('Guja', 'Gujashvili', 'guja@gmail.com', 'Tesla Inc.')
        ];

        $clients[0]->assignRole('Basic');
        $clients[1]->assignRole('Basic');
        $clients[2]->assignRole('Premium');

        if ($request->has('role')) {
            $clients = array_filter($clients, fn($client) => $client->hasRole($request->role));
        }

        return response()->json([
            'clients' => $clients
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request): JsonResponse
    {
        $payload = $request->validated();

        $client = new Client(
            $payload['first_name'],
            $payload['last_name'],
            $payload['email'],
            $payload['company']
        );

        if (isset($payload['roles']))
            $client->assignRoles($payload['roles']);

//        $employ = new Employ(
//            $payload['first_name'],
//            $payload['last_name'],
//            $payload['email'],
//            'Software'
//        );

        $client->notify(new WelcomeNotification());
//        $employ->notify(new WelcomeNotification());

        return response()->json([
            'client' => $client
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = new Client('John', 'Doe', 'john.doe@gmail.com', 'Google');

        return response()->json([
            'id' => $id,
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, string $id): JsonResponse
    {
        $payload = $request->validated();

        $client = new Client('John', 'Doe', 'john.doe@gmail.com', 'Google');

        $client->assignRoles(['Basic', 'Manager']);


        if (isset($payload['first_name']))
            $client->first_name = $payload['first_name'];

        if (isset($payload['last_name']))
            $client->last_name = $payload['last_name'];

        if (isset($payload['company']))
            $client->company = $payload['company'];

        if (isset($payload['roles']))
            $client->syncRoles($payload['roles']);

        return response()->json([
            'id' => $id,
            'client' => $client
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        return response()->json([
            'id' => $id,
            'message' => 'Client deleted'
        ]);
    }

    public function company(): JsonResponse
    {
        $client = new Client('John', 'Doe', 'john.doe@gmail.com', 'Google');

        return response()->json([
            'company' => $client->company
        ]);
    }
}
