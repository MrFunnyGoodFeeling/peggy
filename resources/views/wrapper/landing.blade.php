@extends('layouts.wrapper')

@section('page_title')
Welcome
@endsection

@section('content')

<!-- Main -->
<div class="bg-gray-50">
    <div class="flex flex-col justify-between min-h-screen">

        <!-- Navbar -->
        <x-navbar />

        <!-- Content -->
        <div class="mx-auto max-w-2xl">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div class="relative rounded-full bg-white px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    Announcing our next round of funding. <a href="#" class="font-semibold text-indigo-600"><span aria-hidden="true" class="absolute inset-0"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">Data to enrich your online business</h1>
                <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                    <a href="#" class="text-sm/6 font-semibold text-gray-900">Learn more <span aria-hidden="true">→</span></a>
                </div>
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