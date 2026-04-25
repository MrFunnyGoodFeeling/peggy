@extends('layouts.wrapper')

@section('page_title')
Tables
@endsection

@section('content')

<!-- Navbar -->
<x-navbar page="tables" />

<!-- Breadcrumb -->
<div class="bg-white border-b border-gray-200">
    <div class="mx-auto max-w-7xl">
        <div class="px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center justify-between h-12">
                <ol role="list" class="flex space-x-1">
                    <li>
                        <p class="text-gray-500 text-sm">
                            Tables
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
    <div class="bg-white py-4">
        <div class="mx-auto max-w-7xl">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex items-center space-x-2">
                    <span class="text-sm">spam messages</span>
                    <span class="inline-flex items-center rounded-full bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700 ring-1 ring-inset ring-indigo-50">
                        2,550
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Section -->

    <!-- Section -->
    <div class="bg-white py-4">
        <div class="mx-auto max-w-7xl">
            <div class="md:px-6 lg:px-8">
                <div class="overflow-hidden border-t border-b md:border-r md:border-l border-gray-200 md:rounded-md shadow-sm">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    song
                                </th>
                                <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    artist
                                </th>
                                <th scope="col" class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    year
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="py-4 px-6">
                                    <p class="text-gray-700 text-sm font-medium">
                                        <a href="#" class="hover:text-indigo-500">
                                            The Sliding Mr. Bones (Next Stop, Pottersville)
                                        </a>
                                    </p>
                                </td>
                                <td class="py-4 px-6">
                                    <p class="text-gray-700 text-sm font-medium">
                                        Malcolm Lockyer
                                    </p>
                                </td>
                                <td class="py-1 px-6">
                                    <div class="flex space-x-2">
                                        <button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                            Change
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-4 px-6">
                                    <p class="text-gray-700 text-sm font-medium">
                                        <a href="#" class="hover:text-indigo-500">
                                            Witchy Woman
                                        </a>
                                    </p>
                                </td>
                                <td class="py-4 px-6">
                                    <p class="text-gray-700 text-sm font-medium">
                                        The Eagles
                                    </p>
                                </td>
                                <td class="py-1 px-6">
                                    <div class="flex space-x-2">
                                        <button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                            Change
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-4 px-6">
                                    <p class="text-gray-700 text-sm font-medium">
                                        <a href="#" class="hover:text-indigo-500">
                                            Shining Star
                                        </a>
                                    </p>
                                </td>
                                <td class="py-4 px-6">
                                    <p class="text-gray-700 text-sm font-medium">
                                        The Eagles
                                    </p>
                                </td>
                                <td class="py-1 px-6">
                                    <div class="flex space-x-2">
                                        <button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                            Change
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF Section -->

    <!-- Section -->
    <div class="bg-white py-4">
        <div class="mx-auto max-w-7xl">
            <div class="md:px-6 lg:px-8">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-200 py-2 px-5">
                                name
                            </th>
                            <th scope="col" class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-200 py-2 px-5">
                                title
                            </th>
                            <th scope="col" class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-200 py-2 px-5">
                                e-mail
                            </th>
                            <th scope="col" class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-200 py-2 px-5">
                                role
                            </th>
                            <th scope="col" class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-200 py-2 px-5">
                                options
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="border border-gray-200 py-3 px-5">
                                <p class="text-sm font-semibold">
                                    Lindsay Walton
                                </p>
                            </td>
                            <td class="border border-gray-200 py-3 px-5">
                                <p class="text-sm">
                                    Front-end Developer
                                </p>
                            </td>
                            <td class="border border-gray-200 py-3 px-5">
                                <p class="text-sm">
                                    lindsay.walton@example.com
                                </p>
                            </td>
                            <td class="border border-gray-200 py-3 px-5">
                                <p class="text-sm">
                                    Member
                                </p>
                            </td>
                            <td class="border border-gray-200 py-3 px-5">
                                <p class="text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-400">
                                        Edit
                                    </a>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END OF Section -->

    <!-- Section -->
    <div class="bg-white">
        <div class="mx-auto max-w-7xl">
            <div class="md:px-6 lg:px-8">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-gray-200">
                            <th class="text-left py-4 px-6 text-sm font-semibold">Name</th>
                            <th class="text-left py-4 px-6 text-sm font-semibold">Status</th>
                            <th class="text-left py-4 px-6 text-sm font-semibold">Role</th>
                            <th class="text-left py-4 px-6 text-sm font-semibold">Date</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="py-4 px-6 text-sm text-gray-800">John Cooper</td>
                            <td class="py-4 px-6 text-sm text-gray-800">Active</td>
                            <td class="py-4 px-6 text-sm text-gray-800">Developer</td>
                            <td class="py-4 px-6 text-sm text-gray-800">Jan 12, 2024</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 text-sm text-gray-800">Sarah Blake</td>
                            <td class="py-4 px-6 text-sm text-gray-800">Offline</td>
                            <td class="py-4 px-6 text-sm text-gray-800">Designer</td>
                            <td class="py-4 px-6 text-sm text-gray-800">Jan 12, 2024</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 text-sm text-gray-800">Mike Johnson</td>
                            <td class="py-4 px-6 text-sm text-gray-800">Active</td>
                            <td class="py-4 px-6 text-sm text-gray-800">Manager</td>
                            <td class="py-4 px-6 text-sm text-gray-800">Jan 12, 2024</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END OF Section -->

</div>
<!-- END OF Main -->

<!-- Footer -->
<x-footer />

@endsection
