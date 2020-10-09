const prueba = [
    [20, "Andres","Carmona","Lozano"],
    [30, "test","arrayyy","dimensional"],
    [40, "pepep","asdfas","asdfasdf"]
]

prueba.forEach(array => {
    console.log(`Edad: ${array[0]}, Nombre: ${array[1]}, Primer apellido: ${array[2]}, Segundo apellido: ${array[3]}`);
    console.log(array[1]);
})

console.table(prueba)

