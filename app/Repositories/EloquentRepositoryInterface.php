<?php

namespace App\Repositories;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

Interface EloquentRepositoryInterface{

    /**
     * Get all models.
     *
     * @param array $columns
     * @param array $relations
     * @return Collection
     */
    public function all(array $columns = ['*'], array $relations = []): Collection;

    /**
     * Get all trashed models.
     *
     * @return Collection
     */
    public function allTrashed(): Collection;

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
    ): ?Model;

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
    ): ?Collection;

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
    ): ?Collection;

    /**
     * Find trashed model by id.
     *
     * @param int $modelId
     * @return Model
     */
    public function findTrashedById(int $modelId): ?Model;

    /**
     * Find only trashed model by id.
     *
     * @param int $modelId
     * @return Model
     */
    public function findOnlyTrashedById(int $modelId): ?Model;

    /**
     * Create a model.
     *
     * @param array $payload
     * @return Model
     */
    public function create(array $payload): ?Model;

    /**
     * Update existing model.
     *
     * @param int $modelId
     * @param array $payload
     * @return bool
     */
    public function update(int $modelId, array $payload): bool;

    /**
     * Update model by column name.
     *
     * @param array $where
     * @param array $payload
     * @return bool
     */
    public function updateByColumn(array $where, array $payload): bool;

    /**
     * @param array $where
     * @param array $payload
     * @return Model|null
     */
    public function updateGetModel(array $where, array $payload): ?Model;

    /**
     * Update multiple row at once
     *
     * @param string $column
     * @param array $where
     * @param array $payload
     * @return boolean|null
     */
    public function updateMultiple(string $column, array $where, array $payload): bool;

    /**
     * Delete model by id.
     *
     * @param int $modelId
     * @return bool
     */
    public function deleteById(int $modelId): bool;

    /**
     * Restore model by id.
     *
     * @param int $modelId
     * @return bool
     */
    public function restoreById(int $modelId): bool;

    /**
     * Permanently delete model by id.
     *
     * @param int $modelId
     * @return bool
     */
    public function permanentlyDeleteById(int $modelId): bool;

}

?>