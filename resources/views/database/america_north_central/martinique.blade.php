@extends('layouts.app3')

@section('content')
    <br></br><br>
    <div class="w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="table w-full p-2">
                    <table class="w-full border">
                        <thead>
                        <tr class="bg-blue-800 border-b">

                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-white">
                                <div class="flex items-center justify-center">
                                    Name
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-white">
                                <div class="flex items-center justify-center">
                                    Description
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-white">
                                <div class="flex items-center justify-center">
                                    Image
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>
                            @role('admin')
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Action
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>
                            @endrole
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($medals as $medal)
                            @if($medal->country == "martinique")

                                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">

                                    <td class="p-2 border-r">{{$medal->name}}</td>
                                    <td class="p-2 border-r">{{$medal->description}}</td>
                                    <td class="p-2 border-r"><img class="mx-auto max-w-xs object-scale-down h-48 w-96" src='{{ asset('storage/storage/'.$medal->image) }}'></td>
                                    @role('admin')
                                    <td>
                                        <form class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin" action="{{route ('deletemedal', $medal->medalsid)}}" method="post">
                                            @csrf
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                    @endrole
                                </tr>
                            @endif
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <button class="bg-transparent mt-8 py-2 px-4 rounded">
                <a class="inline-flex items-center h-8 px-4 m-2 text-sm text-white transition-colors duration-150 bg-blue-800 rounded-lg focus:shadow-outline hover:bg-blue-700" href="addmedal">Add Medal</a>
            </button>

        </div>

    </div>

    <br></br><br></br><br></br><br></br>
@endsection
