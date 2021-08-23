<div class="mt-6">
    <div class="flex justify-between">
        <h1>Product List</h1>
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
                        <div class="flex-items-center">User Type</div>
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
