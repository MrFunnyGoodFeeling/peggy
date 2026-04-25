@extends('layouts.wrapper')

@section('page_title')
Under Construction
@endsection

@section('content')

<!-- Main -->
<div class="bg-gray-50">
    <div class="flex flex-col justify-between min-h-screen">

        <!-- Navbar -->
        <x-navbar />

        <!-- Content -->
        <div class="flex justify-center">
            <div class="max-w-lg">
                <img src="/img/undraw/undraw_brainstorming_gny9.svg">
            </div>
        </div>
        <!-- END OF Content -->

        <!-- Footer -->
        <div class="bg-gray-800">
            <x-footer />
        </div>

    </div>
</div>
<!-- END OF Main -->

@endsection