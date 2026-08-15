<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $addresses = $request->user()->addresses()->latest()->get();
        $totalAddresses = $addresses->count();
        $defaultAddresses = $addresses->where('is_default', 1)->count();


        return view('user/address/address', compact('addresses', 'totalAddresses', 'defaultAddresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user/address/address-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'is_default' => 'nullable|boolean',
        ]);
        $data['is_default'] = $request->boolean('is_default');

        // If the new address is set as default,
        //unset the default flag for all other addresses of the user
        if ($data['is_default']) {
            $request->user()
                ->addresses()
                ->update(['is_default' => false]);
        }

        $request->user()
            ->addresses()
            ->create($data);

        return redirect()
            ->route('user-address')
            ->with('success', 'آدرس با موفقیت ثبت شد.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address, Request $request)
    {
        // Check if the address belongs to the authenticated user
        abort_unless($address->user_id === $request->user()->id, 403);

        return view('user/address/address-edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        // Check if the address belongs to the authenticated user
        abort_unless($address->user_id === $request->user()->id, 403);

        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'is_default' => 'nullable|boolean',
        ]);
        $data['is_default'] = $request->boolean('is_default');


        // If the new address is set as default,
        //unset the default flag for all other addresses of the user
        if ($data['is_default']) {
            $request->user()
                ->addresses()
                ->update(['is_default' => false]);
        }


        $address->update($data);

        return redirect()
            ->route('user-address')
            ->with('success', 'آدرس با موفقیت ویرایش شد.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address, Request $request)
    {
        // Check if the address belongs to the authenticated user
        abort_unless($address->user_id === $request->user()->id, 403);

        $address->delete();

        return redirect()
            ->route('user-address')
            ->with('success', 'آدرس با موفقیت حذف شد.');
    }
}
