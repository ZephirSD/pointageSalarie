let popUpWallpaper = document.querySelector('.pop-up-wallpaper');
let iframePDF = document.querySelector('.iframePDF');

function clickPDF(url_pdf){
    popUpWallpaper.classList.add('active');
    iframePDF.setAttribute('src','../../pdf/' + url_pdf);
}

function closePDF(){
    popUpWallpaper.classList.remove('active');
    iframePDF.removeAttribute('src');
}