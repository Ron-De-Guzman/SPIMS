const sidebarToggle = document.querySelector(".sidebar-toggle");
const sidebarActive = document.querySelector(".sidebar");
const toggle = document.querySelector(".sidebar-toggle i");


sidebarToggle.addEventListener("click", function(){
    sidebarActive.classList.toggle("active");
    
    
    
    if (toggle.classList.contains ('bxs-chevron-left')){
      toggle.classList.remove("bxs-chevron-left");
      toggle.classList.add("bx-chevrons-right");
    }
    else{
        toggle.classList.add("bxs-chevron-left");
      toggle.classList.remove("bx-chevrons-right");
    }
});