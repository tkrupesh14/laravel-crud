<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function index(){
        $url = ('/customer');
        $title = "Create Customer";
        $data = compact('url', 'title');
        return view('customer-add')->with($data);
    }

    public function store(Request $request){
        
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required | email',
                'address'=>'required',
                'password'=>'required'

            ]

        );
        echo"<pre>";
        print_r($request->all());

        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->country = $request['country'];
        $customer->city = $request['city'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();
        return redirect('/customer/view');

    }

    public function redirect(){
        return redirect('/customer/view');
    }

    public function view(){
        $customers  = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }

    public function delete($id){
       $customer = Customer::find($id);
       if(!is_null($customer)){
        $customer->delete();
       }
       return redirect('customer/view');
    }
    public function delete_redirect(){
        return redirect('/customer/view');
    }
    public function edit_redirect(){
        return redirect('/customer/view');
    }
    public function update($id){
        $customer = Customer::find($id);
        if(is_null($customer)){
                return redirect('/customer/view');
            }else{
                $url = url('customer/edit/')."/".$id;
                $title = "Update Customer";
                $data = compact('customer', 'url', 'title');
                return view('customer-add')->with($data);
            }
    }
    public function edit($id, Request $request){
        $customer  = Customer::find($id);
        
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->country = $request['country'];
        $customer->city = $request['city'];
        $customer->dob = $request['dob'];
        $customer->save();
        return redirect('customer');
    }

   
}
