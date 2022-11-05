<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function mission_statement(){
        return view('about_us.mission_statement');
    }
    public function welcome(){
        return view('welcome');
    }
    public function constitution(){
        return view('about_us.constitution');
    }
    public function conflict_of_interest_policy(){
        return view('about_us.conflict_of_interest_policy');
    }
    public function charter(){
        return view('about_us.charter');
    }
    public function board_of_directors(){
        return view('about_us.board_of_directors');
    }
    public function association_awards(){
        return view('about_us.association_awards');
    }
    public function contact_us(){
        return view('about_us.contact_us');
    }



    public function market_membership(){
        return view('membership.market_membership');
    }


    public function jipa(){
        return view('publications.jipa');
    }
    public function books(){
        return view('publications.books');
    }


    public function conventions(){
        return view('activities.conventions');
    }
    public function bourse(){
        return view('activities.bourse');
    }


    public function medals(){
        return view('database.medals');
    }
    public function phaleristics_publications(){
        return view('database.phaleristics_publications');
    }


    public function description(){
        return view('software.description');
    }
    public function download_link(){
        return view('software.download_link');
    }


    public function rates(){
        return view('advertising.rates');
    }
    
    public function donations(){
        return view('donations.donations');
    }




}
