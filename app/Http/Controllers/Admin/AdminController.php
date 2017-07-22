<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use App\Models\Slider;

class AdminController extends Controller
{
    public function headerSlider()
    {
        $slider_info = Slider::get();

        return view('adminlte::headerSlider',[
            'slider_info' => $slider_info,
        ]);
    }

    public function create_slide(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('error', 'error name')->withErrors($validator->errors())->withInput();
        }

        if ($request->image) {

            $data = $_POST['image'];
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $data = base64_decode($data);
            $imageName = time() . '.jpg';
            file_put_contents('image/slider/' . $imageName, $data);
        }

        $slider = Slider::create([
            'code' => time() . "_slider_image",
            'image' => $imageName,
            'hy' => [
                'header' => $request->hy_header,
                'title' => $request->hy_title,
                'description' => $request->hy_description
            ],
            'en' => [
                'header' => $request->en_header,
                'title' => $request->en_title,
                'description' => $request->en_description
            ],
            'ru' => [
                'header' => $request->ru_header,
                'title' => $request->ru_title,
                'description' => $request->ru_description
            ],
        ]);

            return back();

    }

    public function updateSlider(Request $request){

//        dd($request->all());
        if ($request->key && $request->key == 'one') {
            $product = Slider::where('id', $request->prod)->first();
            return View::make('vendor.adminlte.update.headerSliderUpdate', [
                'product' => $product,
            ]);
        } else {

            $validator = Validator::make($request->all(), [
                'image' => 'required',

            ]);
            if ($validator->fails()) {
                return back()->with('error', 'add')->withErrors($validator->errors())->withInput();
            }


            $product = Slider::where('id', $request->id)->firstOrFail();

            if ($request->image) {
                $data = $_POST['image'];
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);

                $data = base64_decode($data);
                $imageName = time() . '.jpg';
                file_put_contents('image/slider/' . $imageName, $data);
            }

            $product->image = $imageName;

            $product->translate('ru')->header = $request->ru_header;
            $product->translate('hy')->header = $request->hy_header;
            $product->translate('en')->header = $request->en_header;

            $product->translate('ru')->title = $request->ru_title;
            $product->translate('en')->title = $request->en_title;
            $product->translate('hy')->title = $request->hy_title;

            $product->translate('ru')->description = $request->ru_description;
            $product->translate('en')->description = $request->en_description;
            $product->translate('hy')->description = $request->hy_description;


            return back();
        }
    }



    public function deleteSlider(Request $request){
dd(2);
    }
}
