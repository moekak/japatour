<?php

namespace App\Services\Repository;

use App\Models\Question;

class AdditionalServiceRepository extends BaseRepository
{
      protected $model;

      public function __construct(Question $question)
      {
            parent::__construct($question);
      }

      public function deleteWhere()
      {
            return $this->model->delete();
      }
}