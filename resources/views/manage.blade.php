<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/resources/css/app.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <title>Top</title>
</head>

<body>

  <main class="container mx-auto">
    <h1 class="my-5 font-bold">管理システム</h1>
    <div class="p-4 w-full max-w-7xl bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">

      <form action="/search" method="get" class="w-full ">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-1">
          <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">お名前</label>
            <input name="name" value="{{ old('name') }}" type="text" aria-label="disabled input" class="mb-3 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="name" id="name">
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">性別</label>
            <div class="flex">
              <div class="flex items-center mr-4">
                <input name="gender" id="inline-radio" type="radio" value="0" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" checked>
                <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">全て</label>
              </div>
              <div class="flex items-center mr-4">
                <input name="gender" id="inline-radio" type="radio" value="1" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">男性</label>
              </div>
              <div class="flex items-center mr-4">
                <input name="gender" id="inline-2-radio" type="radio" value="2" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-2-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">女性</label>
              </div>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-2">
          <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="created_at">
              登録日
            </label>
            <input type="date" name="from" placeholder="from_date" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city">
          </div>

          <span class="md:w-1/12 px-3 mb-6 md:mb-0 text-center h-10 leading-10">
            ~
          </span>

          <div class="ww-full md:w-1/4 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-5" for="grid-city">
            </label>
            <input type="date" name="until" placeholder="until_date" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city">
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full max-w-2xl px-3 mr-20">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">メールアドレス</label>
            <div class="relative">
              <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                </svg>
              </div>
              <input name="email" value="{{ old('email') }}" type="text" id="email-address-icon" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="email">
            </div>
          </div>

          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 my-3 mr-5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">検索</button>
          <button type=reset class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 my-3 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">リセット</button>

        </div>
      </form>
    </div>


    <p class="my-7">{{ $contacts->links() }}</p>
    <div class="grid grid-cols-4 gap-5 p-10">
      @foreach($contacts as $contact)
      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-gray-100">
        <div class="px-6 pt-4 flex">
          <div class="font-bold text-base mb-2 mr-3">{{ $contact->name }}</div>
          <span class="inline-block px-3 py-1 my-1 text-xs font-semibold text-gray-800"> @if($contact->gender == 1)
            男性
            @else
            女性
            @endif
          </span>
          <form action="{{ route('contact.delete', ['id' => $contact->id]) }}" method="post">
            @csrf
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-normal hover:text-white py-1 px-4 ml-6 text-sm border border-blue-500 hover:border-transparent rounded">削除</button>
          </form>
        </div>
        <div class="px-2">
          <span class="inline-block px-3 py-1 text-xs font-semibold text-gray-500 mr-2 mb-2">{{ $contact->email }}</span>
        </div>
        <div class="px-6 pb-2">
          <div class="font-bold text-xs mb-2"> {{ $contact->created_at }}</div>
        </div>
        <div class="px-6 pb-2">
          <div class="text-xs mb-2 txt-limit" id="txt-limit">{{ $contact->opinion }}</div>
        </div>

      </div>
      @endforeach
    </div>
  </main>


</body>
<script>
  // function textTrim() {
  //   let selector = document.getElementsByClassName('txt-limit');
  //   let wordCount = 25;
  //   let clamp = '…';
  //   for (let i = 0; i < selector.length; i++) {
  //     if (selector[i].innerText.length > wordCount) {
  //       var str = selector[i].innerText;
  //       str = str.substr(0, (wordCount - 1));
  //       selector[i].innerText = str + clamp;
  //     }
  //   }
  // }
  // textTrim();



  let extra = document.getElementsById('txt-limit');
  extra.addEventListener('click', function() {
    extra.classList.remove('txt-limit');
  });

</script>

</html>