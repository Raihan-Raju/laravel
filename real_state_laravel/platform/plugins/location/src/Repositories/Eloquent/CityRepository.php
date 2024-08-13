<?php

namespace Botble\Location\Repositories\Eloquent;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Location\Repositories\Interfaces\CityInterface;
use Botble\Support\Repositories\Eloquent\RepositoriesAbstract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;

class CityRepository extends RepositoriesAbstract implements CityInterface
{
    /**
     * {@inheritDoc}
     */
    public function filters($keyword, $perPage = 10, array $with = [], array $select = ['cities.*'])
    {
        $data = $this->model
            ->join('states', 'states.id', '=', 'cities.state_id')
            ->join('countries', 'countries.id', '=', 'cities.country_id')
            ->where('cities.status', BaseStatusEnum::PUBLISHED)
            ->where('states.status', BaseStatusEnum::PUBLISHED)
            ->where('countries.status', BaseStatusEnum::PUBLISHED)
            ->where(function (Builder $query) use ($keyword) {
                return $query
                    ->where('cities.name', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('states.name', 'LIKE', '%' . $keyword . '%');
            })
            ->limit($perPage);

        if ($with) {
            $data = $this->model->with($with);
        }

        return $this->applyBeforeExecuteQuery($data)->get($select);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeaturedCities($args = [])
    {
        if (Arr::get($args, 'condition')) {
            $this->applyConditions($args['condition']);
        }

        $data = $this->model
            ->where('is_featured', 1)
            ->orderBy('created_at', 'desc');

        if (isset($args['take'])) {
            $data =  $this->model->limit($args['take']);
        }

        if (isset($args['select'])) {
            $data =  $this->model->select($args['select']);
        }

        if (isset($args['withCount'])) {
            $data =  $this->model->withCount($args['withCount']);
        }

        if (isset($args['with'])) {
            $data =  $this->model->with($args['with']);
        }

        return $this->applyBeforeExecuteQuery($data)->get();
    }
}
