<x-form.input name="name" value="{{ isset($subject) ? $subject->name : null }}">{{ __('admin.name') }}</x-form.input>

<livewire:admin.department-select :subject="$subject ?? null"/>

<div class="form-group">
    <label for="semester">{{ __('admin.semester') }}</label>
    <select class="form-control @error('semester') is-invalid @enderror" name="semester" id="semester">
        <option value="">{{ __('admin.choose').' '.__('admin.semester') }}</option>
        @foreach(\App\Constants\Semester::getList() as $key => $value)
            <option value="{{ $key }}"
            @if(isset($subject))
                {{ $key === $subject->semester ? 'selected' : '' }}
                @else
                {{ $key === old('semester') ? 'selected' : '' }}
                @endif
            >{{ $value }}</option>
        @endforeach
    </select>
    @error('semester')
    <p class="help text-danger">{{ $errors->first('semester') }}</p>
    @enderror
</div>

<x-form.submit redirectRoute="{{ route('admin.subjects.index') }}">{{ isset($subject) ? __('admin.edit') : __('admin.add') }}</x-form.submit>
