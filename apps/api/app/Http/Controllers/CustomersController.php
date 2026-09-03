<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Http\Requests\CustomersStoreRequest;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Customers::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomersStoreRequest $request)
    {
        $data = $request->validated();

        $customers = Customers::create($data);

        return $customers;
    }

    /**
     * Display the specified resource.
     */
    public function show(Customers $customers)
    {
        return $customers;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Customers $customer, Request $request)
    {
        $customer->name = $request->name ?? $customer->name;
        $customer->email = $request->email ?? $customer->email;
        $customer->phone = $request->phone ?? $customer->phone;
        $customer->birth_date = $request->birth_date ?? $customer->birth_date;

        $customer->save();

        return $customer;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customers $customers)
    {
        $customers->delete();

        return response()->json([
            'message' => 'Customers excluída',
        ], 204);
    }
}
