<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class mainController extends Controller
{
    //untuk ke page signup
    public function signup_page(){
        return view('signup');
    }

    //untuk ke page login
    public function loginpage(){
        return view('login');
    }

    //untuk ke page home user
    public function home_user(){
        return view('home_user');
    }

    //untuk ke page home admin
    public function home_admin(){
        return view('home_admin');
    }

    //validasi untuk login
    public function login(Request $request){


        $input = $request->all();

        $this -> validate($request, [

            'email' => 'required|email',
            'password' => 'required'

        ]);

        if(Auth::attempt(array('email' => $input['email'], 'password' => $input['password']))){
            if(Auth::user()->role_id == 2){

                return redirect('home_admin')->with('sukses', 'Login Berhasil');

            }else{
                return redirect('home_user')->with('sukses', 'login berhasil');
            }

            }
            else{

                return redirect('login')->with('error', 'credential is wrong');
            }


    }

    //untuk log out
    public function logout(){
        Auth::logout();
        return redirect('temporary_page')->with('sukses', 'Logout Success!');
    }

    //mengarah ke page temporary
    public function temporary_page(){
        return view('temporary_page');
    }

    //validasi untuk register
    public function store(Request $request){

        $validate = $request->validate([

        'first_name' => 'required|max:25|string|alpha',
        'middle_name' => 'nullable|max:25|string|alpha',
        'last_name' => 'required|max:25|string|alpha',
        'gender_id' => 'required',
        'email' =>  'required|email:dns|unique:users|string',
        'role_id' => 'required',
        'password' => 'required|min:8|regex:/^.(?=.*[0-9]).*$/',
        'display_picture_link' => 'required|image',

        ]);

        $validate['password'] = bcrypt($validate['password']);

        if($request->file('display_picture_link')){
            $validate['display_picture_link']=$request->file('display_picture_link')->store('display_picture_link');
        }

        User::create($validate);

        return redirect('/');

        }

        //memperlihatkan list ebook di homepage
        public function show_ebook(){

            $data = Ebook::simplePaginate(10);

            return view('home_user',['data'=>$data]);

            return view('home_admin',['data'=>$data]);

        }

        //memperlihatkan detail dari masing2 ebook
        public function ebook_detail($id){

            if(Ebook::where('id', $id)->exists()){
                $data = Ebook::where('id', $id)->first();
                return view('ebook_detail',['data'=>$data]);
            }

        }

        //validasi untuk rent buku
        public function rent_book($id)
        {

            $ebook = Ebook::where('id', '=', $id)->first();

            $cart = Order::create([
                'user_id' => Auth::user()->id,
                'ebook_id' => $ebook['id'],
                'order_date' => date("Y/m/d"),

            ]);

            return redirect('cart');

        }

        //untuk ke page cart
        public function cart(){

            $cart = Order::join('ebooks','ebooks.id','=','orders.ebook_id')->where('orders.user_id','=',Auth::user()->id)->get(['orders.id', 'orders.ebook_id', 'orders.user_id', 'ebooks.title']);

            return view('cart', compact('cart'));
        }

        //untuk delete transaksi
        public function delete_rent($id){

            $delete_rents = Order::where('id', $id)->first();

            $delete_rents->delete();

            return redirect('temporary_page')->with('sukses','Transaksi berhasil di delete!');
        }

        //untuk submit transaksi
        public function submit(){

            Order::where('user_id', Auth::user()->user_id)->delete();
            return redirect('temporary_page')->with('sukses','Success!');
        }

        //validasi untuk update profile
        public function update_profile(Request $request){

            $data = $request->validate([

                'first_name' => 'required|max:25|string|alpha',
                'middle_name' => 'nullable|max:25|string|alpha',
                'last_name' => 'required|max:25|string|alpha',
                'gender_id' => 'required',
                'email' =>  'required|email:dns|unique:users',
                'role_id' => 'required',
                'password' => 'required|min:8|regex:/^.(?=.*[0-9]).*$/',
                'display_picture_link' => 'required|image',

            ]);

            $data = User::find($request->id);
            $data ->first_name = $request->first_name;
            $data ->middle_name = $request->middle_name;
            $data ->last_name = $request->last_name;
            $data ->gender_id = $request->gender_id;
            $data ->email = $request->email;
            $data ->role_id = $request->role_id;
            $data ->password = Hash::make($request->password);
            $data ->display_picture_link = $request->display_picture_link;
            $data ->save();

            if($request->file('display_picture_link')){

                if($request->oldImage){
                    Storage::delete($request->oldImage);
                }
                $validate['display_picture_link']=$request->file('display_picture_link')->store('display_picture_link');

            }

            return redirect('temporary_page')->with('sukses', 'Saved!');

        }

        //memperlihatkan data lama pas update
        public function old_data($id){
            $data = User::find($id);
            return view('profile',['data'=>$data]);
        }

        //untuk ke account maintenance
        public function acc_mt(){

            $data = User::simplePaginate(10);

            return view('acc_maintain',['data'=>$data]);

        }

        //untuk validasi update role
        public function update_data(Request $request){

            $data = $request->validate([
                'role_id' => 'required',
            ]);

            $data = User::find($request->id);
            $data ->role_id = $request->role_id;
            $data ->save();

            return redirect('temporary_page')->with('sukses', 'Saved!');

        }

        //untuk ke page update role
        public function update_role($id){

            $data = User::find($id);
            return view('update_role',['data'=>$data]);
        }

        //untuk delete user
        public function delete_user($id){

            $delete_user = User::where('id', $id)->first();

            $delete_user->delete();

            return redirect('temporary_page')->with('sukses','User berhasil di delete!');
}
}

