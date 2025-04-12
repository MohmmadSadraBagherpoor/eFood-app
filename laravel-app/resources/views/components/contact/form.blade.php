<form action="{{ route('contact.store') }}" method="POST">
    @csrf
    <div>
        <input name="name" type="text" value="{{ old('name') }}" class="form-control" placeholder="نام و نام خانوادگی" />
        <div class="form-text text-danger">@error('name') {{$message}} @enderror</div>
    </div>
    <div>
        <input name="email" type="email" value="{{ old('email') }}" class="form-control" placeholder="ایمیل" />
        <div class="form-text text-danger">@error('email') {{$message}} @enderror</div>
    </div>
    <div>
        <input name="subject" type="text" value="{{ old('subject') }}" class="form-control" placeholder="موضوع پیام" />
        <div class="form-text text-danger">@error('subject') {{$message}} @enderror</div>
    </div>
    <div>
        <textarea name="body" rows="10" style="height: 100px" class="form-control" placeholder="متن پیام">{{ old('body') }}</textarea>
        <div class="form-text text-danger">@error('body') {{$message}} @enderror</div>
    </div>
    <div class="btn_box">
        <button type="submit">
            ارسال پیام
        </button>
    </div>
</form>