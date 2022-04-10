<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    {!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST'])!!}  
                                <!-- tạo khung title-->
         <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="form-group">
                             {{ Form::label('title','Title')}}  
                             {{ Form::text('title',$post->title,['class' => 'form-control','placeholder'=>'Title'])}} 
                        </div>   
                    </div>
                </div>
            </div>
        </div>          
                                <!-- tạo khung content-->
        <div class="py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="form-group">
                            {{ Form::label('body','Body')}}  
                            {{ Form::textarea('body', $post->body,['class' => 'form-control','placeholder'=>'Body'])}} 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
               <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                   {{Form::hidden('_method','PUT')}}
                   {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
               </div>
            </div>
        </div>
    {!! Form::close()!!}  
   
    
</x-app-layout>
  
