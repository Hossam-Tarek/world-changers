<livewire:admin.unit-select :lesson="$lesson ?? null" group-class="col-md-4"/>

<x-form.input name="name_ar" value="{{ isset($lesson) ? $lesson->name_ar : null }}">{{ __('admin.name') .' '. __('admin.in_arabic') }}</x-form.input>
<x-form.input name="name_en" value="{{ isset($lesson) ? $lesson->name_en : null }}">{{ __('admin.name') .' '. __('admin.in_english') }}</x-form.input>
<x-form.input name="name_fr" value="{{ isset($lesson) ? $lesson->name_fr : null }}">{{ __('admin.name') .' '. __('admin.in_french') }}</x-form.input>

<x-form.submit redirectRoute="{{ route('admin.lessons.index') }}">{{ isset($lesson) ? __('admin.edit') : __('admin.add') }}</x-form.submit>
