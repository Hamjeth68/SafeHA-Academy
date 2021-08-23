<div>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <div class="mt-8 text-2xl flex justify-between">
            <div>Users</div>
        </div>

        <div class="mr-2">
            <a class="btn btn-primary" class="bg-blue-500 hover:bg-blue-700" href="{{ route('users.pdf') }}">Export to PDF</a>
        </div>
        {{-- {{ $query }} --}}
        <div class="mt-6">
            <div class="flex justify-between">
                {{-- <div class="p-2">
                    <input wire:model="q" class="search" placeholder="Search Course"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none" />
                </div> --}}
            </div>
            <table class="table-auto-w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">
                            <div class="flex-items-center">ID</div>
                        </th>
                        <th class="px-4 py-2">
                            <div class="flex-items-center">Name</div>
                        </th>
                        <th class="px-4 py-2">
                            <div class="flex-items-center">Email</div>
                        </th>
                        <th class="px-4 py-2">
                            <div class="flex-items-center">UserType</div>
                        </th>
                        <th class="px-4 py-2">
                            <div class="flex-items-center">Phone</div>
                        </th>
                        <th class="px-4 py-2">
                            <div class="flex-items-center">Address</div>
                        </th>
                        <th class="px-4 py-2">
                            <div class="flex-items-center">Profession/Occupation</div>
                        </th>
                        <th class="px-4 py-2">
                            <div class="flex-items-center">State</div>
                        </th>
                    </tr>
                </thead>

                <body>
                    @foreach ($users as $item)
                        <tr>
                            <td class="border px-4 py-2">{{ $item->id }}</td>
                            <td class="border px-4 py-2">{{ $item->name }}</td>
                            <td class="border px-4 py-2">{{ $item->email }}</td>
                            <td class="border px-4 py-2">{{ $item->user_type }}</td>
                            <td class="border px-4 py-2">{{ $item->phone }}</td>
                            <td class="border px-4 py-2">{{ $item->address }}</td>
                            <td class="border px-4 py-2">{{ $item->profession_occupation }}</td>
                            <td class="border px-4 py-2">{{ $item->state }}</td>
                        </tr>
                    @endforeach
                </body>
            </table>
        </div>
    </div>
