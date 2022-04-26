(function(){
    let boite__modale = document.querySelector('.boite__modale')
    let boite__modale__ferme = document.querySelector('.boite__modale__ferme')
    let boite__modale__texte = document.querySelector('.boite__modale__texte')


    let cours__desc__suite = document.querySelectorAll('.cours__desc__suite')

    

    let collection_bout_suite = document.querySelectorAll('.cours__desc__suite')
    console.log('collection_bout_suite = ' + collection_bout_suite.length)

    for (const bouton of collection_bout_suite) {
        bouton.addEventListener('mousedown', function(){
            console.log(this.tagName)
            boite__modale.classList.add('boite__modale__ouvrir');
            boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML
            // remove contraire de add
        })
    }

    boite__modale__ferme.addEventListener('mousedown', function(){
        boite__modale.classList.remove('boite__modale__ouvrir');
    })


})()