const filled= document.querySelector('.filled');

function update (){
    filled.computedStyleMap.width = `${((window.scrollY) / (document.body.scrollHeight - windows.innerHeight) *100)}%`
    requestAnimationFrame(update);
}
update();