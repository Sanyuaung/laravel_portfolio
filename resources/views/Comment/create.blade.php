@extends('Comment.layout')

@section('content')
    <div class="px-6 py-12 sm:py-24 lg:px-8" style="background-color: #250821">
        <div class="mx-auto max-w-xl flex flex-col items-center justify-center text-center">
            <h1 class="text-4xl md:text-4xl font-serif  font-bold tracking-tight text-green-600	"style="color: #39ff14;">
                Collaborative Feedback Hub
            </h1>
            <p class="mt-3 text-lg  font-serif" style="color: #39ff14;">Your Voice, My Strength!</p>
        </div>
        <form class="mx-auto mt-16 max-w-xl sm:mt-20" action="{{ route('store') }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div class="sm:col-span-2">
                    {{-- <label class="block text-sm font-serif font-bold leading-6" style="color: #39ff14;">Photo</label> --}}
                    <div class="flex items-center">
                        <label for="photo" class=" cursor-pointer">
                            <input type="file" id="photo" name="photo" class="hidden" accept="image/*"
                                onchange="handlePhotoChange(event)">
                            <span class="block text-sm font-serif font-bold leading-6" style="color: #39ff14;">Choose
                                Photo</span>
                        </label>
                        <div id="photo-container" class="ml-5 overflow-hidden"
                            style="width: 100px; height: 100px; border-radius: 10px; border: 1px solid white;">
                            <!-- Selected photo will be displayed here -->
                            <!-- You can add a default photo or leave it empty initially -->
                        </div>
                        <span id="close-icon" class="ml-4 cursor-pointer hidden" onclick="clearPhoto()">
                            <i class='bx bx-x' style="color: #39ff14;"></i>
                        </span>
                    </div>
                    <div class="mt-2.5">
                        @error('photo')
                            <p class="font-serif text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="first_name"
                        class="block text-sm font-serif font-bold leading-6"style="color: #39ff14;">First
                        Name</label>
                    <div class="mt-2.5">
                        <input type="text" name="first_name" id="first_name" autocomplete="organization"
                            placeholder="Your First Name"
                            class="block font-serif w-full rounded-md  border-0 px-3.5 py-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"
                            style="color: #39ff14;background-color: #250821" value="{{ old('first_name') }}">
                    </div>
                    <div class="mt-2.5">
                        @error('first_name')
                            <p class="font-serif text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="last_name" class="block text-sm font-serif font-bold leading-6" style="color: #39ff14;">Last
                        Name</label>
                    <div class="mt-2.5">
                        <input type="text" name="last_name" id="last_name" autocomplete="organization"
                            placeholder="Your Last Name"
                            class="block font-serif w-full rounded-md border-0 px-3.5 py-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"
                            style="color: #39ff14;background-color: #250821" value="{{ old('last_name') }}">
                    </div>
                    <div class="mt-2.5">
                        @error('last_name')
                            <p class="font-serif text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="company" class="block text-sm font-serif font-bold leading-6"
                        style="color: #39ff14;">Current
                        Company
                        Name</label>
                    <div class="mt-2.5">
                        <input type="text" name="current_company" id="company" autocomplete="organization"
                            placeholder="Your Current Company Name"
                            class="block font-serif w-full rounded-md border-0 px-3.5 py-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"
                            style="color: #39ff14;background-color: #250821" value="{{ old('current_company') }}">
                    </div>
                    <div class="mt-2.5">
                        @error('current_company')
                            <p class="font-serif text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="company" class="block text-sm font-serif font-bold leading-6"
                        style="color: #39ff14;">Current
                        Position</label>
                    <div class="mt-2.5">
                        <input type="text" name="current_position" id="company" autocomplete="organization"
                            placeholder="Your Current Position"
                            class="block font-serif w-full rounded-md border-0 px-3.5 py-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"
                            style="color: #39ff14;background-color: #250821" value="{{ old('current_position') }}">
                    </div>
                    <div class="mt-2.5">
                        @error('current_position')
                            <p class="font-serif text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-serif font-bold leading-6"
                        style="color: #39ff14;">Email</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email" autocomplete="email"
                            placeholder="Your Email Address"
                            class="block font-serif w-full rounded-md border-0 px-3.5 py-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"
                            style="color: #39ff14;background-color: #250821;" value="{{ old('email') }}">
                    </div>
                    <div class="mt-2.5">
                        @error('email')
                            <p class="font-serif text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="comment" class="block text-sm font-serif font-bold leading-6"
                        style="color: #39ff14;">Message</label>
                    <div class="mt-2.5">
                        <textarea name="comment" id="comment" rows="4" placeholder="Share your thoughts..."
                            class="block font-serif w-full rounded-md border-0 px-3.5 py-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"
                            style="color: #39ff14;background-color: #250821">{{ old('comment') }}</textarea>
                    </div>
                    <div class="mt-2.5">
                        @error('comment')
                            <p class="font-serif text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mt-10 grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <a href="{{ route('home') }}"
                    class="text-center border-green-700 border-solid border hover:bg-green-700 hover:text-white font-bold py-2 px-4 font-serif rounded-full"
                    style="color: #39ff14;"><i class='bx bx-right-arrow bx-rotate-180'></i> Back</a>
                <button type="submit"
                    class="text-center border-green-700 border-solid border hover:bg-green-700 hover:text-white font-bold py-2 px-4 font-serif rounded-full"
                    style="color: #39ff14;">Submit
                    <i class='bx bxs-send bx-tada bx-rotate-180'></i>
                </button>

            </div>
        </form>
    </div>

    <script>
        function handlePhotoChange(event) {
            const photoContainer = document.getElementById('photo-container');
            const closeIcon = document.getElementById('close-icon');

            // Display the selected photo
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    photoContainer.innerHTML =
                        `<img src="${e.target.result}" alt="Selected Photo" class="w-full h-full object-cover">`;
                    closeIcon.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        }

        function clearPhoto() {
            const photoContainer = document.getElementById('photo-container');
            const closeIcon = document.getElementById('close-icon');
            const inputPhoto = document.getElementById('photo');

            // Clear the selected photo and hide the close icon
            photoContainer.innerHTML = '';
            closeIcon.classList.add('hidden');

            // Reset the file input to allow selecting the same photo again
            inputPhoto.value = '';
        }
    </script>
@endsection
