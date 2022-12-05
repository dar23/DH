
const videos= document.querySelectorAll('.video_container>.video_list');
//zmienna zawiera wszystkie elementy (video bez kontrolek) listy z filmami
const place_player=document.querySelector('.video_player');

videos.forEach(e=>{

e.addEventListener('click', ()=>{ // każdy element listy kliknięty wykona kod zawarty w klamrze


   
    const  video_source=e.querySelector('source').src;  // zmienna pobierająca ścieżkę klikniętego filmiku :) 
   

 place_player.innerHTML= `<video controls class="video_player"><source src='${video_source}' type="video/mp4"></video>`;


 place_player.load();

});



});

