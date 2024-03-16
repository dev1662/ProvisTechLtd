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
    .width-100{
        width: 100%;
        padding-top: 2rem;
    }
    .pt-2{
        padding-top: 1rem!important;
    }
    .limit-blog-title{
        width: 21rem;

    }
    .fa{
        font-size: 27px!important;
    }
    i{
        margin-left: .5rem;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">
                    <div class="text-right">
                        <a href="{{route('blogs-add')}}">

                            <x-primary-button>Add Blog</x-primary-button>
                        </a>
                    </div><br>

                    <div class="min-w-full align-middle">

                        <table class="min-w-full width-100 divide-y divide-gray-200">
                            <thead>
                            <tr>
                                <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Image</span>
                                </th>
                                <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Title</span>
                                </th>
                                {{-- <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Description</span>
                                </th> --}}
                                <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Status</span>
                                </th>
                                <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Created Date</span>
                                </th>
                                <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Updated Date</span>
                                </th>
                          
                                {{-- <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Updated Date</span>
                                </th> --}}
                                <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Action</span>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                               
                            @foreach($blogs as $blog)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        <img style="max-width: 4rem;" src="{{ $blog->image }}" class="sm:rounded-lg" alt="">
                                        
                                    </td>
                                    <td class="limit-blog-title px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $blog->title }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        {{ $blog->status }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        <?php
                                        // Assuming $contact['created_at'] contains the timestamp "2023-09-05T00:43:28.000000Z"
                                        $carbonDate = Carbon\Carbon::parse($blog->created_at);
                                        $current = Carbon\Carbon::parse();
                                        
                                        $humanReadableString = '';
                                        // Format the date as a human-readable string
                                        if($carbonDate->format('F j, Y') === $current->format('F j, Y')){
                                            $humanReadableString = $carbonDate->format('g:i A'); // Adjust the format as needed

                                        }else{

                                            $humanReadableString = $carbonDate->format('F j, Y, g:i A'); // Adjust the format as needed
                                        }
                                    
                                        // Output the human-readable string
                                        echo $humanReadableString;
                                        ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        <?php
                                        // Assuming $contact['created_at'] contains the timestamp "2023-09-05T00:43:28.000000Z"
                                        $carbonDate = Carbon\Carbon::parse($blog->updated_at);
                                        $current = Carbon\Carbon::parse();
                                        
                                        $humanReadableString = '';
                                        // Format the date as a human-readable string
                                        if($carbonDate->format('F j, Y') === $current->format('F j, Y')){
                                            $humanReadableString = $carbonDate->format('g:i A'); // Adjust the format as needed

                                        }else{

                                            $humanReadableString = $carbonDate->format('F j, Y, g:i A'); // Adjust the format as needed
                                        }
                                    
                                        // Output the human-readable string
                                        echo $humanReadableString;
                                        ?>
                                    </td>
                              
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        <a href="{{route('blog-edit-form', $blog->id)}}">

                                            {{-- <x-primary-button> --}}
                                                {{-- Edit --}}
                                                <i class="fa fa-edit"></i>
                                            {{-- </x-primary-button> --}}
                                        </a>

                                        <a href="{{route('blogs.delete', $blog->id)}}" onclick="return confirm('Are you sure you want to delete this blog Permanently?');">

                                            {{-- <x-primary-button>
                                                Delete
                                            </x-primary-button> --}}
                                            <i class="fa fa-trash" ></i>

                                        </a>
                                        @if ($blog->status === 'active')
                                            
                                  
                                        <a href="{{ route('blogs.disable',$blog->id)}}">

                                            {{-- <x-primary-button>
                                                Disable
                                            </x-primary-button> --}}
                                            <i class="fa fa-toggle-on" ></i>

                                        </a>
                                        @else
                                        <a href="{{ route('blogs.disable',$blog->id)}}">

                                            {{-- <x-primary-button>
                                                Enable
                                            </x-primary-button> --}}
                                            <i class="fa fa-toggle-off"></i>

                                        </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- <div class="mt-2">
                        {{ $users->links() }}
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>