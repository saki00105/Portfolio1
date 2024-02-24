// //ローディング画面

const loading = document.querySelector('.l-loader');
const penguin = document.querySelector('.p-header__img');
const header = document.querySelector('.p-header');

// // アニメーションを開始する関数
function startAnimation() {
  const tl = gsap.timeline();

  // .p-header__imgのアニメーション
  tl.to(penguin, {
    duration: 4.5,
    ease: "elastic.out(1, 0.3)",
    y: -250,
    opacity: 1
  });

  // .p-headerのアニメーション
  tl.to(header, {
    duration: 1,
    opacity: 1,
    // transform: 'translateY(2)',
    // y: -250,
    ease: 'ease-out',
  }, '-=4'); // -=2 は、前のアニメーションが2秒かかるため、それよりも2秒早く開始することを指定しています。
}

// // ウィンドウのloadイベントのリスナー
window.addEventListener('load', () => {
  // ローディングが完了したらクラスを追加
  // loading.classList.add('l-loaded', 'p-loaded');
  // ローディングが完了した後にアニメーションを開始する関数を呼び出す
  startAnimation();
});

//shape
function togglePageTopAnimation() {
  const scroll = window.scrollY || document.documentElement.scrollTop;
  const pageTop = document.querySelectorAll('.c-appear');

  pageTop.forEach((element) => {
    const shouldMoveUp = scroll >= 550;
    element.classList.toggle('UpMove', shouldMoveUp);
    element.classList.toggle('DownMove', !shouldMoveUp);
  });
}

window.addEventListener('scroll', togglePageTopAnimation);


//スクロール表示
// document.addEventListener('DOMContentLoaded', function() {
  ScrollReveal({ reset: false, distance: '2rem', duration: 2000, viewFactor: 0.3});
  ScrollReveal().reveal("h2, .p-single__title, .p-skills__left", { delay: 500, origin: 'bottom' });
  ScrollReveal().reveal(".c-fw-500", { delay: 800, origin: 'bottom' });
  ScrollReveal().reveal(".p-skills__right, #p-skills__gallery-img, .p-works__card", { delay: 300, origin: 'bottom', interval: 200 });
  ScrollReveal().reveal(".snow-monkey-form", { delay: 300, origin: 'bottom' });
// });
console.log('テスト');

//ハンバーガーメニュー
document.addEventListener('DOMContentLoaded', function () {
  const pShapeNav = document.querySelector('.p-shape__nav, .p-nav__hamburger');
  const hamburgers = document.querySelectorAll('.p-shape__nav, .p-nav, .p-nav__hamburger, .c-line__hamburger');

  pShapeNav.addEventListener('click', () => {
    hamburgers.forEach(hamburger => {
      if (hamburger.classList.contains('is-active')) {
        hamburger.classList.remove('is-active');
      } else {
        hamburger.classList.add('is-active');
      }
    });
  });
});



//リサイズ
document.addEventListener('DOMContentLoaded', function() {
  window.addEventListener('resize', function() {
      document.querySelectorAll('.p-shape__nav, .p-nav, .p-nav__hamburger, .c-line__hamburger').forEach(function(element) {
          element.classList.remove('is-active');
          document.body.classList.remove("c-hidden");

      });
  });
});
console.log("ナビ");

document.addEventListener('DOMContentLoaded', function () {
  document.querySelector(".p-nav__hamburger").addEventListener('click', function () {
    if (document.body.classList.contains("c-hidden")) {
      document.body.classList.remove("c-hidden");

    } else {
      document.body.classList.add("c-hidden");
    }
  });
});




//氷の表示
const options = { threshold: 0.2 };

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const targetElement = entry.target;
      if (targetElement.classList.contains('p-skills__center') || targetElement.classList.contains('p-contact__center')) {
        playAnimation(targetElement);
        observer.unobserve(targetElement);
      }
    }
  });
}, options);

const playAnimation = (element) => {
  gsap.to(element, { duration: 4.5, ease: "elastic.out(1, 0.3)", y: -250, opacity: 1, paused: true }).play();
};

const frozenCenter = document.querySelector('.p-skills__center');
const frozenContactCenter = document.querySelector('.p-contact__center');

console.log('frozenCenter:', frozenCenter);
console.log('frozenContactCenter:', frozenContactCenter);

// 監視対象の要素をObserverに追加
observer.observe(frozenCenter);
observer.observe(frozenContactCenter);



