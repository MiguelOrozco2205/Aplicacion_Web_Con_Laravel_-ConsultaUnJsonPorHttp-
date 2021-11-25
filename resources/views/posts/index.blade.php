<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/app.css">
	<title>Tabla JSON</title>
</head>
<body>
	
		<h1>Consultar Por Http el JSON.</h1>
		
		<table border="1">
          
                <tr>
                    
                <th>userId</th>
                <th>id</th>
                <th>title</th>
                <th>body</th>
                </tr>
              

          <tbody>
              @foreach($posts as $post)
			    <tr>
                    
			      <td>{{$post->userId}}</td>
			      <td>{{$post->id}}</td>
			      <td>{{$post->title}}</td>
			      <td>{{$post->body}}</td>

			    </tr>
		  </tbody>
		  @endforeach
					 
		</table>				
		
</body>
</html>