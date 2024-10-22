<!DOCTYPE html>
<html lang="ja">
    
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
  </head>
  <body>
    <h1>商品一覧</h1>
    
    {{-- 商品データ・画像表示 --}}
    @foreach ($items as $item)
      <p>{{ $item->name }} : {{ $item->price }}円</p>
      <div>
        @if ($item->image !=='')
          <img src="{{ \Storage::url($item->image) }}" width="25%">
        @else
          <img src="{{ \Storage::url('items/no_image.png') }}">
        @endif
      </div>
    @endforeach
  </body>
</html>