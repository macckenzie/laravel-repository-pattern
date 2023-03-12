<?php

namespace App\Repositories\Contract;

use App\Models\Contract;

interface IContractRepository
{
    public function find(int $contractId);
    public function all();
    public function store(array $data): Contract;
    public function update(int $contractId, array $data): Contract;
    public function delete(int $contractId): bool;
}
