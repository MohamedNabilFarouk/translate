<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Guzzle\Http\Client;
use GuzzleHttp\Psr7;
use Session;
use Flash;
use Illuminate\Support\Str;

use App\Traits\imagesTrait;
use Validator;
use App\team;
use App\Office;
use App\translate;
use App\Order;



class PaymentController extends Controller
{
    use imagesTrait ;
public function orderCreation(Request $request){

   
    $body= [
        "username"=> "mohamed_nabil_farouk",
        "password"=> "Billy123456789",
        'api_key'=>'ZXlKaGJHY2lPaUpJVXpVeE1pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SnVZVzFsSWpvaWFXNXBkR2xoYkNJc0ltTnNZWE56SWpvaVRXVnlZMmhoYm5RaUxDSndjbTltYVd4bFgzQnJJam94T1RJNU1YMC53djN0UFZEbkxYNTRhLVkwSE8tZDhyMmZJdHBoa1laYXdDOWUtZUZrVWVsQmxRSGRhalBIcDZ2cXp1am9QYTZJeW9kMGlaWjFmT2s0Znl3UEY3Uk9HUQ=='
    ];
    $client = new \GuzzleHttp\Client();

    
    try {
        $response = $client->request('post', 'https://accept.paymobsolutions.com/api/auth/tokens', [
            'body' =>json_encode($body),
            'headers' => ['Content-type' => 'application/json']
        ]);
    
   // dd($response->getBody());
   $authResult= json_decode( $response->getBody());
   //dd($authResult->token);
  //echo $authResult->token;

    } catch (HttpException $ex) {
      echo $ex;
    }


 //exit();




     //$request = new Request();
   

    $body= [
        "delivery_needed"=> "false",
        
        "merchant_order_id"=>rand(1,3000000),
        
        
        "items"=> [],
        "merchant_id"=> "19291",
        "amount_cents"=> "25000",
        "currency"=> "EGP",
       
    ];
    
    try {
        $response = $client->request('post', 'https://accept.paymobsolutions.com/api/ecommerce/orders', [
            'body' =>json_encode($body),
            'headers' => ['Content-type' => 'application/json',
            'Authorization'      => 'Bearer '.$authResult->token,
                    ],
        ]);
    $creationResult= json_decode( $response->getBody());
    // dd($creationResult->id);
    //  echo $response->getBody();
    } catch (HttpException $ex) {
      echo $ex;
    }

if($request->payment_type == 1){

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
                    $data= new translate();
                    $data->name = $request->name;
                    $data->beneficiary_name = $request->beneficiary_name;

                    $data->phone = $request->phone;

                    $data->email = $request->email;

                    $data->language = $request->language;

                   

                    $data->city = $request->city;

                    $data->page_no = $request->page_no;
                    $data->copy_no = $request->copy_no;
                    $data->total = $request->total;
                    $data->note = $request->note;

                    $data->type = $request->type;
                    $data->deliver_address = $request->deliver_address;
                    $data->deliver_phone = $request->deliver_phone;
                    $data->pickup_office = $request->pickup_office;
                    $data->attach_code = $request->attach_code;
                    
                    $code = Str::random(10);
                    $data->code = $code ;


                        
                        




                    // $data = $request->all();
                    
                $file_name = $this->saveImages($request->file , 'files to translate');
                $data->file= $file_name;
                $data->save();
                Session::put('translate_id', $data->id);
                Session::put('code', $code);
                Session::put('payment_type', 1);


                }

                $body =[
            "amount_cents"=>70*100,
            "currency"=> "EGP",
             "card_integration_id"=>"37012",
            //"integration_id"=>"37012",
            "expiration"=> 3600, 
             "order_id"=> $creationResult->id,
            //   "translate_id"=> $data->id,

            
            "billing_data"=>[
                "apartment"=> "11", 
                "email"=> $data['email'], 
                "floor"=> "6", 
                "first_name"=> $data['name'], 
                "street"=> "113", 
                "building"=> "36", 
                "phone_number"=> $data['phone'], 
                "shipping_method"=> "PKG", 
                "postal_code"=> "01898", 
                "city"=> "cairo", 
                 "country"=> "Egypt", 
                 "last_name"=> "Nicolas", 
                //  "DOCTOR"=> $doctor->name,
                 "state"=> "Utah"
                 
            ],
          
        ];
        // payment type 2 reorder
    }else{

        $data= $request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required',
            // 'address'=>'required|string',
            'file_id'=>'required',
            'from_page'=>'required',
            'to_page'=>'required',
            'copy_no'=>'required',
            

     ]);
     $data['total'] = $request->total;
     $data['type'] = $request->type;
     $data['deliver_address'] = $request->deliver_address;
     $data['deliver_phone'] = $request->deliver_phone;
     $data['pickup_office'] = $request->pickup_office;
     $data['attach_code'] = $request->attach_code;

if(isset($request->id)){
    $translatd_verify = translate::where('id',$request->id)->first();
}else{
    $translatd_verify = TranslatedFiles::where('id',$request->file_id)->first();
}
if($translatd_verify->phone == $request->beneficiary_phone){
   $order= Order::create($data);
  
    Session::put('payment_type', 2);
    Session::put('orderId', $order->id);
    // dd(Session::get('orderId'));
    $body =[
        "amount_cents"=>70*100,
        "currency"=> "EGP",
         "card_integration_id"=>"37012",
        //"integration_id"=>"37012",
        "expiration"=> 3600, 
         "order_id"=> $creationResult->id,
        //   "translate_id"=> $data->id,

        
        "billing_data"=>[
            "apartment"=> "11", 
            "email"=> $data['email'], 
            "floor"=> "6", 
            "first_name"=> $data['name'], 
            "street"=> "113", 
            "building"=> "36", 
            "phone_number"=> $data['phone'], 
            "shipping_method"=> "PKG", 
            "postal_code"=> "01898", 
            "city"=> "cairo", 
             "country"=> "Egypt", 
             "last_name"=> "Nicolas", 
            //  "DOCTOR"=> $doctor->name,
             "state"=> "Utah"
             
        ],
      
    ];

}else{
    return redirect()->back()->withErrors(['Faild To Create Order , "Beneficiary Phone" missmatch with file owner phone ']);
}



    }     

    //   $data_id= translate::create($data);
    // ;
//dd($doctor->name);
        
  
        
            
            try {
                $response = $client->request('post', 'https://accept.paymobsolutions.com/api/acceptance/payment_keys', [
                    'body' =>json_encode($body),
                    'headers' => ['Content-type' => 'application/json',
                    'Authorization'      => 'Bearer '.$authResult->token,
                            ],
                ]);
                $paymentResult= json_decode( $response->getBody());
                // echo $creationResult->id;
                // dd( $paymentResult->token);
            // dd( json_decode($response->getBody()));
            } catch (HttpException $ex) {
            echo $ex;
            }

            

try {
 
                // $url = "https://accept.paymobsolutions.com/api/acceptance/iframes/56364/pay?payment_key={$paymentResult->token}";
                $url = "https://accept.paymob.com/api/acceptance/iframes/56389?payment_token={$paymentResult->token}";


    
  echo " <iframe src='$url' width='100%', height='100%'></iframe>";
} catch (HttpException $ex) {
  echo $ex;
}


$bookingRequest = collect($request);
// $bookingRequest->put('translate_id', $data->id);
// dd($bookingRequest);
// Session::put('book', $bookingRequest);









}


public function getsuccess(Request $request){

    $message="";    
    if((($request->success) != null)){
        if(($request->success) == 'true'){
       
            if(Session::get('payment_type')== 1){
                $translate = translate::find(Session::get('translate_id'));
                $translate->is_paid = 1;
                $translate->save();
                $message = 'Booking Paid Successfully  and save this code for tracking <br> '.Session::get('code');
                return view('paymentsuccess')->with(['message'=>$message]);
            }else{
                // dd(Session::get('orderId'));
                $created_order = Order::find(Session::get('orderId'));
                $created_order->is_paid = 1;
                $created_order->save();
                $message = 'Order Paid Successfully';
                return view('paymentsuccess')->with(['message'=>$message]);
            }
            }else{
                $message = 'Payment Failed';
                return view('paymentfailed')->with(['message'=>$message]);
            }
             
            

        
    }
}

}

// ?is_void=false&has_parent_transaction=false&is_refund=false&currency=EGP&source_data.pan=8769&integration_id=37012&source_data.sub_type=Visa&order=6221306&hmac=2fc9df9a2c80f6cca0ffc39e87047be957ca36debb853cd5e2b87076c3479f44744b6a6bdf3dcdceaa77fb62041da85f8bc2a914c9e4f205483676ac2f9b7221&refunded_amount_cents=0&error_occured=false&captured_amount=0&source_data.type=card&profile_id=19291&is_3d_secure=true&pending=false&txn_response_code=APPROVED&created_at=2020-09-24T12%3A58%3A39.538652&id=3762811&is_refunded=false&is_capture=false&is_standalone_payment=true&is_auth=false&success=true&merchant_order_id=1177008&is_voided=false&data.message=Approved&amount_cents=25000&acq_response_code=00&owner=24521