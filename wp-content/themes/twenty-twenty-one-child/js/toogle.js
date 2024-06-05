

jQuery(document).ready(function(){

jQuery(".hamburger").click(function(){
  jQuery(".menu_navbar_set").toggleClass("is-active");
  jQuery(this).toggleClass("is-active");
});
});