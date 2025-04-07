<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('sliders.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['string', 'required'],
            'link_title' => ['string', 'required'],
            'link_address' => ['string', 'required'],
            'body' => ['string', 'required'],
        ]);
        Slider::create($data);
        return redirect()->route('slider.index')->with('success', 'اسلایدر با موفقیت ساخته شد ...');
    }

    public function edit(Slider $slider)
    {
        return view('sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $data = $request->validate([
            'title' => ['string', 'required'],
            'link_title' => ['string', 'required'],
            'link_address' => ['string', 'required'],
            'body' => ['string', 'required'],
        ]);
        $slider->update($data);
        return redirect()->route('slider.index')->with('success', 'اسلایدر با موفقیت ,ویرایش شد ...');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('slider.index')->with('warning', 'اسلایدر با موفقیت حذف شد ...');

    }
}
