<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
</head>
{{-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> --}}

<style>
    .width-45 {
        width: 45%;
    }

    .margin-left-4 {
        margin-left: 4rem;
    }

    .width-100 {
        width: 100%;
    }

    body {
        position: relative;
    }

    #loader {
        min-height: 100%;
        width: 100%;
        background: rgba(255, 255, 255, 0.6);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: none;
        justify-content: center;
        align-items: center;
    }

    .loader {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: inline-block;
        border-top: 4px solid #777;
        border-right: 4px solid transparent;
        box-sizing: border-box;
        animation: rotation 1s linear infinite;
    }

    .loader::after {
        content: '';
        box-sizing: border-box;
        position: absolute;
        left: 0;
        top: 0;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        border-bottom: 4px solid #f75949;
        border-left: 4px solid transparent;
    }

    @keyframes rotation {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .quill-editor {
        max-height: 400px;
    }

    .ql-toolbar {
        margin-top: .25rem;
    }

    .ql-formats button {
        position: relative;
    }

    .ql-formats button:hover:after,
    .ql-formats button:active:after,
    .ql-formats button:focus:after {
        position: absolute;
        padding: .4rem;
        left: -30%;
        bottom: 30px;
        font-size: 14px;
    }

    .ql-bold:hover:after,
    .ql-bold:active:after,
    .ql-bold:focus:after,
    .ql-italic:hover:after,
    .ql-italic:active:after,
    .ql-italic:focus:after,
    .ql-underline:hover:after,
    .ql-underline:active:after,
    .ql-underline:focus:after,
    .ql-strike:hover:after,
    .ql-strike:active:after,
    .ql-strike:focus:after,
    .ql-script[value='sub']:hover:after,
    .ql-script[value='sub']:active:after,
    .ql-script[value='sub']:focus:after,
    .ql-script[value='super']:hover:after,
    .ql-script[value='super']:active:after,
    .ql-script[value='super']:focus:after,
    .ql-clean:hover:after,
    .ql-clean:active:after,
    .ql-clean:focus:after,
    .ql-color:hover:after,
    .ql-color:active:after,
    .ql-color:focus:after,
    .ql-picker:hover:after,
    .ql-picker:active:after,
    .ql-picker:focus:after,
    .ql-list[value='ordered']:hover:after,
    .ql-list[value='ordered']:active:after,
    .ql-list[value='ordered']:focus:after,
    .ql-list[value='bullet']:hover:after,
    .ql-list[value='bullet']:active:after,
    .ql-list[value='bullet']:focus:after,
    .ql-icon-picker:hover:after,
    .ql-icon-picker:active:after,
    .ql-icon-picker:focus:after,
    .ql-image:hover:after,
    .ql-image:active:after,
    .ql-image:focus:after,
    .ql-link:hover:after,
    .ql-link:active:after,
    .ql-link:focus:after,
    .ql-blockquote:hover:after,
    .ql-blockquote:active:after,
    .ql-blockquote:focus:after,
    .ql-code-block:hover:after,
    .ql-code-block:active:after,
    .ql-code-block:focus:after,
    .ql-direction:hover:after,
    .ql-direction:active:after,
    .ql-direction:focus:after,
    .ql-header.ql-picker:hover:after,
    .ql-header.ql-picker:active:after,
    .ql-header.ql-picker:focus:after,
    .ql-font.ql-picker:hover:after,
    .ql-font.ql-picker:active:after,
    .ql-font.ql-picker:focus:after,
    .ql-size.ql-picker:hover:after,
    .ql-size.ql-picker:active:after,
    .ql-size.ql-picker:focus:after {
        position: relative;
        bottom: 60px;
        color: black !important;
        padding: .4rem;
        border: 1px solid black;
        background-color: white;
        font-size: 14px;
    }

    .ql-direction:hover:after,
    .ql-direction:active:after,
    .ql-direction:focus:after {
        content: 'Direction';
    }

    .ql-code-block:hover:after,
    .ql-code-block:active:after,
    .ql-code-block:focus:after {
        content: 'Code_Block'
    }

    .ql-bold:hover:after,
    .ql-bold:active:after,
    .ql-bold:focus:after {
        content: 'Bold';
    }

    .ql-italic:hover:after,
    .ql-italic:active:after,
    .ql-italic:focus:after {
        content: 'Italic';
    }

    .ql-underline:hover:after,
    .ql-underline:active:after,
    .ql-underline:focus:after {
        content: 'Underline';
    }

    .ql-strike:hover:after,
    .ql-strike:active:after,
    .ql-strike:focus:after {
        content: 'Strikethrough';
    }

    .ql-link:hover:after,
    .ql-link:active:after,
    .ql-link:focus:after {
        content: 'Hyperlink';
    }

    .ql-script[value='sub']:hover:after,
    .ql-script[value='sub']:active:after,
    .ql-script[value='sub']:focus:after {
        content: 'Subscript';
    }

    .ql-script[value='super']:hover:after,
    .ql-script[value='super']:active:after,
    .ql-script[value='super']:focus:after {
        content: 'Superscript';
    }

    .ql-clean:hover:after,
    .ql-clean:active:after,
    .ql-clean:focus:after {
        content: 'Clean';
    }

    .ql-color:hover:after,
    .ql-color:active:after,
    .ql-color:focus:after {
        content: 'Text_Color';
    }

    .ql-background.ql-picker.ql-color-picker:hover:after,
    .ql-background.ql-picker.ql-color-picker:active:after,
    .ql-background.ql-picker.ql-color-picker:focus:after {
        content: 'Background_Color';
    }

    .ql-list[value='ordered']:hover:after,
    .ql-list[value='ordered']:active:after,
    .ql-list[value='ordered']:focus:after {
        content: 'Ordered_List';
    }

    .ql-list[value='bullet']:hover:after,
    .ql-list[value='bullet']:active:after,
    .ql-list[value='bullet']:focus:after {
        content: 'Bullet_List';
    }

    .ql-icon-picker:hover:after,
    .ql-icon-picker:active:after,
    .ql-icon-picker:focus:after {
        content: 'Alignment';
    }

    .ql-image:hover:after,
    .ql-image:active:after,
    .ql-image:focus:after {
        content: 'Image';
    }

    .ql-header.ql-picker:hover:after,
    .ql-header.ql-picker:active:after,
    .ql-header.ql-picker:focus:after {
        content: 'Heading';
    }

    .ql-font.ql-picker:hover:after,
    .ql-font.ql-picker:active:after,
    .ql-font.ql-picker:focus:after {
        content: 'Font_Family';
    }

    .ql-size.ql-picker:hover:after,
    .ql-size.ql-picker:active:after,
    .ql-size.ql-picker:focus:after {
        content: 'Font_Size';
    }

    .ql-blockquote:hover:after,
    .ql-blockquote:active:after,
    .ql-blockquote:focus:after {
        content: 'Blockquote';
    }

    /* Override table CSS for Rich Text Editor */
    .rte-content table {
        /* Add your custom table styles here */
        border-collapse: collapse !important;
        width: 100% !important;
    }

    .rte-content table th,
    .rte-content table td {
        border: 1px solid #ddd !important;
        padding: 8px !important;
        text-align: left !important;
    }

    .rte-content table th {
        background-color: #f2f2f2 !important;
    }

    .rte_command_fontname,
    .rte_command_indent,
    .rte_command_outdent {
        display: none !important
    }

    #word-count {
        color: #555;
        font-size: 0.8rem;
        margin-top: 5px;
    }
</style>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">


            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    {{-- @include('profile.partials.update-password-form') --}}
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Edit Blogs') }}
                            </h2>

                            {{-- <p class="mt-1 text-sm text-gray-600">
                                {{ __('Ensure your account is using a long, random password to stay secure.') }}
                            </p> --}}
                        </header>

                </div>
                <x-primary-button id="update_image" onclick="toggle_image_input()">
                    Update Image
                </x-primary-button>
                <form id="myForm" method="post" action="{{ route('blogs.update', $blog->id) }}"
                    enctype="multipart/form-data" class="mt-6 space-y-6">
                    @csrf
                    @method('PATCH')

                    {{-- <span id=""></span> --}}
                    <input type="hidden" value="{{ $blog->title }}" id="original_title">

                    <div class="flex">
                        <div class="width-45" id="image-input-choose" style="display: none;">

                            <x-input-label for="password" :value="__('Image')" />
                            <x-text-input id="file" name="image" type="file" class="mt-1 block w-full"
                                autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>
                        <div id="title-input" class="width-45 margin-left-4">

                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="password" oninput="validateInput(this)" value="{{ $blog->title }}"
                                name="title" type="text" class="mt-1 block w-full" autocomplete="new-password"
                                required />
                            {{-- <p id="validation_message" style="color: red;"></p> --}}

                            {{-- <x-input-error id="validation_message" :messages="$errors->updatePassword->get('password')" class="mt-2" /> --}}
                            <ul class='text-sm text-red-600 space-y-1'>
                                <li id="validation_message"></li>
                                {{-- @foreach ((array) $messages as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach --}}
                            </ul>
                        </div>
                    </div>
                    <div>
                        <x-input-label for="slug" :value="__('Slug')" />
                        <x-text-input id="slug" value="{{ $blog->slug }}" name="slug" type="text"
                            class="mt-1 block w-full" autocomplete="new-password" />
                    </div>
                    <div>
                        <label>Meta Description</label>
                        <input
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
                            id="meta-desc" name="meta_desc" type="text" maxlength="200"
                            value="{{ $blog->meta_desc }}" autocomplete="new-password" required="required">
                    </div>
                    <div>
                        <label>Meta Keyword</label>
                        <input
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
                            id="meta-keyword" name="meta_keyword" type="text" maxlength="200"
                            autocomplete="new-password" value="{{ $blog->meta_keyword }}" required="required">
                        <div id="word-count">Remaining words: 200</div>
                    </div>
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Body')" />
                        {{-- <link rel="stylesheet" href="https://richtexteditor.com/richtexteditor/rte_theme_default.css" />
                        <script type="text/javascript" src="https://richtexteditor.com/richtexteditor/rte.js"></script>
                        <script>
                            RTE_DefaultConfig.url_base = 'https://richtexteditor.com/richtexteditor'
                        </script>
                        <script type="text/javascript" src='https://richtexteditor.com/richtexteditor/plugins/all_plugins.js'></script> --}}
                        <textarea id="quill-editor" class="quill-editor blog_post">
                            {!! $blog->description !!}
                        </textarea>

                        <input type="hidden" id="blog_post" name="desc" value="{{ $blog->description }}">
                        {{-- This hidden input will store the Quill content so that it can be submitted with the form. --}}

                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    </div>
                    {{-- {{$blog}} --}}
                    @if (count($allTag) === 0)
                        <div class="flex" style="gap: 1rem;">
                            <div class="width-45">
                                <x-input-label for="title" :value="__('Tag')" />
                                <x-text-input name="tag_name[]" type="text" class="mt-1 block w-full"
                                    autocomplete="new-password" />
                                <ul class='text-sm text-red-600 space-y-1'>
                                    <li id="validation_message"></li>
                                </ul>
                            </div>
                            <div class="width-45">
                                <x-input-label for="title" :value="__('Url')" />
                                <x-text-input name="tag_url[]" type="text" class="mt-1 block w-full"
                                    autocomplete="new-password" />
                                <ul class='text-sm text-red-600 space-y-1'>
                                    <li id="validation_message"></li>
                                </ul>
                            </div>

                            <div class="flex items-center" style="gap: 1rem; margin-top: 20px;">
                                <i class="bi bi-plus-circle" style="font-size: 20px;cursor:pointer;"
                                    onclick="addFlexContainer()"></i>

                            </div>
                        </div>
                    @elseif (count($allTag) > 0)
                        @foreach ($allTag as $index => $tag)
                            {{-- @if ($tag['id'] === $blog->tag_id) --}}


                            <div class="flex" style="gap: 1rem;">
                                <div class="width-45">
                                    <x-input-label for="title" :value="__('Tag')" />
                                    <x-text-input name="tag_name[]" type="text" class="mt-1 block w-full"
                                        autocomplete="new-password" value="{{ $tag['name'] ?? '' }}" />
                                    <ul class='text-sm text-red-600 space-y-1'>
                                        <li id="validation_message"></li>
                                    </ul>
                                </div>
                                <div class="width-45">
                                    <x-input-label for="title" :value="__('Url')" />
                                    <x-text-input name="tag_url[]" value="{{ $tag['url'] ?? '' }}" type="text"
                                        class="mt-1 block w-full" autocomplete="new-password" />
                                    <ul class='text-sm text-red-600 space-y-1'>
                                        <li id="validation_message"></li>
                                    </ul>
                                </div>

                                <div class="flex items-center" style="gap: 1rem; margin-top: 20px;">
                                    <i class="bi bi-plus-circle" style="font-size: 20px;cursor:pointer;"
                                        onclick="addFlexContainer()"></i>
                                    @if ($index > 0)
                                        <i class="bi bi-dash-circle" style="font-size: 20px;cursor:pointer;"
                                            onclick="removeFlexContainer(this.parentNode.parentNode)"></i>
                                    @endif
                                </div>
                            </div>
                            {{-- @endif --}}
                        @endforeach
                    @endif

                    <div id='newDiv'></div>

                    <div class="flex items-center gap-4">
                        <x-primary-button id="submit_button">{{ __('Save') }}</x-primary-button>
                        @if (session('status') === 'password-updated')
                            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
                </section>
            </div>
        </div>
        <div id="loader">
            <span class="loader"></span>
        </div>

        {{-- <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div> --}}
        {{-- <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script> --}}
        <script src="https://cdn.tiny.cloud/1/vo8f7carcu2ye5mtf9idy66vqyj6aayeq2zs7oqsbm43pl85/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var inputElement = document.getElementById('meta-keyword');
                var wordCountElement = document.getElementById('word-count');
                var maxLength = parseInt(inputElement.getAttribute('maxlength'));

                // Calculate and set initial remaining words count
                var initialLength = inputElement.value.length;
                var remainingWords = maxLength - initialLength;
                wordCountElement.textContent = 'Remaining words: ' + remainingWords;

                inputElement.addEventListener('input', function() {
                    var currentLength = inputElement.value.length;
                    var remainingWords = maxLength - currentLength;
                    wordCountElement.textContent = 'Remaining words: ' + remainingWords;
                });
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const myForm = document.getElementById('myForm');
                const submitButton = document.getElementById('submit_button');
                const originalContent = document.getElementById('blog_post').value;
                //         var  toolbar: [
                //     [
                //       "bold",
                //       "italic",
                //       "underline",
                //       "strike",
                //       { script: "sub" },
                //       { script: "super" },
                //     ],
                //     ["clean"],
                //     [{ color: [] }, { background: [] }],
                //     [{ list: "ordered" }, { list: "bullet" }, { align: [] }],
                //     ["image"],
                //     [{ header: [] }, { font: [] }, { size: [] }],
                //     ["link"],
                //   ];
                var toolbarOptions = [
                    ['bold', 'italic', 'underline', 'strike'], // toggled buttons
                    ['blockquote', 'code-block'],
                    ["image"],
                    [{
                        'header': 1
                    }, {
                        'header': 2
                    }], // custom button values
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    [{
                        'script': 'sub'
                    }, {
                        'script': 'super'
                    }], // superscript/subscript
                    [{
                        'indent': '-1'
                    }, {
                        'indent': '+1'
                    }], // outdent/indent
                    [{
                        'direction': 'rtl'
                    }], // text direction

                    [{
                        'size': ['small', false, 'large', 'huge']
                    }], // custom dropdown
                    [{
                        'header': [1, 2, 3, 4, 5, 6, false]
                    }],

                    [{
                        'color': []
                    }, {
                        'background': []
                    }], // dropdown with defaults from theme
                    [{
                        'font': []
                    }],
                    [{
                        'align': []
                    }],
                    ["link"],
                    ['clean'] // remove formatting button
                ];
                // Initialize Quill editor
                // var quill = new Quill('#quill-editor', {
                //     modules: {
                //         toolbar: toolbarOptions
                //     },
                //     theme: 'snow'
                // });

                tinymce.init({
                    selector: 'textarea#quill-editor',
                    plugins: [
                        "advlist", "autolink", "charmap", "fullscreen",
                        "help", "image", "insertdatetime", "link", "lists", "media",
                        "preview", "searchreplace", "table", "visualblocks", "accordion", "emoticons",
                        "visualchars", "wordcount"
                    ],
                    toolbar: 'undo redo | blocks | link | bold italic underline strikethrough | numlist bullist '
                });

                submitButton.addEventListener('click', function(event) {
                    const originalTitle = document.getElementById('original_title').value;
                    const currentTitle = document.getElementById('password').value;
                    if (originalTitle !== currentTitle) {
                        const isConfirmed = confirm('This may change your url, do you want to save?');
                        if (isConfirmed) {
                            event.preventDefault();
                            let tinyMCEInstance = tinymce.get('quill-editor');
                            let content = tinyMCEInstance.getContent();
                            document.getElementById('blog_post').value = content;
                            myForm.submit();
                        }
                    } else {
                        event.preventDefault();
                        let tinyMCEInstance = tinymce.get('quill-editor');
                        let content = tinyMCEInstance.getContent();
                        document.getElementById('blog_post').value = content;
                        myForm.submit();
                    }
                })

                // var quill = new RichTextEditor('#quill-editor');

                // Set the initial content of Quill editor
                // quill.setHTMLCode(originalContent)

                // submitButton.addEventListener('click', function(event) {
                //     event.preventDefault();
                //     // Get the current content
                //     const currentContent = quill.getHTMLCode();
                //     // Check if the content has changed
                //     if (currentContent !== originalContent) {
                //         // Display a confirmation alert
                //         const isConfirmed = confirm('This may change your content, do you want to save?');

                //         // If the user confirms, update the hidden input and submit the form
                //         if (isConfirmed) {
                //             document.getElementById('blog_post').value = currentContent;
                //             myForm.submit();
                //         }
                //     } else {
                //         // If the content hasn't changed, submit the form without confirmation
                //         myForm.submit();
                //     }
                // });
            });



            let image_input = document.getElementById('image-input-choose')
            let title_input = document.getElementById('title-input')
            if (image_input.style.display === 'none') {
                title_input.classList.remove('width-45')
                title_input.classList.remove('margin-left-4')
                title_input.classList.add('width-100')


            }

            function toggle_image_input() {
                let image_input = document.getElementById('image-input-choose')
                let title_input = document.getElementById('title-input')


                if (image_input.style.display === 'none') {
                    title_input.classList.remove('width-100')
                    title_input.classList.add('width-45')
                    title_input.classList.add('margin-left-4')


                    image_input.style.display = 'block';
                } else {
                    title_input.classList.remove('width-45')
                    title_input.classList.remove('margin-left-4')
                    title_input.classList.add('width-100')
                    image_input.style.display = 'none';

                }
            }
        </script>


        {{-- <script>
            CKEDITOR.replace('blog_post');

            document.addEventListener("DOMContentLoaded", function() {
                const myForm = document.getElementById('myForm');
                const submitButton = document.getElementById('submit_button');
                const originalTitle = document.getElementById('original_title').value;

                submitButton.addEventListener('click', function(event) {
                    event.preventDefault();

                    // Get the current title value
                    const currentTitle = document.getElementById('password').value;

                    // Check if the title has changed
                    if (currentTitle !== originalTitle) {
                        // Display a confirmation alert
                        const isConfirmed = confirm('This may change your url, do you want to save?');

                        // If the user confirms, submit the form
                        if (isConfirmed) {
                            myForm.submit();
                        }
                    } else {
                        // If the title hasn't changed, submit the form without confirmation
                        myForm.submit();
                    }
                });
            });
            // CKEDITOR.instances.blog_post.setData(blog)
        </script> --}}
        <script>
            function validateInput(input) {
                var value = input.value;
                var forbiddenChars = ['-', '"'];
                var submitButton = document.getElementById('submit_button');
                var validationMessage = document.getElementById('validation_message');

                for (var i = 0; i < forbiddenChars.length; i++) {
                    if (value.includes(forbiddenChars[i])) {
                        validationMessage.textContent = 'Input cannot contain - or " characters';
                        submitButton.disabled = true;
                        return;
                    }
                }

                validationMessage.textContent = '';
                submitButton.disabled = false;
            }
            const form = document.getElementById('myForm');
            form.addEventListener('submit', function(event) {
                let loader = document.querySelector('#loader');
                loader.style.display = "flex";
            });
        </script>
        <script>
            let containerCount = document.querySelectorAll('input[name^="tag_name[]"]').length;

            function addFlexContainer() {
                containerCount++;
                const container = document.createElement('div');
                container.className = 'flex';
                container.style.gap = '1rem';
                container.style.marginBottom = '1rem';

                container.innerHTML = `
        <div class="width-45">
            <x-input-label for="title" :value="__('Tag')" />
            <x-text-input required name="tag_name[]" type="text" class="mt-1 block w-full" autocomplete="new-password" />
            <ul class='text-sm text-red-600 space-y-1'>
                <li id="validation_message"></li>
            </ul>
        </div>
        <div class="width-45">
            <x-input-label for="title" :value="__('Url')" />
            <x-text-input required name="tag_url[]" type="text" class="mt-1 block w-full" autocomplete="new-password" />
            <ul class='text-sm text-red-600 space-y-1'>
                <li id="validation_message"></li>
            </ul>
        </div>
        <div class="flex items-center" style="gap: 1rem; margin-top: 20px;">
            <i class="bi bi-plus-circle" style="font-size: 20px;cursor:pointer;" onclick="addFlexContainer()"></i>
            <i class="bi bi-dash-circle" style="font-size: 20px;cursor:pointer;" onclick="removeFlexContainer(this.parentNode.parentNode)"></i>
        </div>
    `;

                document.getElementById('newDiv').appendChild(container);
            }




            function removeFlexContainer(container) {
                if (container !== null) {
                    container.remove();
                }
            }

            function saveTagInfo() {
                tagInfo.tag_name = [];
                tagInfo.tag_url = [];

                // Iterate through all the containers and select the input fields based on the generated names
                for (let i = 1; i <= containerCount; i++) {
                    const tagNameInput = document.querySelector(`input[name="tag_name_${i}"]`);
                    const tagUrlInput = document.querySelector(`input[name="tag_url_${i}"]`);

                    if (tagNameInput && tagUrlInput) {
                        tagInfo.tag_name.push(tagNameInput.value);
                        tagInfo.tag_url.push(tagUrlInput.value);
                    }
                }

                console.log(tagInfo); // Log the object to the console
            }
        </script>
    </div>
    </div>
</x-app-layout>

</html>
