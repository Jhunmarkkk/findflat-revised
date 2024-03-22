@extends('layout.authlayout')

@section('content')
@include('layout.adminNavbar');
<div class="container mt-8 mx-auto border rounded-sm py-5 border-gray-400"id="veripropertylist">

    <div class="px-4 pb-2 overflow-hidden">
        <div class="mr-14 flex items-center">
            <h3 class="text-xl mt-5 font-semibold">
                Renters
            </h3>
        </div>
    </div>

    <div class="overflow-x-auto my-3 bg-gray-300 rounded-lg max-h-[400px]">
        <table class="table-auto w-full border-transparent">
            <thead class="sticky top-0 bg-white">
                <tr>
                    <th class="px-4 py-2 border-b border-r border-gray-400 bg-gray-300" style="width: 20%;">ID</th>
                    <th class="px-4 py-2 border-b border-r border-gray-400 bg-gray-300" style="width: 30%;">Name</th>
                    <th class="px-4 py-2 border-b border-r border-gray-400 bg-gray-300" style="width: 35%;">Email</th>               
                </tr>
            </thead>
            <tbody>
                @foreach($properties as $property)
                <tr>
                    <td class="px-4 py-2 border-b border-gray-400" style="width: 30%;">
                        <img src="{{ asset('/storage/images/' . optional($property->image)->image_path) }}" alt="Property Photo">
                    </td>
                    <td class="px-4 py-2 border-b border-gray-400" style="width: 25%;">
                        {{ $property->owner->account->fname }} {{ $property->owner->account->lname }}
                    </td>
                    <td class="px-4 py-2 border-b border-gray-400" style="width: 30%;">{{ $property->description->title }}</td>
                    {{--<td class="px-5 py-2 border-b border-gray-400 text-center" style="width: 15%;">
                        {{--<form action="{{ route('admin.destroy.property', $property->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-transparent rounded-md px-5 py-1 hover:bg-primary hover:border-b hover:border-t hover:border-primary hover:text-white font-bold">
                                <i class="fa-solid fa-x"></i>
                            </button>
                        </form>--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>

@include('layout.footer')
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

