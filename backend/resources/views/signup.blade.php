<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @php
    phpinfo();
@endphp --}}
    <form action="/cus/add" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <input type="text" name="user_name">
    <input type="password" name="password">
    <input type="email" name="email">
    <input type="text" name="phone">
    <input type="text" name="fullname">
    <input type="text" name="address">
    <input type="text" name="permission">
    <input type="text" name="birthday">
    <button type="submit">sunmit</button>
</form>
</body>
</html>
