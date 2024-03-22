@extends('layout.authlayout')

@section('content')
{{-- login --}}
@include('layout.tenantHeader')

@include('layout.nav')

<div class="container p-6 bg-white">
        {{-- page title --}}
        <div class="container py-4 flex items-center gap-3">
            <a href="index" class="text-primary text-base">
                <i class="fas fa-home"></i>
            </a>
            <span class="text-sm text-gray-400">
                <i class="fas fa-chevron-right"></i>
            </span>
            <p class="text-gray-600 font-medium">Rent</p>
        </div>
        {{-- end ng page title --}}

        {{-- product page --}}
        <div class="container grid grid-cols-4 gap-6 pt-4 pb-16 items-start">
            {{-- sidebar --}}

               {{-- categories sidebar --}}
        <div class="col-span-1 bg-white px-4 pb-6 shadow rounded overflow-hidden">
            <div class="divide-y divide-gray-200 space-y-5">


            {{-- Location filter --}}
<form method="POST" action="{{ route('apply_location_filter') }}">
    @csrf
    <div class="pt-4">
        <h3 id="location-id" class="text-xl text-gray-800 mb-3 uppercase font-medium">Location</h3>
        <div class="mt-4 flex items-center">
            <input type="text" name="city" class="w-full border-yellow-500 focus:border-primary focus:ring-0 px-3 py-1 text-gray-600 text-sm shadow-sm rounded" placeholder="Search for a City">
        </div>
    </div><br>
<button type="submit" class="ml-12 bg-red-500 text-white py-3 px-5 rounded">Search</button>
</form>
{{-- end of Location filter --}}

                <!-- {{-- Location filter --}}
                    <div class="pt-4">
                        <h3 id="location-id" class="text-xl text-gray-800 mb-3 uppercase font-medium">Location</h3>
                        <div class="mt-4 flex items-center">
                            <input id="location-input" type="text" class="w-full border-yellow-500 focus:border-primary focus:ring-0 px-3 py-1 text-gray-600 text-sm shadow-sm rounded" placeholder="Location">
                        </div>
                    </div>
                {{-- end of Location filter --}} -->


                <!-- {{-- Property Type category 1 --}}
                    <div class="pt-4">
                        <h3 id="property-id" class="text-xl text-gray-800 mb-3 uppercase font-medium">Property Type</h3>
                        <div class="flex items-center">
                            <input type="checkbox" id="cat-1" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-1" class="text-gray-600 ml-3 cursor-pointer">Apartment</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="cat-2" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-2" class="text-gray-600 ml-3 cursor-pointer">Condominium</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="cat-3" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-3" class="text-gray-600 ml-3 cursor-pointer">House</label>
                        </div>
                    </div>
                {{-- end category 1 --}} -->

                {{-- Property Type category 1 --}}
                        <form id="propertyType-filter-form"method="GET" action="{{ route('apply_filters') }}">
            @csrf
            <div class="pt-4">
                <h3 id="property-id" class="text-xl text-gray-800 mb-3 uppercase font-medium">Property Type</h3>
                <div class="flex items-center">
                    <input type="checkbox" name="property_types[]" value="Apartment" id="cat-1" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="cat-1" class="text-gray-600 ml-3 cursor-pointer">Apartment</label>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="property_types[]" value="Condominium" id="cat-2" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="cat-2" class="text-gray-600 ml-3 cursor-pointer">Condominium</label>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="property_types[]" value="House" id="cat-3" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="cat-3" class="text-gray-600 ml-3 cursor-pointer">House</label>
                </div>
            </div>
        </form>
        {{-- end category 1 --}}



<!-- <button id="apply-filters-btn" class="block w-full py-2 text-center text-black bg-primary border border-primary rounded-b hover:bg-red hover:text-primary transition">Apply Filter</button> -->


                {{-- Bedrooms category --}}
                <form id="bedrooms-filter-form" method="POST" action="{{ route('apply_bedrooms_filter') }}">
                    @csrf
                <div class="pt-4">
                    <h3 id="bedrooms-id" class="text-xl text-gray-800 mb-3 uppercase font-medium">Bedrooms</h3>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" name="bedrooms[]" id="cat-2-1" value="1" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-2-1" class="text-gray-600 ml-1 cursor-pointer">1</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" name="bedrooms[]" id="cat-2-2" value="2" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-2-2" class="text-gray-600 ml-1 cursor-pointer">2</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" name="bedrooms[]" id="cat-2-3" value="3" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-2-3" class="text-gray-600 ml-1 cursor-pointer">3</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" name="bedrooms[]" id="cat-2-4" value="4" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="cat-2-4" class="text-gray-600 ml-1 cursor-pointer">4</label>
                        </div>
                    </div>
                </div>
                </form>
                {{-- end category --}}

                {{-- Bathrooms category --}}
<form id="bathrooms-filter-form" method="POST" action="{{ route('apply_bathrooms_filter') }}">
    @csrf
    <div class="pt-4">
        <h3 id="bathrooms-id" class="text-xl text-gray-800 mb-3 uppercase font-medium">Bathrooms</h3>
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input type="checkbox" name="bathrooms[]" id="cat-2-1" value="1" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                <label for="cat-3-1" class="text-gray-600 ml-1 cursor-pointer">1</label>
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="bathrooms[]" id="cat-2-2" value="2" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                <label for="cat-3-2" class="text-gray-600 ml-1 cursor-pointer">2</label>
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="bathrooms[]" id="cat-2-3" value="3" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                <label for="cat-3-3" class="text-gray-600 ml-1 cursor-pointer">3</label>
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="bathrooms[]" id="cat-2-4" value="4" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                <label for="cat-3-4" class="text-gray-600 ml-1 cursor-pointer">4</label>
            </div>
        </div>
    </div>
</form>
{{-- end category --}}

{{-- Amenities category 4 --}}
<div class="pt-4">
    <h3 id="amenities-id" class="text-xl text-gray-800 mb-3 uppercase font-medium">Amenities</h3>
    <div>
        <form id="amenities-filter-form" action="{{ route('applyAmenitiesFilters') }}" method="POST">
            @csrf
            <div class="flex items-center">
                <input type="checkbox" id="cat-4-1" name="balcony" value="1" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                <label for="cat-4-1" class="text-gray-600 ml-1 cursor-pointer">Balcony</label>
            </div>

            <div class="flex items-center">
                <input type="checkbox" id="cat-4-2" name="pool" value="1" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                <label for="cat-4-2" class="text-gray-600 ml-1 cursor-pointer">Swimming Pool</label>
            </div>

            <div class="flex items-center">
                <input type="checkbox" id="cat-4-3" name="gym" value="1" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                <label for="cat-4-3" class="text-gray-600 ml-1 cursor-pointer">Gym</label>
            </div>

            <div class="flex items-center">
                <input type="checkbox" id="cat-4-4" name="security" value="1" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                <label for="cat-4-4" class="text-gray-600 ml-1 cursor-pointer">24/7 Security</label>
            </div>

            <div class="flex items-center">
                <input type="checkbox" id="cat-4-5" name="parking" value="1" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                <label for="cat-4-5" class="text-gray-600 ml-1 cursor-pointer">Parking</label>
            </div>

            <div class="flex items-center">
                <input type="checkbox" id="cat-4-6" name="pets_allowed" value="1" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                <label for="cat-4-6" class="text-gray-600 ml-1 cursor-pointer">Pets Allowed</label>
            </div>
        </form>
    </div>
</div>
{{-- end category 4 --}}


            </div>
            </form>
        </div>
    {{-- end of categories sidebar --}}


            {{-- Property listings --}}
            <div class="col-span-3">
                <div class="grid grid-cols-2 gap-6 pt-4 pb-16 items-start">
                    @foreach ($properties->unique('id') as $property)
                        <div class="bg-white shadow rounded overflow-hidden group  hover:shadow-2xl hover:scale-105 transition">
                            <div class="relative ">
                                <img src="{{ asset('/storage/images/' . optional($property->image)->image_path) }}" alt="logo" class="w-full h-56 mx-auto block">
                                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                                    <!-- Additional overlay content if needed -->
                                </div>
                            </div>
                            <div class="pt-4 pb-3 px-4">
                                <a href="#">
                                    <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">{{ optional($property->description)->title }}</h4>
                                </a>
                                <p class="text-gray-600">{{ optional($property->description)->description }}</p>
                                <p class="text-xl text-primary font-semibold">
                                    @if ($property->monthly_rate)
                                        Contact agent for price
                                    @else
                                        Price: {{ optional($property->rate)->monthly_rate }}
                                        <br>
                                        Place: {{ optional($property->address)->city}}
                                    @endif
                                </p>
                            </div>
                            <a href="{{ route('viewproperty', ['id' => $property->id]) }}" class="block w-full py-2 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">View</a>
                        </div>
                    @endforeach
                </div>
            </div>
</div>

{{-- end of product page --}}
</div>

{{--SCRIPTS--}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('bathrooms-filter-form');
        const checkboxes = form.querySelectorAll('input[type="checkbox"]');

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                form.submit();
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('bedrooms-filter-form');
        const checkboxes = form.querySelectorAll('input[type="checkbox"]');

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                form.submit();
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('propertyType-filter-form');
        const checkboxes = form.querySelectorAll('input[type="checkbox"]');

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                form.submit();
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('amenities-filter-form');
        const checkboxes = form.querySelectorAll('input[type="checkbox"]');

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                form.submit();
            });
        });
    });
</script>
{{--END OF SCRIPTS--}}


@include('layout.footer');
@endsection

@section('scripts')
    @parent

    @if(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif
    @if(session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @endif

    @if ($errors->any())
        <script>
            var errorMessage = @json($errors->all());
            alert(errorMessage.join('\n'));
        </script>
    @endif
@endsection

