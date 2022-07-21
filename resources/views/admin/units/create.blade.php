<x-admin.layouts.card>
    <x-slot name="pageTitle">{{ __('admin.units') }}</x-slot>
    <x-slot name="cardHeader">{{ __('admin.add') .' '. __('admin.unit') }}</x-slot>

    <form action="{{ route('admin.units.store') }}" method="post">
        @csrf
        @include('admin.units.form')
    </form>

</x-admin.layouts.card>
