
function toggleText() {
    var textshow = document.querySelector('.textshow');
    var texthide = document.querySelector('.texthide');
    if (texthide.style.display === 'none') {
        texthide.style.display = 'block';
        textshow.style.display = 'none';
    } else {
        texthide.style.display = 'none';
        textshow.style.display = 'block';
    }
}