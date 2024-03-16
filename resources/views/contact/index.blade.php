{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
<style>
    .width-100 {
        width: 100%;
        padding-top: 2rem;
    }

    .pt-2 {
        padding-top: 1rem !important;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">
                    <div class="text-right">
                        {{-- <a href="{{route('blogs-add')}}">

                            <x-primary-button>Add Blog</x-primary-button>
                        </a> --}}
                    </div><br>


                    <div class="min-w-full align-middle">

                        <table class="min-w-full width-100 divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                        <span
                                            class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Name</span>
                                    </th>
                                    <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                        <span
                                            class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Email</span>
                                    </th>
                                    {{-- <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Description</span>
                                </th> --}}
                                    <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                        <span
                                            class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Message</span>
                                    </th>
                                    <th class="pt-2 px-6 py-3 bg-gray-50 text-left">

                                        <span
                                            class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Date</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">

                                @foreach ($contacts as $contact)
                                    <tr class="bg-white">
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{-- <img style="max-width: 8rem;" src="{{ $contact->name }}" class="sm:rounded-lg" alt=""> --}}
                                            {{ $contact->name }}

                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{ $contact->email }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{ $contact->message }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                          
                                            <?php
                                            // Assuming $contact['created_at'] contains the timestamp "2023-09-05T00:43:28.000000Z"
                                            $carbonDate = Carbon\Carbon::parse($contact->created_at);
                                        
                                            // Format the date as a human-readable string
                                            $humanReadableString = $carbonDate->format('F j, Y, g:i:s A'); // Adjust the format as needed
                                        
                                            // Output the human-readable string
                                            echo $humanReadableString;
                                            ?>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- <div class="mt-2">
                        {{ $users->links() }}
                    </div> --}}
                    <script>
                        function dateDisplay(params) {
                            const timestamp = params;

                            const date = new Date(timestamp);

                            const options = {
                                year: "numeric",
                                month: "long",
                                day: "numeric",
                                hour: "2-digit",
                                minute: "2-digit",
                                second: "2-digit",
                                timeZoneName: "short"
                            };

                            const humanReadableString = date.toLocaleDateString(undefined, options);
                            return humanReadableString;
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
