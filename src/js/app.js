document.addEventListener("DOMContentLoaded", () =>{
    btn_top();
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