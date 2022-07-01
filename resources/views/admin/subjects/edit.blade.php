<x-admin.layouts.card>
    <x-slot name="title">{{ __('admin.subjects') }}</x-slot>

    <x-slot name="styles">
        <livewire:styles/>
    </x-slot>

    <x-slot name="pageTitle">{{ __('admin.subject') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.edit') .' '. __('admin.subject') }}</x-slot>

    <form action="{{ route('admin.subjects.update', $subject) }}" method="post">
        @csrf
        @method('put')
        @include('admin.subjects.form')
    </form>

    <x-slot name="scripts">
        <livewire:scripts/>
    </x-slot>
</x-admin.layouts.card>
