@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="mb-6 text-2xl font-bold">EDIT DOCTOR</h1>

        <form action="{{ route('update.doctor', $doctor->id) }}" method="POST" enctype="multipart/form-data"
            class="flex flex-col gap-6 p-6 bg-white shadow rounded-2xl">
            @csrf
            @method('PUT')

            <div class="flex flex-col w-full gap-10">
                {{-- PERSONAL INFORMATION --}}
                <div class="w-full flex flex-col gap-5">
                    <h1 class="text-2xl font-semibold border-b border-red-500">Personal Information</h1>

                    <div>
                        <label class="block mb-2 font-medium">Email</label>
                        <input type="text" name="email" value="{{ old('email', $doctor->User->email) }}" readonly
                            class="w-full p-3 bg-gray-200 border rounded-lg outline-none focus:ring focus:ring-black/30"
                            required>
                    </div>

                    <div class="hidden">
                        <label class="block mb-2 font-medium">Password</label>
                        <input type="text" name="password" value="password123" readonly
                            class="w-full p-3 bg-gray-200 border rounded-lg outline-none focus:ring focus:ring-black/30"
                            required>
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">First Name</label>
                        <input type="text" name="first_name"
                            value="{{ old('first_name', $doctor->User->profiles->first_name) }}"
                            class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">Middle Name</label>
                        <input type="text" name="middle_name"
                            value="{{ old('middle_name', $doctor->User->profiles->middle_name) }}"
                            class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">Last Name</label>
                        <input type="text" name="last_name"
                            value="{{ old('last_name', $doctor->User->profiles->last_name) }}"
                            class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">Date of Birth</label>
                        <input type="date" name="date_of_birth"
                            value="{{ old('date_of_birth', $doctor->User->profiles->date_of_birth) }}"
                            class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">Phone</label>
                        <input type="text" name="phone" value="{{ old('phone', $doctor->User->profiles->phone) }}"
                            readonly
                            class="w-full p-3 bg-gray-200 border rounded-lg outline-none focus:ring focus:ring-black/30">
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">Address</label>
                        <input type="text" name="address" value="{{ old('address', $doctor->User->profiles->address) }}"
                            class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">Gender</label>
                        <select name="gender"
                            class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
                            <option value="" disabled>Select gender</option>
                            <option value="male" {{ old('gender', $doctor->gender) == 'male' ? 'selected' : '' }}>Male
                            </option>
                            <option value="female" {{ old('gender', $doctor->gender) == 'female' ? 'selected' : '' }}>Female
                            </option>
                        </select>
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">Country</label>
                        <input type="text" name="country"
                            value="{{ old('country', $doctor->User->profiles->cities->countries->country_name) }}"
                            class="w-full p-3 bg-gray-200 border rounded-lg outline-none focus:ring focus:ring-black/30">
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">City</label>
                        <select name="city"
                            class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
                            <option value="" disabled>Select city</option>
                            <option value="Manila" {{ old('city', $doctor->city) == 'Manila' ? 'selected' : '' }}>Manila
                            </option>
                            <option value="Quezon City"
                                {{ old('city', $doctor->city) == 'Quezon City' ? 'selected' : '' }}>Quezon</option>
                            <option value="Davao City" {{ old('city', $doctor->city) == 'Davao City' ? 'selected' : '' }}>
                                Davao</option>
                            <option value="Cebu City" {{ old('city', $doctor->city) == 'Cebu City' ? 'selected' : '' }}>
                                Cebu</option>
                            <option value="Makati" {{ old('city', $doctor->city) == 'Makati' ? 'selected' : '' }}>Makati
                            </option>
                            <option value="Pasig" {{ old('city', $doctor->city) == 'Pasig' ? 'selected' : '' }}>Pasig
                            </option>
                            <option value="Taguig" {{ old('city', $doctor->city) == 'Taguig' ? 'selected' : '' }}>Taguig
                            </option>
                            <option value="Bacolod" {{ old('city', $doctor->city) == 'Bacolod' ? 'selected' : '' }}>Bacolod
                            </option>
                            <option value="Iloilo_city"
                                {{ old('city', $doctor->city) == 'Iloilo_city' ? 'selected' : '' }}>Iloilo</option>
                            <option value="Cagayan de Oro"
                                {{ old('city', $doctor->city) == 'Cagayan de Oro' ? 'selected' : '' }}>Cagayan de Oro
                            </option>
                            <option value="General Santos"
                                {{ old('city', $doctor->city) == 'General Santos' ? 'selected' : '' }}>General Santos
                            </option>
                            <option value="Zamboanga City"
                                {{ old('city', $doctor->city) == 'Zamboanga City' ? 'selected' : '' }}>Zamboanga</option>
                        </select>
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">About</label>
                        <textarea name="about" rows="5"
                            class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">{{ old('about', $doctor->about) }}</textarea>
                    </div>

                    <div>
                        <label class="block mb-2 font-medium">Specialty</label>
                        <input type="text" name="specialty"
                            value="{{ old('specialty', $doctor->specializations->specialization_name) }}"
                            class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
                    </div>

                    {{-- File Upload --}}
                    <div class="p-6 text-center border-2 border-dashed rounded-lg">
                        <div class="mt-4">
                            <img id="preview"
                                src="{{ $doctor->User->profiles->images && $doctor->User->profiles->images->files ? asset($doctor->User->profiles->images->files->image_path) : '' }}"
                                class="{{ $doctor->User->profiles->images && $doctor->User->profiles->images->files ? '' : 'hidden' }} mx-auto border rounded-lg max-h-48" />
                        </div>
                        <p class="mb-1 font-medium">Upload Avatar</p>
                        <label
                            class="flex flex-col items-center justify-center w-full h-40 transition border border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                            <svg class="w-12 h-12 mb-2 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1M12 12V4m0 8l-4-4m4 4l4-4" />
                            </svg>
                            <span class="text-sm text-gray-600">Click to upload an image</span>
                            <input type="file" name="file" id="fileInput" class="hidden" accept="image/*">
                        </label>
                    </div>
                </div>

                {{-- INSTITUTION INFORMATION --}}
                <div class="w-full flex flex-col gap-5">
                    <h1 class="text-2xl font-semibold border-b border-red-500">Institution Information</h1>

                    @foreach ($doctor->doctor_institutions as $doctor_institution)
                        <div>
                            <label class="block mb-2 font-medium">Institution Name</label>
                            <input type="text" name="institution"
                                value="{{ old('institution', $doctor_institution->institutions->name) }}"
                                class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
                        </div>

                        <div>
                            <label class="block mb-2 font-medium">Institution Address</label>
                            <input type="text" name="institution_address"
                                value="{{ old('institution_address', $doctor_institution->institutions->address) }}"
                                class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
                        </div>

                        <div>
                            <label class="block mb-2 font-medium">Institution Phone</label>
                            <input type="text" name="institution_phone"
                                value="{{ old('institution_phone', $doctor_institution->institutions->phone) }}"
                                class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
                        </div>

                        <div>
                            <label class="block mb-2 font-medium">Institution Website</label>
                            <input type="text" name="website"
                                value="{{ old('website', $doctor_institution->institutions->website) }}"
                                class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Hidden uploaded_by_id --}}
            <input type="hidden" name="uploaded_by_id" value="{{ old('uploaded_by_id', $doctor->uploaded_by_id) }}">

            {{-- JS for preview --}}
            <script>
                document.getElementById('fileInput').addEventListener('change', function(e) {
                    const [file] = e.target.files;
                    const preview = document.getElementById('preview');
                    if (file) {
                        preview.src = URL.createObjectURL(file);
                        preview.classList.remove('hidden');
                    }
                });
            </script>

            {{-- Buttons --}}
            <div class="flex justify-between mt-4">
                <a href="{{ route('show.doctors') }}" class="px-6 py-2 border rounded-lg hover:bg-gray-100">Back</a>
                <button type="submit" class="px-6 py-2 text-white bg-black rounded-lg hover:bg-gray-800">Update</button>
            </div>
        </form>
    </div>
@endsection
