<?php

namespace App\Providers;
use View;
use App\UserRequest;
use Illuminate\Support\ServiceProvider;
use App\Department;
use App\News;
use App\Event;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $user_request = UserRequest::where('status', '=', 0)->orderby('id', 'ASC')->get();
        $department_global = Department::orderby('id', 'ASC')->get();
        $new_global_notify = News::where('status', '=', 0)->orderby('id', 'ASC')->get();
        $event_global_notify = Event::where('status', '=', 0)->orderby('id', 'ASC')->get();
        View::share('user_request', $user_request);
        View::share('department_global', $department_global);
        View::share('new_global_notify', $new_global_notify);
        View::share('event_global_notify', $event_global_notify);
    }
}
