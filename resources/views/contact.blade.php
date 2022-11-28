<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/resources/css/app.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Top</title>
</head>

<body>

  <div class="flex justify-center">
    <form wire:submit.prevent="register" action="{{ route('contact.create') }}" method="post" class="w-6/12">
      @csrf
      <h1 class="text-2xl font-bold mb-4 mt-5 flex justify-center">お問合わせ</h1>
      <div class="mb-4">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">お名前<span class="text-red-600 hover:underline dark:text-blue-500">※</span></label>
        <input name="name" value="{{ old('name') }}" type="text" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="加藤史帆" wire:model="name" id="name">
        @error('name')<div class="text-red-400">{{ $message }}</div> @enderror
      </div>

      <div class="mb-4">
        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">性別<span class="text-red-600 hover:underline dark:text-blue-500">※</span></label>
        <div class="flex">
          <div class="flex items-center mr-4">
            <input name="gender" id="inline-radio" type="radio" value="1" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" checked>
            <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">男性</label>
          </div>
          <div class="flex items-center mr-4">
            <input name="gender" id="inline-2-radio" type="radio" value="2" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="inline-2-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">女性</label>
          </div>
        </div>
      </div>

      <div class="mb-4">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">メールアドレス<span class="text-red-600 hover:underline dark:text-blue-500">※</span></label>
        <div class="relative">
          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
            </svg>
          </div>
          <input name="email" value="{{ old('email') }}" type="text" id="email-address-icon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ramen@kaedama.com" wire:model="email">
        </div>
        @error('email')<div class="text-red-400">{{ $message }}</div> @enderror

      </div>

      <div class="mb-4">
        <label for="postcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">郵便番号<span class="text-red-600 hover:underline dark:text-blue-500">※</span></label>
        <div class="flex justify-between mb-6">
          <input name="postcode" value="{{ old('postcode') }}" type="text" aria-label="disabled input" class=" bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 w-9/12" placeholder="例)123-4567" id="zip" wire:model="postcode">
          @error('postcode')<div class="text-red-400">{{ $message }}</div> @enderror

          <button class="api-address my-0 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 leading-3 ml-2" type="button">住所を自動入力</button>
        </div>
      </div>

      <div class="mb-4">
        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">住所<span class="text-red-600 hover:underline dark:text-blue-500">※</span></label>
        <input name="address" value="{{ old('address') }}" type="text" id="address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="例)東京都渋谷区千駄ヶ谷1-2-3" wire:model="address">
        @error('address')<div class="text-red-400">{{ $message }}</div> @enderror
      </div>

      <div class="mb-4">
        <label for="building" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">建物名</label>
        <input name="building" value="{{ old('building') }}" type="text" id="" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="例)天然平目のセルクルと雲丹のグラタン仕立てマンション101">
      </div>

      <div class="mb-4">
        <label for="opinion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">ご意見<span class="text-red-600 hover:underline dark:text-blue-500">※</span></label>
        <textarea name="opinion" value="" id="" rows="4" wire:model="opinion" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('opinion') }}</textarea>
        @error('opinion')<div class="text-red-400">{{ $message }}</div> @enderror

      </div>


      <div class="flex justify-center">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">確認</button>
      </div>
    </form>
  </div>


</body>

<script>
  document.querySelector('.api-address').addEventListener('click', () => {
    const elem = document.querySelector('#zip');
    const zip = elem.value.replace('-', '');



    fetch('../api/address/' + zip)
      .then((data) => data.json())
      .then((obj) => {
        if (!Object.keys(obj).length) {
          txt = '住所が存在しません。'
        } else {

          txt = obj.pref + obj.city + obj.town;
        }
        document.querySelector('#address').value = txt;
      });
  });
</script>

</html>