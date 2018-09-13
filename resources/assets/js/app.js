
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('./animation');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

$('.slider').glide({
    autoplay: false,
    arrowsWrapperClass: 'slider-arrows',
    arrowRightText: '',
    arrowLeftText: ''
  });

  $('#toggle').click(function(){
    $('.ui.sidebar').sidebar('toggle');
  });

var red = [0, 100, 63];
var orange = [40, 100, 60];
var green = [75, 100, 40];
var blue = [196, 77, 55];
var purple = [280, 50, 60];

var myName = "MEHROSH";
letterColors = [red, orange, green];
bubbleShape = "circle";


drawName(myName, letterColors);
bounceBubbles();



$('.ui.modal')
.modal('show')
;
//Get modal element
var modal = document.getElementById('simpleModal');
//Get open modal
var modalBtn = document.getElementById('modalBtn');
//Get close button
var closeBtn = document.getElementByClassName('closeBtn')[0];

//Listen for open click
modalBtn.addEventListener('click',openModal);
//Listen for close click
closeBtn.addEventListener('click',closeModal);

//Function to open modal
function openModal(){
  //modal.style.display = 'block';
  console.log("hello");
}

//function to close modal
function closeModal(){
  modal.style.display = 'none';
}




