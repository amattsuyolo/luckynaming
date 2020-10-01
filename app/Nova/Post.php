<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Trix;
use Ek0519\Quilljs\Quilljs;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\DateTime;

class Post extends Resource
{
    public static function label()
    {
        return '命名網站文章';
    }
    public static $group = '主類別';
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Post';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'subtitle', 'body'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make("標題",'title')
                ->rules("required"),
            Text::make("子標題",'subtitle')
                ->hideFromIndex(),
            // Trix::make('主內容','body')
            //     ->withFiles('gcs')
            //     ->rules("required"),
            Quilljs::make('主內容','body')
            ->withFiles('gcs')
            ->rules("required")
            ->tooltip(true),
            Number::make('觀看次數',"post_views")
                ->hideFromIndex(),
            DateTime::make('發行時間','published_at')
                ->hideFromIndex(),
            DateTime::make('下架時間','published_until')
                ->hideFromIndex(),
            Boolean::make('發佈','is_published')
                     ->trueValue('1')
                     ->falseValue('0'),
            Select::make('Category','category')
                ->options([
                    "命名學" => 'naming',
                    "幸運學" => 'luck',
                    "其他" => 'other'
                ])
                ->hideWhenUpdating(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
