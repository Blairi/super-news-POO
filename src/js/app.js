document.addEventListener("DOMContentLoaded", () =>{
    btn_top();
    api_banderas();
});

const btn_top = () =>{
    const btn = document.querySelector(".top-button");
    btn.addEventListener("click", (e) => {
        e.preventDefault();
        const seccion = document.querySelector(e.target.attributes.href.value);
        seccion.scrollIntoView({
            behavior: 'smooth'
        });
    });
}


const api_banderas = async () => {
    const url = "https://flagcdn.com/es/codes.json";
    const resultado = await fetch(url);
    const db_codes = await resultado.json();
    
    const paises = document.querySelectorAll(".nombre-pais");
    const banderas = document.querySelectorAll(".bandera");
    let code_banderas = [];
    
    paises.forEach( ( pais ) => {
        for (let clave in db_codes){
            if(db_codes[clave] == pais.textContent){

                const code = clave;
                code_banderas.push(code.toString());

            }
        }
    });

    for (let i = 0; i < banderas.length; i++) {
        const bandera_img = banderas[i];
        const code_bandera = code_banderas[i]
        let url = `https://flagcdn.com/h240/${code_bandera}.png`;
        bandera_img.setAttribute("src", url);
    }
}