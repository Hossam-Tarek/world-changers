<x-admin.layouts.card>
    <x-slot name="title">{{ __('admin.units') }}</x-slot>

    <x-slot name="pageTitle">{{ __('admin.unit') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.edit') .' '. __('admin.unit') }}</x-slot>

    <form action="{{ route('admin.units.update', $unit) }}" method="post">
        @csrf
        @method('put')
        @include('admin.units.form')
    </form>
</x-admin.layouts.card>
