<html>
<body id="x">


    @for($i=1;$i<=5;$i++)
        <h1 style="color:grey" onclick="count(this)" id="{{ $i }}">{{ $i }}</h1>
    @endfor
    <button onclick="clears()">Clear</button>
</body>

<script>
    
var y = document.getElementById('x');   
var a1 = "black";
var a2 = "blue";
var a3 = "red";
var a4 = "green";
var a5 = "yellow";

    function count(elem){
        
        
        var a, id = elem.id;
        var contain = "a".concat(id);
        
        if(contain == 'a1'){
           // console.log(a1)
           y.style.backgroundColor = a1;
        }
        else if(contain == 'a2'){
           // console.log(a2)
           y.style.backgroundColor = a2;
        }
        else if(contain == 'a3'){
           // console.log(a2)
           y.style.backgroundColor = a3;
        }
        else if(contain == 'a4'){
           // console.log(a2)
           y.style.backgroundColor = a4;
        }
        else if(contain == 'a5'){
           // console.log(a2)
           y.style.backgroundColor = a5;
        }

        //window["a"+id] = contain;
        
        //alert(a1);
        //y.style.backgroundColor = a2
      
        
        //console.log(elem.id);
        //var one = "a".concat(elem.id);
        //var res = one;
        //eval('var '+res);
        //alert(res);
        //alert(one);
        
        //y.style.backgroundColor = res;
        
        //alert(y.style.backgroundColor);
        
    }

    function clears(){
        
        y.style.backgroundColor = 'white';
    }
    
</script>
</html>