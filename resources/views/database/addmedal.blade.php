@extends('layouts.app2')

@section('content')
    <br></br><br>
    <div class="w-full bg">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="table w-full p-2">
                    <div>
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium leading-6 text-white">Add Medal</h3>

                                </div>
                            </div>
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <form action="addmedal" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                            <div class="">
                                                
                                                    
                                                    <label for="country" class="block text-sm font-medium text-gray-700">Country </label>
                                                    <div class="mt-4">
                                                        <select id="country" name="country" multiple size="4">
                                                            <optgroup label="Africa">
                                                                <option value="algeria">Algeria</option>
                                                                <option value="angola">Angola</option>
                                                                <option value="benin">Benin (Dahomey)</option>
                                                                <option value="botswana">Botswana</option>
                                                                <option value="burkinafaso">Burkina Faso</option>
                                                                <option value="burundi">Burundi</option>
                                                                <option value="cameroon">Cameroon</option>
                                                                <option value="centralafricanrepublic">Central African Republic</option>
                                                                <option value="chad">Chad</option>
                                                                <option value="comoros">Comoros</option>
                                                                <option value="congo">Congo</option>
                                                                <option value="democraticrepublicofcongo">Democratic Republic of Congo</option>
                                                                <option value="djibouti">Djibouti</option>
                                                                <option value="egypt">Egypt</option>
                                                                <option value="ethiopia">Ethiopia</option>
                                                                <option value="gabon">Gabon</option>
                                                                <option value="gambia">Gambia</option>
                                                                <option value="ghana">Ghana</option>
                                                                <option value="kenya">Kenya</option>
                                                                <option value="liberia">Liberia</option>
                                                                <option value="libya">Libya</option>
                                                                <option value="madagascar">Madagascar</option>
                                                                <option value="malawi">Malawi</option>
                                                                <option value="mali">Mali</option>
                                                                <option value="mauritania">Mauritania</option>
                                                                <option value="morocco">Morocco</option>
                                                                <option value="niger">Niger</option>
                                                                <option value="nigeria">Nigeria</option>
                                                                <option value="rwanda">Rwanda</option>
                                                                <option value="senegal">Senegal</option>
                                                                <option value="sierraleon">Sierra Leone</option>
                                                                <option value="somalia">Somalia</option>
                                                                <option value="southafrica">South Africa</option>
                                                                <option value="sudan">Sudan</option>
                                                                <option value="tanzania">Tanzania</option>
                                                                <option value="togo">Togo</option>
                                                                <option value="tunisia">Tunisia</option>
                                                                <option value="uganda">Uganda</option>
                                                                <option value="uppervolta">Upper Volta</option>
                                                                <option value="zaire">Zaire</option>
                                                                <option value="zanzibar">Zanzibar</option>
                                                                <option value="zimbabwe">Zimbabwe</option>
                                                            </optgroup>
                                                            <optgroup label="America North/Central">
                                                                <option value="antiguaandbarbuda">Antigua and Barbuda</option>
                                                                <option value="bahamas">Bahamas</option>
                                                                <option value="canada">Canada</option>
                                                                <option value="costarica">Costa Rica</option>
                                                                <option value="cuba">Cuba</option>
                                                                <option value="dominicanrepublic">Dominican Republic</option>
                                                                <option value="elsalvador">El Salvador</option>
                                                                <option value="guatemala">Guatemala</option>
                                                                <option value="haiti">Haiti</option>
                                                                <option value="honduras">Honduras</option>
                                                                <option value="martinique">Martinique</option>
                                                                <option value="mexico">Mexico</option>
                                                                <option value="nicaragua">Nicaragua</option>
                                                                <option value="panama">Panama</option>
                                                                <option value="unitedstates">United States of America</option>
                                                                <option value="virginislands">Virgin Islands</option>
                                                            </optgroup>
                                                            <optgroup label="America South">
                                                                <option value="argentina">Argentina</option>
                                                                <option value="bolivia">Bolivia</option>
                                                                <option value="brazil">Brazil</option>
                                                                <option value="chile">Chile</option>
                                                                <option value="ecuador">Ecuador</option>
                                                                <option value="guyana">Guyana</option>
                                                                <option value="paraguay">Paraguay</option>
                                                                <option value="peru">Peru</option>
                                                                <option value="suriname">Suriname</option>
                                                                <option value="trinidadandtobago">Trinidad and Tobago</option>
                                                                <option value="uruguay">Uruguay</option>
                                                                <option value="venezuela">Venezuela</option>
                                                            </optgroup>
                                                            <optgroup label="Asia East">
                                                                <option value="china">China</option>
                                                                <option value="japan">Japan</option>
                                                                <option value="korea">Korea</option>
                                                                <option value="mongolia">Mongolia</option>
                                                            </optgroup>
                                                            <optgroup label="Asia South">
                                                                <option value="afghanistan">Afghanistan</option>
                                                                <option value="bangladesh">Bangladesh</option>
                                                                <option value="bhutan">Bhutan</option>
                                                                <option value="india">India</option>
                                                                <option value="maldives">Maldives</option>
                                                                <option value="myanmar">Myanmar</option>
                                                                <option value="nepal">Nepal</option>
                                                                <option value="pakistan">Pakistan</option>
                                                                <option value="sikkim">Sikkim</option>
                                                                <option value="srilanka">Sri Lanka</option>
                                                            </optgroup>
                                                            <optgroup label="Asia Southeast">
                                                                <option value="brunei">Brunei</option>
                                                                <option value="cambodia">Cambodia</option>
                                                                <option value="easttimor">East Timbor</option>
                                                                <option value="indonesia">Indonesia</option>
                                                                <option value="laos">Laos</option>
                                                                <option value="malaysia">Malaysia</option>
                                                                <option value="philippines">Philippines</option>
                                                                <option value="sedang">Sedang</option>
                                                                <option value="singapore">Singapore</option>
                                                                <option value="thailand">Thailand</option>
                                                                <option value="vietnam">Vietnam</option>
                                                            </optgroup>
                                                            <optgroup label="Asia Southeast">
                                                                <option value="armenia">Armenia</option>
                                                                <option value="azerbaijan">Azerbaijan</option>
                                                                <option value="bahrain">Bahrain</option>
                                                                <option value="iran">Iran</option>
                                                                <option value="iraq">Iraq</option>
                                                                <option value="israel">Israel</option>
                                                                <option value="jordan">Jordan</option>
                                                                <option value="kazakhstan">Kazakhstan</option>
                                                                <option value="kyrgyzstan">Kyrgyzstan</option>
                                                                <option value="lebanon">Lebanon</option>
                                                                <option value="oman">Oman</option>
                                                                <option value="palestine">Palestine</option>
                                                                <option value="qatar">Qatar</option>
                                                                <option value="saudiarabia">Saudi Arabia</option>
                                                                <option value="syria">Syria</option>
                                                                <option value="tajikistan">Tajikistan</option>
                                                                <option value="turkey">Turkey</option>
                                                                <option value="turkmenistan">Turkmenistan</option>
                                                                <option value="unitedarabemirates">United Arab Emirates</option>
                                                                <option value="uzbekistan">Uzbekistan</option>
                                                                <option value="yemen">Yemen</option>
                                                            </optgroup>
                                                            <optgroup label="Europe East">
                                                                <option value="albania">Albania</option>
                                                                <option value="belarus">Belarus</option>
                                                                <option value="bulgaria">Bulgaria</option>
                                                                <option value="cyprus">Cyprus</option>
                                                                <option value="czechoslovakia">Czechoslovakia</option>
                                                                <option value="estonia">Estonia</option>
                                                                <option value="greece">Greece</option>
                                                                <option value="hungary">Hungary</option>
                                                                <option value="latvia">Latvia</option>
                                                                <option value="lithuania">Lithuania</option>
                                                                <option value="macedonia">Macedonia</option>
                                                                <option value="moldova">Moldova</option>
                                                                <option value="poland">Poland</option>
                                                                <option value="romania">Romania</option>
                                                                <option value="russiaimperial">Russia Imperial</option>
                                                                <option value="russiasovietunion">Russia Soviet Union</option>
                                                                <option value="russiarussianfederation">Russia Russian Fedaration</option>
                                                                <option value="yugoslavia">Yugoslavia</option>
                                                            </optgroup>
                                                            <optgroup label="Europe West">
                                                                <option value="andorra">Andorra</option>
                                                                <option value="austria">Austria</option>
                                                                <option value="belgium">Belgium</option>
                                                                <option value="denmark">Denmark</option>
                                                                <option value="finland">Finland</option>
                                                                <option value="france">France</option>
                                                                <option value="germanstates">German states before 1918</option>
                                                                <option value="germany1870">Germany 1870-1918</option>
                                                                <option value="germany1918">Germany 1918-1933</option>
                                                                <option value="germany1933">Germany 1933-1945</option>
                                                                <option value="germanfederal">German Federal Republic</option>
                                                                <option value="germandemocratic">German Democratic Republic</option>
                                                                <option value="iceland">Iceland</option>
                                                                <option value="ireland">Ireland</option>
                                                                <option value="italy">Italy</option>
                                                                <option value="liechtenstein">Liechtenstien</option>
                                                                <option value="luxembourg">Luxembourg</option>
                                                                <option value="malta">Malta</option>
                                                                <option value="monaco">Monaco</option>
                                                                <option value="norway">Norway</option>
                                                                <option value="portugal">Portugal</option>
                                                                <option value="sanmarino">San Marino</option>
                                                                <option value="spain">Spain</option>
                                                                <option value="sweden">Sweden</option>
                                                                <option value="switzerland">Switzerland</option>
                                                                <option value="netherlands">The Netherlands</option>
                                                                <option value="vatican">The Vatican</option>
                                                                <option value="uk">United Kingdom</option>
                                                            </optgroup>
                                                            <optgroup label="Oceania">
                                                                <option value="australia">Australia</option>
                                                                <option value="fiji">Fiji</option>
                                                                <option value="hawaii">Hawaii</option>
                                                                <option value="kiribati">Kiribati</option>
                                                                <option value="newzealand">New Zealand</option>
                                                                <option value="papua">Papua New Guinea</option>
                                                                <option value="solomon">Solomon Islands</option>
                                                                <option value="tongo">Tongo</option>
                                                                <option value="vanuatu">Vanuatu</option>
                                                            </optgroup> 
                                                            <optgroup label="International Medals">
                                                                <option value="brotherhoods">Brotherhoods</option>
                                                                <option value="gulfcooperation">Gulf Cooperation Council</option>
                                                                <option value="redcross">International Red Cross</option>
                                                                <option value="other">Other International Bodies</option>
                                                                <option value="un">United Nations</option>
                                                            </optgroup>       
                                                        </select>
                                                    </div>
                                                    
                                                    
                                                
                                            </div>
                                            <div class="grid grid-cols-3 gap-6">
                                                <div class="col-span-3 sm:col-span-2">
                                                    <label for="name" class="block text-sm font-medium text-gray-700"> Medal Name </label>
                                                    <div class="mt-1 flex rounded-md shadow-sm">

                                                        <input type="text" name="name" id="name" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Medal Name">
                                                    </div>
                                                    <p class="mt-2 text-sm text-blue-800">*Required</p>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="description" class="block text-sm font-medium text-gray-700"> Description </label>
                                                <div class="mt-1">
                                                    <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                                                </div>
                                                <p class="mt-2 text-sm text-blue-800">Optional. (Max Characters: 255)</p>
                                            </div>

                                            <div>
                                                <label class="block text-sm font-medium text-gray-700"> Image </label>
                                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                                    <div class="space-y-1 text-center">
                                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <div class="flex text-sm text-gray-600">
                                                            <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                                <span>Upload a file</span>
                                                                <input id="image" name="image" type="file" class="sr-only">
                                                            </label>
                                                            <p class="pl-1">or drag and drop</p>
                                                        </div>
                                                        <p class="text-xs text-gray-500">PNG, JPG, up to 10MB</p>
                                                        
                                                    </div>
                                                </div>
                                                <p class="mt-2 text-sm text-blue-800">*Required</p>
                                            </div>
                                        </div>
                                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br></br><br>
@endsection
