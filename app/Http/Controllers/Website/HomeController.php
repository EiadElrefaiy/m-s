<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Traits\ModelHelperTrait;

class HomeController extends Controller
{
    use ModelHelperTrait;

    public function getAllData()
    {
        $view = 'index';
        // Define the tables you want to fetch data from
        $tables = [
            'users',
            'blogs',
            'contacts',
            'footer_services',
            'header',
            'messages',
            'more_services',
            'newsletter',
            'steps_points',
            'reviews',
            'services',
            'sliders',
            'steps'
        ];

        $data = [];

        // Loop through each table and get the corresponding model data
        foreach ($tables as $table) {
            $modelClass = $this->getModelClass($table);

            if ($modelClass) {
                $relationships = $this->getRelationships($modelClass);

                // Initialize the query builder
                $query = $modelClass::with($relationships);

                // Check if the table has the 'arrangement' column
                if (Schema::hasColumn($table, 'arrangement')) {
                    $query->orderBy('arrangement', 'asc'); // Default to ascending order
                }

                // Get the data from the query
                $data[$table] = $query->get();
            }
        }

        return view($view, compact('data'));
    }
}
