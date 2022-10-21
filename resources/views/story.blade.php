<!DOCTYPE html>
<html lang="ja">
<html>

	<head>
	
		<meta charset="UTF-8">
		<link rel="stylesheet" href="{{asset('css/story.css')}}">
		<title>ストーリー</title>
		
	</head>


	<body>

		<div class = "textbox">
			<p class = "text">ここでストーリーが展開されるよ</p>
			<a href = "{{url('kohan_get')}}">条件分岐成功</a>
			<a href = "{{url('map')}}">条件分岐失敗</a>
		</div>

		<br>
		<a href = "{{url('story_list')}}">ストーリーリストから来た場合は終わったらここへ飛ぶ</a>

		<!-- MAPから来た場合と、ストーリーリストから来た場合でhtml分けた方が良いのだろうか？ -->
		
	</body>
	
</html>