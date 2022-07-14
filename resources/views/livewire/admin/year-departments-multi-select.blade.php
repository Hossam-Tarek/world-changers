<div class="col-md-12">
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

    <div class="select2-purple mb-3">
        <label for="departments">{{ __('admin.departments') }}</label>
        <select name="departments[]" id="departments" class="select2 @error('departments') is-invalid @enderror" multiple="multiple" data-placeholder="{{ __('admin.choose').' '.__('admin.departments') }}" data-dropdown-css-class="select2-purple" style="width: 100%;">
            <option value="">{{ __('admin.choose').' '.__('admin.departments') }}</option>
            @foreach($departments as $department)
                <option value="{{ $department->id }}"
                    {{ isset($subjectDepartments) && $subjectDepartments != null && in_array($department->id, $subjectDepartments) ? 'selected' : '' }}
                >{{ $department->name }}</option>
            @endforeach
        </select>
        @error('departments')
        <p class="help text-danger">{{ $errors->first('departments') }}</p>
        @enderror
    </div>
</div>
