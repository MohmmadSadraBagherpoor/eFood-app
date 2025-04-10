@extends('layout.master')
@section('title', 'About Us')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4 class="fw-bold">بخش درباره ما</h4>
    </div>

    <div class="table-responsive">
        <table class="table align-middle">
            @if(!$item)
                <h4 class="text-center my-auto">اسلایدر موجودی نیست</h4>
            @else
                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>متن</th>
                    <th>لینک</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->body }}</td>
                    <td>{{ $item->link }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('about.edit', ['about' => $item->id]) }}" class="btn btn-sm btn-outline-info me-2">ویرایش</a>
                            <form method="POST" action="{{ route('about.destroy', ['about' => $item->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">حذف</button>
                            </form>
                        </div>
                    </td>
                </tr>
                </tbody>
            @endif
        </table>
    </div>
@endsection
