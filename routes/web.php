<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\MedalsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PublicationsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [PagesController::class,'welcome']);
Route::get('/welcome', [PagesController::class,'welcome']);

Route::get('/mission_statement', [PagesController::class,'mission_statement']);
Route::get('/constitution', [PagesController::class,'constitution']);
Route::get('/conflict_of_interest_policy', [PagesController::class,'conflict_of_interest_policy']);
Route::get('/charter', [PagesController::class,'charter']);
Route::get('/board_of_directors', [PagesController::class,'board_of_directors']);
Route::get('/association_awards', [PagesController::class,'association_awards']);
Route::get('/contact_us', [PagesController::class,'contact_us']);


Route::get('/market_membership', [PagesController::class,'market_membership']);

Route::get('/jipa', [PagesController::class,'jipa']);
Route::get('/books', [PagesController::class,'books']);

Route::get('/conventions', [PagesController::class,'conventions']);
Route::get('/bourse', [PagesController::class,'bourse']);



Route::get('/description', [PagesController::class,'description']);
Route::get('/download_link', [PagesController::class,'download_link']);

Route::get('/rates', [PagesController::class,'rates']);

Route::get('/donations', [PagesController::class,'donations']);




Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin_dashboard', [AdminController::class, 'admin_dashboard']);
    Route::get('/roles_dashboard', [RolesController::class, 'roles_dashboard']);
    
    
});

Route::middleware(['auth','role:user|admin'])->group(function(){

    Route::get('/medals', [PagesController::class,'medals']);
    Route::get('/addmedal', [MedalsController::class,'addmedal']);
    Route::post('/addmedal', [MedalsController::class, 'addMedaldb'])->name('addMedaldb');
    

    Route::get('/phaleristics_publications', [PublicationsController::class,'phaleristics_publications']);
    Route::get('/addpublication', [PublicationsController::class,'addpublication']);
    Route::post('/addpublication', [PublicationsController::class, 'addpublicationdb'])->name('addpublicationdb');


    Route::get('/africa', [MedalsController::class,'africa']);
    Route::get('/algeria', [MedalsController::class,'algeria']);
    Route::get('/angola', [MedalsController::class,'angola']);
    Route::get('/benin', [MedalsController::class,'benin']);
    Route::get('/botswana', [MedalsController::class,'botswana']);
    Route::get('/burkina_faso', [MedalsController::class,'burkina_faso']);
    Route::get('/burundi', [MedalsController::class,'burundi']);
    Route::get('/cameroon', [MedalsController::class,'cameroon']);
    Route::get('/central_african_republic', [MedalsController::class,'central_african_republic']);
    Route::get('/chad', [MedalsController::class,'chad']);
    Route::get('/comoros', [MedalsController::class,'comoros']);
    Route::get('/congo', [MedalsController::class,'congo']);
    Route::get('/democratic_republic_of_congo', [MedalsController::class,'democratic_republic_of_congo']);
    Route::get('/djibouti', [MedalsController::class,'djibouti']);
    Route::get('/egypt', [MedalsController::class,'egypt']);
    Route::get('/ethiopia', [MedalsController::class,'ethiopia']);
    Route::get('/gabon', [MedalsController::class,'gabon']);
    Route::get('/gambia', [MedalsController::class,'gambia']);
    Route::get('/ghana', [MedalsController::class,'ghana']);
    Route::get('/kenya', [MedalsController::class,'kenya']);
    Route::get('/liberia', [MedalsController::class,'liberia']);
    Route::get('/libya', [MedalsController::class,'libya']);
    Route::get('/madagascar', [MedalsController::class,'madagascar']);
    Route::get('/malawi', [MedalsController::class,'malawi']);
    Route::get('/mali', [MedalsController::class,'mali']);
    Route::get('/mauritania', [MedalsController::class,'mauritania']);
    Route::get('/morocco', [MedalsController::class,'morocco']);
    Route::get('/niger', [MedalsController::class,'niger']);
    Route::get('/nigeria', [MedalsController::class,'nigeria']);
    Route::get('/rwanda', [MedalsController::class,'rwanda']);
    Route::get('/senegal', [MedalsController::class,'senegal']);
    Route::get('/sierra_leon', [MedalsController::class,'sierra_leon']);
    Route::get('/somalia', [MedalsController::class,'somalia']);
    Route::get('/south_africa', [MedalsController::class,'south_africa']);
    Route::get('/sudan', [MedalsController::class,'sudan']);
    Route::get('/tanzania', [MedalsController::class,'tanzania']);
    Route::get('/togo', [MedalsController::class,'togo']);
    Route::get('/tunisia', [MedalsController::class,'tunisia']);
    Route::get('/uganda', [MedalsController::class,'uganda']);
    Route::get('/upper_volta', [MedalsController::class,'upper_volta']);
    Route::get('/zaire', [MedalsController::class,'zaire']);
    Route::get('/zanzibar', [MedalsController::class,'zanzibar']);
    Route::get('/zimbabwe', [MedalsController::class,'zimbabwe']);


    Route::get('/america_north_central', [MedalsController::class,'america_north_central']);
    Route::get('/antigua_and_barbuda', [MedalsController::class,'antigua_and_barbuda']);
    Route::get('/bahamas', [MedalsController::class,'bahamas']);
    Route::get('/canada', [MedalsController::class,'canada']);
    Route::get('/costa_rica', [MedalsController::class,'costa_rica']);
    Route::get('/cuba', [MedalsController::class,'cuba']);
    Route::get('/dominican_republic', [MedalsController::class,'dominican_republic']);
    Route::get('/el_salvador', [MedalsController::class,'el_salvador']);
    Route::get('/guatemala', [MedalsController::class,'guatemala']);
    Route::get('/haiti', [MedalsController::class,'haiti']);
    Route::get('/honduras', [MedalsController::class,'honduras']);
    Route::get('/martinique', [MedalsController::class,'martinique']);
    Route::get('/mexico', [MedalsController::class,'mexico']);
    Route::get('/nicaragua', [MedalsController::class,'nicaragua']);
    Route::get('/panama', [MedalsController::class,'panama']);
    Route::get('/united_states_of_america', [MedalsController::class,'united_states_of_america']);
    Route::get('/virgin_islands', [MedalsController::class,'virgin_islands']);


    Route::get('/america_south', [MedalsController::class,'america_south']);
    Route::get('/argentina', [MedalsController::class,'argentina']);
    Route::get('/bolivia', [MedalsController::class,'bolivia']);
    Route::get('/brazil', [MedalsController::class,'brazil']);
    Route::get('/chile', [MedalsController::class,'chile']);
    Route::get('/ecuador', [MedalsController::class,'ecuador']);
    Route::get('/guyana', [MedalsController::class,'guyana']);
    Route::get('/paraguay', [MedalsController::class,'paraguay']);
    Route::get('/peru', [MedalsController::class,'peru']);
    Route::get('/suriname', [MedalsController::class,'suriname']);
    Route::get('/trinidad_and_tobago', [MedalsController::class,'trinidad_and_tobago']);
    Route::get('/uruguay', [MedalsController::class,'uruguay']);
    Route::get('/venezuela', [MedalsController::class,'venezuela']);


    Route::get('/asia_east', [MedalsController::class,'asia_east']);
    Route::get('/china', [MedalsController::class,'china']);
    Route::get('/japan', [MedalsController::class,'japan']);
    Route::get('/korea', [MedalsController::class,'korea']);
    Route::get('/mongolia', [MedalsController::class,'mongolia']);


    Route::get('/asia_south', [MedalsController::class,'asia_south']);
    Route::get('/afghanistan', [MedalsController::class,'afghanistan']);
    Route::get('/bangladesh', [MedalsController::class,'bangladesh']);
    Route::get('/bhutan', [MedalsController::class,'bhutan']);
    Route::get('/india', [MedalsController::class,'india']);
    Route::get('/maldives', [MedalsController::class,'maldives']);
    Route::get('/myanmar', [MedalsController::class,'myanmar']);
    Route::get('/nepal', [MedalsController::class,'nepal']);
    Route::get('/pakistan', [MedalsController::class,'pakistan']);
    Route::get('/sikkim', [MedalsController::class,'sikkim']);
    Route::get('/sri_lanka', [MedalsController::class,'sri_lanka']);


    Route::get('/asia_southeast', [MedalsController::class,'asia_southeast']);
    Route::get('/brunei', [MedalsController::class,'brunei']);
    Route::get('/cambodia', [MedalsController::class,'cambodia']);
    Route::get('/east_timor', [MedalsController::class,'east_timor']);
    Route::get('/indonesia', [MedalsController::class,'indonesia']);
    Route::get('/laos', [MedalsController::class,'laos']);
    Route::get('/malaysia', [MedalsController::class,'malaysia']);
    Route::get('/philippines', [MedalsController::class,'philippines']);
    Route::get('/sedang', [MedalsController::class,'sedang']);
    Route::get('/singapore', [MedalsController::class,'singapore']);
    Route::get('/thailand', [MedalsController::class,'thailand']);
    Route::get('/vietnam', [MedalsController::class,'vietnam']);


    Route::get('/asia_west', [MedalsController::class,'asia_west']);
    Route::get('/armenia', [MedalsController::class,'armenia']);
    Route::get('/azerbaijan', [MedalsController::class,'azerbaijan']);
    Route::get('/bahrain', [MedalsController::class,'bahrain']);
    Route::get('/iran', [MedalsController::class,'iran']);
    Route::get('/iraq', [MedalsController::class,'iraq']);
    Route::get('/israel', [MedalsController::class,'israel']);
    Route::get('/jordan', [MedalsController::class,'jordan']);
    Route::get('/kazakhstan', [MedalsController::class,'kazakhstan']);
    Route::get('/kyrgyzstan', [MedalsController::class,'kyrgyzstan']);
    Route::get('/lebanon', [MedalsController::class,'lebanon']);
    Route::get('/oman', [MedalsController::class,'oman']);
    Route::get('/palestine', [MedalsController::class,'palestine']);
    Route::get('/qatar', [MedalsController::class,'qatar']);
    Route::get('/saudi_arabia', [MedalsController::class,'saudi_arabia']);
    Route::get('/syria', [MedalsController::class,'syria']);
    Route::get('/tajikistan', [MedalsController::class,'tajikistan']);
    Route::get('/turkey', [MedalsController::class,'turkey']);
    Route::get('/turkmenistan', [MedalsController::class,'turkmenistan']);
    Route::get('/united_arab_emirates', [MedalsController::class,'united_arab_emirates']);
    Route::get('/uzbekistan', [MedalsController::class,'uzbekistan']);
    Route::get('/yemen', [MedalsController::class,'yemen']);


    Route::get('/europe_east', [MedalsController::class,'europe_east']);
    Route::get('/albania', [MedalsController::class,'albania']);
    Route::get('/belarus', [MedalsController::class,'belarus']);
    Route::get('/bulgaria', [MedalsController::class,'bulgaria']);
    Route::get('/cyprus', [MedalsController::class,'cyprus']);
    Route::get('/czechoslovakia', [MedalsController::class,'czechoslovakia']);
    Route::get('/estonia', [MedalsController::class,'estonia']);
    Route::get('/greece', [MedalsController::class,'greece']);
    Route::get('/hungary', [MedalsController::class,'hungary']);
    Route::get('/latvia', [MedalsController::class,'latvia']);
    Route::get('/lithuania', [MedalsController::class,'lithuania']);
    Route::get('/macedonia', [MedalsController::class,'macedonia']);
    Route::get('/moldova', [MedalsController::class,'moldova']);
    Route::get('/poland', [MedalsController::class,'poland']);
    Route::get('/romania', [MedalsController::class,'romania']);
    Route::get('/russia_imperial', [MedalsController::class,'russia_imperial']);
    Route::get('/russia_soviet_union', [MedalsController::class,'russia_soviet_union']);
    Route::get('/russia_russian_federation', [MedalsController::class,'russia_russian_federation']);
    Route::get('/yugoslavia', [MedalsController::class,'yugoslavia']);


    Route::get('/europe_west', [MedalsController::class,'europe_west']);
    Route::get('/andorra', [MedalsController::class,'andorra']);
    Route::get('/austria', [MedalsController::class,'austria']);
    Route::get('/belgium', [MedalsController::class,'belgium']);
    Route::get('/denmark', [MedalsController::class,'denmark']);
    Route::get('/finland', [MedalsController::class,'finland']);
    Route::get('/france', [MedalsController::class,'france']);
    Route::get('/germany_german_states_before_1918', [MedalsController::class,'germany_german_states_before_1918']);
    Route::get('/germany_1870_1918', [MedalsController::class,'germany_1870_1918']);
    Route::get('/germany_1918_1933', [MedalsController::class,'germany_1918_1933']);
    Route::get('/germany_1933_1945', [MedalsController::class,'germany_1933_1945']);
    Route::get('/germany_federal_republic_of_germany', [MedalsController::class,'germany_federal_republic_of_germany']);
    Route::get('/germany_german_democratic_republic', [MedalsController::class,'germany_german_democratic_republic']);
    Route::get('/iceland', [MedalsController::class,'iceland']);
    Route::get('/ireland', [MedalsController::class,'ireland']);
    Route::get('/italy', [MedalsController::class,'italy']);
    Route::get('/liechtenstein', [MedalsController::class,'liechtenstein']);
    Route::get('/luxembourg', [MedalsController::class,'luxembourg']);
    Route::get('/malta', [MedalsController::class,'malta']);
    Route::get('/monaco', [MedalsController::class,'monaco']);
    Route::get('/norway', [MedalsController::class,'norway']);
    Route::get('/portugal', [MedalsController::class,'portugal']);
    Route::get('/san_marino', [MedalsController::class,'san_marino']);
    Route::get('/spain', [MedalsController::class,'spain']);
    Route::get('/sweden', [MedalsController::class,'moldova']);
    Route::get('/switzerland', [MedalsController::class,'switzerland']);
    Route::get('/the_netherlands', [MedalsController::class,'the_netherlands']);
    Route::get('/the_vatican', [MedalsController::class,'the_vatican']);
    Route::get('/united_kingdom', [MedalsController::class,'united_kingdom']);


    Route::get('/international_medals', [MedalsController::class,'international_medals']);
    Route::get('/brotherhoods', [MedalsController::class,'brotherhoods']);
    Route::get('/gulf_cooperation_council', [MedalsController::class,'gulf_cooperation_council']);
    Route::get('/international_red_cross', [MedalsController::class,'international_red_cross']);
    Route::get('/other_international_bodies', [MedalsController::class,'other_international_bodies']);
    Route::get('/united_nations', [MedalsController::class,'united_nations']);


    Route::get('/oceana', [MedalsController::class,'oceana']);
    Route::get('/australia', [MedalsController::class,'australia']);
    Route::get('/fiji', [MedalsController::class,'fiji']);
    Route::get('/hawaii', [MedalsController::class,'hawaii']);
    Route::get('/kiribati', [MedalsController::class,'kiribati']);
    Route::get('/new_zealand', [MedalsController::class,'new_zealand']);
    Route::get('/papua_new_guinea', [MedalsController::class,'papua_new_guinea']);
    Route::get('/solomon_islands', [MedalsController::class,'solomon_islands']);
    Route::get('/tongo', [MedalsController::class,'tongo']);
    Route::get('/vanuatu', [MedalsController::class,'vanuatu']);
});

Route::post('/admin/delete/{id}', [AdminController::class, 'deleteUser'])->name('deleteuser');
Route::post('/database/africa/delete/{medalsid}', [MedalsController::class, 'deleteMedal'])->name('deletemedal');
Route::post('/database/addpublication/delete/{id}', [PublicationsController::class, 'deletePublication'])->name('deletepublication');
Route::post('pay', [PaymentController::class,'pay'])->name('payment');
Route::get('success', [PaymentController::class, 'success']);
Route::get('error', [PaymentController::class, 'error']);
