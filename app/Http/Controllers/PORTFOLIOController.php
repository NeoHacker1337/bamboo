<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\PORTFOLIO;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PORTFOLIOController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = PortfolioCategory::get();
        return view('backend.admin.porfolio.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function category()
    {
        return view('backend.admin.porfolio.category');
    }

    public function categorysave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $category = new PortfolioCategory();
        $category->title = $request->title;
        $category->slug = strtolower(str_replace(' ', '_', $request->title));
        $category->save();


        return response()->json(['success' => true, 'message' => 'Portfolio Category has been Created successfully.']);
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
            'category' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $port = new PORTFOLIO();
        $port->title = $request->input('title');
        $port->description = $request->input('description');
        $port->headline = $request->input('headline');
        $port->category = $request->input('category');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/portfolio');
            $image->move($destinationPath, $filename);
            $path = 'images/portfolio/' . $filename;
            $port->image = $path;
        }

        $port->save();
        return response()->json(['success' => true, 'message' => 'Portfolio has been uploaded successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function getPortfolioCategory(Request $request)
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

        $order = PortfolioCategory::get();

        $total  =  $order->count();

        $i = 1 + $ofset;
        $data = [];


        foreach ($order as $cate) {
            $btndelete  =  '<a href="#" class="btn btn-danger btn-sm pt-1 deleteClass" data-slider-id="' . $cate->id . '"><i class="fa fa-trash" aria-hidden="true"></i></a>';
            $data[] = array(
                $i++,
                $cate->title,
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
    public function categoryDelete($id)
    {
        $slider = PortfolioCategory::find($id);

        if (Auth::guard('admin')->check()) {

            $slider->delete();

            return response()->json(['success' => true, 'message' => 'Portfolio Category deleted successfully.']);
        } else {
            // Do something for unauthenticated admin user
            return response()->json(['message' => 'Admin user is not authenticated.']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PORTFOLIO $pORTFOLIO)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $slider = PORTFOLIO::find($id);

        if (Auth::guard('admin')->check()) {
            // Do something for authenticated admin user

            try {
                // Delete the file associated with the slider
                File::delete(public_path('images/portfolio/' . $slider->filename));
            } catch (\Exception $e) {
                Log::error('Error deleting file: ' . $e->getMessage());
                return response()->json(['success' => false, 'message' => 'Error deleting file.']);
            }

            // Delete the slider from the database
            $slider->delete();

            return response()->json(['success' => true, 'message' => 'Portfolio deleted successfully.']);
        } else {
            // Do something for unauthenticated admin user
            return response()->json(['message' => 'Admin user is not authenticated.']);
        }
    }

    public function  getPortfolio()
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

        $order = PORTFOLIO::get();

        $total  =  $order->count();

        $i = 1 + $ofset;
        $data = [];


        foreach ($order as $cate) {
            $btndelete  =  '<a href="#" class="btn btn-danger btn-sm pt-1 deleteClass" data-slider-id="' . $cate->id . '"><i class="fa fa-trash" aria-hidden="true"></i></a>';
            $addMore = '<a href="' . route('portfolio.photos', ['id' => $cate->id]) . '" class="btn btn-success btn-sm pt-1 addmoreclass">More Photos</a>';

            $data[] = array(
                $i++,
                $cate->title,
                $cate->headline,
                $cate->description,
                '<img src="../public/' . $cate->image . '" width="200" height="200">',
                date('d-m-Y, h:i:s A', strtotime($cate->created_at)),
                $addMore,
                $btndelete
            );
        }
        $records['recordsTotal'] = $total;
        $records['recordsFiltered'] =  $total;
        $records['data'] = $data;


        echo json_encode($records);
    }

    public function showPhotos(Request $request)
    {
        $portfolio = PORTFOLIO::find($request->id);
        $photos = $portfolio->photos;
        return view('backend.admin.porfolio.add-photos', compact('portfolio', 'photos'));
    }

    public function uploadImages(Request $request)
    {
        $images = $request->file('images');

        $rules = [
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->all()
            ]);
        }

        $uploadedImages = [];

        foreach ($images as $image) {
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $filename);
            $uploadedImages[] = $filename;
            
            $img = new Image();
            $img->image_id = $request->image_id;
            $img->path = $filename;
            $img->save();
        }

        return response()->json([
            'success' => true,
            'message' => 'Images uploaded successfully!',
            'images' => $uploadedImages
        ]);
    }


    public function imagesDatable(Request $request)
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

        $order = Image::get();

        $total  =  $order->count();

        $i = 1 + $ofset;
        $data = [];


        foreach ($order as $cate) {
            $btndelete  =  '<a href="#" class="btn btn-danger btn-sm pt-1 deleteClass" data-slider-id="' . $cate->id . '"><i class="fa fa-trash" aria-hidden="true"></i></a>';

            $data[] = array(
                $i++,
                '<img src="' . asset('storage/images/' . $cate->path) . '" width="200" height="200">',                
                $btndelete
            );
        }
        $records['recordsTotal'] = $total;
        $records['recordsFiltered'] =  $total;
        $records['data'] = $data;


        echo json_encode($records);
    }

    public function deleteimage($id)
    {
        $slider = Image::find($id);

        if (Auth::guard('admin')->check()) {
            // Do something for authenticated admin user

            
            // Delete the slider from the database
            $slider->delete();

            return response()->json(['success' => true, 'message' => 'Image deleted successfully.']);
        } else {
            // Do something for unauthenticated admin user
            return response()->json(['message' => 'Admin user is not authenticated.']);
        }
    }
}
