function showSection(sectionID){

    const sections = document.querySelectorAll('.content');
    const home = document.getElementById('home');

    sections.forEach(sec => {
        sec.style.display = "none";
    });

    home.style.display = "none";

    const active = document.getElementById(sectionID);
    if(active){
        active.style.display = "block";
    }
}