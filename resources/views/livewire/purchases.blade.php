<div>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <div class="mt-8 text-2xl flex justify-between">
            <div>Purchases</div>
            <a class="btn btn-primary" class="bg-blue-500 hover:bg-blue-700" href="{{ route('purchases.pdf') }}">Export to PDF</a>
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
                            <div class="flex-items-center">Purchase ID</div>
                        </th>
                        <th class="px-4 py-2">
                            <div class="flex-items-center">Course</div>
                        </th>
                        <th class="px-4 py-2">
                            <div class="flex-items-center">Studnt Name</div>
                        </th>
                        <th class="px-4 py-2">
                            <div class="flex-items-center">Ref</div>
                        </th>
                        <th class="px-4 py-2">
                            <div class="flex-items-center">Price</div>
                        </th>
                    </tr>
                </thead>

                <body>
                    {{-- {{ var_dump($course_purchased[0]->product->p_title)}} --}}
                    @foreach ($course_purchased as $item)
                        <tr>
                            <td class="border px-4 py-2">{{ $item->id }}</td>
                            <td class="border px-4 py-2">{{ $item->product->p_title }}</td>
                            <td class="border px-4 py-2">{{ $item->student->name }}</td>
                            <td class="border px-4 py-2">{{ $item->reference_number }}</td>
                            <td class="border px-4 py-2">{{ $item->product->p_amount }}</td>
                        </tr>
                    @endforeach
                </body>
            </table>
        </div>
    </div>
