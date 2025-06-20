
let postv = document.getElementById("postvacancy");
let addadmin = document.getElementById("addadmin");
let adminlist = document.getElementById("adminlist");
let postlist= document.getElementById("postlist");
let userpost= document.getElementById("userpost");

function nav(id){
    postv.style.display="none";
    addadmin.style.display="none";
    adminlist.style.display="none";
    postlist.style.display="none";
    userpost.style.display="none";
    let show = document.getElementById(id);
    show.style.display="block";
 
}
postv.style.display="none";
    addadmin.style.display="block";
    adminlist.style.display="none";
    postlist.style.display="none";
    userpost.style.display="none";
    let show = document.getElementById(id);

