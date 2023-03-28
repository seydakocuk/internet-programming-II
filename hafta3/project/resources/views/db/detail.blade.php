<h1 style="color: #2d3748">{{$newsDetail->title}}</h1>
<p style="text-decoration: underline; color:#0c5460;">{{$newsDetail->summary}}</p>
<p>{{$newsDetail->content}}</p>

<a href="/db/delete/{{$newsDetail->id}}" style="color:red;">Haberi Sil</a>
