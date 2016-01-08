<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>{{ Theme::place('title') }}</title>
        {{ Theme::partial('seostuff') }}    
        {{ Theme::partial('defaultcss') }}  

        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">

        {{ Theme::asset()->styles() }}  
        <noscript>
            {{generate_theme_css('meganeshop/assets/css/nojs.css')}}
        </noscript>
    </head>
    <body> 
        <div class="page">
            {{ Theme::partial('header') }}  
            {{ Theme::partial('slider') }}  
            <div class="img-ribbon">&nbsp;</div>
            <section id="main-content">
                {{ Theme::place('content') }}     
            </section>
            
            {{ Theme::partial('footer') }}  
        </div>
        {{ Theme::partial('defaultjs') }}   
        {{ Theme::partial('analytic') }}    
    </body>
</html>