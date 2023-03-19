<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Frontend;
use App\Models\Image;
use App\Models\PORTFOLIO;
use App\Models\PortfolioCategory;
use App\Models\Profile;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::latest()->get();
        $profile = Profile::find(1);
        $port = PORTFOLIO::latest()->limit(5)->get();
        $totalSlides = count($port);

        return view('frontend.index',compact('slider','profile','port','totalSlides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        $profile = Profile::find(1);
        return view('frontend.about',compact('profile'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function services()
    {
        $profile = Profile::find(1);
        return view('frontend.services',compact('profile'));
    }

    /**
     * Display the specified resource.
     */
    public function contactus()
    {
        return view('frontend.contact');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function portfolio()
    {
        $category = PortfolioCategory::get();
        $port = PORTFOLIO::select('p_o_r_t_f_o_l_i_o_s.*','portfolio_category.id as catId','portfolio_category.slug as catSlug','portfolio_category.title as catTitle')
                        ->join('portfolio_category', 'portfolio_category.id', '=', 'p_o_r_t_f_o_l_i_o_s.category')
                        ->get();

        return view('frontend.portfolio',compact('category','port'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function portfoliodetails($id)
    { 
        $details = PORTFOLIO::select('p_o_r_t_f_o_l_i_o_s.*','portfolio_category.id as catId','portfolio_category.slug as catSlug','portfolio_category.title as catTitle')
                    ->join('portfolio_category', 'portfolio_category.id', '=', 'p_o_r_t_f_o_l_i_o_s.category')
                    ->where('p_o_r_t_f_o_l_i_o_s.id',$id)
                    ->first();
        $image = Image::where('image_id',$details->id)->get();
        return view('frontend.portfolio-details',compact('details','image'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Frontend $frontend)
    {
        //
    }
}