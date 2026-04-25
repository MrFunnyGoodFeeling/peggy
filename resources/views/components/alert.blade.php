<div>
    @if(session('alertInfo'))
        <div class="bg-blue-50 border-b border-blue-100 py-3">
            <div class="mx-auto max-w-7xl">
                <div class="px-4 sm:px-6 lg:px-8">
                    <p class="text-sm text-blue-700">
                        {{ session('alertInfo') }}
                    </p>
                </div>
            </div>
        </div>
    @endif
    @if(session('alertSuccess'))
        <div class="bg-green-50 border-b border-green-100 py-3">
            <div class="mx-auto max-w-7xl">
                <div class="px-4 sm:px-6 lg:px-8">
                    <p class="text-sm text-green-700">
                        {{ session('alertSuccess') }}
                    </p>
                </div>
            </div>
        </div>
    @endif
    @if(session('alertWarning'))
        <div class="bg-yellow-50 border-b border-yellow-100 py-3">
            <div class="mx-auto max-w-7xl">
                <div class="px-4 sm:px-6 lg:px-8">
                    <p class="text-sm text-yellow-700">
                        {{ session('alertWarning') }}
                    </p>
                </div>
            </div>
        </div>
    @endif
    @if(session('alertDanger'))
        <div class="bg-red-50 border-b border-red-100 py-3">
            <div class="mx-auto max-w-7xl">
                <div class="px-4 sm:px-6 lg:px-8">
                    <p class="text-sm text-red-700">
                        {{ session('alertDanger') }}
                    </p>
                </div>
            </div>
        </div>
    @endif
</div>