<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @if(!empty($title))
            {{ $title }}
            @else
            {{ 'Quick Profile' }}
            @endif
        </title>

        <!-- ========== COMMON STYLES ========== -->       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
<body class="top-navbar-fixed">