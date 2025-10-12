<x-guest-layout>
        <div class="bg-[#FDFDFC] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <h1 class="text-3xl mb-8 font-bold">Exit Poll Resultaten</h1>
            <div class="w-full max-w-3xl text-center">
                <div class="grid border border-[#1b1b18]">
                    <div class="grid grid-cols-6 py-1 italic items-center">
                        <div class="flex items-center pl-4  w-36">
                            <h1 class="border border-[#1b1b18] px-2">Partij</h1>
                            <h1 class="border border-[#1b1b18] px-2">Afkorting</h1>
                            <h2 class="border border-[#1b1b18] px-2">Zetels</h2>
                        </div>
                    </div>
                @foreach ($partys as $party)
                    <div class="grid grid-cols-6 py-1  items-center">
                        <div class="flex items-center pl-4  w-36 ">
                            <img src="{{ $party->logo }}" class="w-8" />
                            <h1 class="ml-2 italic">{{ $party->abbreviation }}</h1>
                            <h2 class="ml-2">{{ $party->seats}}</h2>
                        </div>
                    <div class="ml-4 border h-6" style="width: {{ $party->seats * (46/150) }}rem; background-color: {{ $party->color }}">       
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mt-4">
                <h1 class="text-sm italic">* Deze resultaten zijn gebaseerd op een exitpoll uitgevoerd door HSLeiden en gebaseerd op {{ $countedVotes }} stemmen.</h1>
            </div>
        </div>
    </div>
</x-guest-layout>