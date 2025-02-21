<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{--sistem blade tidak usah menggunakan syntax php lagi  --}}
    <h2>List Mahasiswa kelas {{$kelas}} IS62</h2>
    <ol>
    @foreach ($data as $nama)
        <li>{{$nama}}</li>
    @endforeach
    </ol>





    {{-- <h2>List Mahasiswa kelas<?php echo $kelas ?> IS62</h2>
    <ol>
    <?php
    foreach ($data as $nama) {
        echo "<li>$nama</li>";
    }
    ?>
    </ol> --}}
    {{-- <ol>
         <li>Khalifah</li>
         <li>Herdio</li>
        <li>Cutputri</li>
        <li>Sri</li>
         <li>Iwan</li>
    </ol> --}}
</body>
</html>