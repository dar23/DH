
const videos= document.querySelectorAll('.video_container>.video_list');
//zmienna zawiera wszystkie elementy (video bez kontrolek) listy z filmami


videos.forEach(e=>{

e.addEventListener('click', ()=>{ // każdy element listy kliknięty wykona kod zawarty w klamrze

    const place_player=document.querySelector('.video_player');
   
    const  video_source=e.querySelector('source').src;  // zmienna pobierająca ścieżkę klikniętego filmiku :) 
   

 place_player.innerHTML= "<video controls><source src='' type='video/mp4'></video>";

//źle to jest :-(
 
});



});

