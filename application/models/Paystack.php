<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paystack extends CI_Model
{

    function __construct()
    {

    //     // parent::__construct();
        $this->load->helper('url');

    }


    private function getPaymentInfo($ref) {
        $result = array();
        $url = 'https://api.paystack.co/transaction/verify/'.$ref;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer '.PAYSTACK_SECRET_KEY]
        );
        $request = curl_exec($ch);
        curl_close($ch);
        //
        $result = json_decode($request, true);
        //
        return $result['data'];

    }

    public function verify_payment($ref) {
        $result = array();
        $url = 'https://api.paystack.co/transaction/verify/'.$ref;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer '.PAYSTACK_SECRET_KEY]
        );
        $request = curl_exec($ch);
        curl_close($ch);
        //
        if ($request) {
            $result = json_decode($request, true);
            // print_r($result);
            if($result){
                if($result['data']){
                    //something came in
                    if($result['data']['status'] == 'success'){

                        //echo "Transaction was successful";
                        header("Location: ".base_url().'paystack/success/'.$ref);

                    }else{
                        // the transaction was not successful, do not deliver value'
                        // print_r($result);  //uncomment this line to inspect the result, to check why it failed.
                        header("Location: ".base_url().'paystack/fail/'.$ref);

                    }
                }
                else{

                    //echo $result['message'];
                    header("Location: ".base_url().'paystack/fail/'.$ref);
                }

            }else{
                //print_r($result);
                //die("Something went wrong while trying to convert the request variable to json. Uncomment the print_r command to see what is in the result variable.");
                header("Location: ".base_url().'paystack/fail/'.$ref);
            }
        }else{
            //var_dump($request);
            //die("Something went wrong while executing curl. Uncomment the var_dump line above this line to see what the issue is. Please check your CURL command to make sure everything is ok");
            header("Location: ".base_url().'paystack/fail/'.$ref);
        }

    }


    public function paystack_standard($make_payment, $amount_pay) {
        //
        // $pay = $this->input->post('pay');
            // if(isset($make_payment)) {
                $result = array();
                $amount = ($amount_pay) * 100;
                $ref = rand(1000000, 9999999999);
                $callback_url = base_url().'paystackverify_payment/'.$ref;
                $postdata =  array('email' => 'customer@email.com', 'amount' => $amount,"reference" => $ref, "callback_url" => $callback_url);
                //
                $url = "https://api.paystack.co/transaction/initialize";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL,$url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($postdata));  //Post Fields
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                //
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                $headers = [
                    'Authorization: Bearer '.PAYSTACK_SECRET_KEY,
                    'Content-Type: application/json',
                ];
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                $request = curl_exec ($ch);
                curl_close ($ch);
                //
                if ($request) {
                    $result = json_decode($request, true);
                }

                $redir = $result['data']['authorization_url'];
                 header("Location: ".$redir);


            // }
        //
        $data = array();
        $data['title'] = "Paystack Standard Demo";
        //
        $this->load->view('admissions/applicationpaymentform', $data);
    }


    public function paystack_standardm($amount, $user_email){
        $curl = curl_init();

        $email = $user_email;
        $amount = $amount * 100;  //the amount in kobo. This value is actually NGN 300
        $ref = rand(1000000, 9999999999);
        $callback_url = base_url().'admissions/payment_verify/'.$ref;


        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt_array($curl, array(
         CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode([
        'amount'=>$amount,
        'email'=>$email,
        'reference'=>$ref,
        'callback_url'=>$callback_url
        ]),
    CURLOPT_HTTPHEADER => [
    "authorization: Bearer ".PAYSTACK_SECRET_KEY,
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
  // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response, true);

if(!$tranx->status){
  // there was an error from the API
  print_r('API returned error: ' . $tranx['message']);
}

// comment out this line if you want to redirect the user to the payment page
print_r($tranx);


// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
   header('Location: ' . $tranx['data']['authorization_url']);
 }


    public function paystack_inline() {
        $data = array();
        $data['title'] = "Paystack InLine Demo";
        //
        $this->load->view('paystack_inline', $data);
    }

    public function success($ref) {
        $data = array();
        $info = $this->getPaymentInfo($ref);
         //
        $data['title'] = "Paystack InLine Demo";
        $data['amount'] = $info['amount']/100;
        //
        $this->load->view('success', $data);
    }

    public function fail() {

    }

}
?>