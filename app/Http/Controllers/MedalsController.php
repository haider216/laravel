<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medal;

class MedalsController extends Controller
{
    public function addMedaldb(Request $req){
        ob_end_clean();
        $imgname = $req->file('image')->getClientOriginalName();
        $req->file('image')->storeAs('public/storage/', $imgname);

        $medal = new Medal;
        $medal->country=$req->country;
        $medal->name=$req->name;
        $medal->description=$req->description;
        $medal->image=$imgname;
        $medal->save();


        return redirect('medals')->with('success', 'Database updated successfully!');
    }
    public function deleteMedal(Request $request, $medalsid){
        $medal1 = Medal::query()->findOrFail($medalsid);
        $medal1->delete();

        return redirect()->back();
    }

    public function addmedal(){
        return view('database.addmedal');
    }
    public function africa(){
        return view('database.africa.africa');
    }
    public function algeria(){
        $medals = Medal::all();

        return view('database.africa.algeria', compact('medals'));
    }
    public function angola(){
        $medals = Medal::all();
        return view('database.africa.angola', compact('medals'));
    }
    public function benin(){
        $medals = Medal::all();
        return view('database.africa.benin', compact('medals'));
    }
    public function botswana(){
        $medals = Medal::all();
        return view('database.africa.botswana', compact('medals'));
    }
    public function burkina_faso(){
        $medals = Medal::all();
        return view('database.africa.burkina_faso', compact('medals'));
    }
    public function burundi(){
        $medals = Medal::all();
        return view('database.africa.burundi', compact('medals'));
    }
    public function cameroon(){
        $medals = Medal::all();
        return view('database.africa.cameroon', compact('medals'));
    }
    public function central_african_republic(){
        $medals = Medal::all();
        return view('database.africa.central_african_republic', compact('medals'));
    }
    public function chad(){
        $medals = Medal::all();
        return view('database.africa.chad', compact('medals'));
    }
    public function comoros(){
        $medals = Medal::all();
        return view('database.africa.comoros', compact('medals'));
    }
    public function congo(){
        $medals = Medal::all();
        return view('database.africa.congo', compact('medals'));
    }
    public function democratic_republic_of_congo(){
        $medals = Medal::all();
        return view('database.africa.democratic_republic_of_congo', compact('medals'));
    }
    public function djibouti(){
        $medals = Medal::all();
        return view('database.africa.djibouti', compact('medals'));
    }
    public function egypt(){
        $medals = Medal::all();
        return view('database.africa.egypt', compact('medals'));
    }
    public function ethiopia(){
        $medals = Medal::all();
        return view('database.africa.ethiopia', compact('medals'));
    }
    public function gabon(){
        $medals = Medal::all();
        return view('database.africa.gabon', compact('medals'));
    }
    public function gambia(){
        $medals = Medal::all();
        return view('database.africa.gambia', compact('medals'));
    }
    public function ghana(){
        $medals = Medal::all();
        return view('database.africa.ghana', compact('medals'));
    }
    public function kenya(){
        $medals = Medal::all();
        return view('database.africa.kenya', compact('medals'));
    }
    public function liberia(){
        $medals = Medal::all();
        return view('database.africa.liberia', compact('medals'));
    }
    public function libya(){
        $medals = Medal::all();
        return view('database.africa.libya', compact('medals'));
    }
    public function madagascar(){
        $medals = Medal::all();
        return view('database.africa.madagascar', compact('medals'));
    }
    public function malawi(){
        $medals = Medal::all();
        return view('database.africa.malawi', compact('medals'));
    }
    public function mali(){
        $medals = Medal::all();
        return view('database.africa.mali', compact('medals'));
    }
    public function mauritania(){
        $medals = Medal::all();
        return view('database.africa.mauritania', compact('medals'));
    }
    public function morocco(){
        $medals = Medal::all();
        return view('database.africa.morocco', compact('medals'));
    }
    public function niger(){
        $medals = Medal::all();
        return view('database.africa.niger', compact('medals'));
    }
    public function nigeria(){
        $medals = Medal::all();
        return view('database.africa.nigeria', compact('medals'));
    }
    public function rwanda(){
        $medals = Medal::all();
        return view('database.africa.rwanda', compact('medals'));
    }
    public function senegal(){
        $medals = Medal::all();
        return view('database.africa.senegal', compact('medals'));
    }
    public function sierra_leon(){
        $medals = Medal::all();
        return view('database.africa.sierra_leon', compact('medals'));
    }
    public function somalia(){
        $medals = Medal::all();
        return view('database.africa.somalia', compact('medals'));
    }
    public function south_africa(){
        $medals = Medal::all();
        return view('database.africa.south_africa', compact('medals'));
    }
    public function sudan(){
        $medals = Medal::all();
        return view('database.africa.sudan', compact('medals'));
    }
    public function tanzania(){
        $medals = Medal::all();
        return view('database.africa.tanzania', compact('medals'));
    }
    public function togo(){
        $medals = Medal::all();
        return view('database.africa.togo', compact('medals'));
    }
    public function tunisia(){
        $medals = Medal::all();
        return view('database.africa.tunisia', compact('medals'));
    }
    public function uganda(){
        $medals = Medal::all();
        return view('database.africa.uganda', compact('medals'));
    }
    public function upper_volta(){
        $medals = Medal::all();
        return view('database.africa.upper_volta', compact('medals'));
    }
    public function zaire(){
        $medals = Medal::all();
        return view('database.africa.zaire', compact('medals'));
    }
    public function zanzibar(){
        $medals = Medal::all();
        return view('database.africa.zanzibar', compact('medals'));
    }
    public function zimbabwe(){
        $medals = Medal::all();
        return view('database.africa.zimbabwe', compact('medals'));
    }



    public function america_north_central(){
        return view('database.america_north_central.america_north_central');
    }
    public function antigua_and_barbuda(){
        $medals = Medal::all();
        return view('database.america_north_central.antigua_and_barbuda', compact('medals'));
    }
    public function bahamas(){
        $medals = Medal::all();
        return view('database.america_north_central.bahamas', compact('medals'));
    }
    public function canada(){
        $medals = Medal::all();
        return view('database.america_north_central.canada', compact('medals'));
    }
    public function costa_rica(){
        $medals = Medal::all();
        return view('database.america_north_central.costa_rica', compact('medals'));
    }
    public function cuba(){
        $medals = Medal::all();
        return view('database.america_north_central.cuba', compact('medals'));
    }
    public function dominican_republic(){
        $medals = Medal::all();
        return view('database.america_north_central.dominican_republic', compact('medals'));
    }
    public function el_salvador(){
        $medals = Medal::all();
        return view('database.america_north_central.el_salvador', compact('medals'));
    }
    public function guatemala(){
        $medals = Medal::all();
        return view('database.america_north_central.guatemala', compact('medals'));
    }
    public function haiti(){
        $medals = Medal::all();
        return view('database.america_north_central.haiti', compact('medals'));
    }
    public function honduras(){
        $medals = Medal::all();
        return view('database.america_north_central.honduras', compact('medals'));
    }
    public function martinique(){
        $medals = Medal::all();
        return view('database.america_north_central.martinique', compact('medals'));
    }
    public function mexico(){
        $medals = Medal::all();
        return view('database.america_north_central.mexico', compact('medals'));
    }
    public function nicaragua(){
        $medals = Medal::all();
        return view('database.america_north_central.nicaragua', compact('medals'));
    }
    public function panama(){
        $medals = Medal::all();
        return view('database.america_north_central.panama', compact('medals'));
    }
    public function united_states_of_america(){
        $medals = Medal::all();
        return view('database.america_north_central.united_states_of_america', compact('medals'));
    }
    public function virgin_islands(){
        $medals = Medal::all();
        return view('database.america_north_central.virgin_islands', compact('medals'));
    }




    public function america_south(){

        return view('database.america_south.america_south');
    }
    public function argentina(){
        $medals = Medal::all();
        return view('database.america_south.argentina', compact('medals'));
    }
    public function bolivia(){
        $medals = Medal::all();
        return view('database.america_south.bolivia', compact('medals'));
    }
    public function brazil(){
        $medals = Medal::all();
        return view('database.america_south.brazil', compact('medals'));
    }
    public function chile(){
        $medals = Medal::all();
        return view('database.america_south.chile', compact('medals'));
    }
    public function ecuador(){
        $medals = Medal::all();
        return view('database.america_south.ecuador', compact('medals'));
    }
    public function guyana(){
        $medals = Medal::all();
        return view('database.america_south.guyana', compact('medals'));
    }
    public function paraguay(){
        $medals = Medal::all();
        return view('database.america_south.paraguay', compact('medals'));
    }
    public function peru(){
        $medals = Medal::all();
        return view('database.america_south.peru', compact('medals'));
    }
    public function suriname(){
        $medals = Medal::all();
        return view('database.america_south.suriname', compact('medals'));
    }
    public function trinidad_and_tobago(){
        $medals = Medal::all();
        return view('database.america_south.trinidad_and_tobago', compact('medals'));
    }
    public function uruguay(){
        $medals = Medal::all();
        return view('database.america_south.uruguay', compact('medals'));
    }
    public function venezuela(){
        $medals = Medal::all();
        return view('database.america_south.venezuela', compact('medals'));
    }




    public function asia_east(){
        return view('database.asia_east.asia_east');
    }
    public function china(){
        $medals = Medal::all();
        return view('database.asia_east.china', compact('medals'));
    }
    public function japan(){
        $medals = Medal::all();
        return view('database.asia_east.japan', compact('medals'));
    }
    public function korea(){
        $medals = Medal::all();
        return view('database.asia_east.korea', compact('medals'));
    }
    public function mongolia(){
        $medals = Medal::all();
        return view('database.asia_east.mongolia', compact('medals'));
    }



    public function asia_south(){
        return view('database.asia_south.asia_south');
    }
    public function afghanistan(){
        $medals = Medal::all();
        return view('database.asia_south.afghanistan', compact('medals'));
    }
    public function bangladesh(){
        $medals = Medal::all();
        return view('database.asia_south.bangladesh', compact('medals'));
    }
    public function bhutan(){
        $medals = Medal::all();
        return view('database.asia_south.bhutan', compact('medals'));
    }
    public function india(){
        $medals = Medal::all();
        return view('database.asia_south.india', compact('medals'));
    }
    public function maldives(){
        $medals = Medal::all();
        return view('database.asia_south.maldives', compact('medals'));
    }
    public function myanmar(){
        $medals = Medal::all();
        return view('database.asia_south.myanmar', compact('medals'));
    }
    public function nepal(){
        $medals = Medal::all();
        return view('database.asia_south.nepal', compact('medals'));
    }
    public function pakistan(){
        $medals = Medal::all();
        return view('database.asia_south.pakistan', compact('medals'));
    }
    public function sikkim(){
        $medals = Medal::all();
        return view('database.asia_south.sikkim', compact('medals'));
    }
    public function sri_lanka(){
        $medals = Medal::all();
        return view('database.asia_south.sri_lanka', compact('medals'));
    }



    public function asia_southeast(){
        return view('database.asia_southeast.asia_southeast');
    }
    public function brunei(){
        $medals = Medal::all();
        return view('database.asia_southeast.brunei', compact('medals'));
    }
    public function cambodia(){
        $medals = Medal::all();
        return view('database.asia_southeast.cambodia', compact('medals'));
    }
    public function east_timor(){
        $medals = Medal::all();
        return view('database.asia_southeast.east_timor', compact('medals'));
    }
    public function indonesia(){
        $medals = Medal::all();
        return view('database.asia_southeast.indonesia', compact('medals'));
    }
    public function laos(){
        $medals = Medal::all();
        return view('database.asia_southeast.laos', compact('medals'));
    }
    public function malaysia(){
        $medals = Medal::all();
        return view('database.asia_southeast.malaysia', compact('medals'));
    }
    public function philippines(){
        $medals = Medal::all();
        return view('database.asia_southeast.philippines', compact('medals'));
    }
    public function sedang(){
        $medals = Medal::all();
        return view('database.asia_southeast.sedang', compact('medals'));
    }
    public function singapore(){
        $medals = Medal::all();
        return view('database.asia_southeast.singapore', compact('medals'));
    }
    public function thailand(){
        $medals = Medal::all();
        return view('database.asia_southeast.thailand', compact('medals'));
    }
    public function vietnam(){
        $medals = Medal::all();
        return view('database.asia_southeast.vietnam', compact('medals'));
    }




    public function asia_west(){
        return view('database.asia_west.asia_west');
    }
    public function armenia(){
        $medals = Medal::all();
        return view('database.asia_west.armenia', compact('medals'));
    }
    public function azerbaijan(){
        $medals = Medal::all();
        return view('database.asia_west.azerbaijan', compact('medals'));
    }
    public function bahrain(){
        $medals = Medal::all();
        return view('database.asia_west.bahrain', compact('medals'));
    }
    public function iran(){
        $medals = Medal::all();
        return view('database.asia_west.iran', compact('medals'));
    }
    public function iraq(){
        $medals = Medal::all();
        return view('database.asia_west.iraq', compact('medals'));
    }
    public function israel(){
        $medals = Medal::all();
        return view('database.asia_west.israel', compact('medals'));
    }
    public function jordan(){
        $medals = Medal::all();
        return view('database.asia_west.jordan', compact('medals'));
    }
    public function kazakhstan(){
        $medals = Medal::all();
        return view('database.asia_west.kazakhstan', compact('medals'));
    }
    public function kyrgyzstan(){
        $medals = Medal::all();
        return view('database.asia_west.kyrgyzstan', compact('medals'));
    }
    public function lebanon(){
        $medals = Medal::all();
        return view('database.asia_west.lebanon', compact('medals'));
    }
    public function oman(){
        $medals = Medal::all();
        return view('database.asia_west.oman', compact('medals'));
    }
    public function palestine(){
        $medals = Medal::all();
        return view('database.asia_west.palestine', compact('medals'));
    }
    public function qatar(){
        $medals = Medal::all();
        return view('database.asia_west.qatar', compact('medals'));
    }
    public function saudi_arabia(){
        $medals = Medal::all();
        return view('database.asia_west.saudi_arabia', compact('medals'));
    }
    public function syria(){
        $medals = Medal::all();
        return view('database.asia_west.syria', compact('medals'));
    }
    public function tajikistan(){
        $medals = Medal::all();
        return view('database.asia_west.tajikistan', compact('medals'));
    }
    public function turkey(){
        $medals = Medal::all();
        return view('database.asia_west.turkey', compact('medals'));
    }
    public function turkmenistan(){
        $medals = Medal::all();
        return view('database.asia_west.turkmenistan', compact('medals'));
    }
    public function united_arab_emirates(){
        $medals = Medal::all();
        return view('database.asia_west.united_arab_emirates', compact('medals'));
    }
    public function uzbekistan(){
        $medals = Medal::all();
        return view('database.asia_west.uzbekistan', compact('medals'));
    }
    public function yemen(){
        $medals = Medal::all();
        return view('database.asia_west.yemen', compact('medals'));
    }




    public function europe_east(){
        return view('database.europe_east.europe_east1');
    }
    public function albania(){
        $medals = Medal::all();
        return view('database.europe_east.albania', compact('medals'));
    }
    public function belarus(){
        $medals = Medal::all();
        return view('database.europe_east.belarus', compact('medals'));
    }
    public function bulgaria(){
    $medals = Medal::all();
    return view('database.europe_east.bulgaria', compact('medals'));
    }
    public function cyprus(){
        $medals = Medal::all();
        return view('database.europe_east.cyprus', compact('medals'));
    }
    public function czechoslovakia(){
        $medals = Medal::all();
        return view('database.europe_east.czechoslovakia', compact('medals'));
    }
    public function estonia(){
        $medals = Medal::all();
        return view('database.europe_east.estonia', compact('medals'));
    }
    public function greece(){
        $medals = Medal::all();
        return view('database.europe_east.greece', compact('medals'));
    }
    public function hungary(){
        $medals = Medal::all();
        return view('database.europe_east.hungary', compact('medals'));
    }
    public function latvia(){
        $medals = Medal::all();
        return view('database.europe_east.latvia', compact('medals'));
    }
    public function lithuania(){
        $medals = Medal::all();
        return view('database.europe_east.lithuania', compact('medals'));
    }
    public function macedonia(){
        $medals = Medal::all();
        return view('database.europe_east.macedonia', compact('medals'));
    }
    public function moldova(){
        $medals = Medal::all();
        return view('database.europe_east.moldova', compact('medals'));
    }
    public function poland(){
        $medals = Medal::all();
        return view('database.europe_east.poland', compact('medals'));
    }
    public function romania(){
        $medals = Medal::all();
        return view('database.europe_east.romania', compact('medals'));
    }
    public function russia_imperial(){
        $medals = Medal::all();
        return view('database.europe_east.russia_imperial', compact('medals'));
    }
    public function russia_soviet_union(){
        $medals = Medal::all();
        return view('database.europe_east.russia_soviet_union', compact('medals'));
    }
    public function russia_russian_federation(){
        $medals = Medal::all();
        return view('database.europe_east.russia_russian_federation', compact('medals'));
    }
    public function yugoslavia(){
        $medals = Medal::all();
        return view('database.europe_east.yugoslavia', compact('medals'));
    }



    public function europe_west(){
        return view('database.europe_west.europe_west');
    }
    public function andorra(){
        $medals = Medal::all();
        return view('database.europe_west.andorra', compact('medals'));
    }
    public function austria(){
        $medals = Medal::all();
        return view('database.europe_west.austria', compact('medals'));
    }
    public function belgium(){
        $medals = Medal::all();
        return view('database.europe_west.belgium', compact('medals'));
    }
    public function denmark(){
        $medals = Medal::all();
        return view('database.europe_west.denmark', compact('medals'));
    }
    public function finland(){
        $medals = Medal::all();
        return view('database.europe_west.finland', compact('medals'));
    }
    public function france(){
        $medals = Medal::all();
        return view('database.europe_west.france', compact('medals'));
    }
    public function germany_german_states_before_1918(){
        $medals = Medal::all();
        return view('database.europe_west.germany_german_states_before_1918', compact('medals'));
    }
    public function germany_1870_1918(){
        $medals = Medal::all();
        return view('database.europe_west.germany_1870_1918', compact('medals'));
    }
    public function germany_1918_1933(){
        $medals = Medal::all();
        return view('database.europe_west.germany_1918_1933', compact('medals'));
    }
    public function germany_1933_1945(){
        $medals = Medal::all();
        return view('database.europe_west.germany_1933_1945', compact('medals'));
    }
    public function germany_federal_republic_of_germany(){
        $medals = Medal::all();
        return view('database.europe_west.germany_federal_republic_of_germany', compact('medals'));
    }
    public function germany_german_democratic_republic(){
        $medals = Medal::all();
        return view('database.europe_west.germany_german_democratic_republic', compact('medals'));
    }
    public function iceland(){
        $medals = Medal::all();
        return view('database.europe_west.iceland', compact('medals'));
    }
    public function ireland(){
        $medals = Medal::all();
        return view('database.europe_west.ireland', compact('medals'));
    }
    public function italy(){
        $medals = Medal::all();
        return view('database.europe_west.italy', compact('medals'));
    }
    public function liechtenstein(){
        $medals = Medal::all();
        return view('database.europe_west.liechtenstein', compact('medals'));
    }
    public function luxembourg(){
        $medals = Medal::all();
        return view('database.europe_west.luxembourg', compact('medals'));
    }
    public function malta(){
        $medals = Medal::all();
        return view('database.europe_west.malta', compact('medals'));
    }
    public function monaco(){
        $medals = Medal::all();
        return view('database.europe_west.monaco', compact('medals'));
    }
    public function norway(){
        $medals = Medal::all();
        return view('database.europe_west.norway', compact('medals'));
    }
    public function portugal(){
        $medals = Medal::all();
        return view('database.europe_west.portugal', compact('medals'));
    }
    public function san_marino(){
        $medals = Medal::all();
        return view('database.europe_west.san_marino', compact('medals'));
    }
    public function spain(){
        $medals = Medal::all();
        return view('database.europe_west.spain', compact('medals'));
    }
    public function sweden(){
        $medals = Medal::all();
        return view('database.europe_west.sweden', compact('medals'));
    }
    public function switzerland(){
        $medals = Medal::all();
        return view('database.europe_west.switzerland', compact('medals'));
    }
    public function the_netherlands(){
        $medals = Medal::all();
        return view('database.europe_west.the_netherlands', compact('medals'));
    }
    public function the_vatican(){
        $medals = Medal::all();
        return view('database.europe_west.the_vatican', compact('medals'));
    }
    public function united_kingdom(){
        $medals = Medal::all();
        return view('database.europe_west.united_kingdom', compact('medals'));
    }



    public function international_medals(){
        return view('database.international_medals.international_medals');
    }
    public function brotherhoods(){
        $medals = Medal::all();
        return view('database.international_medals.brotherhoods', compact('medals'));
    }
    public function gulf_cooperation_council(){
        $medals = Medal::all();
        return view('database.international_medals.gulf_cooperation_council', compact('medals'));
    }
    public function international_red_cross(){
        $medals = Medal::all();
        return view('database.international_medals.international_red_cross', compact('medals'));
    }
    public function other_international_bodies(){
        $medals = Medal::all();
        return view('database.international_medals.other_international_bodies', compact('medals'));
    }
    public function united_nations(){
        $medals = Medal::all();
        return view('database.international_medals.united_nations', compact('medals'));
    }



    public function oceana(){
        return view('database.oceana.oceana');
    }
    public function australia(){
        $medals = Medal::all();
        return view('database.oceana.australia', compact('medals'));
    }
    public function fiji(){
        $medals = Medal::all();
        return view('database.oceana.fiji', compact('medals'));
    }
    public function hawaii(){
        $medals = Medal::all();
        return view('database.oceana.hawaii', compact('medals'));
    }
    public function kiribati(){
        $medals = Medal::all();
        return view('database.oceana.kiribati', compact('medals'));
    }
    public function new_zealand(){
        $medals = Medal::all();
        return view('database.oceana.new_zealand', compact('medals'));
    }
    public function papua_new_guinea(){
        $medals = Medal::all();
        return view('database.oceana.papua_new_guinea', compact('medals'));
    }
    public function solomon_islands(){
        $medals = Medal::all();
        return view('database.oceana.solomon_islands', compact('medals'));
    }
    public function tongo(){
        $medals = Medal::all();
        return view('database.oceana.tongo', compact('medals'));
    }
    public function vanuatu(){
        $medals = Medal::all();
        return view('database.oceana.vanuatu', compact('medals'));
    }

}
