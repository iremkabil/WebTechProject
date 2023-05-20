const request1 = new XMLHttpRequest();
request1.open('GET', 'https://imdb-api.com/en/API/SearchMovie/k_k0sbqv1o/Fight%20Club');

request1.send();

request1.addEventListener('load',function() {
    const data = JSON.parse(this.responseText);
    console.log(data);
    console.log(typeof data);
    setMovie(data);
    
});
function setMovie(data) {
    const html = `
        <div class="card" style="width: 18rem;">
            <img src="${data.results[0].image}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">${data.results[0].title}</h5>
                <p>${data.results[0].description}</p>
                
            </div>
        </div>
    `;
    document.querySelector(".movie-card").insertAdjacentHTML("beforeend",html);
}



