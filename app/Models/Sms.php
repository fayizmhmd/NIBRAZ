<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    use HasFactory;

    public function processSmsAction($actionType, $phone, $otp = null, $message = null)
    {
        $response = $this->msg91($actionType, $phone, $otp, $message);

        return $response;
    }

    private function msg91($actionType, $phone, $otp)
    {
        // $authkey = '361687A7X9afz9H960b60bc5P1';

        switch ($actionType) {

            case 'OTP':
                $otp = 1234;

                $this->saveOtp($phone, $otp);
                break;

            case 'VERIFY':
                $response = $this->verifyOtp($phone, $otp);
                return $response;
                break;

            case 'OD_NOTIFY':
                // Do Nothing Just Send
                break;
        }

        // $phone = '91' . $phone;
        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => 'https://api.msg91.com/api/v5/otp?template_id=61755d40ae646963ed7c91e2&mobile=' . $phone . '&authkey=361687A7X9afz9H960b60bc5P1&otp=' . $otp,
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'POST',
        //     CURLOPT_SSL_VERIFYHOST => 0,
        //     CURLOPT_SSL_VERIFYPEER => 0,
        //     CURLOPT_HTTPHEADER => array(
        //         "authkey: $authkey",
        //         'content-type: application/json',
        //     ),
        // ));

        // $response = curl_exec($curl);
        // $err = curl_error($curl);
        // curl_close($curl);

        // if ($err) {
        //     return false;
        // } else {
            return true;
        // }
    }

    private function saveOtp($phone, $otp)
    {
        $otpTable = SmsOtp::where('phone', $phone)->first();

        if ($otpTable) {
            $otpTable->otp = $otp;
            $otpTable->save();
        } else {
            $otpTable = new SmsOtp();
            $otpTable->phone = $phone;
            $otpTable->otp = $otp;
            $otpTable->save();
        }
    }

    private function verifyOtp($phone, $otp)
    {
        $otpTable = SmsOtp::where('phone', $phone)->first();

        if ($otpTable) {
            if ($otpTable->otp == $otp) {

                $response = [
                    'valid_otp' => true,
                ];
            } else {
                $response = [
                    'valid_otp' => false,
                ];
            }
        } else {
            $response = [
                'valid_otp' => false,
            ];
        }
        return $response;
    }
}
