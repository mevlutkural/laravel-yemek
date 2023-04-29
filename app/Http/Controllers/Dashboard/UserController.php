<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('Dashboard.pages.users.users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\View\View
    {
        return view('Dashboard.pages.users.create_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $req)
    {
        $user = new User;
        $user->fill($this->prepare($req, $user->getFillable()))
            ->save();

        return redirect()->route('users.index');
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
    public function edit(User $user)
    {
        return view('Dashboard.pages.users.edit_user', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $req, User $user)
    {
        $user->fill($this->prepare($req, $user->getFillable()))
            ->save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user The user object
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response('success');
    }

    /**
     * @param User $user The user object
     *
     * @return \Illuminate\View\View
    */
    public function passwordForm(User $user): \Illuminate\View\View
    {
        return view('Dashboard.pages.users.change_password', ['user' => $user]);
    }

    /**
     * @param User $user The user object
     *
     * @return
     */
    public function changePassword(User $user, UserRequest $req): \Illuminate\Http\RedirectResponse
    {
        $user->password = $req->get('password');
        $user->save();

        return redirect()->route('users.index');
    }
}
