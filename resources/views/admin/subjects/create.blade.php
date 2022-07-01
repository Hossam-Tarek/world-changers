<x-admin.layouts.card>
    <x-slot name="styles">
        <livewire:styles/>
    </x-slot>

    <x-slot name="pageTitle">{{ __('admin.subjects') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.add') .' '. __('admin.subject') }}</x-slot>

    <form action="{{ route('admin.subjects.store') }}" method="post">
        @csrf
        @include('admin.subjects.form')
    </form>

    <x-slot name="scripts">
        <livewire:scripts/>
    </x-slot>
</x-admin.layouts.card>
