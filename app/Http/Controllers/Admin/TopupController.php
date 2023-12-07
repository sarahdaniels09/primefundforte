<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Tp_Transaction;
use App\Models\User;
use App\Traits\PingServer;
use Illuminate\Http\Request;


class TopupController extends Controller
{
    
    
    /*
    use PingServer;
    
    public function topup(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $user_bal = $user->account_bal;
        $user_bonus = $user->bonus;
        $user_roi = $user->roi;
        $user_Ref = $user->ref_bonus;


        $response = $this->callServer('typesystem', '/top-up', [
            'topUpType' => $request->t_type,
            'userBalance' => $user_bal,
            'userRoi' => $user_roi,
            'userRef' => $user_Ref,
            'userBonus' => $user_bonus,
            'type' => $request->type,
            'amount' => $request->amount,
        ]);


        if ($response->failed()) {
            return redirect()->back()->with('message', $response['message']);
        }

        $formatResponse = json_decode($response);

        if ($formatResponse->data->whatType == "Bn2r5u8x/A?D(G+KbPeShVkYp3s6v9yonus") {
            User::where('id', $request['user_id'])
                ->update([
                    'bonus' => $formatResponse->data->bonus,
                    'account_bal' => $formatResponse->data->accountBalance,
                ]);
        } elseif ($formatResponse->data->whatType == "8y/A?D(G+KbPeSmYq3t6w9zC&E)H@Mc") {
            User::where('id', $request->user_id)
                ->update([
                    'roi' => $formatResponse->data->profit,
                    'account_bal' =>  $formatResponse->data->accountBalance,
                ]);
        } elseif ($formatResponse->data->whatType == "H+MbQeThWmZq3t6w9zC&F)J@NcRfUjX") {
            User::where('id', $request->user_id)
                ->update([
                    'ref_bonus' => $formatResponse->data->refBonus,
                    'account_bal' =>  $formatResponse->data->accountBalance,
                ]);
        } elseif ($formatResponse->data->whatType == "A?D(G+KbPeShVkYp3s6v9yB&E)H@Mc") {
            User::where('id', $request->user_id)
                ->update([
                    'account_bal' =>  $formatResponse->data->accountBalance,
                ]);
        } elseif ($formatResponse->data->whatType == "4u7x!A%C*F-JaNdRgUkXp2s5v8y/B?E(" and $formatResponse->data->truth) {

            $dp = new Deposit();
            $dp->amount = $request['amount'];
            $dp->payment_mode = 'Express Deposit';
            $dp->status = 'Processed';
            $dp->plan = $request['user_pln'];
            $dp->user = $request['user_id'];
            $dp->save();

            
            $newBalance = $user->account_bal;
            
            User::where('id', $request['user_id'])
                ->update([
                    'account_bal' =>  $formatResponse->data->accountBalance,
                ]);
        }

        //add history
        Tp_Transaction::create([
            'user' => $request->user_id,
            'plan' => $formatResponse->data->type,
            'amount' => $request->amount,
            'type' => $request->type,
        ]);


        return redirect()->back()->with('success', 'Successful!');
    }
    */
    
    
       public function topup(Request $request){

        $user = User::where('id', $request->user_id)->first();
        $userdpo = Deposit::where('user', $request['user_id'])->first();

        $user_bal=$user->account_bal;
        $user_bonus=$user->bonus;
        $user_roi=$user->roi;
        $user_Ref=$user->ref_bonus;
        $user_deposit = $userdpo->amount;
  
        if($request['t_type']=="Credit") {
          if ($request['type']=="Bonus") {
            User::where('id', $request['user_id'])
              ->update([
              'bonus'=> $user_bonus + $request['amount'],
              'account_bal'=> $user_bal + $request->amount,
              ]);
          }elseif ($request['type']=="Profit") {
            User::where('id', $request->user_id)
              ->update([
                'roi'=> $user_roi + $request->amount,
                'account_bal'=> $user_bal + $request->amount,
              ]);
          }elseif($request['type']=="Ref_Bonus"){
            User::where('id', $request->user_id)
              ->update([
                'ref_bonus'=> $user_Ref + $request->amount,
                'account_bal'=> $user_bal + $request->amount,
              ]);
          }elseif ($request['type']=="Deposit") {
            $dp=new Deposit();
            $dp->amount= $request['amount'];
            $dp->payment_mode= 'Express Deposit';
            $dp->status= 'Processed';
            $dp->plan= $request['user_pln'];
            $dp->user= $request['user_id'];
            $dp->save();

            User::where('id', $request['user_id'])
              ->update([
                'account_bal'=> $user_bal + $request->amount,
              ]);
              
          }elseif ($request['type']=="balance"){
              User::where('id', $request['user_id'])
              ->update([
                'account_bal'=> $user_bal + $request->amount,
              ]);
          }
          
          //add history
         Tp_Transaction::create([
        'user' => $request->user_id,
        'plan' => "Credit",
         'amount'=>$request->amount,
         'type'=>$request->type,
        ]);
        
        }elseif($request['t_type']=="Debit") {
          if ($request['type']=="Bonus") {
            User::where('id', $request['user_id'])
              ->update([
              'bonus'=> $user_bonus - $request['amount'],
              'account_bal'=> $user_bal - $request->amount,
              ]);
          }elseif ($request['type']=="Profit") {
              User::where('id', $request->user_id)
                ->update([
                  'roi'=> $user_roi - $request->amount,
                  'account_bal'=> $user_bal - $request->amount,
                ]);
            }elseif($request['type']=="Ref_Bonus"){
              User::where('id', $request->user_id)
                ->update([
                  'Ref_Bonus'=> $user_Ref - $request->amount,
                  'account_bal'=> $user_bal - $request->amount,
                ]);
            }
            
             //add history
         Tp_Transaction::create([
        'user' => $request->user_id,
        'plan' => "Credit reversal",
         'amount'=>$request->amount,
         'type'=>$request->type,
        ]);
        
        }
            return redirect()->back()->with('success', 'Action Successful!');
      }


}