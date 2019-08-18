<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Http\Requests;
    use App\ContactUS;
    use Validator;
    class ContactUSController extends Controller
    {
       /**
        * Show the application dashboard.
        *
        * @return \Illuminate\Http\Response
        */
       public function contactUS()
       {
           return view('contactUS');
       }
       /**
        * Show the application dashboard.
        *
        * @return \Illuminate\Http\Response
        */
       public function contactUSPost(Request $request)
       { 
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'contactnum' => 'required', 
            'message' => 'required', 
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $request->all(); 
        // $input['password'] = bcrypt($input['password']); 
        $ContactUs = ContactUS::create($input); 
        // $success['token'] =  $user->createToken('MyApp')-> accessToken; 
        // $success['name'] =  $user->name;
        return response()->json(['success'=>$success], $this-> successStatus); 
    }
    }