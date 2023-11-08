    
// criando váriaveis conteiner -> Classificação de competência
let c1; let c2; let c3; let c4; let c5; let c6; let c7; let c8; let c9; let c10; let c11; let c12; let c13; let c14; let c15; let c16; let c17
c1 = 0; c2 = 0; c3 = 0; c4 = 0; c5 = 0; c6 = 0; c7 = 0; c8 = 0; c9 = 0; c10 = 0; c11 = 0; c12 = 0; c13 = 0; c14 = 0; c15 = 0; c16 = 0; c17 = 0
    var valorCompetencias = [c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12, c13, c14, c15, c16, c17]

// marcador:
var onde
onde = 0

// Conteiners de competência
let allCoteiners
allCoteiners = document.querySelectorAll('.conteinerComp')

let points
points = allCoteiners[onde].querySelectorAll('.lvl')
// console.log('points: ', points);
let allPoints
allPoints = document.querySelectorAll('.lvl')
// console.log('points: ', points);

for (let index = 0; index < allCoteiners.length; index++) {

    const element = allCoteiners[index];
    // fechando todos os conteiners
        element.style.display = 'none'
    
}

// Abrindo 1° conteiner
allCoteiners[0].style.display = 'flex'

let refresh
refresh = allCoteiners[onde].querySelector("#refresh")
// console.log('refresh: ', refresh);

let add
add = document.querySelectorAll('.add')
// console.log('add: ', add);
let pr
pr = allCoteiners[onde].querySelector("#nivel")
let nivel
nivel = pr.querySelector('i')

let mudarComp
mudarComp = document.querySelectorAll('.mudarComp')

// let comp
//     comp = document.querySelector("#competenciaId")
// console.log('comp: ', comp);
// let compID
//     compID = comp.querySelector('h2').innerHTML
    // console.log('compID: ', compID);

var quant = function (e) {

        let where = 0
        console.log('cheguei1');

        switch (e.target.id) {
            case 'u':
                    where = 1
                    nivel.innerHTML = where
                break;
            case 'd':
                    where = 2
                    nivel.innerHTML = where
                break;
            case 't':
                    where = 3
                    nivel.innerHTML = where
                break;
            case 'q':
                    where = 4
                    nivel.innerHTML = where
                break;
            case 'c':
                    where = 5
                    nivel.innerHTML = where
                break;
            case 'refresh':
                    where = 0
                    nivel.innerHTML = where
                break;
        }

        for (let index = 0; index < points.length; index++) {
            const element = points[index];
                element.classList.remove('red')
        }

        for (let index = 0; index < points.length; index++) {
            const element = points[index];
                if (index < where) {
                    element.classList.add('red')
                }
        }

        for (let index = 0; index < valorCompetencias.length; index++) {
            var element = valorCompetencias[index];

            if (index == onde) {
                valorCompetencias[onde] = where
                console.log(valorCompetencias[onde]);

                cTitle = allCoteiners[onde].querySelector('#cTitle')
                    competencia = cTitle.querySelector('h1').innerHTML

                    console.log('c'+onde,'='+competencia);
                    console.log('c'+onde, valorCompetencias[onde]);
            }
            
        }

        // console.log('e.target.id: ', e.target.id);
    }

    let change =  function (e) {

        switch (e.target.id) {
            case 'next':
                if (onde == 17) {
                    onde = 0
                }else{
                    onde++
                }
                break;
            case 'back':
                if (onde == 0) {
                    onde = 17
                }else{
                    onde--
                }
                break;


        }

        for (let index = 0; index < allCoteiners.length; index++) {
            const element = allCoteiners[index];
                if (index == onde) {
                    element.style.display = 'flex'
                }else{
                    element.style.display = 'none'
                }
        }
        reAdd()
    }

        for (let index = 0; index < points.length; index++) {
            const element = points[index];
            
            element.addEventListener('click', quant)
            // element.addEventListener('mouseover', quant)
        }

        for (let index = 0; index < mudarComp.length; index++) {
            const element = mudarComp[index];

            element.addEventListener('click', change)
            
        }
        
        refresh.addEventListener('click', quant)



function reAdd() {
points = allCoteiners[onde].querySelectorAll('.lvl')
refresh = allCoteiners[onde].querySelector("#refresh")

comp = allCoteiners[onde].querySelector("#competenciaId")
compID = comp.querySelector('h2').innerHTML

pr = allCoteiners[onde].querySelector("#nivel")
nivel = pr.querySelector('i')

for (let index = 0; index < points.length; index++) {
    const element = points[index];
    
    element.addEventListener('click', quant)
    // element.addEventListener('mouseover', quant)
}
refresh.addEventListener('click', quant)
}