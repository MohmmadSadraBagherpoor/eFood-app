<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $item = AboutUs::first();
        return view('about.index', compact('item'));
    }

    public function edit(AboutUs $about)
    {
        return view('about.edit', compact('about'));
    }

    public function update(Request $request, AboutUs $about)
    {
        $data = $request->validate([
            'title' => ['string', 'required'],
            'link' => ['string', 'required'],
            'body' => ['string', 'required'],
        ]);
        $about->update($data);
        return redirect()->route('about.index')->with('success', 'بخش ما با موفقیت ,ویرایش شد ...');
    }

    public function destroy(AboutUs $about)
    {
        $about->delete();
        return redirect()->route('about.index')->with('warning', 'بخش ما با موفقیت حذف شد ...');
    }
}
