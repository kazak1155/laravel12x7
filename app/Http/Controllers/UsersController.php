<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{
    public function index(User $user)
    {
        $this->authorize('view-any',User::class);
        return User::all();
    }
}
