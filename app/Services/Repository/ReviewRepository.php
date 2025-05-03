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

}