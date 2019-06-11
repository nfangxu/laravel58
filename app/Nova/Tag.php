<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use App\Models\Tag as Model;
use Laravel\Nova\Fields\MorphedByMany;

class Tag extends Resource
{
    public static $model = Model::class;

    public static $title = 'name';

    public static $search = [
        'name',
    ];

    public function fields(Request $request)
    {
        return [
            ID::make('标签 ID', 'id')->sortable(),
            Text::make('标签名', 'name')->rules('required'),
            Text::make('Slug')->hideWhenCreating()->hideWhenUpdating(),
            MorphedByMany::make('Posts'),
            MorphedByMany::make('Users'),
        ];
    }

    public function cards(Request $request)
    {
        return [];
    }

    public function filters(Request $request)
    {
        return [];
    }

    public function lenses(Request $request)
    {
        return [];
    }

    public function actions(Request $request)
    {
        return [];
    }
}
