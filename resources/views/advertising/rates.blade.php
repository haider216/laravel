@extends('layouts.app3')

@section('content')

    <div class="bg-white text-blue-800 text text-center lg:ml-12 lg:mr-12">
        <br></br>
        <br></br>

        <h1 class="text-2xl font-bold underline">Advertising Rates</h1>
        <h2 class="text-lg">Effective 24 March 2022</h2>
        <br></br>



        <div class="border-b-2 border-blue-800">
        <table class="table-auto w-full">
            <thead class="border-b-2 border-blue-800">
            <tr>
                <th class="px-6 py-3">Issue</th>
                <th class="px-6 py-3">Last Day to Schedule an Ad for an Issue</th>
                <th class="px-6 py-3">Last Day to Submit Ad Copy to Advert Manager</th>
            </tr>
            </thead>
            <tbody>
            <tr class="border-b-2 border-blue-800">
                <td>January-March</td>
                <td>15 November</td>
                <td>15 December</td>
            </tr>
            <tr class="border-b-2 border-blue-800">
                <td>April-June</td>
                <td>15 February</td>
                <td>15 March</td>
            </tr>
            <tr class="border-b-2 border-blue-800">
                <td>July-September</td>
                <td>15 May</td>
                <td>15 June</td>
            </tr>
            <tr class="border-b-2 border-blue-800">
                <td>October-December</td>
                <td>15 August</td>
                <td>15 September</td>
            </tr>
            </tbody>
        </table>
            <br></br>
            <div class="text-base">
                All ads should be submitted in either MS Word, .JPG, .TIF, or .PDF files as email attachments or by
                regular mail on DVDs or CDs. <div class="underline">All ads must have a minimum of 300 dpi resolution at publication size.</div>
                All ads must fit within the dimensions shown under “Advertising Rates and Sizes” above.<br></br>
                All position ads are available on a first-come, first-served basis.<br></br>
            </div>
        </div>
        <br></br>
        <div class="border-b-2 border-blue-800">
            <div class=" text-lg underline font-bold">Advertising Rates and Sizes*</div>
            <div class="text-base">
                <div class="font-bold">Website Banner</div>
                Homepage: $200.00/month<br></br>
                Member pages: $125.00/month<br></br>
                <div class="font-bold">JIPA Full Page Ad and Website Banner Combination</div>
                $200.00/month<br></br>
            </div>
            <div class="border-b-2 border-blue-800">
                <table class="table-auto w-full">
                    <thead class="border-b-2 border-blue-800">
                    <tr>
                        <th class="px-6 py-3 underline">Ad Position</th>
                        <th class="px-6 py-3 underline">Cost-Single Issue</th>
                        <th class="px-6 py-3 underline">Cost for Annual Subscription</th>
                        <th class="px-6 py-3 underline">Size (width X length)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-b-2 border-blue-800">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="font-bold">U.S (inches)</td>
                        <td class="font-bold">Metric (cm)</td>
                    </tr>
                    <tr class="border-b-2 border-blue-800">
                        <td>Outside Back Cover-Color</td>
                        <td>$150.00</td>
                        <td>$1800.00</td>
                        <td>8.5 X 11</td>
                        <td>21.59 X 27.94</td>
                    </tr>
                    <tr class="border-b-2 border-blue-800">
                        <td>Inside Back Cover-Color</td>
                        <td>$150.00</td>
                        <td>$1800.00</td>
                        <td>8.5 X 11</td>
                        <td>21.59 X 27.94</td>
                    </tr>
                    <tr class="border-b-2 border-blue-800">
                        <td>Inside Front Cover-Color</td>
                        <td>$150.00</td>
                        <td>$1800.00</td>
                        <td>8.5 X 11</td>
                        <td>21.59 X 27.94</td>
                    </tr>
                    <tr class="border-b-2 border-blue-800">
                        <td>Full Page-Color</td>
                        <td>$125.00</td>
                        <td>$1500.00</td>
                        <td>7.3 X 9.8</td>
                        <td>18.54 X 24.89</td>
                    </tr>
                    <tr class="border-b-2 border-blue-800">
                        <td>Full Page-Greyscale</td>
                        <td>$85.00</td>
                        <td>$1020.00</td>
                        <td>7.3 X 9.8</td>
                        <td>18.54 X 24.89</td>
                    </tr>
                    <tr class="border-b-2 border-blue-800">
                        <td>Half Page-Color</td>
                        <td>$75.00</td>
                        <td>$900.00</td>
                        <td>7.3 X 4.7</td>
                        <td>18.54 X 11.94</td>
                    </tr>
                    <tr class="border-b-2 border-blue-800">
                        <td>Half Page-Greyscale</td>
                        <td>$55.00</td>
                        <td>$660.00</td>
                        <td>7.3 X 4.7</td>
                        <td>18.54 X 11.94</td>
                    </tr>
                    <tr class="border-b-2 border-blue-800">
                        <td>Quarter Page-Color</td>
                        <td>$50.00</td>
                        <td>$600.00</td>
                        <td>3.5 X 4.7</td>
                        <td>8.89 X 11.94</td>
                    </tr>
                    <tr class="border-b-2 border-blue-800">
                        <td>Quarter Page-Greyscale</td>
                        <td>$40.00</td>
                        <td>$480.00</td>
                        <td>3.5 X 4.7</td>
                        <td>8.89 X 11.94</td>
                    </tr>
                    </tbody>
                </table>
                <br></br>
                <div class="text-sm">
                    <div class="font-bold">*Prices are subject to change without notice.</div><br></br>
                    <div class="font-bold underline">Special Instructions</div><br></br>
                    The <span class="italic">Journal of the International Phaleristics Association</span> is published as a PDF four (4) times per
                    year.<br></br>
                    The Journal is published during the last week of the first month of each bimonthly issue; i.e. on the
                    last week of January for the January-March issue. etc. Advertisers of time-sensitive material should
                    take the publishing schedule into consideration.<br></br>
                    All ads should be submitted in either MS Word, .JPG, .TIF, or .PDF files as email attachments or by
                    regular mail on DVDs or CDs. <span class="underline">All ads must have a minimum of 300 dpi resolution at publication size.</span><br></br>
                    All ads must fit within the dimensions shown under “Advertising Rates and Sizes” above.<br></br>
                    All position ads are available on a first-come, first-served basis.<br></br>
                    <span class="font-bold underline">Payment.</span> All ads must be prepaid in U.S. dollars. Checks and money orders are to be made payable
                    to the International Phaleristics Association. All payments should be directed to the Secretary,
                    Michael B. Riley, P.O. Box 158, Anna, TX 75409. All International checks and money orders must
                    have a U.S. Federal Reserve Bank routing number. Payments may also be made by VISA or Master
                    Card. AMEX; Discover and Debit Cards <span class="underline">will not</span> be accepted.<span class="italic"> For local or international buyers
                    who wish to pay via Wire Transfer or “Pay Pal”; please contact the Director of Treasury for specific individual instructions.</span><br></br>
                    *Foreign advertisers please note: The ISO A4 page format (21.0 X 29.7 cm or 8.27 X 11.69
                    inches)is longer than the U.S. standard letter-size page format (8.5 X 11 inches) and will not fit
                    the JIPA page format properly.<br></br>
                    <span class="font-bold">Copy Services <span class="underline">(Please coordinate all copy services with the</span> JIPA <span class="underline">Editor-in-Chief)</span></span><br></br>
                    The JIPA Editor-in-Chief is Keith Emroll, email- editor@phaleristics.org.<br></br>
                    In order to assist advertisers, the Jipa Editor-in-Chief will provide the following services at the costs
                    enumerated to advertisers requiring assistance in copy preparation.<br></br>
                    Ad layout-Design and layout the ad using customer photo and text. Price includes one photo scan.
                    Requires customer approval prior to publication.<br></br>
                    Full Page – $65.00, Half Page $45.00<br></br>
                    Convert hardcopy ad to digital – Price includes one photo scan. Requires customer approval prior to
                    publication. Full Page – $45.00, Half Page – $25.00<br></br>
                    Photo scan – $15.00 each.<br></br>
                    Clients using these services who request it will be provided a DVD disk containing their ad.<br></br>
                    <span class="font-bold">Advertiser Obligations and Buyer Complaints</span><br></br>
                    <span class="underline">1. By submitting an advertisement for publication in JIPA, an advertiser agrees to be bound by IPA’s Code of Ethics in all transactions with IPA members</span><br></br>
                    <span class="underline">2. Advertisers agree to disclose if anything they are selling is a Reproduction or Copy.</span><br></br>
                    The Association assumes no legal responsibility with respect to goods offered by or purchased from
                    advertisers. Nor can the Association undertake the often difficult and always time consuming task of
                    arbitrating differences between buyers and sellers. However, by placing an ad in the Journal,
                    advertisers agree to provide a full refund to buyers within forty-five days from the date of purchase
                    upon presentation of a reasonable claim that Order, Decoration, Medal, Badge purchased was not as
                    stated in the ad. The Society will investigate any claim of failure to make a prompt refund of such
                    goods.<br></br>
                </div>
            </div>
        </div>
    </div>
    <br></br>
    <br></br><br></br>

@endsection