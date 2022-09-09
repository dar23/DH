let container_search=document.querySelector('.search');
let main_info=document.querySelector('.main_info');




container_search.addEventListener('click',search_open,false);
container_search.addEventListener('mouseleave',search_close,false);




function search_open(){

    let input_search=document.querySelector('.input_search');
    let loopa=document.querySelector('.loop');

            if(input_search.style.width="35px"){

                input_search.style.color="white";
              
                input_search.style.width="400px";
                loopa.style.display="none";
             
        


            }




}

function search_close(){

    let input_search=document.querySelector('.input_search');
    let loopa=document.querySelector('.loop');

    if(input_search.style.width="400"){

        input_search.style.color= "rgb(109,109,109)";
        input_search.style.width="35px";
        loopa.style.display="block";
   
        
    }




}