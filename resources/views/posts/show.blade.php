<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($post->title) }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                <div class="p-6 bg-white border-b border-gray-200">
                {{$post->body}}    
                </div>
                <hr>
                   <small class="p-6">Written on {{$post->created_at}}</small>
                </hr>
                
            </div>
        </div>
    </div>

    @if(!Auth::guest())
        @if(Auth::user()->id==$post->user_id)
           <div class="py-1">
               <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                  <a href = "/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a> 
               </div>
           </div>
           <div class="py-1">
               <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">      
                  {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
                  {{Form::hidden('_method','DELETE')}}
                  {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                  {!!Form::close()!!}    
               </div>
           </div>
        @endif
    @endif

    
    <div class="py-1">
               <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">      
                  {!!Form::open(['action'=>['PostsController@bookmark',$post->id],'method'=>'POST'])!!}
                     <!--{{Form::hidden('_method','PUT')}} -->
                     {{Form::submit('Save',['class'=>'btn btn-danger'])}}
                  {!!Form::close()!!}    
               </div>
    </div>

    <div class="py-1">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">      
                     <a href="/posts" class="btn btn-default">Go back</a>    
        </div>
    </div>

    <h2 class="nt_6 text-4xl leading-18 tracking- tight font-bold text-gray-980 text-center">Comments</h2>

    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">                         
        <form action="/posts/{{ $post->id}}/comments"  method= "POST" class="mb-0">  
            @csrf
            <label for="author" class="text-sm font-medium text-gray-700">Author</label>
            <input type="text" name="author" class="mt-1 py-2 px-3 block w-full barded border-gray-400 rounded-md shadow-sm " required>

            <label for="author" class="text-sm font-medium text-gray-700">Text</label>
            <textarea  name="text" class="mt-1 py-2 px-3 block w-full barded border-gray-400 rounded-md shadow-sm " required></textarea>
            <button type="submit" class="mt-6 py-2 px-4 w-full border border-transparent shadow-sm text-sm font-medium rounded-nd text-black bg-indigo-600 ">Submit</botton>       
        </form>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
      <div class="mt-6">
        @foreach($comments as $comment)
        <div class="mb-5 bg-white px-4 py-6 rounded-sm shadow-md ">
            <div class="flex">
                <!--avatar -->
                <div class="mr-3 flex flex-col justify-center ">
                    <div>
                        <?php 
                             $parts=explode(' ',$comment->author);
                             $initials=strtoupper($parts[0][0].$parts[count($parts)-1][0]);
                        ?>

                        <span class="bg-gray-300 p-3 rounded-full">{{$initials }}</span>
                    </div>
               </div>
               <!--  -->
               <div class=" flex flex-col justify-center ">
                   <p class="mr-2 font-bold">{{$comment->author }}</p>
                   <p class="text-gray-600">{{$comment->created_at->diffForHumans() }}</p>
              </div>           
           </div>

           <div class="mt-3">
               <p>{{$comment->text}}</p>

           </div>
        </div>
    
        @endforeach
       </div>
    </div>

</x-app-layout>
