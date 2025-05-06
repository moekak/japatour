<?php

namespace App\Services\Repository;

use App\Models\Question;

class QaRepository extends BaseRepository
{
      protected $model;

      public function __construct(Question $question)
      {
            parent::__construct($question);
      }

      public function deleteWhere(string $id)
      {
            return $this->model->where('tour_id', $id)->delete();
      }
}