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
        View::composer(['layouts.dashboard-layout', 'tasks.all-tasks'], function($view){
          // take the currently auth user
          $user = Auth::user();
          $view->with('userTasks', User::find($user->id)->tasks);
        });
    }
            // View::composer take two views ( 'dashboard' and 'all-tasks') and 
        //  the first argument specifies the view or an array of views to bind data to, and the second argument is a callback function that provides the data to be passed to the views.
        // the code fetches the tasks related to the authenticated user and makes them available within the view using the 'userTasks' variable. This allows you to display or manipulate the tasks associated with the user in the rendered view.
                  // Assign the fetched tasks to the $userTasks variable within the view being composed. This allows you to access the tasks within the view using the $userTasks variable.
          // The callback function receives the view instance as its parameter, which represents the view being rendered.
          // Within the callback function, you can use the view instance's with method to bind data to the view. The with method takes a key-value pair, where the key represents the variable name accessible within the view, and the value contains the data you want to pass to the view.
}
