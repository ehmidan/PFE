
$(document).ready(function() {
    $("#sidebarCollapse").on('click', function() {
      $("#sidebar").toggleClass('active');
    });
  });

  function getSelectedValue (){
    var myList = document.querySelector("select");
    var value = myList.options[myList.selectedIndex].value;
    var array = value.split(".");
    var mark = array[0];
    var registration = array[1] ;
    
    document.getElementById("markk").value=mark;
    document.getElementById("regestration").value=registration;

  };



// var options = document.querySelectorAll("option");
// console.log(options);
// for (let i=0 ; i<options.length ; i++){
//   var array = options[i].text.split(".");
//   array[1]="";
//   options[i].text=array[0];

  
// }


