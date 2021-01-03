<?php

namespace App\Http\Controllers;
use App\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{


      public function index(){
          // create a variable and store all of the messages in it
          $colors = Color::orderBy('id', 'desc')->paginate(10);
          // return a view and pass in the variable
          return view('colors.index', ['colors' => $colors]);
          }

          public function store(Request $request)
        {
            // validate the data
          $validatedData = $request ->validate([
              'dmc' => 'required|max:5',
              'hex' => 'required|min:7'
            ],
              $colors = [
                'dmc.required' => 'This field cannot be empty!',
                'hex.required' => 'This field is required.'

              ]);

            // store in database
            $color = new Color();
            $color -> dmc = $request -> input('dmc');
            $color -> hex = $request -> input('hex');
            $color -> created_at = Carbon::now();

            $color -> save();

        }

        public function show($id){
          $color = Color::find($id);
          return view('colorInput', ['color' => $color]);
        }

        public function destroy($id){
          $color = Color::findOrFail($id);
          $color -> delete();

          Session::flash('success', 'This color has been successfully deleted!');
          // redirect to another
          return redirect()->route('colorInput');
        }


    }
