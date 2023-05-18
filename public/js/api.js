const request = new XMLHttpRequest();
request.open('GET', 'https://imdb-api.com/en/API/Images/k_k0sbqv1o/tt0137523/Short');

request.send();

//async

request.addEventListener('load', function() {
    const data =JSON.parse(this.responseText) ;
    console.log(typeof data);
    setMovieImg(data);                            
});

function setMovieImg(data){

    const html = `
        
    
    `;
    document.querySelector("#film.content").insertAdjacentHTML("beforeend", html)
}
