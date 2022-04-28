<?php

namespace App\Http\Controllers;

use App\Models\Account;
// use Facade\FlareClient\View;
use App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    
    function registerView()
    {
        return view('auth/register');
    }
    
    function loginView()
    {
        return view('auth/login');
    }

    function addAccount(Request $request)
    {
        $request -> validate([
            'firstName'         =>  'required',
            'middleName'        =>  'nullable',
            'lastName'          =>  'required',
            'dateOfBirth'       =>  'required|date_format:Y-m-d|before:today|nullable',
            'age'               =>  'required|numeric|min:18',
            'gender'            =>  'required',
            'email'             =>  'required|unique:accounts',
            'password'          =>  'required|same:confirmPassword|min:5',
            'confirmPassword'   =>  'required|same:password|min:5',
            'municipalityCity'  =>  'required',
            'province'          =>  'required',
            'country'           =>  'required',
            'zipCode'           =>  'required'

            
            // 'password' => ['required','confirmed']
            // 'userLevel' => 'nullable',
            // 'activeStatus' => 'nullable'
        ]);

        $account = new Account;
        $account->firstName         =$request->firstName;
        $account->middleName        =$request->middleName;
        $account->lastName          =$request->lastName;
        $account->dateOfBirth       =$request->dateOfBirth;
        $account->age               =$request->age;
        $account->gender            =$request->gender;
        $account->email             =$request->email;
        $account->password          =Hash::make($request->confirmPassword);
        $account->houseUnitNo       =$request->houseUnitNo;
        $account->floor             =$request->floor;
        $account->BuildingName      =$request->buildingName;
        $account->street            =$request->street;
        $account->subdivision       =$request->subdivision;
        $account->barangay          =$request->barangay;
        $account->municipalityCity  =$request->municipalityCity;
        $account->province          =$request->province;
        $account->country           =$request->country;
        $account->zipCode           =$request->zipCode;
        // $account->userLevel         =$request->userLevel;
        // $account->activeStatus      =$request->activeStatus;
        $account->save();

        return redirect('/login');
    }
    
    function loginAccount(Request $request)
    {
        // $request ->validate([
        //     'email'     => 'required|email',
        //     'password'  => 'required'
        // ]);

        $request ->validate([
            'email'     => 'required|email',
            'password'  => 'required|min:5'
        ]);

        $accountInfo = Account::where('email','=',$request->email)->first();

        if(!$accountInfo)
        {
            return back()->with('fail','We do not recognize your email');
        }
        else{
                //Check password
                if(Hash::check($request->password, $accountInfo->password)){
                    $request->session()->put('LoggedUser', $accountInfo->id);
                    return redirect('/home');
                    // return $request->input();
                }else{
                    return back()->with('fail', 'Incorrect Password');
                }
            }

        // $userInfo = Admin::where('email','=',$request->email)->first();
        
        // if(!$userInfo){
        //     return back()->with('fail','We do not recognize your emal');
        // }else{
        //     //Check password
        //     if(Hash::check($request->password, $userInfo->password)){
        //         $request->session()->put('LoggedUser', $userInfo->id);
        //         return redirect('/admin/dashboard');
        //         // return $request->input();
        //     }else{
        //         return back()->with('fail', 'Incorrect Password');
        //     }
        // }
    }

    function home()
    {
        $data = ['LoggedUserInfo'=>Account::where('id','=',session('LoggedUser'))->first()];
        return view('welcome',$data);
    }

    function logoutAccount()
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }
}
