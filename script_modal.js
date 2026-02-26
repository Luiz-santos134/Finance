
let modalObj = document.querySelector(".modal");

function transitionCreation(){
    let tipo = document.getElementById("tipo").value;
    let categoria = document.getElementById("categoria").value;
    let valor = document.getElementById("valor").value;
    let data = document.getElementById("data").value;
    let descricao = document.getElementById("descricao").value;

    if(tipo && categoria && valor && data && descricao){
        let transition = {
            tipo: tipo,
            categoria: categoria,
            valor: valor,
            data: data,
            descricao: descricao
        }
        console.log(transition);
        modalObj.style.display = "none";
        
    }else{
        alert("Preencha todos os campos para adicionar a transação!");
    }
}