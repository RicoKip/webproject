
//get modal
var modal = document.getElementById('loginId');
//specifying when user clicks outside modal it closes
window.onclick = function(event){
    if(event.target === modal){
        modal.style.display="none";
    }
};

