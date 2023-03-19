<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.admin.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'headline' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $slider = new Slider();
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        $slider->headline = $request->input('headline');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/sliders');
            $image->move($destinationPath, $filename);
            $path = 'images/sliders/' . $filename;
            $slider->image = $path;
        }

        $slider->save();
        return response()->json(['success' => true, 'message' => 'Slider image has been uploaded successfully.']);
    }


    /**
     * Display the specified resource.
     */
     
    public function  getSliders()
    {
        if (isset($_GET['search']['value'])) {
            $search = $_GET['search']['value'];
        } else {
            $search = '';
        }
        if (isset($_GET['length'])) {
            $limit = $_GET['length'];
        } else {
            $limit = 10;
        }

        if (isset($_GET['start'])) {
            $ofset = $_GET['start'];
        } else {
            $ofset = 0;
        }

        $orderType = $_GET['order'][0]['dir'];
        $nameOrder = $_GET['columns'][$_GET['order'][0]['column']]['name'];
 
        $order = Slider::get();
        
        $total  =  $order->count();
  
        $i = 1 + $ofset;
        $data = [];


        foreach ($order as $cate) {
            $btndelete  =  '<a href="#" class="btn btn-danger btn-sm pt-1 deleteClass" data-slider-id="'.$cate->id.'"><i class="fa fa-trash" aria-hidden="true"></i></a>';

            $data[] = array(
                $i++,
                $cate->title,
                $cate->headline,
                $cate->description,
                '<img src="../public/'.$cate->image.'" width="200" height="200">',
                date('d-m-Y, h:i:s A', strtotime($cate->created_at)),
                $btndelete
            );
        }
        $records['recordsTotal'] = $total;
        $records['recordsFiltered'] =  $total;
        $records['data'] = $data;


        echo json_encode($records);
    }
    


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
 
    public function destroy($id)
    {
        $slider = Slider::find($id);
        
        if (Auth::guard('admin')->check()) {
            // Do something for authenticated admin user
            
            try {
                // Delete the file associated with the slider
                File::delete(public_path('images/sliders/' . $slider->filename));
            } catch (\Exception $e) {
                Log::error('Error deleting file: ' . $e->getMessage());
                return response()->json(['success' => false, 'message' => 'Error deleting file.']);
            }
            
            // Delete the slider from the database
            $slider->delete();
            
            return response()->json(['success' => true, 'message' => 'Slider deleted successfully.']);  
        } else {
            // Do something for unauthenticated admin user
            return response()->json(['message' => 'Admin user is not authenticated.']);
        }
    }
    
    

    // Define the check function
    public function check($user)
    {
        // Check if the user is authenticated
        return !is_null($user);
    }

}
