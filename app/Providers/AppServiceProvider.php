<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // View::composer take two views ( 'dashboard' and 'all-tasks') and 
        // passes them to the callback to bind data.
        // the code fetches the tasks related to the authenticated user and makes them available within the view using the 'userTasks' variable. This allows you to display or manipulate the tasks associated with the user in the rendered view.
        View::composer(['layouts.dashboard-layout', 'tasks.all-tasks'], function($view){
          // take the currently auth user
          $user = Auth::user();
          // Assign the fetched tasks to the $userTasks variable within the view being composed. This allows you to access the tasks within the view using the $userTasks variable.
          $view->with('userTasks', User::find($user->id)->tasks);
        });
    }
}
