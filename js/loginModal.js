/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//get modal
var modal = document.getElementById('loginId');
//specifying when user clicks outside modal it closes
window.onclick = function(event){
    if(event.target === modal){
        modal.style.display="none";
    }
};

