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

    .limit-blog-title {
        width: 21rem;

    }

    .fa {
        font-size: 27px !important;
    }

    i {
        margin-left: .5rem;
    }

    .loader {
        width: 50px;
        height: 50px;
        border: 4px solid #000;
        border-bottom-color: transparent;
        border-radius: 50%;
        display: inline-block;
        box-sizing: border-box;
        animation: rotation 1s linear infinite;
    }

    @keyframes rotation {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .loader-container {
        display: none;
        inset: 0;
        width: 100%;
        background-color: rgba(255, 255, 255, .7);
    }

    .loader-child {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Organization Queries') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto bg-white border-b border-gray-200">
                    {{-- <div class="text-right">
                        <a href="{{ route('blogs-add') }}">

                            <x-primary-button>Add Blog</x-primary-button>
                        </a>
                    </div><br> --}}

                    <div class="min-w-full align-middle">

                        <table class="min-w-full width-100 divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="pt-2 px-9 py-3 bg-gray-50 text-left">
                                        <span
                                            class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Organization
                                            Name</span>
                                    </th>
                                    <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                        <span
                                            class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Organization
                                            Url</span>
                                    </th>
                                    {{-- <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Description</span>
                                </th> --}}
                                    <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                        <span
                                            class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Name</span>
                                    </th>
                                    <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                        <span
                                            class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Email</span>
                                    </th>
                                    <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                        <span
                                            class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Mobile</span>
                                    </th>
                                    <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                        <span
                                            class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Employees</span>
                                    </th>

                                    <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                        <span
                                            class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Created
                                            Date</span>
                                    </th>
                                    <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                        <span
                                            class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Action</span>
                                    </th>
                                    {{-- <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                        <span
                                            class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Updated
                                            Date</span>
                                    </th> --}}

                                    {{-- <th class="pt-2 px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-large text-gray-500 uppercase tracking-wider">Updated Date</span>
                                </th> --}}

                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                                {{-- {{ $blogs[0]['name'] }} --}}
                                @foreach ($blogs as $blog)
                                    <tr class="bg-white">
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{ $blog['name'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{ $blog['url'] . '.oas36ty.com' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{ $blog['full_name'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{ $blog['email'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{ $blog['mobile'] }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{ $blog['employees'] }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            <?php
                                            // Assuming $contact['created_at'] contains the timestamp "2023-09-05T00:43:28.000000Z"
                                            $carbonDate = Carbon\Carbon::parse($blog['created_at']);
                                            $current = Carbon\Carbon::parse();
                                            
                                            $humanReadableString = '';
                                            // Format the date as a human-readable string
                                            if ($carbonDate->format('F j, Y') === $current->format('F j, Y')) {
                                                $humanReadableString = $carbonDate->format('g:i A'); // Adjust the format as needed
                                            } else {
                                                $humanReadableString = $carbonDate->format('F j, Y, g:i A'); // Adjust the format as needed
                                            }
                                            
                                            // Output the human-readable string
                                            echo $humanReadableString;
                                            ?>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            @if ($blog['status'] === 'completed')
                                                Activated
                                            @else
                                                <x-primary-button type="button" class="btn btn-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="{{ '#exampleModal' . $blog['id'] }}"
                                                    onclick="detailsOrg({{ json_encode($blog) }})">

                                                    <a href="#">
                                                        Activate
                                                        {{-- <x-primary-button> --}}
                                                        {{-- Edit --}}
                                                        {{-- <i class="fa fa-edit"></i> --}}
                                                        {{-- </x-primary-button> --}}
                                                    </a>
                                                </x-primary-button>
                                            @endif

                                            <div class="modal fade" id="{{ 'exampleModal' . $blog['id'] }}"
                                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="position-relative">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                    Activate Organization</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="details-container "
                                                                    style="font-size: 18px;">
                                                                    <h1 style="font-weight: bolder;">Personal
                                                                        Details</h1><br>
                                                                    <hr><br>

                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <p class="mt-4">
                                                                            <h1>
                                                                                <b>Name: </b>
                                                                            </h1><br>
                                                                            <span
                                                                                id="{{ 'user-name' . $blog['id'] }}"></span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <p class="mt-4">
                                                                            <h1>
                                                                                <b>Email: </b>
                                                                            </h1><br>
                                                                            <span
                                                                                id="{{ 'user-email' . $blog['id'] }}"></span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <p class="mt-4">
                                                                            <h1>
                                                                                <b>Mobile: </b>
                                                                            </h1><br>
                                                                            <span
                                                                                id="{{ 'user-mobile' . $blog['id'] }}"></span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="organization-details mt-4 mb-4"
                                                                    style="font-size: 18px;">
                                                                    {{-- <hr> --}}
                                                                    <h1 style="font-weight: bolder;">Organization
                                                                        Details</h1><br>
                                                                    <hr><br>
                                                                    <div class="form-group">
                                                                        <x-input-label style="font-size: 18px;"
                                                                            for="">Organization
                                                                            Name</x-input-label> <br>
                                                                        <x-text-input type="text"
                                                                            id="{{ 'org-name' . $blog['id'] }}"
                                                                            placeholder="Enter Organization Name"
                                                                            class="form-control" />
                                                                    </div>
                                                                    <div class="form-group  mt-4">
                                                                        <x-input-label style="font-size: 18px;"
                                                                            for="">Organization
                                                                            URL</x-input-label><br>
                                                                        <x-text-input type="text"
                                                                            id="{{ 'org-url' . $blog['id'] }}"
                                                                            placeholder="Enter Organization URL"
                                                                            class="form-control" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <x-primary-button type="button"
                                                                    class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</x-primary-button>
                                                                <x-primary-button type="button" class="btn btn-primary"
                                                                    onclick="activateOrg({{ json_encode($blog) }})">Activate</x-primary-button>
                                                            </div>
                                                        </div>
                                                        <div class="loader-container position-absolute">
                                                            <div class="position-absolute loader-child">
                                                                <span class="loader"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    <div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3" style="top: 60px !important">
        <div id="liveToast" class="toast text-white" role="alert" style="background-color:#50c99a"
            aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                <h1>Organization Activated.</h1>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function detailsOrg(data) {
            console.log(data)
            document.getElementById('user-name' + data.id).innerText = data.full_name
            document.getElementById('user-email' + data.id).innerText = data.email
            document.getElementById('user-mobile' + data.id).innerText = data.mobile
            document.getElementById('org-name' + data.id).value = data.name
            document.getElementById('org-url' + data.id).value = data.url
        }

        function activateOrg(data) {
            console.log(data)
            // return;
            var dataObj = {
                queryId: data.id,
                signup_token: data.signup_token,
                email: data.email,
                organization_name: data.name,
                name: data.full_name,

                organization_url: data.url.toLowerCase(),
            }
            var loaderContainer = document.querySelector('.loader-container');
            loaderContainer.style.display = 'block';
            var toast = document.getElementById('liveToast')
            var toastRun = bootstrap.Toast.getOrCreateInstance(toast)

            $.ajax({
                type: 'POST',
                url: '{{ route('make.organization') }}',
                data: dataObj,
                success: function(response) {
                    console.log(response)
                    $('#exampleModal' + data.id).modal('hide');
                    loaderContainer.style.display = 'none';
                    toastRun.show()
                },
                error: function(error) {
                    console.log(error);
                    // Handle error response, for example, display validation errors
                }
            });
            // console.log(dataObj)
        }
        // $('#activate').on('click', function() {
        // Hide OTP div
        // var otpDiv = document.querySelector('.otp-div');
        // otpDiv.style.opacity = 0;

        // // Show loader
        // var loader = document.querySelector('.loader');
        // loader.style.display = 'inline-block';

        // $.ajax({
        //     type: 'POST',
        //     url: '{{ route('resendOTP') }}',
        //     data: $('#registeration').serialize(),
        //     success: function(response) {
        //         if (response && response.message === 'OTP Sent Successfully!') {
        //             // document.getElementById('signupForm').innerText = 'Submit'
        //             // document.getElementById('otp_container2').style.display = 'block'
        //             // document.getElementById('otp_dialog').style.display = 'block'
        //             document.getElementById('signup_token').value = response.data.signup_token
        //             // Hide loader
        //             loader.style.display = 'none';

        //             // Show OTP div
        //             otpDiv.style.opacity = 1;

        //             // Reset input value
        //             var otpInput = document.querySelector('.otp-input');
        //             otpInput.value = '';

        //         }
        //         // Handle success response, for example, show a success message
        //     },
        //     error: function(error) {
        //         console.log(error);
        //         // Handle error response, for example, display validation errors
        //     }
        // });
        // })
    </script>
</x-app-layout>
