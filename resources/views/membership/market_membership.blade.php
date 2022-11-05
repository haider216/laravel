@extends('layouts.app3')

@section('content')
    <br></br><br></br>
    <div class="w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="table w-full p-2">
                    <table class="w-full border">
                        <thead>
                        <tr class="bg-blue-800 border-b">

                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-white">
                                <div class="flex items-center justify-center">
                                    Subscription
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-white">
                                <div class="flex items-center justify-center">
                                    Price ($)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-white">
                                <div class="flex items-center justify-center">
                                    Duration
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-white">
                                <div class="flex items-center justify-center">
                                    Action
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                    </svg>
                                </div>
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-gray-100 text-center border-b text-sm text-blue-800">

                                <td class="p-2 border-r">Marketplace Membership</td>
                                <td class="p-2 border-r">25</td>
                                <td class="p-2 border-r">1 year</td>
                                <td class="px-6 py-4">
                                    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="hidden" name="cmd" value="_s-xclick">
                                        <input type="hidden" name="hosted_button_id" value="5CDSYLEN6NMHG">
                                        <input type="image" src="https://www.sandbox.paypal.com/en_US/GB/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
                                        <img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                                    </form>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


<br></br><br></br><br></br><br></br><br></br>


@endsection
