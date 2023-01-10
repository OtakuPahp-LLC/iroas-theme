window.onload = () => {
    
    const headerSticky = document.querySelector('.header-sticky');
    const hSFirstChild = document.querySelector('.header-sticky > div'); 
    const logotipoImagen = document.querySelector('.logotipo-imagen figure');
    
    
    if(document.querySelector('body').clientWidth < 600) {
        headerSticky.style.height = '82px'; 
    } else {
        headerSticky.style.height = '116px';
    }
      
    window.addEventListener('scroll', (e) => {
      
        if(document.querySelector('body').clientWidth < 600) {
            return;
        }
      
        headerSticky.style.height = '116px'; 
      
        if (window.pageYOffset > 0) {  
            logotipoImagen.style.maxWidth = '145px';
            headerSticky.style.height = '92px';
            hSFirstChild.style.boxShadow = '0px 5px 14px 0px rgb(0 0 0 / 20%)';  
        }
    
        if (window.pageYOffset <= 0) {  
            logotipoImagen.style.maxWidth = '220px'; 
            headerSticky.style.height = '116px'; 
            hSFirstChild.style.boxShadow = 'unset';  
        }
    });
    
    // Cerrar la tabla de contenidos al hacer click en un enlace de la misma
    if( document.querySelector('.tabla-de-contenidos-movil') ) {
        const a1 = document.querySelectorAll('.tabla-de-contenidos-movil .kb-table-of-content-list li a');
        const a2 = document.querySelector('.tabla-de-contenidos-movil');
    
        a1.forEach(enlace => {
            enlace.addEventListener('click', cerrarTablaDeContenidos);
        });
        
        function cerrarTablaDeContenidos(e) {
            if( a2.classList.contains('kb-toc-toggle-active')) {
                a2.classList.remove('kb-toc-toggle-active');
                a2.classList.add('kb-toc-toggle-hidden');
            }
        }
    }
    
}