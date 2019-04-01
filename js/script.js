const changeNavOnScroll = () => {
    let nav = document.querySelector('.navWrapper');
    let navLogo = document.querySelector('.navLogo');
    let items = document.querySelectorAll('.navItem');
    let itemWrapper = document.querySelectorAll('ul')[0];

    itemWrapper

    if(window.scrollY > 150){

        //Nav
        nav.style.backgroundColor = 'white';
        nav.style.position = 'fixed';
        nav.style.height = '50px';
        //Logo
        navLogo.innerHTML = 'TM.'
        navLogo.style.padding = '1%';
        navLogo.style.color = 'black';
        //Itens
        itemWrapper.style.padding = '1.5%';

        for(let i = 0; i < items.length;i++){
            items[i].style.color = "black";
        }

    }else if(window.scrollY < 150){
        //Nav
        nav.style.backgroundColor = 'transparent';
        nav.style.position = 'absolute';

        //Logo
        navLogo.innerHTML = '<h4 class="navLogo">Travel <br> <span>M.A.T.E</span></h4>';
        navLogo.style.padding = '5%';
        navLogo.style.color = 'black';

        //Items
        itemWrapper.style.padding = '5%';

        for(let i = 0; i < items.length;i++){
            items[i].style.color = "white";
        }
    }
}

window.addEventListener('scroll', changeNavOnScroll)