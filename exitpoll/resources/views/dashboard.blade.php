<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#FDFDFC] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
            
                <div class="p-6 text-gray-900 w-full">
                    <h2 class="font-semibold text-lg mb-4">Parties</h2>
                    <div class=" gap-x-24 grid grid-cols-5 p-6 text-gray-900">
                        @foreach ($parties as $party)
                            <p>{{ $party->name }} ({{ $party->abbreviation }}): {{ $party->votes }} votes</p>
                        @endforeach
                    </div>
                </div>
                <div class="p-6 text-gray-900">
                   <a href="{{ route('dashboard.pdf') }}" class="text-blue-500">Print tokens as PDF</a>
                </div>
                <div class="p-6 text-gray-900 w-full">
                    <h2 class="font-semibold text-lg mb-4">Tokens</h2>
                <div class=" gap-x-32 grid grid-cols-6 p-6 text-gray-900">
                    @foreach ($tokens as $token)
                        <div class="flex"><p>{{ $token->token }} -</p><p class="italic">{{ $token->used ? 'used' : 'unused' }}</p></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
