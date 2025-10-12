<form method="POST" action="{{ route('/') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for=$party :value="__('Political Party')" />
            <x-select id="party" class="block mt-1 w-full" name="party" required>
                <option value="" disabled selected>{{ __('Select a party') }}</option>
                @foreach ($parties as $party)
                    <option value="{{ $party->id }}">{{ $party->name }}</option>
                @endforeach
            </x-select>
            <x-input-error :messages="$errors->get('party')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="vote" :value="__('Vote')" />
            <x-text-input id="vote" class="block mt-1 w-full" type="number" name="vote" :value="old('vote')" required autofocus autocomplete="vote" />
            <x-input-error :messages="$errors->get('vote')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4 mt-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>