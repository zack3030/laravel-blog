@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Edit Post

        </h1>

    </div>

</div>
<div class="w-4/5 m-auto pt-20">
<form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text"
     name="title"
      value="{{ $post->title }}"
      class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

      <textarea name="description"
      class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">
      {{ $post->description }}
</textarea>
<button type="submit" class="uppercase bg-blue-500 mt-15 text-gray-100 
text-lg font-extrabold py-4 px-8 rounded-3xl">
submit post
</button>
</form>
</div>

@endsection

