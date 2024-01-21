<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hero extends Component
{

    public $states;
    public $categories;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->states = [
            ['value' => 'ES', 'name' => 'ESPIRITO SANTO'],
            ['value' => 'SP', 'name' => 'SAO PAULO'],
            ['value' => 'MG', 'name' => 'MINAS GERAIS'],
            ['value' => 'RJ', 'name' => 'RIO DE JANEIRO'],
            ['value' => 'Rs', 'name' => 'RIO GRANDE DO SUL'],


        ];

        $this->categories = [
            ['value' => 'Brinquedos', 'name' => 'Brinquedos'],
            ['value' => 'Veiculos', 'name' => 'Veiculos'],
            ['value' => 'informatica', 'name' => 'Informatica'],

        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero');
    }
}
