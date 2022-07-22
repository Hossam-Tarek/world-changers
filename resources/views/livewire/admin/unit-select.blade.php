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
        <label for="subject_id">{{ __('admin.subject') }}</label>
        <select wire:model="subjectId" name="subject_id" id="subject_id" class="form-control">
            <option value="">{{ __("admin.choose") .' '. __('admin.subject') }}</option>
            @foreach($subjects as $subject)
                <option value="{{ $subject->id }}" @if(isset($lesson)) {{ $lesson->unit->subject_id == $subject->id ? "selected" : '' }} @endif>{{ $subject->name_ar }}</option>
            @endforeach
        </select>
        @error('subject_id')
        <p class="help text-danger">{{ $errors->first('subject_id') }}</p>
        @enderror
    </div>

    <div class="form-group {{ $groupClass ?? ''  }}">
        <label for="unit_id">{{ __('admin.unit') }}</label>
        <select wire:model="unitId" name="unit_id" id="unit_id" class="form-control">
            <option value="">{{ __("admin.choose") .' '. __('admin.unit') }}</option>
            @foreach($units as $unit)
                <option value="{{ $unit->id }}" @if(isset($lesson)) {{ $lesson->unit_id == $unit->id ? "selected" : '' }} @endif>{{ $unit->name_ar }}</option>
            @endforeach
        </select>
        @error('unit_id')
        <p class="help text-danger">{{ $errors->first('unit_id') }}</p>
        @enderror
    </div>
</div>
