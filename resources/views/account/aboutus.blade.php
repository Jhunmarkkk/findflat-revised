@extends('layout.authlayout')

@section('content')
{{-- login --}}
@include('layout.tenantHeader')

@include('layout.nav')

{{-- banner (do we need this ?)--}}
<div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url('https://gttp.imgix.net/226007/x/0/zuellig-building.jpg')">
   <div class="container relative">
    <div class="absolute inset-0 bg-black opacity-30 shadow-lg"></div>
        <h1 class="text-4xl text-white font-medium mb-4 relative z-10">
        About Us
        </h1>
            <p class="text-xl text-white font-medium mb-4 relative z-10">
        Navigating Your Rental Journey with Ease.
            </p>
    </div>

    <div class="container relative">
        <div class="mt-12">
            <a href="index" class="bg-red-800 text-white px-8 py-3 font-medium rounded-md border border-red-800 hover:border-primary hover:bg-transparent hover:text-white">Rent Now</a>
        </div>
</div>
    </div>
</div>
{{-- end of banner --}}


{{-- q&a ? --}}
<div class="bg-white pt-16 pb-12 border-t border-gray-100">
    <div class="container grid grdi-cols-1 py-4">

    <h3 class="text-black font-semibold text-xl py-5">Welcome to FindFlat!</h3>
        <p class="text-gray-800 font-medium text-justify">
        Where seamless connections meet effortless living. At FindFlat, we understand the challenges individuals face when searching for rental accommodations. 
        That's why we've dedicated ourselves to developing a user-friendly platform that simplifies the rental process for both landlords and tenants.
        <br><br>
        </p>

    <h3 class="text-black font-semibold text-xl py-5">Our Mission</h3>
        <p class="text-gray-800 font-medium text-justify">
        We envision a future where finding the perfect rental home is as easy as a few clicks. 
        By harnessing the power of digital platforms, we strive to create a community-driven solution that fosters smoother interactions and transactions within the rental market.
            <br><br>
        </p>

        <h3 class="text-black font-semibold text-xl py-5">Our Vision</h3>
        <p class="text-gray-800 font-medium text-justify">
        Our mission is to bridge the gap between landlords with available rental properties and individuals in search of their next home. 
        Through innovative technology and a commitment to user experience, we aim to revolutionize the way rental properties are managed and accessed.
            <br><br>
        </p>

        <h3 class="text-black font-semibold text-xl py-5">House and Lot for Rent: A Smart Option Before Getting Your Forever Home</h3>
        <p class="text-gray-800 font-medium text-justify">
            The Philippine economy has been growing for more than ten years, and this trend is expected to continue.
            Some people now find it more sensible to rent a home due to the Philippines' increasing real estate property values.
            <br><br>
            Additionally, vacant lots are getting harder to come by, especially in metropolitan regions like Metro Manila.
            The trend is leading to an increase in the value of houses and lots.
            Even if price increases are a drawback, those looking for real estate might want to think about renting a home and land.
            Renters in the future will profit from owning a property without having to commit to anything financially or otherwise.
            <br><br>
        </p>

        <h3 class="text-black font-semibold text-xl py-5">Average Rental Prices for Houses and Lots for Rent</h3>
        <p class="text-gray-800 font-medium text-justify">
            The most affordable house and lot for rent in the Philippines cost Php 4,000 monthly.
            If you are after luxury living in a progressive city, expect that the fee of a house and lot for rent can reach up to Php 2.6 million monthly.
            <br><br>
        </p>

        <h3 class="text-black font-semibold text-xl py-5">Why Rent a House and Lot</h3>
        <p class="text-gray-800 font-medium text-justify">
            Renting a house and lot is one option to get well-built residences without having to pay a lot of money upfront.
            Renters can live in excellent residential projects that are close to institutions and establishments that provide a variety of goods, services, entertainment, and conveniences.
            <br><br>
            There are also rent-to-own residences and lots available.
            These are good for people who wish to buy a house but don't have the funds on hand to pay the entire price right now.
            Most property owners want a leasing period of at least six months to one year for people interested in renting to acquire a house and lot.
        </p>
    </div>
</div>
{{-- end of q&a ? --}}


{{--Team Member--}}
<div class="container mx-auto py-8">

    <!-- Team Member Section -->
    <section class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Our Team</h2>
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 lg:w-1/2 p-4">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Jaser Galang</h3>
                    <p class="text-gray-700">2nd Year BSIT Student</p>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/2 p-4">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Jhun Mark Obreros</h3>
                    <p class="text-gray-700">2nd Year BSIT Student</p>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/2 p-4">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Jade Pis-an</h3>
                    <p class="text-gray-700">2nd Year BSIT Student</p>
                </div>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/2 p-4">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold mb-2">Fatima Trinidad</h3>
                    <p class="text-gray-700">2nd Year BSIT Student</p>
                </div>
            </div>

        </div>
    </section>
</div>
{{--end of team member--}}

@include('layout.footer');
@endsection
