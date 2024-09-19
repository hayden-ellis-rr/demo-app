<x-app-layout>
    <div class="pt-6 sm:px-6 lg:px-10">
        <p class="text-green-700 font-medium text-2xl text-center">Profiles</p>
        <div class="flex justify-start mb-4 mt-4">
            <div class="w-1/2 md:w-1/4 relative text-sm text-gray-800 col-span-3">
                <div class="absolute pl-2 left-0 top-0 bottom-0 flex items-center pointer-events-none text-gray-500">
                    <x-icon.magnifying-glass />
                </div>

                <input wire:model.live.debounce.500ms="search" type="text" placeholder="Search for a profile"
                    class="block w-full rounded-lg border-0 py-1.5 pl-10 text-gray-700 ring-1 ring-inset ring-gray-200 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>

        <div class="relative overflow-x-auto overflow-y-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-2 py-3">Date</th>
                        <th scope="col" class="px-2 py-3">Name</th>
                        <th scope="col" class="px-2 py-3">Phone</th>
                        <th scope="col" class="px-2 py-3">Email</th>
                        <th scope="col" class="px-2 py-3">City</th>
                        <th scope="col" class="px-2 py-3">State</th>
                        <th scope="col" class="px-2 py-3">Zip</th>
                        <th scope="col" class="px-2 py-3"><span class="sr-only">Delete</span></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($profiles as $profile)
                    <tr 
                        x-data 
                        @click="window.location.href = 'profile/{{ $profile->id }}'" 
                        class="bg-white border-b hover:bg-gray-50 cursor-pointer"
                    >
                        <th scope="row" class="px-2 py-4 font-light text-gray-700 whitespace-nowrap">
                            {{ $profile->updated_at->format('F j, Y, g:i a') }}
                        </th>
                        <th scope="row" class="px-2 py-4 font-light text-gray-700 whitespace-nowrap">
                            {{ $profile->name }}
                        </th>
                        <th scope="row" class="px-2 py-4 font-light text-gray-700 whitespace-nowrap">
                            {{ $profile->phone }}
                        </th>
                        <th scope="row" class="px-2 py-4 font-light text-gray-700 whitespace-nowrap">
                            {{ $profile->email }}
                        </th>
                        <th scope="row" class="px-2 py-4 font-light text-gray-700 whitespace-nowrap">
                            {{ $profile->city }}
                        </th>
                        <th scope="row" class="px-2 py-4 font-light text-gray-700 whitespace-nowrap">
                            {{ $profile->state }}
                        </th>
                        <th scope="row" class="px-2 py-4 font-light text-gray-700 whitespace-nowrap">
                            {{ $profile->zip }}
                        </th>
                        <td class="px-2 py-4">
                            <button 
                                wire:click.prevent="delete('{{ $profile->id }}')" 
                                wire:confirm="Are you sure you want to delete this profile?" 
                                class="font-light text-blue-600 dark:text-blue-500 hover:underline" 
                                @click.stop
                            >
                                Delete
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="px-2 py-4 text-center text-gray-700">No profiles found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            <div wire:loading class="absolute inset-0 bg-white opacity-50"></div>
            <div wire:loading.flex class="flex justify-center items-center absolute inset-0">
                <x-icon.spinner size="10" />
            </div>
        </div>
        
        <div class="flex justify-between mt-2 mb-1">
            <div class="align-middle py-2 text-slate-700">Results: {{ \Illuminate\Support\Number::format($profiles->total()) }}</div>
            <div>{{ $profiles->onEachSide(2)->links() }}</div>
        </div>
    </div>
</x-app-layout>
