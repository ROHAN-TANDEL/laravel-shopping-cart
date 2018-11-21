<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use App\User;
use Stripe\Error\Card;
use Cartalyst\Stripe\Stripe;
class AddMoneyController extends Controller
{
 public function payWithStripe()
 {
 return view('paywithstripe');
 }
public function postPaymentWithStripe(Request $request)
 {
 $validator = Validator::make($request->all(), [
 'card_no' => 'required',
 'ccExpiryMonth' => 'required',
 'ccExpiryYear' => 'required',
 'cvvNumber' => 'required',
 //'amount' => 'required',
 ]);
 $input = $request->all();
 if ($validator->passes()) { 
 $input = array_except($input,array('_token'));
 $stripe = Stripe::make('sk_test_PVXtzkhKGE6eV0iuxTqgh4iZ');
 try {
 $token = $stripe->tokens()->create([
 'card' => [
 'number' => $request->get('card_no'),
 'exp_month' => $request->get('ccExpiryMonth'),
 'exp_year' => $request->get('ccExpiryYear'),
 'cvc' => $request->get('cvvNumber'),
 ],
 ]);
 // $token = $stripe->tokens()->create([
 // 'card' => [
 // 'number' => '4242424242424242',
 // 'exp_month' => 10,
 // 'cvc' => 314,
 // 'exp_year' => 2020,
 // ],
 // ]);
if (!isset($token['id'])) {
 return redirect()->route('addmoney.paywithstripe');
 }
 $charge = $stripe->charges()->create([
 'card' => $token['id'],
 'currency' => 'USD',
 'amount' => 10.49,
 'description' => 'Add in wallet',
 ]);
 
 if($charge['status'] == 'succeeded') {
 /**
 * Write Here Your Database insert logic.
 */
echo "payment successful";
 echo "<pre>";
 print_r($charge);exit();
 return redirect()->route('addmoney.paywithstripe');
 } else {
 \Session::put('error','Money not add in wallet!!');
 return redirect()->route('addmoney.paywithstripe');
 }
 } catch (Exception $e) {
 \Session::put('error',$e->getMessage());
 return redirect()->route('addmoney.paywithstripe');
 } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
 \Session::put('error',$e->getMessage());
 return redirect()->route('addmoney.paywithstripe');
 } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
 \Session::put('error',$e->getMessage());
 return redirect()->route('addmoney.paywithstripe');
 }
 }
 }
}