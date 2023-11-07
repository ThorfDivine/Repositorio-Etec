
let points
    points = document.querySelectorAll('.redPoint')
        // console.log('points: ', points);

let refresh
    refresh = document.querySelector("#refresh")
    console.log('refresh: ', refresh);
    
let add
    add = document.querySelectorAll('.add')
        // console.log('add: ', add);
let pr
    pr = document.querySelector("#nivel")
    let nivel
        nivel = pr.querySelector('i')

let comp
    comp = document.querySelector("#competenciaId")
// console.log('comp: ', comp);
    let compID
        compID = comp.querySelector('h2').innerHTML
            // console.log('compID: ', compID);

var quant = function (e) {

                let where = 0

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

                // console.log('e.target.id: ', e.target.id);
            }
        
    for (let index = 0; index < points.length; index++) {
        const element = points[index];
        
        element.addEventListener('click', quant)
        // element.addEventListener('mouseover', quant)

    }

    refresh.addEventListener('click', quant)