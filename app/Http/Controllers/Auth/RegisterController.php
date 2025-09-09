<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendOtpMail;
use App\Models\Student;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public $email;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:students'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // return User::create([
        //     'phone'     => $data['phone'],
        //     'email'    => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
        $this->email = $data['email'];

        return Student::create([
            'name' => $data['name'] ?? explode('@', $data['email'])[0],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            // Add default phone or other required fields if necessary
            'phone' => $data['phone'] ?? '0000000000',
        ]);
    }

    /**
     * Specify the guard for student
     */
    protected function guard()
    {
        return Auth::guard('student'); // use your student guard
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        // Create student
        $user = $this->create($request->all());

        // Fire the Registered event (optional, but good for listeners)
        event(new \Illuminate\Auth\Events\Registered($user));

        // Don't login the user automatically
        // $this->guard()->login($user); // REMOVE or comment out

        try {
            $otp = rand(1000, 9999); // Generate a random 4-digit OTP

            // Update the OTP in the database
            $user->otp = $otp;
            $user->save();

            $data = [
                'subject' => 'OTP Verification',
                'otp' =>  $otp,
            ];
            Mail::to($user->email)->send(new SendOtpMail($data));
            // Mail::to('me.nirjhor007@gmail.com')->send(new SendOtpMail($data));
        } catch (\Throwable $th) {
            //throw $th;
            // Handle the error, maybe log it or notify admin
            dd('Failed to send OTP email. Please try again later.', $th->getMessage());
        }

        // Redirect to OTP page
        return redirect()->route('student.otp.form')
            ->with('email', $user->email)
            ->with('student_id', $user->id);
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return \Illuminate\Http\Response
     */
    // protected function registered($request, $user)
    // {
    //     // Redirect to OTP verification page after registration
    //     return redirect()->route('student.otp.form')->with('email', $this->email);
    // }
}
