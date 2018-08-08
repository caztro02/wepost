<html>
    <head>
    <title>Camera</title>

    <script src="resources/assets/js/libraries/p5.js"></script>
    <script src="resources/assets/js/libraries/p5.dom.js"></script>
    <script src="resources/assets/js/libraries/p5.sound.js"></script>
    <script src="resources/assets/js/libraries/seriously.js"></script>
    <script src="resources/assets/js/libraries/effects/seriously.blur.js"></script>

    </head>
    <body>
        <div style="float:left;">
        <video id="video"></video><br>
        </div>
        <div style="float:right;">
        <canvas id="canvas">/</canvas><br>
        </div>
        <button onclick="snap();">Capture</button>
        
        <script type="text/javascript">
            var video=document.getElementById('video');
            var canvas=document.getElementById('canvas');
            var context=canvas.getContext('2d');

            navigator.getUserMedia = (navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia ||
            navigator.oGetUserMedia || navigator.msGetUserMedia);

            if(navigator.getUserMedia){
                navigator.getUserMedia({video:true}, streamWebCam, throwError);
            }
            else if (!navigator.getMedia) {
    displayErrorMessage("Your browser doesn't have support for the navigator.getUserMedia interface.");
}

            function streamWebCam(stream) {
                video.src = window.URL.createObjectURL(stream);
                video.play();
            }

            function throwError(e) {
                alert(e.name);
            }

            function snap(){
                canvas.width=video.clientWidth;
                canvas.height=video.clientHeight;
                context.drawImage(video, 0, 0);
            }

        </script>
    </body>
</html>