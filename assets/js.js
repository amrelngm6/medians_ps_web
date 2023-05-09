function getCenter(sky) {
  const w = sky.clientWidth
  const h = sky.clientHeight
  return {
    x: parseInt(w / 2),
    y: parseInt(h / 2),
  }
}

function getDot(x, y, group) {
  const size = Math.round(Math.random() + 2)
  const dot = document.createElement('span')
  dot.classList.add('stars-star', `stars-axis-${group}`, `stars-size-${size}`)
  dot.style.top = `${y}px`
  dot.style.left = `${x}px`
  return dot.cloneNode()
}

function init() {
  const sky = document.querySelector('#stars-sky')
  sky.innerHTML = ''
  for (let i = 1; i < 180; i++) {
    const { x, y } = getCenter(sky)
    const dot = getDot(x, y, i)
    sky.appendChild(dot)
  }
}

window.onload = init


jQuery('.scroll-arrow').on('click', function(){
  let div = jQuery(this).attr('data-target');
  jQuery('html, body').animate({
        scrollTop: jQuery("#"+div).offset().top - 200
    }, 2000);
});

jQuery('#contact-form').on('submit', function(){
  alert(1)
});

jQuery('.scroll-arrow-mob').on('click', function(){
  let div = jQuery(this).attr('data-target');
  jQuery('html, body').animate({
        scrollTop: jQuery("#"+div).offset().top - 50
    }, 2000);
});