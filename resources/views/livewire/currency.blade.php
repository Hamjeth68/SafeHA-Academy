<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="mt-8 text-2xl flex justify-between">
        <div>Currency</div>
        {{-- <x-jet-button wire:click="confirmProductAdd" class="bg-blue-500 hover:bg-blue-700">
            Add Currency
        </x-jet-button> --}}
    </div>
</div>

<div class="mt-6">

    <table class="table-auto-w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">
                    <div class="flex-items-center">name</div>
                </th>
                <th class="px-4 py-2">
                    <div class="flex-items-center">code</div>
                </th>
                <th class="px-4 py-2">
                    <div class="flex-items-center">symbol</div>
                </th>
                <th class="px-4 py-2">
                    <div class="flex-items-center">exchange_rate</div>
                </th>
                {{-- <th class="px-4 py-2">
                    Actions
                </th> --}}
            </tr>
        </thead>

        <body>
            @foreach ($currencyrate as $currency)
                <tr>
                    <td class="border px-4 py-2">{{ $currency->name }}</td>
                    <td class="border px-4 py-2">{{ $currency->code }}</td>
                    <td class="border px-4 py-2">{{ $currency->symbol }}</td>
                    <td class="border px-4 py-2">{{ $currency->exchange_rate }}</td>
                    {{-- <td class="border px-4 py-2">
                        <x-jet-button wire:click="( {{ $currency->id }} )" class="bg-blue-500 hover:bg-blue-700">
                            Edit
                        </x-jet-button>
                        <x-jet-danger-button wire:click="( {{ $currency->id }} )" wire:loading.attr="disabled">
                            Delete
                        </x-jet-danger-button>
                    </td> --}}
                </tr>
            @endforeach
        </body>
    </table>
</div>
</div>
{{-- <div class="mt-4">
            {{ $products->links() }}
        </div> --}}

<x-jet-dialog-modal wire:model="confirmCurrencyDeletion">
    <x-slot name="title">
        {{ __('Delete Course') }}
    </x-slot>

    <x-slot name="content">
        {{ __('Are you sure you want to delete This Course? Once your product is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$set('confirmCurrencyDeletion', false)" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="deleteCurrency({{ $confirmCurrencyDeletion }})"
            wire:loading.attr="disabled">
            {{ __('Delete') }}
        </x-jet-danger-button>
    </x-slot>
</x-jet-dialog-modal>


{{-- <x-jet-dialog-modal wire:model="confirmProductAdd">
    <x-slot name="title">
        Currency
    </x-slot>

    <x-slot name="content">
        <x-jet-label for="p_title" value="{{ __('Title') }}" />
        <x-jet-input id="p_title" name="p_title" type="text" class="mt-1 block w-full"
            wire:model.defer="product.title" />
        <x-jet-input-error for="product.title" class="mt-2" />

        <x-jet-label for="p_name" value="{{ __('Name') }}" />
        <x-jet-input id="p_name" name="p_name" type="text" class="mt-1 block w-full" wire:model.defer="product.name" />
        <x-jet-input-error for="product.name" class="mt-2" />

        <x-jet-label for="p_description" value="{{ __('Description') }}" />
        <textarea id="textarea.tinymce-editor" name="p_description" type="text" class="mt-1 block w-full"
            wire:model.defer="product.description"></textarea>
        <x-jet-input-error for="product.description" class="mt-2" />


        <x-jet-label for="p_amount" value="{{ __('Ammount') }}" />
        <x-jet-input id="p_amount" name="p_amount" type="number" class="mt-1 block w-full"
            wire:model.defer="product.amount" />
        <x-jet-input-error for="product.amount" class="mt-2" />
    </x-slot>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 500,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$set('confirmProductAdd', false)" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="saveProduct()" wire:loading.attr="disabled">
            {{ __('Save') }}
        </x-jet-danger-button>
    </x-slot>
</x-jet-dialog-modal> --}}
