
const publications = document.querySelectorAll('.publication') 

const monde = document.querySelectorAll('.monde')
const mondeButton = document.getElementById('mondetag')

mondeButton.addEventListener('click', () => {
    //console.log = affiche le message "tappuie" dans la console du navigateur. Il est utilisé à des fins de débogage pour vérifier si l'événement de clic fonctionne correctement.
    console.log('tappuie')
    publications.forEach(e => {
        console.log(e)
        e.classList.remove('publication')
        e.classList.add('none')
        monde.forEach(element =>{
            element.classList.add('publication')
            element.classList.remove('none')
        })
    });
})
//En résumé, ce code implémente un comportement lorsqu'un bouton avec l'ID "mondetag" est cliqué. Lors du clic, il masque les éléments ayant la classe "publication" et ajoute la classe "none", puis affiche les éléments ayant la classe "monde" en leur enlevant la classe "none". Cela permet de filtrer et d'afficher un certain type de contenu en fonction de l'interaction de l'utilisateur avec la page.

const sante = document.querySelectorAll('.sante')
const santeButton = document.getElementById('santetag')

santeButton.addEventListener('click', () => {
    console.log('tappuie')
    publications.forEach(e=> {
        console.log(e)
        e.classList.remove('publication')
        e.classList.add('none')
        sante.forEach(element =>{
            element.classList.add('publication')
            element.classList.remove('none')
        })
    });
})


const football = document.querySelectorAll('.football')
const footballButton = document.getElementById('footballtag')

footballButton.addEventListener('click', () => {
    console.log('tappuie')
    publications.forEach(e=> {
        console.log(e)
        e.classList.remove('publication')
        e.classList.add('none')
        football.forEach(element =>{
            element.classList.add('publication')
            element.classList.remove('none')
        })
    });
})


const politique = document.querySelectorAll('.politique')
const politiqueButton = document.getElementById('politiquetag')

politiqueButton.addEventListener('click', () => {
    console.log('tappuie')
    publications.forEach(e=> {
        console.log(e)
        e.classList.remove('publication')
        e.classList.add('none')
        politique.forEach(element =>{
            element.classList.add('publication')
            element.classList.remove('none')
        })
    });
})

const emploi = document.querySelectorAll('.emploi')
const emploiButton = document.getElementById('emploitag')

emploiButton.addEventListener('click', () => {
    console.log('tappuie')
    publications.forEach(e=> {
        console.log(e)
        e.classList.remove('publication')
        e.classList.add('none')
        emploi.forEach(element =>{
            element.classList.add('publication')
            element.classList.remove('none')
        })
    });
})


const actualite = document.querySelectorAll('.actualite')
const actualiteButton = document.getElementById('actualitetag')

actualiteButton.addEventListener('click', () => {
    console.log('tappuie')
    publications.forEach(e=> {
        console.log(e)
        e.classList.remove('publication')
        e.classList.add('none')
        actualite.forEach(element =>{
            element.classList.add('publication')
            element.classList.remove('none')
        })
    });
})

const jeuxvideo = document.querySelectorAll('.jeuxvideo')
const jeuxvideoButton = document.getElementById('jeuxvideotag')

jeuxvideoButton.addEventListener('click', () => {
    console.log('tappuie')
    publications.forEach(e=> {
        console.log(e)
        e.classList.remove('publication')
        e.classList.add('none')
        jeuxvideo.forEach(element =>{
            element.classList.add('publication')
            element.classList.remove('none')
        })
    });
})


const technologie = document.querySelectorAll('.technologie')
const technologieButton = document.getElementById('technologietag')

technologieButton.addEventListener('click', () => {
    console.log('tappuie')
    publications.forEach(e=> {
        console.log(e)
        e.classList.remove('publication')
        e.classList.add('none')
        technologie.forEach(element =>{
            element.classList.add('publication')
            element.classList.remove('none')
        })
    });
})


const nature = document.querySelectorAll('.nature')
const natureButton = document.getElementById('naturetag')

natureButton.addEventListener('click', () => {
    console.log('tappuie')
    publications.forEach(e=> {
        console.log(e)
        e.classList.remove('publication')
        e.classList.add('none')
        nature.forEach(element =>{
            element.classList.add('publication')
            element.classList.remove('none')
        })
    });
})



const travail = document.querySelectorAll('.travail')
const travailButton = document.getElementById('travailtag')

travailButton.addEventListener('click', () => {
    console.log('tappuie')
    publications.forEach(e=> {
        console.log(e)
        e.classList.remove('publication')
        e.classList.add('none')
        travail.forEach(element =>{
            element.classList.add('publication')
            element.classList.remove('none')
        })
    });
})





