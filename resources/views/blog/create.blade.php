@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Create Post

        </h1>

    </div>

</div>
<div class="w-4/5 m-auto pt-20">
<form action="/blog" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text"
     name="title"
      placeholder="title....."
      class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

      <textarea name="description"
      placeholder="description...."
      class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">
</textarea>
<div class="bg-gray-lighter pt-15">
<label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg
 tracking-wide border border-blue uppercase curser-pointer">
<span class="mt-2 text-base leading-normal">
select a file
</span>
<input type="file" name="image" class="hidden">
</label>
</div>
<button type="submit" class="uppercase bg-blue-500 mt-15 text-gray-100 
text-lg font-extrabold py-4 px-8 rounded-3xl">
submit post
</button>
</form>
</div>

@endsection

