const request3 = new XMLHttpRequest();
request3.open('GET', 'https://www.googleapis.com/books/v1/volumes/s1gVAAAAYAAJ');

request3.send();

request3.addEventListener('load',function() {
    const data3 = JSON.parse(this.responseText);
    console.log(data3);
    console.log(typeof data3);
    setBook(data3);
    
});
function setBook(data3) {
    const html = `
        <div class="card" style="width: 70%;">
            <img src="${data3.volumeInfo.imageLinks.thumbnail}" class="card-img-top my-4" style="width:20%; margin:auto;" >
            <div class="card-body">
                <h5 class="card-title">${data3.volumeInfo.title}</h5>
                <h5 class="card-title">${data3.volumeInfo.authors}  |  ${data3.volumeInfo.publishedDate} </h5>
                <p>${data3.volumeInfo.description}</p>
                
            </div>
        </div>
    `;
    document.querySelector(".books-card").insertAdjacentHTML("beforeend",html);
}



