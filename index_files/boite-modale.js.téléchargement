(function() {
    //console.log("vive la boite modale");
    let boite__modale = document.querySelector(".boite__modale");
    let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir');
    let cours__desc__texte = document.querySelector('.boite__modale__texte');
    //console.log(cours__desc__ouvrir.length);

    for (const bout of cours__desc__ouvrir) {
        //console.log(bout.tagName)
        bout.addEventListener('mousedown', function(){
            //console.log(this.parentNode.parentNode.className)
            boite__modale.classList.add('ouvrir')
            //console.log(boite__modale.classList)
            //console.log(this.parentNode.parentNode.children[0].innerHTML)
            cours__desc__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML
        })
    }
    const btnFermerModal = document.querySelector('.boite__modale__fermeture');
        btnFermerModal.addEventListener('mousedown', () => boite__modale.classList.remove('ouvrir'));
})()