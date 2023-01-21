<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Teacher Validation</title>
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

            <form id="submit" action="{{route('teacher.input')}}" method="POST">
                @csrf
                @method('POST')
                <label for="name">Teacher Name</label>
                <br>
                <input type="text" placeholder="School Name" name="name">
                <br>

                <br>
                <label for="birth">Date of Birth</label>
                <br>
                <input type="date" placeholder="Date of Birth" name="birth">
                <br>

                <br>
                <label for="address">Address</label>
                <br>
                <textarea name="address"></textarea>
                <br>

                <br>
                <label for="phone">Phone</label>
                <br>
                <input type="number" placeholder="Head Office" name="phone">
                <br>

                <br>
                <label for="subject">Subject</label>
                <br>
                <input type="text" placeholder="Subject" name="subject">
                <br>
            </form>
            <br>
            <button for="submit" form="submit">Submit</button>
        </section>

    </body>
</html>
