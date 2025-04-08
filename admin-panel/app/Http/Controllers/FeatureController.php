<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Slider;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all();
        return view('features.index', compact('features'));
    }

    public function create()
    {
        return view('features.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['string', 'required'],
            'icon' =>  ['string', 'required'],
            'body' => ['string', 'required'],
        ]);
        Feature::create($data);
        return redirect()->route('feature.index')->with('success', 'اسلایدر با موفقیت ساخته شد ...');
    }

    public function edit(Feature $feature)
    {
        return view('features.edit', compact('feature'));
    }

    public function update(Request $request, Feature $feature)
    {
        $data = $request->validate([
            'title' => ['string', 'required'],
            'icon' => ['string', 'required'],
            'body' => ['string', 'required'],
        ]);
        $feature->update($data);
        return redirect()->route('feature.index')->with('success', 'اسلایدر با موفقیت ,ویرایش شد ...');
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect()->route('feature.index')->with('warning', 'اسلایدر با موفقیت حذف شد ...');

    }
}
