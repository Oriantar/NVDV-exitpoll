<x-guest-layout>
    <div class="bg-[#FDFDFC] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">

        <div class="w-full max-w-3xl text-center">
            <h1 class="text-4xl lg:text-5xl font-extrabold mb-6">
                Welkom bij de Hogeschool Leiden ExitPoll
            </h1>
            
        </div>
        <p class="text-lg lg:text-xl mb-6  max-w-2xl">
                Vul hier je token in en op welke partij je gaat stemmen!
            </p>
        <form method="POST" action="{{ route('vote') }}">
        @csrf

        <div>
            <x-input-label for="token" :value="__('token')" />
            <x-text-input id="token" class="block mt-1 w-full" type="text" name="token" :value="old('token')" required autofocus autocomplete="token" />
            <x-input-error :messages="$errors->get('token')" class="mt-2" />
        </div>
        
        <div>
            <x-input-label for=$party :value="__('Political Party')" />
            @foreach ($parties as $party)
                <div>
                    <input type="radio" id="{{ $party->name }}" name="party" value="{{ $party->name }}" class="mr-2">
                    <label for="{{ $party->name }}">{{ $party->name }} ({{ $party->abbreviation }})</label>
                </div>
            @endforeach
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4 mt-4">
                {{ __('vote') }}
            </x-primary-button>
        </div>
    </form>
        </div>
    </div>
</x-guest-layout>