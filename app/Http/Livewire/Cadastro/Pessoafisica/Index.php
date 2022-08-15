<?php

namespace App\Http\Livewire\Cadastro\Pessoafisica;

use App\Models\Pessoa;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.cadastro.pessoafisica.index')
        ->with("pessoas", Pessoa::limit(10)->orderBy("id", "desc")->get());
    }
}
