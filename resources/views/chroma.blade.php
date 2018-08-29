<html>
<head>
        <script src="{{ asset('js/libraries/p5.js')}}"></script>
        <script src="{{ asset('js/libraries/p5.dom.js')}}"></script>
        <script src="{{ asset('js/libraries/p5.sound.js')}}"></script>
        <script src="{{ asset('js/libraries/seriously.js')}}"></script>
        <script src="{{ asset('js/libraries/effects/seriously.blur.js')}}"></script>
        <script src="{{ asset('js/libraries/effects/seriously.chroma.js')}}"></script>


    <style>
        body{
            
            background-size:cover;
            background-repeat:no-repeat;
        }
        .canvas{
            height:100%;
            width:100%
        }
        #bg-holder{
            background-color: #333;
            overflow: auto;
            float:left;
           
            height:100%;
            width:20%;
        }
        #canvas-holder{
            float:left;
            background-image:url('{{ asset('storage/bg.jpg') }}');
            height:100%;
            width:80%;
        }
        #nav{
           
            
            width:100%;
            height:10%;
        }

        /*#bg-holder a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        }*/
        #bg-holder a:hover {
            background-color: #777;
        }

        #main{
            width:100%;
            height:90%;
        }

        .choice-img{
            height:100px;
            width:80%;     
            cursor:pointer;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        }

        body.newbg {
            background-image:url('{{ asset('storage/bg.jpg') }}');
        }

    </style>
</head>
<body>
    <div id="nav">

    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    <!--<canvas class="canvas" id="p5canvas">Not Supported</canvas>-->
    <div id="main">
        <div id="bg-holder">
            <li><img class="choice-img" id="img" onclick="changeImage(1)" src="{{ asset('storage/bg.jpg') }}"></li>
            <li><a><img class="choice-img" id="img" onclick="changeImage(2)" src="{{ asset('storage/profile/index.png') }}"></a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
        </div>
        <div id="canvas-holder">

        </div>
        
    </div>
</body>
</html>

<script>

function changeImage(){
    document.getElementById('bg-holder').src='img';
}

    var video;
    var canvas;
    var slider;
    var cv;
    var canvasDiv = document.getElementById('canvas-holder');
    var cw=canvasDiv.offsetWidth;
    var ch=canvasDiv.offsetHeight
    //var bg = loadImage('{{ asset('storage/bg.jpg') }}');

    function setup(){
        
        //canvas=createCanvas(windowWidth, windowHeight, WEBGL);
        canvas=createCanvas(cw, ch, WEBGL);
        //bg = loadImage("{{ asset('storage/bg.jpg') }}");
        
        canvas.parent('canvas-holder');
        canvas=canvas.id('p5canvas');
       //canvas.size(cw,ch);

     //background('{{ asset('storage/bg.jpg') }}');
        video=createCapture(VIDEO);
        video.size(windowWidth,500);
        video.id('p5video');
        video.hide();

        //slider = createSlider(0, 1, 0.5, 0.01);
        //slider.id('blur-slider');

        var seriously = new Seriously();

        var src = seriously.source('#p5video');
        var target = seriously.target('#p5canvas', WEBGL);
       
        /*var blur = seriously.effect('blur');
        blur.amount = '#blur-slider';
        blur.source = src;
        target.source= blur;
        */
        var chroma = seriously.effect('chroma');
        chroma.source = src;
        target.source = chroma;
        

        //var r = 98/255;
        //var g = 175/255;
        //var b = 116/255;
        //chroma.screen=[r,g,b,1];

        seriously.go();
    }
    function windowResized() {
        //resizeCanvas(windowWidth, windowHeight);
    }
    function draw() {
        //background(51);
    }
</script>