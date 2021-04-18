<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-title></x-title>
</head>

<body class="bg-gray-100">
    <x-top-right-coner></x-top-right-coner>
    <div class="flex flex-col items-center bg-gray-100">

        <div class="mt-10 flex flex-col items-center py-3 w-3/4 inline-block overflow-y-auto overflow-hidden">
            <a href="/">
                <div class="px-4 py-2 flex flex-col items-center">
                    <img class="w-60 h-20 fill-current" src="/img/horizontal_logo.png" alt="">
                    <p class="text-2xl font-bold text-gray-600"> Community Forum </p>
                </div>
            </a>

            @auth
            <div class="bg-white shadow-md w-4/5 pt-2 ml-2 mr-2 rounded-lg border-2 border-blue-300">
                <form method="POST" action="/forum">
                    <div class="px-4 py-2 flex flex-col">
                        <span class="text-xl font-bold text-grey-600">Any Questions ?</span>
                        <textarea name="question" class="mt-2 bg-gray-100 p-3 h-30 border border-gray-300 outline-none focus:outline-none" spellcheck="false" placeholder="Type your question here."></textarea>
                        @if ($errors->has('question'))
                        <span class="text-danger">{{ $errors->first('question') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="ml-3 mb-2 focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-blue-400 to-blue-600 transform hover:shadow-md">
                        Post Question
                    </button>
                    {{ csrf_field() }}
                </form>
            </div>
            @endauth

            @foreach($questions as $question)
            <div class="bg-white shadow-md w-4/5 pt-2 ml-2 mt-4 mr-2 rounded-lg border-2">
                <div class="px-4 py-2 flex  justify-between">
                    <span class="text-xl font-bold text-red-500">{{$question->question}} ?</span>
                    <div class="flex">
                        <span class="px-4 text-sm font-semibold text-gray-600"> {{$question->created_at->format("d/m/y h:i A")}} </span>
                        <span class="px-4 text-sm font-semibold text-gray-600"> {{$question->user->username}} </span>
                    </div>
                </div>

                @if(!is_null($question->answer))
                <p class="px-4 py-2 text-sm font-semibold text-gray-700">{{$question->answer}}</p>
                @else
                <p class="px-4 py-2 text-sm font-semibold text-gray-500">(This question has not been aswered yet.)</p>
                @auth
                @if(Auth::user()->type == 'SUPER_ADMIN')
                <form method="PATCH" action="/forum/{{$question->id}}">
                    <div class="px-4 py-2 flex flex-col">
                        <textarea name="answer" class="mt-2 bg-gray-100 p-3 h-30 border border-gray-300 outline-none focus:outline-none" spellcheck="false" placeholder="Type answer here."></textarea>
                    </div>
                    <button type="submit" name="update" class="ml-3 mb-2 focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-blue-400 to-blue-600 transform hover:shadow-md">
                        Answer Question
                    </button>
                    {{ csrf_field() }}
                </form>
                @endif
                @endauth
                @endif
                @auth
                @if(Auth::user()->id == $question->user_id || Auth::user()->type == 'SUPER_ADMIN')
                @if(is_null($question->answer))
                <button type="submit" class="ml-3 mb-2 focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-gray-600 to-gray-900 transform hover:shadow-md">Edit</button>
                @endif
                <button type="submit" class="ml-1 mb-2 focus:outline-none text-white text-sm py-2.5 px-5 rounded-xl bg-gradient-to-r from-gray-600 to-gray-900 transform hover:shadow-md">Delete</button>
                @endif
                @endauth

            </div>
            @endforeach

        </div>
    </div>
</body>

</html>