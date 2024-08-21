<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Traits\ModelHelperTrait;

class BlogController extends Controller
{
    use ModelHelperTrait;

    public function index()
    {
        $view = 'blogs';
        // Define the tables you want to fetch data from
        $tables = [
            'blogs',
            'footer_services',
            'header',
            'contacts',
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

    public function read($id)
    {
        $view = 'blog';
        // Define the tables you want to fetch data from
        $tables = [
            'blogs',
            'footer_services',
            'header',
            'contacts',
        ];

        $data = [];

        // Loop through each table and get the corresponding model data
        foreach ($tables as $table) {
            $modelClass = $this->getModelClass($table);

            if ($modelClass) {
                $relationships = $this->getRelationships($modelClass);

                if ($table == 'blogs') {
                    // Initialize the query builder
                    $query = $modelClass::with($relationships);

                    // Check if the table has the 'arrangement' column
                    if (Schema::hasColumn($table, 'arrangement')) {
                        $query->orderBy('arrangement', 'asc'); // Default to ascending order
                    }

                    // Get the single blog item by id
                    $data[$table] = $query->find($id);
                } else {
                    // Fetch all items from other tables
                    $data[$table] = $modelClass::with($relationships)->get();
                }
            }
        }

        return view($view, compact('data'));
    }
}
