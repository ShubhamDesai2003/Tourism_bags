window.onscroll = () => {

    if(window.scrollY > 0){
      document.querySelector('.nav').classList.add('active');
    }else{
      document.querySelector('.nav').classList.remove('active');
    }
  
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
  }