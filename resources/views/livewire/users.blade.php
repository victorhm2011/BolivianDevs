<div>
    <div class="p-6 bg-white border-b border-gray-200">
        <p class="text-2xl text-gray-600 font-bold mb-6 underline"> 
            User list
        </p>
    </div>
    <div class="px-8">
        <input class="rounded-lg border float-right border-gray-300 mb-4 pl-8 w-1/3 mt-3" type="text" placeholder="Search" wire:model="search">
        <table class="w-full">
            <thead class="border-b-2 border-gray-300 text-indigo-600">
                <tr>
                    <th class="px-6 py-3 text-left">
                        Name
                    </th>
                    <th class="px-6 py-3 text-left">
                        Email
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="text-sm text-indigo-900 border-b border-gray-400">
                        <td class="px-6 py-4">
                            {{ $user->name }}  
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->email }}  
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
