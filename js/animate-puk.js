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
};


let svg = document.querySelector('.welcome-block .card_box svg circle');
if (svg) {
	svg.setAttribute('class', 'outer totop-show');	
};

let bigBallGreen = document.querySelector('.welcome-block .bigball_green');
if (bigBallGreen) {
	bigBallGreen.classList.add('totop-show');
};

let blogAnimation = document.querySelector('.blog_bg');
if (blogAnimation) {
	blogAnimation.classList.add('totop-show');
};

let blogImg = document.querySelector('.blog_img');
if (blogImg) {
	blogImg.classList.add('totop-show');
};

let blogContent = document.querySelector('.blog_content');
if (blogContent) {
	blogContent.classList.add('totop-show');
}