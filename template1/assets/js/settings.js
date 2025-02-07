var menuBtn = document.querySelectorAll(".navmenu-btn");
menuBtn.forEach(element => {
    element.addEventListener("click", function(e){
        e.preventDefault();
        console.log('Menu Clicked')
    
        let el = document.getElementById("navmenu");
        let el2 = document.getElementById("navmenu-2");
        if(el.classList.contains('active')){
            el.classList.remove("active");
        }else{
            el.classList.add("active");
        }
        if(el2.classList.contains('active')){
            el2.classList.remove("active");
        }else{
            el2.classList.add("active");
        }
        
    })
})

