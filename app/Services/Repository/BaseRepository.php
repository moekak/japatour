<?php

namespace App\Services\Repository;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
      protected $model;

      public function __construct(Model $model)
      {
            $this->model = $model;
      }

      /**
       * 全てのデータを取得
       */
      public function getAll()
      {
            return $this->model->getAllData();
      }

      /**
     * ID指定でデータを取得
     */
      public function findById(string $id)
      {
            $data = $this->model->getSpecificData($id);
            return $data;
      }

      /**
     * ツアーを新規作成
     */
      public function create(array $data)
      {
            return $this->model->create($data);
      }

      /**
       * ツアーを更新
       */
      public function update(string $id, array $data)
      {
            $tour = $this->model->findOrFail($id);
            return $tour->update($data);
      }

      /**
       * ツアーを削除
       */
      public function delete(string $id)
      {
            $tour = $this->model->findOrFail($id);
            return $tour->delete();
      }
}