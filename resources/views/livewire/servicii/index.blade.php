<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        {{-- Table --}}
        <table class="w-full divide-y divide-gray-200">
            <thead class="font-bold text-gray-900 bg-indigo-200">
                <tr>
                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Id
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Meta Title
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Name
                    </th>

                    <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        Video Id
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
                @foreach($servicii as $serviciu)
                <tr>
                    <td class="px-2 py-4 whitespace-nowrap">

                    </td>

                    <td class="px-2 py-4 whitespace-nowrap">
                        {{ $serviciu->id }}
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap">
                        {{ $serviciu->title }}
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap">
                        {{ $serviciu->nav_title }}
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap">
                        {{ $serviciu->video_id }}
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap">
                        {{ $serviciu->created_at->format('d/m/y') }}
                    </td>

                    <td class="px-2 py-4 whitespace-nowrap">
                        {{ $serviciu->updated_at->format('d/m/y') }}
                    </td>

                    <td class="px-2 py-4 text-sm text-gray-500 whitespace-nowrap">
                        <div class="flex justify-start space-x-1">

                            <a href="{{ route('servicii.edit', $serviciu) }}"
                                class="p-1 border-2 border-indigo-700 rounded-md">
                                <svg class="text-indigo-700 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-4 h-4 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>



                            <livewire:buttons.delete :serviciu="$serviciu" :key="$serviciu->id" />
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
