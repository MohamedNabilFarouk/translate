<?php

namespace App\Http\Controllers;

use App\translate;
use App\Slider;
use App\City;
use APP\Language;
use App\TranslatedFiles;
use App\Order;

use Illuminate\Http\Request;
use App\Traits\imagesTrait;
use Validator;
use App\team;
use App\Office;

class TranslateController extends Controller
{
    use imagesTrait ;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders = Slider::orderBy('id', 'desc')->get();
        $teams = team::all();
             
        // $countries = array('Afghanistan','Aland Islands','Albania','Algeria','American Samoa','Andorra','Angola','Anguilla','Antarctica','Antigua and Barbuda','Argentina','Armenia','Aruba','Australia','Austria','Azerbaijan','Bahamas','Bahrain','Bangladesh','Barbados','Belarus','Belgium','Belize','Benin','Bermuda','Bhutan','Bolivia','Bonaire, Sint Eustatius and Saba','Bosnia and Herzegovina','Botswana','Bouvet Island','Brazil','British Indian Ocean Territory','Brunei Darussalam','Bulgaria','Burkina Faso','Burundi','Cambodia','Cameroon','Canada','Cape Verde','Cayman Islands','Central African Republic','Chad','Chile','China','Christmas Island','Cocos (Keeling) Islands','Colombia','Comoros','Congo','Congo, Democratic Republic of the Congo','Cook Islands','Costa Rica','Cote D\'Ivoire','Croatia','Cuba','Curacao','Cyprus','Czech Republic','Denmark','Djibouti','Dominica','Dominican Republic','Ecuador','Egypt','El Salvador','Equatorial Guinea','Eritrea','Estonia','Ethiopia','Falkland Islands (Malvinas)','Faroe Islands','Fiji','Finland','France','French Guiana','French Polynesia','French Southern Territories','Gabon','Gambia','Georgia','Germany','Ghana','Gibraltar','Greece','Greenland','Grenada','Guadeloupe','Guam','Guatemala','Guernsey','Guinea','Guinea-Bissau','Guyana','Haiti','Heard Island and Mcdonald Islands','Holy See (Vatican City State)','Honduras','Hong Kong','Hungary','Iceland','India','Indonesia','Iran, Islamic Republic of','Iraq','Ireland','Isle of Man','Israel','Italy','Jamaica','Japan','Jersey','Jordan','Kazakhstan','Kenya','Kiribati','Korea, Democratic People\'s Republic of','Korea, Republic of','Kosovo','Kuwait','Kyrgyzstan','Lao People\'s Democratic Republic','Latvia','Lebanon','Lesotho','Liberia','Libyan Arab Jamahiriya','Liechtenstein','Lithuania','Luxembourg','Macao','Macedonia, the Former Yugoslav Republic of','Madagascar','Malawi','Malaysia','Maldives','Mali','Malta','Marshall Islands','Martinique','Mauritania','Mauritius','Mayotte','Mexico','Micronesia, Federated States of','Moldova, Republic of','Monaco','Mongolia','Montenegro','Montserrat','Morocco','Mozambique','Myanmar','Namibia','Nauru','Nepal','Netherlands','Netherlands Antilles','New Caledonia','New Zealand','Nicaragua','Niger','Nigeria','Niue','Norfolk Island','Northern Mariana Islands','Norway','Oman','Pakistan','Palau','Palestinian Territory, Occupied','Panama','Papua New Guinea','Paraguay','Peru','Philippines','Pitcairn','Poland','Portugal','Puerto Rico','Qatar','Reunion','Romania','Russian Federation','Rwanda','Saint Barthelemy','Saint Helena','Saint Kitts and Nevis','Saint Lucia','Saint Martin','Saint Pierre and Miquelon','Saint Vincent and the Grenadines','Samoa','San Marino','Sao Tome and Principe','Saudi Arabia','Senegal','Serbia','Serbia and Montenegro','Seychelles','Sierra Leone','Singapore','Sint Maarten','Slovakia','Slovenia','Solomon Islands','Somalia','South Africa','South Georgia and the South Sandwich Islands','South Sudan','Spain','Sri Lanka','Sudan','Suriname','Svalbard and Jan Mayen','Swaziland','Sweden','Switzerland','Syrian Arab Republic','Taiwan, Province of China','Tajikistan','Tanzania, United Republic of','Thailand','Timor-Leste','Togo','Tokelau','Tonga','Trinidad and Tobago','Tunisia','Turkey','Turkmenistan','Turks and Caicos Islands','Tuvalu','Uganda','Ukraine','United Arab Emirates','United Kingdom','United States','United States Minor Outlying Islands','Uruguay','Uzbekistan','Vanuatu','Venezuela','Viet Nam','Virgin Islands, British','Virgin Islands, U.s.','Wallis and Futuna','Western Sahara','Yemen','Zambia','Zimbabwe');
        $cities = City::all();  
        $lang= \App\Language::all(); 
        $doc_office= Office::where('type','0')->get();
        $translate_office = Office::where('type','1')->get();
        return view('translate',compact('cities','sliders','lang','teams','doc_office','translate_office'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
        // $data = $request->validate([
            'name'              => 'required|string|max:100',
            'beneficiary_name'=>'required|string|max:100',
            'email'              => 'required|string|email',
            'phone'        => 'required|string',
            'language'           => 'required|string',
            // 'type'           => 'required',
            'file'           =>'required|mimes:jpeg,jpg,png,pdf,docx,xlsx,csv',
            'city'       =>'required|string',
            'page_no'      =>'required',
            'copy_no'      =>'required',
             'total'          =>'numeric|required ',
            // 'delivery'      =>'integer',
        ],
        [
            'total.numeric'=>' To calculate Total price Number Of Copies and Number of Pages must be more than 0 , you have to Select City and Translation From .. To    '
        

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $data = $request->all();
        

        $file_name = $this->saveImages($request->file , 'files to translate');
        $data['file']= $file_name;

        $code = Str::random(10);
        $data['code'] = $code ;
        
        translate::create($data);
        return redirect()->back();
        }

     
    }

   public function getLangPrice($id){
   $lang= \App\Language::where('id', $id)->first();
//    dd($lang->price);
return response()->json(['data'=>$lang]);
   }

 public function getCityPrice($id){
     $city = City::where('id',$id)->first();
     return response()->json(['data'=>$city]);  
 }

 public function getOfficePrice($id){
    $office = Office::where('id',$id)->first();
    return response()->json(['data'=>$office]);  
}
 


 public function order(Request $request){
     $data= $request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required|string',
            'file_id'=>'required',
            'from_page'=>'required',
            'to_page'=>'required',
            'copy_no'=>'required',
            

     ]);
     $data['total'] = $request->total;
if(isset($request->id)){
    $translatd_verify = translate::where('id',$request->id)->first();
}else{
    $translatd_verify = TranslatedFiles::where('id',$request->file_id)->first();
}

// dd($translatd_verify);
if($translatd_verify->phone == $request->beneficiary_phone){
    if(Order::create($data)){
        return redirect()->back()->withErrors(['Order Created Sucssfully']);
    }

}else{
    return redirect()->back()->withErrors(['Faild To Create Order , "Beneficiary Phone" missmatch with file owner phone ']);
}

    
 }


//  public function search(Request $request){
//     $translate = translate::where([['code', $request->code],['beneficiary_name', $request->name]])->first();
// if(isset($translate)){
//     if($translate->translated == 1){
//     $cities = City::all();
//      $translated = TranslatedFiles::where('code', $translate->id)->first();
//       if(isset($translated)){
//         return view('translatedFiles',compact('translated','cities'));
//       }else{
//             return redirect()->back()->with('msg','No Result');
//       }
//     }else{
//         return view('tracking',compact('translate'));
//     }
      
// }else{
//     return redirect()->back()->with('msg','No Result');
// }    
//     //  dd($translated->translates->lang->extra_copy_price);


//  }


public function search(Request $request){
    $translate = translate::where([['code', $request->code],['beneficiary_name', $request->name]])->with('translated_files')->first();
    $translated = TranslatedFiles::where([['code', $request->code],['beneficiary_name', $request->name]])->first();
    if(isset($translate)){
        return view('tracking',compact('translate'));
    }else if(isset($translated)){
    $cities = City::all();
    $translate_office = Office::where('type','1')->get();

    return view('translatedFiles',compact('translated','cities','translate_office'));
    }else{
        return redirect()->back()->with('msg','No Result');
    }
}





    /**
     * Display the specified resource.
     *
     * @param  \App\translate  $translate
     * @return \Illuminate\Http\Response
     */
    public function show(translate $translate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\translate  $translate
     * @return \Illuminate\Http\Response
     */
    public function edit(translate $translate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\translate  $translate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, translate $translate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\translate  $translate
     * @return \Illuminate\Http\Response
     */
    public function destroy(translate $translate)
    {
        //
    }
}
