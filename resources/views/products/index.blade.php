<!-- @extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-9">
    <div class="container mt-4">
      <div class="row w-100">
        <?php
        $ymd='2024-12-01'
        $s =strtotime($ymd);
        // 日付リストを作成する
        $data = array();
        for ($t = $s;data('m,$t') == data('m',$s);$t +=60*60*24) {
          $data[]$t;
        }
        // 先頭の日の曜日を見て前に余白を追加
        if(date('w',$data[0])>0){
          $data=array_merge(array_fill(0,date('w',data[0]),''),$data);
        }
        // 末尾の日の曜日を見て後ろに余白を追加
        if(date('w',end($data))<6) {
          $data = array_marge($data,array_fill(0,6-date('w',end($data)),''));
        }
        // 7で割る
        $data =array_chunk($data,7);
        //カレンダーを表示する
echo '<table>';
//見出し
echo '<tr><th>日</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th></tr>';
//週のループ
foreach ($data as $week) {
    echo '<tr>';
    //週の中の日のループ
    foreach ($week as $date) {
        if ($date) {
            echo '<td>' . date('j', $date) . '</td>';
        } else {
    	    echo '<td>&#160;</td>';
        }
    }
    echo '</tr>';
}
echo '</table>';?>
        @foreach($products as $product)
        <div class="col-3">
          <a href="{{route('products.show',$product)}}">
            <img src="{{ asset('img/dummy.png')}}" class="img-thumbnail">
          </a>
          <div class="row">
            <div class="col-12">
              <p class="samuraimart-product-label mt-2">
                {{$product->name}}<br>
                <label>¥{{$product->price}}</label>
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection -->