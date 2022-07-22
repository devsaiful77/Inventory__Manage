<?php

namespace App\Http\Livewire\Admin\Finance;

use App\Http\Controllers\Admin\Finance\IncomeTypeController;
use App\Models\IncomeType;
use Carbon\Carbon;
use Livewire\Component;

class IncomeTypeIndex extends Component
{
    // =========== Property =========
    public $income_name, $remarks;

    public function getAll(){
        $incometypeOBJ = new IncomeTypeController();
        return $incometypeOBJ->getAll();
    }


    public function store(){
        $this->validate([
            'income_name' => 'required'
        ],[
            'income_name.required' => 'Waliul Valo Acho'
        ]);

        $store = IncomeType::create([
            'income_name' => $this->income_name,
            'remarks' => $this->remarks,
            'created_at' => Carbon::now(),
        ]);

    }



    public function render()
    {
        $incometype = $this->getAll();
        return view('livewire.admin.finance.income-type-index',compact('incometype'));
    }
}
