<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
 
  
<div id="app">
<vue-layout></vue-layout>
<router-view></router-view>
<!-- <showuser-component></showuser-component> -->
<!-- <input-form></input-form> -->

        <!-- <v-header></v-header> -->
        <!-- <router-view></router-view> -->
        
      
</div>
  

    <script type="application/javascript" src="{{ asset('js/app.js') }}"></script>
</body>

</html>