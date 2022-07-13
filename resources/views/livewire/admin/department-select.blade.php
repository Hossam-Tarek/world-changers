<div class="row mx-0 px-0">
    <div class="form-group {{ $groupClass ?? ''  }}">
        <label for="year_id">{{ __('admin.year') }}</label>
        <select wire:model="yearId" name="year_id" name="year_id" id="year_id" class="form-control">
            <option value="">{{ __("admin.choose") . ' ' . __('admin.year') }}</option>
            @foreach($years as $year)
                <option value="{{ $year->id }}">{{ $year->name }}</option>
            @endforeach
        </select>
        @error('year_id')
        <p class="help text-danger">{{ $errors->first('year_id') }}</p>
        @enderror
    </div>

    <div class="form-group {{ $groupClass ?? ''  }}">
        <label for="department">{{ __('admin.department') }}</label>
        <select wire:model="departmentId" name="department_id" id="department_id" class="form-control">
            <option value="">{{ __("admin.choose") .' '. __('admin.department') }}</option>
            @foreach($departments as $department)
                <option value="{{ $department->id }}" @if(isset($subject)) {{ $subject->department_id == $department->id ? "selected" : '' }} @endif>{{ $department->name }}</option>
            @endforeach
        </select>
        @error('department_id')
        <p class="help text-danger">{{ $errors->first('department_id') }}</p>
        @enderror
    </div>
</div>
