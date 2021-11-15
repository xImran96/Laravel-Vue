<?php
namespace App\Repositories\Eloquent;
use App\Repositories\EloquentRepositoryInterface;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use phpDocumentor\Reflection\Types\Boolean;

class BaseRepository implements EloquentRepositoryInterface
{

/**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $columns
     * @param array $relations
     * @return Collection
     */
    public function all(array $columns = ['*'], array $relations = []): Collection
    {
        return $this->model->with($relations)->get($columns);
    }

    /**
     * Get all trashed models.
     *
     * @return Collection
     */
    public function allTrashed(): Collection
    {
        return $this->model->onlyTrashed()->get();
    }

    /**
     * Find model by id.
     *
     * @param int $modelId
     * @param array $columns
     * @param array $relations
     * @param array $appends
     * @return Model
     */
    public function findById(
        int $modelId,
        array $columns = ['*'],
        array $relations = [],
        array $appends = []
    ): ?Model {
        return $this->model->select($columns)->with($relations)->findOrFail($modelId)->append($appends);
    }

    /**
     * Find model by column.
     *
     * @param array $where
     * @param array $columns
     * @param array $relations
     * @param array $appends
     * @return Model
     */
    public function findByColumn(
        array $where,
        array $columns = ['*'],
        array $relations = [],
        array $appends = []
    ): ?Model {
        return $this->model->select($columns)->with($relations)->where($where)->firstOrFail()->append($appends);
    }

    /**
     * Find model by column.
     *
     * @param array $where
     * @param array $columns
     * @param array $relations
     * @param array $appends
     * @return Model
     */
    public function findByColumnOr(
        array $where,
        array $columns = ['*'],
        array $relations = []
    ): ?Model {
        return $this->model->select($columns)->with($relations)->orWhere($where)->first();
    }

    /**
     * Find all by column.
     *
     * @param array $where
     * @param array $columns
     * @param array $relations
     * @param array $appends
     * @return Collection
     */
    public function findAllByColumn(
        array $where,
        array $columns = ['*'],
        array $relations = [],
        array $appends = []
    ): ?Collection {
        return $this->model->select($columns)->with($relations)->where($where)->get()->append($appends);
    }

    /**
     * Search by keyword.
     *
     * @param string $column
     * @param string $keyword
     * @param array $relations
     * @param array $appends
     * @return Collection
     */
    public function findByKeyword(
        string $column,
        string $keyword,
        array $columns = ['*'],
        array $relations = [],
        array $appends = []
    ): ?Collection {
        return $this->model->select($columns)->with($relations)->where($column, 'like', $keyword)->get()->append($appends);
    }

    /**
     * Find trashed model by id.
     *
     * @param int $modelId
     * @return Model
     */
    public function findTrashedById(int $modelId): ?Model
    {
        return $this->model->withTrashed()->findOrFail($modelId);
    }

    /**
     * Find only trashed model by id.
     *
     * @param int $modelId
     * @return Model
     */
    public function findOnlyTrashedById(int $modelId): ?Model
    {
        return $this->model->onlyTrashed()->findOrFail($modelId);
    }

    /**
     * Create a model.
     *
     * @param array $payload
     * @return Model
     */
    public function create(array $payload): ?Model
    {
        $model = $this->model->create($payload);

        return $model->fresh();
    }

    /**
     * Update existing model.
     *
     * @param int $modelId
     * @param array $payload
     * @return bool
     */
    public function update(int $modelId, array $payload): bool {
        return $this->model->whereId($modelId)->update($payload);
    }

    /**
     * Update model by column name.
     *
     * @param array $where
     * @param array $payload
     * @return bool
     */
    public function updateByColumn(array $where, array $payload): bool {
        return $this->model->where($where)->update($payload);
    }

    /**
     * @param array $where
     * @param array $payload
     * @return Model|null
     */
    public function updateGetModel(array $where, array $payload): ?Model {
        return $this->model->updateOrCreate($where, $payload);
    }

    /**
     * Update multiple row at once
     *
     * @param string $column
     * @param array $where
     * @param array $payload
     * @return boolean|null
     */
    public function updateMultiple(string $column, array $where, array $payload): bool {
        return $this->model->whereIn($column, $where)->update($payload);
    }

    /**
     * Delete model by id.
     *
     * @param int $modelId
     * @return bool
     */
    public function deleteByColumn(array $where): bool
    {
        return $this->model->where($where)->delete();
    }

     /**
     * Delete model by ids.
     *
     * @param int $modelId
     * @return bool
     */
    public function deleteByIds(array $where):? bool
    {
        return $this->model->whereIn('id',$where)->delete();
    }

    /**
     * Delete model by id.
     *
     * @param int $modelId
     * @return bool
     */
    public function deleteById(int $modelId): bool
    {
        return $this->findById($modelId)->delete();
    }

    /**
     * Restore model by id.
     *
     * @param int $modelId
     * @return bool
     */
    public function restoreById(int $modelId): bool
    {
        return $this->findOnlyTrashedById($modelId)->restore();
    }

    /**
     * Permanently delete model by id.
     *
     * @param int $modelId
     * @return bool
     */
    public function permanentlyDeleteById(int $modelId): bool
    {
        return $this->findTrashedById($modelId)->forceDelete();
    }
}
