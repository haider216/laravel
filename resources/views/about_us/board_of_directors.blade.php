@extends('layouts.app')

@section('content')
<br></br><br>

<div class="bg-white text-blue-800 text text-center lg:ml-12 lg:mr-12 sm:ml-2 sm:mr-2">
<h1 class="text-2xl font-bold underline">Board of Directors</h1><br></br>
</div>
    <div class="w-full pl-10 lg:ml-40">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">  
            <div class="bg-white overflow-hidden">
            
                <div class="table w-full">
                    <table class="w-auto ">
                        <thead>
                        <tr class="bg-blue-800">

                            <th class="p-2 border-r cursor-pointer text-sm font-bold font-thin text-white">
                                <div class="flex items-center justify-center">
                                    Photo
                                    
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-bold font-thin text-white">
                                <div class="flex items-center justify-center">
                                    Name
                                   
                                </div>
                            </th>
                            
                            <th class="p-2 border-r cursor-pointer text-sm font-bold font-thin text-white invisible lg:visible ">
                                <div class="flex items-center justify-center">
                                    Contact Information
                                    
                                </div>
                            </th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="bg-gray-100 text-center lg:border-b-4 text-md text-blue-800">
                            <td class="border-r-2 border-l-2 border-b-2"><img class="mx-auto max-w-xs object-scale-down h-48 w-96" src="{{ url('storage/bod_photos/eg.jpg') }}"></td>
                            <td class="p-2 border-r-2 font-bold border-b-2">Elie Ghossoub<br></br>President</td>
                            
                            <td class="text-left font-bold lg:border-r-2 pl-2 invisible lg:visible "><br></br>Medawar, Pasteur street<br></br>Ghossoub Bldg 4th floor<br></br> P.O.Box: 175266 Beirut, Lebanon<br></br> Tel: 009613655048<br></br>president@phaleristics.org<br></br></td>
                        </tr>
                        <tr class="bg-gray-100 text-center lg:border-b-4 text-md text-blue-800">
                            <td class="border-r-2 border-l-2 border-b-2"><img class="mx-auto max-w-xs object-scale-down h-48 w-96" src="{{ url('storage/bod_photos/pn.jpg') }}"></td>
                            <td class="p-2 border-r-2 font-bold border-b-2">Privthi Pant Negi<br></br>Vice President</td>
                            
                            <td class="text-left font-bold lg:border-r-2 pl-2 invisible lg:visible "><br></br>1003 Wellington Apartments<br></br>Hirahandani Estate Ghodbunder Rd Thane<br></br>(West)-400607 Maharashtra India <br></br>Tel: 7021968035<br></br>vicepresident@phaleristics.org<br></br></td>
                        </tr>
                        <tr class="bg-gray-100 text-center lg:border-b-4 text-md text-blue-800">
                            <td class="border-r-2 border-l-2 border-b-2"><img class="mx-auto max-w-xs object-scale-down h-48 w-96" src="{{ url('storage/bod_photos/mr.jpg') }}"></td>
                            <td class="p-2 border-r-2 font-bold border-b-2">Michael B. Riley<br></br>Secretary</td>
                            
                            <td class="text-left font-bold lg:border-r-2 pl-2 invisible lg:visible"><br></br>2105 Helmoken Falls Drive<br></br>Anna, TX 75409 USA<br></br>Tel: +1 (469) 515-0864<br></br>secretary@phaleristics.org<br></br></td>
                        </tr>
                        <tr class="bg-gray-100 text-center lg:border-b-4 text-md text-blue-800">
                            <td class="border-r-2 border-l-2 border-b-2"><img class="mx-auto max-w-xs object-scale-down h-48 w-96" src="{{ url('storage/bod_photos/no.jpg') }}"></td>
                            <td class="p-2 border-r-2 font-bold border-b-2">Munroe Swirsky<br></br>Director of Treasury</td>
                            
                            <td class="text-left font-bold lg:border-r-2 pl-2 invisible lg:visible"><br></br>57A Boundary Road Inanda<br></br>Johannesburg 2196 South Africa<br></br>Tel: +27763228992<br></br>treasury@phaleristics.org<br></br></td>
                        </tr>
                        <tr class="bg-gray-100 text-center lg:border-b-4 text-md text-blue-800">
                            <td class="border-r-2 border-l-2 border-b-2"><img class="mx-auto max-w-xs object-scale-down h-48 w-96" src="{{ url('storage/bod_photos/el.jpg') }}"></td>
                            <td class="p-2 border-r-2 font-bold border-b-2">Erich Lenz<br></br>Director of Operations</td>
                            
                            <td class="text-left font-bold lg:border-r-2 pl-2 invisible lg:visible"><br></br>5837 Archwood<br></br>San Antonio, TX 78239 USA<br></br>Tel: +1 (619) 822-4660<br></br>operations@phaleristics.org<br></br></td>
                        </tr>
                        <tr class="bg-gray-100 text-center lg:border-b-4 text-md text-blue-800">
                            <td class="border-r-2 border-l-2 border-b-2"><img class="mx-auto max-w-xs object-scale-down h-48 w-96" src="{{ url('storage/bod_photos/so.jpg') }}"></td>
                            <td class="p-2 border-r-2 font-bold border-b-2">Adrià Espineta Arias<br></br>Director of International Relations</td>
                            
                            <td class="text-left font-bold lg:border-r-2 pl-2 invisible lg:visible"><br></br>C/Tossalet i Vinyals 15, escala A, àtic<br></br>AD500 Andorra la Vella<br></br>Principality of Andorra<br></br>Tel: +31-6-51886058<br></br>internationalrelations@phaleristics.org<br></br></td>
                        </tr>
                        <tr class="bg-gray-100 text-center lg:border-b-4 text-md text-blue-800">
                            <td class="border-r-2 border-l-2 border-b-2"><img class="mx-auto max-w-xs object-scale-down h-48 w-96" src="{{ url('storage/bod_photos/no.jpg') }}"></td>
                            <td class="p-2 border-r-2 font-bold border-b-2">Keith Emroll<br></br>JIPA Editor-in-Chief</td>
                            
                            <td class="text-left font-bold lg:border-r-2 pl-2 invisible lg:visible"><br></br>editor@phaleristics.org<br></br></td>
                        </tr>
                        <tr class="bg-gray-100 text-center lg:border-b-4 text-md text-blue-800">
                            <td class="border-r-2 border-l-2 border-b-2"><img class="mx-auto max-w-xs object-scale-down h-48 w-96" src="{{ url('storage/bod_photos/jh.jpg') }}"></td>
                            <td class="p-2 border-r-2 font-bold border-b-2">Jérôme Hoffart<br></br>Director</td>
                            
                            <td class="text-left font-bold lg:border-r-2 pl-2 invisible lg:visible"><br></br>15 rue d'Estienne d'Orves B.P. 39<br></br>83330 LE BEAUSSET FRANCE<br></br>Principality of Andorra<br></br>Tel: +33661868157<br></br>Quivivefrance@aol.com<br></br></td>
                        </tr>
                        <tr class="bg-gray-100 text-center lg:border-b-4 text-md text-blue-800">
                            <td class="border-r-2 border-l-2 border-b-2"><img class="mx-auto max-w-xs object-scale-down h-48 w-96" src="{{ url('storage/bod_photos/st.png') }}"></td>
                            <td class="p-2 border-r-2 font-bold border-b-2">Tang Si<br></br>Director</td>
                            
                            <td class="text-left font-bold lg:border-r-2 pl-2 invisible lg:visible"><br></br>A301, Xiangyige, Xiangqihuayuan<br></br>Shenzen, 518053 China<br></br>Tel: _86 135 1016 9105<br></br>sigmundtangsi@gmail.com<br></br></td>
                        </tr>
                        <tr class="bg-gray-100 text-center lg:border-b-4 text-md text-blue-800">
                            <td class="border-r-2 border-l-2 border-b-2"><img class="mx-auto max-w-xs object-scale-down h-48 w-96" src="{{ url('storage/bod_photos/no.jpg') }}"></td>
                            <td class="p-2 border-r-2 font-bold border-b-2">Megan Robertson<br></br>Director and Webmaster</td>
                            
                            <td class="text-left font-bold lg:border-r-2 pl-2 invisible lg:visible"><br></br>12 Bude Close Crewe<br></br>Cheshire CW1 3XG United Kingdom<br></br>Tel: +44 1270 504992<br></br>webmaster@phaleristics.org<br></br></td>
                        </tr>
                        <tr class="bg-gray-100 text-center lg:border-b-4 text-md text-blue-800">
                            <td class="border-r-2 border-l-2 border-b-2"><img class="mx-auto max-w-xs object-scale-down h-48 w-96" src="{{ url('storage/bod_photos/mj.jpg') }}"></td>
                            <td class="p-2 border-r-2 font-bold border-b-2">Matthijs Jansen<br></br>Director</td>
                            
                            <td class="text-left font-bold lg:border-r-2 pl-2 invisible lg:visible"><br></br>Postbus 25 9780AA Bedum<br></br>The Netherlands<br></br>Tel: +31653199711<br></br>info@sovietorders.com<br></br></td>
                        </tr>
                        <tr class="bg-gray-100 text-center lg:border-b-4 text-md text-blue-800">
                            <td class="border-r-2 border-l-2 border-b-2"><img class="mx-auto max-w-xs object-scale-down h-48 w-96" src="{{ url('storage/bod_photos/em.jpg') }}"></td>
                            <td class="p-2 border-r-2 font-bold border-b-2">Erik Müller<br></br>Director of Advertising</td>
                            
                            <td class="text-left font-bold lg:border-r-2 pl-2 invisible lg:visible"><br></br>Groef 6 1628 HK Hoorn<br></br>The Netherlands<br></br>Tel: +31-6-51886058<br></br>erikhmuller@gmail.com<br></br></td>
                        </tr>
                        <tr class="bg-gray-100 text-center lg:border-b-4 text-md text-blue-800">
                            <td class="border-r-2 border-l-2 border-b-2"><img class="mx-auto max-w-xs object-scale-down h-48 w-96" src="{{ url('storage/bod_photos/dd.jpg') }}"></td>
                            <td class="p-2 border-r-2 font-bold border-b-2">David Devine<br></br>Director</td>
                            
                            <td class="text-left font-bold lg:border-r-2 pl-2 invisible lg:visible"><br></br>34 Twin Oaks Dr.<br></br>Belleville, IL 62221<br></br>USA<br></br><br></br></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

<br></br><br></br><br></br><br></br>
@endsection