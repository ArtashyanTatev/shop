<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
dd(1);
    }

    public function deleteSlider(Request $request){
dd(2);
    }
}
