function open_menu(){
    const menu = document.querySelector('.menu');
    if (menu.style.display != "block") { 
        menu.style.display = "block"; 
    }else{
        menu.style.display = "none";
    }
}