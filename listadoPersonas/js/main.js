const Personas = [
    new Persona('Elkin','Murillo'),
    new Persona('Jose','Perez')
];

function mostrarPersona(){
    console.log('mostrar persona...');
    let texto ='';
    for(let persona of Personas){
        console.log(persona);
        texto += `<li>${persona.nombre} ${persona.apellido}</li>`;
    }

    document.getElementById('personas').innerHTML=texto;
}

function agregapersona(){
    const forma = document.forms['forma'];
    const nombre = forma['nombre'];
    const apellido = forma['apellido'];

    if(nombre.value != '' && apellido.value !=''){
    const persona = new Persona(nombre.value, apellido.value);
    console.log(persona);
    Personas.push(persona);
    mostrarPersona();
    }else{
        alert('No puedes agregar datos vacios');
    }


}