const mostrarReloj =()=>{
    let fecha = new Date();
    let hr = formatoHora(fecha.getHours()); //horas
    let min = formatoHora(fecha.getMinutes()); // minutos
    let seg = formatoHora(fecha.getSeconds()); //segundos

    document.getElementById('hora').innerHTML =`${hr}:${min}:${seg}`;

    //Procesar la fecha
    const meses = ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'];
    const dias =['Dom','Lun','Mar','Mie','Jue','Vie','Sab'];
    let diasemana= dias[fecha.getDay()];
    let dia = fecha.getDate();
    let mes = meses [fecha.getMonth()];
    let fechaTexto=`${diasemana}, ${dia} ${mes}`;

    document.getElementById('fecha').innerHTML=fechaTexto;

    //toggle funciona como un interruptor 
    document.getElementById('contenedor').classList.toggle('animar');

}
//mostrar los dos digitos en la hora valor 0
const formatoHora =(hora) =>{
    if(hora < 10){
        hora = '0' + hora;
    }
    return hora;
}

//para que se muestre cada segundo
//setInterval: que sirve para ejecutar cierto codigo cada determinado tiempo
setInterval(mostrarReloj,1000);

