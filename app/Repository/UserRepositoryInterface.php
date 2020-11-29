<?php
namespace App\Repository;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function find($id): ?Model;
    public function fetch($params): ?Collection;
}
