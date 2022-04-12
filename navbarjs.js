fetch('navbar.php')
    .then(res => res.text().then(text => {
    console.log("navbarr   ...")
    let oldelem = document.querySelector("script#replace_with_navbar");
    let newelem = document.createElement("div");
    newelem.innerHTML = text;
    oldelem.parentNode.replaceChild(newelem, oldelem);
}))
