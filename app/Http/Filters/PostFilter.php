<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{
    protected const TITLE = 'title';
    protected const DESCRIPTION = 'description';
    protected const TAG = 'tag';

    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            self::DESCRIPTION => [$this, 'description'],
            self::TAG => [$this, 'tag'],
        ];
    }

    protected function title(Builder $builder, $value){
        $query = $builder->where('title', 'like', '%'.$value.'%');
    }

    protected function description(Builder $builder, $value){
        $query = $builder->where('description', 'like', '%'.$value.'%');
    }

    protected function tag(Builder $builder, $value){
        $query = $builder->where('tag', $value);
    }
}
