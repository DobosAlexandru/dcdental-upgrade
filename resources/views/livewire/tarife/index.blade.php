<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        {{-- Main Heading --}}
        <div class=" flex w-full p-3 space-x-2">

            {{-- Search Box --}}
            <div class="w-3/6">
                <span
                    class="absolute z-10 items-center justify-center w-8 h-full py-3 pl-3 text-base font-normal leading-snug text-center text-gray-400 bg-transparent rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </span>

                <input wire:model.debounce.300ms="search" type="text"
                    class="relative w-full px-3 py-3 pl-10 text-sm text-gray-900 bg-gray-100 border-none rounded shadow-inner outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-100"
                    placeholder="Search Post...">
            </div>


            {{-- Order By --}}
            <div class="relative w-1/6">
                <select wire:model='orderBy' id=""
                    class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-100">
                    <option value="id">ID</option>
                    <option value="name">Name</option>
                    <option value="tarifCategory_id">Category</option>
                    <option value="created_at">Created At</option>
                </select>
            </div>

            {{-- Order Asc --}}
            <div class="relative w-1/6">
                <select wire:model='orderAsc' id=""
                    class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-100">
                    <option value="1">Asc</option>
                    <option value="0">Desc</option>
                </select>
            </div>

            {{-- Per Page--}}
            <div class="relative w-1/6">
                <select wire:model='perPage' id=""
                    class="relative w-full px-3 py-3 pl-10 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border-none rounded outline-none focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-100">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>


        <table class="w-full divide-y divide-gray-200">
            <thead class="font-bold text-gray-700 bg-indigo-200">
                <tr>
                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Id
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Name
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Category
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Price
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Price unit
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Created Date
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Updated Date
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Actions
                    </th>

                </tr>

            </thead>

            <tbody class="text-xs divide-y divide-gray-200 bg-indigo-100">
                @foreach($tratamente as $tratament)
                <tr>
                    <td class="px-2 py-4 whitespace-nowrap">

                    </td>
                    <td class="px-2 py-4 whitespace-nowrap">
                        {{ $tratament->id }}
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap">
                        {{ $tratament->name }}
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap">
                        {{ $tratament->tarifCategory->name }}
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap">
                        {{ $tratament->price }}
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap">
                        {{ $tratament->price_unit }}
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap">
                        {{ $tratament->created_at->format('d/m/y') }}
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap">
                        {{ $tratament->updated_at->format('d/m/y') }}
                    </td>

                    <td class="px-2 py-4 text-sm text-gray-500 whitespace-nowrap">
                        <div class="flex justify-start space-x-1">

                            <a href="{{ route('tratamente.edit', $tratament) }}"
                                class="p-1 border-2 border-indigo-700 rounded-md">
                                <svg class="text-indigo-700 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-4 h-4 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>



                            <livewire:buttons.delete-treatment :tratament="$tratament" :key="$tratament->id" />
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-2 bg-indigo-300">
            {{ $tratamente->links() }}
        </div>
    </div>
</div>
