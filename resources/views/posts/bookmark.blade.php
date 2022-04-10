<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bookmark') }}
        </h2>
        
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Your saved posts!
                
                </div>
            </div>
        </div>
    </div>

@if(count($posts)>1)
       @foreach($posts as $post)
            <div class="py-2"> 
               <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                   <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                        <div class="p-6 bg-white border-b border-gray-200">
                         <!--<div class="well">  -->
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3>
                            <small>Written on {{$post->created_at}}</small>
                          <!--</div>  -->                  
                        </div>
                   </div>
               </div>
            </div>         
       @endforeach
    @else

@endif



</x-app-layout>
