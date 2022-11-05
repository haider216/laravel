@extends('layouts.app')

@section('content')


    <div class="bg-white text-blue-800 text text-center ml-12 mr-12">
        <br></br>
        <br></br>

        <h1 class="text-2xl font-bold underline">Donations</h1>
        <br></br>
        <p class="text-lg font-bold">
        Thank you for your great generosity! We, at the International Phaleristics Association, greatly appreciate your donation, and your sacrifice. Your support helps to further our research into medals and orders. Your support is invaluable to us, thank you again!<br></br>
        </p>
        <br>
          <p class="text-lg font-bold">
        The International Phaleristics Association is a 501 (c) 3 non-profit organization. Your donation is tax deductible in the United States of America.<br></br>
        </p>
        </br>
        <form action="https://www.paypal.com/donate" method="post" target="_top">
        <input type="hidden" name="hosted_button_id" value="2XB2NS48VMTCE" />
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
        <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
        </form>
        <br></br>
        <br></br><br></br>
    </div>

    
    
    
@endsection