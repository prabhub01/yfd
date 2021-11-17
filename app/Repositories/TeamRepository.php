<?php

namespace App\Repositories;

use App\Models\Team;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class TeamRepository.
 */
class TeamRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        //return YourModel::class;
    }

    public function __construct(Team $team)
    {
        $this->model = $team;
    }
}
