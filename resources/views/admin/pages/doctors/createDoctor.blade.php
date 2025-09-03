@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="p-6 mx-auto max-w-7xl">
        <h1 class="mb-6 text-2xl font-bold">ADD MEMBER</h1>

        <form action="{{ route('store.doctor') }}" method="POST" enctype="multipart/form-data"
            class="flex flex-col gap-6 p-6 bg-white shadow rounded-2xl">
            @csrf

            <div class="flex flex-col w-full gap-10">
                <div class="flex flex-col w-full gap-5">
                    <h1 class="text-2xl font-semibold border-b border-red-500">Personal Information</h1>
                    <div>
                        <label class="block mb-2 font-medium">Email</label>
                        <input type="text" name="email" placeholder="Enter email"
                            value="doctor{{ $nextuser }}@gmail.com" readonly
                            class="w-full p-3 bg-gray-200 border rounded-lg outline-none focus:ring focus:ring-black/30"
                            required>
                    </div>

                    <div class="hidden">
                        <label class="block mb-2 font-medium">Password</label>
                        <input type="text" name="password" placeholder="Enter password" value="password123" readonly
                            class="w-full p-3 bg-gray-200 border rounded-lg outline-none focus:ring focus:ring-black/30"
                            required>
                    </div>

                    <div class="flex w-full gap-5">
                        <div class="w-full">
                            <label class="block mb-2 font-medium">First Name</label>
                            <input type="text" name="first_name" placeholder="Enter firstname"
                                class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
                        </div>

                        <div class="w-full">
                            <label class="block mb-2 font-medium">Middle Name</label>
                            <input name="middle_name" rows="5" placeholder="Enter middlename"
                                class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30"></input>
                        </div>

                        <div class="w-full">
                            <label class="block mb-2 font-medium">Last Name</label>
                            <input name="last_name" rows="5" placeholder="Enter lastname"
                                class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30"></input>
                        </div>
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">Date of Birth</label>
                        <input type="date" name="date_of_birth" rows="5" placeholder="Enter date of birth"
                            class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30"></input>
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">Gender</label>
                        <select name="gender"
                            class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
                            <option value="" disabled selected>Select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="flex w-full gap-5">
                        <div class="w-full">
                            <label class="block mb-2 font-medium">Phone</label>
                            <input name="phone" rows="5" placeholder="Enter phone" value="094875462765" readonly
                                class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30"></input>
                        </div>

                        <div class="w-full">
                            <label class="block mb-2 font-medium">Address</label>
                            <input name="address" rows="5" placeholder="Enter address"
                                class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30"></input>
                        </div>
                    </div>


                    <div class="flex w-full gap-5">
                        <div class="w-full">
                            <label class="block mb-2 font-medium">City</label>
                            <select name="city"
                                class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
                                <option value="" disabled selected>Select city</option>
                                <option value="Manila">Manila</option>
                                <option value="Quezon City">Quezon </option>
                                <option value="Davao City">Davao </option>
                                <option value="Cebu City">Cebu </option>
                                <option value="Makati">Makati</option>
                                <option value="Pasig">Pasig</option>
                                <option value="Taguig">Taguig</option>
                                <option value="Bacolod">Bacolod</option>
                                <option value="Iloilo_city">Iloilo </option>
                                <option value="Cagayan de Oro">Cagayan de Oro</option>
                                <option value="General Santos">General Santos</option>
                                <option value="Zamboanga City">Zamboanga </option>
                            </select>
                        </div>

                        <div class="w-full">
                            <label class="block mb-2 font-medium">Country</label>
                            <input name="country" rows="5" placeholder="Enter country" value="Philippines"
                                class="w-full p-3 bg-gray-200 border rounded-lg outline-none focus:ring focus:ring-black/30"></input>
                        </div>
                    </div>



                    <div>
                        <label class="block mb-2 font-medium">About</label>
                        <textarea name="about" rows="5"
                            class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30"></textarea>
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">Specialty</label>
                        <input type="text" name="specialty" placeholder="Enter specialty"
                            class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
                    </div>
                    {{-- File Upload --}}
                    <div class="p-6 text-center border-2 border-dashed rounded-lg">
                        {{-- Image Preview --}}
                        <div class="mt-4">
                            <img id="preview" class="hidden mx-auto border rounded-lg max-h-48" />
                        </div>
                        <p class="mb-1 font-medium">Upload Avatar</p>

                        <label
                            class="flex flex-col items-center justify-center w-full h-40 transition border border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                            <svg id="uploadIcon" class="w-12 h-12 mb-2 text-gray-400" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1M12 12V4m0 8l-4-4m4 4l4-4" />
                            </svg>
                            <span class="text-sm text-gray-600">Click to upload an image</span>
                            <input type="file" name="file" id="fileInput" class="hidden" accept="image/*"
                                required>
                        </label>
                    </div>
                </div>

                <div class="flex flex-col w-full gap-5">
                    <h1 class="text-2xl font-semibold border-b border-red-500">Institution Information</h1>

                    <div id="institutions-wrapper" class="flex flex-col gap-6">
                        <!-- Institution Group (template for duplication) -->
                        <div class="relative p-4 border rounded-lg institution-group">
                            <button type="button"
                                class="absolute hidden text-red-500 remove-institution top-2 right-2 hover:text-red-700">
                                ✖
                            </button>

                            <div>
                                <label class="block mb-2 font-medium">Institution Name</label>
                                <input type="text" name="institutions[0][name]" placeholder="Enter institution"
                                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
                            </div>

                            <div class="flex w-full gap-5 mt-3">
                                <div class="w-full">
                                    <label class="block mb-2 font-medium">Institution Address</label>
                                    <input type="text" name="institutions[0][address]" placeholder="Enter address"
                                        class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30"
                                        required>
                                </div>

                                <div class="w-full">
                                    <label class="block mb-2 font-medium">Institution Phone</label>
                                    <input type="text" name="institutions[0][phone]" placeholder="Enter phone"
                                        class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30"
                                        required>
                                </div>
                            </div>

                            <div class="mt-3">
                                <label class="block mb-2 font-medium">Institution Website</label>
                                <input type="text" name="institutions[0][website]" placeholder="Enter website"
                                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30"
                                    required>
                            </div>
                        </div>
                    </div>

                    <!-- Add Institution Button -->
                    <button type="button" id="add-institution"
                        class="px-4 py-2 mt-4 text-white bg-green-600 rounded-lg hover:bg-green-700">
                        + Add Another Institution
                    </button>
                </div>
            </div>

            {{-- Hidden uploaded_by_id (if logged-in user is uploader) --}}
            <input type="hidden" name="uploaded_by_id" value="{{ auth()->id() }}">


            {{-- JS for preview --}}
            <script>
                document.getElementById('fileInput').addEventListener('change', function(e) {
                    const [file] = e.target.files;
                    if (file) {
                        const preview = document.getElementById('preview');
                        preview.src = URL.createObjectURL(file);
                        preview.classList.remove('hidden');
                    }
                });
            </script>


            {{-- Buttons --}}
            <div class="flex justify-between mt-4">
                <a href="{{ route('show.doctors') }}" class="px-6 py-2 border rounded-lg hover:bg-gray-100">Back</a>
                <button type="submit" class="px-6 py-2 text-white bg-black rounded-lg hover:bg-gray-800">Save</button>
            </div>
        </form>
    </div>

    <script>
        let institutionIndex = 1;

        document.getElementById('add-institution').addEventListener('click', function() {
            const wrapper = document.getElementById('institutions-wrapper');
            const firstGroup = wrapper.querySelector('.institution-group');
            const newGroup = firstGroup.cloneNode(true);

            // Update input names for the new group
            newGroup.querySelectorAll('input').forEach(input => {
                const name = input.getAttribute('name');
                const newName = name.replace(/\[\d+\]/, `[${institutionIndex}]`);
                input.setAttribute('name', newName);
                input.value = ''; // clear old values
            });

            // Show remove button on cloned groups
            newGroup.querySelector('.remove-institution').classList.remove('hidden');

            wrapper.appendChild(newGroup);
            institutionIndex++;
        });

        // Delegate remove button
        document.getElementById('institutions-wrapper').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-institution')) {
                e.target.closest('.institution-group').remove();
            }
        });
    </script>
@endsection
