<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CV Builder') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-cv_builder_card>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('cv_builder_store') }}">
                @csrf

                <h1
                    class=" text rounded-sm text-center text-lg py-3 text-green-900 mt-3 shadow-md bg-green-300  block mt-1 mb-3 w-full">
                    Personal Info</h1>

                <!-- Name -->
                <div>
                    <x-label for="name" :value="__('Full Name')" />

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="You Full Name"
                        :value="old('name')" required />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" placeholder="Your Email Address"
                        name="email" :value="old('email')" required />
                </div>

                <!-- Phone -->
                <div class="mt-4">
                    <x-label for="Phone" :value="__('Phone')" />

                    <x-input id="Phone" class="block mt-1 w-full" type="text" placeholder="Your Phone Number"
                        name="phone" :value="old('phone')" required />
                </div>

                <!-- Address -->
                <div class="mt-4">
                    <x-label for="address" :value="__('Full Address')" />

                    <x-input id="address" class="block mt-1 w-full" type="text" name="address"
                        placeholder="Your Address, country , city etc" :value="old('address')" required />
                </div>

                <!-- DOB -->
                <div class="mt-4">
                    <x-label for="DOB" :value="__('Date Of Birth')" />

                    <x-input id="DOB" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required />
                </div>

                <!-- Gender -->
                <div class="mt-4">
                    <x-label for="gender" :value="__('Gender')" />

                    <x-input id="gender" class="mt-1" type="radio" name="gender" value="m" />
                    Male
                    <x-input id="gender" class="ml-4 mt-1 " type="radio" name="gender" value="f" />
                    Female
                </div>

                <!-- Photo -->
                <div class="mt-4">
                    <x-label for="photo" :value="__('Photo')" />

                    <x-input id="photo" class="block mt-1 w-full" type="file" name="photo" :value="old('photo')"
                        required />
                </div>

                <!-- About -->
                <div class="mt-4">
                    <x-label for="photo" :value="__('About You')" />
                    <textarea name="about" id="about" cols="30" rows="3" placeholder="Write About you self"
                        :value=""
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"></textarea>
                </div>
               {{--  <h1
                    class=" text rounded-sm text-center text-lg py-3 text-green-900 mt-3 shadow-md bg-green-300  block mt-1 w-full">
                    Professional Skills</h1>

                <div class="mt-4">
                    <x-label for="coding_langs" :value="__('Coding Languages')" />

                    <x-input id="coding_langs" class="block mt-1 w-full" type="text"
                        placeholder="Coding Languages Separated by ," name="coding_langs"
                        :value="old('coding_langs')" />
                </div>

                <div class="mt-4">
                    <x-label for="markup_langs" :value="__('Markup Languages')" />

                    <x-input id="markup_langs" class="block mt-1 w-full" type="text"
                        placeholder="Markup Languages Separated by ," name="markup_langs"
                        :value="old('markup_langs')" />
                </div>

                <div class="mt-4">
                    <x-label for="Frameworks" :value="__('Frameworks/Systems')" />

                    <x-input id="Frameworks" class="block mt-1 w-full" type="text"
                        placeholder="Frameworks Separated by , " name="frameworks" :value="old('frameworks')" />
                </div>

                <div class="mt-4">
                    <x-label for="other_skills" :value="__('Other Skills')" />

                    <x-input id="other_skills" class="block mt-1 w-full" type="text"
                        placeholder="Other Skills Separated by , " name="other_skills" :value="old('other_skills')" />
                </div>

                <h1
                    class=" text rounded-sm text-center text-lg py-3 text-green-900 mt-3 shadow-md bg-green-300  block mt-1 w-full">
                    Projects</h1>
     
               <div id="projects">
                <div class="mt-4 display-inline">
                    <x-label for="" :value="__('Porject Name')" />
                    <x-input id="" class=" mt-1 w-50 justify-start" type="text" placeholder="name"
                        name="project_name"  />
                        <x-input id="porjects1" class="mt-1 float-right" type="text" placeholder="Project link"
                        name="project_link"  />
                </div>
               </div> --}}
                {{-- <div class="flex items-center justify-center mt-4"> --}}
                    {{-- <x-button type="button" class="ml-4 text-xxlg mt-3 block bg-blue-500" title="add attr" --}}
                        {{-- onclick="add_attr()">+</x-button> --}}
                {{-- </div> --}}

                <div class="flex items-center justify-end mt-4">

                    <x-button class="ml-4">
                        {{ __('Submit Data') }}
                    </x-button>
                </div>
            </form>
            <script>
                function add_attr() {

                    let projects = document.querySelector("#projects");
                    projects.innerHTML +='<div class="mt-4 display-inline"><label for="porjects" value="Project Name"><input id="porjects" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 mt-1 w-50 justify-start " type="text" placeholder="Project Name" name="project_name" value="" /><input id="fieldValue" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 mt-1 float-right" type="text" placeholder="Project Link" name="project_link" value="" /></div>';
                }
            </script>
        </x-cv_builder_card>
    </div>
</x-app-layout>
