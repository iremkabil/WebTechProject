const request2 = new XMLHttpRequest();
request2.open('GET', 'https://imdb-api.com/en/API/SearchSeries/k_k0sbqv1o/friends');

request2.send();

request2.addEventListener('load',function() {
    const data2 = JSON.parse(this.responseText);
    console.log(data2);
    console.log(typeof data2);
    setSeries(data2);
    
});
function setSeries(data2) {
    const html = `
        <div class="card" style="width: 18rem;">
            <img src="${data2.results[0].image}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">${data2.results[0].title}</h5>
                <p>${data2.results[0].description}</p>
                
            </div>
        </div>
    `;
    document.querySelector(".series-card").insertAdjacentHTML("beforeend",html);
}



