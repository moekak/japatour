<?php

namespace App\Services\Repository;

use App\Models\AdditionalService;

class AdditionalServiceRepository extends BaseRepository
{
      protected $model;

      public function __construct(AdditionalService $question)
      {
            parent::__construct($question);
      }

      public function deleteWhere()
      {
            return $this->model->delete();
      }
}