<html>
<head>
        <script src="{{ asset('js/libraries/p5.js')}}"></script>
        <script src="{{ asset('js/libraries/p5.dom.js')}}"></script>
        <script src="{{ asset('js/libraries/p5.sound.js')}}"></script>
        <script src="{{ asset('js/libraries/seriously.js')}}"></script>
        <script src="{{ asset('js/libraries/html2canvas.js')}}"></script>
        <script src="{{ asset('js/libraries/effects/seriously.blur.js')}}"></script>
        <script src="{{ asset('js/libraries/effects/seriously.chroma.js')}}"></script>


    <style>
        body{
            
            background-size:cover;
            background-repeat:no-repeat;
        }
        .p5canvas{
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
        <button onclick="save()" id="save">Save</button>

    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    <!--<canvas class="canvas" id="p5canvas">Not Supported</canvas>-->
    <div id="main">
        <div id="bg-holder">
            <li><a><img class="choice-img" id="img1" onclick="bg1()"  src="{{ asset('storage/bg/bg1.jpg') }}"></a></li>
            <li><a><img class="choice-img" id="img2" onclick="bg2()" src="{{ asset('storage/bg/bg2.jpg') }}"></a></li>
            <li><a><img class="choice-img" id="img3" onclick="bg3()" src="{{ asset('storage/bg/bg3.jpg') }}"></a></li>
            <li><a><img class="choice-img" id="img4" onclick="bg4()" src="{{ asset('storage/bg/bg4.jpg') }}"></a></li>
            <li><a><img class="choice-img" id="img5" onclick="bg5()" src="{{ asset('storage/bg/bg5.jpg') }}"></a></li>
            <li><a><img class="choice-img" id="img6" onclick="bg6()" src="{{ asset('storage/bg/bg6.jpg') }}"></a></li>
            <li><a><img class="choice-img" id="img7" onclick="bg7()" src="{{ asset('storage/bg/bg7.jpg') }}"></a></li>
            <li><a><img class="choice-img" id="img8" onclick="bg8()" src="{{ asset('storage/bg/bg8.jpg') }}"></a></li>
            <li><a><img class="choice-img" id="img9" onclick="bg9()" src="{{ asset('storage/bg/bg9.jpeg') }}"></a></li>
            <li><a><img class="choice-img" id="img10" onclick="bg10()" src="{{ asset('storage/bg/bg10.jpg') }}"></a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
        </div>
        <div id="canvas-holder">
            <canvas class="p5canvas" id="p5canvas"></canvas>
        </div>
        
    </div>
</body>
</html>

<script>

function bg1(){
    var ih="100%";
    var iw="80%";
   // document.getElementById('bg-holder').src='{{ asset('storage/profile/index.png') }}';
    document.getElementById('canvas-holder').style.backgroundImage = "url('{{ asset('storage/bg/bg1.jpg') }}')"
    document.getElementById('canvas-holder').style.backgroundRepeat = "no-repeat"
    document.getElementById('canvas-holder').style.backgroundSize = "cover"
}
function bg2(){
    var ih="100%";
    var iw="80%";
   // document.getElementById('bg-holder').src='{{ asset('storage/profile/index.png') }}';
    document.getElementById('canvas-holder').style.backgroundImage = "url('{{ asset('storage/bg/bg2.jpg') }}')"
    document.getElementById('canvas-holder').style.backgroundRepeat = "no-repeat"
    document.getElementById('canvas-holder').style.backgroundSize = "cover"
}
function bg3(){
    var ih="100%";
    var iw="80%";
   // document.getElementById('bg-holder').src='{{ asset('storage/profile/index.png') }}';
    document.getElementById('canvas-holder').style.backgroundImage = "url('{{ asset('storage/bg/bg3.jpg') }}')"
    document.getElementById('canvas-holder').style.backgroundRepeat = "no-repeat"
    document.getElementById('canvas-holder').style.backgroundSize = "cover"
}
function bg4(){
    var ih="100%";
    var iw="80%";
   // document.getElementById('bg-holder').src='{{ asset('storage/profile/index.png') }}';
    document.getElementById('canvas-holder').style.backgroundImage = "url('{{ asset('storage/bg/bg4.jpg') }}')"
    document.getElementById('canvas-holder').style.backgroundRepeat = "no-repeat"
    document.getElementById('canvas-holder').style.backgroundSize = "cover"
}
function bg5(){
    var ih="100%";
    var iw="80%";
   // document.getElementById('bg-holder').src='{{ asset('storage/profile/index.png') }}';
    document.getElementById('canvas-holder').style.backgroundImage = "url('{{ asset('storage/bg/bg5.jpg') }}')"
    document.getElementById('canvas-holder').style.backgroundRepeat = "no-repeat"
    document.getElementById('canvas-holder').style.backgroundSize = "cover"
}
function bg6(){
    var ih="100%";
    var iw="80%";
   // document.getElementById('bg-holder').src='{{ asset('storage/profile/index.png') }}';
    document.getElementById('canvas-holder').style.backgroundImage = "url('{{ asset('storage/bg/bg6.jpg') }}')"
    document.getElementById('canvas-holder').style.backgroundRepeat = "no-repeat"
    document.getElementById('canvas-holder').style.backgroundSize = "cover"
}
function bg7(){
    var ih="100%";
    var iw="80%";
   // document.getElementById('bg-holder').src='{{ asset('storage/profile/index.png') }}';
    document.getElementById('canvas-holder').style.backgroundImage = "url('{{ asset('storage/bg/bg7.jpg') }}')"
    document.getElementById('canvas-holder').style.backgroundRepeat = "no-repeat"
    document.getElementById('canvas-holder').style.backgroundSize = "cover"
}
function bg8(){
    var ih="100%";
    var iw="80%";
   // document.getElementById('bg-holder').src='{{ asset('storage/profile/index.png') }}';
    document.getElementById('canvas-holder').style.backgroundImage = "url('{{ asset('storage/bg/bg8.jpg') }}')"
    document.getElementById('canvas-holder').style.backgroundRepeat = "no-repeat"
    document.getElementById('canvas-holder').style.backgroundSize = "cover"
}
function bg9(){
    var ih="100%";
    var iw="80%";
   // document.getElementById('bg-holder').src='{{ asset('storage/profile/index.png') }}';
    document.getElementById('canvas-holder').style.backgroundImage = "url('{{ asset('storage/bg/bg9.jpeg') }}')"
    document.getElementById('canvas-holder').style.backgroundRepeat = "no-repeat"
    document.getElementById('canvas-holder').style.backgroundSize = "cover"
}
function bg10(){
    var ih="100%";
    var iw="80%";
   // document.getElementById('bg-holder').src='{{ asset('storage/profile/index.png') }}';
    document.getElementById('canvas-holder').style.backgroundImage = "url('{{ asset('storage/bg/bg10.jpg') }}')"
    document.getElementById('canvas-holder').style.backgroundRepeat = "no-repeat"
    document.getElementById('canvas-holder').style.backgroundSize = "cover"
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
        //canvas=createCanvas(cw, ch, WEBGL);
        //bg = loadImage("{{ asset('storage/bg.jpg') }}");
        canvas=document.getElementById('p5canvas', WEBGL);
        //canvas.parent('canvas-holder');
        //canvas=canvas.id('p5canvas');
       //canvas.size(cw,ch);
        //canvas.background('blue');
     //background('{{ asset('storage/bg.jpg') }}');
        video=createCapture(VIDEO);
        //video.size(cw,ch);
        //video.parent('canvas-holder');
        video.id('p5video');
        //video.hide();

        //slider = createSlider(0, 1, 0.5, 0.01);
        //slider.id('blur-slider');

        var seriously = new Seriously();

        var src = seriously.source('#p5video');
        
        var target = seriously.target('#p5canvas',WEBGL);
        
       
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
        //image(target, 0, 0);

    }

     function save() {
          var image = document.getElementById("p5canvas");
          //var context = image.getContext("2d");
          
          // no argument defaults to image/png; image/jpeg, etc also work on some
          // implementations -- image/png is the only one that must be supported per spec.
          var capture = image.toDataURL("image/png");
          document.write('<img src="'+capture+'"/>');
      }

      

</script>