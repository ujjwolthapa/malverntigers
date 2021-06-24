document.addEventListener("DOMContentLoaded", () => {
    let text = document.querySelectorAll('#text');
    let text1 =document.querySelectorAll('#text1');
    anime({
        targets: text,
        translateY: [40, 0],
        delay: (el, i) => 500 + 400 * i,
        easing: 'easeInQuad',
        opacity: [0, 1],

    })
    anime({
        targets: text1,
        translateY: [-40, 0],
        delay: (el, i) => 100 + 400 * i,
        easing: 'easeInQuad',
        opacity: [0, 1],

    })
    

})