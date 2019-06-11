<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use App\Models\Post as Model;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\MorphToMany;
use Laravel\Nova\Fields\Textarea;

class Post extends Resource
{
    public static $model = Model::class;

    public static $title = 'title';

    public static $search = [
        'title',
    ];

    public function fields(Request $request)
    {
        return [
            ID::make('文章ID', 'id')->sortable(),
            Text::make('标题', 'title')->rules('required'),
            Text::make('Slug')->hideWhenCreating()->hideWhenUpdating(),
            Textarea::make('简介', 'summary')->rules('required', 'max:200'),
            Markdown::make('内容', 'content')->rules('required'),
            Boolean::make('是否发布', 'is_published'),
            MorphToMany::make('Tags')
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
