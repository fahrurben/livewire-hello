@extends('backend.layouts.app')

@section('title', __('Biodata'))

@section('breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Biodata')
        </x-slot>

        <x-slot name="body">
            <livewire:backend.user-biodata-table />
        </x-slot>
    </x-backend.card>
@endsection
