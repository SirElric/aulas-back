"use restrict"

const openCuriosity = () => {
    document.getElementById('admin-curiosity').style.display="block";
    document.getElementById('admin-about').style.display="none";
    document.getElementById('admin-localization').style.display="none";
}
const openAbout = () => {
    document.getElementById('admin-about').style.display="block";
    document.getElementById('admin-curiosity').style.display="none";
    document.getElementById('admin-localization').style.display="none";
}
const openLocalization = () => {
    document.getElementById('admin-localization').style.display="block";
    document.getElementById('admin-curiosity').style.display="none";
    document.getElementById('admin-about').style.display="none";
}

