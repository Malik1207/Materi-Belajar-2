<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>School Validation</title>
    </head>
    <body>
        <section>
            @if ($errors->any())
            <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </div>
            @endif

            <form id="submit" action="{{route('school.input')}}" method="POST">
                @csrf
                @method('POST')
                <label for="name">School Name</label>
                <br>
                <input type="text" placeholder="School Name" name="name">
                <br>

                <br>
                <label for="head">Head Office</label>
                <br>
                <input type="text" placeholder="Head Office" name="head">
                <br>

                <br>
                <label for="build">Build Date</label>
                <br>
                <input type="date" placeholder="Build Date" name="build">
                <br>

                <br>
                <label for="address">Address</label>
                <br>
                <textarea name="address"></textarea>
                <br>
            </form>
            <br>
            <button for="submit" form="submit">Submit</button>
        </section>

    </body>
</html>
