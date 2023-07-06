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
                    @foreach ($applications as $application)
                        <div class=>  <div class="rounded border p-5 shadow-md bg-white mb-5">
                            <div class="flex w-full items-center justify-between border-b pb-3">
                            <div class="flex items-center space-x-3">
                                <div class="text-lg font-bold text-slate-700">{{ $application->user->name }}</div>
                            </div>
                            <div class="flex items-center space-x-8">
                                <button class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold"># {{ $application->id }}</button>
                                <div class="text-xs text-neutral-500">{{ $application->created_at->format('d M Y') }}</div>
                            </div>
                            </div>

                            <div class="mt-4 mb-6">
                            <div class="mb-3 text-xl font-bold">[{{ $application->subject }}]</div>
                            <div class="text-sm text-neutral-600">{{ $application->message }}</div>
                            </div>

                            <div>
                            <div class="flex items-center justify-between text-slate-500">
                                <div class="flex space-x-4 md:space-x-8">
                                    {{ $application->user->email }}
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        @endforeach
                    
                    @else
                    
                    <!-- component -->

                    
                        <form class="w-full" action='{{ route('applications.store') }}' method='POST' enctype='multipart/form-data'>
                            <div class="mt-4">
                                @if ($errors->any())
                                    <div class="bg-red-500 text-white p-4">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            @csrf
                            <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2 text-center" for="grid-password">
                                Subject
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="subject"  id="nick" type="text">
                                <p class="text-gray-600 text-xs italic">Remove if not needed</p>
                            </div>
                            </div>
                            
                            <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2 text-center" for="grid-password">
                                Message
                                </label>
                                <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"  name="message" id="message"></textarea>
                                <p class="text-gray-600 text-xs italic">Re-size can be disabled by set by resize-none / resize-y / resize-x / resize</p>
                            </div>                            
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                               <input type="file" name="file" id="">
                            </div>                            
                            </div>
                            <div class="md:flex md:items-center"> 
                            </div>
                            <button class="bg-gray-500 hover:bg-gray-600 text-white font-bold w-full py-5 text-2xl" type="submit">Send</button>
                        </form>
                    
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
