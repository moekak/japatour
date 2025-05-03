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

    // /**
    //  * 全てのツアーを取得
    //  */
    // public function getAll()
    // {
    //     return $this->model->getAllData();
    // }

    // /**
    //  * ID指定でツアーを取得
    //  */
    // public function findById(string $id)
    // {
    //     $tour = $this->model->getSpecificData($id);
        
    //     if (!$tour) {
    //         throw new \Exception('ツアーが見つかりませんでした');
    //     }
        
    //     return $tour;
    // }

    // /**
    //  * ツアーを新規作成
    //  */
    // public function create(array $data)
    // {
    //     return $this->model->create($data);
    // }

    // /**
    //  * ツアーを更新
    //  */
    // public function update(string $id, array $data)
    // {
    //     $tour = $this->model->findOrFail($id);
    //     return $tour->update($data);
    // }

    // /**
    //  * ツアーを削除
    //  */
    // public function delete(string $id)
    // {
    //     $tour = $this->model->findOrFail($id);
    //     return $tour->delete();
    // }
}