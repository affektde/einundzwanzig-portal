<div class="bg-21gray flex flex-col h-screen justify-between">
    {{-- HEADER --}}
    <livewire:frontend.header :country="$country"/>
    {{-- MAIN --}}
    <section class="w-full mb-12">
        <div class="max-w-screen-2xl mx-auto px-2 sm:px-10 space-y-4" id="table">
            <div class="flex items-start">
                <div class="w-1/2">
                    <h1 class="mb-6 text-5xl font-extrabold leading-none max-w-5xl mx-auto tracking-normal text-gray-200 sm:text-6xl md:text-6xl lg:text-7xl md:tracking-tight">
                        Bitcoin <span
                            class="w-full text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-amber-500 to-amber-200 lg:inline">{{ __('Bookcases') }}</span>
                    </h1>
                    <p class="px-0 mb-6 text-lg text-gray-600 md:text-xl lg:px-24">
                        {{ __('Search out a public bookcase') }}
                    </p>
                </div>
            </div>

            <livewire:tables.city-table :country="$country->code" type="bookCase"/>
        </div>
    </section>
    {{-- FOOTER --}}
    <livewire:frontend.footer/>
</div>
