<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

      //return User::where('type', '=', 'user')->paginate(10);
      return User::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

      $this->validate($request, [
        'name' => 'required|string|max:191',
        'email' => 'required|string|email|max:191|unique:users',
        'password' => 'required|string|min:6'
      ]);

      return User::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => Hash::make($request['password']),
        'type' => $request['type'],
        'bio' => $request['bio'],
        'photo' => $request['photo'],
      ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

      $updateByUserId = User::findOrFail($id);

      $this->validate($request, [
        'name' => 'required|string|max:191',
        'email' => 'required|string|email|max:191|unique:users,email,'.$updateByUserId->id,
        'password' => 'sometimes|min:6',
      ]);

      $request['password'] = Hash::make($request['password']);
      $updateByUserId->update($request->toArray());
      return response()->json([
        'status_code' => 200,
        'message' => 'Registration Successfull',
      ]);


    }

    public function updateProfileInfo(Request $request){

    }

    public function createdVueFillProfileForm(Request $request, $http_arg_params){

      $regExAttemptBracket = '/(forBracket){1}/i';
      $outputValueAttempt1 = preg_replace($regExAttemptBracket, "{" ,$http_arg_params);

      $regExAttemptdQuo = '/(dquo)+/i';
      $outputValueAttempt2 = preg_replace($regExAttemptdQuo, '"' ,$outputValueAttempt1);


      $regExAttemptForSlash = '/kuma+?/i';
      $outputValueAttempt3 = preg_replace($regExAttemptForSlash, '\/' ,$outputValueAttempt2);


      $regExAttemptQM = '/QM+/i';
      $jsonDataStringObject = preg_replace($regExAttemptQM, '?' ,$outputValueAttempt3);
      return $jsonDataStringObject;






    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $deleteUserById = User::findOrFail($id);
      //return ['message' => 'User Deleted'];
      $deleteUserById->delete();
    }



    public function searchReturnsForAdmin(){
      if($search = \Request::get('anyVar')){
        $usersHasManyForms = User::where(function($queryStrings) use ($search){
          $queryStrings->where('name','LIKE',"%$search%")
                ->orWhere('email','LIKE',"%$search%");
        })->paginate(20);
      }else{
        $usersHasManyForms = User::where('type', '=', 'user')->paginate(10);
      }
      return $usersHasManyForms;
    }






}
