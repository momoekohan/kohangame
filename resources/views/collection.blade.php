<!DOCTYPE html>
<html lang="ja">
<html>

	<head>
	
		<meta charset="UTF-8">
		<link rel="stylesheet" href="{{asset('css/collection.css')}}">
		<title>これくしょん</title>
		
	</head>


	<body>
	
		<p class = "maintitle">これくしょん</p>
		
		<div class = "menu">

			<li><a href = "{{url('kohan_list')}}">こはんリスト</a></li>
			<li><a href = "{{url('story_list')}}">ストーリーリスト</a></li>

		</div>

		<br>

		<a href = "{{url('top')}}">とっぷへ</a>
		<a href = "{{url('map')}}">まっぷへ</a>
		
	</body>
	
</html>