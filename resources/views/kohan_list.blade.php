<!DOCTYPE html>
<html lang="ja">
<html>

	<head>
	
		<meta charset="UTF-8">
		<link rel="stylesheet" href="{{asset('css/kohan_list.css')}}">
		<title>こはんリスト</title>
		
	</head>


	<body>
	
		<p class = "maintitle">こはんリスト</p>
		
		<ul class = "list">

			<li><a href = "{{url('kohan_detail')}}"><img src = "{{asset('image/kohan_detail1.png')}}"></a></li>
			<li><a href = "{{url('kohan_detail')}}"><img src = "{{asset('image/kohan_detail2.png')}}"></a></li>
			<li><a href = "{{url('kohan_detail')}}"><img src = "{{asset('image/kohan_detail2.png')}}"></a></li>
			<li><a href = "{{url('kohan_detail')}}"><img src = "{{asset('image/kohan_detail2.png')}}"></a></li>

		</ul>

		<br>

		<a href = "{{url('top')}}">とっぷへ</a>
		<a href = "{{url('map')}}">まっぷへ</a>
		
	</body>
	
</html>