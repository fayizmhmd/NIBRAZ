<?php

namespace App\Http\Controllers;

use App\Models\ExistingPolicy;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    
    public function viewUsers()
    {
        $users = User::all();
        $roles = Role::all();
        return view('admin.users.users', [
            'users' => $users,
            'roles' => $roles
        ]);
    }
    public function editUser($id)
    {
        $user = User::where('id', $id)->with('subscriptionHistory.plan')->first();
        $activePlan = $user->subscriptionHistory->filter(function ($subscription) {
            return $subscription->current_plan;
        }); 

        $roles = Role::all();
        $existing_policy = ExistingPolicy::where('user_id', $id)->first();
        return view('admin.users.editUser', [
            'user' => $user,
            'roles' => $roles,
            'activePlan' => $activePlan,
            'existing_policy' => $existing_policy
        ]);
    }
    public function updateUser(Request $request)
    {

        $user = User::where('id', $request->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $request->validate([
            'images' => 'image|mimes:jpeg,png,jpg,jfif,pjpeg,pjp,svg,webp|max:50',
        ]);
        if ($request->file('image')) {
            $file = $request->file('image');
            $imageName = time() . $file->getClientOriginalName();
            $file->move(public_path('/users/'), $imageName);
            @unlink(public_path($user->image));
            $user->image = 'users/' . $imageName;
        }
        $user->save();
        return redirect()->back()->with(['success' => 'Details Updated Successfully']);
    }

    public function updateRole(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        if ($request->password) {
            $user->password = \Hash::make($request->password);
        }
        if ($request->has('role')) {
            $user->roles()->sync($request->role);
        }
        $user->save();
        return redirect()->back()->with(['success' => "Role Updated Successfully"]);
    }

    public function generateCustID()
    {
        $randomNumber = mt_rand(100, 999);
        $customer_id = "FMD" .date('md').$randomNumber;
        $existingUser = User::where('customer_id', $customer_id)->exists();

        while ($existingUser) {
            $randomNumber = mt_rand(100, 999);
            $customer_id = "FMD" . $randomNumber;
            $existingUser = User::where('customer_id', $customer_id)->exists();
        }
        return $customer_id; 
    }
    
    public function addUser(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return redirect()->back()->with(['warning' => "User Email  Already Used"]);
        }

        $user = new User();
        $user->customer_id = $this->generateCustID();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->insurance_type = $request->insurance_type;
        if ($request->password) {
            $user->password = \Hash::make($request->password);
        }
        if ($request->has('role')) {
            $user->assignRole($request->role);
        }
        if ($request->file('image')) {
            $request->validate([
                'images' => '|image|mimes:jpeg,png,jpg|max:200',
            ]);
            $file = $request->file('image');
            $imageName = time() . $file->getClientOriginalName();
            $file->move(public_path('/users/'), $imageName);
            $user->image = 'users/' . $imageName;
        }
        // if(!$user->hasWallet('ko_coin')){

        // $user->getCoinWallets();
        $user->save();
        // $wallet = $user->createWallet([
        //     'name' => 'ko_coin',
        //     'slug' => 'Brandko Coin',
        // ]);
        // $wallet->deposit(0);

        // $user->ref_own_code = substr($user->name, 0, 4) . Str::random(4) . $user->id;
        // $user->save();

        return redirect()->back()->with('success', 'User Created Successfully');
    }
    public function toggleUser($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->toggleActive();
            $user->save();
            return redirect()->back()->with(['success' => 'Status Changed Successfully']);
        } else {
            return redirect()->back()->with(['error' => 'Something Went Wrong']);
        }
    }
    public function deleteUser($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->back()->with(['success' => 'User Deleted Successfully']);
        } else {
            return redirect()->back()->with(['error' => 'Something Went Wrong']);
        }
    }
}
