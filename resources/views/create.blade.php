@extends('layout')

@Section('title', 'Create New Post | Blog')

@Section('main')
    <section class="w-[90%] mx-auto mt-10 bg-white p-5 rounded shadow-md shadow-slate-400">
        <h1 class="laptop:text-xl laptop:font-bold text-[#000814]">Create new blog post</h1>
        <form method="POST" action="{{ route('posts.store') }}" class="mt-5 flex flex-col gap-4">
            <div class="flex flex-col gap-2">
                <label for="title" class="text-lg text-[#000814] font-medium">Title</label>
                <input type="text" name="title" placeholder="Insert your blog title" class="outline-none border border-[#000814] px-2 py-4 focus:border-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="description" class="text-lg text-[#000814] font-medium">Description</label>
                <textarea type="text" name="description" placeholder="Insert your blog description" class="outline-none border border-[#000814] px-2 py-4 focus:border-2"></textarea>
            </div>
            <button type="submit" class="w-[20%] h-14 mx-auto bg-[#000814] text-white font-medium">Publish Post</button>
        </form>
    </section>
@endsection

@section('footer')
    
@endsection