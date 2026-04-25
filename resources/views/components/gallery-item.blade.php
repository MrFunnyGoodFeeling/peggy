<div>
    <div x-data="{ open: false }">
        <div class="bg-cover bg-center" style="background-image:url({{ $photo }})">
            <img @click="open = true" src="/img/placeholders/{{ $placeholder }}.png" class="cursor-pointer">
        </div>
        <div x-show="open" class="bg-gray-900 bg-opacity-90 h-screen fixed inset-0 flex items-center justify-center z-10" style="display:none">
            <div class="absolute top-0 right-0 bg-transparent p-4 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </div>
            <div @click.away="open = false" class="bg-transparent">
                <img src="{{ $photo }}" class="max-h-screen p-4">
            </div>
        </div>
    </div>
</div>