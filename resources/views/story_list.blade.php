<!DOCTYPE html>
<html lang="ja">
<html>

	<head>
	
		<meta charset="UTF-8">
		<link rel="stylesheet" href="{{asset('css/story_list.css')}}">
		<title>ストーリーリスト</title>
		
	</head>


	<body>
	
		<p class = "maintitle">ストーリーリスト</p>

		<br>
		
		<ul class = "list">

			<li><a href = "{{url('story')}}">ストーリー１</a></li>
			<li><a href = "{{url('story')}}">ストーリー２</a></li>

		</ul>

		<br>

		<a href = "{{url('top')}}">とっぷへ</a>
		<a href = "{{url('map')}}">まっぷへ</a>
		
	</body>
	
</html>