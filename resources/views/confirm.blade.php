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
    <form action="{{ route('contact.register') }}" method="POST" class="w-6/12">
      @csrf
      <h1 class="text-2xl font-bold mb-4 mt-5 flex justify-center">内容確認</h1>
      <table class="table-auto">
        <tbody>
          <tr>
            <td>お名前</td>
            <td>{{ $contacts->name }}</td>
          </tr>
          <tr>
            <td>性別</td>
            <td>{{ $contacts->gender }}</td>
          </tr>
          <tr>
            <td>メールアドレス</td>
            <td>{{ $contacts->email }}</td>
          </tr>
          <tr>
            <td>郵便番号</td>
            <td>{{ $contacts->postcode }}</td>
          </tr>
          <tr>
            <td>住所</td>
            <td>{{ $contacts->address }}
          <tr>
            <td>建物名</td>
            <td>{{ $contacts->building }}</td>
          </tr>
          <tr>
            <td>ご意見</td>
            <td>{{ $contacts->opinion }}</td>
          </tr>
        </tbody>
      </table>


      <div class="flex justify-center">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">確認</button>
      </div>
    </form>
  </div>



</body>

</html>