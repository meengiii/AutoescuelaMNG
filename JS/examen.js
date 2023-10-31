window.addEventListener("load",function () {
    var divExamen = document.getElementById("examen");
    var divExamen = document.getElementById("echo");
    function comenzar() 
    {
        fetch("plantillas/Plantilla.html")
            .then(x => x.text())
            .then(y => {
                var contenedor = document.createElement("div");
                contenedor.innerHTML = y;
                var pregunta = contenedor.firstChild;
                fetch("servidor/preguntas.json")
                    .then(x=>x.json())
                    .then(y=>{
                        for (let i = 0; i < y.length; i++) 
                        {
                            var pregAux = pregunta.cloneNode(true);
                            pregAux.getElementsByClassName("enunciado")[0].innerHTML=y[i].pregunta;
                            var resp=pregAux.querySelectorAll(".rep");
                            for (let j = 0; j < resp.length; j++) 
                            {
                                resp[j].innerHTML=y[i].respuestas[j];
                                pregAux.querySelectorAll(".opciones input")[j].setAttribute("name", "rep" +(i+1));
                            }
                            divExamen.appendChild(pregAux);    
                        }
                    })
            })
    }
    comenzar();
})