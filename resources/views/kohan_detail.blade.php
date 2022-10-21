<!DOCTYPE html>
<html lang="ja">
<html>

	<head>
	
		<meta charset="UTF-8">
		<link rel="stylesheet" href="{{asset('css/kohan_detail.css')}}">
		<title>〇〇こはん</title>
		
	</head>


	<body>
		
		<img src = "{{asset('image/kohan_detail1.png')}}" class = "kohan_detail">
		<p class = "text">便所で飯食ってるこはん。可哀想ですねぇ（他人事）</p>

		<br>
		<a href = "{{url('kohan_list')}}">こはんリストへ戻る</a>
		
	</body>
	
</html>