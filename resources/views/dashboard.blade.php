<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('CREARTE YOUR CONTENT') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                 <!--   <form class="form">
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
-->
                </div>
             <!--   @yield('content')  -->
            </div>
        </div>
    </div>
</x-app-layout>
