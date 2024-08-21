<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Traits\ModelHelperTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    use ModelHelperTrait;
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
        // Determine the model class based on the table name
        $modelClass = $this->getModelClass('steps');
    
            $steps = $modelClass::with($this->getRelationships($modelClass))->get();

            // Share $steps with all views
            View::share('steps', $steps);

            // Return success response with the view and data
        Schema::defaultStringLength(191);
    }
}
