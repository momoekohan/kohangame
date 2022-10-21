<!DOCTYPE html>
<html lang="ja">
<html>

	<head>
	
		<meta charset="UTF-8">
		<link rel="stylesheet" href="{{asset('css/map.css')}}">
		<title>まっぷ</title>
		
	</head>


	<body>
	
		<h1 class = "maintitle">飛び散ったこはんを探そう！</h1><br>
		<h2 class = "question">どこを探す？</h2>
		
		<div class = "menu">

				<a href = "{{url('story')}}">自宅</a>
				<a href = "{{url('story')}}">会社</a>

		</div>
		
		<div class = "list">

			<a href = "{{url('kohan_list')}}">こはんリスト</a>
			<a href = "{{url('story_list')}}">ストーリーリスト</a>

		</div>

	</body>
	
</html>