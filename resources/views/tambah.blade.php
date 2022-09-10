<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <form action="/barang/add" method="post">
          {{ csrf_field() }}
          Kode Barang <input type="text" name="kode_barang" value="" maxlength="10"><br>
          Nama Barang <input type="text" name="nama_barang" value=""><br>
          <input type="submit" value="ADD">
        </form>
    </body>
</html>
