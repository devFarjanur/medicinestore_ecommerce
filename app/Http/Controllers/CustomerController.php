<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{







    public function CustomerIndex()
    {
        $categories = Category::with('products')->get();

        return view('layouts.pages.home', compact('categories'));
    }




    public function CustomerProduct()
    {
        $categories = Category::with('products')->get();
        $products = Product::with('category')->paginate(3);
        return view('layouts.pages.product', compact('categories', 'products'));
    }



    public function CustomerCart()
    {

        $categories = Category::with('products')->get();
        return view('layouts.pages.cart', compact('categories'));
    }



    public function CustomerCheckout()
    {

        $id = Auth::user()->id;
        $profileData = User::find($id);

        $user = Auth::user();
        $addresses = Address::where('user_id', $user->id)->get();

        $categories = Category::with('products')->get();
        return view('layouts.pages.checkout_main', compact('categories', 'profileData', 'addresses'));
    }


    // Show addresses
    public function showAddresses()
    {
        $user = Auth::user();
        $addresses = Address::where('user_id', $user->id)->get();

        return view('myaccount.addresses', compact('addresses', 'user'));
    }

    // Add a new address
    public function addAddress(Request $request)
    {
        $request->validate([

            'shipment_state' => 'required|string|max:255',
            'shipment_address' => 'required|string|max:255',


        ]);

        Address::create([
            'user_id' => Auth::id(),
            'shipment_state' => $request->shipment_state,
            'shipment_address' => $request->shipment_address,



        ]);

        return redirect()->back()->with('success', 'Address added successfully');
    }

    // Edit an existing address
    public function editAddress(Request $request, $id)
    {
        $request->validate([
            'shipment_state' => 'required|string|max:255',
            'shipment_address' => 'required|string|max:255',


        ]);

        $address = Address::findOrFail($id);
        $address->update([
            'shipment_state' => $request->shipment_state,
            'shipment_address' => $request->shipment_address,

            'billing_state' => $request->billing_state,
            'billing_address' => $request->billing_address,



        ]);

        return redirect()->back()->with('success', 'Address updated successfully');
    }

    // Delete an address
    public function deleteAddress($id)
    {
        $address = Address::findOrFail($id);
        $address->delete();

        return redirect()->back()->with('success', 'Address deleted successfully');
    }



    public function OrderStore(Request $request)
    {
        // Validate the request
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'address_id' => 'required|exists:addresses,id',
            'total_price' => 'required|numeric',
            'payment_method' => 'required|string',
            'items' => 'required|array',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.unit_price' => 'required|numeric|min:0',
        ]);

        // Log the request data for debugging
        Log::info('Order request data:', $request->all());

        try {
            // Create the order
            $order = Order::create([
                'user_id' => $request->input('user_id'),
                'address_id' => $request->input('address_id'),
                'total_price' => $request->input('total_price'),
                'payment_method' => $request->input('payment_method'),
            ]);

            // Log the created order
            Log::info('Created order:', $order->toArray());

            // Attach order items
            foreach ($request->input('items') as $item) {
                $total_price = $item['unit_price'] * $item['quantity'];
                $orderItem = OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item['product_id'],
                    'quantity' => $item['quantity'],
                    'unit_price' => $item['unit_price'],
                    'total_price' => $total_price,
                ]);

                // Log the created order item
                Log::info('Created order item:', $orderItem->toArray());
            }

            return response()->json(['success' => true, 'redirect' => route('customer.index')]);

        } catch (\Exception $e) {
            Log::error('Error creating order:', ['error' => $e->getMessage()]);
            return response()->json(['success' => false, 'message' => 'Failed to create order. Please try again.']);
        }
    }




    public function CustomerMyaccount()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $categories = Category::with('products')->get();
        return view('layouts.pages.myaccount_main', compact('categories', 'profileData'));
    }


    public function updateProfile(Request $request)
    {



        $id = Auth::user()->id;
        $data = User::find($id);
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->birthday = $request->birthday;
        $data->username = $request->username;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data->photo = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alter-type' => 'success'
        );


        return redirect()->back()->with($notification);
    }


    public function changePassword(Request $request)
    {
        // Validation rules for changing password
        $rules = [
            'email' => 'required|string|email|max:255',
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ];

        $request->validate($rules);

        // Check if current password matches
        if (!Hash::check($request->old_password, Auth::user()->password)) {
            return redirect()->back()->withErrors(['old_password' => 'The provided current password does not match your password']);
        }

        // Change user's password
        Auth::user()->update(['password' => Hash::make($request->new_password)]);

        $notification = array(
            'message' => 'Password changed successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function Customerdetials($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::with('products')->get();
        return view('layouts.pages.details_main', compact('categories', 'product'));
    }




    public function CustomerAbout()
    {
        $categories = Category::with('products')->get();
        return view('layouts.pages.about', compact('categories'));
    }


    public function CustomerContact()
    {
        $categories = Category::with('products')->get();
        return view('layouts.pages.contact_main', compact('categories'));
    }


    public function CustomerInvoice()
    {
        $categories = Category::with('products')->get();
        return view('layouts.pages.invoice_main', compact('categories'));
    }






}
