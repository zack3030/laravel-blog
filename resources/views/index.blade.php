@extends('layouts.app')

@section('content')
<div class="background-img grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto  pt-4 pb-16 sm:m-auto  w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
Do You Want to Become a Developer
            </h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold  text-xl uppercase">
                Read More
            </a>
        </div>
    </div>
</div>
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
<div>
    <img src="https://cdn.pixabay.com/photo/2017/10/10/21/47/computer-2838920_960_720.jpg" width="700" alt="">
</div>

<div class="m-auto sm:m-auto text-left w-4/5 block">
<h2 class="text-4xl font-extrabold text-gray-600">
Struggling to be a better web developper?
</h2>
<p class="py-8 text-gray-500 text-xl">
Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Iusto unde ad quaerat.
</p>
<p class="font-extrabold text-gray-600 text-xl pb-9">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Iusto unde ad quaerat Iusto unde ad quaerat.
    </p>
    <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
find out more
    </a>
</div>
</div>
<div class="text-center p-15 bg-black text-white">
<h2 class="text-2xl pb-5 text-l ">
I'm an expert....
</h2>
<span class="font-extrabold block text-4xl py-1">
Ux Design
</span>
<span class="font-extrabold block text-4xl py-1">
    Project Management
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
            </span>
</div>

<div class="text-center py-15">
<span class="uppercase text-s text-gray-400">
Blog
</span>
<h2 class="text-4xl font-bold py-10">
Recent Posts
</h2>
<p class="m-auto w-4/5 text-gray-500">
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non accusamus veritatis officiis obcaecati! Iste saepe itaque voluptate labore, accusantium optio perspiciatis dolor unde libero.

</p>
</div>

<div class="sm:grid grid-cols-2 gap-10 w-4/5 m-auto py-15 border-t border-gray-200">
    @foreach ($posts as $post )
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16  sm:m-auto w-4/5 block">
        <span class="uppercase  text-xs">
     {{ $post->title }}
        </span>
        <h3 class="text-xl font-bold py-10">
       {{ $post->description }}
        </h3>
        <a href="/blog/{{ $post->slug }}" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
            find out more
        </a>
        </div>
        </div>
   
    <div>
        <img src="{{ $post->image_path ? asset('/image/'.$post->image_path) : asset('/image/de.jpg')}}" width="700" alt="">
    </div>
    @endforeach
    </div>
    


    
@endsection