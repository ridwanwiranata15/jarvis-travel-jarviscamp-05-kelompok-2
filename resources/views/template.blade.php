<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/index-bandara.css">
    <link rel="stylesheet" href="../css/pesawat_admin.css">
    <link rel="stylesheet" href="../css/remixicon.css">
    <title>@yield('title')</title>
</head>
<body>
   @include('partials.left-section')
    <div class="main">
        <div class="header">
            <div class="search">
                <button>Search</button>
                <input type="text" placeholder="" placeholder="Search">
            </div>
        </div>
        @yield('seperator')
        @yield('table')
        
        @yield('modal-add')
        @yield('modal-edit')
    </div>
<script src="../js/index-bandara.js"></script>
<script src="../js/pesawat-admin.js"></script>
</body>
</html>