   <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />



  <style >
  @import url(https://fonts.googleapis.com/css?family=Raleway:700);

$color1: #ff3196;
$color2: #342643;
$color3: #1FA9D6;

*, *:before, *:after {
  box-sizing: border-box;
}
html {
    height: 100%;
}
body {
    background-color:#14d69d; 
    background-size: cover;
    font-family: 'Raleway', sans-serif;
    background-color: #14d69d; 
    height: 100%;
}

.text-wrapper {
    height: 100%;
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
}

.title {
    font-size: 6em;
    font-weight: 700;
    color: #cc0668;
}

.subtitle {
    font-size: 40px;
    font-weight: 700;
    color: #cc0668;
}

.buttons {
    margin: 30px;
    
    a.button {
        font-weight: 700;
        border: 2px solid #cc0668;
        text-decoration: none;
        padding: 15px;
        text-transform: uppercase;
        color: #cc0668;
        border-radius: 26px;
        transition: all 0.2s ease-in-out;
        
        &:hover {
            background-color: #52052b;
            color: white;
            transition: all 0.2s ease-in-out;
        }
    }

    
}	
  </style>



<div class="text-wrapper">
    <div class="title" data-content="404">
        404
    </div>

    <div class="subtitle">
        Oops, the page you're looking for doesn't exist.
    </div>

    <div class="button">
        <a class="button" href="{{ url('/') }}">Go To Homepage</a>
    </div>
</div>