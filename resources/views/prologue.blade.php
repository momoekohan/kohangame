<!DOCTYPE html>
<html lang="ja">
<html>

	<head>
	
		<meta charset="UTF-8">
		<link rel="stylesheet" href="{{asset('css/prologue.css')}}">
		<title>ぷろろーぐ</title>
		
	</head>


	<body>

		<div class = "textbox">
			<p class = "text">{{$bunsho}}</p>
			<a href = "{{url('map')}}">ストーリーが終わったらMAPへ飛ぶ</a>
		</div>
		
	</body>
	
</html>