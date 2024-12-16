document.addEventListener("DOMContentLoaded", function() {

    const articulos = [
        {
            id: 1,
            titulo: "Importancia de una Dieta Balanceada",
            imagen: "./Img/art-1.jpeg",
            parrafo1: "Una dieta balanceada es clave para mantener un cuerpo sano y lleno de energía. Esto significa consumir alimentos en las proporciones correctas de carbohidratos, proteínas y grasas saludables, junto con vitaminas y minerales esenciales. Una dieta equilibrada no solo ayuda a mantener un peso adecuado, sino que también fortalece el sistema inmunológico y reduce el riesgo de enfermedades crónicas como diabetes y problemas cardíacos. Además, al mantener un equilibrio adecuado en la alimentación, el cuerpo obtiene todos los nutrientes necesarios para realizar funciones vitales como la regeneración celular, la producción de energía y la reparación de tejidos",
            parrafo2: "Las proteínas son esenciales para construir y reparar tejidos, mientras que los carbohidratos son la principal fuente de energía del cuerpo. Las grasas saludables, por su parte, son fundamentales para el funcionamiento del cerebro y la absorción de ciertas vitaminas. Es importante evitar los extremos: consumir en exceso cualquiera de estos grupos puede llevar a desequilibrios en el organismo. Por ejemplo, un exceso de carbohidratos simples puede provocar picos de azúcar en sangre, mientras que una ingesta descontrolada de grasas saturadas podría contribuir al desarrollo de enfermedades cardiovasculares.",
            parrafo3: "Otro aspecto crucial de una dieta balanceada es el consumo de frutas y verduras, las cuales están repletas de vitaminas, minerales y antioxidantes. Estos no solo mejoran la función celular, sino que también ayudan a combatir el daño causado por los radicales libres, reduciendo así el envejecimiento prematuro y el riesgo de enfermedades. Las frutas y verduras también aportan fibra, un componente esencial para la salud digestiva y el control del apetito.",
        },
        {
            id: 2,
            titulo: "Beneficios de Comer Frutas y Verduras",
            imagen: "./Img/art-2.jpeg",
            parrafo1: "Las frutas y verduras son esenciales en una dieta saludable, ya que son fuentes ricas de vitaminas, minerales y antioxidantes. Cada fruta y verdura aporta nutrientes únicos, como la vitamina C en las naranjas, el potasio en los plátanos o el hierro en las espinacas. Estas sustancias no solo mejoran la función celular, sino que también refuerzan el sistema inmunológico, ayudando al cuerpo a combatir infecciones y enfermedades. Además, las frutas y verduras son bajas en calorías, lo que las convierte en una opción ideal para quienes desean mantener un peso saludable sin comprometer el valor nutricional de sus comidas.",
            parrafo2: "El consumo regular de frutas y verduras está asociado con una reducción significativa del riesgo de enfermedades crónicas, como hipertensión, diabetes tipo 2 y ciertos tipos de cáncer. Esto se debe a los antioxidantes y fitoquímicos que contienen, los cuales neutralizan los radicales libres que dañan las células y pueden llevar al desarrollo de estas enfermedades. Por ejemplo, los tomates contienen licopeno, un compuesto que ayuda a prevenir el cáncer de próstata, mientras que los arándanos están cargados de antioxidantes que mejoran la salud del cerebro y el sistema cardiovascular.",
            parrafo3: "Además de sus beneficios para la salud, las frutas y verduras son una fuente excelente de fibra dietética, que es esencial para el buen funcionamiento del sistema digestivo. La fibra promueve la regularidad intestinal y previene problemas como el estreñimiento. También ayuda a mantener la sensación de saciedad, lo que puede ser muy útil para quienes intentan controlar su peso. Los alimentos ricos en fibra también ayudan a reducir los niveles de colesterol y a estabilizar los niveles de azúcar en la sangre.",
        },
        {
            id: 3,
            titulo: "Importancia de una Dieta Balanceada",
            imagen: "./Img/art-3.jpeg",
            parrafo1: "Las proteínas son nutrientes esenciales para el cuerpo humano, responsables de la construcción y reparación de tejidos, así como de la producción de enzimas y hormonas vitales. Estos compuestos están formados por aminoácidos, algunos de los cuales son esenciales y deben ser obtenidos a través de la dieta, ya que el cuerpo no puede producirlos por sí mismo. Consumir suficientes proteínas es fundamental para mantener la masa muscular, especialmente en personas que realizan actividad física regular o están en procesos de recuperación tras una lesión.",
            parrafo2: "Las fuentes de proteínas se dividen en dos categorías: animales y vegetales. Las proteínas de origen animal, como las que se encuentran en carnes, huevos y lácteos, suelen ser completas, ya que contienen todos los aminoácidos esenciales. Por otro lado, las proteínas de origen vegetal, como las legumbres, los frutos secos y los granos integrales, pueden no ser completas, pero se pueden combinar para obtener todos los nutrientes necesarios. Por ejemplo, combinar arroz y frijoles resulta en una proteína completa y balanceada.",
            parrafo3: "Además de su papel estructural en el cuerpo, las proteínas tienen un efecto significativo en la regulación del apetito. Al ser más saciantes que los carbohidratos y las grasas, ayudan a controlar el hambre y a mantener un peso saludable. Esto es especialmente útil en dietas diseñadas para perder grasa corporal, ya que un mayor consumo de proteínas puede prevenir la pérdida de masa muscular mientras se reduce la grasa.",
        }
    ];

    const menuSelector = document.querySelector('.menu-selector');
    const contenido = document.querySelector('.contenido-n');
    

    function cargarArticulo(id) {

        const articulo = articulos.find(a => a.id === id);
        

        if (articulo) {
            contenido.innerHTML = `
                <h1>${articulo.titulo}</h1>
                <div class="articulo">
                    <img src="${articulo.imagen}" alt="${articulo.titulo}">
                    <p>${articulo.parrafo1}</p>
                    <p>${articulo.parrafo2}</p>
                    <p>${articulo.parrafo3}</p>
                </div>
            `;
        }
    }

    articulos.forEach(articulo => {
        const enlace = document.createElement('a');
        enlace.href = "#";
        enlace.classList.add('tema');
        enlace.innerHTML = `
            <img src="${articulo.imagen}" alt="${articulo.titulo}">
            <h2>${articulo.titulo}</h2>
        `;
        
        enlace.addEventListener('click', function(event) {
            event.preventDefault(); 
            cargarArticulo(articulo.id); 
        });

        menuSelector.appendChild(enlace);
    });

    cargarArticulo(1);
});
