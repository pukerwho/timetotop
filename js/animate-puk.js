function onEntry(entry) {
  entry.forEach(change => {
    if (change.isIntersecting) {
      change.target.classList.add('totop-show');
    }
  });
}

let options = {
  threshold: [0.5],
};
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.totop-animate');

for (let elm of elements) {
  observer.observe(elm, {
  });
}


let svg = document.querySelector('.welcome-block .card_box svg circle');
svg.setAttribute('class', 'outer totop-show');
console.log(svg)

document.querySelector('.welcome-block .bigball_green').classList.add('totop-show');
