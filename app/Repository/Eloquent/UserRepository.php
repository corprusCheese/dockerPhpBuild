<?php

namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param User $model
     */

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    /**
     * @param $id
     * @return Model
     */
    public function find($id): ?Model
    {
        return $this->model->newQuery()->find($id);
    }

    /**
     * @param $request
     * @return Collection
     */
    public function fetch($request): ?Collection
    {
        $modelParams = $this->model->getFillable();
        $query = $this->model->newQuery();
        foreach ($modelParams as $param) {
            if (isset($request[$param])) {
                $query = $query->where($param,"LIKE","%".strval($request[$param]."%"));
            }
        }

        return $query->get();
    }
}
