<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CurrencyRate;

class Currency extends Component
{
    public $currency;

    public  $confirmCurrencyDeletion = false;
    // public  $confirmProductAdd = false;
    public function render()
    {
        $currencyrate = CurrencyRate::all();
        return view('livewire.currency', [
            'currencyrate' => $currencyrate,
        ]);
    }

    public function confirmCurrencyDeletion($id)
    {
        $this->confirmCurrencyDeletion = $id;
    }

    public function deleteCurrency(CurrencyRate $currency)
    {
        $currency->delete();
        $this->confirmCurrencyDeletion = false;
    }
}
