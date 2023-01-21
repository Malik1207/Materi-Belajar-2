<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home Validation</title>
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

            <form id="submit" action="{{route('store')}}" method="POST">
                @csrf
                @method('POST')
                <label for="name">Nama</label>
                <br>
                <input type="text" placeholder="Name" name="name">
                <br>

                <br>
                <label for="nisn">NISN</label>
                <br>
                <input type="number" placeholder="NISN" name="nisn">
                <br>

                <br>
                <label for="tempat-lahir">Tempat Lahir</label>
                <br>
                <input type="text" placeholder="Tempat Lahir" name="tempat-lahir">
                <br>

                <br>
                <textarea name="alamat"></textarea>
                <br>

                <br>
                <label for="umur">Umur</label>
                <br>
                <input type="number" placeholder="umur" name="umur">
                <br>

                <br>
                <label for="password">Password</label>
                <br>
                <input type="password" placeholder="Password" name="password">
                <br>
            </form>
            <br>
            <button for="submit" form="submit">masukkan</button>
        </section>

    </body>
</html>
