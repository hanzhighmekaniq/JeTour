<?php

namespace App\Http\Controllers;

use App\Contracts\UserServiceInterface;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        $keyword = $request->input('search');
        $users = $this->userService->paginateAndSearch($keyword, 5);
        return view('admin.user', compact('users', 'keyword'));
    }

    public function destroy($id)
    {
        $this->userService->delete($id);
        return redirect()->route('datauser.index')->with('success', 'User berhasil dihapus.');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $this->userService->store($validated);
        return redirect()->route('datauser.index')->with('success', 'User berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $user = $this->userService->find($id);
        return view('admin.user-edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6',
        ]);

        $this->userService->update($id, $validated);
        return redirect()->route('datauser.index')->with('success', 'User berhasil diupdate.');
    }
}
