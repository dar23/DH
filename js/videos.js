
const videos= document.querySelectorAll('.video_container>.video_list');
//zmienna zawiera wszystkie elementy (video bez kontrolek) listy z filmami






videos.forEach(e=>{

e.addEventListener('click', ()=>{ // każdy element listy kliknięty wykona kod zawarty w klamrze


    const  videosource=e.querySelector('source').src;  // zmienna pobierająca ścieżkę klikniętego filmika :) 
 


 
});



});

