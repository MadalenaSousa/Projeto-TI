//Loja

artigos();
artigoDetail();

function artigos() {
    for(let i=0; i<6; i++) {
        fetch("https://jsonplaceholder.typicode.com/photos/" + i)
            .then(function(response) {
                return response.json();
            })
            .then(function(json) {
                console.log(json);

                document.querySelector(".grid-loja .row").appendChild(articleThumbnail(json));
            });
    }
}

function artigoDetail() {
        fetch("https://jsonplaceholder.typicode.com/photos/1")
            .then(function(response) {
                return response.json();
            })
            .then(function(json) {
                console.log(json);

                document.querySelector(".artigo .row").appendChild(article(json));
            });
}

function articleThumbnail(json) {
    let container = document.createElement("div");
    container.classList.add("col-6");

    let link = document.createElement("a");
    link.setAttribute("href", "artigo.html");

    let imagem = document.createElement("img");
    imagem.setAttribute("src", json.thumbnailUrl);
    imagem.setAttribute("alt", json.title);

    let descricao = document.createElement("div");
    descricao.innerText = json.title;

    link.appendChild(imagem);
    link.appendChild(descricao);

    container.appendChild(link);

    return container;
}

function article(json) {
    let container = document.createElement("div");
    container.classList.add("col-4");

    let imagem = document.createElement("img");
    imagem.setAttribute("src", json.url);
    imagem.setAttribute("alt", json.title);

    let descricao = document.createElement("div");
    descricao.innerText = json.title;

    container.appendChild(imagem);

    return container;
}

//albumId = categoria 100/5 = 20, if(seleciona o check 1) { display albumId <= (100/5)*1} else if ...
//id = preço map(x, 0, 5000, 0, 50) if(input = valor) {display x < valor}
//?  = cor