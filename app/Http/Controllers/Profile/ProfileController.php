<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $allOrder = $user->orders()->count();
        $addresses = $user->addresses()->count();
        $defaultAddress = $user->addresses()->where('is_default', true)->first();
        $pendingOrder = $user->orders()->where('status', 'pending')->count();
        $lastOrders = $user->orders()->latest()->take(4)->get();
        // dd($defaultAddress);
        // dd($lastOrders->order_number);

        return view('user.profile', compact('allOrder', 'addresses', 'pendingOrder', 'lastOrders', 'defaultAddress'));
    }


    public function edit(Request $request)
    {
        $user = $request->user();

        return view('user.profile-edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $data = $request->validate([
            'name' => 'required|string|max:255',

            //ایمیل قبلا وجود نداشته باشد
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($user->id)
            ],
        ]);

        $user->update($data);

        return redirect()
            ->route('user-profile')
            ->with('success', 'اطلاعات پروفایل با موفقیت ویرایش شد.');
    }

    //edit pass
    public function editPassword(Request $request)
    {
        $user = $request->user();

        return view('user.profile-edit-password', compact('user'));
    }
    public function updatePassword(Request $request)
    {
        $data = $request->validate([
            'current_password' => 'required|current_password',
            'password' => 'required|min:8|confirmed',
        ]);

        $request->user()->update([
            'password' => $data['password'],
        ]);

        return redirect(route('user-profile'))->with('success', 'رمز عبور با موفقیت تغییر کرد.');
    }
}
