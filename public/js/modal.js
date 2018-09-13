//alert('yow');

var modal = document.getElementById('simpleModal');
//Get open modal
var comment = document.getElementById('click');
//Get close button
var closeBtn = document.getElementById('closeBtn');

//Listen for open click
comment.addEventListener('click',openModal);
//Listen for close click
closeBtn.addEventListener('click',closeModal);

//Function to open modal
function openModal(){
  //alert("yow");
  modal.style.display = 'block';
  //console.log("hello");
 // document.write('yow');
}
//Listener for outside click
window.addEventListener('click',outsideClick)

//function to close modal
function closeModal(){
  modal.style.display = 'none';
}

//function to close modal if outside click
function outsideClick(e){
  if(e.target == modal){
    modal.style.display ='none';  
  }
 }