<div class="row mx-0 px-0">
    <div class="form-group {{ $groupClass ?? ''  }}">
        <label for="state_id">{{ __('admin.state') }}</label>
        <select wire:model="stateId" name="state_id" name="state_id" id="state_id" class="form-control">
            <option value="">{{ __("admin.choose") . ' ' . __('admin.state') }}</option>
            @foreach($states as $state)
                <option value="{{ $state->id }}">{{ $state->name }}</option>
            @endforeach
        </select>
        @error('state_id')
            <p class="help text-danger">{{ $errors->first('state_id') }}</p>
        @enderror
    </div>

    <div class="form-group {{ $groupClass ?? ''  }}">
        <label for="city_id">{{ __('admin.city') }}</label>
        <select wire:model="cityId" name="city_id" id="city_id" class="form-control">
            <option value="">{{ __("admin.choose") .' '. __('admin.city') }}</option>
            @foreach($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
        @error('city_id')
            <p class="help text-danger">{{ $errors->first('city_id') }}</p>
        @enderror
    </div>
</div>
