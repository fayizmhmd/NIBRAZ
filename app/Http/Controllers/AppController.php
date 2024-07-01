<?php

namespace App\Http\Controllers;

use App\Models\Sms;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use JWTAuthException;

class AppController extends Controller
{

    private function getToken($user)
    {
        $token = null;
        try {
            if (!$token = JWTAuth::fromUser($user)) {
                return response()->json([
                    'response' => 'error',
                    'message' => 'User is invalid..',
                    'token' => $token,
                ]);
            }
        } catch (JWTAuthException $e) {
            return response()->json([
                'response' => 'error',
                'message' => 'Token creation failed',
            ]);
        }
        return $token;
    }

    public function sendOtp(Request $request)
    {
        $phone = $request->phone;
        $user = User::where('phone', $phone)->first();
        if ($user) {

            $sendOtp = new Sms;
            $sendOtp->processSmsAction('OTP', $phone);

            $response = [
                'success' => true,
                'data' => "OTP SENT"
            ];
        } else {
            $response = ['success' => false, 'data' => 'NEWUSER'];
        }
        return response()->json($response);
    }

    public function verifyOtp(Request $request)
    {
        $sms = new Sms();
        $response = $sms->processSmsAction('VERIFY', $request->phone, $request->otp);

        if ($response['valid_otp'] == true) {
            $user = User::where('phone', $request->phone)->first();

            if ($user) {
                $token = self::getToken($user);
                $user->auth_token = $token;
                $user->save();


                $response = [
                    'success' => true,
                    'data' => [
                        'id' => $user->id,
                        'auth_token' => $user->auth_token,
                        'name' => $user->name,
                        'email' => $user->email,
                        'phone' => $user->phone,

                    ]
                ];
                return response()->json($response, 201);
            } else {
                $response = ['success' => false, 'data' => 'NEWUSER'];
                return response()->json($response, 201);
            }
        } else {
            $response = ['success' => false, 'data' => $response];
            return response()->json($response, 201);
        }
    }

    public function register(Request $request)
    {
        $sms = new Sms();
        $response = $sms->processSmsAction('VERIFY', $request->phone, $request->otp);

        if ($response['valid_otp'] == true) {

            $user = User::where('phone', $request->phone)->first();

            if ($user) {
                $token = self::getToken($user);
                $user->auth_token = $token;
                $user->save();

                $response = [
                    'success' => true,
                    'data' => [
                        'id' => $user->id,
                        'customer_id' => $user->customer_id,
                        'auth_token' => $user->auth_token,
                        'name' => $user->name,
                        'email' => $user->email,
                        'phone' => $user->phone,
                        'gender' => $user->gender,
                        'dob' => $user->dob,
                        'image' => $user->image,
                        'family_detials' => $user->family_detials,
                        'insurance_type' => $user->insurance_type,
                        'is_insured_other' => $user->is_insured_other,
                        'is_healthy' => $user->is_healthy,
                        'is_specific_illness' => $user->is_specific_illness,
                        'is_active' => $user->is_active,
                    ]
                ];
                return response()->json($response, 201);

            } else {
                try {
                    $request->validate([
                        'name' => ['required'],
                        'phone' => ['required'],
                        'email' => ['required'],
                        'gender' => ['required'],
                        'dob' => ['required'],
                        'insurance_type' => ['required'],
                        'password' => ['required']
                    ], [
                        'name.required' => 'The name field is required.',
                        'phone.required' => 'The phone field is required.',
                        'email.required' => 'The email field is required.',
                        'gender.required' => 'The gender field is required.',
                        'dob.required' => 'The date of birth field is required.',
                        'insurance_type.required' => 'The insurance type field is required.',
                        'password.required' => 'The password field is required.'
                    ]);
                    

                    $payload = [
                        'customer_id' => $this->generateCustID(),
                        'name' => $request->name,
                        'phone' => $request->phone,
                        'email' => $request->email,
                        'gender' => $request->gender,
                        'dob' => $request->dob,
                        'insurance_type' => $request->insurance_type,
                        'password' => Hash::make($request->password),
                    ];

                    $user = new User($payload);
                    if ($user->save()) {
                        $token = self::getToken($user);

                        if (!is_string($token)) {
                            return response()->json(['success' => false, 'data' => 'Token generation failed'], 201);
                        }

                        $user = User::where('phone', $request->phone)->first();
                        $user->family_detials = $token;
                        $user->auth_token = $token;
                        $user->family_detials = $request->family_detials;
                        $user->is_healthy = $request->is_healthy;
                        $user->is_specific_illness = $request->is_specific_illness;
                        $user->is_active = $request->is_active;
                        $user->save();
                        $user->assignRole('Customer');


                        $response = [
                            'success' => true,
                            'data' => [
                                'id' => $user->id,
                                'customer_id' => $user->customer_id,
                                'auth_token' => $user->auth_token,
                                'name' => $user->name,
                                'email' => $user->email,
                                'phone' => $user->phone,
                                'gender' => $user->gender,
                                'dob' => $user->dob,
                                'image' => $user->image,
                                'family_detials' => $user->family_detials,
                                'insurance_type' => $user->insurance_type,
                                'is_insured_other' => $user->is_insured_other,
                                'is_healthy' => $user->is_healthy,
                                'is_specific_illness' => $user->is_specific_illness,
                                'is_active' => $user->is_active,
                            ]
                        ];
                        return response()->json($response, 201);
                    } else {
                        $response = ['success' => false, 'data' => 'Couldnt register user'];
                    }
                } catch (\Throwable $e) {
                    $response = ['success' => false, 'data' => $e];
                    return response()->json($response, 201);
                }

                return response()->json($response, 201);
            }
        } else {
            $response = ['success' => false, 'data' => 'DONOTMATCH'];
            return response()->json($response, 201);
        }
    }

    public function generateCustID()
    {
        $randomNumber = mt_rand(100, 999);
        $customer_id = "FMD" . date('md') . $randomNumber;
        $existingUser = User::where('customer_id', $customer_id)->exists();

        while ($existingUser) {
            $randomNumber = mt_rand(100, 999);
            $customer_id = "FMD" . $randomNumber;
            $existingUser = User::where('customer_id', $customer_id)->exists();
        }
        return $customer_id;
    }


    public function saveDeviceToken(Request $request)
    {
        $user = auth()->user();
        if ($user) {
            $user->device_token = $request->device_token;
            $user->timezone = $request->timezone;
            $user->save();
        }

        return response()->json('Device token saved successfully', 200);
    }
}
