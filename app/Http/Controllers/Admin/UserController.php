<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $users = User::withCount(
            'orders',
            'addresses'
        )->latest()->paginate(10);

        return view('admin/user/index', compact('users'));
    }

    public function show(User $user)
    {
        $user->load([
            'addresses',
            'orders' => function ($query) {
                $query->latest();
            }
        ]);

        return view('admin/user/watch', compact('user'));
    }


    public function create()
    {
        return view('admin/user/create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create($data);

        return redirect()
            ->route('adminusers')
            ->with('success', 'کاربر با موفقیت ایجاد شد.');
    }



    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',

            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($user->id),
            ],

            'password' => 'nullable|min:8|confirmed',
        ]);

        if (empty($data['password'])) {
            unset($data['password']);
        }

        $user->update($data);

        return redirect()
            ->route('adminusers')
            ->with('success', 'اطلاعات کاربر با موفقیت ویرایش شد.');
    }


    public function destroy(Request $request, User $user)
    {
        if ($user->orders()->exists()) {
            return redirect()->back()
                ->with('error', 'کاربر دارای سفارش را نمیتوان حذف کرد');
        }
        $user->delete();
        return redirect()->route('adminusers')
            ->with('success', 'کاربر با موفقیت حذف گردید.');
    }
}
