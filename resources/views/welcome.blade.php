@extends('layouts.app')

@section('content')
    <main>
        <div
            class="relative pt-16 pb-32 flex content-center items-center justify-center"
            style="min-height: 75vh;"
        >
<img class="absolute top-0 w-full h-full bg-center bg-cover" src="{{ url('storage/backgroundimage.jpg') }}" alt="">
                
            
          <span
              id="blackOverlay"
              class="w-full h-full top-0 absolute opacity-75 bg-blue-900"
          ></span>
        </div>


            <div
                class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                style="height: 70px;"
            >

            </div>
        </div>
        <br></br>
        <section class="pb-20 bg-gray-300 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                        >
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400"
                                >
                                    <i class="fas fa-rocket text-xl"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Software</h6>
                                <p class="mt-2 mb-4 text-blue-900">
                                    Download the latest Software
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                        >
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400"
                                >
                                    <i class="fab fa-wpforms"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Forum</h6>
                                <p class="mt-2 mb-4 text-blue-900">
                                    Chat and discuss interesting topics in our forums!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                        >
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400"
                                >
                                    <i class="fab fa-html5"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Donate</h6>
                                <p class="mt-2 mb-4 text-blue-900">
                                    Donate to help the International Phaleristic Assosication
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center mt-16">
                    <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                        <div
                            class="text-blue-900 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100"
                        >
                            <i class="fas fa-user-friends text-xl"></i>
                        </div>
                        <h3 class="text-3xl mb-2 font-semibold leading-normal">
                            Marketplace
                        </h3>
                        <p
                            class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700"
                        >
                            Browse medals listed by users and sell your own!
                        </p>
                        <p
                            class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700"
                        >
                            Buy and sell medals through our secure marketplace for quick and easy transactions.
                        </p>
                        <button type="button" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Coming Soon</button>
                    </div>
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-blue-800"
                        >
                            <img
                                alt="..."
                                src="https://st2.depositphotos.com/4060975/8907/v/600/depositphotos_89075918-stock-illustration-marketplace-colored-vector-illustration.jpg"
                                class="w-full align-middle rounded-t-lg"
                            />
                            <blockquote class="relative p-8 mb-4">
                                <svg
                                    preserveAspectRatio="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 583 95"
                                    class="absolute left-0 w-full block"
                                    style="height: 95px; top: -94px;"
                                >
                                    <polygon
                                        points="-30,95 583,95 583,65"
                                        class="text-blue-800 fill-current"
                                    ></polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    Marketplace Memebership
                                </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    Buy a membership to access the marketplace and start buy and selling medals!
                                </p>
                                <button type="button" class=" text-white bg-blue-700 hover:bg-gray-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-gray-500">Buy Membership</button>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>

@endsection
