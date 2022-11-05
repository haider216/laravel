@extends('layouts.app3')

@section('content')
    <br></br><br></br><br></br>
    <div class="bg-grey-400">
    <div class="w-full ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (\Session::has('success'))
                <div class="alert alert-success text-lg text-blue-800 font-bold text-center">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            <div class="bg-blue-800 overflow-hidden shadow-sm sm:rounded-lg p-1">
                <div class="table w-full p-2">

                    <table class="w-full border">
                        <thead>

                        </thead>
                        <tbody>

                        <a href="africa" class="block py-2 px-4 text-sm text-blue-800 hover:font-bold bg-white text-center">Africa</a>


                        <a href="america_north_central" class="block py-2 px-4 text-sm text-blue-800 hover:font-bold bg-white text-center">America - North and Central</a>


                        <a href="america_south" class="block py-2 px-4 text-sm text-blue-800 hover:font-bold bg-white text-center">America - South</a>


                        <a href="asia_east" class="block py-2 px-4 text-sm text-blue-800 hover:font-bold bg-white text-center">Asia - East</a>


                        <a href="asia_south" class="block py-2 px-4 text-sm text-blue-800 hover:font-bold bg-white text-center">Asia - South</a>


                        <a href="asia_southeast" class="block py-2 px-4 text-sm text-blue-800 hover:font-bold bg-white text-center">Asia - Southeast</a>


                        <a href="asia_west" class="block py-2 px-4 text-sm text-blue-800 hover:font-bold bg-white text-center">Asia - West</a>


                        <a href="europe_east" class="block py-2 px-4 text-sm text-blue-800 hover:font-bold bg-white text-center">Europe - East</a>


                        <a href="europe_west" class="block py-2 px-4 text-sm text-blue-800 hover:font-bold bg-white text-center">Europe - West</a>


                        <a href="oceana" class="block py-2 px-4 text-sm text-blue-800 hover:font-bold bg-white text-center">Oceania</a>


                        <a href="international_medals" class="block py-2 px-4 text-sm text-blue-800 hover:font-bold bg-white text-center">International Orders and Medals</a>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    </div>
    <br></br><br></br><br></br><br></br>

@endsection
