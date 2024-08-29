<?php

namespace App\Http\Controllers;
use App\Models\Listing;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ListingController extends Controller
{
    //sho all listings
    public function index(){
        return view('resource.index', [
            'layout' => Listing::latest()->filter(request(['keyword','category','location']))->SimplePaginate(5),
        ]);
    }

    public function show($listing){
        return view('resource.jobdetails', [
            'content' => Listing::find($listing)
        ]);
    }

    public function create(){
        return view('resource.create');
    }

    public function about(){
        return view('resource.about');
    }

    public function terms(){
        return view('resource.terms');
    }

    public function privacy(){
        return view('resource.privacy');
    }

     //show edit form

     public function edit(Listing $listing){
        return view('resource.edit', [
            'listing' => $listing
        ]);
    }

    public function update(Request $request, Listing $listing){

        $formfield = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'time' => 'required',
            'salary' => 'required',
            'requirement' => 'required',
            'qualification' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')){
            $formfield['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formfield);

        return back()->with('message', 'updated successfully');
    }


    public function store(Request $request){

        $formfield = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings','company')],
            'location' => 'required',
            'company-detail' => 'required',
            'website' => 'required',
            'time' => 'required',
            'category' => 'required',
            'qualification' => 'required',
            'requirement' => 'required',
            'salary' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')){
            $formfield['logo'] = $request->file('logo')->store('logos', 'public');
        }


        $formfield['user_id'] = auth()->id();

        Listing::create($formfield);

        return redirect('/')->with('message', 'Job created successfully');
    }


    public function destroy(Listing $listing){
        $listing->delete();
        return redirect('/')->with('message', 'Logout Successfully');
    }


}

