<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-primi-passi</title>
</head>
<style>
    h1,
    h2,
    h3 {
        text-align: center;
    }

    .studenti {
        display: flex;
        justify-content: center;
    }

    .studente {
        margin: 2rem;
    }
</style>

<body>
    <h1>Hello World</h1>
    <h2>{{$title}}</h2>
    <h3>{{$subtitle}}</h3>
    <div class="studenti">
        @foreach($students as $student)
        <h4 class="studente">{{$student}}</h4>
        @endforeach

    </div>
</body>

</html>
