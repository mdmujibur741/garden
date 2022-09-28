<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
   


    <style>
    


    
   body{
                background: url({{public_path('123.jpg')}});
                background-position: center;
                background-repeat: no-repeat; 
                background-size: cover; 
              
                
               
   }

   .container-fluid{
                           width: 98%;
                           margin: auto
                         
                          
   }

   .title{
                 text-align: center;
                 padding: 1rem 1rem;
                 font-size: 2rem;
   }

   .paragraph{
                    text-align: justify !important;
                    color: #151514;
                    font-size: 1.6rem;
                    padding: 1rem 1rem;
   }

   @font-face {
        font-family: "Nikosh";
        font-weight: bold;
        src: url({{public_path('Nikosh.ttf')}}) format("truetype");
      }
   
    *{ font-family: Nikosh; font-size: 12px;}
   

    </style>
    </head>
    <body >
      
     

            <div class="container-fluid">
                 <h4 class="title"> {{$notice->title}} </h4>
                     <p class="paragraph">
                        {!!$notice->description!!}
                      </p>
             </div>
    </body>
    </html>