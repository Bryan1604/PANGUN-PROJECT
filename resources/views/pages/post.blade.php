@extends('dashboard')
@section('content')
<div class="p-6 bg-white border-b border-gray-200">
                    <form class="form">
                        <div>
                            <label class= "form-label" for="posts">Post your contents here</label>
                                <input class="form-input" type= "text" 
                                                          id="post"
                                                          name="your post"
                                                          size="30"
                                                          required>
                                <button class="button"><span>POST</span></button>
                       </div>
                    </form>
 </div>
@endsection