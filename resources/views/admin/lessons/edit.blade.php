<x-admin.layouts.card>
    <x-slot name="title">{{ __('admin.lessons') }}</x-slot>

    <x-slot name="pageTitle">{{ __('admin.lesson') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.edit') .' '. __('admin.lesson') }}</x-slot>

    <x-slot name="styles">
        <livewire:styles/>
    </x-slot>

    <form action="{{ route('admin.lessons.update', $lesson) }}" method="post">
        @csrf
        @method('put')
        @include('admin.lessons.form')
    </form>

    <x-slot name="scripts">
        <livewire:scripts/>
    </x-slot>
</x-admin.layouts.card>
