<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    @if(auth()->user()->role->name == 'manager')


                    <!-- This is an example component -->
                        <div class=>  <div class="rounded border p-5 shadow-md bg-white">
                            <div class="flex w-full items-center justify-between border-b pb-3">
                            <div class="flex items-center space-x-3">
                                <div class="text-lg font-bold text-slate-700">Joe Smith</div>
                            </div>
                            <div class="flex items-center space-x-8">
                                <button class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold"># 1</button>
                                <div class="text-xs text-neutral-500">2 hours ago</div>
                            </div>
                            </div>

                            <div class="mt-4 mb-6">
                            <div class="mb-3 text-xl font-bold">Nulla sed leo tempus, feugiat velit vel, rhoncus neque?</div>
                            <div class="text-sm text-neutral-600">Aliquam a tristique sapien, nec bibendum urna. Maecenas convallis dignissim turpis, non suscipit mauris interdum at. Morbi sed gravida nisl, a pharetra nulla. Etiam tincidunt turpis leo, ut mollis ipsum consectetur quis. Etiam faucibus est risus, ac condimentum mauris consequat nec. Curabitur eget feugiat massa</div>
                            </div>

                            <div>
                            <div class="flex items-center justify-between text-slate-500">
                                <div class="flex space-x-4 md:space-x-8">
                                    email@gmail.com
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>


                    @else
                    
                    <!-- component -->

                    <div class=""
                        <form class="w-full max-w-lg" metod='POST' enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Subject
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nick" type="text">
                                <p class="text-gray-600 text-xs italic">Remove if not needed</p>
                            </div>
                            </div>
                            
                            <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Message
                                </label>
                                <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message"></textarea>
                                <p class="text-gray-600 text-xs italic">Re-size can be disabled by set by resize-none / resize-y / resize-x / resize</p>
                            </div>                            
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                               <input type="file" name="file" id="">
                            </div>                            
                            </div>
                            <div class="md:flex md:items-center">
                            <div class="md:w-1/3">
                                <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                Send
                                </button>
                            </div>
                            <div class="md:w-2/3"></div>
                            </div>
                        </form>
                    </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
