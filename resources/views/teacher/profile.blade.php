<x-teacher.layouts.master>
    <x-slot name="pageTitle">{{ __('teacher.profile') }}</x-slot>

    <x-teacher.includes.card cardHeader="{{ __('teacher.edit') .' '. __('teacher.profile') }}">
        <form action="{{ route('teacher.profile.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <x-form.input name="name" value="{{ $teacher->name }}">{{ __('teacher.name') }}</x-form.input>
            <x-form.input type="email" name="email" value="{{ $teacher->email }}" disabled>{{ __('teacher.email') }}</x-form.input>
            <x-form.input type="text" name="phone_number" value="{{ $teacher->phone_number }}">{{ __('teacher.phone_number') }}</x-form.input>
            <x-form.file name="image" image="{{ isset($teacher) ? $teacher->image : '' }}">{{ __('teacher.upload') .' '. __('teacher.image') }}</x-form.file>

            <x-form.submit redirectRoute="{{ route('teacher.profile.edit') }}">{{ __('teacher.edit') }}</x-form.submit>
        </form>
    </x-teacher.includes.card>

    <x-teacher.includes.card cardHeader="{{ __('teacher.change') .' '. __('teacher.password') }}">
        <form action="{{ route('teacher.profile.password') }}" method="post">
            @csrf

            <x-form.input type="password" name="password">{{ __('teacher.password') }}</x-form.input>
            <x-form.input type="password" name="new_password">{{ __('teacher.new_password') }}</x-form.input>
            <x-form.input type="password" name="new_password_confirmation">{{ __('teacher.confirm') .' '. __('teacher.password') }}</x-form.input>

            <x-form.submit :cancel="false">{{ __('teacher.change') }}</x-form.submit>
        </form>
    </x-teacher.includes.card>

</x-teacher.layouts.master>
