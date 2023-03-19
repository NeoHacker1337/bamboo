<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::find(1);

        return view('backend.admin.profile', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function uploadImage(Request $request)
    {
        // validate the image upload
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,gif|max:10240', // max 10 MB
        ]);

        // get the uploaded file and generate a unique file name
        $image = $request->file('image');
        $fileName = uniqid() . '.' . $image->getClientOriginalExtension();

        // move the uploaded file to the public storage directory
        $path = $image->storeAs('public', $fileName);

        // get the full path of the saved image
        $fullPath = storage_path('app/' . $path);

        // return a success response with the file URL and full path
        $url = Storage::url($fileName);

        $user = Admin::find(Auth::guard('admin')->user()->id);
        $user->image = 'storage/app/public/' . $fileName;
        $user->save();

        return response()->json(['msg' => 'Successfully!']);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'address' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'pin_code' => 'nullable|string|max:255',
            'calling_number' => 'nullable|string|max:255',
            'whatsapp_number' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
        ]);

        // Check if a record with the given email exists
        $record = Profile::where('id', 1)->first();

        if (!empty($record)) {

            $record->name = $request->name ? $request->name : $record->name;
            $record->email = $request->email ? $request->email : $record->email;
            $record->address = $request->address ? $request->address : $record->address;
            $record->state = $request->state ? $request->state : $record->state;
            $record->city = $request->city ? $request->city : $record->city;
            $record->pin_code = $request->pin_code ? $request->pin_code : $record->pin_code;
            $record->calling_number = $request->calling_number ? $request->calling_number : $record->calling_number;
            $record->whatsapp_number = $request->whatsapp_number ? $request->whatsapp_number : $record->whatsapp_number;
            $record->youtube = $request->youtube ? $request->youtube : $record->youtube;
            $record->twitter = $request->twitter ? $request->twitter : $record->twitter;
            $record->facebook = $request->facebook ? $request->facebook : $record->facebook;
            $record->linkedin = $request->linkedin ? $request->linkedin : $record->linkedin;
            $record->instagram = $request->instagram ? $request->instagram : $record->instagram;
            $record->save();

        } else {
            // Create new record
            $record = new Profile();
            $record->name = $validatedData['name'];
            $record->email = $validatedData['email'];
            $record->address = $validatedData['address'];
            $record->state = $validatedData['state'];
            $record->city = $validatedData['city'];
            $record->pin_code = $validatedData['pin_code'];
            $record->calling_number = $validatedData['calling_number'];
            $record->whatsapp_number = $validatedData['whatsapp_number'];
            $record->youtube = $validatedData['youtube'];
            $record->twitter = $validatedData['twitter'];
            $record->facebook = $validatedData['facebook'];
            $record->linkedin = $validatedData['linkedin'];
            $record->instagram = $validatedData['instagram'];
            $record->save();
        }

        return response()->json(['msg' => 'Successfully!']);
    }



    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
