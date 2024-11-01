<?php
 
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
 
use function Laravel\Folio\render;
 
render(function (View $view) {
    $users = User::all();
    return $view->with('users', $users);
}); ?>

{{dd($users->first())}}