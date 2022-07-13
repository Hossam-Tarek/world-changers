<x-form.input name="name_ar" value="{{ isset($subject) ? $subject->name_ar : null }}">{{ __('admin.name') .' '. __('admin.in_arabic') }}</x-form.input>
<x-form.input name="name_en" value="{{ isset($subject) ? $subject->name_en : null }}">{{ __('admin.name') .' '. __('admin.in_english') }}</x-form.input>
<x-form.input name="name_fr" value="{{ isset($subject) ? $subject->name_fr : null }}">{{ __('admin.name') .' '. __('admin.in_french') }}</x-form.input>

<livewire:admin.year-departments-multi-select :subject="$subject ?? null"/>

<x-form.submit redirectRoute="{{ route('admin.subjects.index') }}">{{ isset($subject) ? __('admin.edit') : __('admin.add') }}</x-form.submit>
