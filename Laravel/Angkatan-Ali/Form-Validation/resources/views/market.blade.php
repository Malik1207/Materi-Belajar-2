<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Market Validation</title>
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

            <form id="submit" action="{{route('market.input')}}" method="POST">
                @csrf
                @method('POST')
                <label for="name">Market Name</label>
                <br>
                <input type="text" placeholder="Market Name" name="name">
                <br>

                <br>
                <label for="owner">Market Owner</label>
                <br>
                <input type="text" placeholder="Market Owner" name="owner">
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
