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
    public $userCity;
    public $userState;

    public function mount($groupClass = '', $city = null)
    {
        $this->groupClass = $groupClass;

        $this->states = State::all();
        $this->cities = collect();

        if ($city) {
            $this->userCity = $city;
            $this->userState = $city->state;
            $this->stateId = $city->state_id;
            $this->cities = $this->userState->cities;
            $this->cityId = $city->id;
        }
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
