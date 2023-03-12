<?php

namespace App\Repositories\Contract;

use App\Models\Contract;

class ContractRepository implements IContractRepository
{
    public function find(int $contractId)
    {
        return Contract::findOrFail($contractId);
    }

    public function all()
    {
        return Contract::all();
    }

    public function store(array $data): Contract
    {
        return Contract::create($data);
    }

    public function update(int $contractId, array $data): Contract
    {
        $contract = $this->find($contractId);
        $contract->update($data);

        return $contract;
    }

    public function delete(int $contractId): bool
    {
        return $this->find($contractId)->delete();
    }
}
