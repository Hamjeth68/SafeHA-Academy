<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="mt-8 text-2xl flex justify-between">
        <div>Products</div>
        <div class="mr-2">
        </div>
    </div>


    {{-- {{ $query }} --}}
    <div class="mt-6">

        <table class="table-auto-w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">
                        <div class="flex-items-center">ID</div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex-items-center">Title</div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex-items-center">Name</div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex-items-center">Description</div>
                    </th>
                    <th class="px-4 py-2">
                        <div class="flex-items-center">Price</div>
                    </th>
                </tr>
            </thead>

            <body>
                @foreach ($products as $product)
                    <tr>
                        <td class="border px-4 py-2">{{ $product->id }}</td>
                        <td class="border px-4 py-2">{{ $product->p_title }}</td>
                        <td class="border px-4 py-2">{{ $product->p_name }}</td>
                        <td class="border px-4 py-2"> {!! $product->p_description !!}</td>
                        <td class="border px-4 py-2">{{ $product->p_amount }}</td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
