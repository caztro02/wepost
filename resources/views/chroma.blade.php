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
            background-color: #ecf0f1;
            background-size:cover;
            background-repeat:no-repeat;
        }
        #p5canvas{
            background-size:cover;
            background-repeat: no-repeat;
        }
        #bg-holder{
            background-color: #ecf0f1;
            float:left;
            height:100%;
            width:20%;
        }
        #canvas-holder{
            background-size:cover;
            float:left;
            height:100%;
            width:80%;
        }
        #content{
            height:100%;
            width:100%;
            overflow-x: auto;
        }
        .scroll{
            height:10%;
            width:100%;
        }
        #nav{
            padding:0;
            width:100%;
            height:10%;
        }
        #ss{
            margin:0;
            height:100%;
            width:100%;
            background-color: #1abc9c;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }
        #ss:hover{
            background-color:#16a085;
        }
        #main{
            width:100%;
            height:90%;
        }
        .choice-img{
            height:100px;
            width:100%;     
            cursor:pointer; 
            border-top-style:solid;
            border-bottom-style:solid;
            border-color:transparent;
        }
        .choice-img:hover{
            border-top-style:solid;
            border-bottom-style:solid;
            border-color:#1abc9c;
        }
        body.newbg {
            background-image:url('{{ asset('storage/bg.jpg') }}');
        }
        #defaultCanvas0{
            display:none;
        }
        #bg-holder li{
            list-style-type:none;
        }
     

    </style>
</head>
<body>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        

    <div id="main">
        <div id="bg-holder">
            <!--<input type="button" class="scroll" value="Up" id="scrollUp" />-->
            <div id="content">
            @for($loop=1;$loop<=10;$loop++)
                <li><a><img class="choice-img" id="img{{$loop}}" onclick="bg(this)" name="bg{{$loop}}.jpg" src="{{ asset('storage/bg/bg'.$loop.'.jpg') }}"></a></li>
            @endfor
            </div>
            <!--<input type="button" class="scroll" value="Down" id="scrollDown" />   -->                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        </div>
    <!--Div for Canvas where the video is being shown-->
        <div id="canvas-holder">
            
            <!--<canvas class="p5canvas" id="p5canvas"></canvas>-->
        </div>
    <!--End of div-->   
    </div>
    <div id="nav">
        <button onclick="start()" id="ss">Capture</button>
    </div>  
</body>
</html>

<script>


//function for using chroma key
    

    function setup(){

        var canvas;
        var video;
        
        var canvasDiv = document.getElementById('canvas-holder');
        var cw=canvasDiv.offsetWidth;
        var ch=canvasDiv.offsetHeight
        //canvas = document.getElementById('p5canvas');
        canvas=createCanvas(cw, ch, WEBGL);
        canvas.parent('canvas-holder');
        canvas.id('p5canvas');
        //canvas.className('p5canvas');

        canvas.size(cw, ch);
        
        video=createCapture(VIDEO);
        video.id('p5video');
        video.size(cw, ch);
        pixelDensity(.6);
        video.hide();

        var seriously = new Seriously();

            var src = seriously.source('#p5video');
            var target = seriously.target('#p5canvas',cw, ch);
            
            //target.size(cw, ch);
     
            var chroma = seriously.effect('chroma');
            chroma.source = src;
            target.source = chroma;
            //target.scale(1,2);
        
        seriously.go();
    }
var bgDiv = document.getElementById('canvas-holder');

function bg(element){

    var id = element.id;
    var choice = element.name;
    var ch = "storage/bg/";
    var bgimg = ch.concat(choice);

    bgDiv.style.backgroundImage = 'url('+bgimg+')';
    

}

function ss(){
/*
var text = "";
var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

for (var i = 0; i < 10; i++){
    text += possible.charAt(Math.floor(Math.random() * possible.length));
}
*/
html2canvas(document.getElementById('canvas-holder')).then(function(canvas) {
    // Export the canvas to its data URI representation
    var base64image = canvas.toDataURL("image/png");
    //var a = document.createElement('a');
    //toDataURL defaults to png, so we need to request a jpeg, then convert for file download.
    //var base64image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
    //a.download = 'iiii.jpg';
        //location.href = base64image;
        
    // Open the image in a new window
    window.open(base64image , "_blank");
});
}

var counter = 1;
var intervalId = null;
function finish() {
    counter = 1;
    clearInterval(intervalId);
    document.getElementById("ss").innerHTML = "Capture";
    ss();	
}
function bip() {
    if(counter == 0){
        
        finish();
    }
    else {
        document.getElementById("ss").innerHTML = counter;
    }
    counter--;
}
function start() {  intervalId = setInterval(bip, 1000);
}	

</script>