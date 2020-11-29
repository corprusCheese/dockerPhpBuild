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
        //return User::query()->where('id',"=",$id)->firstOrFail();
        return $this->model->newQuery()->find($id);
    }
}
