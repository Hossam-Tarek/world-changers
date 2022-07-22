<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.lessons') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.add') .' '. __('admin.lesson') }}</x-slot>

    <x-slot name="styles">
        <livewire:styles/>
    </x-slot>

    <form action="{{ route('admin.lessons.store') }}" method="post">
        @csrf
        @include('admin.lessons.form')
    </form>

    <x-slot name="scripts">
        <livewire:scripts/>
    </x-slot>
</x-admin.layouts.card>
