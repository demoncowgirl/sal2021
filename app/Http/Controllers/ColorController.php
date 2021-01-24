<?php

namespace App\Http\Controllers;
use Illuminate\Support\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Collective\Html\Eloquent;
use App\Models\Color;

class ColorController extends Controller
{

      public function index(){
          // create a variable and store all of the messages in it
          $colors = Color::orderBy('id', 'desc')->paginate(10);
          // return a view and pass in the variable
          return view('colorInput', ['colors' => $colors]);
          }

    //   public function getColors(){
    //     foreach ($data_main as $transaction_main) {
    //       $json_decoded = json_decode($transaction_main);
    //       $colorArray[] = array('Amount' => $amount, 'CodeType' => $json_decoded->data->Type->data->codeType, 'Name' => $json_decoded->data->Name, 'SiteName' => $json_decoded->data->SiteName);
    // }
    //
          // return $this->belongsToOne('App\Color','hex','dmc','name');
          // }

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
            $color -> name = $request -> input('name');

            $color -> save();

            $request->session()->flash('status', 'Color added successfully!');

            return redirect('colorInput');

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
          return redirect ('colorInput');
        }


    }
