let container_search=document.querySelector('.search');
let main_info=document.querySelector('.main_info');




container_search.addEventListener('click',search_open,false);
container_search.addEventListener('mouseleave',search_close,false);




function search_open(){

    let input_search=document.querySelector('.input_search');
  

            if(input_search.style.width="0"){

                input_search.style.width="400px";
                

            }

}

function search_close(){

    let input_search=document.querySelector('.input_search');


    if(input_search.style.width="400"){

        input_search.style.width="35px";


    }




}