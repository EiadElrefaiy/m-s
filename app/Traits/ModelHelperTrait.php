<?php

namespace App\Traits;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Message;
use App\Models\More;
use App\Models\Newsletter;
use App\Models\Point;
use App\Models\Review;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Step;
use App\Models\User;
use App\Models\Visit;

trait ModelHelperTrait
{
    /**
     * Get the model class based on the table name
     *
     * @param string $table
     * @return string|null
     */
    private function getModelClass($table)
    {
        $models = [
            'users' => User::class,
            'blogs' => Blog::class,
            'contacts' => Contact::class,
            'footer_services' => Footer::class,
            'header' => Header::class,
            'messages' => Message::class,
            'more_services' => More::class,
            'newsletter' => Newsletter::class,
            'steps_points' => Point::class,
            'reviews' => Review::class,
            'services' => Service::class,
            'sliders' => Slider::class,
            'steps' => Step::class,
            'visits' => Visit::class,
        ];

        return $models[$table] ?? null;
    }

    /**
     * Get the relationships to be eager loaded based on the model class
     *
     * @param string $modelClass
     * @return array
     */
    private function getRelationships($modelClass)
    {
        $relationships = [
            Step::class => ['points'],
            Point::class => ['step'],
            // Add other relationships here
        ];

        return $relationships[$modelClass] ?? [];
    }
}