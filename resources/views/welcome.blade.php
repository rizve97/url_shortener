<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex justify-center bg-white border-b border-gray-200">
                    <section>
                        <h1 class="text-4xl text-blue-800">short your link </h1>
                        @if(session('success_message'))
                        {{session('success_message')}}
                        @endif
                        <form method="POST" action="{{ route('short.url')}}">
                             @csrf
                            <input class="border border-gray-300 rounded-lg" type= "url" name="original_url"/>
                            <button class="m-2 px-6 py-2 bg-gray-500 hover:bg-gray-700 rounded-lg" type= "submit"> MAKE IT SHORT </button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
