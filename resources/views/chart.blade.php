<!DOCTYPE html>
<html>
<head>
    <title>Laravel ApexCharts</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <chart-component :sales-data="{{ json_encode($sales) }}"></chart-component>
    </div>
</body>
</html>
