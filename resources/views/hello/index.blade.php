<html>

<head>
  <title>Hello/Index</title>
  <style>
    body {
      font-size: 16pt;
      color: #999;
    }

    h1 {
      font-size: 100pt;
      text-align: right;
      color: #f6f6f6;
      margin: -50px 0px -120px 0px;
    }
  </style>
</head>

<body>
  <h1>Blade/Index</h1>
  <p>これはサンプルページです。</p>
  <p>{{$msg}}</p>
  <form action="/hello" method="post">
  @csrf
    <input type="text" name="msg">
    <input type="submit" value="送信する">
  </form>
</body>