<?php

namespace App\Http\Livewire\Main;

use App\Models\City;
use App\Models\State;
use Livewire\Component;

class StateCitySelect extends Component
{
    public $states;
    public $stateId;
    public $cities;
    public $cityId;
    public $groupClass;

    public function mount($groupClass = '')
    {
        $this->groupClass = $groupClass;

        $this->states = State::all();
        $this->cities = collect();
    }

    public function updatedStateId($id)
    {
        if (!is_numeric($id)) {
            $this->cities = collect();
        }
        $this->cities = City::where('state_id', $id)->get();
    }

    public function render()
    {
        return view('livewire.main.state-city-select');
    }
}
