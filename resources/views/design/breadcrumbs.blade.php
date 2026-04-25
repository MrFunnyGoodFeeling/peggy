@extends('layouts.wrapper')

@section('page_title')
Breadcrumbs
@endsection

@section('content')

<!-- Navbar -->
<x-navbar page="breadcrumbs" />

<!-- Breadcrumb -->
<div class="bg-white border-b border-gray-200">
    <div class="mx-auto max-w-7xl">
        <div class="px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center justify-between h-12">
                <ol role="list" class="flex space-x-1">
                    <li>
                        <p class="text-gray-500 text-sm">
                            Breadcrumbs
                        </p>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END OF Breadcrumb -->

<!-- Alerts -->
<x-alert />

<!-- Main -->
<div class="divide-y divide-gray-200">

    <!-- Section -->
    <div class="bg-white">
        <div class="mx-auto max-w-7xl">
            <div class="px-4 sm:px-6 lg:px-8">
                <nav class="flex items-center justify-between h-12">
                    <ol role="list" class="flex space-x-1">
                        <li>
                            <div class="flex items-center">
                                <a href="#" class="text-sm font-medium text-gray-900 hover:text-indigo-500 mr-1">
                                    Banana
                                </a>
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                </svg>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <a href="#" class="text-sm font-medium text-gray-900 hover:text-indigo-500 mr-1">
                                    Pineapple
                                </a>
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                </svg>
                            </div>
                        </li>
                        <li>
                            <p class="text-gray-500 text-sm">
                                Possum Tackler
                            </p>
                        </li>
                    </ol>
                    <div class="flex space-x-3">
                        <a href="#" class="inline-flex space-x-1 rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                            </svg>
                            <span>Back</span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- END OF Section -->

    <!-- Section -->
    <div class="bg-white">
        <div class="mx-auto max-w-7xl">
            <div class="px-4 sm:px-6 lg:px-8">
                <nav class="flex items-center justify-between h-12">
                    <ol role="list" class="flex space-x-1">
                        <li>
                            <div class="flex items-center">
                                <a href="#" class="text-sm font-medium text-gray-900 hover:text-indigo-500 mr-1">
                                    Banana
                                </a>
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                </svg>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <a href="#" class="text-sm font-medium text-gray-900 hover:text-indigo-500 mr-1">
                                    Pineapple
                                </a>
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                </svg>
                            </div>
                        </li>
                        <li>
                            <p class="text-gray-500 text-sm">
                                Possum Tackler
                            </p>
                        </li>
                    </ol>
                    <div class="flex space-x-3">
                        <a href="#" class="inline-flex space-x-1 rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            <span>New Post</span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- END OF Section -->

    <!-- Section -->
    <div class="bg-white">
        <div class="mx-auto max-w-7xl">
            <div class="px-4 sm:px-6 lg:px-8">
                <nav class="flex items-center justify-between h-12">
                    <ol role="list" class="flex space-x-1">
                        <li>
                            <div class="flex items-center">
                                <a href="#" class="text-sm font-medium text-gray-900 hover:text-indigo-500 mr-1">
                                    Banana
                                </a>
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                </svg>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <a href="#" class="text-sm font-medium text-gray-900 hover:text-indigo-500 mr-1">
                                    Pineapple
                                </a>
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                </svg>
                            </div>
                        </li>
                        <li>
                            <p class="text-gray-500 text-sm">
                                Possum Tackler
                            </p>
                        </li>
                    </ol>
                    <div class="flex space-x-3">
                        <div x-data="{ open: false }" class="relative inline-block text-left">
                            <div>
                                <button type="button" @click="open = !open" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                    <span>Options</span>
                                    <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            <div x-show="open" @click.outside="open = false" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5" style="display:none">
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:text-indigo-500">Account settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:text-indigo-500">Support</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:text-indigo-500">License</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- END OF Section -->

</div>
<!-- END OF Main -->

@endsection
