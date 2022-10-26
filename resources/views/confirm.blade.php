<!DOCTYPE html>
<html lang="">

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
    <form action="{{ route('contact.register') }}" method="POST" class="w-2/3">
      @csrf
      <h1 class="text-2xl font-bold mb-4 mt-5 flex justify-center">内容確認</h1>
      <table class="flex justify-center p-5 text-sm text-left text-gray-500 dark:text-gray-400 ">
        <tbody>
          <tr>
            <input name="name" type="hidden" value="{{ $contacts['name'] }}">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">お名前</th>
            <td>{{ $contacts['name'] }}</td>
          </tr>
          <tr>
            <input name="gender" type="hidden" value="{{ $contacts['gender'] }}">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">性別</th>
            @if($contacts['gender'] == 1)
            <td>男性</td>
            @else
            <td>女性</td>
            @endif
          </tr>
          <tr>
            <input name="email" type="hidden" value="{{ $contacts['email'] }}">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">メールアドレス</th>
            <td>{{ $contacts['email'] }}</td>
          </tr>
          <tr>
            <input name="postcode" type="hidden" value="{{ $contacts['postcode'] }}">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">郵便番号</th>
            <td>{{ $contacts['postcode'] }}</td>
          </tr>
          <tr>
            <input name="address" type="hidden" value="{{ $contacts['address'] }}">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">住所</th>
            <td>{{ $contacts['address'] }}
          <tr>
            <input name="building" type="hidden" value="{{ $contacts['building'] }}">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">建物名</th>
            <td>{{ $contacts['building'] }}</td>
          </tr>
          <tr>
            <input name="opinion" type="hidden" value="{{ $contacts['opinion'] }}">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">ご意見</th>
            <td>{{ $contacts['opinion'] }}</td>
          </tr>
        </tbody>
      </table>


      <div class="flex justify-center">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">確認</button>
      </div>
      <button type="button" onClick="history.back()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">戻る</button>
    </form>
  </div>



</body>

</html>