

//scroll fixe bottom

document.getElementsByClassName('scroll')[0].scrollTop = document.getElementsByClassName('scroll')[0].scrollHeight;

//auto refresh


$(document).ready(function(){
    
    setInterval(function(){
          $("#chatbox").load(window.location.href + " #chatbox" );
    }, 3000);

    setInterval(function(){
        document.getElementsByClassName('scroll')[0].scrollTop = document.getElementsByClassName('scroll')[0].scrollHeight;
    }, 3010);


        setInterval(function(){
          $("#chatbox").load(window.location.href + " #chatbox" );
    }, 3000);

    });

//pop up

// Get the popup
let popup = document.getElementById("myPopup");

// Get the button that opens the popup
let btn = document.getElementsByClassName("myBtn");

//Get the content of the popup
let popuser = document.getElementById("popupuser")

// Get the <span> element that closes the popup
let span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the popup
    for (let i = 0; i < btn.length; i++) {
        btn[i].addEventListener('click', function() {
            let user2 = this.textContent;
            popup.style.display = "block";
            popuser.textContent = user2
            document.cookie = "user2="+user2;
            })
        }

// When the user clicks on <span> (x), close the pop
span.addEventListener('click', function() {
  popup.style.display = "none";
  
})

// When the user clicks anywhere outside of the pop, close it
window.addEventListener('click', function(event) {
  if (event.target == popup) {
    popup.style.display = "none";
    
  }
}) 

$('.close').click(function() {
  location.reload();
});



/*let form = document.getElementById("privatechat")
let privatemessage = document.getElementById('privatemessage');
form.addEventListener('submit', function(e) {
    //e.preventDefault();
    let user2 = popuser.textContent;
    let content = privatemessage.value;
    


})*/

