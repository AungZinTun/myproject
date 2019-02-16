<?php

namespace App\Providers;
use App\Patient;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Laravel\Dusk\DuskServiceProvider;
use Illuminate\Support\Facades\View;
use PHPUnit\Framework\Constraint\Count;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);


        // if (Auth::id()==1){
        //     $due = Patient::where('dod', '<=', Carbon::now()->subMonth(3))->get();
        //    }
        // else {  $due = Patient::where('user_id', Auth::id() )->where('dod', '<=', Carbon::now()->subMonth(3))->get(); }

        // $due = Patient::where('user_id', Auth::id());
        // // )->where('dod', '<=', Carbon::now()->subMonth(3))->get(); 
        
        // $notification=$request->user();
        view()->composer('*', function ($view) 
    {
      if (Auth::check()){
        $due = Patient::where('user_id', Auth::user()->id)->where("dod", "<=", now())->whereNull("dna_pcr_result")->get();
      }
      else { $due =Patient::all(); }
        $notification=$due->count();
      
        $view->with('notification', $notification );    
       
    });  
            

        

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }

    }
}
