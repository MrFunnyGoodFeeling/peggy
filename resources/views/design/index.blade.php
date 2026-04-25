@extends('layouts.wrapper')

@section('page_title')
Design
@endsection

@section('content')

<!-- Navbar -->
<x-navbar page="design" />

<!-- Breadcrumb -->
<div class="bg-white border-b border-gray-200">
    <div class="mx-auto max-w-7xl">
        <div class="px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center justify-between h-12">
                <ol role="list" class="flex space-x-1">
                    <li>
                        <p class="text-gray-500 text-sm">
                            Design
                        </p>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END OF Breadcrumb -->

<!-- Main -->
<div class="divide-y divide-gray-200">

    <!-- Section -->
    <livewire:design.modals />

    <!-- Section -->
    <div class="bg-white py-6">
        <div class="mx-auto max-w-7xl">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex space-x-4">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring-2 focus:ring-gray-300 transition">
                        save
                    </button>
                    <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-200 transition">
                        cancel
                    </button>
                    <button type="button" class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring-2 focus:ring-red-300 transition">
                        delete
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF Section -->

    <!-- Section -->
    <div class="bg-white py-6">
        <div class="mx-auto max-w-7xl">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex space-x-4">
                    <button command="show-modal" commandfor="dialog" class="rounded-md bg-gray-950/5 px-2.5 py-1.5 text-sm font-semibold text-gray-900 hover:bg-gray-950/10">
                        Edit
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF Section -->

    <!-- Section -->
    <div class="bg-white py-6">
        <div class="mx-auto max-w-7xl">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="space-y-2">
                    <div class="flex space-x-3">
                        <span class="inline-flex items-center rounded-full bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Badge</span>
                        <span class="inline-flex items-center rounded-full bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10">Badge</span>
                        <span class="inline-flex items-center rounded-full bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Badge</span>
                        <span class="inline-flex items-center rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Badge</span>
                        <span class="inline-flex items-center rounded-full bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Badge</span>
                        <span class="inline-flex items-center rounded-full bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700 ring-1 ring-inset ring-indigo-700/10">Badge</span>
                        <span class="inline-flex items-center rounded-full bg-purple-50 px-2 py-1 text-xs font-medium text-purple-700 ring-1 ring-inset ring-purple-700/10">Badge</span>
                        <span class="inline-flex items-center rounded-full bg-pink-50 px-2 py-1 text-xs font-medium text-pink-700 ring-1 ring-inset ring-pink-700/10">Badge</span>
                    </div>
                    <div class="flex space-x-3">
                        <span class="inline-flex items-center rounded-full bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-50">Badge</span>
                        <span class="inline-flex items-center rounded-full bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-50">Badge</span>
                        <span class="inline-flex items-center rounded-full bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-50">Badge</span>
                        <span class="inline-flex items-center rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-50">Badge</span>
                        <span class="inline-flex items-center rounded-full bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-50">Badge</span>
                        <span class="inline-flex items-center rounded-full bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700 ring-1 ring-inset ring-indigo-50">Badge</span>
                        <span class="inline-flex items-center rounded-full bg-purple-50 px-2 py-1 text-xs font-medium text-purple-700 ring-1 ring-inset ring-purple-50">Badge</span>
                        <span class="inline-flex items-center rounded-full bg-pink-50 px-2 py-1 text-xs font-medium text-pink-700 ring-1 ring-inset ring-pink-50">Badge</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF Section -->

</div>
<!-- END OF Main -->

<!-- Footer -->
<x-footer />

@endsection
