(function() {
    //console.log("vive la boite carrousel");
    let boite__carrousel = document.querySelector(".boite__carrousel");
    let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation");

    let galerie__img = document.querySelectorAll('.galerie img');
    let elmImg = document.createElement('img');
    boite__carrousel.append(elmImg);
    // On parcour chacune des img de la galerie 
    let index = 0;
    for (const img of galerie__img) {
        let bouton = document.createElement('button');
        bouton.dataset.index = index++;
        boite__carrousel__navigation.append(bouton);

        bouton.addEventListener('mousedown', function(){
            elmImg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'));
        })

        //console.log(bout.tagName)
        img.addEventListener('mousedown', function(){
            //console.log(this.parentNode.parentNode.className)
            boite__carrousel.classList.add('ouvrir')
            //console.log(this.getAttribute("src"));
            //console.log(boite__carrousel.classList)
            //console.log(this.parentNode.parentNode.children[0].innerHTML)
            //cours__desc__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML

            elmImg.setAttribute('src', this.getAttribute("src"));
        })
    }
    const btnFermerModal = document.querySelector('.boite__carrousel__fermeture');
        btnFermerModal.addEventListener('mousedown', () => boite__carrousel.classList.remove('ouvrir'));
})()