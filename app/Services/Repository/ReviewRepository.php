<?php

namespace App\Services\Repository;

use App\Models\Review;

class ReviewRepository extends BaseRepository
{
      protected $model;

      public function __construct(Review $review)
      {
            parent::__construct($review);
      }

      public function deleteWhere(string $id)
      {
            return $this->model->where('tour_id', $id)->delete();
      }

}