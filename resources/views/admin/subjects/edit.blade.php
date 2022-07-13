<x-admin.layouts.card>
    <x-slot name="title">{{ __('admin.subjects') }}</x-slot>

    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('admin-assets/plugins/select2/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

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
        <script src="{{ asset('admin-assets/plugins/select2/js/select2.full.min.js') }}"></script>

        <script>
            $(document).ready(function () {
                intializeSelect2();
            });

            window.addEventListener('intializeSelect2', event => {
                intializeSelect2();
            });

            function intializeSelect2 ()
            {
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
            }
        </script>

        <livewire:scripts/>
    </x-slot>
</x-admin.layouts.card>
