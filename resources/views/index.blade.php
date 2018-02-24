<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>USER PROJECT ROLE ETC..</h1>
        <div class="row">            
            <div class="col-md-12">
                <h2>Projects</h2>
                @foreach ($projects as $project)
                    <div class"col-md-4">
                        {{$project->name}} 
                         <b>project users :</b>    
                         @foreach ($project->fullProjectUsersRoles as $pju)
                            <div class="col-md-6">
                                 {{$pju->user->email}} 
                                 ( 
                                     @foreach ($pju->projectUserRoles as $pjur)
                                         {{$pjur->role->name}} ,
                                     @endforeach
                                 )
                            </div>
                        @endforeach
                    
                    </div>
                @endforeach
            </div>     
        </div>    
    </div>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>