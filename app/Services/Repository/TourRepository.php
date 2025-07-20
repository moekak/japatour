<?php

namespace App\Services\Repository;

use App\Models\Tour;

class TourRepository extends BaseRepository
{
    protected $model;

    public function __construct(Tour $tour)
    {
        parent::__construct($tour);
    }
}