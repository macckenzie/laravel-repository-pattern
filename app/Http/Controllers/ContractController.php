<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contract\ContractDeleteRequest;
use App\Http\Requests\Contract\ContractStoreRequest;
use App\Http\Requests\Contract\ContractUpdateRequest;
use App\Repositories\Contract\IContractRepository;

class ContractController extends Controller
{
    public function __construct(private readonly IContractRepository $contractRepository)
    {}

    public function index()
    {
        $contracts = $this->contractRepository->all();
        return view('welcome')->with($contracts);
    }

    public function store(ContractStoreRequest $request)
    {
        $contract = $this->contractRepository->store($request->validated());
        return redirect()->route('contracts', $contract);
    }

    public function update(ContractUpdateRequest $request)
    {
        $contract = $this->contractRepository->update($request->contractId, $request->validated());
        return redirect()->route('contracts', $contract);
    }

    public function delete(ContractDeleteRequest $request)
    {
        $contract = $this->contractRepository->update($request->contractId, $request->validated());
        return redirect()->route('contracts', $contract);
    }
}
