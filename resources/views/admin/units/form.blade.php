<x-form.input name="name_ar" value="{{ isset($unit) ? $unit->name_ar : null }}">{{ __('admin.name') .' '. __('admin.in_arabic') }}</x-form.input>
<x-form.input name="name_en" value="{{ isset($unit) ? $unit->name_en : null }}">{{ __('admin.name') .' '. __('admin.in_english') }}</x-form.input>
<x-form.input name="name_fr" value="{{ isset($unit) ? $unit->name_fr : null }}">{{ __('admin.name') .' '. __('admin.in_french') }}</x-form.input>

<div class="form-group">
    <label for="role">{{ __('admin.subject') }}</label>
    <select name="subject_id" id="subject_id" class="form-control">
        <option value="" selected>{{ __("admin.choose").' '.__('admin.subject') }}</option>
        @foreach($subjects as $subject)
            <option value="{{ $subject->id }}"
                    @if(isset($unit))
                        {{ $unit->subject_id == $subject->id ? 'selected' : '' }}
                    @else
                        {{ old('subject_id') == $subject->id ? 'selected' : '' }}
                    @endif
            >{{ $subject->name_ar.' - '.$subject->year->name }}</option>
        @endforeach
    </select>
    @error('subject_id')
    <p class="help text-danger">{{ $errors->first('subject_id') }}</p>
    @enderror
</div>

<x-form.submit redirectRoute="{{ route('admin.units.index') }}">{{ isset($unit) ? __('admin.edit') : __('admin.add') }}</x-form.submit>
